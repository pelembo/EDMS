<tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $document->id }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('document_code', 'Document Code:') !!}</th>
    <td>{{ $document->document_code }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('title', 'Title:') !!}</th>
    <td>{{ $document->title }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('description', 'Description:') !!}</th>
    <td>{{ $document->description }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('file_upload', 'File Upload:') !!}</th>
    <td>{{ $document->file_upload }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $document->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $document->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('document_type_id', 'Document Type Id:') !!}</th>
    <td>{{ $document->document_type_id->name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('workgroup_id', 'Workgroup Id:') !!}</th>
    <td>{{ $document->workgroup_id->name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $document->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $document->updated_at }}</td>
</tr>


