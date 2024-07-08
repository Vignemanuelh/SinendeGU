@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group mb-2 mb20">
                            <label for="nom" class="form-label">{{ __('Nom') }}</label>
                            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{old('nom')}}" id="nom" placeholder="Nom">
                            {!! $errors->first('nom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="prenom" class="form-label">{{ __('Prenom') }}</label>
                            <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{old('prenom')}}" id="prenom" placeholder="Prenom">
                            {!! $errors->first('prenom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" placeholder="Email">
                            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="password" class="form-label">{{ __('Mot de passe') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            {!! $errors->first('password', 'swarp', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="password-confirm" class="form-label">{{ __('Confirmez mot de passe') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group mb-2 mb20">
                            <label for="titre" class="form-label">{{ __('Titre') }}</label>
                            <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" value="{{old('titre')}}" id="titre" placeholder="Titre">
                            {!! $errors->first('titre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="telephone" class="form-label">{{ __('Telephone') }}</label>
                            <input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{old('telephone')}}" id="telephone" placeholder="Telephone">
                            {!! $errors->first('telephone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="npi" class="form-label">{{ __('Npi') }}</label>
                            <input type="text" name="npi" class="form-control @error('npi') is-invalid @enderror" value="{{old('npi')}}" id="npi" placeholder="Npi">
                            {!! $errors->first('npi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                        </div>

{{--                        <div class="row mb-3">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
