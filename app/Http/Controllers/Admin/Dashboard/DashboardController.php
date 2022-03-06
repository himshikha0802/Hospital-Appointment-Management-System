<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Staff;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $totalDoctor=Doctor::count();
        $totalPatient=Patient::count();
        $totalRegister=User::count();
        $totalStaff=Staff::count();
        return view('admin.dashboard.index',compact('totalDoctor','totalPatient','totalRegister','totalStaff'));
}
// public function patient(){
//     $totalPatient=Patient::count();
//     return view('admin.dashboard.index',compact('totalPatient'));
// }


}
