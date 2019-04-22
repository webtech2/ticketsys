@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a new event</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'EventsController@store', 'files' => true, 'class' => 'form-horizontal']) !!}

                    <div class="form-group row">
                    {!! Form::label('name', 'Event name', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::text('name', '', ['class' => 'form-control']) !!}   
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::textArea('description', '', ['class' => 'form-control']) !!}                     
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('category', 'Category', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::select('category', $categories, '', ['class' => 'form-control']) !!}
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('start_time', 'Start time', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::datetime('start_time', '', ['class' => 'form-control']) !!}                  
                    </div>
                    </div>                    
                    <div class="form-group row">
                    {!! Form::label('location', 'Location', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::text('location', '', ['class' => 'form-control']) !!}                  
                    </div>
                    </div>                    
                    <div class="form-group row">
                    {!! Form::label('rows', 'Rows', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::number('rows', '', ['class' => 'form-control']) !!}
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('seats', 'Seats', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::number('seats', '', ['class' => 'form-control']) !!}
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('rating', 'Rating', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::number('rating', '', ['class' => 'form-control']) !!}
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                    {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                    </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection