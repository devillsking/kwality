<x-admin-layout>
    @section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Plans</a></li>
                                    <li class="breadcrumb-item active">Plan Details</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <!-- end page title -->
                @foreach($plan as $p)

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row gx-lg-5">
                                    <div class="col-xl-4 col-md-8 mx-auto">
                                        <div class="product-img-slider sticky-side-div">
                                            <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                                                <div class="flex-grow-1">
                                                    <h4>Plan Image</h4>
                                                </div>
                                                <div class="swiper-wrapper">

                                                    <div class="swiper-slide">
                                                        <img src="{{URL::asset('/plan/'.$p['plan_image'])}}" alt="" class="img-fluid d-block" />
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- end swiper thumbnail slide -->
                                            <div class="swiper product-nav-slider mt-2">
                                                <div class="flex-grow-1">
                                                    <h4>Elevation Image </h4>
                                                </div>
                                                <div class="swiper-wrapper">

                                                    <div class="swiper-slide">
                                                        <div class="nav-slide-item ">
                                                            <img src="{{URL::asset('/elevation_image/'.$p['elevation_image'])}}" alt="" class="img-fluid d-block" />
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="swiper product-nav-slider mt-2">
                                                <div class="flex-grow-1">
                                                    <h4>Video </h4>
                                                </div>
                                                <div class="swiper-wrapper">

                                                    <div class="swiper-slide">
                                                        <div class="nav-slide-item ">
                                                            <div class="details_container_flex_right">
                                                                <iframe class="map_video" src="{{url($p['video'])}}" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- end swiper nav slide -->
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <!-- video slider  -->

                                    <!-- video slider  -->


                                    <div class="col-xl-8">
                                        <div class="mt-xl-0 mt-5">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <h4>{{$p['name']}}</h4>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div>
                                                        <a href="{{route('plan.details.edit',['id'=>$p->id])}}" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="ri-pencil-fill align-bottom"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                                <div class="text-muted fs-16">
                                                    <span class="mdi mdi-star text-warning"></span>
                                                    <span class="mdi mdi-star text-warning"></span>
                                                    <span class="mdi mdi-star text-warning"></span>
                                                    <span class="mdi mdi-star text-warning"></span>
                                                    <span class="mdi mdi-star text-warning"></span>
                                                </div>
                                                <div class="text-muted">( {{$p['rating']}})</div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                                    <i class="ri-money-dollar-circle-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-1">Regular Price :</p>
                                                                <h5 class="mb-0">{{$p['price']}}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                                    <i class="ri-money-dollar-circle-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-1">Sell Price :</p>
                                                                <h5 class="mb-0">{{$p['sell_price']}}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                                    <i class="ri-file-pdf-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-1">PDF :</p>
                                                                <!-- <h5 class="mb-0"></h5> -->
                                                                <button class="btn btn-primary"><a href="{{URL::asset('/plan/'.$p['pdf'])}}"></a> Pdf</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>



                                            <div class="mt-4 text-muted">
                                                <h5 class="fs-14">Long Description :</h5>
                                                <p>{{$p['short_description']}}</p>
                                            </div>

                                            <div class="mt-4 text-muted">
                                                <h5 class="fs-14">Short Description :</h5>
                                                <p>{{$p['long_description']}}</p>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mt-3">
                                                        <h5 class="fs-14">Features :</h5>
                                                        <ul class="list-unstyled">
                                                            <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Height:{{$p['height']}}</li>
                                                            <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Width:{{$p['width']}}</li>
                                                            <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Vastu : {{$p['vastu']}}</li>
                                                            <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Face : {{$p['faces']}}</li>
                                                            <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Parking : {{$p['parking']}}</li>
                                                            <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                BHK : {{$p['bhk']}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mt-3">
                                                        <!-- <h5 class="fs-14">Features :</h5> -->
                                                        <ul class="list-unstyled">
                                                            <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Floor:{{$p['floor']}}</li>
                                                            <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Swiming Pool:{{$p['swiming_pool']}}</li>
                                                            <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Plot : {{$p['plot']}}</li>
                                                            <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Column Placement : {{$p['column_placement']}}</li>
                                                            <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Door Size : {{$p['door_size']}}</li>
                                                            <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Window Size : {{$p['window_size']}}</li>
                                                            <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Ventilation Size : {{$p['ventilation_size']}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>

                @endforeach


            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Syntaxmantra
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

    @endsection
</x-admin-layout>