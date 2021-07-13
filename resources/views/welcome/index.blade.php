@extends('layouts.app')

@section('content')

    <div class="welocme-title">
        <h1>商品一覧</h1>
    </div>
    <div class="welocme-title search-bar">
        <form action="">
            <input type="input" class="fas" placeholder="&#xf002 search">
            <input type="submit" class="fas" value="&#xf002">
        </form>
    </div>

    @if(Auth::guard('user')->check())
    <div id="item_card_little">
        @foreach ($stores as $store)
            <a href="{{ route('welcome.showStore', $store) }}">
                <little-card-component
                    :post="{{json_encode($store)}}">
                </little-card-component>
            </a>
        @endforeach
    </div>
    @elseif(Auth::guard('store_owner')->check())
    <div id="store_card_little">
        @foreach ($items as $item)
            <a href="{{ route('welcome.showItme', $item) }}">
                <little-card-component
                    :post="{{json_encode($item)}}">
                </little-card-component>
            </a>
        @endforeach
    </div>
    @endif

@endsection