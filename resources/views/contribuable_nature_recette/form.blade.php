<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="contribuable_id" class="form-label">{{ __('Contribuable ID') }}</label>
            <input type="text" name="contribuable_id" class="form-control @error('contribuable_id') is-invalid @enderror" value="{{ old('contribuable_id', $contribuableNatureRecette?->contribuable_id) }}" id="contribuable_id" placeholder="Contribuable ID">
            {!! $errors->first('contribuable_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nature_recette_communale_id" class="form-label">{{ __('Nature Recette Communale ID') }}</label>
            <input type="text" name="nature_recette_communale_id" class="form-control @error('nature_recette_communale_id') is-invalid @enderror" value="{{ old('nature_recette_communale_id', $contribuableNatureRecette?->nature_recette_communale_id) }}" id="nature_recette_communale_id" placeholder="Nature Recette Communale ID">
            {!! $errors->first('nature_recette_communale_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="montant_du" class="form-label">{{ __('Montant Dû') }}</label>
            <input type="text" name="montant_du" class="form-control @error('montant_du') is-invalid @enderror" value="{{ old('montant_du', $contribuableNatureRecette?->montant_du) }}" id="montant_du" placeholder="Montant Dû">
            {!! $errors->first('montant_du', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
