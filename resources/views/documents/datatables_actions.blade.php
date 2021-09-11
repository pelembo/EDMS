{!! Form::open(['route' => ['documents.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('documents.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="far fa-eye"></i>
    </a>
    <a href="{{ route('documents.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="far fa-edit"></i>
    </a>
    {!! Form::button('<i class="far fa-trash-alt"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
