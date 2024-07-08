@extends('dashboard.index')


@section('template_title')
    {{ __('Create') }} Nature Recette Communale
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Nature Recette Communale</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('nature-recette-communale.store') }}"  role="form" enctype="multipart/form-data">
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
                                        <label for="tarif" class="form-label">{{ __('Tarif') }}</label>
                                        <input type="number" step="any" name="tarif" class="form-control @error('tarif') is-invalid @enderror" value="{{ old('tarif') }}" id="tarif" placeholder="Tarif">
                                        {!! $errors->first('tarif', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
                                        <label for="preuve" class="form-label">{{ __('Preuve') }}</label>
                                        <input type="text" name="preuve" class="form-control @error('preuve') is-invalid @enderror" value="{{ old('preuve') }}" id="preuve" placeholder="Preuve">
                                        {!! $errors->first('preuve', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="fichiers" class="form-label">{{ __('Fichiers') }}</label>
                                        <input type="text" name="fichiers" class="form-control @error('fichiers') is-invalid @enderror" value="{{ old('fichiers') }}" id="fichiers" placeholder="Fichiers">
                                        {!! $errors->first('fichiers', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="contribuable_id" class="form-label">{{ __('Contribuable Id') }}</label>
                                        <input type="text" name="contribuable_id" class="form-control @error('contribuable_id') is-invalid @enderror" value="{{ old('contribuable_id') }}" id="contribuable_id" placeholder="Contribuable Id">
                                        {!! $errors->first('contribuable_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="categorie_recette_id" class="form-label">{{ __('Categorie Recette Id') }}</label>
                                        <input type="text" name="categorie_recette_id" class="form-control @error('categorie_recette_id') is-invalid @enderror" value="{{ old('categorie_recette_id') }}" id="categorie_recette_id" placeholder="Categorie Recette Id">
                                        {!! $errors->first('categorie_recette_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="sous_categorie_recette_id" class="form-label">{{ __('Sous Categorie Recette Id') }}</label>
                                        <input type="text" name="sous_categorie_recette_id" class="form-control @error('sous_categorie_recette_id') is-invalid @enderror" value="{{ old('sous_categorie_recette_id') }}" id="sous_categorie_recette_id" placeholder="Sous Categorie Recette Id">
                                        {!! $errors->first('sous_categorie_recette_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
