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
                                    <li class="breadcrumb-item active">Plan Create</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Plans Create</h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    @if(isset($plan->id))
                                    <form action="{{route('plan.details.update', ['id'=>$plan->id])}}" method="post" enctype="multipart/form-data">
                                        @else
                                        <form action="{{route('plans.create')}}" method="post" enctype="multipart/form-data">
                                            @endif
                                            @csrf
                                            <div class="row gy-4">

                                                <div class="col-md-4">
                                                    <div>
                                                        <label for="Plan_Name" class="form-label">Plan Name</label>
                                                        @if(isset($plan->id))
                                                        <input type="text" class="form-control" id="Plan_Name" name="name" value="{{{ $plan->name }}}">
                                                        @else
                                                        <input type="text" class="form-control" id="Plan_Name" name="name">
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-4">
                                                    <div>
                                                        <label for="sku" class="form-label">SKU</label>
                                                        @if(isset($plan->id))
                                                        <input type="text" class="form-control" id="sku" name="sku" value="{{{ $plan->sku }}}">
                                                        @else
                                                        <input type="text" class="form-control" id="sku" name="sku">
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-4">
                                                    <div>
                                                        <label for="keyword" class="form-label">Keyword</label>
                                                        @if(isset($plan->id))
                                                        <input type="text" class="form-control" id="keyword" name="keyword" value="{{{$plan->keyword }}}">
                                                        @else
                                                        <input type="text" class="form-control" id="keyword" name="keyword" ">
                                                    @endif
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class=" col-md-4">
                                                        <div>
                                                            <label for="Slug" class="form-label">Slug</label>
                                                            @if(isset($plan->id))
                                                            <input type="text" class="form-control" id="slug" name="slug" value="{{{$plan->slug}}}">
                                                            @else
                                                            <input type="text" class="form-control" id="slug" name="slug">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <div>
                                                            <label for="video" class="form-label">Video</label>
                                                            @if(isset($plan->id))
                                                            <input type="text" class="form-control" id="video" name="video" value="{{{ $plan->video}}}">
                                                            @else
                                                            <input type="text" class="form-control" id="video" name="video">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <div>
                                                            <label for="pdf" class="form-label">Pdf</label>
                                                            @if(isset($plan->id))
                                                            <input type="file" class="form-control" id="pdf" name="pdf" value="{{{ $plan->pdf}}}">
                                                            @else
                                                            <input type="file" class="form-control" id="pdf" name="pdf">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <div>
                                                            <label for="image" class="form-label">Plan Image</label>
                                                            <input type="file" class="form-control" id="plan_image" name="plan_image">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <div>
                                                            <label for="elevation_image" class="form-label">Elevation Image</label>
                                                            <input type="file" class="form-control" id="elevation_image" name="elevation_image">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <div>
                                                            <label for="price" class="form-label">Regular Price</label>
                                                            @if(isset($plan->id))
                                                            <input type="text" class="form-control" id="price" name="price" value="{{{ $plan->price }}}">
                                                            @else
                                                            <input type="text" class="form-control" id="price" name="price">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <div>
                                                            <label for="sell_price" class="form-label">Sell Price</label>
                                                            @if(isset($plan->id))
                                                            <input type="text" class="form-control" id="sell_price" name="sell_price" value="{{{$plan->sell_price}}}">
                                                            @else
                                                            <input type="text" class="form-control" id="sell_price" name="sell_price">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <div>
                                                            <label for="width" class="form-label">Width</label>
                                                            @if(isset($plan->id))
                                                            <input type="text" class="form-control" id="width" name="width" value="{{{ $plan->width}}}">
                                                            @else
                                                            <input type="text" class="form-control" id="width" name="width">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <div>
                                                            <label for="height" class="form-label">Height</label>
                                                            @if(isset($plan->id))
                                                            <input type="text" class="form-control" id="height" name="height" value="{{{$plan->height}}}">
                                                            @else
                                                            <input type="text" class="form-control" id="height" name="height">
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="vastu" class="form-label">Vastu</label>
                                                        <div class="input-group">
                                                            @if(isset($plan->id))
                                                            <select class="form-select" id="vastu" name="vastu">
                                                                <option value="">Choose...</option>
                                                                <option {{{ ($plan->vastu) == 'yes' ? 'selected' : '' }}} value="yes">Yes</option>
                                                                <option {{{ ($plan->vastu) == 'no' ? 'selected' : '' }}} value="no">No</option>
                                                            </select>
                                                            @else
                                                            <select class="form-select" id="vastu" name="vastu">
                                                                <option value="">Choose...</option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <label for="face" class="form-label">Face</label>
                                                        <div class="input-group">
                                                            @if(isset($plan->id))
                                                            <select class="form-select" id="faces" name="faces">
                                                                <option value="">Choose...</option>
                                                                <option {{{ ($plan->faces) == 'east' ? 'selected' : '' }}} value="east">East</option>
                                                                <option {{{ ($plan->faces) == 'west' ? 'selected' : '' }}} value="west">West</option>
                                                                <option {{{ ($plan->faces) == 'north' ? 'selected' : '' }}} value="north">North</option>
                                                                <option {{{ ($plan->faces) == 'south' ? 'selected' : '' }}} value="south">South</option>
                                                            </select>
                                                            @else
                                                            <select class="form-select" id="faces" name="faces">
                                                                <option value="">Choose...</option>
                                                                <option value="east">East</option>
                                                                <option value="west">West</option>
                                                                <option value="north">North</option>
                                                                <option value="south">South</option>
                                                            </select>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <label for="parking" class="form-label">Parking</label>
                                                        <div class="input-group">
                                                            @if(isset($plan->id))
                                                            <select class="form-select" id="parking" name="parking">
                                                                <option value="">Choose...</option>
                                                                <option {{{ ($plan->parking) == 'yes' ? 'selected' : '' }}} value="yes">Yes</option>
                                                                <option {{{ ($plan->parking) == 'no' ? 'selected' : '' }}} value="no">No</option>
                                                            </select>
                                                            @else
                                                            <select class="form-select" id="parking" name="parking">
                                                                <option value="">Choose...</option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <label for="bhk" class="form-label">BHK</label>
                                                        <div class="input-group">
                                                            @if(isset($plan->id))
                                                            <select class="form-select" id="bhk" name="bhk">
                                                                <option value="">Choose...</option>
                                                                <option {{{ ($plan->bhk) == '1bhk' ? 'selected' : '' }}} value="1bhk">1BHK</option>
                                                                <option {{{ ($plan->bhk) == '2bhk' ? 'selected' : '' }}} value="2bhk">2BHK</option>
                                                                <option {{{ ($plan->bhk) == '3bhk' ? 'selected' : '' }}} value="3bhk">3BHK</option>
                                                                <option {{{ ($plan->bhk) == '4bhk' ? 'selected' : '' }}} value="4bhk">4BHK</option>
                                                            </select>
                                                            @else
                                                            <select class="form-select" id="bhk" name="bhk">
                                                                <option value="">Choose...</option>
                                                                <option value="1bhk">1BHK</option>
                                                                <option value="2bhk">2BHK</option>
                                                                <option value="3bhk">3BHK</option>
                                                                <option value="4bhk">4BHK</option>
                                                            </select>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <label for="bhk" class="form-label">Floor</label>
                                                        <div class="input-group">
                                                            @if(isset($plan->id))
                                                            <select class="form-select" id="floor" name="floor">
                                                                <option value="">Choose...</option>
                                                                <option {{{ ($plan->floor) == 'g+1' ? 'selected' : '' }}} value="g+1">G+1</option>
                                                                <option {{{ ($plan->floor) == 'g+2' ? 'selected' : '' }}} value="g+2">G+2</option>
                                                                <option {{{ ($plan->floor) == 'g+3' ? 'selected' : '' }}} value="g+3">G+3</option>
                                                                <option {{{ ($plan->floor) == 'g+4' ? 'selected' : '' }}} value="g+4">G+4</option>
                                                            </select>
                                                            @else
                                                            <select class="form-select" id="floor" name="floor">
                                                                <option value="">Choose...</option>
                                                                <option value="g+1">G+1</option>
                                                                <option value="g+2">G+2</option>
                                                                <option value="g+3">G+3</option>
                                                                <option value="g+4">G+4</option>
                                                            </select>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <label for="swiming_pool" class="form-label">Swiming Pool</label>
                                                        <div class="input-group">
                                                            @if(isset($plan->id))
                                                            <select class="form-select" id="swiming_pool" name="swiming_pool">
                                                                <option value="">Choose...</option>
                                                                <option {{{ ($plan->swiming_pool) == '0' ? 'selected' : '' }}} value="0">Yes</option>
                                                                <option {{{ ($plan->swiming_pool) == '1' ? 'selected' : '' }}} value="1">No</option>
                                                            </select>
                                                            @else
                                                            <select class="form-select" id="swiming_pool" name="swiming_pool">
                                                                <option value="">Choose...</option>
                                                                <option value="0">Yes</option>
                                                                <option value="1">No</option>
                                                            </select>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <label for="plot" class="form-label">Plot</label>
                                                        <div class="input-group">
                                                            @if(isset($plan->id))
                                                            <select class="form-select" id="plot" name="plot">
                                                                <option value="">Choose...</option>
                                                                <option {{{ ($plan->plot) == '0' ? 'selected' : '' }}} value="0">Yes</option>
                                                                <option {{{ ($plan->plot) == '1' ? 'selected' : '' }}} value="1">No</option>
                                                            </select>
                                                            @else
                                                            <select class="form-select" id="plot" name="plot">
                                                                <option value="">Choose...</option>
                                                                <option value="0">Yes</option>
                                                                <option value="1">No</option>
                                                            </select>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <label for="column_placement" class="form-label">Column Placement</label>
                                                        <div class="input-group">
                                                            @if(isset($plan->id))
                                                            <select class="form-select" id="column_placement" name="column_placement">
                                                                <option value="">Choose...</option>
                                                                <option {{{ ($plan->column_placement) == '0' ? 'selected' : '' }}} value="0">Yes</option>
                                                                <option {{{ ($plan->column_placement) == '1' ? 'selected' : '' }}} value="1">No</option>
                                                            </select>
                                                            @else
                                                            <select class="form-select" id="column_placement" name="column_placement">
                                                                <option value="">Choose...</option>
                                                                <option value="0">Yes</option>
                                                                <option value="1">No</option>
                                                            </select>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <label for="door_size" class="form-label">Door Size</label>
                                                        <div class="input-group">
                                                            @if(isset($plan->id))
                                                            <select class="form-select" id="door_size" name="door_size">
                                                                <option value="">Choose...</option>
                                                                <option {{{ ($plan->door_size) == '0' ? 'selected' : '' }}} value="0">Yes</option>
                                                                <option {{{ ($plan->door_size) == '1' ? 'selected' : '' }}} value="1">No</option>
                                                            </select>
                                                            @else
                                                            <select class="form-select" id="door_size" name="door_size">
                                                                <option value="">Choose...</option>
                                                                <option value="0">Yes</option>
                                                                <option value="1">No</option>
                                                            </select>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <label for="window_size" class="form-label">Window Size</label>
                                                        <div class="input-group">
                                                            @if(isset($plan->id))
                                                            <select class="form-select" id="window_size" name="window_size">
                                                                <option value="">Choose...</option>
                                                                <option {{{ ($plan->window_size) == '0' ? 'selected' : '' }}} value="0">Yes</option>
                                                                <option {{{ ($plan->window_size) == '1' ? 'selected' : '' }}} value="1">No</option>
                                                            </select>
                                                            @else
                                                            <select class="form-select" id="window_size" name="window_size">
                                                                <option value="">Choose...</option>
                                                                <option value="0">Yes</option>
                                                                <option value="1">No</option>
                                                            </select>

                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <label for="activated" class=" form-label">Ventilation Size</label>
                                                        <div class="input-group">
                                                            @if(isset($plan->id))
                                                            <select class="form-select" id="ventilation_size" name="ventilation_size">
                                                                <option value="">Choose...</option>
                                                                <option {{{ ($plan->ventilation_size) == '0' ? 'selected' : '' }}} value="0">Yes</option>
                                                                <option {{{ ($plan->ventilation_size) == '1' ? 'selected' : '' }}} value="1">No</option>
                                                            </select>
                                                            @else
                                                            <select class="form-select" id="ventilation_size" name="ventilation_size">
                                                                <option value="">Choose...</option>
                                                                <option value="0">Yes</option>
                                                                <option value="1">No</option>
                                                            </select>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <label for="activated" class="form-label">Short Description</label>
                                                        <div class="input-group">
                                                            @if(isset($plan->id))
                                                            <textarea name="short_description" id="short_description" cols="60" rows="5">{{$plan->short_description}}</textarea>
                                                            @else
                                                            <textarea name="short_description" id="short_description" cols="60" rows="5"></textarea>
                                                            @endif
                                                        </div>

                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <label for="activated" class="form-label">Long Description</label>
                                                        <div class="input-group">
                                                            @if(isset($plan->id))
                                                            <textarea name="long_description" id="long_description" cols="60" rows="5">{{$plan->long_description}}</textarea>
                                                            @else
                                                            <textarea name="long_description" id="long_description" cols="60" rows="5"></textarea>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <!--end col-->
                                                    <div class="col-md-4">
                                                        <label for="activated" class="form-label">Activated</label>
                                                        <div class="input-group">
                                                            <input type="radio" id="0" name="activated" value="0"><br>
                                                            <label for="0">Yes</label><br>
                                                            <input type="radio" id="1" name="activated" value="1"><br>
                                                            <label for="1">No</label><br>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                                <br> <button type="submit" class="btn btn-primary"> Submit</button>
                                        </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->


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