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
                                    <li class="breadcrumb-item active">Plan List</li>
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
                                <h4 class="card-title mb-0 flex-grow-1">Plans</h4>
                            </div><!-- end card header -->

                            <div class="card-body">

                                <div class="live-preview">
                                    <div class="table-responsive table-card">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">title</th>
                                                    <th scope="col">Slug</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col" style="width: 150px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($banner as $p)
                                                <tr>
                                                    <td>{{$p['id']}}</td>
                                                    <td><img src="{{URL::asset('/banner/'.$p['image'])}}" alt="" style="width:50px;height:50px"></td>
                                                    <td>{{$p['title']}}</td>
                                                    <td>{{$p['slug']}}</td>
                                                    <td>{{$p['type']}}</td>
                                                    <td>
                                                        @if($p['status'] == '1')
                                                        <form action="{{ route('admin.banner.status', $p->id) }}" method="POST">
                                                            @csrf
                                                            @method('post')
                                                            <button class="btn btn-success" type="submit"><a>Active</a></button>
                                                        </form>
                                                        @else
                                                        <form action="{{ route('admin.banner.status', $p->id) }}" method="POST">
                                                            @csrf
                                                            @method('post')
                                                            <button class="btn btn-danger" type="submit"><a>Deactivate</a></button>
                                                        </form>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <form action="{{route('admin.banner.delete', $p->id)}}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger" type="submit"><a>Delete</a></button>
                                                    </td>
                                                    </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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