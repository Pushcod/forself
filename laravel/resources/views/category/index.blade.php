@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('category.create') }}" class="btn btn-primary">Новые категории</a>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название поста</th>
                    <th scope="col">Описание поста</th>
                    <th scope="col">Изображение</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
                @forelse($categories as $category)
                    <tr>
                        <th scope="row">
                            {{ $category->id }}
                        </th>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                            {{ $category->text }}
                        </td>
                        <td>
                            @if($category->is_active == 0)
                                <div class="alert alert-danger text-center">
                                    {{ __('Не активна') }}
                                </div>
                            @else
                                <div class="alert alert-success text-center">
                                    {{ __('Активна') }}
                                </div>

                            @endif
                        </td>
                    </tr>
                @empty
                    Здесь ничего нету
                @endforelse
            </table>
        </div>
    </div>
@endsection
