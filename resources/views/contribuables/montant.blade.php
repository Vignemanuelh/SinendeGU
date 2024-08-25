@extends('dashboard.index')

@section('content')
    <div class="container-fluid">
        @foreach($contribuables as $contribuable)
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span class="fw-bold" id="card_title">
                                {{ $contribuable->nom.' '.$contribuable->prenom }}
                            </span>


                            <div class="float-right">
                                <a href="{{ route('nature-recette-communale.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    <th >Tarif</th>
                                    <th >Montant Estime</th>
                                    <th >Montant Recouvre</th>
                                    <th >Taux Recouvrement</th>
                                    <th >Preuve</th>
                                    <th >Fichiers</th>
                                    <th >Montat Du</th>

                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($contribuable->natureRecettes as $natureRecetteCommunale)
                                    <tr>
                                        <td class="ps-2">{{$loop->index+1 }}</td>

                                        <td >{{ $natureRecetteCommunale->code }}</td>
                                        <td >{{ $natureRecetteCommunale->nom }}</td>
                                        <td >{{ $natureRecetteCommunale->tarif }}</td>
                                        <td >{{ $natureRecetteCommunale->montant_estime }}</td>
                                        <td >{{ $natureRecetteCommunale->montant_recouvre }}</td>
                                        <td >{{ $natureRecetteCommunale->taux_recouvrement }}</td>
                                        <td >{{ $natureRecetteCommunale->preuve }}</td>
                                        <td >{{ $natureRecetteCommunale->fichiers }}</td>
                                        @foreach ($contribuable->montantContribuable as $montant)
                                            @if($natureRecetteCommunale->pivot->contribuable_id == $montant->contribuable_id && $natureRecetteCommunale->pivot->nature_recette_communale_id == $montant->nature_recette_communale_id)
                                                <td >{{ $montant->montant_du }}</td>
                                            @endif
                                        @endforeach
                                        <td>
                                            <form class="d-flex justify-content-around align-item-center" action="{{ route('nature-recette-communale.destroy', $natureRecetteCommunale->id) }}" method="POST">
                                                <a class="" href="{{ route('nature-recette-communale.show', $natureRecetteCommunale->id) }}"><i class="fa fa-fw fa-eye" style="color:#0D6EFDFF"></i></a>
                                                <a class="mx-2" href="{{ route('nature-recette-communale.edit', $natureRecetteCommunale->id) }}"><i class="fa fa-fw fa-edit" style="color:#198754FF"></i></a>
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
            </div>
        </div>
        @endforeach
    </div>
{{--    {!! $contribuables->links() !!}--}}

@endsection
