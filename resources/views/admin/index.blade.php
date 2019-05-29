@extends('layouts.app_demo')

@section('title',"Админ панель")

@push('styles')
<style>
    .list-unstyled li p> span {
        display: block;
    }
</style>
@endpush

@section('content')
    @include('admin.components.navbar')
    @include('admin.components.left-sidebar')
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
            @include('components.message')

            <!-- OVERVIEW -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Статистика</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-users"></i></span>
                                    <p>
                                        <span class="number">{{ \App\User::count() }}</span>
                                        <span class="title">Пользователей</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-archive"></i></span>
                                    <p>
                                        <span class="number">{{ \App\Subcategory::count() }}</span>
                                        <span class="title">Категорий</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-shopping-cart"></i></span>
                                    <p>
                                        <span class="number">{{ \App\Product::count() }}</span>
                                        <span class="title">Товаров</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                                    <p>
                                        <span class="number">{{ \App\Order::count() }}</span>
                                        <span class="title">Заказов</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OVERVIEW -->
                <div class="row">
                    <div class="col-md-5">
                        <!-- TASKS -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Последние 5 категорий</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i>
                                    </button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled todo-list">
                                    @forelse($subcategory_take as $item)
                                        <li>
                                            <p>
                                                <span class="title">{{ $item->title }}</span>
                                                <span class="short-description">Родительская категория: <b>{{ $item->parent->title }}</b></span>
                                                <span class="date">{{ date('M d, Y', strtotime($item->created_at)) }}</span>
                                            </p>
                                            <div class="controls">
                                                <a href="#"><i class="icon-software icon-software-pencil"></i></a> <a
                                                        href="#"><i
                                                            class="icon-arrows icon-arrows-circle-remove"></i></a>
                                            </div>
                                        </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                        <!-- END TASKS -->
                    </div>
                    <div class="col-md-3">
                        <!-- VISIT CHART -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Последние 5 продуктов</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i>
                                    </button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled todo-list">
                                    @forelse($product_take as $item)
                                        <li>
                                            <p>
                                                <span class="title">{{ $item->name }}</span>
                                                <span class="short-description">Категория:<b>{{ $item->category->title }}</b></span>
                                                <span class="date">{{ date('M d, Y', strtotime($item->created_at)) }}</span>
                                            </p>
                                            <div class="controls">
                                                <a href="#"><i class="icon-software icon-software-pencil"></i></a> <a
                                                        href="#"><i
                                                            class="icon-arrows icon-arrows-circle-remove"></i></a>
                                            </div>
                                        </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                        <!-- END VISIT CHART -->
                    </div>
                    <div class="col-md-4">
                        <!-- REALTIME CHART -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Последние 5 заказов</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i>
                                    </button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled todo-list">
                                    @forelse($order_take as $item)
                                        <li>
                                            <p>
                                                <span class="title">Заказ № {{ $item->id }}
                                                    <span class="{{ $item->statusClass() }}">{{ $item->status }}</span>
                                                </span>
                                                <a href="{{ route('admin.orders.show',$item) }}" type="button"
                                                   class="btn btn-primary" style="margin: 10px 0;">Перейти к заказу</a>
                                                <span class="date">{{ date('M d, Y', strtotime($item->created_at)) }}</span>
                                            </p>
                                            <div class="controls">
                                                <a href="#"><i class="icon-software icon-software-pencil"></i></a> <a
                                                        href="#"><i
                                                            class="icon-arrows icon-arrows-circle-remove"></i></a>
                                            </div>
                                        </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                        <!-- END REALTIME CHART -->
                    </div>
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