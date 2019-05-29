<form action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data" method="Post">
    <input type="hidden" name="_method" value="PUT"/>
    <div class="form-group">
        <label for="name">Название товара</label>
        <input id="name" required type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
               value="{{ old('name',$product->name) }}" placeholder="Введите название товара"
               name="name">
    </div>
    @if ($errors->has('name'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{ $errors->first('name') }}
        </div>
    @endif
    <div class="form-group">
        <label for="subcategory_id">Категория</label>
        <select id="subcategory_id" name="subcategory_id" class="form-control">
            @forelse($subcategories as $category)
                <option {{ old('subcategory_id', $product->subcategory_id) == $category->id ? 'selected' : '' }}  value="{{ $category->id }}"> {{ $category->title }}</option>
            @empty
            @endforelse
        </select>
    </div>
    @if ($errors->has('subcategory_id'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{ $errors->first('subcategory_id') }}
        </div>
    @endif
    <div class="form-group">
        <label for="price">Цена</label>
        <input id="price" required type="number" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}"
               value="{{ old('price', $product->price) }}" placeholder="Введите цену товара"
               name="price">
    </div>
    @if ($errors->has('price'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{ $errors->first('price') }}
        </div>
    @endif
    <div class="form-group">
        <label for="quantity">Количество</label>
        <input id="quantity" required type="number"
               class="form-control {{ $errors->has('quantity') ? ' is-invalid' : '' }}"
               value="{{ old('quantity',$product->quantity) }}" placeholder="Введите кол-во товара"
               name="quantity">
    </div>
    @if ($errors->has('quantity'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{ $errors->first('quantity') }}
        </div>
    @endif
    <div class="form-group">
        <label for="details">Детали</label>
        <textarea id="details" class="form-control {{ $errors->has('details') ? ' is-invalid' : '' }}"
                  placeholder="Введите детали о товаре (не более 255 символов). Детали должны быть формата: Характеристика:значение;характеристика:значение...."
                  name="details">{{ old('details') }}</textarea>
        <div class="form-auth-small small" style="margin-top: 6px">Детали должны быть формата: Характеристика:значение;характеристика:значение....</div>
    </div>

    @if ($errors->has('details'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{ $errors->first('details') }}
        </div>
    @endif
    <div class="form-group">
        <label for="description">Описание</label>
        <textarea id="description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
                  placeholder="Введите описание товара"
                  name="description">{{ old('description',$product->description) }}</textarea>
    </div>
    @if ($errors->has('description'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{ $errors->first('description') }}
        </div>
    @endif
    <div class="form-group">
        <label for="image">Изображение</label>
        <input id="image" class="form-control-file {{ $errors->has('image') ? ' is-invalid' : '' }}"
               placeholder="Выберите Изображение"
               name="image" type="file">
        <span class="small">Если изображение не будет указано, сохраниться старое.</span>
    </div>
    @if ($errors->has('image'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{ $errors->first('image') }}
        </div>
    @endif
    <div class="form-group">
        <label class="fancy-checkbox">
            <input name="best_price" {{ old('best_price', $product->best_price) ? 'checked' : ' '}}  type="checkbox">
            <span>Лучшая цена</span>
        </label>
        <label class="fancy-checkbox">
            <input name="new_item" {{ old('new_item',$product->new_item) ? 'checked' : ' '}} type="checkbox">
            <span>Новинки</span>
        </label>
        <label class="fancy-checkbox">
            <input name="bestsellers" {{ old('bestsellers',$product->bestsellers) ? 'checked' : ' '}} type="checkbox">
            <span>Хиты продаж</span>
        </label>
    </div>
    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Добавить">
</form>