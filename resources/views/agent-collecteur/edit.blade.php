@extends('dashboard.index')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Agent Collecteur</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('agent-collecteur.update', $agentCollecteur->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('agent-collecteur.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
