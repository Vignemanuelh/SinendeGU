@extends('dashboard.index')


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Categorie Recette</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('categorie-recette.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row padding-1 p-1">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="form-group mb-2 col-6 mb20">
                                            <label for="code" class="form-label">{{ __('Code') }}</label>
                                            <input type="text" name="code" class="form-control @error('code') is-invalid @enderror"  id="code" placeholder="Code">
                                            {!! $errors->first('code', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                        </div>
                                        <div class="form-group mb-2 col-6 mb20">
                                            <label for="nom" class="form-label">{{ __('Nom') }}</label>
                                            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror"  id="nom" placeholder="Nom">
                                            {!! $errors->first('nom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-6 mb-2 mb20">
                                            <label for="montant_estime" class="form-label">{{ __('Montant Estime') }}</label>
                                            <div class="input-group">
                                                <input type="number" step="any" name="montant_estime" class="form-control @error('montant_estime') is-invalid @enderror"  id="montant_estime" placeholder="Montant Estime">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">FCFA</span>
                                                </div>
                                                {!! $errors->first('montant_estime', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                            </div>
                                        </div>
                                        <div class="form-group col-6 mb-2 mb20">
                                            <label for="montant_recouvre" class="form-label">{{ __('Montant Recouvre') }}</label>
                                            <div class="input-group">
                                                <input type="number" step="any" name="montant_recouvre" class="form-control @error('montant_recouvre') is-invalid @enderror"  id="montant_recouvre" placeholder="Montant Recouvre">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">FCFA</span>
                                                </div>
                                            </div>
                                            {!! $errors->first('montant_recouvre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-6 mb-2 mb20">
                                            <label for="taux_recouvrement" class="form-label">{{ __('Taux Recouvrement') }}</label>
                                            <div class="input-group">
                                                <input type="number" step="any" name="taux_recouvrement" class="form-control @error('taux_recouvrement') is-invalid @enderror"  id="taux_recouvrement" placeholder="Taux Recouvrement">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                            {!! $errors->first('taux_recouvrement', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                        </div>
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
