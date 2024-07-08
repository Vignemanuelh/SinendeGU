@extends('dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sous Categorie Recettes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('sous-categorie-recette.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
									<th >Categorie Recette</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sousCategorieRecettes as $sousCategorieRecette)
                                        <tr>
                                            <td class="ps-2">{{ $loop->index + 1 }}</td>

										<td >{{ $sousCategorieRecette->code }}</td>
										<td >{{ $sousCategorieRecette->nom }}</td>
										<td >{{ $sousCategorieRecette->montant_estime }}</td>
										<td >{{ $sousCategorieRecette->montant_recouvre }}</td>
										<td >{{ $sousCategorieRecette->taux_recouvrement }}</td>
										<td >{{ $sousCategorieRecette->categorieRecette->nom }}</td>

                                            <td class="w-100px">
                                                <form class="d-flex justify-content-around align-item-center" action="{{ route('sous-categorie-recette.destroy', $sousCategorieRecette->id) }}" method="POST">
                                                    <a class=" " href="{{ route('sous-categorie-recette.show', $sousCategorieRecette->id) }}"><i class="fa fa-fw fa-eye" style="color:#0D6EFDFF"></i></a>
                                                    <a class="mx-2" href="{{ route('sous-categorie-recette.edit', $sousCategorieRecette->id) }}"><i class="fa fa-fw fa-edit" style="color:#198754FF"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a type="submit" class="me-2" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash" style="color:#DC3545FF "></i></a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $sousCategorieRecettes->links() !!}
            </div>
        </div>
    </div>
@endsection
