<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="nom" class="form-label">{{ __('Nom') }}</label>
            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom', $user?->nom) }}" id="nom" placeholder="Nom">
            {!! $errors->first('nom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="prenom" class="form-label">{{ __('Prenom') }}</label>
            <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom', $user?->prenom) }}" id="prenom" placeholder="Prenom">
            {!! $errors->first('prenom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="titre" class="form-label">{{ __('Titre') }}</label>
            <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" value="{{ old('titre', $user?->titre) }}" id="titre" placeholder="Titre">
            {!! $errors->first('titre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telephone" class="form-label">{{ __('Telephone') }}</label>
            <input type="tel" name="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{ old('telephone', $user?->telephone) }}" id="telephone" placeholder="Telephone">
            {!! $errors->first('telephone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="npi" class="form-label">{{ __('Npi') }}</label>
            <input type="number" name="npi" class="form-control @error('npi') is-invalid @enderror" value="{{ old('npi', $user?->npi) }}" id="npi" placeholder="Npi">
            {!! $errors->first('npi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="d-flex flex-column form-group  mb-2 mb20">
            <label for="role" class="form-label">{{ __(' Roles') }}</label>
            <select id="role" class="form-control select2 @error('role') is-invalid @enderror" name="roles[]" multiple >
                <option value="">Choisir les nature recette  communale </option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->nom }}</option>
                @endforeach
            </select>
            {!! $errors->first('categorieRecette_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
