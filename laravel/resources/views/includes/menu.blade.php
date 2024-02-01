<div class="container">
    <ul class="menu">
        {{--    <li>--}}
        {{--        <a href="{{ route('product') }}">{{__('Продукты')}}</a>--}}
        {{--    </li>--}}
        <li class="menu-item">
            <a class="menu-link" href="{{ route('category') }}">{{__('Категории')}}</a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="{{ route('collection.index') }}">{{__('Коллекция')}}</a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="{{ route('category.index') }}">{{__('Все категории')}}</a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="{{ route('product.index') }}">{{__('Все продукты')}}</a>
        </li>
    </ul>
</div>

