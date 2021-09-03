<!-- Document Code Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('document_code', 'Document Code:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('document_code', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Title Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('title', 'Title:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Description Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('description', 'Description:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- File Upload Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload') !!}
        </div>
    </div>
</div <div class="clearfix">
</div>


<!-- Document Type Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('document_type_id', 'Document Type Id:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('document_type_id', ['' => ''], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Workgroup Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('workgroup_id', 'Workgroup Id:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('workgroup_id', ['' => ''], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('documents.index') }}" class="btn btn-default">Cancel</a>
</div>
