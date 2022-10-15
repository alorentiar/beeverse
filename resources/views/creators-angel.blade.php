@extends('blueprint.master')

@section('title')
    Beeverse | @lang('ca.coll')
@endsection

@section('content')
<div class="container flex d-flex flex-wrap flex-column">
    <div>
        <h1 class="title">@lang('ca.coll')</h1>
        <p class="desc">@lang('ca.collsub')</p>
    </div>

    <div class="container">
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
.none{
display: none;
}

</style>