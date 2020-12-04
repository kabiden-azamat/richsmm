<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">{{ ($title ?? env('APP_NAME')) }}</h3>
                    @if(isset($breadcrumbs) && !empty($breadcrumbs))
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}"><i class="mdi mdi-home-outline"></i></a></li>
                                @foreach($breadcrumbs as $item)
                                    <li class="breadcrumb-item {{ (isset($item['active']) && $item['active']) ? 'active' : '' }}" aria-current="page">
                                        @if(($item['url'] ?? false))
                                            <a href="{{ $item['url'] }}">
                                        @endif
                                        {{ ($item['name'] ?? 'undefined') }}
                                        @if(($item['url'] ?? false))
                                            </a>
                                        @endif
                                    </li>
                                @endforeach
                            </ol>
                        </nav>
                    </div>
                    @endif
                </div>
                <div class="right-title">
                    <div class="d-flex mt-10 justify-content-end">
                        @if(isset($buttons) && !empty($buttons))
                            @foreach($buttons as $button)
                                <div class="d-lg-flex mr-20 ml-10 d-none">
                                    <a href="{{ ($button['url'] ?? '#') }}" class="btn btn-default">{{ ($button['name'] ?? 'undefined') }}</a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger" style="margin-top: 15px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::has('success_message'))
                <div class="alert alert-success" style="margin-top: 15px;">
                    {{ Session::get('success_message') }}
                </div>
            @endif
        </div>
        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
    </div>
</div>
