@extends('dashboard.index')


@section('template_title')
    {{ __('Update') }} Recouvrir
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Recouvrir</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('recouvrir.update', $recouvrir->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('recouvrir.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
