@extends('layouts.app_demo')


@section('title',"Notifications | Klorofil - Free Bootstrap Dashboard Template")

@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/linearicons/style.css') }}">
@endpush

@section('content')
    @include('admin.demo.components.navbar')
    @include('admin.demo.components.left-sidebar')
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <h3 class="page-title">Notifications</h3>
                <div id="toastr-demo" class="panel">
                    <div class="panel-body">
                        <!-- CONTEXTUAL -->
                        <h4>Context</h4>
                        <p class="demo-button">
                            <button type="button" class="btn btn-primary btn-toastr" data-context="info"
                                    data-message="This is general theme info" data-position="top-right">General Info
                            </button>
                            <button type="button" class="btn btn-success btn-toastr" data-context="success"
                                    data-message="This is success info" data-position="top-right">Success Info
                            </button>
                            <button type="button" class="btn btn-warning btn-toastr" data-context="warning"
                                    data-message="This is warning info" data-position="top-right">Warning Info
                            </button>
                            <button type="button" class="btn btn-danger btn-toastr" data-context="error"
                                    data-message="This is error info" data-position="top-right">Error Info
                            </button>
                        </p>
                        <!-- END CONTEXTUAL -->
                        <br>
                        <!-- POSITION -->
                        <h4>Position</h4>
                        <p class="demo-button">
                            <button type="button" class="btn btn-default btn-toastr" data-context="info"
                                    data-message="Hi, I'm here" data-position="bottom-right">Bottom Right
                            </button>
                            <button type="button" class="btn btn-default btn-toastr" data-context="info"
                                    data-message="Hi, I'm here" data-position="bottom-left">Bottom Left
                            </button>
                            <button type="button" class="btn btn-default btn-toastr" data-context="info"
                                    data-message="Hi, I'm here" data-position="top-left">Top Left
                            </button>
                            <button type="button" class="btn btn-default btn-toastr" data-context="info"
                                    data-message="Hi, I'm here" data-position="top-right">Top Right
                            </button>
                            <button type="button" class="btn btn-default btn-toastr" data-context="info"
                                    data-message="Hi, I'm here" data-position="top-full-width">Top Full Width
                            </button>
                            <button type="button" class="btn btn-default btn-toastr" data-context="info"
                                    data-message="Hi, I'm here" data-position="bottom-full-width">Bottom Full Width
                            </button>
                            <button type="button" class="btn btn-default btn-toastr" data-context="info"
                                    data-message="Hi, I'm here" data-position="top-center">Top Center
                            </button>
                            <button type="button" class="btn btn-default btn-toastr" data-context="info"
                                    data-message="Hi, I'm here" data-position="bottom-center">Bottom Center
                            </button>
                        </p>
                        <!-- END POSITION -->
                        <br>
                        <!-- CALLBACK -->
                        <h4>Callback</h4>
                        <p class="demo-button">
                            <button type="button" class="btn btn-default btn-toastr-callback" id="toastr-callback1"
                                    data-context="info" data-message="onShown and onHidden callback demo">onShown and
                                onHidden
                            </button>
                            <button type="button" class="btn btn-default btn-toastr-callback" id="toastr-callback2"
                                    data-context="info" data-message="Please click me">onclick
                            </button>
                            <button type="button" class="btn btn-default btn-toastr-callback" id="toastr-callback3"
                                    data-context="info" data-message="Please click close button">onCloseClick
                            </button>
                        </p>
                        <!-- END CALLBACK -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
@endsection
@push('scripts')
    <script src="{{ asset('admin/assets/vendor/toastr/toastr.min.js') }}"></script>
@endpush
