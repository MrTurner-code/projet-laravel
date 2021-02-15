@extends('ui/base')
@section('title') Dashboard @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Bonjour, vous vous appelez {{ Auth::user()->name }}</h2>
                <p>vous vous êtes inscrit le {{ Auth::user()->created_at }}</p>
                <p>votre adresse mail est : {{ Auth::user()->email }}</p>
            </div>
        </div>
        <div class="row">
            <h4>l'historique de vos sorties</h4>
            @if (Auth::user()->event)
@foreach ( Auth::user()->event as $event)
<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$event->name}}</h5>
    <p class="card-text">{{$event->description}}</p>
		<p class="card-text">theme : {{$event->interest->getInterest()}}</p>
		<p class="card-text">city : {{$event->city->getCity()}}</p>
  </div>
</div>
@endforeach
            @endif
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('user.edit') }}">Modifier votre profil</a>
            </div>
        </div>
    </div>
@endsection
