<?php

namespace App\Http\Controllers;

use App\Models\TakenDetail;
use Illuminate\Http\Request;
use App\User;
use App\Models\Detail;
use App\Models\PutDetail;
use App\Models\Order;

class UserController extends Controller
{
    public function lk($id)
    {
        try {
            $user = User::findOrFail($id);
        } catch (\Exception $e) {
            abort(404);
        }

        $put_details = PutDetail::where('user_id', $user->id)->get();
        $taken_details = TakenDetail::where('user_id', $user->id)->get();
        $orders = Order::where('user_id', $user->id)->get();

        return view('layouts.primary', [
            'page' => 'pages.profile',
            'title' => 'Личный кабинет',
            'user' => $user,
            'put_details' => $put_details,
            'taken_details' => $taken_details,
            'orders' => $orders
        ]);
    }

    public function admin($id)
    {
        try {
            $user = User::findOrFail($id);
        } catch (\Exception $e) {
            abort(404);
        }

        $put_details = PutDetail::all();
        $taken_details = TakenDetail::all();
        $orders = Order::all();
        $users = User::all();

        return view('layouts.primary', [
            'page' => 'pages.admin-profile',
            'title' => 'Администратор',
            'user' => $user,
            'put_details' => $put_details,
            'taken_details' => $taken_details,
            'orders' => $orders,
            'users' => $users
        ]);
    }

    public function takenDetails($id)
    {

    }

    
}
