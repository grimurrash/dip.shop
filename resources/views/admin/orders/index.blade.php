@extends('layouts.app_demo')

@section('title',"Заказы | Админ панель")

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
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Заказы</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ФИО</th>
                                    <th>Телефон</th>
                                    <th>Адрес</th>
                                    <th>Статус</th>
                                    <th>Кол-во товаров</th>
                                    <th>Итоговая цена</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--Body--}}
                                @forelse($orders as $order)
                                    <tr>
                                        <td>{{ $order->id  }}</td>
                                        <td>{{ $order->fio }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td> <span class="{{ $order->statusClass() }}">{{ $order->status }}</span></td>
                                        <td>{{ $order->itemCount() }}</td>
                                        <td>{{ $order->totalPrice() }} </td>
                                        <td>
                                            <a href="{{ route('admin.orders.show',$order) }}" type="button"
                                               class="btn btn-primary">Перейти к заказу</a>
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
                                    {{-- Paginate --}}
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