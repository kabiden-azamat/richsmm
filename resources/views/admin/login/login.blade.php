<!DOCTYPE html>
<html lang="ru">
<head>
    @include('admin.login.head')
</head>
<body class="hold-transition theme-primary bg-gradient-primary">

<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">
        @php
            //print_r($errors);
        @endphp
        <div class="col-12">
            <div class="row justify-content-center no-gutters">
                <div class="col-lg-4 col-md-5 col-12">
                    @if($errors->any())
                        <div class="alert alert-error">
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                        </div>
                    @endif
                    <div class="bg-white-10 rounded5">
                        <div class="content-top-agile p-10 pb-0">
                            <h2 class="text-white">{{ env('APP_NAME') }}</h2>
                            <p class="text-white-50 mb-0">{{ __('auth.login_to_access') }}</p>
                        </div>
                        <div class="p-30">
                            <form action="{{ route('admin_auth') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
                                        </div>
                                        <input type="text" name="email" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="{{ __('user.username') }}" value="{{ old('email') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text  bg-transparent text-white"><i class="ti-lock"></i></span>
                                        </div>
                                        <input type="password" name="password" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="{{ __('user.password') }}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkbox text-white">
                                            <input type="checkbox" name="remember_me" id="basic_checkbox_1" value="1">
                                            <label for="basic_checkbox_1">{{ __('user.remember_me') }}</label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                        <button type="submit" name="submit" class="btn btn-danger btn-rounded mt-10">{{ __('user.login') }}</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vendor JS -->
<script src="/admin/js/vendors.min.js"></script>
@yield('scripts')
</body>
</html>
