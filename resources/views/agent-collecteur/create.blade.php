@extends('dashboard.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Agent Collecteur</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('agent-collecteur.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row padding-1 p-1">
                                <div class="col-md-12">

                                    <div class="form-group mb-2 mb20">
                                        <label for="identifiant" class="form-label">{{ __('Identifiant') }}</label>
                                        <input type="text" name="identifiant" class="form-control @error('identifiant') is-invalid @enderror" value="{{ old('identifiant') }}" id="identifiant" placeholder="Identifiant">
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
                                        <input type="text" name="npi" class="form-control @error('npi') is-invalid @enderror" value="{{ old('npi') }}" id="npi" placeholder="Npi">
                                        {!! $errors->first('npi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="email" class="form-label">{{ __('Email') }}</label>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="Email">
                                        {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="telephone" class="form-label">{{ __('Telephone') }}</label>
                                        <input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{ old('telephone') }}" id="telephone" placeholder="Telephone">
                                        {!! $errors->first('telephone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="type" class="form-label">{{ __('Type') }}</label>
                                        <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}" id="type" placeholder="Type">
                                        {!! $errors->first('type', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
                                        <label for="photo" class="form-label">{{ __('Photo') }}</label>
                                        <input type="text" name="photo" class="form-control @error('photo') is-invalid @enderror" value="{{ old('photo') }}" id="photo" placeholder="Photo">
                                        {!! $errors->first('photo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
