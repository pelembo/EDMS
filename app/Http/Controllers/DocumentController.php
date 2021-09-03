<?php

namespace App\Http\Controllers;

use App\DataTables\DocumentDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\Document;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DocumentController extends AppBaseController
{
    /**
     * Display a listing of the Document.
     *
     * @param DocumentDataTable $documentDataTable
     * @return Response
     */
    public function index(DocumentDataTable $documentDataTable)
    {
        return $documentDataTable->render('documents.index');
    }

    /**
     * Show the form for creating a new Document.
     *
     * @return Response
     */
    public function create()
    {
        return view('documents.create');
    }

    /**
     * Store a newly created Document in storage.
     *
     * @param CreateDocumentRequest $request
     *
     * @return Response
     */
    public function store(CreateDocumentRequest $request)
    {
        $input = $request->all();

        /** @var Document $document */
        $document = Document::create($input);

        Flash::success('Document saved successfully.');

        return redirect(route('documents.index'));
    }

    /**
     * Display the specified Document.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Document $document */
        $document = Document::find($id);

        if (empty($document)) {
            Flash::error('Document not found');

            return redirect(route('documents.index'));
        }

        return view('documents.show')->with('document', $document);
    }

    /**
     * Show the form for editing the specified Document.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Document $document */
        $document = Document::find($id);

        if (empty($document)) {
            Flash::error('Document not found');

            return redirect(route('documents.index'));
        }

        return view('documents.edit')->with('document', $document);
    }

    /**
     * Update the specified Document in storage.
     *
     * @param  int              $id
     * @param UpdateDocumentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocumentRequest $request)
    {
        /** @var Document $document */
        $document = Document::find($id);

        if (empty($document)) {
            Flash::error('Document not found');

            return redirect(route('documents.index'));
        }

        $document->fill($request->all());
        $document->save();

        Flash::success('Document updated successfully.');

        return redirect(route('documents.index'));
    }

    /**
     * Remove the specified Document from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Document $document */
        $document = Document::find($id);

        if (empty($document)) {
            Flash::error('Document not found');

            return redirect(route('documents.index'));
        }

        $document->delete();

        Flash::success('Document deleted successfully.');

        return redirect(route('documents.index'));
    }
}
