@extends('dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <div class="d-flex flex-row justify-content-between align-items-center" >
                            <span id="card_title">
                                {{ __('Agent Collecteurs') }}
                            </span>
                             <div class="float-right ">
                                <a href="{{ route('agent-collecteur.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert  alert-success m-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

									<th >Identifiant</th>
									<th >Nom</th>
									<th >Prenom</th>
									<th >Date Naissance</th>
									<th >Npi</th>
									<th >Email</th>
									<th >Telephone</th>
									<th >Type</th>
									<th >Arrondissement</th>
									<th >Quartier</th>
									<th >Photo</th>
									<th >Secretariat Executif Id</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($agentCollecteurs as $agentCollecteur)
                                        <tr >
                                            <td class="ps-2">{{ $loop->index + 1 }}</td>

										<td >{{ $agentCollecteur->identifiant }}</td>
										<td >{{ $agentCollecteur->nom }}</td>
										<td >{{ $agentCollecteur->prenom }}</td>
										<td >{{ $agentCollecteur->date_naissance }}</td>
										<td >{{ $agentCollecteur->npi }}</td>
										<td >{{ $agentCollecteur->email }}</td>
										<td >{{ $agentCollecteur->telephone }}</td>
										<td >{{ $agentCollecteur->type }}</td>
										<td >{{ $agentCollecteur->arrondissement }}</td>
										<td >{{ $agentCollecteur->quartier }}</td>
										<td >{{ $agentCollecteur->photo }}</td>
										<td >{{ $agentCollecteur->secretariat_executif_id }}</td>

                                            <td>
                                                <form class="d-flex justify-content-around align-item-center" action="{{ route('agent-collecteur.destroy', $agentCollecteur->id) }}" method="POST">
{{--                                                    <i class="fa-solid fa-eye fa-shake" style="color: #4221ba;"></i>--}}
{{--                                                    <i href="{{ route('agent-collecteur.show', $agentCollecteur->id) }}" class="fa-eye" style="color: #4221ba;">{{ __('Show') }}</i>--}}
                                                    <a class="" href="{{ route('agent-collecteur.show', $agentCollecteur->id) }}"><i class="fa fa-fw fa-eye" style="color: #0d6efd"></i> </a>
                                                    <a class="mx-2" href="{{ route('agent-collecteur.edit', $agentCollecteur->id) }}"><i class="fa fa-fw fa-edit" style="color: #198754 ;"></i> </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="border-0 me-2" type="submit"  onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash" style="color: #dc3545"></i></a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $agentCollecteurs->links() !!}
            </div>
        </div>
    </div>
@endsection
