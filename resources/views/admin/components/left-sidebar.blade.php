<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ route('admin.index') }}" class=""><i class="lnr lnr-home"></i> <span>Главное</span></a></li>
                <li><a href="{{ route('admin.categories.index') }}" class=""><i class="lnr lnr-file-empty"></i> <span>Категория</span></a></li>
                <li><a href="{{ route('admin.subcategories.index') }}" class=""><i class="lnr lnr-file-empty"></i> <span>Подкатегория</span></a></li>
                <li><a href="{{ route('admin.products.index') }}" class=""><i class="lnr lnr-dice"></i> <span>Товары</span></a></li>
                <li><a href="{{ route('admin.orders.index') }}" class=""><i class="lnr lnr-cart"></i> <span>Заказы</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->