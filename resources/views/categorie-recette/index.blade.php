@extends('dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Categorie Recettes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('categorie-recette.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
									<th >Montant Estime</th>
									<th >Montant Recouvre</th>
									<th >Taux Recouvrement</th>
									<th >Col1</th>
									<th >Commune </th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorieRecettes as $categorieRecette)
                                        <tr>
                                            <td class="ps-2">{{ $loop->index + 1 }}</td>

										<td >{{ $categorieRecette->code }}</td>
										<td >{{ $categorieRecette->nom }}</td>
										<td >{{ $categorieRecette->montant_estime }}</td>
										<td >{{ $categorieRecette->montant_recouvre }}</td>
										<td >{{ $categorieRecette->taux_recouvrement }} %</td>
										<td >{{ $categorieRecette->col1 }}</td>
										<td >{{ $categorieRecette->commune->nom }}</td>
                                            <td>
                                                <form class="d-flex justify-content-around align-item-center" action="{{ route('categorie-recette.destroy', $categorieRecette->id) }}" method="POST">
                                                    <a class="" href="{{ route('categorie-recette.show', $categorieRecette->id) }}"><i class="fa fa-fw fa-eye" style="color: #0d6efd"></i></a>
                                                    <a class="mx-2" href="{{ route('categorie-recette.edit', $categorieRecette->id) }}"><i class="fa fa-fw fa-edit" style="color: #198754 ;"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a type="submit" class="" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash" style="color: #dc3545"></i> </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $categorieRecettes->links() !!}
            </div>
        </div>
    </div>
@endsection
