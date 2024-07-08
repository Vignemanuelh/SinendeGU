@extends('dashboard.index')


@section('template_title')
    {{ $agentCollecteur->name ?? __('Show') . " " . __('Agent Collecteur') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Agent Collecteur</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('agent-collecteur.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Identifiant:</strong>
                                    {{ $agentCollecteur->identifiant }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nom:</strong>
                                    {{ $agentCollecteur->nom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Prenom:</strong>
                                    {{ $agentCollecteur->prenom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Date Naissance:</strong>
                                    {{ $agentCollecteur->date_naissance }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Npi:</strong>
                                    {{ $agentCollecteur->npi }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $agentCollecteur->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telephone:</strong>
                                    {{ $agentCollecteur->telephone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Type:</strong>
                                    {{ $agentCollecteur->type }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Arrondissement:</strong>
                                    {{ $agentCollecteur->arrondissement }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Quartier:</strong>
                                    {{ $agentCollecteur->quartier }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Photo:</strong>
                                    {{ $agentCollecteur->photo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Secretariat Executif Id:</strong>
                                    {{ $agentCollecteur->secretariat_executif_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
