@extends('layouts.default')

{{-- Page title --}}
@section('title')
Document @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Document</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($document, ['route' => ['documents.update', $document->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('documents.fields', [$document_types, $workgroups])

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
