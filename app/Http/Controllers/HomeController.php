<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Employee;
use App\Models\WorkGroup;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee_active = Employee::where('status', '=', 2)->count();
        $employee_inactive = Employee::where('status', '=', 1)->count();

        $workgroup_active = WorkGroup::where('status', '=', 2)->count();
        $workgroup_inactive = WorkGroup::where('status', '=', 1)->count();

        $document_active = Document::count();

        return view('home', compact(
            'employee_active',
            'employee_inactive',
            'document_active',
            'workgroup_active',
            'workgroup_inactive',
        ));
    }

}
