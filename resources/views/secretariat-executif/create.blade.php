@extends('dashboard.index')


@section('template_title')
    {{ __('Create') }} Secretariat Executif
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Secretariat Executif</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('secretariat-executif.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row padding-1 p-1">
                                <div class="col-md-12">

                                    <div class="form-group mb-2 mb20">
                                        <label for="nom" class="form-label">{{ __('Nom') }}</label>
                                        <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{old('nom')}}" id="nom" placeholder="Nom">
                                        {!! $errors->first('nom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="prenom" class="form-label">{{ __('Prenom') }}</label>
                                        <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{old('prenom')}}" id="prenom" placeholder="Prenom">
                                        {!! $errors->first('prenom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="titre" class="form-label">{{ __('Titre') }}</label>
                                        <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" value="{{old('titre')}}" id="titre" placeholder="Titre">
                                        {!! $errors->first('titre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="email" class="form-label">{{ __('Email') }}</label>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" placeholder="Email">
                                        {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="telephone" class="form-label">{{ __('Telephone') }}</label>
                                        <input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{old('telephone')}}" id="telephone" placeholder="Telephone">
                                        {!! $errors->first('telephone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="npi" class="form-label">{{ __('Npi') }}</label>
                                        <input type="text" name="npi" class="form-control @error('npi') is-invalid @enderror" value="{{old('npi')}}" id="npi" placeholder="Npi">
                                        {!! $errors->first('npi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
