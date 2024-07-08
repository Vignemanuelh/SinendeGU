@extends('dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Roles') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('role.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    <th>Nom</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $role->nom }}</td>
                                        <td>
                                            <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                                                <a href="{{ route('role.show', $role->id) }}"><i class="fa fa-fw fa-eye" style="color:#0d6efd"></i> </a>
                                                <a href="{{ route('role.edit', $role->id) }}"><i class="fa fa-fw fa-edit" style="color:#198754"></i> </a>
                                                @csrf
                                                @method('DELETE')
                                                <a onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash" style="color:#dc3545"></i> </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $roles->links() !!}
            </div>
        </div>
    </div>
@endsection
