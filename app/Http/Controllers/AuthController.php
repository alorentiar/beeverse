<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hobby;
use App\Models\ChosenHobby;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //

    public function register(Request $req)
    {
        App::setlocale(session()->get('locale'));

        $randomPrice = rand(100000, 125000);
        $hobby = Hobby::all();

        // dd($randomPrice);

        return view('register',[
            'randomPrice' => $randomPrice,
            'hobby' => $hobby
        ]);
    }

    public function registerprocess(Request $req)
    {
        App::setlocale(session()->get('locale'));

        // dd(count($req->hobby));
        $validator = Validator::make(
            $req->all(),
            [
                'name'           => 'required|min:8|max:50',
                'email'          => 'required|email',
                'password'         => 'required|min:8|max:50|required_with:confirm_password|same:confirm_password',
                'confirm_password' => 'required|min:8|max:50',
                'hobby'          => 'required|min:3',
                'iglink'         => 'required|url',
                'gender'         => 'required',
                'mobilenum'      => 'required|numeric',
            ],
            [
                'required' => 'Must be filled!',
                'min' => 'Min. 8 characters or Min. 3 item for hobby',
                'max' => 'Max. 50 characters',
                'email' => 'Must be email format',
                'numeric' => 'Must be numeric',
                'url' => 'Must be url format',
            ]
        );

        $account_found = User::where('email', 'LIKE', '%' . $req->email . '%')->first();

        if ($validator->fails()) {
            Alert::error('Registration Fail', 'Please fill the form correctly!');
            return redirect('/register')->withErrors($validator)->withInput();
        } else if ($account_found) {
            Alert::error('Registration Fail', 'Email Already Exists!');
            return back();
        } else {
            $profpic = Hobby::find($req->hobby[0]);
            $profpic = $profpic->hobbypic;


            $user = new User();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = bcrypt($req->password);
            $user->gender = $req->gender;
            $user->iglink = $req->iglink;
            $user->mobilenum = $req->mobilenum;
            $user->regisprice = $req->regisprice;
            $user->profilepic = $profpic;
            $user->save();

            //save the user id
            $passing_id = $user->id;
            //get regisprice
            $regisprice = $user->regisprice;

            
            $hobbies = Hobby::whereIn('id', $req->hobby)->get();
           

            foreach ($hobbies as $hobby) {
                $chosenHobby = new ChosenHobby();
                $chosenHobby->user_id = $passing_id;
                $chosenHobby->id_hobby = (int)$hobby->id;
                $chosenHobby->save();
            }


            Alert::success('Registration Success', 'Please make registration payment!');
            
            return view('register-payment',[
                'id' => $passing_id,
                'regisprice' => $regisprice
            ]);
        }

    }


    public function login()
    {
        App::setlocale(session()->get('locale'));

        return view('login');
    }

    public function loginprocess(Request $req)
    {
        App::setlocale(session()->get('locale'));

        $validator = $req->validate([
            'email'          => 'required|email',
            'password'       => 'required',
        ]);

        if (Auth::attempt($validator)) {
            $req->session()->regenerate();
            Alert::success('Login Success', 'Welcome '.auth()->user()->name);
            return redirect()->intended('/');
        }else{
            Alert::error('Login Failed', 'Please check your email and password');
            return redirect()->back();
        }
    }

    

    public function logout(Request $req)
    {
        App::setlocale(session()->get('locale'));
        Auth::logout();

        $req->session()->regenerateToken();
        
        
        Alert::success('Logout Success', 'You successfully logout!');
        return redirect()->intended('/');
    }

    public function dashboard()
    {
        App::setlocale(session()->get('locale'));
        
        $user = User::all();
        // $user->setPageName('user');
        $Hobby = Hobby::all();
        // $Hobby->setPageName('hobby');
        return view('dashboard', [
            'user' => $user,
            'hobby' => $Hobby
        ]);
    }
}
