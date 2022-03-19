@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('crud.edit') }} {{ $supplier->name }} (id: {{ $supplier->id }})</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/supplier') }}" title="{{ __('crud.back') }} "><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('crud.back') }} </button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/supplier/' . $supplier->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.supplier.form', ['formMode' => 'Изменить'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
