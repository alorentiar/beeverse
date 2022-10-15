@extends('blueprint.master')

@section('title')
    Beeverse | Payment
@endsection

@section('content')
    {{-- @dd(auth()->user()->regisprice); --}}
    {{-- {{ $test = auth()->user()->regisprice }} --}}
    {{-- @if(auth()->user()->regisprice) --}}

    {{-- @else --}}
        
    {{-- @endif --}}

    <div class="container">
        {{-- <button onclick="function testing()">test</button> --}}
        <div class="card text-center">
            <h5 class="card-header">@lang('registerpay.pmp')</h5>
            <div class="card-body">
                <form action="/payment-process" method="POST">
                    @csrf
                    <div>
                    <input name="userid" id="userid" value="{{ $id }}" type="search" style="display: none" readonly>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">@lang('registerpay.psp')</span>
                        <input type="text" name="topay" id="topay" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $regisprice }}" readonly>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">@lang('registerpay.pyp')</span>
                        <input type="number" name="wantpay" id="wantpay" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" autofocus>
                    </div>
                    </div>
                    <div class="text-center">
                    <button type="submit" onclick="return validateprice({{ $regisprice }})" class="btn btn-primary">@lang('registerpay.pay')</button>
                    </div>
                </form>
            </div>
          </div>
    </div>
    
@endsection

<script>
    function validateprice(price){
        //ambil nilai dengan id wantpay
        let wantpay = document.getElementById('wantpay').value;
        //untuk menunjukkan confirmation alert kalo bayar kelebihan di convert ke coin
        if(wantpay > price && !confirm('Sorry you overpaid '+ (wantpay-price).toLocaleString()+", would you like enter a balance?")){
            return false;
        }else if(wantpay < price){ //kalo bayarnya kurang tunjukkin kurang berapa
            alert('You are still underpaid '+ (price-wantpay).toLocaleString());
            return false;
        }
        else{//kalo bayarnya pas
            return true;
        }
        
    }
    
    //test calling function di js
    function testing(){
        alert('hello');
    }
</script>