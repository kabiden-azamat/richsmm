@extends('admin.layout.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">{{ $title }}</h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>ЧПУ</th>
                                <th>Иконка</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td><img src="{{ $item->icon }}" alt="{{ $item->name }}" style="width: 16px; height: 16px;"></td>
                                        <td class="text-right">
                                            <a href="{{ route('admin_services_edit', ['id' => $item->id]) }}" class="btn btn-primary">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                            <a href="{{ route('admin_services_remove_post', ['id' => $item->id]) }}" onclick="event.preventDefault(); document.getElementById('remove_service_{{ $item->id }}').submit();" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form id="remove_service_{{ $item->id }}" action="{{ route('admin_services_remove_post', ['id' => $item->id]) }}" method="post">
                                                {{ csrf_field() }}
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="pagination-center">
                {{ $data->links("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>
@endsection
