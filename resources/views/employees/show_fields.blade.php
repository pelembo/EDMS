<!-- Id Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $employee->id }}</p>
</div> --}}

<!-- Employee Code Field -->
<div class="col-sm-12">
    {!! Form::label('employee_code', 'Employee Code:') !!}
    <p>{{ $employee->employee_code }}</p>
</div>

<!-- Last Name Field -->
<div class="col-sm-12">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $employee->last_name }}</p>
</div>

<!-- First Name Field -->
<div class="col-sm-12">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $employee->first_name }}</p>
</div>

<!-- Middle Name Field -->
<div class="col-sm-12">
    {!! Form::label('middle_name', 'Middle Name:') !!}
    <p>{{ $employee->middle_name }}</p>
</div>

<!-- Gender Field -->
<div class="col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ get_enum_value('enum_gender',$employee->gender) }}</p>
</div>

<!-- Birth Date Field -->
<div class="col-sm-12">
    {!! Form::label('birth_date', 'Birth Date:') !!}
    <p>{{ $employee->birth_date }}</p>
</div>

<!-- Marital Status Field -->
<div class="col-sm-12">
    {!! Form::label('marital_status', 'Marital Status:') !!}
    <p>{{ get_enum_value('enum_marital_status',$employee->marital_status) }}</p>
</div>

<!-- State Of Origin Field -->
<div class="col-sm-12">
    {!! Form::label('state_of_origin', 'State Of Origin:') !!}
    <p>{{ $employee->stateOfOrigin->title }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $employee->email }}</p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-12">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    <p>{{ $employee->phone_number }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ get_enum_value('enum_status',$employee->status) }}</p>
</div>

<!-- Created By Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $employee->created_by }}</p>
</div>

<!-- Updated By Field -->
<div class="col-sm-12">
    {!! Form::label('updated_by', 'Updated By:') !!}
    <p>{{ $employee->updated_by }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $employee->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $employee->updated_at }}</p>
</div> --}}

