@extends('dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Services') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('service.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

									<th >Code</th>
									<th >Nom</th>
									<th >Categorie Recette Id</th>
									<th >Sous Categorie Recette Id</th>
									<th >Nature Recette Id</th>
									<th >Contribuable Id</th>
									<th >Agent Collecteur Id</th>
									<th >Secretariat Executif Id</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                        <tr>
                                            <td class="ps-2">{{ $loop->index + 1 }}</td>

										<td >{{ $service->code }}</td>
										<td >{{ $service->nom }}</td>
										<td >{{ $service->categorie_recette_id }}</td>
										<td >{{ $service->sous_categorie_recette_id }}</td>
										<td >{{ $service->nature_recette_id }}</td>
										<td >{{ $service->contribuable_id }}</td>
										<td >{{ $service->agent_collecteur_id }}</td>
										<td >{{ $service->secretariat_executif_id }}</td>

                                            <td>
                                                <form class="d-flex justify-content-around align-item-center" action="{{ route('service.destroy', $service->id) }}" method="POST">
                                                    <a class=" " href="{{ route('service.show', $service->id) }}"><i class="fa fa-fw fa-eye" style="color:#0D6EFDFF"></i></a>
                                                    <a class="mx-2" href="{{ route('service.edit', $service->id) }}"><i class="fa fa-fw fa-edit" style="color:#198754FF"></i></a>
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
                {!! $services->links() !!}
            </div>
        </div>
    </div>
@endsection
