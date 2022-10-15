@extends('blueprint.master')

@section('title')
    Beeverse | @lang('dashboard.title')
@endsection

@section('content')
    <div class="container flex d-flex flex-wrap flex-column">
        <div>
            <h1 class="title">@lang('dashboard.title')</h1>
            <p class="desc">@lang('dashboard.subtitle')</p>
        </div>
        <div>
            @include('blueprint.searchbar')
        </div>
        <div>
            <p class="m-0">@lang('dashboard.gender'):</p>
            <div class="container flex d-flex flex-wrap flex-row justify-content-center ">
                <form class="d-flex" method="get" action="/search-gender">
                    @csrf
                    <input name="gender" value="1" type="search" class="none" readonly>
                    <button type="submit" class="btn btn-success m-2">@lang('register.Male')</button>
                </form>
                <form class="d-flex" method="get" action="/search-gender">
                    @csrf
                    <input name="gender" value="0" type="search" class="none" readonly>
                    <button type="submit" class="btn btn-success m-2">@lang('register.Female')</button>
                </form>
            </div>
            <p class="m-0">@lang('dashboard.hobby'):</p>
            <div class="container flex d-flex flex-wrap flex-row justify-content-center">
                @foreach($hobby as $h)
                <form class="d-flex" method="GET" action="/search-hobby">
                    @csrf
                    <input name="hobby" value="{{ $h->id }}" type="search" class="none" readonly>
                    <button type="submit" class="btn btn-success m-2">{{ __('register.'.$h->hobby)  }}</button>
                </form>
                @endforeach
            </div>
            {{-- {{ $hobby->links() }} --}}
        </div>
        <h1 class="title mt-2 mb-2">@lang('dashboard.Users')</h1>
        {{-- card element buat tiap user --}}
        <div class="container flex d-flex flex-wrap flex-row">
            {{-- each user cardnya --}}
            {{-- @dd($user) --}}

            {{-- @dd($user->toArray()) --}}
            {{-- dd($user) --}}
            @if($user->count() == 0)
                <div class="container text-center m-4">
                    <h5 class="card-title">@lang('dashboard.nores')</h5>
                </div>
            @endif

            @foreach($user as $u)
            @if($u->visible == 0)
            @continue
            @else
            <div class="card" style="width: 18rem; margin:10px">
                {{-- @dd($u->chosenhobby) --}}
                <img src="/hobbies/{{ $u->profilepic }}" class="card-img-top" alt="..." style="height: 180px">
                <div class="card-body">
                    {{-- <div class="text-center"> 
                        <a href="#" class="sizing"><i class="bi bi-hand-thumbs-up-fill"></i></a>
                    </div> --}}
                  <h5 class="card-title">{{ $u->name }}</h5>
                  <a href="/user-detail/{{ $u->id }}" class="btn btn-primary mt-4">@lang('dashboard.showuser')</a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
@endsection

<style>
.none{
    display: none;
}

</style>
