@extends('blueprint.master')

@section('title')
    Beeverse | Buy Avatar
@endsection

@section('content')
<div class="container flex d-flex flex-wrap flex-column">
    <div>
        <h1 class="title">Detail Avatar</h1>
        <p class="desc">Buy coolest avatar here!</p>
    </div>
    {{-- @dd($avatar) --}}
    <div class="container flex d-flex flex-wrap flex-row justify-content-around">
        <div class="card" style="width: 18rem; margin:10px">
            <img src="/avatar/{{ $avatar->content }}" class="card-img-top" alt="..." style="height: 180px">
            <div class="card-body">
              <h5 class="card-title">{{ $avatar->title }}</h5>
              <h6 class="card-title">Price:</h6>
              <div class="text-center">
                  <p class="card-text">{{ $avatar->price }} Coin</p>
              </div>
              {{-- <form action="/avatar/{{ $avatar->id }}" method="post">
                @csrf
                <button class="btn btn-primary mt-4">Buy Avatar</button>
              </form> --}}
            </div>
        </div>
        <div class="flex d-flex flex-column text-center">
            <div>
                <h4>Go Grab your unique avatar now!</h4>
            </div>
            <div>
                <form action="/process-buy-me" method="post">
                @csrf
                <input type="search" style="display: none" value="{{ $avatar->id }}" name="idavatar" readonly>
                <input type="search" style="display: none" value="{{ $avatar->price }}" name="price" readonly>
                <input type="search" style="display: none" value="{{ $userid }}" name="me" readonly>
                <button class="btn btn-primary mt-4 mb-4">Buy For Me</button>
              </form>
            </div>
            <div class="mt-2 mb-2">
                <h4>Or wanna just give this avatar to other users?</h4>
            </div>
            <div>
                <form action="/process-buy-others" method="post">
                @csrf
                <input type="search" style="display: none" value="{{ $avatar->id }}" name="idavatar" readonly>
                <input type="search" style="display: none" value="{{ $avatar->price }}" name="price" readonly>
                <div class="input-group mb-1">
                    <select class="form-control" id="sel1" name="others">
                        @foreach($others as $o)
                        @if($o->id != Auth::user()->id)
                      <option class="dropdown-item" value="{{ $o->id }}">{{ $o->name }}</option>
                        @endif
                        @endforeach
                    </select>
                  </div>
                <button class="btn btn-primary mt-4">Buy For Others</button>
              </form>
            </div>

        </div>
    </div>
</div>
@endsection