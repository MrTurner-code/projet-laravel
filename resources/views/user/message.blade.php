@extends('ui.base')
@section('title') messagerie @endsection
@section('content')
<h3>{{$messages->first()->event->name}}</h3>
    <div class="container">
        @foreach ($messages as $message)
            <div class="row m-5">
                <div class="card">
                    <p class="card-text">{{ $message->message }}</p>
                    <p class="card-text">{{ $message->get_sender->name }}</p>
                </div>
            </div>
        @endforeach
        <form action="{{ route('event.join', [$messages->first()->event->id, Auth::user()->id]) }}" method="post">
            @csrf
            <div class="button">
                <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                <input type="submit" value="Envoyer un message">
            </div>
        </form>
    </div>



@endsection
