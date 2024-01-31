@extends('layout.master')

@section('content')
    <div class="container">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Категория</label>
                </div>
                <select name="category_id" class="custom-select" id="inputGroupSelect01">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название Товара</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Описание Товара</label>
                <textarea name="text" id="" cols="30" rows="10" class="form-control" ></textarea>


            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Изображение товара</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Статус</label>
                </div>
                <select name="is_active" class="custom-select" id="inputGroupSelect01">
                    <option value="0">Не активен</option>
                    <option value="1">Активен</option>

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
