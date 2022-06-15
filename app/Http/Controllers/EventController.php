<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index() {

        $events = Event::all();

        return view('index', ['events' => $events]);
    }

    public function cadastrar() {

        return view('cadastrar',);
    }

    public function store(Request $request) {

        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->updated_at = '2000-01-01';
        $event->created_at = '2000-01-01';


        $event->save();

        return redirect('/');
    }
}
