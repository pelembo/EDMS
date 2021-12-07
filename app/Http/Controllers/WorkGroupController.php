<?php

namespace App\Http\Controllers;

use App\DataTables\WorkGroupDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateWorkGroupRequest;
use App\Http\Requests\UpdateWorkGroupRequest;
use App\Repositories\WorkGroupRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Auth;
use Response;

class WorkGroupController extends AppBaseController
{
    /** @var  WorkGroupRepository */
    private $workGroupRepository;

    public function __construct(WorkGroupRepository $workGroupRepo)
    {
        $this->workGroupRepository = $workGroupRepo;
    }

    /**
     * Display a listing of the WorkGroup.
     *
     * @param WorkGroupDataTable $workGroupDataTable
     * @return Response
     */
    public function index(WorkGroupDataTable $workGroupDataTable)
    {
        return $workGroupDataTable->render('work_groups.index');
    }

    /**
     * Show the form for creating a new WorkGroup.
     *
     * @return Response
     */
    public function create()
    {
        return view('work_groups.create');
    }

    /**
     * Store a newly created WorkGroup in storage.
     *
     * @param CreateWorkGroupRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkGroupRequest $request)
    {
        $input = $request->all();

        $workGroup = $this->workGroupRepository->create($input);
        $workGroup->created_by = Auth::user()->id;

        $workGroup->save();

        Flash::success('Work Group saved successfully.');
        create_activity('create', 'Work Group');

        return redirect(route('workGroups.index'));
    }

    /**
     * Display the specified WorkGroup.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workGroup = $this->workGroupRepository->find($id);

        if (empty($workGroup)) {
            Flash::error('Work Group not found');

            return redirect(route('workGroups.index'));
        }

        return view('work_groups.show')->with('workGroup', $workGroup);
    }

    /**
     * Show the form for editing the specified WorkGroup.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workGroup = $this->workGroupRepository->find($id);

        if (empty($workGroup)) {
            Flash::error('Work Group not found');

            return redirect(route('workGroups.index'));
        }

        return view('work_groups.edit')->with('workGroup', $workGroup);
    }

    /**
     * Update the specified WorkGroup in storage.
     *
     * @param  int              $id
     * @param UpdateWorkGroupRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkGroupRequest $request)
    {
        $workGroup = $this->workGroupRepository->find($id);

        if (empty($workGroup)) {
            Flash::error('Work Group not found');

            return redirect(route('workGroups.index'));
        }

        $workGroup = $this->workGroupRepository->update($request->all(), $id);
        $workGroup->updated_by = Auth::user()->id;
        $workGroup->save();


        Flash::success('Work Group updated successfully.');
        create_activity('update', 'Work Group');

        return redirect(route('workGroups.index'));
    }

    /**
     * Remove the specified WorkGroup from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workGroup = $this->workGroupRepository->find($id);

        if (empty($workGroup)) {
            Flash::error('Work Group not found');

            return redirect(route('workGroups.index'));
        }

        $this->workGroupRepository->delete($id);

        Flash::success('Work Group deleted successfully.');
        create_activity('delete', 'Work Group');

        return redirect(route('workGroups.index'));
    }
}
