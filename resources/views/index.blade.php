@extends('/ui/base')
@section('title')
    page d'accueil
@endsection

@section('content')

    <div class="row vh-100 d-flex justify-content-center align-items-center">
        <div class="col w-100 rounded shadow bg-light">
            <h1 class="text-center">Venez partagez vos passions</h1>
            <p>N'attendez plus ! trouvez rapidement une activité à faire avec les passionnées près de chez vous ! </p>
            <h2>Bienvenue {{ Auth::user()->name }}</h2>
            {{ Auth::user()->city->getCity() }}
            <br>
            {{ Auth::user()->interest->getInterest() }}
            @if (session()->has('info'))
                <div class="alert alert-success">{{ session('info') }}</div>
            @endif
        </div>
    </div>
    @if ($events)
        <div class="row">
            @foreach ($events as $event)
                <div class="col-10">
                    <div class="border rounded shadow-lg bg-light">
                        <h3><a href="{{route('event.show',$event->id)}}">{{ $event->name }}</a></h3>
                        {{ $event->city->getCity() }}
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>Il n'y a pas encore d'evenements en ligne</p>
    @endif

@guest
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

