@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('tables.product')}} {{ $product->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/product') }}" title="{{ __('crud.back')}}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('crud.back')}}</button></a>
                        <a href="{{ url('/admin/product/' . $product->id . '/edit') }}" title="{{ __('crud.edit')}}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ __('crud.edit')}}</button></a>

                        <form method="POST" action="{{ url('admin/product' . '/' . $product->id) }}" accept-charset="UTF-8" style="display:inline">
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
                                        <td>{{ $product->id }}</td>
                                    </tr>
                                        <th>{{ __('crud.name')}}</th>
                                        <td> {{ $product->name }} </td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('tables.category')}}</th>
                                        <td> {{ $product->category_id }} </td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('tables.product')}}</th>
                                        <td> {{ $product->product_id }} </td>
                                    </tr>
                                    <tr>
                                        <th>Цвет </th>
                                        <td> {{ $product->color }} </td>
                                    </tr>
                                    <tr>
                                        <th>Дата изготовления </th>
                                        <td> {{ $product->date_release }} </td>
                                    </tr>
                                    <tr>
                                        <th>Срок гарантии (месяцев) </th>
                                        <td> {{ $product->	warranty_period_months }} </td>
                                    </tr>
                                    <tr>
                                        <th>Цена </th>
                                        <td> {{ $product->	price }} </td>
                                    </tr>
                                    <tr>
                                        <th>Остаток на складе, шт. </th>
                                        <td> {{ $product->	in_stock }} </td>
                                    </tr>
                                    <tr>
                                        <th>Описание </th>
                                        <td> {{ $product->description }} </td>
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
