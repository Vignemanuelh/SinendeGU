<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="code" class="form-label">{{ __('Code') }}</label>
            <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" value="{{ old('code', $pieceJustificative?->code) }}" id="code" placeholder="Code">
            {!! $errors->first('code', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nom" class="form-label">{{ __('Nom') }}</label>
            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom', $pieceJustificative?->nom) }}" id="nom" placeholder="Nom">
            {!! $errors->first('nom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nature_recette_communale_id" class="form-label">{{ __('Nature recette communale') }}</label>
            <select id="nature_recette_communale_id" class="form-control select2 @error('nature_recette_communale_id') is-invalid @enderror" name="nature_recette_communale_id" multiple>
                <option value="">Choisir une sous categorie recette</option>
                @foreach($natureRecetteCommunales as $natureRecetteCommunale)
                    <option value="{{ $natureRecetteCommunale->id }}">{{ $natureRecetteCommunale->nom }}</option>
                @endforeach
            </select>
            {!! $errors->first('nature_recette_communale_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
