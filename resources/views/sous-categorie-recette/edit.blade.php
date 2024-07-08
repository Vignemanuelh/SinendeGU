@extends('dashboard.index')


@section('template_title')
    {{ __('Update') }} Sous Categorie Recette
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Sous Categorie Recette</span>
                    </div>
                    <div class="card-body bg-white">
{{--                        <form method="POST" action="{{ route('sous-categorie-recette.update', $sousCategorieRecette->id) }}"  role="form" enctype="multipart/form-data">--}}
                        <form method="POST" action="{{ route('sous-categorie-recette.update', $sousCategorieRecette->id) }}"  role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                            @csrf

                            @include('sous-categorie-recette.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
