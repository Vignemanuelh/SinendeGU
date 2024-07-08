@extends('dashboard.index')


@section('template_title')
    {{ __('Create') }} Contribuable
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Contribuable</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('contribuable.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row padding-1 p-1">
                                <div class="col-md-12">
                                    <div class="row padding-1 p-1">
                                        <div class="d-flex flex-column form-group col-6  mb-2 mb20">
                                                <div class="form-group mb-2 mb20">
                                                    <label for="identifiant" class="form-label">{{ __('Identifiant') }}</label>
                                                    <input type="text" name="identifiant" class="form-control @error('identifiant') is-invalid @enderror" value="{{ old('identifiant' ) }}" id="identifiant" placeholder="Identifiant">
                                                    {!! $errors->first('identifiant', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                                </div>
                                                <div class="form-group mb-2 mb20">
                                                    <label for="nom" class="form-label">{{ __('Nom') }}</label>
                                                    <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" id="nom" placeholder="Nom">
                                                    {!! $errors->first('nom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                                </div>
                                                <div class="form-group mb-2 mb20">
                                                    <label for="prenom" class="form-label">{{ __('Prenom') }}</label>
                                                    <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" id="prenom" placeholder="Prenom">
                                                    {!! $errors->first('prenom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                                </div>
                                                <div class="form-group mb-2 mb20">
                                                    <label for="date_naissance" class="form-label">{{ __('Date Naissance') }}</label>
                                                    <input type="date" name="date_naissance" class="form-control @error('date_naissance') is-invalid @enderror" value="{{ old('date_naissance') }}" id="date_naissance" placeholder="Date Naissance">
                                                    {!! $errors->first('date_naissance', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                                </div>
                                                <div class="form-group mb-2 mb20">
                                                    <label for="npi" class="form-label">{{ __('Npi') }}</label>
                                                    <input type="number" name="npi" class="form-control @error('npi') is-invalid @enderror" value="{{ old('npi') }}" id="npi" placeholder="Npi">
                                                    {!! $errors->first('npi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                                </div>
                                                <div class="form-group mb-2 mb20">
                                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="Email">
                                                {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                            </div>
                                            </div>
                                        <div class="d-flex flex-column form-group col-6 mb-2 mb20">
                                        <div class="form-group mb-2 mb20">
                                            <label for="telephone" class="form-label">{{ __('Telephone') }}</label>
                                            <input type="tel" name="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{ old('telephone') }}" id="telephone" placeholder="Telephone">
                                            {!! $errors->first('telephone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                        </div>
                                        <div class="form-group mb-2 mb20">
                                            <label for="activite" class="form-label">{{ __('Activite') }}</label>
                                            <input type="text" name="activite" class="form-control @error('activite') is-invalid @enderror" value="{{ old('activite') }}" id="activite" placeholder="Activite">
                                            {!! $errors->first('activite', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                        </div>
                                        <div class="form-group mb-2 mb20">
                                            <label for="arrondissement" class="form-label">{{ __('Arrondissement') }}</label>
                                            <input type="text" name="arrondissement" class="form-control @error('arrondissement') is-invalid @enderror" value="{{ old('arrondissement') }}" id="arrondissement" placeholder="Arrondissement">
                                            {!! $errors->first('arrondissement', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                        </div>
                                        <div class="form-group mb-2 mb20">
                                            <label for="quartier" class="form-label">{{ __('Quartier') }}</label>
                                            <input type="text" name="quartier" class="form-control @error('quartier') is-invalid @enderror" value="{{ old('quartier') }}" id="quartier" placeholder="Quartier">
                                            {!! $errors->first('quartier', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                        </div>
                                        <div class="form-group mb-2 mb20">
                                            <label for="maison" class="form-label">{{ __('Maison') }}</label>
                                            <input type="text" name="maison" class="form-control @error('maison') is-invalid @enderror" value="{{ old('maison') }}" id="maison" placeholder="Maison">
                                            {!! $errors->first('maison', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                        </div>
                                        <div class="d-flex flex-column form-group  mb-2 mb20">
                                            <label for="categorieRecette_id" class="form-label">{{ __('Catégori recette') }}</label>
                                            <select id="categorieRecette_id" class="form-control select2 @error('categorieRecette_id') is-invalid @enderror" name="recettes[]" multiple >
                                                <option value="">Choisir une categorie recette </option>
                                                @foreach($categorieRecettes as $categorieRecette)
                                                    <option value="{{ $categorieRecette->id }}">{{ $categorieRecette->nom }}</option>
                                                @endforeach
                                            </select>
                                            {!! $errors->first('categorieRecette_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                        </div>
                                    </div>
                                    </div>
                                    <div class="d-flex flex-column form-group  mb-2 mb20">
                                        <label for="natures" class="form-label">{{ __('Nature recette') }}</label>
                                        <select id="natures" class="form-control select2 @error('natures') is-invalid @enderror" name="natures[]" multiple >
                                            <option value="">Choisir les nature recette  communale </option>
                                            @foreach($naturesRecettesCommunales as $naturesRecettesCommunale)
                                                <option value="{{ $naturesRecettesCommunale->id }}">{{ $naturesRecettesCommunale->nom }}</option>
                                            @endforeach
                                        </select>
                                        {!! $errors->first('categorieRecette_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-12 mt20 mt-2">
                                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
