@extends('dashboard.index')


@section('template_title')
    {{ $service->name ?? __('Show') . " " . __('Service') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Service</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('service.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Code:</strong>
                                    {{ $service->code }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nom:</strong>
                                    {{ $service->nom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Categorie Recette Id:</strong>
                                    {{ $service->categorie_recette_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sous Categorie Recette Id:</strong>
                                    {{ $service->sous_categorie_recette_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nature Recette Id:</strong>
                                    {{ $service->nature_recette_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contribuable Id:</strong>
                                    {{ $service->contribuable_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Agent Collecteur Id:</strong>
                                    {{ $service->agent_collecteur_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Secretariat Executif Id:</strong>
                                    {{ $service->secretariat_executif_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
