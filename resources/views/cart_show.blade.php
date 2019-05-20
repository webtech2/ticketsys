@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">@lang('messages.selected_tickets')</h4>                
                <div class="card-text">
                    <table class="table table-hover">
                        <thead><tr class="table-primary">
                            <th scope="col">@lang('messages.event')</th>
                            <th scope="col">@lang('messages.start_time')</th>
                            <th scope="col">@lang('messages.location')</th>
                            <th scope="col">@lang('messages.row')</th>
                            <th scope="col">@lang('messages.seat')</th>
                            <th scope="col">@lang('messages.price')</th>
                            <th scope="col"></th>
                        </tr></thead>
                        <tbody>
                        @foreach ( $tickets as $ticket )
                        <tr>
                            <td>{{ $ticket->event->name }}</td>
                            <td>{{ $ticket->event->formatTime() }}</td>
                            <td>{{ $ticket->event->location }}</td>
                            <td>{{ $ticket->row }}</td>
                            <td>{{ $ticket->seat }}</td>
                            <td>{{ $ticket->price }}</td>
                            <td><a class="btn btn-primary btn-sm" href='{{ url('cart/remove', $ticket->id) }}'>X</a>
                            </td>
                        </tr>
                        @endforeach 
                        <tr class="table-primary">
                            <td colspan="6"></td>
                            <td>{{ $total }}</td>
                        </tr>                        
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 