<div class="profile-menu">
    <ul>
        <li class="profile-menu__item"><div class="btn profile_link" data-id="#put_details">Положенные детали</div></li>
        <li class="profile-menu__item"><div class="btn profile_link" data-id="#taken_details">Взятые детали</div></li>
        <li class="profile-menu__item"><div class="btn profile_link" data-id="#orders">Заказанные детали</div></li>
        <li class="profile-menu__item"><div class="btn profile_link" data-id="#users">Сотрудники</div></li>
        <li class="profile-menu__item"><div class="btn">Поменять пароль</div></li>
    </ul>
</div>
<div class="profile-content">
    <div class="table-responsive">
        <div id="put_details" class="profile_table">
            <table>
                <h2>Положенные детали</h2>
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
                        Состояние
                    </td>
                    <td class="sorting">
                        Кол-во
                    </td>
                    <td class="sorting">
                        ФИО ответственного
                    </td>
                    <td class="sorting">
                        Дата
                    </td>
                </tr>
                @if (isset($put_details))
                    @foreach ($put_details as $detail)
                        <tr>
                            <td><a href="{{ route('public.detail.one', ['id' => $detail->detail_id]) }}">{{ $detail->detail_id }}</a></td>
                            <td>{{ $detail->detail()->first()->name }}</td>
                            <td>{{ $detail->supplier_num }}</td>
                            <td>{{ $detail->producer_num }}</td>
                            <td>{{ $detail->serial }}</td>
                            <td>{{ $statuses->where('id', $detail->status)->first()->name }}</td>
                            <td>{{ $detail->amount }}</td>
                            <td>{{ $detail->user()->first()->fname . ' ' . $detail->user()->first()->name . ' ' . $detail->user()->first()->sname}}</td>
                            <td>{{ $detail->created_at }}</td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>

        <div id="taken_details" class="profile_table">
            <table>
                <h2>Взятые детали</h2>
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
                        Состояние
                    </td>
                    <td class="sorting">
                        Кол-во
                    </td>
                    <td class="sorting">
                        ФИО ответственного
                    </td>
                    <td class="sorting">
                        Дата
                    </td>
                </tr>
                @if (isset($taken_details))
                    @foreach ($taken_details as $detail)
                        <tr>
                            <td><a href="{{ route('public.detail.one', ['id' => $detail->detail_id]) }}">{{ $detail->detail_id }}</a></td>
                            <td>{{ $detail->detail()->first()->name }}</td>
                            <td>{{ $detail->detail()->first()->supplier_num }}</td>
                            <td>{{ $detail->detail()->first()->producer_num }}</td>
                            <td>{{ $detail->detail()->first()->serial }}</td>
                            <td>{{ $statuses->where('id', $detail->detail()->first()->status)->first()->name }}</td>
                            <td>{{ $detail->amount }}</td>
                            <td>{{ $detail->user()->first()->fname . ' ' . $detail->user()->first()->name . ' ' . $detail->user()->first()->sname}}</td>
                            <td>{{ $detail->created_at }}</td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>

        <div id="orders" class="profile_table">
            <table>
                <h2>Заказанные детали</h2>
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
                        Состояние
                    </td>
                    <td class="sorting">
                        Кол-во
                    </td>
                    <td class="sorting">
                        ФИО ответственного
                    </td>
                    <td class="sorting">
                        Дата
                    </td>
                </tr>
                @if (isset($orders))
                    @foreach ($orders as $detail)
                        <tr>
                            <td><a href="{{ route('public.detail.one', ['id' => $detail->detail_id]) }}">{{ $detail->detail_id }}</a></td>
                            <td>{{ $detail->detail()->first()->name }}</td>
                            <td>{{ $detail->detail()->first()->supplier_num }}</td>
                            <td>{{ $detail->detail()->first()->producer_num }}</td>
                            <td>{{ $detail->detail()->first()->serial }}</td>
                            <td>{{ $statuses->where('id', $detail->detail()->first()->status)->first()->name }}</td>
                            <td>{{ $detail->amount }}</td>
                            <td>{{ $detail->user()->first()->fname . ' ' . $detail->user()->first()->name . ' ' . $detail->user()->first()->sname}}</td>
                            <td>{{ $detail->created_at }}</td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>

        <div id="users" class="profile_table">
            <table>
                <h2>Сотрудники</h2>
                <div id="users_btn"><a href="{{ route('public.user.register') }}" class="btn btn_inline">Добавить сотрудника</a></div>
                <tr role="row">
                    <td class="sorting">
                        Номер
                    </td>
                    <td class="sorting">
                        Фамилия
                    </td>
                    <td class="sorting">
                        Имя
                    </td>
                    <td class="sorting">
                        Отчество
                    </td>
                    <td class="sorting">
                        Логин
                    </td>
                    <td class="sorting">
                        Доступ
                    </td>
                    <td class="sorting">
                        Действия
                    </td>

                </tr>
                @if (isset($users))
                    @foreach ($users as $user)
                        <tr>
                            <td><a href="#">{{ $user->id }}</a></td>
                            <td>{{ $user->fname }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->sname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role()->first()->name }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>

    </div>
</div>