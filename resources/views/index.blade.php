@extends('/ui/base')
@section('title')
    page d'accueil
@endsection

@section('content')
@auth
<div class="d-flex home justify-content-center align-items-center">
    <div class="encart-register rounded shadow-lg bg-light">
        <h1 class="text-center">Venez partagez vos passions</h1>
        <p>N'attendez plus ! trouvez rapidement une activité à faire avec les passionnées près de chez vous ! </p>
    </div>
</div>
@endauth
@guest
    <div class=" justify-content-center align-items-center">
        <div class="encart-register rounded shadow-lg bg-light">
            <h1 class="text-center">Venez partagez vos passions</h1>
            <p>Sur OuTogether, venez partagez des moments avec des gens qui partagent les mêmes passions que
                vous, alors ? qu'est-ce que vous attendez pour nous rejoindre ?</p>
                <a href="{{route('register')}}" class="text-uppercase text-center">Créer un compte</a>
        </div>
    </div>
@endguest
    
@endsection

</html>