<?php

namespace App\Http\Controllers;

use App\DataTables\Document_TypeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDocument_TypeRequest;
use App\Http\Requests\UpdateDocument_TypeRequest;
use App\Models\Document_Type;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Document_TypeController extends AppBaseController
{
    /**
     * Display a listing of the Document_Type.
     *
     * @param Document_TypeDataTable $documentTypeDataTable
     * @return Response
     */
    public function index(Document_TypeDataTable $documentTypeDataTable)
    {
        return $documentTypeDataTable->render('document__types.index');
    }

    /**
     * Show the form for creating a new Document_Type.
     *
     * @return Response
     */
    public function create()
    {
        return view('document__types.create');
    }

    /**
     * Store a newly created Document_Type in storage.
     *
     * @param CreateDocument_TypeRequest $request
     *
     * @return Response
     */
    public function store(CreateDocument_TypeRequest $request)
    {
        $input = $request->all();

        /** @var Document_Type $documentType */
        $documentType = Document_Type::create($input);

        Flash::success('Document  Type saved successfully.');

        return redirect(route('documentTypes.index'));
    }

    /**
     * Display the specified Document_Type.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Document_Type $documentType */
        $documentType = Document_Type::find($id);

        if (empty($documentType)) {
            Flash::error('Document  Type not found');

            return redirect(route('documentTypes.index'));
        }

        return view('document__types.show')->with('documentType', $documentType);
    }

    /**
     * Show the form for editing the specified Document_Type.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Document_Type $documentType */
        $documentType = Document_Type::find($id);

        if (empty($documentType)) {
            Flash::error('Document  Type not found');

            return redirect(route('documentTypes.index'));
        }

        return view('document__types.edit')->with('documentType', $documentType);
    }

    /**
     * Update the specified Document_Type in storage.
     *
     * @param  int              $id
     * @param UpdateDocument_TypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocument_TypeRequest $request)
    {
        /** @var Document_Type $documentType */
        $documentType = Document_Type::find($id);

        if (empty($documentType)) {
            Flash::error('Document  Type not found');

            return redirect(route('documentTypes.index'));
        }

        $documentType->fill($request->all());
        $documentType->save();

        Flash::success('Document  Type updated successfully.');

        return redirect(route('documentTypes.index'));
    }

    /**
     * Remove the specified Document_Type from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Document_Type $documentType */
        $documentType = Document_Type::find($id);

        if (empty($documentType)) {
            Flash::error('Document  Type not found');

            return redirect(route('documentTypes.index'));
        }

        $documentType->delete();

        Flash::success('Document  Type deleted successfully.');

        return redirect(route('documentTypes.index'));
    }
}
