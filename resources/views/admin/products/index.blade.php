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
                            <h3 class="panel-title">Добавление товара</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i>
                                </button>
                            </div>
                        </div>
                        <div class="panel-body">
                            @include('admin.products.form.create')
                        </div>
                    </div>
                    <!-- END MULTI CHARTS -->
                </div>
                <div class="col-md-6">
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Товары</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Название</th>
                                    <th>Категория</th>
                                    <th>Цена</th>
                                    <th>Кол-во</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--Body--}}
                                @forelse($products as $product)
                                    <tr>
                                        <td>{{ $product->id  }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category->title }}</td>
                                        <td>{{ $product->price }} ₽</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>
                                            <button onclick="event.preventDefault();document.getElementById('product-delete-{{ $product->id }}').submit();"
                                                    type="button" class="btn btn-danger">Удалить
                                            </button>
                                            <a href="{{ route('admin.products.edit',$product) }}" type="button"
                                               class="btn btn-primary">Изменить</a>
                                            <form id="product-delete-{{ $product->id }}"
                                                  action="{{ route('admin.products.destroy', $product ) }}"
                                                  method="post"
                                                  style="display: none;">
                                                <input type="hidden" name="_method" value="delete"/>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            Нет товаров
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr>
                                   <td colspan="6" class="text-center">{{ $products->links() }}</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- END TABLE HOVER -->
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