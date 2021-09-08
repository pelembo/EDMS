<tr>
    <th scopre="row">{!! Form::label('employee_code', 'Employee Code:') !!}</th>
    <td>{{ $employee->employee_code }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('last_name', 'Last Name:') !!}</th>
    <td>{{ $employee->last_name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('first_name', 'First Name:') !!}</th>
    <td>{{ $employee->first_name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('middle_name', 'Middle Name:') !!}</th>
    <td>{{ $employee->middle_name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('gender', 'Gender:') !!}</th>
    <td>{{ get_enum_value('enum_gender', $employee->gender) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('birth_date', 'Birth Date:') !!}</th>
    <td>{{ $employee->birth_date }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('marital_status', 'Marital Status:') !!}</th>
    <td>{{ get_enum_value('enum_marital_status', $employee->marital_status) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('state_of_origin', 'State Of Origin:') !!}</th>
    <td>{{ $employee->state_of_origin }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('email', 'Email:') !!}</th>
    <td>{{ $employee->email }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('phone_number', 'Phone Number:') !!}</th>
    <td>{{ $employee->phone_number }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employee->status) }}</td>
</tr>



