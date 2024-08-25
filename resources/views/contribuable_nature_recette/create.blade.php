@extends('dashboard.index')

@section('template_title')
    {{ __('Create Contribuable Nature Recette') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create Contribuable Nature Recette') }}</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('contribuable_nature_recette.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="row padding-1 p-1">
                                <div class="col-md-12">
                                    <div class="d-flex flex-column col-6 form-group  mb-2 mb20">
                                        <label for="contribuable_id" class="form-label">{{ __('Contribuable') }}</label>
                                        <select id="contribuable_id" class="form-control select2 @error('contribuable_id') is-invalid @enderror" name="contribuable_id" >
                                            <option value="">Choisir un Contribuable</option>
                                            @foreach($contribuables as $contribuable)
                                                <option value="{{ $contribuable->id }}">{{ $contribuable->nom }}</option>
                                            @endforeach
                                        </select>
                                        {!! $errors->first('contribuable_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="d-flex flex-column col-6 form-group  mb-2 mb20">
                                        <label for="nature_recette_communale_id" class="form-label">{{ __('Nature Recette Communale ') }}</label>
                                        <select id="nature_recette_communale_id" class="form-control select2 @error('nature_recette_communale_id') is-invalid @enderror" name="nature_recette_communale_id" >
                                            <option value="">Choisir une Nature Recette Communale </option>
                                            @foreach($nature_recette_communales as $nature_recette_communale)
                                                <option value="{{ $nature_recette_communale->id }}">{{ $nature_recette_communale->nom }}</option>
                                            @endforeach
                                        </select>
                                        {!! $errors->first('nature_recette_communale_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="montant_du" class="form-label">{{ __('Montant Dû') }}</label>
                                        <input type="text" name="montant_du" class="form-control @error('montant_du') is-invalid @enderror" value="{{ old('montant_du') }}" id="montant_du" placeholder="Montant Dû">
                                        {!! $errors->first('montant_du', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
