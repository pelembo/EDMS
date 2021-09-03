@extends('layouts.default')

{{-- Page title --}}
@section('title')
Document  Type @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Document  Type</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($documentType, ['route' => ['documentTypes.update', $documentType->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('document__types.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
