{{-- display item --}}
<div class="card-big-container">
    <div class="card-big-title">
      <hr />
      <div class="card-big-title">
        <i class="fas fa-exclamation-circle"></i>
        <h1>置いてある商品</h1>
      </div>
    </div>
    <ul class="horizontal-list">

        @foreach ($applications as $application)
            <li class="horizontal-list-item">

                <a href="{{route('welcome.showItem', [$application->item])}}">

                <div class="card-big">
                    <!-- {{-- img --}} -->
                    @if($application->item->image_path)
                        <img src="{{$application->item->image_path}}" alt="">
                    @else
                        <img src="https://res.cloudinary.com/delvmfnei/image/upload/v1621186998/1_eihryo.jpg" alt="">
                    @endif
                    <!-- {{-- content --}} -->
                    <div class="card-big-content">
                        <!-- {{-- text 70 --}} -->
                        <div class="card-big-text">
                            <h2>{{$application->item->title}}</h2>
                            <p>値段：{{ $application->item->value }} 円</p>
                        </div>
                        <!-- {{-- like 30--}} -->
                        <div class="card-big-like">
                            <like-component
                                :post="{{$application->item}}"
                                :version="{{json_encode("item")}}"
                            ></like-component>
                        </div>
                    </div>
                </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>