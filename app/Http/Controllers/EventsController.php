<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events', array('title' => 'Events', 'events' => Event::orderBy('start_time')->get()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event_create', array('categories' => Category::all()->sortBy('name')->pluck('name','id')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $event = new Event();
        $event->name = $data['name'];
        $event->description = $data['description'];
        $event->category()->associate(Category::find($data['category']));
        $event->rating = $data['rating'];
        $event->start_time = $data['start_time'];
        $event->location = $data['location'];
        $event->rows = $data['rows'];
        $event->seats = $data['seats'];
        $event->save();
        return redirect()->action('EventsController@show', array($event->id))->withMessage('Successfully added a new event!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('event', array('event' => Event::findOrFail($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
