@extends('layouts.app_demo')

@section('title')Заказ №{{ $order->id }} | Админ панель@endsection
@section('content')
    @include('admin.components.navbar')
    @include('admin.components.left-sidebar')
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                @include('components.message')
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Заказ № {{ $order->id }}
                                    <span class="{{ $order->statusClass() }}">{{ $order->status }}</span>
                                </h3>
                            </div>
                            <div class="panel-body orders-info">
                                <div class="form-group">
                                    <label for="fio">ФИО заказчика</label>
                                    <input type="text" id="fio" class="form-control" value="{{ $order->fio }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">Адрес электронной почты заказчика</label>
                                    <input type="text" id="email" class="form-control" value="{{ $order->email }}"
                                           readonly>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Телефон заказчика</label>
                                    <input type="text" id="phone" class="form-control" value="{{ $order->phone }}"
                                           readonly>
                                </div>
                                <div class="form-group">
                                    <label for="address">Адрес заказчика</label>
                                    <input type="text" id="address" class="form-control" value="{{ $order->address }}"
                                           readonly>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Комментарий заказчика</label>
                                    <textarea id="comment" readonly class="form-control"
                                              name="details">{{ $order->comment }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="address">Кол-во товара</label>
                                    <input type="text" id="address" class="form-control"
                                           value="{{ $order->ItemCount() }}"
                                           readonly>
                                </div>
                                <div class="form-group">
                                    <label for="address">Итоговая стоимость</label>
                                    <input type="text" id="address" class="form-control"
                                           value="{{ $order->totalPrice() }}"
                                           readonly>
                                </div>
                            </div>
                            @if($order->status != 'Выполнен')
                                <div class="panel-footer text-center">
                                    @if($order->status == 'В ожидании')
                                        <button onclick="event.preventDefault();document.getElementById('order-primary-{{ $order->id }}').submit();"
                                                type="button" class="btn btn-primary">Принять
                                        </button>
                                        <form id="order-primary-{{ $order->id }}"
                                              action="{{ route('admin.orders.update', $order ) }}"
                                              method="post"
                                              style="display: none;">
                                            <input type="hidden" name="_method" value="PATCH"/>
                                        </form>


                                        <button onclick="event.preventDefault();document.getElementById('order-delete-{{ $order->id }}').submit();"
                                                type="button" class="btn btn-danger">Отменить
                                        </button>
                                        <form id="order-delete-{{ $order->id }}"
                                              action="{{ route('admin.orders.destroy', $order ) }}"
                                              method="post"
                                              style="display: none;">
                                            <input type="hidden" name="_method" value="delete"/>
                                        </form>
                                    @elseif($order->status == 'В процессе')
                                        <button onclick="event.preventDefault();document.getElementById('order-success-{{ $order->id }}').submit();"
                                                type="button" class="btn btn-success">Заказ выполнен
                                        </button>
                                        <form id="order-success-{{ $order->id }}"
                                              action="{{ route('admin.orders.update', $order ) }}"
                                              method="post"
                                              style="display: none;">
                                            <input type="hidden" name="_method" value="PATCH"/>
                                        </form>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!-- TABLE HOVER -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Состав заказа</h3>
                            </div>
                            <div class="panel-body orders-info">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Название</th>
                                        <th>Цена за 1 шт.</th>
                                        <th>На складе</th>
                                        <th>Кол-во</th>
                                        <th>Итого</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($order->items as $orderItem)
                                        <tr>
                                            <td>{{ $orderItem->product->id  }}</td>
                                            <td>{{ $orderItem->product->name }}</td>
                                            <td>{{ $orderItem->product->price }} ₽</td>
                                            <td>{{ $orderItem->product->quantity }} шт.</td>
                                            <td>{{ $orderItem->count }} шт.</td>
                                            <td>{{ $orderItem->price() }}</td>
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
                                        <td colspan="6" class="text-right"><strong>
                                                Итого: {{ $order->totalPrice() }}</strong></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- END TABLE HOVER -->
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