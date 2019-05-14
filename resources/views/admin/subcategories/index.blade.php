@extends('layouts.app_demo')

@section('title',"Подкатегории | Админ панель")

@push('styles')

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
                <div class="col-md-6">
                    <!-- MULTI CHARTS -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Добавление подкатегории</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i>
                                </button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('admin.subcategories.store') }}" method="POST">
                                <div class="form-group">
                                    <label for="title">Название категории</label>
                                    <input id="title" required type="text" class="form-control"
                                           placeholder="Введите название категории"
                                           name="title">
                                </div>
                                @if ($errors->has('title'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                        <i class="fa fa-times-circle"></i>  {{ $errors->first('title') }}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="category_id">Родительская категория</label>
                                    <select id="category_id" name="category_id" class="form-control">
                                        @forelse($categories as $category)
                                            <option value="{{ $category->id }}"> {{ $category->title }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                @if ($errors->has('category_id'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                        <i class="fa fa-times-circle"></i>  {{ $errors->first('category_id') }}
                                    </div>
                                @endif
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Добавить">
                            </form>
                        </div>
                    </div>
                    <!-- END MULTI CHARTS -->
                </div>
                <div class="col-md-6">
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Подкатегории</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Название</th>
                                    <th>Родительская категория</th>
                                    <th>Кол-во продуктов</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($subcategories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->title }}</td>
                                        <td>{{ $category->parent->title }}</td>
                                        <td>1</td>
                                        <td>
                                            <button onclick="event.preventDefault();document.getElementById('subcategories-delete-{{ $category->id }}').submit();"
                                                    type="button" class="btn btn-danger">Удалить
                                            </button>
                                            <form id="subcategories-delete-{{ $category->id }}" action="{{ route('admin.subcategories.destroy', $category ) }}" method="post"
                                                  style="display: none;">
                                                <input type="hidden" name="_method" value="delete" />
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            Нет подкатегорий
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            {{ $subcategories->links() }}
                                        </td>
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