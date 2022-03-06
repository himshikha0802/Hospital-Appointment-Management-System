<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Carbon;

class StaffController extends Controller
{
    public $uploadPath="uploads2/staff";
    public function create(){
        $staff=Staff::get();
        return view('admin.staff.create', compact('staff'));
    }
    public function index(){
        $staff=Staff::get();
        return view('admin.staff.index',compact('staff'));
    }
    public function edit($id){
        $staff=Staff::find($id);
        return view('admin.staff.edit',compact('staff'));
    }
    public function store(Request $request){//submit grdako request catch grxa
        // dd($request->all());
        // return view('admin.category.store')
        $staff=new Staff();
        $staff->name=$request->get('name');
        $staff->age=$request->get('age');
        $staff->qualification=$request->get('qualification');
        $staff->salary=$request->get('salary');
        $staff->address=$request->get('address');
        $staff->post=$request->get('post');
        $staff->save();
        return redirect()->route('staff.index');

    }
    public function update($id,Request $request){
        $staff=Staff::find($id);

        //dd($request->all());
        $staff->name=$request->get('name');
        $staff->age=$request->get('age');
        $staff->qualification=$request->get('qualification');
        $staff->salary=$request->get('salary');
        $staff->address=$request->get('address');
        $staff->post=$request->get('post');
        $staff->save();
        return redirect()->route('staff.index');

    }
    public function delete($id){
        $staff=Staff::find($id);
        $staff->delete();
        return redirect()->route('staff.index');
    }

}
