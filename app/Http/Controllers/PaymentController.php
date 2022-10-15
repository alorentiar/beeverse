<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentController extends Controller
{
    //
    public function payment()
    {
        App::setlocale(session()->get('locale'));

        return view('register-payment');
    }

    public function payment_process(Request $req)
    {
        App::setlocale(session()->get('locale'));

        // dd($req->all());
        //ambil harga
        $feetopay = (int)$req->topay; //yang harus dibayar
        $amount = (int)$req->wantpay; //uang yang ada
        $remain = ($amount - $feetopay) + 100; //sisa uang yang diconvert ke coin
        $userid = $req->userid;

        //cari tau punya siapakah itu
        $user = User::find($userid);
        $user->coin = $remain;
        $user->save();

        Alert::success('Payment Success', 'Default coin is 100. If there is any overpaid will be converted to coin, IDR 1 = 1 coin!');
        return redirect()->intended('/');
    }
}
