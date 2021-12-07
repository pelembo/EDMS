<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Employee;
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
        $employee = Employee::all();
        $employee_active = $employee->where('status', '=', 1)->count();
        $employee_inactive = $employee->where('status', '=', 0)->count();

        $document = Document::all();
        $document_active = $document->count();

        return view('home', compact(
            'employee_active',
            'employee_inactive',
            'document_active',
        ));
    }

}
