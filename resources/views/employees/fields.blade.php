<!-- Employee Code Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('employee_code', 'Employee Code:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('employee_code', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Last Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('last_name', 'Last Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- First Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('first_name', 'First Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Middle Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('middle_name', 'Middle Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Gender Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('gender', 'Gender:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('gender', enum_gender(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Birth Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('birth_date', 'Birth Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('birth_date', null, ['class' => 'form-control','id'=>'birth_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#birth_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Marital Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('marital_status', 'Marital Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('marital_status', enum_marital_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- State Of Origin Field -->
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('state_of_origin', 'State Of Origin:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('state_of_origin', ['' => ''], null, ['class' => 'form-control']) !!}
        </div>
    </div> --}}
    <div class="form-group">
        <div class="row">
            {!! Form::label('state_of_origin', 'State Of Origin:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
            <div class="col-md-9 col-lg-9 col-12">
                {!! Form::select('state_of_origin',  modelDropdown($states, 'id', 'title'), null, ['class' => 'form-control']) !!}
            </div>
        </div>
</>


<!-- Email Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('email', 'Email:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Phone Number Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('phone_number', 'Phone Number:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('phone_number', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', enum_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('employees.index') }}" class="btn btn-default">Cancel</a>
</div>
