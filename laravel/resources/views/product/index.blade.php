@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <a href="{{ route('product.create') }}" class="btn btn-primary">Новые Товар</a>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название поста</th>
                <th scope="col">Описание поста</th>
                <th scope="col">Действие</th>
                <th scope="col">Изображение</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
            </tr>
            </tbody>
            @forelse($products as $product)
                <tr>
                    <th scope="row">
                        {{ $product->id }}
                    </th>
                    <td>
                        {{ $product->name }}
                    </td>
                    <td>
                        {{ $product->text }}
                    </td>
                    <td>
                        {{ $product->category->name }}
                    </td>
                    <td>
                        <img width="150" height="150" src="/images/products/{{$product->image}}">
                    </td>

                    <td>
                        @if($product->is_active == 0)
                            <div class="alert alert-danger text-center">
                                {{ __('Не активна') }}
                            </div>
                        @else
                            <div class="alert alert-success text-center">
                                {{ __('Активна') }}
                            </div>

                        @endif
                    </td>
                    <td>
                        <a href="{{route('product.edit', $product->id)}}" class="btn btn-success">{{ __('Редактировать') }}</a>
                        <a href="{{route('product.show', $product->id)}}" class="btn btn-warning">Подробнее</a>

                        <form method="POST" action="{{route('product.delete', $product->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @empty
                Данных нет
            @endforelse
        </table>
    </div>
</div>
@endsection
