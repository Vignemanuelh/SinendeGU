@extends('dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Recouvrirs') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('recouvrir.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

									<th >Nature Recette Id</th>
									<th >Agent Collecteur Id</th>
									<th >Date Recouvrement</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recouvrirs as $recouvrir)
                                        <tr>
                                            <td class="ps-2">{{ $loop->index + 1 }}</td>

										<td >{{ $recouvrir->nature_recette_id }}</td>
										<td >{{ $recouvrir->agent_collecteur_id }}</td>
										<td >{{ $recouvrir->date_recouvrement }}</td>

                                            <td class="w-100px">
                                                <form class="d-flex justify-content-around align-item-center" action="{{ route('recouvrir.destroy', $recouvrir->id) }}" method="POST">
                                                    <a class=" " href="{{ route('recouvrir.show', $recouvrir->id) }}"><i class="fa fa-fw fa-eye" style="color:#0D6EFDFF"></i></a>
                                                    <a class="mx-2" href="{{ route('recouvrir.edit', $recouvrir->id) }}"><i class="fa fa-fw fa-edit" style="color:#198754FF"></i></a>
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
                {!! $recouvrirs->links() !!}
            </div>
        </div>
    </div>
@endsection
