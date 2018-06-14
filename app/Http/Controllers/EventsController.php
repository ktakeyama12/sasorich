<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Event;
use App\User;

class EventsController extends Controller
{
    
    public function index()
    {
        $events = Event::all();
        $users = User::all();
        $a = $events->toArray();
            
        return view('index', [
            'events' => $events,
            'users' => $users,
                        'a' => $a,
        ]);
    }
    
    public function show($id)
    {
        $categories = Category::find($id);

        return view('categories.show', [
            'categories' => $categories,
        ]);
    }
    
    public function create()
    {
        $events = new Event;

        return view('events.create', [
            'events' => $events,
        ]);
    }
    
    public function store(Request $request)
    {
        $event = new Event;
        $event->title = $request->title;
        $event->month = $request->month;
        $event->day = $request->day;
        $event->timefrom = $request->timefrom;
        $event->timeto = $request->timeto;
        $event->place = $request->place;
        $event->theme = $request->theme;
        $event->details = $request->details;
        $event->maxpeople = $request->maxpeople;
        
        $event->save();
        
        return redirect('/');

    }
    
    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit', [
            'categories' => $categories,
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->title = $request->title;
        $event->month = $request->month;
        $event->day = $request->day;
        $event->timefrom = $request->timefrom;
        $event->timeto = $request->timeto;
        $event->place = $request->place;
        $event->theme = $request->theme;
        $event->details = $request->details;
        $event->maxpeople = $request->maxpeople;
        $event->save();

        return redirect('/');
    }
    
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        
        return redirect('/');
    }
    
    public function createpage()
    {
        $events = Event::all();
        $users = User::all();
        $a = $events->toArray();
        
        return view('create', [
            'events' => $events,
            'users' => $users,
            'a' => $a,
        ]);
    }
}
