<form action="{{ route('public.detail.editDetail', ['id' => $detail->id]) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card">
        <div class="detail-info">
            <h2>Редактирование учетной карточки</h2>
            <div class="detail-info__item">
                <label for="id">Номер детали</label>
                <input type="text" id="id" name="id" value="{{ $detail->id }}" disabled>
            </div>
            <div class="detail-info__item">
                <label for="name">Наименование</label>
                <input type="text" id="name" name='name' value="{{ $detail->name }}">
            </div>
            <div class="detail-info__item">
                <label for="supplier_num">Партийный номер поставщика</label>
                <input type="text" id="supplier_num" name="supplier_num" value="{{ $detail->supplier_num }}">
            </div>
            <div class="detail-info__item">
                <label for="producer_num">Партийный номер изготовителя</label>
                <input type="text" id="producer_num" name="producer_num" value="{{ $detail->producer_num }}">
            </div>
            <div class="detail-info__item">
                <label for="supplier">Фирма-изготовитель</label>
                <input type="text" id="supplier" name="supplier" value="{{ $detail->supplier }}">
            </div>
            <div class="detail-info__item">
                <label for="serial">Серийный номер</label>
                <input type="text" id="serial" name="serial" value="{{ $detail->serial }}">
            </div>
            <div class="detail-info__item">
                <label for="location_id">Местонахождение</label>
                <input type="text" id="location_id" name="location_id" value="{{ $detail->location_id }}">
            </div>
            <div class="detail-info__item">
                <label for="amount">Количество</label>
                <input type="text" id="amount" name="amount" value="{{ $detail->amount }}">
            </div>
            <div class="detail-info__item">
                <label for="type">Тип материала</label>
                <select name="type" id="type">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ old('type', $type->id) == $detail->type ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="detail-info__item">
                <label for="status">Состояние</label>
                <select name="status" id="status">
                    @foreach ($statuses as $status)
                        <option value="{{ $status->id }}" {{ old('status', $status->id) == $detail->status ? 'selected' : '' }}>
                            {{ $status->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="detail-info__item">
                <label for="comment">Комментарий</label>
                <input type="text" id="comment" name="comment" value="{{ $detail->comment }}">
            </div>
            <div class="detail-info__item">
                <label for="analogues">Аналоги</label>
                <input type="text" id="analogues" name="analogues" value="{{ $detail->analogues }}">
            </div>
            <div class="detail-info__item">
                <label for="min_amount">Минимальное количество</label>
                <input type="text" id="min_amount" name="min_amount" value="{{ $detail->min_amount }}">
            </div>
            <div class="detail-info__item">
                <label for="simulators">Тренажер</label>
                <select multiple="multiple" name="simulators[]" id="simulators">
                    @foreach($simulators as $simulator)
                        <option value="{{ $simulator->id }}" {{ (old('simulators') ? collect(old('simulators')) : $detail->simulators)->contains($simulator->id)  ? 'selected' : '' }}>{{ $simulator->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="detail-info__item">
                <label for="source">Источник поступления</label>
                <input type="text" id="source" name="source" value="{{ $detail->source }}">
            </div>
            <div class="detail-info__item">
                <label for="audit">Дата ревизии</label>
                <input type="text" id="audit" name="audit" value="">
            </div>
            <div class="buttons">
                <a class="btn" href="{{ route('public.detail.one', ['id' => $detail->id]) }}">Назад</a>
                <button type="submit" class="btn btn-primary">Изменить</button>
            </div>
        </div>
        <div class="detail-photo">
            <p>Тут будет фото</p>
        </div>
    </div>
</form>


