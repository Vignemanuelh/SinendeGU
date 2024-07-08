@extends('dashboard.index')


@section('template_title')
    {{ __('Create') }} Recouvrir
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Recouvrir</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('recouvrir.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row padding-1 p-1">
                                <div class="col-md-12">

                                    <div class="form-group mb-2 mb20">
                                        <label for="nature_recette_id" class="form-label">{{ __('Nature Recette Id') }}</label>
                                        <input type="text" name="nature_recette_id" class="form-control @error('nature_recette_id') is-invalid @enderror" value="{{ old('nature_recette_id') }}" id="nature_recette_id" placeholder="Nature Recette Id">
                                        {!! $errors->first('nature_recette_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="agent_collecteur_id" class="form-label">{{ __('Agent Collecteur Id') }}</label>
                                        <input type="text" name="agent_collecteur_id" class="form-control @error('agent_collecteur_id') is-invalid @enderror" value="{{ old('agent_collecteur_id') }}" id="agent_collecteur_id" placeholder="Agent Collecteur Id">
                                        {!! $errors->first('agent_collecteur_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="date_recouvrement" class="form-label">{{ __('Date Recouvrement') }}</label>
                                        <input type="text" name="date_recouvrement" class="form-control @error('date_recouvrement') is-invalid @enderror" value="{{ old('date_recouvrement') }}" id="date_recouvrement" placeholder="Date Recouvrement">
                                        {!! $errors->first('date_recouvrement', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
