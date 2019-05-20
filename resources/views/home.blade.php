@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.welcome')</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($errors->all() as $message)
                        <p class="has-error">{{ $message }}</p>
                    @endforeach  
                    
                    <h4>@lang('messages.hello_welcome'), {{ Auth::user()->name }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
