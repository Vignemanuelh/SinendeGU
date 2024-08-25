@extends('dashboard.index')

@section('template_title')
    {{ __('Update') }} Paiement
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Paiement</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('paiement.update', $paiement->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('paiement.form', ['paiement' => $paiement])

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
