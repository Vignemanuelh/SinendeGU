@extends('dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-heade row">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Transmettres') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('transmettre.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

									<th >Secretariat Executif Id</th>
									<th >Piece Justificative Id</th>
									<th >Date Transmission</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transmettres as $transmettre)
                                        <tr>
                                            <td class="ps-2">{{ $loop->index + 1 }}</td>

										<td >{{ $transmettre->secretariat_executif_id }}</td>
										<td >{{ $transmettre->piece_justificative_id }}</td>
										<td >{{ $transmettre->date_transmission }}</td>

                                            <td class="w-100px">
                                                <form class="d-flex justify-content-around align-item-center" action="{{ route('transmettre.destroy', $transmettre->id) }}" method="POST">
                                                    <a class=" " href="{{ route('transmettre.show', $transmettre->id) }}"><i class="fa fa-fw fa-eye" style="color:#0D6EFDFF"></i></a>
                                                    <a class="mx-2" href="{{ route('transmettre.edit', $transmettre->id) }}"><i class="fa fa-fw fa-edit" style="color:#198754FF"></i></a>
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
                {!! $transmettres->links() !!}
            </div>
        </div>
    </div>
@endsection
