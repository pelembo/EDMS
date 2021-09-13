<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAPIRequest;
use App\Http\Requests\API\UpdateAPIRequest;
use App\Models\;
use App\Repositories\Repository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class Controller
 * @package App\Http\Controllers\API
 */

class APIController extends AppBaseController
{
    /** @var  Repository */
    private $Repository;

    public function __construct(Repository $Repo)
    {
        $this->Repository = $Repo;
    }

    /**
     * Display a listing of the .
     * GET|HEAD /
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $ = $this->Repository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($->toArray(), ' retrieved successfully');
    }

    /**
     * Store a newly created  in storage.
     * POST /
     *
     * @param CreateAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateAPIRequest $request)
    {
        $input = $request->all();

        $ = $this->Repository->create($input);

        return $this->sendResponse($->toArray(), ' saved successfully');
    }

    /**
     * Display the specified .
     * GET|HEAD //{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var  $ */
        $ = $this->Repository->find($id);

        if (empty($)) {
            return $this->sendError(' not found');
        }

        return $this->sendResponse($->toArray(), ' retrieved successfully');
    }

    /**
     * Update the specified  in storage.
     * PUT/PATCH //{id}
     *
     * @param int $id
     * @param UpdateAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAPIRequest $request)
    {
        $input = $request->all();

        /** @var  $ */
        $ = $this->Repository->find($id);

        if (empty($)) {
            return $this->sendError(' not found');
        }

        $ = $this->Repository->update($input, $id);

        return $this->sendResponse($->toArray(), ' updated successfully');
    }

    /**
     * Remove the specified  from storage.
     * DELETE //{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var  $ */
        $ = $this->Repository->find($id);

        if (empty($)) {
            return $this->sendError(' not found');
        }

        $->delete();

        return $this->sendSuccess(' deleted successfully');
    }
}
