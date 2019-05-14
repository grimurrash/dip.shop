{{-- CATALOG MENU--}}
@php
    $categories = \App\Category::all()
@endphp
<div class='col-xs-12 col-sm-5 col-md-4 col-lg-3 padding0 menu'>

    <div class="panel panel-primary">
        <div class="panel-heading hidden-xs">
            <button data-toggle="dropdown" data-target="#menu"
                    class="hamburger animated fadeInLeft noclose is-open"
                    type="button">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
            <div class="label menu-label">КАТАЛОГ ТОВАРОВ</div>
        </div>
        <div class="panel-body dropdown open " id="menu">
            <ul class="dropdown-menu dropdown-submenu pz_menu">
                @forelse($categories as $category)
                    <li class="dropdown dropdown-submenu">
                        <a class="dropdown-toggle pztele"
                           data-toggle="dropdown">{{ $category->title }}</a>
                        <div class="dropdown-menu" style="max-width: 561px !important;">
                            <ul class="block-text">
                                @forelse($category->children as $subcategory)
                                    <li><a href="{{ route('catalog.show',$subcategory) }}">{{ $subcategory->title }}</a>
                                    </li>
                                @empty
                                    <li><a>Нет категорий</a></li>
                                @endforelse
                            </ul>
                        </div>
                    </li>
                @empty
                    <li class="dropdown dropdown-submenu">
                        <a class="dropdown-toggle pztele">Категорий нет</a>
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
{{-- END CATALOG MENU --}}