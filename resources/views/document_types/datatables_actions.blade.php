{!! Form::open(['route' => ['documentTypes.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('documentTypes.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="far fa-eye"></i>
    </a>
    <a href="{{ route('documentTypes.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="far fa-edit"></i>
    </a>
    {!! Form::button('<i class="far fa-trash-alt"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
