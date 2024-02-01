@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <a href="{{ route('collection.create') }}" class="btn btn-primary">Новые Товар</a>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название поста</th>
                <th scope="col">Описание поста</th>
                <th scope="col">Рейтинг</th>
                <th scope="col">Цена</th>
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
            @forelse($collections as $collection)
                <tr>
                    <th scope="row">
                        {{ $collection->id }}
                    </th>
                    <td>
                        {{ $collection->name }}
                    </td>
                    <td>
                        {{ $collection->text }}
                    </td>
                    <td>
                        {{ $collection->rating }}
                    </td>
                    <td>
                        {{ $collection->price }}
                    </td>
                    <td>
                        {{ $collection->category->name }}
                    </td>
                    <td>
                        <img width="150" height="150" src="/images/collections/{{$collection->image}}">
                    </td>

                    <td>
                        @if($collection->is_active == 0)
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
                        <a href="{{route('product.edit', $collection->id)}}" class="btn btn-success">{{ __('Редактировать') }}</a>
                        <a href="{{route('product.show', $collection->id)}}" class="btn btn-warning">Подробнее</a>

                        <form method="POST" action="{{route('collection.delete', $collection->id)}}">
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
