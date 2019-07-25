<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DetailCreateRequest;
use App\Models\Detail;
use App\Models\TakenDetail;
use App\Models\PutDetail;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mainPage()
    {
        $details = Detail::all();

        return view('layouts.primary', [
            'page' => 'pages.main',
            'title' => 'Главная таблица',
            'details' => $details
        ]);
    }

    public function one($id)
    {
        try {
            $detail = Detail::findOrFail($id);
        } catch (\Exception $e) {
            abort(404);
        }

        return view('layouts.primary', [
            'page' => 'pages.one',
            'title' => 'Учетная карточка детали',
            'detail' => $detail
        ]);
    }

    public function take($id)
    {
        try {
            $detail = Detail::findOrFail($id);
        } catch (\Exception $e) {
            abort(404);
        }

        return view('layouts.primary', [
            'page' => 'pages.take-detail',
            'title' => 'Взять деталь',
            'detail' => $detail
        ]);
    }

    public function takeDetail($id, Request $request)
    {
        $detail = Detail::find($id);
        $user_id = Auth::user()->id;
        $newAmount = $detail->amount - $request->input('amount');

        if ($request->input('amount') < 0 || $request->input('amount') == 0){
            return redirect()->back()->with('message', 'Укажите количество деталей!');
        }

        if($newAmount > 0 || $newAmount == 0){
            TakenDetail::create([
                'detail_id' => $id,
                'user_id' => $user_id,
                'simulator_id' => $request->input('simulator'),
                'amount' => $request->input('amount'),
                'comment' => $request->input('comment')
            ]);

            $detail->update([
                'amount' => $newAmount
            ]);
        }else{
            return redirect()->back()->with('message', 'На складе нет такого количества деталей!');
        }

        return redirect()->route('public.main');
    }

    public function put($id)
    {
        try {
            $detail = Detail::findOrFail($id);
        } catch (\Exception $e) {
            abort(404);
        }

        return view('layouts.primary', [
            'page' => 'pages.put-detail',
            'title' => 'Положить деталь',
            'detail' => $detail
        ]);
    }

    public function putDetail($id, Request $request)
    {
        $detail = Detail::findOrFail($id);
        $user_id = Auth::user()->id;
        $newAmount = $detail->amount + $request->input('amount');

        PutDetail::create([
            'detail_id' => $id,
            'user_id' => $user_id,
            'supplier_num' => $detail->supplier_num,
            'producer_num' => $detail->producer_num,
            'serial' => $request->input('serial'),
            'amount' => $request->input('amount'),
            'status' => $request->input('status'),
            'comment' => $request->input('comment')
        ]);

        $detail->update([
            'amount' => $newAmount
        ]);

        return redirect()->route('public.main');
    }

    public function putNew()
    {
        return view('layouts.primary', [
            'page' => 'pages.put-new-detail',
            'title' => 'Положить деталь'
        ]);
    }

    public function putNewDetail(Request $request)
    {
        $user_id = Auth::user()->id;
        $detail = Detail::create([
            'name' => $request->input('name'),
            'supplier_num' => $request->input('supplier_num'),
            'producer_num' => $request->input('producer_num'),
            'serial' => $request->input('serial'),
            'amount' => $request->input('amount'),
            'status' => $request->input('status'),
            'comment' => $request->input('comment')
        ]);

        PutDetail::create([
            'user_id' => $user_id,
            'detail_id' => $detail->id,
            'supplier_num' => $request->input('supplier_num'),
            'producer_num' => $request->input('producer_num'),
            'serial' => $request->input('serial'),
            'amount' => $request->input('amount'),
            'status' => $request->input('status'),
            'comment' => $request->input('comment')
        ]);

        return redirect()->back()->with('message', 'Деталь успешно добавлена на склад!')->withInput();
    }

    public function order($id)
    {
        try {
            $detail = Detail::findOrFail($id);
        } catch (\Exception $e) {
            abort(404);
        }

        return view('layouts.primary', [
            'page' => 'pages.order-detail',
            'title' => 'Заказать деталь',
            'detail' => $detail
        ]);
    }

    public function orderDetail($id, Request $request)
    {
        $detail = Detail::findOrFail($id);
        $user_id = Auth::user()->id;

        Order::create([
            'user_id' => $user_id,
            'detail_id' => $id,
            'name' => $detail->name,
            'supplier_num' => $detail->supplier_num,
            'producer_num' => $detail->producer_num,
            'amount' => $request->input('amount'),
            'comment' => $request->input('comment'),
            'shop' => $request->input('shop'),
        ]);

        return redirect()->route('public.main');
    }

    public function orderNew()
    {
        return view('layouts.primary', [
            'page' => 'pages.order-new-detail',
            'title' => 'Заказать деталь'
        ]);
    }

    public function orderNewDetail(Request $request)
    {
        $user_id = Auth::user()->id;
        $detail = Detail::create([
            'name' => $request->input('name'),
            'supplier_num' => $request->input('supplier_num'),
            'producer_num' => $request->input('producer_num'),
            'amount' => '0',
            'status' => '6'
        ]);

        Order::create([
            'user_id' => $user_id,
            'detail_id' => $detail->id,
            'name' => $request->input('name'),
            'supplier_num' => $request->input('supplier_num'),
            'producer_num' => $request->input('producer_num'),
            'amount' => $request->input('amount'),
            'comment' => $request->input('comment'),
            'shop' => $request->input('shop'),
        ]);

        return redirect()->route('public.main');
    }

    public function create()
    {
        return view('layouts.primary', [
            'page' => 'pages.create',
            'title' => 'Создать карточку детали'
        ]);
    }

    public function createDetail(DetailCreateRequest $request)
    {
        $detail=Detail::create([
            'name' => $request->input('name'),
            'supplier_num' => $request->input('supplier_num'),
            'producer_num' => $request->input('producer_num'),
            'serial' => $request->input('serial'),
            'supplier' => $request->input('supplier'),
            'producer' => $request->input('producer'),
            'amount' => $request->input('amount'),
            'min_amount' => $request->input('min_amount'),
            'location_id' => $request->input('location_id'),
            'analogues' => $request->input('analogues'),
            'comment' => $request->input('comment'),
            'status' => $request->input('status'),
            'type' => $request->input('type'),
            'source' => $request->input('source')
        ]);

        $detail->simulators()->attach($request->input('simulators'));
        return redirect()->route('public.main');

    }

    public function edit($id)
    {
        $detail = Detail::find($id);

        return view('layouts.primary', [
            'page' => 'pages.edit',
            'title' => 'Редактировать учетную карточку',
            'detail' => $detail
        ]);
    }

    public function editDetail($id, DetailCreateRequest $request)
    {
        $detail = Detail::find($id);

        $detail->update([
            'name' => $request->input('name'),
            'supplier_num' => $request->input('supplier_num'),
            'producer_num' => $request->input('producer_num'),
            'serial' => $request->input('serial'),
            'supplier' => $request->input('supplier'),
            'producer' => $request->input('producer'),
            'amount' => $request->input('amount'),
            'min_amount' => $request->input('min_amount'),
            'location_id' => $request->input('location_id'),
            'analogues' => $request->input('analogues'),
            'comment' => $request->input('comment'),
            'status' => $request->input('status'),
            'type' => $request->input('type'),
            'source' => $request->input('source')
        ]);

        try {
            $detail->simulators()->sync($request->input('simulators'));
        } catch (\Exception $e) {}

        return redirect()->route('public.detail.one', ['id' => $detail->id]);
    }

    public function delete($id)
    {
        Detail::find($id)->delete();
        TakenDetail::where('detail_id', $id)->delete();
        PutDetail::where('detail_id', $id)->delete();
        Order::where('detail_id', $id)->delete();

        return redirect()->route('public.main');
    }

}
