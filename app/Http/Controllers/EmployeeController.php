<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\State;
use App\Http\Requests;
use App\DataTables\EmployeeDataTable;
use App\Repositories\EmployeeRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\WorkGroup;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends AppBaseController
{
    /** @var  EmployeeRepository */
    private $employeeRepository;
    private $userRepository;

    public function __construct(EmployeeRepository $employeeRepo, UserRepository $userRepo)
    {
        $this->employeeRepository = $employeeRepo;
        $this->userRepository = $userRepo;
    }

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
        $workgroups = new WorkGroup;

        return view('employees.create', compact('states','workgroups'));
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
        // dd($input);

        $employee = $this->employeeRepository->create($input);
        $employee['employee_code'] = now()->timestamp;

        $user_data['name'] = $employee->last_name . " " . $employee->first_name . " " . $employee->middle_name;
        $user_data['email'] = $employee->email;
        $user_data['password'] = Hash::make('password');

        $user = $this->userRepository->create($user_data);

        $employee->user_id = $user->id;
        $employee->created_by = Auth::user()->id;



        $employee->save();




        Flash::success('Employee saved successfully.');
        create_activity('create', 'Employee');

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
        $employee = $this->employeeRepository->find($id);

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
        $employee = $this->employeeRepository->find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }
        $states = new State;
        $workgroups = new WorkGroup;
        return view('employees.edit',compact('states', 'workgroups'))->with('employee', $employee);
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
        $employee = $this->employeeRepository->find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        $employee = $this->employeeRepository->update($request->all(), $id);

        $user_data['name'] = $employee->last_name . " " . $employee->first_name . " " . $employee->middle_name;
        $user_data['email'] = $employee->email;
        $user_data['password'] = Hash::make('password');

        $user = $this->userRepository->update($user_data, $employee->user_id);

        $employee->updated_by = Auth::user()->id;
        $employee->save();


        Flash::success('Employee updated successfully.');
        create_activity('update', 'Employee');

        return redirect(route('employees.index'));
    }

    /**
     * Remove the specified Employee from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employee = $this->employeeRepository->find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        $this->employeeRepository->delete($id);

        Flash::success('Employee deleted successfully.');
        create_activity('delete', 'Employee');

        return redirect(route('employees.index'));
    }
}
