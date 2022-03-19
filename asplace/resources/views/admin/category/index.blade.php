@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('tables.category') }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/category/create') }}" class="btn btn-success btn-sm" title=" {{ __('crud.AddNew') }}">
                            <i class="fa fa-plus" aria-hidden="true"></i>  {{ __('crud.AddNew') }}
                        </a>

                        <form method="GET" action="{{ url('/admin/category') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>{{ __('crud.name') }}</th>
                                        <th>{{ __('crud.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($category as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="{{ url('/admin/category/' . $item->id) }}" title="{{ __('crud.view') }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> {{ __('crud.view') }}</button></a>
                                            <a href="{{ url('/admin/category/' . $item->id . '/edit') }}" title="{{ __('crud.edit') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ __('crud.edit') }}</button></a>

                                            <form method="POST" action="{{ url('/admin/category' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="{{ __('crud.delete') }}" onclick="return confirm(&quot;{{ __('crud.delete') }} {{ __('tables.category') }}?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> {{ __('crud.delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $category->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
