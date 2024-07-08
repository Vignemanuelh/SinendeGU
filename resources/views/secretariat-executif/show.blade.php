@extends('dashboard.index')


@section('template_title')
    {{ $secretariatExecutif->name ?? __('Show') . " " . __('Secretariat Executif') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Secretariat Executif</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('secretariat-executifs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Nom:</strong>
                                    {{ $secretariatExecutif->nom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Prenom:</strong>
                                    {{ $secretariatExecutif->prenom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Titre:</strong>
                                    {{ $secretariatExecutif->titre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $secretariatExecutif->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telephone:</strong>
                                    {{ $secretariatExecutif->telephone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Npi:</strong>
                                    {{ $secretariatExecutif->npi }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
