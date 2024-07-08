@extends('dashboard.index')


@section('template_title')
    {{ $sousCategorieRecette->name ?? __('Show') . " " . __('Sous Categorie Recette') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Sous Categorie Recette</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('sous-categorie-recette.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Code:</strong>
                                    {{ $sousCategorieRecette->code }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nom:</strong>
                                    {{ $sousCategorieRecette->nom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Montant Estime:</strong>
                                    {{ $sousCategorieRecette->montant_estime }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Montant Recouvre:</strong>
                                    {{ $sousCategorieRecette->montant_recouvre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Taux Recouvrement:</strong>
                                    {{ $sousCategorieRecette->taux_recouvrement }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Categorie Recette :</strong>
                                    {{ $sousCategorieRecette->categorieRecette->nom }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
