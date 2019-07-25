<div>
    <form action="{{ route('public.detail.orderNewDetail') }}" method="POST" class="order-detail">
        {{ csrf_field() }}
        <h2>Заказать деталь</h2>
        <div class="take-detail__item">
            <label for="name">Наименование</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="order-detail__item">
            <label for="supplier_num">Партийный номер поставщика</label>
            <input type="text" id="supplier_num" name="supplier_num" value="{{ old('supplier_num') }}">
        </div>
        <div class="order-detail__item">
            <label for="producer_num">Партийный номер производителя</label>
            <input type="text" id="producer_num" name="producer_num" value="{{ old('producer_num') }}">
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
            <a class="btn" href="{{ route('public.main') }}">Назад</a>
            <button type="submit" class="btn btn-primary">Заказать деталь</button>
        </div>
    </form>
</div>