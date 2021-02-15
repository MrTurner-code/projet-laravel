@extends('/ui/base')
@section('title')
    page d'accueil
@endsection

@section('content')
@auth
    <div class="row ">
        <div class="col w-100 rounded shadow bg-light">
            <h1 class="text-center">Venez partagez vos passions</h1>
            <p>N'attendez plus ! trouvez rapidement une activité à faire avec les passionnées près de chez vous ! </p>
            <h2>Bienvenue {{ Auth::user()->name }}</h2>
            @if (session()->has('info'))
                <div class="alert alert-success">{{ session('info') }}</div>
            @endif
        </div>
    </div>
    @if ($events)
    <h3 class="mt-5 mb-5">Les sorties proche de chez vous</h3>
        <div class="row">
            @foreach ($events as $event)
            @if ($event->city->getCity() == Auth::user()->city->getCity() && $event->user->id != Auth::user()->id)
                <div class="col-10">
                    <div class="card rounded shadow-lg bg-light">
                        <div class="card-body">
                            <h3 class="card-title"><a href="{{route('event.show',$event->id)}}">{{ $event->name }}</a></h3>
                            {{ $event->city->getCity() }}
                            {{$event->user}}
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

<h3 class="mt-5 mb-5">Toutes les sorties existantes sur notre site</h3>
            @foreach ($events as $event)
            @if ($event->user->id != Auth::user()->id)
                <div class="card">
                    <div class="card-body rounded shadow-lg bg-light">
                        <h3 class="card-title"><a href="{{route('event.show',$event->id)}}">{{ $event->name }}</a></h3>
                        {{ $event->city->getCity() }}
                    </div>
                </div>
            @endif
            @endforeach
        </div>
    @else
        <p>Il n'y a pas encore d'evenements en ligne</p>
    @endif

@else
    <div class=" justify-content-center align-items-center">
        <div class="encart-register rounded shadow-lg bg-light">
            <h1 class="text-center">Venez partagez vos passions</h1>
            <p>Sur OuTogether, venez partagez des moments avec des gens qui partagent les mêmes passions que
                vous, alors ? qu'est-ce que vous attendez pour nous rejoindre ?</p>
            <a href="{{ route('register') }}" class="text-uppercase text-center">Créer un compte</a>

        </div>
    </div>
@endguest

@endsection

