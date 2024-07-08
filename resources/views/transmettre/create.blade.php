@extends('dashboard.index')


@section('template_title')
    {{ __('Create') }} Transmettre
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Transmettre</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('transmettre.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row padding-1 p-1">
                                <div class="col-md-12">

                                    <div class="form-group mb-2 mb20">
                                        <label for="secretariat_executif_id" class="form-label">{{ __('Secretariat Executif Id') }}</label>
                                        <input type="text" name="secretariat_executif_id" class="form-control @error('secretariat_executif_id') is-invalid @enderror" value="{{ old('secretariat_executif_id') }}" id="secretariat_executif_id" placeholder="Secretariat Executif Id">
                                        {!! $errors->first('secretariat_executif_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="piece_justificative_id" class="form-label">{{ __('Piece Justificative Id') }}</label>
                                        <input type="text" name="piece_justificative_id" class="form-control @error('piece_justificative_id') is-invalid @enderror" value="{{ old('piece_justificative_id') }}" id="piece_justificative_id" placeholder="Piece Justificative Id">
                                        {!! $errors->first('piece_justificative_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="date_transmission" class="form-label">{{ __('Date Transmission') }}</label>
                                        <input type="text" name="date_transmission" class="form-control @error('date_transmission') is-invalid @enderror" value="{{ old('date_transmission') }}" id="date_transmission" placeholder="Date Transmission">
                                        {!! $errors->first('date_transmission', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>

                                </div>
                                <div class="col-md-12 mt20 mt-2">
                                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
