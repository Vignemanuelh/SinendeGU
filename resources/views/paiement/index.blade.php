@extends('dashboard.index')

@section('template_title')
    {{ __('Paiements') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Paiements') }}
                        </span>

                            <div class="float-right">
                                <a href="{{ route('paiement.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover ">
                                <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>Contribuable</th>
                                    <th>Nature Recette Communale</th>
                                    <th>Date de Paiement</th>
                                    <th>Montant</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($paiements as $paiement)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        @foreach($contribuables as $contribuable)
                                            @if($paiement->contribuable_id == $contribuable->id)
                                                <td>{{ $contribuable->nom }}</td>
                                            @endif
                                        @endforeach
                                        @foreach($nature_recette_communales as $nature_recette_communale)
                                            @if($paiement->nature_recette_communale_id == $nature_recette_communale->id)
                                                <td>{{ $nature_recette_communale->nom }}</td>
                                            @endif
                                        @endforeach
                                        <td>{{ $paiement->date_paiement }}</td>
                                        <td>{{ $paiement->montant }}</td>
                                        <td>
                                            <form action="{{ route('paiement.destroy', $paiement->id) }}" method="POST" class="d-flex justify-content-around align-item-center">
                                                <a href="{{ route('paiement.show', $paiement->id) }}" class=""><i class="fa fa-fw fa-eye" style="color: #0d6efd"></i></a>
                                                <a href="{{ route('paiement.edit', $paiement->id) }}" class="mx-2"><i class="fa fa-fw fa-edit" style="color: #198754"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <a onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;" class="me-2"><i class="fa fa-fw fa-trash" style="color: #dc3545"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{ $paiements->links() }}
            </div>
        </div>
    </div>
@endsection
