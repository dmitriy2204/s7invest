<div>
    <form action="{{ route('public.detail.orderDetail', ['id' => $detail->id]) }}" method="POST" class="order-detail">
        {{ csrf_field() }}
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
            <label for="amount">Количество</label>
            <input type="text" id="amount" name="amount" value="{{ old('amount') }}">
        </div>
        <div class="order-detail__item">
            <label for="comment">Причина заказа</label>
            <input type="text" id="comment" name="comment" value="{{ old('comment') }}">
        </div>
        <div class="order-detail__item">
            <label for="shop">Ссылка на магазин</label>
            <input type="text" id="shop" name="shop" value="{{ old('shop') }}">
        </div>
        <div class="buttons">
            <a class="btn" href="{{ route('public.detail.one', ['id' => $detail->id]) }}">Назад</a>
            <button type="submit" class="btn btn-primary">Заказать деталь</button>
        </div>
    </form>
</div>