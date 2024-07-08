@extends('dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contribuables') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('contribuable.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                    <th >Identifiant</th>
                                    <th >Nom</th>
                                    <th >Prenom</th>
                                    <th >Date Naissance</th>
                                    <th >Npi</th>
                                    <th >Email</th>
                                    <th >Telephone</th>
                                    <th >Activite</th>
                                    <th >Arrondissement</th>
                                    <th >Quartier</th>
                                    <th >Maison</th>

                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($contribuables as $contribuable)
                                    <tr>
                                        <td class="ms-2">{{ $loop->index + 1 }}</td>

                                        <td >{{ $contribuable->identifiant }}</td>
                                        <td >{{ $contribuable->nom }}</td>
                                        <td >{{ $contribuable->prenom }}</td>
                                        <td >{{ $contribuable->date_naissance }}</td>
                                        <td >{{ $contribuable->npi }}</td>
                                        <td >{{ $contribuable->email }}</td>
                                        <td >{{ $contribuable->telephone }}</td>
                                        <td >{{ $contribuable->activite }}</td>
                                        <td >{{ $contribuable->arrondissement }}</td>
                                        <td >{{ $contribuable->quartier }}</td>
                                        <td >{{ $contribuable->maison }}</td>

                                        <td>
                                            <form class="d-flex justify-content-around align-item-center" action="{{ route('contribuable.destroy', $contribuable->id) }}" method="POST">
                                                <a class=" " href="{{ route('contribuable.show', $contribuable->id) }}"><i class="fa fa-fw fa-eye" style="color:#0d6efd"></i> </a>
                                                <a class="mx-2" href="{{ route('contribuable.edit', $contribuable->id) }}"><i class="fa fa-fw fa-edit" style="color:#198754"></i> </a>
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
                {!! $contribuables->links() !!}
            </div>
        </div>
    </div>
@endsection
