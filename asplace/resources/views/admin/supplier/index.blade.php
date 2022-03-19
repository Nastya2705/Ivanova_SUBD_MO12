@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('tables.supplier')}}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/supplier/create') }}" class="btn btn-success btn-sm" title="{{ __('crud.AddNew') }} {{ __('tables.supplier') }}">
                            <i class="fa fa-plus" aria-hidden="true"></i> {{ __('crud.AddNew') }}
                        </a>

                        <form method="GET" action="{{ url('/admin/supplier') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Поиск..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{ __('crud.id') }}</th>
                                        <th>{{ __('crud.inn') }}</th>
                                        <th>{{ __('crud.name') }}</th>
                                        <th>{{ __('crud.address') }}</th>
                                        <th>{{ __('crud.telephone') }}</th>
                                        <th>{{ __('crud.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($supplier as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->inn }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->telephone }}</td>
                                        <td>
                                            <a href="{{ url('/admin/supplier/' . $item->id) }}" title="{{ __('crud.view') }} {{ __('tables.supplier') }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> {{ __('crud.view') }}</button></a>
                                            <a href="{{ url('/admin/supplier/' . $item->id . '/edit') }}" title="{{ __('crud.edit') }} {{ __('tables.supplier') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ __('crud.edit') }}</button></a>

                                            <form method="POST" action="{{ url('/admin/supplier' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="{{ __('crud.delete') }} {{ __('tables.supplier') }}" onclick="return confirm(&quot;Удалить данные?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> {{ __('crud.delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $supplier->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
