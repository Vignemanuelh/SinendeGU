@extends('dashboard.index')


@section('template_title')
    {{ $recouvrir->name ?? __('Show') . " " . __('Recouvrir') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Recouvrir</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('recouvrir.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Nature Recette Id:</strong>
                                    {{ $recouvrir->nature_recette_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Agent Collecteur Id:</strong>
                                    {{ $recouvrir->agent_collecteur_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Date Recouvrement:</strong>
                                    {{ $recouvrir->date_recouvrement }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
