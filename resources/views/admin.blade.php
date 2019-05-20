@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('messages.admin_panel')</h4>
                    <div class="card-text">
                    @if(session()->has('message'))
                        {{ session()->get('message') }}
                    @endif     
                    </div>
                    <ul class="list-group">
                       <li class="list-group-item"><a href="{{ url('category/create') }}">@lang('messages.add_categ')</a></li>
                       <li class="list-group-item"><a href="{{ url('event/create') }}">@lang('messages.add_event')</a></li>
                       <li class="list-group-item"><a href="{{ url('ticket/create') }}">@lang('messages.add_ticket')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 