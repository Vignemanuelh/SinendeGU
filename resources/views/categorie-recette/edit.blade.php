@extends('dashboard.index')


@section('template_title')
    {{ __('Update') }} Categorie Recette
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Categorie Recette</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('categorie-recette.update', $categorieRecette->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('categorie-recette.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
