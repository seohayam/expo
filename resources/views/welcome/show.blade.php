@extends('layouts.app')

@section('content')

    {{-- nav --}}
    <div class="show-welcome-nav ">
        @if(isset($store))
            @component('components.showNavStore',['store' => $store, 'userItemNum' => $userItemNum])
            @endcomponent
        @elseif(isset($item))
            @component('components.showNavItem',['item' => $item,'storeNum' => $storeNum])
            @endcomponent
        @endif
    </div>

    {{-- {{$store}} --}}
    @if(isset($store))
        @component('components.showBodyStore',['store' => $store, 'applications' => $applications])
        @endcomponent
    @elseif(isset($item))
        @component('components.showBodyItem',['item' => $item,'applications' => $applications])
        @endcomponent
    @endif

    {{-- vue-big-card --}}
    @if(isset($store))
        @component('components.cardBigItem',['applications' => $applications])
        @endcomponent
    @elseif(isset($item))
        @component('components.cardBigStore',['applications' => $applications])
        @endcomponent
    @endif


@endsection

@section('js')
    <script src="{{ mix('/js/map.js') }}"></script>
    <script src="{{ mix('/js/smooth.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyCC05dInZBrIvVs5I4iAzTdGOqT2TExrEY&callback=initMap" async defer></script> --}}
@endsection