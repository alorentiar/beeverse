@extends('blueprint.master')

@section('title')
    Beeverse | 
@endsection

@section('content')
    <div class="container flex d-flex flex-wrap flex-column">
        <div>
            <h1 class="title">@lang('topup.topup')</h1>
            <p class="desc">@lang('topup.topuphere')</p>
        </div>
        <div>
            <div class="container text-center">
                <h3>@lang('topup.press')</h3>
                <form action="/topup" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="coin" value="100">
                    <button type="submit" class="btn btn-warning">@lang('topup.topupnow')</button>
                </form>
            </div>
        </div>
    </div>
@endsection

<style>
.none{
    display: none;
}

</style>
