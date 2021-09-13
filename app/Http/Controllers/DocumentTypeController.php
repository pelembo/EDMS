<?php

namespace App\Http\Controllers;

use App\DataTables\DocumentTypeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDocumentTypeRequest;
use App\Http\Requests\UpdateDocumentTypeRequest;
use App\Repositories\DocumentTypeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DocumentTypeController extends AppBaseController
{
    /** @var  DocumentTypeRepository */
    private $documentTypeRepository;

    public function __construct(DocumentTypeRepository $documentTypeRepo)
    {
        $this->documentTypeRepository = $documentTypeRepo;
    }

    /**
     * Display a listing of the DocumentType.
     *
     * @param DocumentTypeDataTable $documentTypeDataTable
     * @return Response
     */
    public function index(DocumentTypeDataTable $documentTypeDataTable)
    {
        return $documentTypeDataTable->render('document_types.index');
    }

    /**
     * Show the form for creating a new DocumentType.
     *
     * @return Response
     */
    public function create()
    {
        return view('document_types.create');
    }

    /**
     * Store a newly created DocumentType in storage.
     *
     * @param CreateDocumentTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateDocumentTypeRequest $request)
    {
        $input = $request->all();

        $documentType = $this->documentTypeRepository->create($input);

        Flash::success('Document Type saved successfully.');
        create_activity('create', 'Document Type');

        return redirect(route('documentTypes.index'));
    }

    /**
     * Display the specified DocumentType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $documentType = $this->documentTypeRepository->find($id);

        if (empty($documentType)) {
            Flash::error('Document Type not found');

            return redirect(route('documentTypes.index'));
        }

        return view('document_types.show')->with('documentType', $documentType);
    }

    /**
     * Show the form for editing the specified DocumentType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $documentType = $this->documentTypeRepository->find($id);

        if (empty($documentType)) {
            Flash::error('Document Type not found');

            return redirect(route('documentTypes.index'));
        }

        return view('document_types.edit')->with('documentType', $documentType);
    }

    /**
     * Update the specified DocumentType in storage.
     *
     * @param  int              $id
     * @param UpdateDocumentTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocumentTypeRequest $request)
    {
        $documentType = $this->documentTypeRepository->find($id);

        if (empty($documentType)) {
            Flash::error('Document Type not found');

            return redirect(route('documentTypes.index'));
        }

        $documentType = $this->documentTypeRepository->update($request->all(), $id);

        Flash::success('Document Type updated successfully.');
        create_activity('update', 'Document Type');

        return redirect(route('documentTypes.index'));
    }

    /**
     * Remove the specified DocumentType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $documentType = $this->documentTypeRepository->find($id);

        if (empty($documentType)) {
            Flash::error('Document Type not found');

            return redirect(route('documentTypes.index'));
        }

        $this->documentTypeRepository->delete($id);

        Flash::success('Document Type deleted successfully.');
        create_activity('delete', 'Document Type');

        return redirect(route('documentTypes.index'));
    }
}
