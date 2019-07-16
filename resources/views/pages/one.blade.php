<div class="card">
    <div class="detail-info">
        <h2>Учетная карточка детали</h2>
        <div class="detail-info__item">
            <label for="id">Номер детали</label>
            <input type="text" id="id" value="{{ $detail->id }}" disabled>
        </div>
        <div class="detail-info__item">
            <label for="name">Наименование</label>
            <input type="text" id="name" value="{{ $detail->name }}" disabled>
        </div>
        <div class="detail-info__item">
            <label for="supplier_num">Партийный номер поставщика</label>
            <input type="text" id="supplier_num" value="{{ $detail->supplier_num }}" disabled>
        </div>
        <div class="detail-info__item">
            <label for="producer_num">Партийный номер изготовителя</label>
            <input type="text" id="producer_num" value="{{ $detail->producer_num }}" disabled>
        </div>
        <div class="detail-info__item">
            <label for="supplier">Фирма-изготовитель</label>
            <input type="text" id="supplier" value="{{ $detail->supplier }}" disabled>
        </div>
        <div class="detail-info__item">
            <label for="serial">Серийный номер</label>
            <input type="text" id="serial" value="{{ $detail->serial }}" disabled>
        </div>
        <div class="detail-info__item">
            <label for="location">Местонахождение</label>
            <input type="text" id="location" value="{{ $detail->location_id }}" disabled>
        </div>
        <div class="detail-info__item">
            <label for="amount">Количество</label>
            <input type="text" id="amount" value="{{ $detail->amount }}" disabled>
        </div>
        <div class="detail-info__item">
            <label for="type">Тип материала</label>
            <input type="text" id="type" value="{{ $types->where('id', $detail->type)->first()->name }}" disabled>
        </div>
        <div class="detail-info__item">
            <label for="name">Состояние</label>
            <input type="text" id="name" value="{{ $statuses->where('id', $detail->status)->first()->name }}" disabled>
        </div>
        <div class="detail-info__item">
            <label for="comment">Комментарий</label>
            <input type="text" id="comment" value="{{ $detail->comment }}" disabled>
        </div>
        <div class="detail-info__item">
            <label for="analogues">Аналоги</label>
            <input type="text" id="analogues" value="{{ $detail->analogues }}" disabled>
        </div>
        <div class="detail-info__item">
            <label for="min_amount">Минимальное количество</label>
            <input type="text" id="min_amount" value="{{ $detail->min_amount }}" disabled>
        </div>
        <div class="detail-info__item">
            <label for="simulator">Тренажер</label>
            <input type="text" id="simulator" value="@foreach($detail->simulators()->get() as $simulator){{ $simulator->name . ' '}}@endforeach" disabled>
        </div>
        <div class="detail-info__item">
            <label for="source">Источник поступления</label>
            <input type="text" id="source" value="{{ $detail->source }}" disabled>
        </div>
        <div class="detail-info__item">
            <label for="audit">Дата ревизии</label>
            <input type="text" id="audit" value="" disabled>
        </div>
        <div class="buttons">
            <a class="btn" href="{{ route('public.main') }}">Закрыть карточку</a>
            <a class="btn" href="{{ route('public.detail.take', ['id' => $detail->id]) }}">Взять</a>
            <a class="btn" href="{{ route('public.detail.put', ['id' => $detail->id]) }}">Положить</a>
            <a class="btn" href="{{ route('public.detail.order', ['id' => $detail->id]) }}">Заказать</a>
            <a class="btn" href="{{ route('public.detail.delete', ['id' => $detail->id]) }}">Удалить</a>
            <a class="btn" href="{{ route('public.detail.edit', ['id' => $detail->id]) }}">Редактировать</a>
        </div>
    </div>
    <div class="detail-photo">
        <p>Тут будет фото</p>
    </div>
</div>



