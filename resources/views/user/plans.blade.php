<x-app-layout>
    @section('content')
    <!-- Banner -->
    <div class="banner_container">
        <img src="{{asset('assets/img/carousel/plan.jpg')}}" />
    </div>
    <!-- Banner -->

    <!-- Filter Filter -->
    <div class="container filter_container_input">
        <h1 style="text-align: center;">Filter input here</h1>
        
    </div>
    <!-- Filter Filter -->

      <!-- Feature -->
     
     
    <div class="feature_container">
        @foreach($plan as $p)
        <a class="card1" href="{{route('product_details',['slug'=>$p->slug])}}">
            <img src="{{URL::asset('/plan/'.$p['plan_image'])}}" style="width: 100%;" />
            <h5>{{$p['name']}}</h5>
            <h5>{{$p['height']}}</h5>
            <h5>Vastu {{$p['vastu']}}</h5>
            <div class="go-corner" href="#">
                <div class="go-arrow">
                    →
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <!-- Feature -->

 


    <!-- Information -->
    <div class="container">
        <p>
            Readymade house plans include 2- bedroom, 3- bedroom house plans, which are one of the most popular house
            plan configurations in the country. We are updating our gallery of ready-made floor plans on a daily basis
            so that you can have the maximum options available with us to get the best-desired home plan as per your
            need.
        </p>

        <p>
            Our Website is the most appropriate, broad-ranged, and user-friendly, also it can be the best possible
            online way to find out a ready-made house plan you require.
        </p>

        <p>
            Our readymade house designs are the result of an expert, creative mind and the best technology available.
            You can find uniqueness and creativity in our readymade home designs. When we are designing a house plan we
            emphasize every need and comfort as we designed like we are going to live in this house.
        </p>

        <p>
            kwality Design ion is to provide the easiest method and a fast process of finding the desired home plan so
            that you can enjoy the journey of setting your new house. Here we present our readymade home plan gallery
            which will help you out to find the best suitable home plan as per your need.Our gallery includes readymade
            floor plan of sizes 15x50, 15x20, 15x30, 15x40, 15x60, 15x50, 20x30, 20x40, 20x50, 20x60, 20x70, 20x80,
            25x25, 25x30 , 25x40, 25x50, 25x60, 30x40, 30x45, 30x50, 30x60, 30x20, 30x30, 35x55, 36x50, 40x50, 40x60,
            40x30, 40x40, 45x65, 45x45, 50x70, 50x80, 50x90, 60x60, 60x70, 60x80, simplex , duplex or independent east
            facing , north facing , west facing and south facing plan etc.
        </p>
    </div>
    <!-- Information -->
    @endsection
    </x-app-layout>