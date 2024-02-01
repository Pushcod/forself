@extends('layout.master')

@section('content')

    <div class="container">
        <div class="box" style="display: flex; gap: 20px; padding: 20px; background-color: #2d3748;border-radius: 10px;position: relative">
            <img style=" width: 300px; object-fit: contain; position: relative" src="/images/collections/{{ $collection->image }}" alt="">
            <div class="image-info" style="position: relative">
                <div class="name-rating" style="position: relative; display: flex; gap: 15px">
                    <h1>{{ $collection->name }}</h1>
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
                </div>
                <div class="price-button" style="position: absolute; bottom: 0">
                    <h2>{{ $collection->price }}</h2>
                    <button style="border-radius: 5px; border: none; background-color: white; color: black; padding: 15px" class="button-buy">Купить</button>
                </div>

            </div>

        </div>
        <div class="description" style="position: relative; padding: 20px; margin-top: 30px; background-color: #2d3748;border-radius: 10px">
            <h3>Описание</h3>
            <p>1. Безрамочный экран (HUAWEI FullView) — термин, использующийся для описания экранов ноутбуков с большой полезной площадью и узкими рамками. Экран имеет сертификат TÜV Rheinland защиты от синего света (на уровне аппаратного обеспечения). Это устройство не предназначено для использования в медицинских целях, в том числе для лечения.
                2. Данные получены в лаборатории Huawei. Фактические данные могут отличаться в зависимости от условий окружающей среды, конкретного устройства и других факторов. См. фактическую информацию об устройстве.
                3. Экраны версий с процессорами Core™ i7-13700H и i9-13900H 13-го поколения имеют сертификат защиты от синего света TÜV Rheinland (на уровне аппаратного обеспечения). Экраны версий с процессорами Core™ i5-13420H 13-го поколения и i5-12450H 12-го поколения имеют сертификат защиты от синего света TÜV Rheinland.
                4. Высокопроизводительный процессор Intel® Core™ i9 13-го поколения представлен в устройствах с максимальной комплектацией. Также доступны версии с высокопроизводительными процессорами Core™ i7, i5 13-го поколения и Core™ i5, i3 12-го поколения.
                5. Данные получены в результате испытаний в лаборатории Huawei. 270 м — максимально возможное расстояние между роутером и ноутбуком на открытом пространстве без препятствий, которое обеспечивает плавное потоковое воспроизведение онлайн-видео с разрешением 1080P. Фактические данные могут отличаться в зависимости от условий окружающей среды, конкретного устройства и других факторов.
                6. Номинальное значение. Также доступна версия с емкостью 56 Вт*ч.
                7. Данная функция поддерживается только некоторыми смартфонами, планшетами, мониторами, наушниками HUAWEI, устройствами HUAWEI Vision и определенными ноутбуками HUAWEI с PC Manager версии 13.0.2.300 или выше. Если у вас возникли вопросы об общей работе, ограничениях использования или моделях устройств, которые поддерживают использование этой функции, обратитесь в местную службу поддержки клиентов Huawei.
                8. Эта функция поддерживается только определенными ноутбуками HUAWEI с PC Manager версии 13.0.3.320 или выше, а также некоторыми смартфонами и планшетами HUAWEI. Дополнительную информацию о поддерживаемых устройствах и возможностях функции см. на официальном веб-сайте. Для использования данной функции на смартфоне, планшете и ноутбуке должен быть выполнен вход в один аккаунт HUAWEI, а также включены Bluetooth и Wi-Fi. Если у вас возникли вопросы об общей работе, ограничениях использования или моделях устройства, которые поддерживают использование этой функции, обратитесь в местную службу поддержки клиентов Huawei.</p>
        </div>
    </div>
@endsection
