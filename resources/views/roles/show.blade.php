@extends('master_layouts.master')
@section('title', 'Roles | Role details')
@section('content')
<div class="row">
    <div class="col-lg-12">
        @can('create-permission')
        <a href="{{ route('role.index') }}" class="btn btn-primary pull-right"> List of roles</a>
        @endcan
    </div>
    <div class="clearfix"></div>

    <div class="x_panel">
        <div class="x_title">
        <h2>ROLES DETAILS</h2>
        
        <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <div class="row">
        <div class="col-sm-12">
        <div class="card-box table-responsive">
            <table id="dataTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Role name</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                   <td>{{ $role->name }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        </div>

        <div class="col-lg-12 my-2">
            <ol class="breadcrumb">
            </ol>
        </div>
        <div class="form-group col-md-12 required " >
        <label for="permissions"> &nbsp; <b> {{ $role->name }} </b> has following permissions</label>
            <br>
            @foreach ($role->permissions as $permission)
            <div class="col-md-3 my-1">
                {{ $permission->name }}
                </div>
            @endforeach
        </div>
        </div>
        </div>
</div>
@endsection

