@extends('ui/base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Bonjour, vous vous appelez {{Auth::user()->name}}</h2>
                <p>vous vous êtes inscrit le {{Auth::user()->created_at}}</p>
                <p>votre adresse mail est : {{Auth::user()->email}}</p>
            </div>
        </div>
    </div>
@endsection