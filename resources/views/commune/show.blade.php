@extends('dashboard.index')


@section('template_title')
    {{ $commune->name ?? __('Show') . " " . __('Commune') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Commune</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('commune.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Num Compte:</strong>
                                    {{ $commune->num_compte }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Departement:</strong>
                                    {{ $commune->departement }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nom:</strong>
                                    {{ $commune->nom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Statut:</strong>
                                    {{ $commune->statut }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Superficie:</strong>
                                    {{ $commune->superficie }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Population:</strong>
                                    {{ $commune->population }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
