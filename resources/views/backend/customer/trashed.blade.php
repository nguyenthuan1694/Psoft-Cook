@extends('backend.layouts.app')

@section('css')
    <!-- Data Table CSS -->
    <link href="{{ asset('backend/vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Customers</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <div class="container-fluid px-xxl-65 px-xl-20">
        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>List of trashed Customers</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Deleted at</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($customers as $index => $items)
                                        <tr>
                                            <td>{{ $items->id }}</td>
                                            <td>{{ $items->name }}</td>
                                            <td>{{ $items->email }}</td>
                                            <td>{{ $items->phone }}</td>
                                            <td>{{ $items->deleted_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="javascript:void(0)" class="mr-25" onclick="restore({{ $index }})" data-toggle="tooltip" data-placement="top" title="Restore"> <i class="icon" data-icon="&#xe050;"></i> </a>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#delete_modal_{{ $index }}"> <i class="icon" data-icon="9" data-toggle="tooltip" data-placement="top" title="Delete"></i> </a>
                                                <form name="restore_{{ $index }}" action="{{ route('customer.restore', ['id' => $items->id]) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                </form>
                                                @include('backend.includes.modal_delete_confirm', ['index' => $index, 'item' => $items, 'type' => 'customers'])
                                            </td>
                                        </tr>
                                    @endforeach
                                    @if(!count($customers))
                                        <td colspan="9" class="text-center"><h3><i class="linea-icon linea-basic" data-icon="f"></i></h3> No Data</td>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="float-left">
                                {!! $customers->total() !!} trashed news
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="float-right">
                                {!! $customers->render() !!}
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <!-- /Row -->
    </div>
@endsection

@section('script')
    <!-- Data Table JavaScript -->
    <script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    {{--    <script src="{{ asset('backend/dist/js/dataTables-data.js') }}"></script>--}}

    <script>
        function restore(index) {
          let form = 'restore_' + index;
          $(`form[name=${form}]`).submit();
        }
    </script>
@endsection

