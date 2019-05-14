@extends('layouts.app_demo')

@section('title',"Товары | Админ панель")

@section('content')
    @include('admin.components.navbar')
    @include('admin.components.left-sidebar')
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                @include('components.message')
                <div class="col-md-6">
                    <!-- MULTI CHARTS -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Редактирование товара</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.products.form.edit')
                        </div>
                    </div>
                    <!-- END MULTI CHARTS -->
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
@endsection

@push('scripts')

@endpush