<!-- Document Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('document_code', 'Document Code:') !!}
    {!! Form::text('document_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- File Upload Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_upload', 'File Upload:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('file_upload', ['class' => 'custom-file-input']) !!}
            {!! Form::label('file_upload', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Document Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('document_type_id', 'Document Type:') !!}
    {!! Form::select('document_type_id', modelDropdown($documentTypes), null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Workgroup Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('workgroup_id', 'Workgroup:') !!}
    {!! Form::select('workgroup_id', modelDropdown($workgroups), null, ['class' => 'form-control custom-select']) !!}
</div>
