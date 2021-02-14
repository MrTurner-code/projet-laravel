@extends('ui/base')

@section('content')
    <div class="row vh-100 d-flex justify-content-center align-items-center">
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
                        <div class="button">
                            <p>Rejoindre cette sortie</p>
                        </div>
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
