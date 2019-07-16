<div class="dropdown-menu">
    <button class="dropdown-menu__button">Меню</button>
    <div class="dropdown-menu__checkboxes" id="dropdown-menu__checkboxes">
        <div class="menu-group">
            <input name="column1" id="column1" type="checkbox" value="1" onClick="toggle_column('details', this.value);" checked>
            <label for="column1" class="col-sm-3">Наименование</label>
        </div>
        <div class="menu-group">
            <input name="column2" id="column2" type="checkbox" value="2" onClick="toggle_column('details', this.value);" checked>
            <label for="column2" class="col-sm-3">П/Н поставщика</label>
        </div>
        <div class="menu-group">
            <input name="column3" id="column3" type="checkbox" value="3" onClick="toggle_column('details', this.value);" checked>
            <label for="column3" class="col-sm-3">П/П изготовителя</label>
        </div>
        <div class="menu-group">
            <input name="column4" id="column4" type="checkbox" value="4" onClick="toggle_column('details', this.value);" checked>
            <label for="column4" class="col-sm-3">Серийный номер</label>
        </div>
        <div class="menu-group">
            <input name="column5" id="column5" type="checkbox" value="5" onClick="toggle_column('details', this.value);" checked>
            <label for="column5" class="col-sm-3">Местоположение</label>
        </div>
        <div class="menu-group">
            <input name="column6" id="column6" type="checkbox" value="6" onClick="toggle_column('details', this.value);" checked>
            <label for="column6" class="col-sm-3">Состояние</label>
        </div>
        <div class="menu-group">
            <input name="column7" id="column7" type="checkbox" value="7" onClick="toggle_column('details', this.value);" checked>
            <label for="column7" class="col-sm-3">Тренажер</label>
        </div>
        <div class="menu-group">
            <input name="column8" id="column8" type="checkbox" value="8" onClick="toggle_column('details', this.value);" checked>
            <label for="column8" class="col-sm-3">Кол-во</label>
        </div>
        <div class="menu-group">
            <input name="column9" id="column9" type="checkbox" value="9" onClick="toggle_column('details', this.value);">
            <label for="column9" class="col-sm-3">Миним. кол-во</label>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table id="details" class="table">
        <tr role="row">
            <td class="sorting">
                Номер по складу
            </td>
            <td class="sorting">
                Наименование
            </td>
            <td class="sorting">
                П/Н поставщика
            </td>
            <td class="sorting">
                П/Н изготовителя
            </td>
            <td class="sorting">
                Серийный номер
            </td>
            <td class="sorting">
                Местоположение
            </td>
            <td class="sorting">
                Состояние
            </td>
            <td class="sorting">
                Тренажер
            </td>
            <td class="sorting">
                Кол-во
            </td>
            <td class="sorting">
                Миним. кол-во
            </td>
        </tr>
        @if (isset($details))
            @foreach ($details as $detail)
                <tr>
                    <td><a href="{{ route('public.detail.one', ['id' => $detail->id]) }}">{{ $detail->id }}</a></td>
                    <td>{{ $detail->name }}</td>
                    <td>{{ $detail->supplier_num }}</td>
                    <td>{{ $detail->producer_num }}</td>
                    <td>{{ $detail->serial }}</td>
                    <td>{{ $detail->location_id }}</td>
                    <td>{{ $statuses->where('id', $detail->status)->first()->name }}</td>
                    <td>
                        @foreach ($detail->simulators()->get() as $simulator)
                            {{ $simulator->name  . ' '}}
                        @endforeach
                    </td>
                    <td>{{ $detail->amount }}</td>
                    <td>{{ $detail->min_amount }}</td>
                </tr>
            @endforeach
        @endif

    </table>
</div>
