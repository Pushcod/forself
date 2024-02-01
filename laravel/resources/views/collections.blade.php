@extends('layout.master')

@section('content')
    <div class="container" style="display: flex; gap: 20px">
        @forelse($collections as $collection)
            <div class="card" style="width: 18rem;">
                <img style="height: 250px; object-fit: cover" src="/images/collections/{{ $collection->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$collection->name}}</h5>
                    <p class="card-text">{{$collection->text}}</p>
                    <td>
                        @if($collection->rating == 0)
                            <div class="alert alert-danger text-center">
                                {{ __('1 звезда') }}
                            </div>
                        @elseif($collection->rating == 1)
                            <div class="alert alert-success text-center">
                                {{ __('2 звезда') }}
                            </div>
                        @elseif($collection->rating == 2)
                            <div class="alert alert-success text-center">
                                {{ __('3 звезда') }}
                            </div>
                        @elseif($collection->rating == 3)
                            <div class="alert alert-success text-center">
                                {{ __('4 звезда') }}
                            </div>
                        @elseif($collection->rating == 4)
                            <div class="alert alert-success text-center">
                                {{ __('5 звезда') }}
                            </div>

                        @endif
                    </td>
                    <a href="{{route('collection', $collection->id)}}" class="btn btn-primary">{{__('Перейти')}}</a>
                </div>
            </div>
        @empty
            {{__('Данной категории отсуствуют продукты')}}
        @endforelse

    </div>
@endsection
