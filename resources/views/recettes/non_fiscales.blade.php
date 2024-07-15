@extends('dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Recettess Non Fiscales') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('nature-recette-communale.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>

                        </div>
                    </div>
                    @if ($message = Session::get('status'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th >Code</th>
                                    <th >Nom</th>
                                    <th >Tarif</th>
                                    <th >Montant Estime</th>
                                    <th >Montant Recouvre</th>
                                    <th >Taux Recouvrement</th>
                                    <th >Preuve</th>
                                    <th >Fichiers </th>

                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($recettes_non_fiscales as $recette_non_fiscale)
                                    <tr>
                                        <td class="ps-2">{{ $loop->index + 1 }}</td>

                                        <td >{{ $recette_non_fiscale->code }}</td>
                                        <td >{{ $recette_non_fiscale->nom }}</td>
                                        <td >{{ $recette_non_fiscale->tarif }}</td>
                                        <td >{{ $recette_non_fiscale->montant_estime }}</td>
                                        <td >{{ $recette_non_fiscale->montant_recouvre }}</td>
                                        <td >{{ $recette_non_fiscale->taux_recouvrement }} %</td>
                                        <td >{{ $recette_non_fiscale->preuve }}</td>
                                        <td >{{ $recette_non_fiscale->fichiers }}</td>
                                        <td>
                                            <form class="d-flex justify-content-around align-item-center" action="{{ route('nature-recette-communale.destroy', $recette_non_fiscale->id) }}" method="POST">
                                                <a class="" href="{{ route('nature-recette-communale.show', $recette_non_fiscale->id) }}"><i class="fa fa-fw fa-eye" style="color:#0D6EFDFF"></i></a>
                                                <a class="mx-2" href="{{ route('nature-recette-communale.edit', $recette_non_fiscale->id) }}"><i class="fa fa-fw fa-edit" style="color:#198754FF"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <a type="submit" class="me-2" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash" style="color:#dc3545"></i> </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $recettes_non_fiscales->links() !!}
            </div>
        </div>
    </div>
@endsection
