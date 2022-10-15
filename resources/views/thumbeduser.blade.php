@extends('blueprint.master')

@section('title')
    Beeverse | @lang('wishlist.wishlist')
@endsection

@section('content')
<div class="container flex d-flex flex-wrap flex-column">
    <div>
        <h1 class="title">@lang('wishlist.wishlist')</h1>
        <p class="desc">@lang('wishlist.subwishlist')</p>
    </div>

    <div class="container">
            <div class="container flex d-flex flex-wrap flex-row text-center">
                {{-- each user cardnya --}}
                {{-- @dd($user) --}}
    
                {{-- @dd($user->toArray()) --}}
                {{-- dd($user) --}}
                {{-- @dd($wishlist) --}}
                @foreach($wishlist as $w)
                {{-- @dd($w) --}}
                    @if(($w->isThumb_own == 1) && $w->userWish->visible == 1)
                    <div class="card" style="width: 18rem; margin:10px">
                    {{-- meanmpilkan link meet yang saling thumb  --}}
                        @if(Auth::user()->id == $w->userOwn->id)
                            <img src="/hobbies/{{ $w->userWish->profilepic }}" class="card-img-top" alt="..." style="height: 180px">
                            <div class="card-body">
                                <h4 class="card-title">{{ $w->userWish->name }}</h4>
                            </div>
                            @if($w->isThumb_wish == 1 && $w->isThumb_own == 1)
                            <div class="text-center m-2">
                                <p class="card-text">@lang('wishlist.both')</p>
                                {{-- <p class="card-text">This is the link!</p> --}}
                                <button class="btn btn-success"><a href="https://binus.zoom.us/j/2553430711" target="_blank" style="text-decoration: none;color:white;">@lang('wishlist.vidcall')</a></button>
                            </div>
                            @else
                            <p>@lang('wishlist.notboth')</p>
                            @endif
                        @else
                            <img src="/hobbies/{{ $w->userOwn->profilepic }}" class="card-img-top" alt="..." style="height: 180px">
                            <div class="card-body">
                                <h4 class="card-title">{{ $w->userOwn->name }}</h4>
                            </div>
                            @if($w->isThumb_own == 1 && $w->isThumb_wish == 1)
                                <div class="text-center m-2">
                                    <p class="card-text">@lang('wishlist.both')</p>
                                    {{-- <p class="card-text">This is the link!</p> --}}
                                    <button class="btn btn-success"><a href="https://binus.zoom.us/j/2553430711" target="_blank" style="text-decoration: none;color:white;">@lang('wishlist.vidcall')</a></button>
                                </div>
                            @else
                            <p>@lang('wishlist.notboth')</p>
                            @endif
                        @endif
                    </div>
                    {{-- @elseif (Auth::user()->id == $w->user_id_own)
                    @continue --}}
                    @endif
                @endforeach
            </div>
    </div>
</div>
@endsection

<style>
.none{
display: none;
}

</style>