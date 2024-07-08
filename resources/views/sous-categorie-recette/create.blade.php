@extends('dashboard.index')


@section('template_title')
    {{ __('Create') }} Sous Categorie Recette
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Sous Categorie Recette</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('sous-categorie-recette.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row padding-1 p-1">
                                <div class="col-md-12">
                                    <div class="form-group mb-2 mb20">
                                        <label for="code" class="form-label">{{ __('Code') }}</label>
                                        <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" value="{{ old('code') }}" id="code" placeholder="Code">
                                        {!! $errors->first('code', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="nom" class="form-label">{{ __('Nom') }}</label>
                                        <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" id="nom" placeholder="Nom">
                                        {!! $errors->first('nom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="montant_estime" class="form-label">{{ __('Montant Estime') }}</label>
                                        <input type="number" step="any" name="montant_estime" class="form-control @error('montant_estime') is-invalid @enderror" value="{{ old('montant_estime') }}" id="montant_estime" placeholder="Montant Estime">
                                        {!! $errors->first('montant_estime', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="montant_recouvre" class="form-label">{{ __('Montant Recouvre') }}</label>
                                        <input type="number" step="any" name="montant_recouvre" class="form-control @error('montant_recouvre') is-invalid @enderror" value="{{ old('montant_recouvre') }}" id="montant_recouvre" placeholder="Montant Recouvre">
                                        {!! $errors->first('montant_recouvre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="taux_recouvrement" class="form-label">{{ __('Taux Recouvrement') }}</label>
                                        <input type="number" step="any" name="taux_recouvrement" class="form-control @error('taux_recouvrement') is-invalid @enderror" value="{{ old('taux_recouvrement') }}" id="taux_recouvrement" placeholder="Taux Recouvrement">
                                        {!! $errors->first('taux_recouvrement', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="categorie_recette_id" class="form-label">{{ __('Categorie Recette') }}</label>
                                        <select id="categorie_recette_id" name="categorie_recette_id" class="form-control select2">
                                            <option value="">Select Categorie Recette</option>
                                            @foreach($categorieRecettes as $categorieRecette)
                                                <option value="{{ $categorieRecette->id }}">{{ $categorieRecette->nom }}</option>
                                            @endforeach
                                        </select>
{{--                                        <input type="text" name="categorie_recette_id" class="form-control @error('categorie_recette_id') is-invalid @enderror" value="{{ old('categorie_recette_id') }}" id="categorie_recette_id" placeholder="Categorie Recette Id">--}}
                                        {!! $errors->first('categorie_recette_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
