@extends('dashboard.index')

@section('template_title')
    {{ __('Contribuable Nature Recette') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Contribuable Nature Recette') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('contribuable_nature_recette.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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
                                    <th>Contribuable </th>
                                    <th>Nature Recette Communale </th>
                                    <th>Montant Dû</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($contribuableNatureRecettes as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        @foreach($contribuables as $contribuable)
                                            @if($item->contribuable_id == $contribuable->id)
                                                <td>{{ $contribuable->nom }}</td>
                                            @endif
                                        @endforeach
                                        @foreach($nature_recette_communales as $nature_recette_communale)
                                            @if($item->nature_recette_communale_id == $nature_recette_communale->id)
                                                <td>{{ $nature_recette_communale->nom }}</td>
                                            @endif
                                        @endforeach
                                        <td>{{ $item->montant_du }}</td>
                                        <td>
                                            <form class="d-flex justify-content-around align-item-center" action="{{ route('contribuable_nature_recette.destroy', $item->id) }}" method="POST">
                                                <a href="{{ route('contribuable_nature_recette.show', $item->id) }}"><i class="fa fa-fw fa-eye" style="color: #0d6efd"></i></a>
                                                <a href="{{ route('contribuable_nature_recette.edit', $item->id) }}"><i class="fa fa-fw fa-edit" style="color: #198754"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <a type="submit" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash" style="color: #dc3545"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{ $contribuableNatureRecettes->links() }}
            </div>
        </div>
    </div>
@endsection
