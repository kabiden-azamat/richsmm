@extends('admin.layout.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Целевая услуга</h4>
                </div>
                <!-- /.box-header -->
                <form class="form" action="{{ route('admin_services_target_add_post', ['id' => $data['id']]) }}" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Информация</h4>
                        <hr class="my-15">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Название</label>
                                    <input type="text" name="name" class="form-control" placeholder="Название">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Цена</label>
                                    <input type="text" name="price" class="form-control" placeholder="Цена">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('admin_services') }}" type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
                            <i class="ti-trash"></i> Отменить
                        </a>
                        <button type="submit" class="btn btn-rounded btn-primary btn-outline">
                            <i class="ti-save-alt"></i> Добавить
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
