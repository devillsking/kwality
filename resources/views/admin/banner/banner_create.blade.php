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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Banner</a></li>
                                    <li class="breadcrumb-item active">Banner Create</li>
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
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Banner</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <form enctype="multipart/form-data" action="{{route('banner.store')}}" method="POST">
                                    @csrf
                                    <input type="file" name="image" accept=".jpg, .jpeg, .png">
                                    <br>
                                    <br>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="control-label" for="input-slug">Title</label>
                                                <input type="text" name="title" value="" placeholder="title" id="input-slug" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="control-label" for="input-name">Slug</label>
                                                <input type="text" name="slug" value="" placeholder="Banner Slug" id="input-name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label" for="input-status">Status of Banner</label>
                                            <div class="form-group mb-3">

                                                <input type="radio" name="status" value="0" placeholder="Status" id="input-status">
                                                <label class="control-label" for="input-status">Active</label>


                                                <input type="radio" name="status" value="1" placeholder="Status" id="input-status">
                                                <label class="control-label" for="input-status">Inactive</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="control-label" for="input-status">Type of Banner</label>
                                            <div class="form-group mb-3">

                                                <input type="radio" name="type" value="big" placeholder="Status" id="input-status">
                                                <label class="control-label" for="input-status">Big</label>


                                                <input type="radio" name="type" value="small" placeholder="Status" id="input-status">
                                                <label class="control-label" for="input-status">Small</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->


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