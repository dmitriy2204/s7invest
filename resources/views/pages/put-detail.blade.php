<div>
    <form action="{{ route('public.detail.putDetail', ['id' => $detail->id]) }}" method="POST" class="put-detail">
        {{ csrf_field() }}
        <h2>Положить на склад</h2>
        <div class="put-detail__item">
            <label for="name">Наименование</label>
            <input type="text" id="name" value = "{{ $detail->name }}" name="name" disabled>
        </div>
        <div class="put-detail__item">
            <label for="supplier_num">Партийный номер поставщика</label>
            <input type="text" id="supplier_num" value = "{{ $detail->supplier_num }}" name="supplier_num" disabled>
        </div>
        <div class="put-detail__item">
            <label for="producer_num">Партийный номер изготовителя</label>
            <input type="text" id="producer_num" value = "{{ $detail->producer_num }}" name="producer_num" disabled>
        </div>
        <div class="put-detail__item">
            <label for="serial">Серийный номер</label>
            <input type="text" id="serial" value = "{{ $detail->serial }}" name="serial">
        </div>
        <div class="put-detail__item">
            <label for="amount">Количество</label>
            <input type="text" id="amount" value = "{{ old('amount') }}" name="amount">
        </div>
        <div class="put-detail__item">
            <label for="status">Состояние</label>
            <select name="status" id="status">
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}" {{ old('status') }} name="status">
                        {{ $status->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="put-detail__item">
            <label for="comment">Комментарий</label>
            <input type="text" id="comment" value = "{{ old('comment') }}" name="comment">
        </div>
        <div class="buttons">
            <a class="btn" href="{{ route('public.main') }}">Назад</a>
            <button type="submit" class="btn btn-primary">Положить на склад</button>
        </div>
    </form>
</div>