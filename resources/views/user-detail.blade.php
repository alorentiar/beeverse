@extends('blueprint.master')

@section('title')
    Beeverse | User Detail
@endsection

@section('content')
<div class="container d-flex flex-wrap flex-row align-items-center justify-content-around text-center">
    {{-- logo --}}
    <div>
        <img src="/hobbies/{{ $user->profilepic }}" alt="beeverse" style="width: 25vw">
        {{-- <p class="login-helper text-center">Don't have an account? <a href="#">Register Here!</a></p> --}}
    </div>
    {{-- vertical line --}}
    <div class="vertical-line"></div>
    {{-- RegisterSection --}}
    <div class="text-center">
        <div style="width: 75%;margin:auto;" class="text-center mt-3 mb-3"> 
            <div class="card text-center">
                <h5 class="card-header title">@lang('userdetail.ud')</h5>
                <div class="card-body">
                    <div class="text-start">
                        <h5>@lang('register.name') : {{ $user->name }}</h5>
                        <h5>@lang('login.email') : {{ $user->email }}</h5>
                        <h5>@lang('register.mobile') : {{ $user->mobilenum }}</h5>
                        @if($user->gender == true) 
                        <h5>@lang('dashboard.gender') : @lang('register.Male')</h5>
                        @else
                        <h5>@lang('dashboard.gender') : @lang('register.Female')</h5>
                        @endif
                        <h5>Instagram : <span><a href="{{ $user->iglink }}">{{ $user->iglink }}</a> </h4>
                    </div>                
                </div>
              </div>
        </div>
        @if(Auth::user()->id != $user->id)
        <div class="text-center">
        <h5 class="ms-4">@lang('userdetail.interest')</h5>
        <div class="text-center"> 
            <form action="/thumbed/{{ $user->id }}" method="POST">
            @csrf
            <input name="thumbto" value="{{ $user->id }}" style="display: none" type="search" readonly>
            <input name="thumb" value="{{ Auth::user()->id }}" style="display: none" type="search" readonly>
            <button type="submit" class="sizing text-decoration-none rounded text-center">
                {{-- <i class="bi bi-hand-thumbs-up-fill"></i> --}}
                <img src="/icon/iconthumb.png" alt="" style="width:100px;border:1px black;">
            </button>
            {{-- <a href="#" class="sizing"><i class="bi bi-hand-thumbs-up-fill"></i></a> --}}
            </form>
        </div>
        </div>
        @endif
        
    </div>
    <div class="container">
        <h2 class="mt-4 mb-4">@lang('ca.coll')</h1>
            {{-- @dd($avatar) --}}
            <div class="container flex d-flex flex-wrap flex-row text-center">
                {{-- each user cardnya --}}
                {{-- @dd($user) --}}
    
                {{-- @dd($user->toArray()) --}}
                {{-- dd($user) --}}
                @foreach($avatar as $avt)
                <div class="card" style="width: 18rem; margin:10px">
                    <img src="/avatar/{{ $avt->content }}" class="card-img-top" alt="..." style="height: 180px">
                    <div class="card-body">
                        {{-- <div class="text-center"> 
                            <a href="#" class="sizing"><i class="bi bi-hand-thumbs-up-fill"></i></a>
                        </div> --}}
                      {{-- <h5 class="card-title">{{ $u->name }}</h5> --}}
                      <h6 class="card-title">{{ $avt->title }}</h6>
                             {{-- @dd($u->chosenHobby) --}}
                        {{-- @foreach ($u->chosenHobby as $hby) --}}
                                 <div class="text-center">
                                    <p class="card-text">{{ $avt->price }} @lang('header.coin')</p>
                                 </div>
                             
                         {{-- @endforeach --}}
                      {{-- <a href="/user-detail/{{ $u->id }}" class="btn btn-primary mt-4">Show User</a> --}}
                    </div>
                </div>
                @endforeach
            </div>
    </div>
    
</div>
@endsection

<style>
    .sizing{
        font-size: 3rem;
        text-decoration: none;
        color: black;
    }
</style>