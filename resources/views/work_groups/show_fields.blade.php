<!-- Id Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $workGroup->id }}</p>
</div> --}}

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $workGroup->name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $workGroup->description }}</p>
</div>

<!-- Acronym Field -->
<div class="col-sm-12">
    {!! Form::label('acronym', 'Acronym:') !!}
    <p>{{ $workGroup->acronym }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ get_enum_value('enum_status', $workGroup->status) }}</p>
</div>

<!-- Created By Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $workGroup->created_by }}</p>
</div>

<!-- Updated By Field -->
<div class="col-sm-12">
    {!! Form::label('updated_by', 'Updated By:') !!}
    <p>{{ $workGroup->updated_by }}</p>
</div> --}}

<!-- Created At Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $workGroup->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $workGroup->updated_at }}</p>
</div> --}}

