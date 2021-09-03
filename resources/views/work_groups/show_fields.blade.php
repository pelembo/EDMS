
<tr>
    <th scopre="row">{!! Form::label('name', 'Name:') !!}</th>
    <td>{{ $workGroup->name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('description', 'Description:') !!}</th>
    <td>{{ $workGroup->description }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('acronym', 'Acronym:') !!}</th>
    <td>{{ $workGroup->acronym }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $workGroup->status) }}</td>
</tr>


