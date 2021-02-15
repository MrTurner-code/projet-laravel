<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Event;
use App\Models\Interest;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $interests = Interest::all();
        $cities = City::all();
        return view('event.create', compact('cities', 'interests'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request['user_id'] = $request->user()->id;
        $event = Event::create($request->except(['_token']));
        $city = [
            "city_id" => $request['city'],
            "entity_id" => $event->id,
        ];
        $interest = [
            "interest_id" => $request['interest'],
            "entity_id" => $event->id
        ];
        $event->city()->create($city);
        $event->interest()->create($interest);


        return redirect()
            ->route('index')
            ->with('info', 'Votre évènement est en ligne');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $interest = $event->interest();
        $city = $event->city();
        $user = $event->user();
        return view('event.show', compact('event', 'user', 'city', 'interest'));
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
    public function send_message(Request $request, $idEvent, $idUser)
    {
        $event = Event::find(1)->where('id', $idEvent)->first();
        $user = User::find(1)->where('id', $idUser)->first();
        $message = Message::create([
            "from_id" => Auth::user()->id,
            "to_id" => $event->user_id,
            "message" => $request->input('message'),
            "event_id" => $event->id,
        ]);

        return back()->with('info', 'votre message a bien été envoyer à l\'organisateur de cette annnonce');
    }
    public function messages($event_id)
    {
        $event = Event::find(1)->where('id', $event_id)->first();
        $messages = Message::all()->where('event_id', $event_id);

        return view('user.message', compact('messages'));
    }
    public function messagerie()
    {
        $user = User::find(1)->where('id', Auth::user()->id);
        return view('user.messagerie', compact('user'));
    }
}
