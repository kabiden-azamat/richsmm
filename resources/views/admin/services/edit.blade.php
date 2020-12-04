@extends('admin.layout.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        @if($data['parent_id'] > 0)
                            Подуслуга
                        @else
                            Услуга
                        @endif
                    </h4>
                </div>
                <!-- /.box-header -->
                <form class="form" action="{{ route('admin_services_edit_post', ['id' => $data['id']]) }}" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Информация</h4>
                        <hr class="my-15">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Название</label>
                                    <input type="text" name="name" class="form-control" placeholder="Название" value="{{ $data['name'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>ЧПУ (Отображение в адрессной строке)</label>
                                    <input type="text" name="slug" class="form-control" placeholder="ЧПУ" value="{{ $data['slug'] }}">
                                </div>
                            </div>
                        </div>
                        <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Файлы</h4>
                        <hr class="my-15">
                        @if (isset($data['icon']) && !empty($data['icon']))
                            <img src="{{ $data['icon'] }}" alt="{{ $data['name'] }}" style="max-width: 100px;">
                        @endif
                        <div class="form-group">
                            <label>Выберите иконку</label>
                            <label class="file">
                                <input type="file" name="icon" id="file">
                            </label>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('admin_services') }}" type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
                            <i class="ti-trash"></i> Отменить
                        </a>
                        <button type="submit" class="btn btn-rounded btn-primary btn-outline">
                            <i class="ti-save-alt"></i> Сохранить
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
            @if($data['parent_id'] == null)
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Подуслуги</h4>
                </div>
                <div class="box-body">
                    <div class="text-right">
                        <a href="{{ route('admin_services_add_post', ['id' => $data['id']]) }}" class="btn btn-default">Добавить подуслугу</a>
                    </div>
                    <div class="my-15"></div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Иконка</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subServices as $subService)
                            <tr>
                                <td>{{ $subService->id }}</td>
                                <td>{{ $subService->name }}</td>
                                <td>
                                    <img src="{{ $subService->icon }}" alt="{{ $subService->name }}" style="max-width: 16px;">
                                </td>
                                <td class="text-right">
                                    <a href="{{ route('admin_services_edit', ['id' => $subService->id]) }}" class="btn btn-primary">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a href="{{ route('admin_services_remove_post', ['id' => $subService->id]) }}" onclick="event.preventDefault(); document.getElementById('remove_service_{{ $subService->id }}').submit();" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form id="remove_service_{{ $subService->id }}" action="{{ route('admin_services_remove_post', ['id' => $subService->id]) }}" method="post">
                                        {{ csrf_field() }}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-center">
                        {{ $subServices->links("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
            @else
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Целевые услуги</h4>
                    </div>
                    <div class="box-body">
                        <div class="text-right">
                            <a href="{{ route('admin_services_target_add', ['id' => $data['id']]) }}" class="btn btn-default">Добавить целевую услугу</a>
                        </div>
                        <div class="my-15"></div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Цена</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subServices as $subService)
                                <tr>
                                    <td>{{ $subService->id }}</td>
                                    <td>{{ $subService->name }}</td>
                                    <td>{{ $subService->price }} руб.</td>
                                    <td class="text-right">
                                        <a href="{{ route('admin_services_target_edit', ['id' => $data['id'], 'id2' => $subService->id]) }}" class="btn btn-primary">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>
                                        <a href="{{ route('admin_services_target_remove_post', ['id' => $data['id'], 'id2' => $subService->id]) }}" onclick="event.preventDefault(); document.getElementById('remove_service_{{ $subService->id }}').submit();" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="remove_service_{{ $subService->id }}" action="{{ route('admin_services_target_remove_post', ['id' => $data['id'], 'id2' => $subService->id]) }}" method="post">
                                            {{ csrf_field() }}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-center">
                            {{ $subServices->links("pagination::bootstrap-4") }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
