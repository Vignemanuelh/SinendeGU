@extends('dashboard.index')

@section('template_title')
    {{ $paiement->id ?? __('Show') . " " . __('Paiement') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Paiement</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('paiement.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Contribuable:</strong>
                            @foreach($contribuables as $contribuable)
                                @if($paiement->contribuable_id == $contribuable->id)
                                    <td>{{ $contribuable->nom }}</td>
                                @endif
                            @endforeach
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nature Recette Communale:</strong>
                            @foreach($nature_recette_communales as $nature_recette_communale)
                                @if($paiement->nature_recette_communale_id == $nature_recette_communale->id)
                                    <td>{{ $nature_recette_communale->nom }}</td>
                                @endif
                            @endforeach
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Date de Paiement:</strong>
                            {{ $paiement->date_paiement }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Montant:</strong>
                            {{ $paiement->montant }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
