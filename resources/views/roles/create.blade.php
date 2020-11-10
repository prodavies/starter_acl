@extends('master_layouts.master')
@section('title', 'Role | Create new role')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="col-lg-12">
            @can('create-role')
            <a href="{{ route('role.index') }}" class="btn btn-primary pull-right"> List of roles</a>
            @endcan
        </div>
        <div class="x_panel">
            <div class="x_title">
                <h2>Create new role </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form class="form-horizontal" method="POST" action="{{ route('role.store')}}">
                    {{ csrf_field() }} 
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label>Role Name</label>
                                <div class="input-group">
                                    <input class="form-control" required="" placeholder="Role name" type="text" name="name" value="{{ old('name') }}">
                                    <div class="input-group-addon">
                                        <span class="fa fa-user"></span>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    
                       <div class="form-group col-md-12 required" >
                           <label for="permissions">Assign permissions below</label>
                           <br><br>
                           @foreach ($permissions as $permission)
                           <div class="col-md-3">
                           <input type="checkbox" name="permissions[]" value="{{ $permission->id }}">&nbsp; {{$permission->name}}
                           </div>
                           @endforeach
                       </div>
                    <div class="panel-footer">
                        <div class="col-md-12">
                            <div class="form-group no-margin">
                                <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> &nbsp;Save</button>
                                <a href="{{route('role.index')}}" class="btn btn-default"><span class="fa fa-times-circle"></span> &nbsp;Cancel</a>
                            </div>
                        </div>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>
@endsection