<div class="show-welcome">
    {{-- headr --}}
    <div class="show-welcome-header">
        <a href="{{ url()->previous() }}">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1>{{$item->title}}</h1>
    </div>
    {{-- img --}}
    <div class="show-welcome-img">
        {{-- <img src="https://res.cloudinary.com/delvmfnei/image/upload/v1621186998/1_eihryo.jpg" alt=""> --}}
        <img src="{{$item->image_path}}" alt="">
    </div>
    {{-- text --}}
    <div class="show-welcome-text">
        {{-- row --}}
        <div class="show-welcome-text-title">
            <i class="fas fa-exclamation-circle"></i>
            <h1>紹介</h1>
        </div>
        <div class="show-welcome-text-sub">
            {{$item->description}}
        </div>
    </div>
    <div class="show-welcome-text">
        {{-- row --}}
        <div class="show-welcome-text-title">
            <i class="far fa-check-square"></i>
            <h1>値段</h1>
        </div>
        <div class="show-welcome-text-sub">
            {{$item->value}}
        </div>
    </div>

</div>