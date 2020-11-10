@extends('master_layouts.master')
@section('title', 'Roles | List of roles')
@section('content')
<div class="row">
    <div class="col-lg-12">
        @can('create-permission')
        <a href="{{ route('role.create') }}" class="btn btn-primary pull-right"> Create new role</a>
        @endcan
    </div>
    <div class="clearfix"></div>

    <div class="x_panel">
        <div class="x_title">
        <h2>LIST OF ROLES</h2>
        
        <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <div class="row">
        <div class="col-sm-12">
        <div class="card-box table-responsive">
            <table id="dataTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $id =1;
                    @endphp
                   @foreach ($roles as $role)
                   <tr>
                    <td>{{ $id }}</td>
                   <td>{{ $role->name }}</td>
                    <td>
                        @can('edit-role')
                        <div class="btn-group">                       
                        <a class="btn btn-primary mx-1" href="{{ route('role.show', $role->id) }}"><i class="fa fa-eye">view</i></a>
                        <a class="btn btn-success" href="{{ route('role.edit', $role->id) }}"><i class="fa fa-edit">edit</i></a>
                        </div>
                        @endcan
                    </td>
                </tr>
                @php
                    $id++;
                @endphp
            
                   @endforeach
                </tbody>
            </table>
        </div>
        </div>
        </div>
        </div>
</div>
@endsection


@push('styles')
<link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endpush

@push('scripts')
   <!-- Datatables -->
   <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
   <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
   <script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
   <script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
   <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
   <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
   <script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
   <script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
   <script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
   <script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
   <script src="{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
   <script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
   <script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
   <script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#dataTable').DataTable();
} );
</script>
@endpush