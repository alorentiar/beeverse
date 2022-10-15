<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hobby;
use App\Models\Avatar;
use App\Models\Wishlist;
use App\Models\ChosenHobby;
use App\Models\OwnedAvatar;
use Illuminate\Http\Request;
use CreateChosenHobbiesTable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\choose_handler;
use RealRashid\SweetAlert\Facades\Alert;

class MainController extends Controller
{
    //
    

    public function user_detail($id)
    {
        // $arravatar = [];
        App::setlocale(session()->get('locale'));

        $userDetails = User::find($id);
        $user = $userDetails->id;
        $cavatar = OwnedAvatar::select('avatar_id')->where('user_id', $user)->get();
        $avatar = Avatar::find($cavatar);
        // dd($cavatar);
        // foreach($cavatar as $cv){
        //     dd($cv);
        //     $arravatar = $cv->avatar_id;
        // }

        // $avatar = Avatar::whereIn('id', $arravatar)->get(); 
        // dd($avatar);
        return view('user-detail', [
            'user' => $userDetails,
            'avatar' => $avatar
        ]);
    }

    public function creators_angel(){
        App::setlocale(session()->get('locale'));

        $userDetails = Auth::user()->id;
        $user = $userDetails;
        $cavatar = OwnedAvatar::select('avatar_id')->where('user_id', $user)->get();
        $avatar = Avatar::find($cavatar);
        
        return view('creators-angel',[
            'avatar' => $avatar
        ]);
    }

    public function search_user(Request $request)
    {
        App::setlocale(session()->get('locale'));
        // dd($request->search);
        $user = User::where('name', 'LIKE', '%' . $request->search . '%')->paginate(4);
        $Hobby = Hobby::all();
        // dd($user);
        return view('dashboard', [
            'user' => $user,
            'hobby' => $Hobby
        ]);
    }

    public function search_gender(Request $request){
        App::setlocale(session()->get('locale'));
        // dd($request->all());
        $gender = (int) $request->gender;

        $gendToSearch = User::where('gender', $gender)->get();
        $Hobby = Hobby::all();

        return view('dashboard',[
            'user' => $gendToSearch,
            'hobby' => $Hobby
        ]);
        
    }

    public function search_hobby(Request $request){
        App::setlocale(session()->get('locale'));
        // dd($request->all());
        $allhobby = Hobby::all();
        $hobby = (int) $request->hobby;

        $hobbyToSearch = DB::table('users')->select('users.*')
        ->join('chosen_hobbies', 'users.id', '=', 'chosen_hobbies.user_id')
        ->join('hobbies', 'chosen_hobbies.id_hobby', '=', 'hobbies.id')
        ->where('hobbies.id', '=', $hobby)
        ->get();

        // dd($hobbyToSearch);

        return view('dashboard-hobby',[
            'user'=> $hobbyToSearch,
            'hobby' => $allhobby
        ]);
    }

    public function topup(){
        App::setlocale(session()->get('locale'));

        return view('topup');
    }

    public function process_topup(Request $req){
        App::setlocale(session()->get('locale'));

        //  dd($req->all());
        $user_id = (int)$req->user_id;
        $coin = (int)$req->coin;
        $user = User::find($user_id);

        // dd($user);
        $user->coin += $coin;
        $user->save();

        // dd($user);
        Alert::success('Success', 'Topup 100 Coin Success');
        return redirect()->intended('topup');
    }

    public function cool_avatar(){
        App::setlocale(session()->get('locale'));


        $avatar = Avatar::paginate(4);
        return view('avatar',[
            'avatar' => $avatar
        ]);
    }

    public function buy_avatar($id){
        App::setlocale(session()->get('locale'));

        // dd($id);
        $myuserid = Auth::user()->id;
        $othersuserid = User::all();
        $avatar = Avatar::find($id);
        
        // dd($owned_avatar_id);
        return view('buyavatar',[
            'avatar' => $avatar,
            'userid' => $myuserid,
            'others' => $othersuserid
        ]);
    }

    public function process_buy_avatar_me(Request $req){
        App::setlocale(session()->get('locale'));

        // dd($req->all());
        $priceavt = $req->price;
        $idavatar = $req->idavatar;
        $userid = $req->me;

        $usercoin = Auth::user()->coin;

        if($usercoin < $priceavt){
            Alert::error('Error', 'You dont have enough coin. Please Topup!');
            return redirect()->intended('topup');
        }

        //deduct balance
        $user = User::find($userid);
        $user->coin -= $priceavt;
        $user->save();

        $addavt = new OwnedAvatar();
        $addavt->user_id = $userid;
        $addavt->avatar_id = $idavatar;
        $addavt->save();

        Alert::success('Success', 'Success Buy Avatar!');
        return redirect()->intended('/creators-angel');

    }

    public function process_buy_avatar_others(Request $req){
        App::setlocale(session()->get('locale'));

        // dd($req->all());

        $priceavt = $req->price;
        $idavatar = $req->idavatar;
        $useridtobuy = $req->others;

        $usercoin = Auth::user()->coin;

        if($usercoin < $priceavt){
            Alert::error('Error', 'You dont have enough coin. Please Topup!');
            return redirect()->intended('topup');
        }

        //deduct balance
        $user = User::find(Auth::user()->id);
        $user->coin -= $priceavt;
        $user->save();

        $addavt = new OwnedAvatar();
        $addavt->user_id = $useridtobuy;
        $addavt->avatar_id = $idavatar;
        $addavt->save();

        Alert::success('Success', 'Success Buy Avatar!');
        return redirect()->intended('/creators-angel');
    }

    public function dissapear(){
        App::setlocale(session()->get('locale'));

        $user = Auth::user()->id;
        $random = rand(1,3);

        $userToFind = User::find($user);
        
        if($userToFind->coin < 50){
            Alert::error('Error', 'You dont have enough coin');
            return redirect()->intended('/');
        }
        $userToFind->oldpp = $userToFind->profilepic;
        $userToFind ->coin -= 50;
        $userToFind->profilepic = (string)$random.".png";
        $userToFind->visible = false;
        
        $userToFind->save();
        


        Alert::success('Success Dissapear', 'Dissapear Success your photos changed to random bear!');
        return redirect()->intended('/');
    }

    public function appear(){
        App::setlocale(session()->get('locale'));
        
        $user = Auth::user()->id;
        // $chosenHobby = ChosenHobby::find($user);
        // $chosenHobby = $chosenHobby->id_hobby;
        // $profpic = Hobby::find($chosenHobby);
        // //picture
        // $backpic = $profpic->hobbypic;
        

        $userToFind = User::find($user);
        if($userToFind->coin < 5){
            Alert::error('Error', 'You dont have enough coin');
            return redirect()->intended('/');
        }
        $userToFind->coin -= 5;
        $userToFind->visible = true;
        $userToFind->profilepic = $userToFind->oldpp;
        $userToFind->save();

        Alert::success('Success Appear', 'Appear Success your photos changed back to previous!');
        return redirect()->intended('/');
    }

    public function thumbed(Request $req, $id){
        App::setlocale(session()->get('locale'));

        // dd($req->all());
        $account_found = Wishlist::where('user_id_own', Auth::user()->id)
        ->where('user_id_wish',$id)
        ->first();

        if($account_found){
            Alert::error('Error', 'You already thumbed this user');
            return redirect()->intended('/');
        }

        //kalo dia di wish
        $verify_user = Wishlist::where('user_id_own',$id)->where('user_id_wish', Auth::user()->id)->first();
        // dd($verify_user);
        if($verify_user){
            // $verify_user = Wishlist::where('user_id_wish', $req->thumb)->first();
            if($verify_user->isThumb_wish == false){
            $verify_user->isThumb_wish = true;
            $verify_user->save();

            Alert::success('Success Thumbed in wish', 'You will have a videocall when the user thumbed you back!');
            return redirect()->intended('/');
            }else{
                Alert::error('Error', 'You already thumbed this user');
                return redirect()->intended('/');
            }

        }
        

        $wishlist = new Wishlist();
        $wishlist->user_id_own = $req->thumb;
        $wishlist->user_id_wish = $req->thumbto;
        $wishlist->isThumb_own = true;
        $wishlist->save();
        // dd($wishlist);

        Alert::success('Success Thumbed', 'You will have a videocall when the user thumbed you back!');
        return redirect()->intended('/');
    }

    public function thumbed_page(){
        App::setlocale(session()->get('locale'));

        //ambil wishlist
        $user = Auth::user()->id;
        $wishlist = Wishlist::where('user_id_own', $user)
        ->orWhere('user_id_wish', $user)
        ->where('isThumb_own',true)->get();
        // //own untuk kita ngelik
        // $wishlist_own = Wishlist::where('user_id_own', $user)->get();
        // //wish untuk orang lain yang klik kita
        // $wishlist_wish = Wishlist::where('user_id_wish', $user)->get();

        // $userAll = User::where('id', $user)->get();
        
        // dd($wishlist);


        return view('thumbeduser', [
            'wishlist' => $wishlist
        ]);
    }
}
