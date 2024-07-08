@extends('dashboard.index')


@section('template_title')
    {{ $natureRecetteCommunale->name ?? __('Show') . " " . __('Nature Recette Communale') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Nature Recette Communale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('nature-recette-communale.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Code:</strong>
                                    {{ $natureRecetteCommunale->code }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nom:</strong>
                                    {{ $natureRecetteCommunale->nom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tarif:</strong>
                                    {{ $natureRecetteCommunale->tarif }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Montant Estime:</strong>
                                    {{ $natureRecetteCommunale->montant_estime }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Montant Recouvre:</strong>
                                    {{ $natureRecetteCommunale->montant_recouvre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Taux Recouvrement:</strong>
                                    {{ $natureRecetteCommunale->taux_recouvrement }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Preuve:</strong>
                                    {{ $natureRecetteCommunale->preuve }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fichiers:</strong>
                                    {{ $natureRecetteCommunale->fichiers }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contribuable Id:</strong>
                                    {{ $natureRecetteCommunale->contribuable_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Categorie Recette Id:</strong>
                                    {{ $natureRecetteCommunale->categorie_recette_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sous Categorie Recette Id:</strong>
                                    {{ $natureRecetteCommunale->sous_categorie_recette_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
