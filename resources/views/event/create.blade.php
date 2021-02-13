@extends('/ui/base')
@section('content')
    <div class="row">
        <div class="col">
            <h1>Proposez aux gens proches de chez vous de partager un moment unique avec vous</h1>
            <form action="{{ route('event.store') }}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="name" class="form-label">Nom de votre sortie</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group row">
                    <label for="description" class="form-label">Décrivez votre sortie</label>
                    <input type="text" class="form-control" name="description">
                </div>
                <div class="form-group row">
                    <label for="interest" class="form-label">Type de sortie</label>
                    <input type="text" class="form-control" name="interest">
                </div>
                <div class="form-group row">
                    <label for="date" class="col-2 col-form-label">Date de votre evenement</label>
                    <div class="col-10">
                        <input class="form-control" type="date" name id="example-date-input">
                    </div>
                </div>
                <div class="form-group row"><label for="" class="form-label"></label>
                    <input type="text" class="form-control">
                </div>
            </form>
        </div>
    </div>
@endsection
