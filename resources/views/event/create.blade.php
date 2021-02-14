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
                    <textarea type="text" class="form-control" name="description"></textarea>
                </div>
                <div class="form-group row">
                    <label for="interest" class="form-label">Type de sortie</label>
                    <select name="interest" id="select-interest" class="form-select">
                        @foreach ($interests as $interest)
                            <option value="{{ $interest->id }}">{{ $interest->interest }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <label for="dateEvent" class="form-label">Date de votre evenement : </label>
                    <input class="form-control" type="date" name="dateEvent">
                </div>
                <div class="form-group row">
                    <label for="city" class="form-label">Ville de votre evenement : </label>
                    <select name="city" class="form-select">
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->city }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group row mt-5">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            Enregistrez-vous
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
