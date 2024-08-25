<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="contribuable_id" class="form-label">{{ __('Contribuable') }}</label>
            <select name="contribuable_id" class="select2 form-control @error('contribuable_id') is-invalid @enderror">
                @foreach($contribuables as $contribuable)
                    <option value="{{ $contribuable->id }}" {{ $paiement->contribuable_id == $contribuable->id ? 'selected' : '' }}>{{ $contribuable->nom }}</option>
                @endforeach
            </select>
            {!! $errors->first('contribuable_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="nature_recette_communale_id" class="form-label">{{ __('Nature Recette Communale') }}</label>
            <select name="nature_recette_communale_id" class="select2 form-control @error('nature_recette_communale_id') is-invalid @enderror">
                @foreach($nature_recette_communales as $natureRecette)
                    <option value="{{ $natureRecette->id }}" {{ $paiement->nature_recette_communale_id == $natureRecette->id ? 'selected' : '' }}>{{ $natureRecette->nom }}</option>
                @endforeach
            </select>
            {!! $errors->first('nature_recette_communale_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="date_paiement" class="form-label">{{ __('Date de Paiement') }}</label>
            <input type="date" name="date_paiement" class="form-control @error('date_paiement') is-invalid @enderror" value="{{ old('date_paiement', $paiement->date_paiement) }}" id="date_paiement">
            {!! $errors->first('date_paiement', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="montant" class="form-label">{{ __('Montant') }}</label>
            <input type="text" name="montant" class="form-control @error('montant') is-invalid @enderror" value="{{ old('montant', $paiement->montant) }}" id="montant" placeholder="Montant">
            {!! $errors->first('montant', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
