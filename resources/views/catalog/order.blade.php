@extends('layouts.app')

@section('title',"Бытовая техника и электроника в Казани - интернет-магазин Позитроника")
@section('description','Федеральный интернет-магазин Позитроника предлагает большой выбор электроники и бытовой техники по выгодным ценам в Казани')
@push('styles')
    <link href="{{ asset('css/order.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
@endpush
@section('content')
    @include('components.wrap_menu')
    <div class="content">
        @component('components.breadcrumb')
            @slot('active')Корзина @endslot
        @endcomponent
        <div class="panel panel-row">
            <form action="{{ route('order.store') }}" method="POST" id="bx-soa-order-form">
                <?php
                if (session()->get('basket') !== null) {
                    $basket = session()->get('basket');
                } else {
                    $basket = [];
                }
                $total = 0;
                foreach ($basket as $item) {
                    $total += $item['count'] * $item['price'];
                }
                ?>
                <h1>Оформление заказа</h1>
                @if(session()->get('errors'))
                    <div class="alert alert-danger">{{ session()->get('errors') }}</div>
                @endif
                <div id="bx-soa-order" class="row basket_content">
                    <!--	MAIN BLOCK	-->
                    <div class="col-lg-9 col-md-12 bx-soa">
                        <div id="bx-soa-main-notifications">
                            <div class="alert alert-danger" style="display:none"></div>
                            <div data-type="informer" style="display:none"></div>
                        </div>

                        <!--	DUPLICATE MOBILE ORDER SAVE BLOCK	-->
                        <div id="bx-soa-total-mobile" style="margin-bottom: 6px;"
                             class="visible-md visible-sm visible-xs bx-soa-sidebar">
                            <div class="bx-soa-cart-total">
                                <div class="bx-soa-cart-change"><a href="{{ route('cart.show') }}">Изменить</a></div>
                                <div class="bx-soa-cart-total-line">
                                    <span class="bx-soa-cart-t">Сумма покупки:</span><span class="bx-soa-cart-d">{{ $total }}
                                        ₽</span>
                                </div>
                                <div class="bx-soa-cart-total-line bx-soa-cart-total-line-total">
                                    <span class="bx-soa-cart-t">Итого к оплате:</span><span class="bx-soa-cart-d">{{ $total }}
                                        ₽</span>
                                </div>
                            </div>
                        </div>
                        <!--	BUYER PROPS BLOCK	-->
                        <div id="bx-soa-properties" data-visited="true" class="bx-soa-section bx-active bx-selected">
                            <div class="bx-soa-section-title-container">
                                <h2 class="bx-soa-section-title col-sm-8 col-md-9">Личные данные </h2>
                            </div>

                            <div class="bx-soa-section-content container-fluid">
                                <div class="alert alert-danger" style="display: none;"></div>
                                <div class="">
                                    <div class="row bx-soa-customer">
                                        <div class="clearfix"></div>
                                        <div class="col-md-6 col-lg-4 col-xs-12 form-group bx-soa-customer-field {{ $errors->has('fio') ? ' has-error' : '' }}"
                                             data-property-id-row="1">
                                            <label for="soa-property-1" class="bx-soa-custom-label">Ф.И.О.
                                                <span class="bx-authform-starrequired">*</span>
                                            </label>
                                            <div class="soa-property-container">
                                                <input type="text" maxlength="100"
                                                       pattern="[А-Яа-яёЁ]{2,}[ ][А-Яа-яёЁ]{2,}[ ][А-Яа-яёЁ]{2,}"
                                                       size="30" name="fio"
                                                       id="soa-property-1"
                                                       required
                                                       value="{{ old('fio') }}"
                                                       autocomplete="fio"
                                                       placeholder="Введите минимум два слова из минимум двух русских букв в каждом слове"
                                                       class="form-control bx-soa-customer-input bx-ios-fix">
                                            </div>
                                        </div>
                                        <div class="{{ $errors->has('email') ? ' has-error' : '' }} col-md-6 col-lg-4 col-xs-12 form-group bx-soa-customer-field"
                                             data-property-id-row="2">
                                            <label for="soa-property-2" class="bx-soa-custom-label">E-Mail
                                                <span class="bx-authform-starrequired">*</span>
                                            </label>
                                            <div class="soa-property-container">
                                                <input type="text" maxlength="80"
                                                       size="30" name="email"
                                                       id="soa-property-2"
                                                       value="{{ old('email') }}"
                                                       autocomplete="email"
                                                       required
                                                       placeholder=""
                                                       class="form-control bx-soa-customer-input bx-ios-fix">
                                            </div>
                                        </div>
                                        <div class="col-md-4 {{ $errors->has('tel') ? ' has-error' : '' }} col-lg-4 col-xs-12 form-group bx-soa-customer-field"
                                             data-property-id-row="3">
                                            <label for="soa-property-3" class="bx-soa-custom-label">Телефон
                                                <span class="bx-authform-starrequired">*</span>
                                            </label>
                                            <div class="soa-property-container">
                                                <input type="text" size="30"
                                                       name="tel"
                                                       value="{{ old('tel') }}"
                                                       id="soa-property-3"
                                                       autocomplete="tel"
                                                       required
                                                       placeholder="8(___) ___-__-__"
                                                       class="form-control bx-soa-customer-input bx-ios-fix">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 {{ $errors->has('polit') ? ' has-error' : '' }} col-md-8 form-group bx-soa-customer-field agreement"
                                             data-property-id-row="63">
                                            <label for="soa-property-63" class="bx-soa-custom-label">Согласен на
                                                обработку
                                                <a href="{{ route('politika') }}">персональных данных</a>
                                                <span class="bx-authform-starrequired">*</span>
                                            </label>
                                            <div class="checkbox">
                                                <label class="soa-property-container">
                                                    <input type="checkbox" {{ old('polit') ? 'checked' : '' }} required
                                                           name="polit">
                                                    <span class="cr">
                                                        <i class="cr-icon glyphicon glyphicon-ok"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-7 {{ $errors->has('address') ? ' has-error' : '' }} col-lg-6 col-xs-12 form-group bx-soa-customer-field"
                                             data-property-id-row="44">
                                            <label for="soa-property-44" class="bx-soa-custom-label">Улица
                                                <span class="bx-authform-starrequired">*</span>
                                            </label>
                                            <div class="soa-property-container">
                                                <input type="text" size="30"
                                                       name="address"
                                                       id="soa-property-44"
                                                       value="{{ old('address') }}"
                                                       autocomplete="address"
                                                       placeholder=""
                                                       class="form-control bx-soa-customer-input bx-ios-fix">
                                            </div>
                                        </div>
                                        <div class="col-md-2 {{ $errors->has('dom') ? ' has-error' : '' }} col-lg-3 col-xs-12 form-group bx-soa-customer-field"
                                             data-property-id-row="45">
                                            <label for="soa-property-45" class="bx-soa-custom-label">Дом/корпус
                                                <span class="bx-authform-starrequired">*</span>
                                            </label>
                                            <div class="soa-property-container">
                                                <input type="text" size="30"
                                                       name="dom"
                                                       value="{{ old('dom') }}"
                                                       id="soa-property-45"
                                                       placeholder=""
                                                       class="form-control bx-soa-customer-input bx-ios-fix">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 {{ $errors->has('kv') ? ' has-error' : '' }} col-xs-12 form-group bx-soa-customer-field"
                                             data-property-id-row="46">
                                            <label for="soa-property-46" class="bx-soa-custom-label">Кв./офис</label>
                                            <div class="soa-property-container">
                                                <input type="text" size="30"
                                                       name="kv"
                                                       value="{{ old('kv') }}"
                                                       id="soa-property-46"
                                                       placeholder=""
                                                       class="form-control bx-soa-customer-input bx-ios-fix">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row bx-soa-customer">
                                        <div class="col-lg-8 {{ $errors->has('comment') ? ' has-error' : '' }} col-xs-12 form-group bx-soa-customer-field">
                                            <label for="orderDescription" class="bx-soa-customer-label">Комментарии к
                                                заказу:</label>
                                            <textarea id="orderDescription" cols="4"
                                                      class="form-control bx-soa-customer-textarea bx-ios-fix"
                                                      name="comment">{{ old('comment') }}</textarea></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--	ORDER SAVE BLOCK	-->
                        <div id="bx-soa-orderSave" class="container-fluid">
                            <div class="row">
                                @if(count($basket) > 0)
                                    <button type="submit" style="margin: 10px 0"
                                            class="pull-right btn btn-primary btn-lg col-lg-4">
                                        Оформить заказ
                                    </button>
                                @else
                                    <button type="submit" disabled style="margin: 10px 0"
                                            class="pull-right btn btn-primary btn-lg col-lg-4">
                                        Корзина пуста
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--	SIDEBAR BLOCK	-->
                    <div id="bx-soa-total" class="col-sm-3 hidden-md hidden-sm hidden-xs bx-soa-sidebar" style="">
                        <!--	BASKET ITEMS BLOCK	-->
                        <div id="bx-soa-basket" data-visited="false" class="bx-soa-section bx-active">
                            <div class="bx-soa-section-title-container">
                                <h2 class="bx-soa-section-title col-sm-9">
                                    Ваша корзина </h2>
                                <div class="col-xs-12 col-sm-3 text-right"></div>
                            </div>

                            <div class="bx-soa-section-content container-fluid">
                                <div class="bx-soa-table-fade">
                                    <div>
                                        <div class="bx-soa-item-table">
                                            @forelse($basket as $item)
                                                <?php
                                                $product = \App\Product::find($item['product_id']);
                                                ?>
                                                <div class="container-fluid row bx-soa-item-tr bx-soa-basket-info bx-soa-item-tr-first">
                                                    <div class="col-xs-7">{{ $product->name }} ({{ $item['count'] }}
                                                        шт.)
                                                    </div>
                                                    <div class="col-xs-5 text-right">{{ $product->price }} ₽</div>
                                                </div>
                                            @empty
                                                <div class="container-fluid row bx-soa-item-tr bx-soa-basket-info">
                                                    <div class="col-xs-7">Корзина пуста</div>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bx-soa-cart-total">
                            <div class="bx-soa-cart-change">
                                <a href="{{ route('cart.show') }}">Изменить</a>
                            </div>
                            <div class="bx-soa-cart-total-line">
                                <span class="bx-soa-cart-t">Сумма покупки:</span>
                                <span class="bx-soa-cart-d">{{ $total }} ₽</span>
                            </div>
                            <div class="bx-soa-cart-total-line bx-soa-cart-total-line-total">
                                <span class="bx-soa-cart-t">Итого к оплате:</span>
                                <span class="bx-soa-cart-d" style="font-size: 28px;">{{ $total }} ₽</span>
                            </div>
                            <div class="bx-soa-cart-total-button-container" style="display: none !important">
                                <button type="submit" class="ga_purchase btn btn-primary btn-lg btn-order-save"
                                        style="font-size: 15px;">Завершить оформление
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bx-soa-cart-total-ghost" style="padding-top: 0px;"></div>
                </div>
            </form>
        </div>
    </div>
@endsection

{{-- Include JS Scripts --}}
@push('scripts')
    <script type="text/javascript"
            src="/local/components/positronica/city.selector/script.min.js"></script>
    <script type="text/javascript"
            src="/local/components/positronica/bx_main.register/script.min.js?1544189094858"></script>
    <script type="text/javascript"
            src="//opt-860641.ssl.1c-bitrix-cdn.ru/bitrix/components/bitrix/search.title/script.min.js?15556635956443"></script>
    <script type="text/javascript"
            src="/local/templates/components/search.title/script.min.js?15441890951164"></script>
    <script type="text/javascript"
            src="/local/components/positronica/filials.contact_info/script.min.js?15441890941696"></script>
    <script type="text/javascript"
            src="/local/components/positronica/menu/script.min.js?15441890943714"></script>
    <script type="text/javascript"
            src="/local/templates/components/news.list/script.min.js?1544189095185"></script>
    <script type="text/javascript"
            src="/local/components/positronica/bx_catalog.top/script.js?15441890943019"></script>
    <script type="text/javascript"
            src="/local/components/positronica/catalog.selected_in_cart/script.min.js?1544189094662"></script>
@endpush