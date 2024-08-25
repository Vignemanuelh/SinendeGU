@extends('dashboard.index')


@section('template_title')
    {{ $contribuable->name ?? __('Show') . " " . __('Contribuable') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Contribuable</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('contribuable.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Identifiant:</strong>
                            {{ $contribuable->identifiant }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nom:</strong>
                            {{ $contribuable->nom }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Prenom:</strong>
                            {{ $contribuable->prenom }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Date Naissance:</strong>
                            {{ $contribuable->date_naissance }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Npi:</strong>
                            {{ $contribuable->npi }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Email:</strong>
                            {{ $contribuable->email }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telephone:</strong>
                            {{ $contribuable->telephone }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Activite:</strong>
                            {{ $contribuable->activite }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Arrondissement:</strong>
                            {{ $contribuable->arrondissement }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Quartier:</strong>
                            {{ $contribuable->quartier }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Maison:</strong>
                            {{ $contribuable->maison }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
