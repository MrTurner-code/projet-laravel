@extends('ui/base')
@section('title') {{ $event->name }}@endsection
@section('content')
    <div class="row ">
        <div class="col shadow blue-200 rounded">
            <div class="row">
                <div class="col">
                    <p>
                    <h4>{{ $event->user->name }} </h4>vous propose une sortie {{ $event->interest->getInterest() }}</p>
                    <h4>{{ $event->name }}</h4>
                    <p>{{ $event->description }}</p>
                    <p>le {{ $event->dateEvent }} a {{ $event->city->getCity() }}</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    @auth
                        @if (session()->has('info'))
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        @endif
                        <form action="{{ route('event.join', [$event->id, Auth::user()->id]) }}" method="post">
                            @csrf
                            <div class="button">
                                <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                                <input type="submit" value="Rejoindre cette sortie">
                            </div>
                        </form>
                    @endauth
                    @guest
                        <div class="button">
                            <p>Connecter vous pour rejoindre cette sortie</p>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
@endsection
