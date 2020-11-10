@extends('master_layouts.master')
@section('title', 'Permission | Create new permission')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="col-lg-12">
            @can('create-permission')
            <a href="{{ route('permission.index') }}" class="btn btn-primary pull-right"> List of permissions</a>
            @endcan
        </div>
        <div class="x_panel">
            <div class="x_title">
                <h2>Editing <b> {{ $permission->name }} </b> permission </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form class="form-horizontal" method="POST" action="{{ route('permission.update', $permission->id)}}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }} 
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label>Permission Name</label>
                                <div class="input-group">
                                    <input class="form-control" required="" placeholder="Permission name" type="text" name="name" value="{{ $permission->name }}">
                                    <div class="input-group-addon">
                                        <span class="fa fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Display Name</label>
                                <div class="input-group">
                                    <input class="form-control" required="" placeholder="Display Name" type="text" name="display_name" value="{{ $permission->display_name }}">
                                    <div class="input-group-addon">
                                        <span class="fa fa-pencil"></span>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label>Permission desciption</label>
                                <div class="input-group">
                                    <textarea class="form-control" type="text" cols="300" name="description" placeholder="Desciption">{{ $permission->description }}</textarea>                               
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="col-md-12">
                            <div class="form-group no-margin">
                                <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> &nbsp;Update</button>
                                <a href="{{route('permission.index')}}" class="btn btn-default"><span class="fa fa-times-circle"></span> &nbsp;Cancel</a>
                            </div>
                        </div>
                    </div>
                  
                </form>
            </div>
        </div>
    </div>
</div>
@endsection