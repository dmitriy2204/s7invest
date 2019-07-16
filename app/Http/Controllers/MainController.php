<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DetailCreateRequest;
use App\Models\Detail;

class MainController extends Controller
{
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

    public function takeDetail($id)
    {

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
            'title' => 'Положеть деталь',
            'detail' => $detail
        ]);
    }

    public function putDetail($id)
    {


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

    public function orderDetail($id)
    {

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

        return redirect()->route('public.main');
    }

}
