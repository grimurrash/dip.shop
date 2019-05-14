{{-- MODAL --}}
<div class="modal fade availableStore" id="availableStore" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>
<div class="modal fade modalBuy" id="modalBuy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <br>
                    <div class="h4 modal-title">Товар добавлен в корзину</div>
                </div>
                <div class="modal-body">
                    <span class="move_basket">Товар перемещен из Списка желаний в Корзину!<br></span>
                </div>
                <div class="modal-footer container-fluid row">
                    <div class="col-lg-6">
                        <button type="button" data-dismiss="modal" class="btn btn-default continue w100">ПРОДОЛЖИТЬ
                            ПОКУПКИ
                        </button>
                    </div>
                    <div class="col-lg-6">
                        <button onclick="location.href='/cart/';" type="button" class="btn btn-primary w100">
                            ОФОРМИТЬ
                            ЗАКАЗ
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade modalFavorit" id="modalFavorit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <br>
                    <div class="h4 modal-title">Товар добавлен в список желаний</div>
                </div>
                <div class="modal-body">
                    <span class="move_wish">Товар перемещен из Корзины в Список желаний!<br></span><span>Вы всегда можете посмотреть его в Личном кабинете!</span>
                </div>
                <div class="modal-footer container-fluid row">
                    <div class="col-lg-6">
                        <button type="button" data-dismiss="modal" class="btn btn-default continue w100">ПРОДОЛЖИТЬ
                            ПОКУПКИ
                        </button>
                    </div>
                    <div class="col-lg-6">
                        <button onclick="location.href='/personal/wish-list/';" type="button"
                                class="btn btn-primary w100">СПИСОК ЖЕЛАНИЙ
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade modalCompare" id="modalCompare" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <br>
                    <div class="h4 modal-title">Товар добавлен в сравнение</div>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer container-fluid row">
                    <div class="col-lg-6">
                        <button type="button" data-dismiss="modal" class="btn btn-default continue w100">ПРОДОЛЖИТЬ
                            ПОКУПКИ
                        </button>
                    </div>
                    <div class="col-lg-6">
                        <button onclick="location.href='/compare/';" type="button" class="btn btn-primary w100">
                            СПИСОК
                            СРАВНЕНИЯ
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- END MODAL--}}