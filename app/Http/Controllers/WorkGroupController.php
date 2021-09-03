<?php

namespace App\Http\Controllers;

use App\DataTables\WorkGroupDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateWorkGroupRequest;
use App\Http\Requests\UpdateWorkGroupRequest;
use App\Models\WorkGroup;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class WorkGroupController extends AppBaseController
{
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

        /** @var WorkGroup $workGroup */
        $workGroup = WorkGroup::create($input);

        Flash::success('Work Group saved successfully.');

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
        /** @var WorkGroup $workGroup */
        $workGroup = WorkGroup::find($id);

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
        /** @var WorkGroup $workGroup */
        $workGroup = WorkGroup::find($id);

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
        /** @var WorkGroup $workGroup */
        $workGroup = WorkGroup::find($id);

        if (empty($workGroup)) {
            Flash::error('Work Group not found');

            return redirect(route('workGroups.index'));
        }

        $workGroup->fill($request->all());
        $workGroup->save();

        Flash::success('Work Group updated successfully.');

        return redirect(route('workGroups.index'));
    }

    /**
     * Remove the specified WorkGroup from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var WorkGroup $workGroup */
        $workGroup = WorkGroup::find($id);

        if (empty($workGroup)) {
            Flash::error('Work Group not found');

            return redirect(route('workGroups.index'));
        }

        $workGroup->delete();

        Flash::success('Work Group deleted successfully.');

        return redirect(route('workGroups.index'));
    }
}
