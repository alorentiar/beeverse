<div class="container">
    <header class="d-flex flex-wrap flex-row align-items-center justify-content-between py-3 border-bottom">
        <div class="d-flex flex-wrap flex-row align-items-center justify-content-start">
            <div>
                <a href="/" class="d-flex align-items-center">
                    <img src="{{ asset('frontend/beeverse.png') }}" alt="Beeverse" class="img-thumbnail" style="width: 80px; height:80px;">
                </a>
            </div>
    
            <div class="vertical">
            </div>
    
            <div>
                <h1 class="title">@lang('header.title')</h1>
                <p class="desc">@lang('header.subtitle')</p>
            </div>
        </div>

        @auth
        <div class="d-flex flex-wrap flex-row align-items-center justify-content-end">
            <div class="m-4">
                <h6>@lang('header.coin') : {{ Auth::user()->coin }}</h6>
            </div>
            <div class="btn-group">
                @if(Auth::user()->visible == 1)
                <img src="/hobbies/{{ Auth::user()->profilepic }}" alt="" class="rounded" style="height: 50px;width:50px;">
                @else
                <img src="/defaultpp/{{ Auth::user()->profilepic }}" alt="" class="rounded" style="height: 50px;width:50px;">
                @endif
                <p class="text-align-center text-center m-3">{{ Auth::user()->name }}</p>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/dissapear">@lang('header.dissapear')</a></li>
                  <li><a class="dropdown-item" href="/appear">@lang('header.appear')</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <form action="/logout" method="POST">
                    @csrf
                    <li><button type="submit" class="dropdown-item">@lang('header.logout')</button></li>
                </form>
                </ul>
              </div>
        </div>
        @else
        <div class="d-flex flex-wrap flex-row align-items-center justify-content-end">
            <div class="btn-group">
                <a href="/login" class="btn btn-primary">@lang('header.login')</a>
                <a href="/register" class="btn btn-light">@lang('header.register')</a>    
            </div>
        </div>
        @endauth
    </header>
</div>

<style>
    .desc{
        font-size: 1rem;
        color: #8f969e;
    }

    .title{
        font-family: 'Poppins', sans-serif;
        font-size: 2rem;
        font-weight: 600;
        color: #212529;
        margin-bottom: 0px;
    }
    .vertical{
        border: 0.5px solid #8f969e;
        height: 60px;
        margin: 10px;
    }
</style>