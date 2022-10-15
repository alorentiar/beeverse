@extends('blueprint.master')

@section('title')
    Beeverse | @lang('register.regtit')
@endsection


@section('content')
    <div class="container d-flex flex-wrap flex-row align-items-center">
        {{-- logo --}}
        <div>
            <img src="/frontend/beeverse.png" alt="beeverse">
            <p class="login-helper text-center">@lang('register.already')</p> 
            <div class="text-center">
                <a href="/login" class="text-decoration-none text-white text-center"><button class="btn btn-primary ">@lang('register.loginhr')</button></a>
            </div>
        </div>
        {{-- vertical line --}}
        <div class="vertical-line"></div>
        {{-- RegisterSection --}}
        <div style="width: 40%;margin:10px;"> 
            <h5 class="text-center register-title">@lang('register.regtit')</h5>
            <form action="/register-process" method="GET">
                {{-- @csrf --}}
                <div>
                <div class="input-group mb-2">
                    <span class="input-group-text" id="inputGroup-sizing-default">@lang('register.name')</span>
                    <input type="text" name="name" id="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" autofocus>
                </div>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="input-group mb-2">
                    <span class="input-group-text" id="inputGroup-sizing-default">@lang('login.email')</span>
                    <input type="text" name="email" id="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="input-group mb-2">
                    <span class="input-group-text" id="inputGroup-sizing-default">@lang('login.password')</span>
                    <input type="password" name="password" id="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="input-group mb-2">
                    <span class="input-group-text" id="inputGroup-sizing-default">@lang('register.cpassword')</span>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                @error('confirm_password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <p class="mb-0">@lang('dashboard.gender'):</p>
                <div class="flex d-flex flex-row align-items-center">
                    
                    <label class="checkbox-container m-2">
                        <input type="radio" name="gender" value=1>
                        <span class="checkbox-text">@lang('register.Male')</span>
                    </label>
                    <label class="checkbox-container m-2">
                        <input type="radio" name="gender" value=0>
                        <span class="checkbox-text">@lang('register.Female')</span>
                    </label>
                </div>
                @error('gender')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <p class="mb-0">@lang('register.choose')</p>
                <div class="input-group mb-2">
                    {{-- <span class="input-group-text" id="inputGroup-sizing-default">Hobby</span>
                    <input type="text" name="hobby[]" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> --}}
                    @foreach($hobby as $h)
                    <div class="d-inline-block mt-2 ml-4">
                    <label class="checkbox-container m-1">
                        <input type="checkbox" name="hobby[]" value="{{ $h->id }}">
                        <span class="checkbox-text">{{__('register.'.$h->hobby) }}</span>
                    </label>
                    </div>
                    @endforeach
                </div>
                @error('hobby')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <p >@lang('register.iglink')</p>
                <div class="input-group mb-2">
                    <span class="input-group-text" id="inputGroup-sizing-default">@lang('register.iglinkdis')</span>
                    <input type="url" name="iglink" id="iglink" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                @error('iglink')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="input-group mb-2">
                    <span class="input-group-text" id="inputGroup-sizing-default">@lang('register.mobile')</span>
                    <input type="phone" name="mobilenum" id="mobilenum" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                @error('mobilenum')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="input-group mb-2">
                    <span class="input-group-text" id="inputGroup-sizing-default">@lang('register.regprice')</span>
                    <input type="phone" name="regisprice" id="regisprice" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $randomPrice }}" readonly>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">@lang('register.regtit')</button>
                </div>
            </form>
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
        height: 63vh;
        margin: 5px;
    }
</style>