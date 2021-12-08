
<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Middle Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('middle_name', 'Middle Name:') !!}
    {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::select('gender', enum_gender(), null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Birth Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birth_date', 'Birth Date:') !!}
    {!! Form::text('birth_date', null, ['class' => 'form-control','id'=>'birth_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#birth_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Marital Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marital_status', 'Marital Status:') !!}
    {!! Form::select('marital_status', enum_marital_status(), null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- State Of Origin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state_of_origin', 'State Of Origin:') !!}
    {!! Form::select('state_of_origin', modelDropdown($states, 'id', 'title'), null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::number('phone_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Workgroup Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('workgroup_id', 'Workgroup:') !!}
    {!! Form::select('workgroup_id', modelDropdown($workgroups), null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', enum_status(), null, ['class' => 'form-control custom-select']) !!}
</div>
