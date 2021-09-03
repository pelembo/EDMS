@extends('layouts.default')

{{-- Page title --}}
@section('title')
Work Group @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Work Group</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'workGroups.store','class' => 'form-horizontal']) !!}

                    @include('work_groups.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
