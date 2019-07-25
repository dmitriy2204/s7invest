<div>
    <h2>Получить деталь</h2>
    <form action="{{ route('public.detail.takeDetail', ['id' => $detail->id]) }}" method="POST" class="take-detail">
        {{ csrf_field() }}
        <div class="take-detail__item">
            <label for="name">Наименование</label>
            <input type="text" id="name" value="{{ $detail->name }}" disabled>
        </div>
        <div class="take-detail__item">
            <label for="supplier_num">Партийный номер поставщика</label>
            <input type="text" id="supplier_num" value="{{ $detail->supplier_num }}" disabled>
        </div>
        <div class="take-detail__item">
            <label for="producer_num">Партийный номер производителя</label>
            <input type="text" id="producer_num" value="{{ $detail->producer_num }}" disabled>
        </div>
        <div class="take-detail__item">
            <label for="simulator">Тренажер</label>
            <select name="simulator" id="simulator">
                @foreach($detail->simulators as $simulator)
                    <option value="{{ $simulator->id }}">{{ $simulator->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="take-detail__item">
            <label for="amount">Количество</label>
            <input type="text" id="amount" name="amount" value="{{ old('amount') }}">
        </div>
        <div class="take-detail__item">
            <label for="comment">Комментарий</label>
            <input type="text" id="comment" name="comment" value="{{ old('comment') }}">
        </div>
        <div class="buttons">
            <a class="btn" href="{{ route('public.detail.one', ['id' => $detail->id]) }}">Назад</a>
            <button type="submit" class="btn btn-primary">Получить деталь</button>
        </div>
    </form>
    @if (\Session::has('message'))
        <p class="message">
            {{ \Session::get('message') }}
        </p>
    @endif
</div>