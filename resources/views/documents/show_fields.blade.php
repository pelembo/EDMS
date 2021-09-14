<!-- Id Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $document->id }}</p>
</div> --}}

<!-- Document Code Field -->
<div class="col-sm-12">
    {!! Form::label('document_code', 'Document Code:') !!}
    <p>{{ $document->document_code }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $document->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $document->description }}</p>
</div>

<!-- File Upload Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('file_upload', 'File Upload:') !!}
    <p>{{ $document->file_upload }}</p>
</div> --}}

{{-- <!-- Created By Field -->
<div class="col-sm-12">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $document->createdBy->name }}</p>
</div>

<!-- Updated By Field -->
<div class="col-sm-12">
    {!! Form::label('updated_by', 'Updated By:') !!}
    @if(isset($row->updated_by))
    <p>{{ $document->updatedBy->name }}</p>
    @else
    <p></p>
    @endif
</div> --}}

<!-- Document Type Id Field -->
<div class="col-sm-12">
    {!! Form::label('document_type_id', 'Document Type:') !!}
    <p>{{ $document->documentType->name }}</p>
</div>

<!-- Workgroup Id Field -->
<div class="col-sm-12">
    {!! Form::label('workgroup_id', 'Workgroup:') !!}
    <p>{{ $document->workgroup->name }}</p>
</div>

{{-- <!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $document->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $document->updated_at }}</p>
</div> --}}

