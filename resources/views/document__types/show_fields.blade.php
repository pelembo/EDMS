<tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $documentType->id }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('name', 'Name:') !!}</th>
    <td>{{ $documentType->name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('description', 'Description:') !!}</th>
    <td>{{ $documentType->description }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $documentType->status) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $documentType->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $documentType->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $documentType->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $documentType->updated_at }}</td>
</tr>


