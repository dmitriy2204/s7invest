<div class="put-detail">
    <h2>Положить на склад</h2>
    <div class="put-detail__item">
        <label for="name">Наименование</label>
        <input type="text" id="name" value="{{ $detail->name }}" disabled>
    </div>
    <div class="put-detail__item">
        <label for="supplier_num">Партийный номер поставщика</label>
        <input type="text" id="supplier_num" value="{{ $detail->supplier_num }}" disabled>
    </div>
    <div class="put-detail__item">
        <label for="producer_num">Партийный номер изготовителя</label>
        <input type="text" id="producer_num" value="{{ $detail->producer_num }}" disabled>
    </div>
    <div class="put-detail__item">
        <label for="serial">Серийный номер</label>
        <input type="text" id="serial" value="">
    </div>
    <div class="put-detail__item">
        <label for="status">Состояние</label>
        <input type="text" id="status" value="{{ $detail->amount }}">
    </div>
    <div class="put-detail__item">
        <label for="comment">Комментарий</label>
        <input type="text" id="comment" value="">
    </div>
    <div class="buttons">
        <a class="btn" href="{{ route('public.detail.one', ['id' => $detail->id]) }}">Назад</a>
        <a class="btn" href="{{ route('public.detail.putDetail', ['id' => $detail->id]) }}">Положить на склад</a>
    </div>
</div>