@extends('dashboard.index')


@section('template_title')
    {{ $categorieRecette->name ?? __('Show') . " " . __('Categorie Recette') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Categorie Recette</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('categorie-recette.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Code:</strong>
                                    {{ $categorieRecette->code }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nom:</strong>
                                    {{ $categorieRecette->nom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Montant Estime:</strong>
                                    {{ $categorieRecette->montant_estime }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Montant Recouvre:</strong>
                                    {{ $categorieRecette->montant_recouvre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Taux Recouvrement:</strong>
                                    {{ $categorieRecette->taux_recouvrement }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Col1:</strong>
                                    {{ $categorieRecette->col1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Commune :</strong>

                                    {{ $categorieRecette->commune->nom }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
