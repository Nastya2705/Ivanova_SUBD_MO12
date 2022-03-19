@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('tables.selling')}} {{ $selling->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/selling') }}" title="{{ __('crud.back')}}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('crud.back')}}</button></a>
                        <a href="{{ url('/admin/selling/' . $selling->id . '/edit') }}" title="{{ __('crud.edit')}}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ __('crud.edit')}}</button></a>

                        <form method="POST" action="{{ url('admin/selling' . '/' . $selling->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="{{ __('crud.delete')}}" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> {{ __('crud.delete')}}</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>{{ __('crud.id')}}</th>
                                        <td>{{ $selling->id }}</td>
                                    </tr>
                                    <tr><th> Код товара </th>
                                        <td> {{ $selling->product_id }} </td>
                                    </tr>
                                    <tr
                                    ><th> Дата создания </th>
                                    <td> {{ $selling->date_sale }} </td>
                                </tr>
                                <tr>
                                    <th> Сотрудник (кто продал) </th>
                                    <td> {{ $selling->user_id }} </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
