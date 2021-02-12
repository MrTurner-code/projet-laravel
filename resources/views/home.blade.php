@extends('/ui/base')
@section('content')
<h1>Coucou {{Auth::user()->name}}, bienvenue sur ton dashboard</h1>
<p>page home</p>
@endsection