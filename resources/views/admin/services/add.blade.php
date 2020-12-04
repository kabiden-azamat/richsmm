@extends('admin.layout.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Услуга</h4>
                </div>
                <!-- /.box-header -->
                <form class="form" action="{{ route('admin_services_add_post') }}" enctype="multipart/form-data" method="post">
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
                                    <label>ЧПУ (Отображение в адрессной строке)</label>
                                    <input type="text" name="slug" class="form-control" placeholder="ЧПУ">
                                </div>
                            </div>
                        </div>
                        <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Файлы</h4>
                        <hr class="my-15">
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
        </div>
    </div>
@endsection
