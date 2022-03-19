@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Student {{ $student->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/students') }}" title=" {{ __('crud.back') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('crud.back') }} </button></a>
                        <a href="{{ url('/admin/students/' . $student->id . '/edit') }}" title="{{ __('crud.edit') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ __('crud.edit') }}</button></a>

                        <form method="POST" action="{{ url('admin/students' . '/' . $student->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="{{ __('crud.delete') }}" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> {{ __('crud.delete') }}</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>{{ __('crud.id') }}</th><td>{{ $student->id }}</td>
                                    </tr>
                                    <tr><th> {{ __('crud.name') }} </th><td> {{ $student->name }} </td></tr><tr><th> {{ __('crud.address') }} </th><td> {{ $student->address }} </td></tr><tr><th> {{ __('crud.telephone') }} </th><td> {{ $student->telephone }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
