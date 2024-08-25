@extends('dashboard.index')


@section('template_title')
    {{ $pieceJustificative->name ?? __('Show') . " " . __('Piece Justificative') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Piece Justificative</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('piece-justificative.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Code:</strong>
                                    {{ $pieceJustificative->code }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nom:</strong>
                                    {{ $pieceJustificative->nom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nature recette communale:</strong>
                                    {{ $pieceJustificative->natureRecetteCommunale->nom }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
