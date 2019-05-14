@extends('layouts.app_demo')

@section('title',"Категории | Админ панель")

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
                            <h3 class="panel-title">Добавление категорий</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i>
                                </button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('admin.categories.store') }}" method="POST">
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
                            <h3 class="panel-title">Категории</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Название</th>
                                    <th>Кол-во подкатегорий</th>
                                    <th>Кол-во продуктов</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->title }}</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <button onclick="event.preventDefault();document.getElementById('categories-delete-{{ $category->id }}').submit();"
                                                    type="button" class="btn btn-danger">Удалить
                                            </button>
                                            <form id="categories-delete-{{ $category->id }}" action="{{ route('admin.categories.destroy', $category ) }}" method="post"
                                                  style="display: none;">
                                                <input type="hidden" name="_method" value="delete" />
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            Нет категорий
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5" class="text-center">
                                        {{ $categories->links() }}
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