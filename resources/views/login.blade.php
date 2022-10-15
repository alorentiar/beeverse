@extends('blueprint.master')

@section('title')
    Beeverse | Login
@endsection


@section('content')
    <div class="container d-flex flex-wrap flex-row align-items-center">
        {{-- logo --}}
        <div>
            <img src="/frontend/beeverse.png" alt="beeverse">
            <p class="login-helper text-center">@lang('login.dont')</p> 
            <div class="text-center">
                <a href="/register" class="text-decoration-none text-white text-center"><button class="btn btn-primary ">@lang('login.register')</button></a>
            </div>
        </div>
        {{-- vertical line --}}
        <div class="vertical-line"></div>
        {{-- Login Section --}}
        <div style="width: 40%;margin:10px;"> 
            
            <div class="card text-center">
                <h5 class="card-header">@lang('header.login')</h5>
                <div class="card-body">
                    <form action="/login" method="POST">
                        @csrf
                        <div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">@lang('login.email')</span>
                            <input type="text" name="email" id="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" autofocus required >
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">@lang('login.password')</span>
                            <input type="password" name="password" id="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary">@lang('header.login')</button>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </div>


@endsection

<style>
    .login-helper{
        font-size: 1.2rem;
        color: #212529;
        margin:10px
    }

    .register-title{    
        font-size: 1.5rem;
        font-weight: 800;
        color: #212529;
        margin-bottom: 10px;
    }

    .vertical-line{
        border: 1px solid #8f969e;
        height: 60vh;
        margin: 5px;
    }
</style>