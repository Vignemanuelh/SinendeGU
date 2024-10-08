@extends('dashboard.index')

@section('template_title')
    {{ __('Update') }} User
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} User</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('user.update', $user->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('user.form', ['user' => $user, 'roles' => $roles])

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
