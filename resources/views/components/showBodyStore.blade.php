<div class="show-welcome">
    {{-- headr --}}
    <div class="show-welcome-header">
        <a href="{{ url()->previous() }}">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1>{{$store->name}}</h1>
    </div>
    {{-- img --}}
    <div class="show-welcome-img">
        {{-- <img src="https://res.cloudinary.com/delvmfnei/image/upload/v1621186998/1_eihryo.jpg" alt=""> --}}
        <img src="{{$store->image_path}}" alt="">
    </div>
    {{-- text --}}
    <div class="show-welcome-text">
        {{-- row --}}
        <div class="show-welcome-text-title">
            <i class="fas fa-exclamation-circle"></i>
            <h1>紹介</h1>
        </div>
        <div class="show-welcome-text-sub">
            {{$store->description}}
        </div>
    </div>
    <div class="show-welcome-text">
        {{-- row --}}
        <div class="show-welcome-text-title">
            <i class="far fa-check-square"></i>
            <h1>空き状況</h1>
        </div>
        <div class="show-welcome-text-sub">
            「{{$store->available}}」スペース
        </div>
    </div>
    {{-- map --}}
    <div class="show-welcome-map">
        @if (isset($store->adress))
            <iframe id='map' src='https://www.google.com/maps/embed/v1/place?key={{ config("services.google-map.apikey") }}&q={{$store->adress}}' frameborder='0'></iframe>
        @endif
    </div>

</div>