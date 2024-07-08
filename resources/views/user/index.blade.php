@extends('dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Users') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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
                                    <th>Prénom</th>
                                    <th>Titre</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $user->nom }}</td>
                                        <td>{{ $user->prenom }}</td>
                                        <td>{{ $user->titre }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <form class="d-flex justify-content-around align-item-center" action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                <a href="{{ route('user.show', $user->id) }}"><i class="fa fa-fw fa-eye" style="color:#0d6efd"></i></a>
                                                <a class="mx-2" href="{{ route('user.edit', $user->id) }}"><i class="fa fa-fw fa-edit" style="color:#198754"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <a type="submit" class="me-2" onclick="event.preventDefault(); this.closest('form').submit();"><i class="fa fa-fw fa-trash" style="color:#dc3545"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
