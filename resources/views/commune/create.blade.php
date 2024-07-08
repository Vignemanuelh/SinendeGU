@extends('dashboard.index')


@section('template_title')
    {{ __('Create') }} Commune
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Commune</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('commune.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="row padding-1 p-1">
                                <div class="col-md-12">

                                    <div class="form-group mb-2 mb20">
                                        <label for="num_compte" class="form-label">{{ __('Num Compte') }}</label>
                                        <input type="text" name="num_compte" class="form-control @error('num_compte') is-invalid @enderror" value="{{ old('num_compte') }}" id="num_compte" placeholder="Num Compte">
                                        {!! $errors->first('num_compte', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="departement" class="form-label">{{ __('Departement') }}</label>
                                        <input type="text" name="departement" class="form-control @error('departement') is-invalid @enderror" value="{{ old('departement') }}" id="departement" placeholder="Departement">
                                        {!! $errors->first('departement', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="nom" class="form-label">{{ __('Nom') }}</label>
                                        <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" id="nom" placeholder="Nom">
                                        {!! $errors->first('nom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="statut" class="form-label">{{ __('Statut') }}</label>
                                        <input type="text" name="statut" class="form-control @error('statut') is-invalid @enderror" value="{{ old('statut') }}" id="statut" placeholder="Statut">
                                        {!! $errors->first('statut', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="superficie" class="form-label">{{ __('Superficie') }}</label>
                                        <input type="text" name="superficie" class="form-control @error('superficie') is-invalid @enderror" value="{{ old('superficie') }}" id="superficie" placeholder="Superficie">
                                        {!! $errors->first('superficie', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="population" class="form-label">{{ __('Population') }}</label>
                                        <input type="text" name="population" class="form-control @error('population') is-invalid @enderror" value="{{ old('population') }}" id="population" placeholder="Population">
                                        {!! $errors->first('population', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
