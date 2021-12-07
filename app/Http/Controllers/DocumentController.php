<?php

namespace App\Http\Controllers;

use Response;
use App\Http\Requests;
use App\Models\WorkGroup;
use Laracasts\Flash\Flash;
use App\Models\DocumentType;
use Illuminate\Support\Facades\Auth;
use App\DataTables\DocumentDataTable;
use App\Repositories\DocumentRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\Document;
use App\Models\Employee;
use App\Traits\FileUpload;
use DateTime;
use Illuminate\Support\Facades\Storage;

class DocumentController extends AppBaseController
{
    use FileUpload;
    /** @var  DocumentRepository */
    private $documentRepository;

    public function __construct(DocumentRepository $documentRepo)
    {
        $this->documentRepository = $documentRepo;
    }

    /**
     * Display a listing of the Document.
     *
     * @param DocumentDataTable $documentDataTable
     * @return Response
     */
    public function index(DocumentDataTable $documentDataTable)
    {
        // if(auth()->user()->hasRole('superadministrator'))
        // {

        // }
        // else
        // {
        //     $workgroups = auth()->user()->workgroup_id;
        //     $docs = Document::where('workgroup_id', $workgroups)->where('user_id','!=',auth()->user()->id)->get();
        // }
        return $documentDataTable->render('documents.index');
    }

    /**
     * Show the form for creating a new Document.
     *
     * @return Response
     */
    public function create()
    {
        $documentTypes = new DocumentType;
        $workgroups = new WorkGroup;
        return view('documents.create', compact('documentTypes', 'workgroups'));
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
        $document = $this->documentRepository->create($this->saveFile($input));

        $workgroup_id = $input['workgroup_id'];
        $document_type_id = $input['document_type_id'];

        $group = WorkGroup::find($workgroup_id);
        $type = DocumentType::find($document_type_id);

        $date = new DateTime();
       // $date = date('YmdHis');

        $file_name = $group->acronym .  '/' . $type->name . '/' . $date->format('Ymd/His');

        $document['document_code'] = $file_name;

        //$document = Document::create($this->saveFile($input));

        $document->created_by = Auth::user()->id;
        $document->save();

        Flash::success('Document saved successfully.');
        create_activity('create', 'Document');

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
        $document = $this->documentRepository->find($id);

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
        $document = $this->documentRepository->find($id);

        if (empty($document)) {
            Flash::error('Document not found');

            return redirect(route('documents.index'));
        }
        $documentTypes = new DocumentType;
        $workgroups = new WorkGroup;

        return view('documents.edit', compact('documentTypes', 'workgroups'))->with('document', $document);
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
        $document = $this->documentRepository->find($id);

        if (empty($document)) {
            Flash::error('Document not found');

            return redirect(route('documents.index'));
        }

        $input = $request->all();

        $file_url = str_replace('storage/', 'public/', $document->file_url);
        Storage::delete($file_url);

        $document->fill($this->saveFile($this->saveFile($input)));
        $document->updated_by = Auth::user()->id;

        $document->save();

        // $document = $this->documentRepository->update($request->all(), $id);
        // $document->updated_by = Auth::user()->id;
        // $document->version = $document->version + 1;
        // $document->save();

        Flash::success('Document updated successfully.');
        create_activity('update', 'Document');

        return redirect(route('documents.index'));
    }

    /**
     * Remove the specified Document from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $document = $this->documentRepository->find($id);

        if (empty($document)) {
            Flash::error('Document not found');

            return redirect(route('documents.index'));
        }

        $this->documentRepository->delete($id);

        Flash::success('Document deleted successfully.');
        create_activity('delete', 'Document');

        return redirect(route('documents.index'));
    }

    public function saveFile($input)
    {

        $files = $input['file_upload'];
        $workgroup_id = $input['workgroup_id'];
        $document_type_id = $input['document_type_id'];


        $file_url_array = [];

        $group = WorkGroup::find($workgroup_id);
        $type = DocumentType::find($document_type_id);


        $file_name = $group->acronym .  '_' . $type->name . '_' . now()->timestamp;


        $input['file_name'] = $file_name;

        foreach ($files as $file) {
            $file_url_array[] = $this->Upload($file, $file_name, $group->acronym, $type->name);
        }

        $input['file_url'] = $file_url_array;

        return $input;
    }
}
