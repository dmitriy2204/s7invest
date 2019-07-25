<div>
    <form action="{{ route('public.detail.putNewDetail') }}" method="POST" class="put-detail">
        {{ csrf_field() }}
        <h2>Положить на склад</h2>
        @if (\Session::has('message'))
            <p class="message">
                {{ \Session::get('message') }}
            </p>
        @endif
        <div class="put-detail__item">
            <label for="name">Наименование</label>
            <input type="text" id="name" value = "{{ old('name') }}" name="name">
        </div>
        <div class="put-detail__item">
            <label for="supplier_num">Партийный номер поставщика</label>
            <input type="text" id="supplier_num" value = "{{ old('supplier_num') }}" name="supplier_num">
        </div>
        <div class="put-detail__item">
            <label for="producer_num">Партийный номер изготовителя</label>
            <input type="text" id="producer_num" value = "{{ old('producer_num') }}" name="producer_num">
        </div>
        <div class="put-detail__item">
            <label for="serial">Серийный номер</label>
            <input type="text" id="serial" name="serial">
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