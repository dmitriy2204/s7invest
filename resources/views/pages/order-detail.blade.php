<div class="order-detail">
    <h2>Заказать деталь</h2>
    <div class="take-detail__item">
        <label for="name">Наименование</label>
        <input type="text" id="name" value="{{ $detail->name }}" disabled>
    </div>
    <div class="order-detail__item">
        <label for="supplier_num">Партийный номер поставщика</label>
        <input type="text" id="supplier_num" value="{{ $detail->supplier_num }}" disabled>
    </div>
    <div class="order-detail__item">
        <label for="producer_num">Партийный номер производителя</label>
        <input type="text" id="producer_num" value="{{ $detail->producer_num }}" disabled>
    </div>
    <div class="order-detail__item">
        <label for="simulator">Тренажер</label>
        <input type="text" id="simulator" value="">
    </div>
    <div class="order-detail__item">
        <label for="amount">Количество</label>
        <input type="text" id="amount" value="{{ $detail->amount }}">
    </div>
    <div class="order-detail__item">
        <label for="comment">Комментарий</label>
        <input type="text" id="comment" value="">
    </div>
    <div class="buttons">
        <a class="btn" href="{{ route('public.detail.one', ['id' => $detail->id]) }}">Назад</a>
        <a class="btn" href="{{ route('public.detail.takeDetail', ['id' => $detail->id]) }}">Получить деталь</a>
    </div>
</div>