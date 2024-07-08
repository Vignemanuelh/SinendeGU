@extends('dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Communes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('commune.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

									<th >Num Compte</th>
									<th >Departement</th>
									<th >Nom</th>
									<th >Statut</th>
									<th >Superficie</th>
									<th >Population</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($communes as $commune)
                                        <tr>

										<td class="ps-2" >{{ $loop->index +1 }}</td>
										<td >{{ $commune->num_compte }}</td>
										<td >{{ $commune->departement }}</td>
										<td >{{ $commune->nom }}</td>
										<td >{{ $commune->statut }}</td>
										<td >{{ $commune->superficie }}</td>
										<td >{{ $commune->population }}</td>

                                            <td>
                                                <form class="d-flex justify-content-around align-item-center" action="{{ route('commune.destroy', $commune->id) }}" method="POST">
                                                    <a class=" " href="{{ route('commune.show', $commune->id) }}"><i class="fa fa-fw fa-eye" style="color: #0d6efd"></i> </a>
                                                    <a class="mx-2" href="{{ route('commune.edit', $commune->id) }}"><i class="fa fa-fw fa-edit" style="color: #198754"></i> </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a type="submit" class="me-2" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash" style="color: #dc3545"></i> </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{ $communes->links() }}
            </div>
        </div>
    </div>
@endsection
