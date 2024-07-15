@extends('dashboard.index')

@section('template_title')
    {{ $user->nom . ' ' . $user->prenom ?? "{{ __('Show') User" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Show') }} User</span>
                    </div>
                    <div class="card-body bg-white">
                        <div class="form-group">
                            <strong>{{ __('Nom') }}:</strong>
                            {{ $user->nom }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Prénom') }}:</strong>
                            {{ $user->prenom }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Titre') }}:</strong>
                            {{ $user->titre }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Email') }}:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Téléphone') }}:</strong>
                            {{ $user->telephone }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('NPI') }}:</strong>
                            {{ $user->npi }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Rôles') }}:</strong>
                            <ul>
                            @foreach($roles as $role)
                                    <li>{{ $role->nom }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
