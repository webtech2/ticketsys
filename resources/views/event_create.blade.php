@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.add_event')</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'EventsController@store', 'files' => true, 'class' => 'form-horizontal']) !!}

                    <div class="form-group row">
                    {!! Form::label('name', __('messages.event_name'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::text('name', '', ['class' => 'form-control '.($errors->has('name') ? ' is-invalid' : '' )]) !!}   
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif 
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('description', __('messages.description'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::textArea('description', '', ['class' => 'form-control '.($errors->has('description') ? ' is-invalid' : '' )]) !!}                     
                    @if ($errors->has('description'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif                    
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('category', __('messages.category'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::select('category', $categories, '', ['class' => 'form-control '.($errors->has('category') ? ' is-invalid' : '' )]) !!}
                    @if ($errors->has('category'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('start_time', __('messages.start_time'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::datetime('start_time', \Carbon\Carbon::now()->format('Y-m-d H:i'), ['class' => 'form-control '.($errors->has('start_time') ? ' is-invalid' : '' ), 'placeholder' => 'yyyy-mm-dd hh:mi']) !!}
                    @if ($errors->has('start_time'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('start_time') }}</strong>
                        </span>
                    @endif                 
                    </div>
                    </div>                    
                    <div class="form-group row">
                    {!! Form::label('location', __('messages.location'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::text('location', '', ['class' => 'form-control '.($errors->has('location') ? ' is-invalid' : '' )]) !!}   
                    @if ($errors->has('location'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('location') }}</strong>
                        </span>
                    @endif 
                    </div>
                    </div>                    
                    <div class="form-group row">
                    {!! Form::label('rows', __('messages.rows'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::number('rows', '', ['class' => 'form-control '.($errors->has('rows') ? ' is-invalid' : '' ), 'min' => 0]) !!}
                    @if ($errors->has('rows'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('rows') }}</strong>
                        </span>
                    @endif                    
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('seats', __('messages.seats'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::number('seats', '', ['class' => 'form-control '.($errors->has('seats') ? ' is-invalid' : '' ), 'min' => 0]) !!}
                    @if ($errors->has('seats'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('seats') }}</strong>
                        </span>
                    @endif                    
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('rating', __('messages.rating'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::number('rating', '', ['class' => 'form-control '.($errors->has('rating') ? ' is-invalid' : '' ), 'step' => '0.1', 'min' => 0, 'max' => 10, 'placeholder' => '0-10']) !!}
                    @if ($errors->has('rating'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('rating') }}</strong>
                        </span>
                    @endif                    
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                    {!! Form::submit(__('messages.create'), ['class' => 'btn btn-primary']) !!}
                    </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection