<tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $workGroup->id }}</td>
</tr>


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


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $workGroup->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $workGroup->updated_at }}</td>
</tr>


