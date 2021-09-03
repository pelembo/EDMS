<?php

namespace App\Http\Controllers;

use App\DataTables\StateDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateStateRequest;
use App\Http\Requests\UpdateStateRequest;
use App\Models\State;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class StateController extends AppBaseController
{
    /**
     * Display a listing of the State.
     *
     * @param StateDataTable $stateDataTable
     * @return Response
     */
    public function index(StateDataTable $stateDataTable)
    {
        return $stateDataTable->render('states.index');
    }

    /**
     * Show the form for creating a new State.
     *
     * @return Response
     */
    public function create()
    {
        return view('states.create');
    }

    /**
     * Store a newly created State in storage.
     *
     * @param CreateStateRequest $request
     *
     * @return Response
     */
    public function store(CreateStateRequest $request)
    {
        $input = $request->all();

        /** @var State $state */
        $state = State::create($input);

        Flash::success('State saved successfully.');

        return redirect(route('states.index'));
    }

    /**
     * Display the specified State.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var State $state */
        $state = State::find($id);

        if (empty($state)) {
            Flash::error('State not found');

            return redirect(route('states.index'));
        }

        return view('states.show')->with('state', $state);
    }

    /**
     * Show the form for editing the specified State.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var State $state */
        $state = State::find($id);

        if (empty($state)) {
            Flash::error('State not found');

            return redirect(route('states.index'));
        }

        return view('states.edit')->with('state', $state);
    }

    /**
     * Update the specified State in storage.
     *
     * @param  int              $id
     * @param UpdateStateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStateRequest $request)
    {
        /** @var State $state */
        $state = State::find($id);

        if (empty($state)) {
            Flash::error('State not found');

            return redirect(route('states.index'));
        }

        $state->fill($request->all());
        $state->save();

        Flash::success('State updated successfully.');

        return redirect(route('states.index'));
    }

    /**
     * Remove the specified State from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var State $state */
        $state = State::find($id);

        if (empty($state)) {
            Flash::error('State not found');

            return redirect(route('states.index'));
        }

        $state->delete();

        Flash::success('State deleted successfully.');

        return redirect(route('states.index'));
    }
}
