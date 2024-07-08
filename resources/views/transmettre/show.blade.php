@extends('dashboard.index')


@section('template_title')
    {{ $transmettre->name ?? __('Show') . " " . __('Transmettre') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Transmettre</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('transmettre.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Secretariat Executif Id:</strong>
                                    {{ $transmettre->secretariat_executif_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Piece Justificative Id:</strong>
                                    {{ $transmettre->piece_justificative_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Date Transmission:</strong>
                                    {{ $transmettre->date_transmission }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
