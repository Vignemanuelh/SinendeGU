@extends('dashboard.index')


@section('template_title')
    {{ __('Create') }} Service
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Service</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('service.store') }}"  role="form" enctype="multipart/form-data">
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
                                        <label for="categorie_recette_id" class="form-label">{{ __('Categorie Recette Id') }}</label>
                                        <input type="text" name="categorie_recette_id" class="form-control @error('categorie_recette_id') is-invalid @enderror" value="{{ old('categorie_recette_id') }}" id="categorie_recette_id" placeholder="Categorie Recette Id">
                                        {!! $errors->first('categorie_recette_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="sous_categorie_recette_id" class="form-label">{{ __('Sous Categorie Recette Id') }}</label>
                                        <input type="text" name="sous_categorie_recette_id" class="form-control @error('sous_categorie_recette_id') is-invalid @enderror" value="{{ old('sous_categorie_recette_id') }}" id="sous_categorie_recette_id" placeholder="Sous Categorie Recette Id">
                                        {!! $errors->first('sous_categorie_recette_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="nature_recette_id" class="form-label">{{ __('Nature Recette Id') }}</label>
                                        <input type="text" name="nature_recette_id" class="form-control @error('nature_recette_id') is-invalid @enderror" value="{{ old('nature_recette_id') }}" id="nature_recette_id" placeholder="Nature Recette Id">
                                        {!! $errors->first('nature_recette_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="contribuable_id" class="form-label">{{ __('Contribuable Id') }}</label>
                                        <input type="text" name="contribuable_id" class="form-control @error('contribuable_id') is-invalid @enderror" value="{{ old('contribuable_id') }}" id="contribuable_id" placeholder="Contribuable Id">
                                        {!! $errors->first('contribuable_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="agent_collecteur_id" class="form-label">{{ __('Agent Collecteur Id') }}</label>
                                        <input type="text" name="agent_collecteur_id" class="form-control @error('agent_collecteur_id') is-invalid @enderror" value="{{ old('agent_collecteur_id') }}" id="agent_collecteur_id" placeholder="Agent Collecteur Id">
                                        {!! $errors->first('agent_collecteur_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="secretariat_executif_id" class="form-label">{{ __('Secretariat Executif Id') }}</label>
                                        <input type="text" name="secretariat_executif_id" class="form-control @error('secretariat_executif_id') is-invalid @enderror" value="{{ old('secretariat_executif_id') }}" id="secretariat_executif_id" placeholder="Secretariat Executif Id">
                                        {!! $errors->first('secretariat_executif_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
