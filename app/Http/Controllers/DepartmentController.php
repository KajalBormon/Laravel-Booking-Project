<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PDF;
use Picqer\Barcode\BarcodeGeneratorPNG;


class DepartmentController extends Controller
{
    public function addDeptInfo(Request $request){
        $request->validate([
            'dept_name' => 'required',
            'photo' => 'required|mimes:png,jpg,jpeg|max:3000'
        ]);

        //$file = $request->file('photo');
        $path = $request->file('photo')->store('image','public');

        Department::create([
            'dept_name' => $request->dept_name,
            'file_name' => $path,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('admin.dashboard')->with('status','Department Information Added Successfully');
    }


    public function showDepartment(){
        $departments = Department::get();
        return view('all_info',compact('departments'));

    }

    public function saveVisit(string $id){
        $info = Department::find($id);

        Visit::create([
            'user_name' => Auth::user()->name,
            'dept_name' => $info->dept_name,
            'file_name' => $info->file_name,
            'dept_id' => $info->id
        ]);

        return redirect()->route('user.pending')->with('status','Your visited Request Sending');
    }

    public function showVisit(){
        $visits = Visit::get();
    
        return view('user_pending',compact('visits'));
    }

    public function adminPending(){
        $admins = Visit::get();
        return view('admin_pending',compact('admins'));
    }


    public function updateData(string $id){
        $fetch_data = Visit::find($id);

        return view('update_data',compact('fetch_data'));
    }

    public function updateRequest(Request $request, $id){

        $update = Visit::find($id);

        $barcodeContent = $update->id.'_'.$update->dept_name;

        //generate QR Code
        $generator = new BarcodeGeneratorPNG();
        $barcodeImg = $generator->getBarcode($barcodeContent, $generator::TYPE_CODE_128);

        $barCodePath = ('image/'.$id.'.png');
        Storage::disk('public')->put($barCodePath, $barcodeImg);

        $update->update([
            'created_at' => $request->created_at,
            'status' => 1,
            'barcode' => $barCodePath
        ]);

        return redirect()->route('admin.pending')->with('status','Approved Visiting Date');
    }

    public function downloadPDF($id){
        $data = ['visit' => Visit::find($id)];

        $pdf = PDF::loadView('pdf',$data);

        return $pdf->stream('document.pdf');


    }



}
