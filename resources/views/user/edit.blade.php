@extends('ui.base')
@section('title')Modifiez vos informations @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Modifier vos informations</h2>
                <form action="put" method="{{ route('user-profile-information.update') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Votre Nom : </label>

                        <div class="col-md-6">
                            <input id="name" type="text" value="{{ old('name', Auth::user()->name) }}"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Votre adresse mail :
                        </label>

                        <div class="col-md-6">
                            <input id="email" type="email" value="{{ old('email', Auth::user()->email) }}"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email', Auth::user()->email) }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe : </label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                value="{{ old('password', Auth::user()->password) }}" name="password"
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmez votre
                            mot de passe : </label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="interest" class="col-md-4 col-form-label">Vos centre d'intérêts</label>
                        <div class="col-md-6">
                            <select name="interest" id="select-interest" class="form-select">
                                @foreach ($interests as $interest)
                                    <option value="{{ $interest->id }}">{{ $interest->interest }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="interest" class="col-md-4 col-form-label">Votre ville : </label>
                        <div class="col-md-6">
                            <select name="city" class="form-select">
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->city }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Enregistrez-vous
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
