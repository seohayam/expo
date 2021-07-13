{{-- display store --}}
<div class="card-big-container">
    <div class="card-big-title">
      <hr />
      <div class="card-big-title">
        <i class="fas fa-exclamation-circle"></i>
        <h1>置いてあるお店</h1>
      </div>
    </div>
    <ul class="horizontal-list">

        @foreach ($applications as $application)
            <li class="horizontal-list-item">
                <a href="{{route('welcome.showStore', [$application->store])}}">

                <div class="card-big">
                    <!-- {{-- img --}} -->
                    @if ($application->store->image_path)
                        <img src="{{$application->store->image_path}}" alt="">
                    @else
                        <img src="https://res.cloudinary.com/delvmfnei/image/upload/v1621186998/1_eihryo.jpg" alt="">
                    @endif
                    <!-- {{-- content --}} -->
                    <div class="card-big-content">
                        <!-- {{-- text 70 --}} -->
                        <div class="card-big-text">
                            <h2>{{$application->store->name}}</h2>
                            <p>空席状況：{{ $application->store->available }} 席</p>
                        </div>
                        <!-- {{-- like 30--}} -->
                        <div class="card-big-like">
                            <like-component
                                :post="{{$application->store}}"
                                :version="{{json_encode("store")}}"
                            ></like-component>
                        </div>
                    </div>
                </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>