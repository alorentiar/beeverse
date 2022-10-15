@extends('blueprint.master')

@section('title')
    Beeverse | Avatar
@endsection

@section('content')
    <div class="container flex d-flex flex-wrap flex-column">
        <div>
            <h1 class="title">Avatar</h1>
            <p class="desc">@lang('avatar.buyavatar')</p>
        </div>
        {{-- card element buat tiap user --}}
        <div class="container flex d-flex flex-wrap flex-row text-center">
            @foreach($avatar as $a)
            <div class="card" style="width: 18rem; margin:10px">
                <img src="/avatar/{{ $a->content }}" class="card-img-top" alt="..." style="height: 180px">
                <div class="card-body">
                  <h5 class="card-title">{{ $a->title }}</h5>
                  <h6 class="card-title">@lang('avatar.price') :</h6>
                   <div class="text-center">
                        <p class="card-text">{{ $a->price }} @lang('header.coin')</p>
                    </div>
                  {{-- <a href="#" class="btn btn-primary mt-4">Buy Avatar</a> --}}
                  <form action="/avatar/{{ $a->id }}" method="post">
                    @csrf
                    <button class="btn btn-primary mt-4">@lang('avatar.btnbuyavatar')</button>
                  </form>
                </div>
            </div>
            @endforeach
        </div>
        {{ $avatar->links() }}
    </div>
@endsection

<style>
.none{
    display: none;
}

</style>
