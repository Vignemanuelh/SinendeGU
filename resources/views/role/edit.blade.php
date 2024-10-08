@extends('dashboard.index')

@section('template_title')
    {{ __('Update') }} Role
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Role</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('role.update', $role->id) }}" role="form">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('role.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
