<x-app-layout>
@section('content')
<section>
    <!-- Details Container  -->
    @foreach($plan as $p)
    <div class="container detail_container">
        <h1 class="detail_heading">{{$p['name']}}</h1>

        <div class="detail_view">
            <h3 class="details_heading">{{$p['name']}}</h3>

            <p>
               {{$p['long_description']}}
            </p>
        </div>

        <div class="details_container_flex">
            <div class="details_container_flex_left">
                <div class="card">
                    <img src="{{URL::asset('/plan/'.$p['plan_image'])}}" />
                    <div class="info">
                        <h1>Map</h1>
                        <p>{{$p->short_description}}</p>
                        <a href="{{route('checkout',['slug'=>$p->slug])}}">Buy Now</a>
                    </div>
                </div>
            </div>

            <div class="details_container_flex_right">
                <iframe class="map_video" src="{{url($p['video'])}}" allowfullscreen></iframe>
            </div>
        </div>

        <div class="details_container_view">
            <h1>FRONT <span>ELEVATION</span></h1>
            <img src="{{URL::asset('/elevation_image/'.$p['elevation_image'])}}" />
        </div>

    </div>
    @endforeach
    </section>
    <!-- Details Container  -->
@endsection
    </x-app-layout>

   