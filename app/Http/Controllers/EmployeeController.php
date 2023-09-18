<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Models\State;
use Response;

class EmployeeController extends AppBaseController
{
    /**
     * Display a listing of the Employee.
     *
     * @param EmployeeDataTable $employeeDataTable
     * @return Response
     */
    public function index(EmployeeDataTable $employeeDataTable)
    {
        return $employeeDataTable->render('employees.index');
    }

    /**
     * Show the form for creating a new Employee.
     *
     * @return Response
     */
    public function create()
    {
        $states = new State;
        return view('employees.create', compact('states'));
    }

    /**
     * Store a newly created Employee in storage.
     *
     * @param CreateEmployeeRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeRequest $request)
    {
        $input = $request->all();

        /** @var Employee $employee */
        $employee = Employee::create($input);

        Flash::success('Employee saved successfully.');

        return redirect(route('employees.index'));
    }

    /**
     * Display the specified Employee.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Employee $employee */
        $employee = Employee::find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        return view('employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified Employee.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Employee $employee */
        $employee = Employee::find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        $states = new State;
        return view('employees.edit', compact('states'))->with('employee', $employee);
    }

    /**
     * Update the specified Employee in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeRequest $request)
    {
        /** @var Employee $employee */
        $employee = Employee::find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        $employee->fill($request->all());
        $employee->save();

        Flash::success('Employee updated successfully.');

        return redirect(route('employees.index'));
    }

    /**
     * Remove the specified Employee from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Employee $employee */
        $employee = Employee::find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        $employee->delete();

        Flash::success('Employee deleted successfully.');

        return redirect(route('employees.index'));
    }
}