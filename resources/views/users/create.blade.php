@extends('master_layouts.master')
@section('title', 'User | Create new user')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="col-lg-12">
            @can('create-role')
            <a href="{{ route('user.index') }}" class="btn btn-primary pull-right"> List of users</a>
            @endcan
        </div>
        <div class="x_panel">
            <div class="x_title">
                <h2>Create new user </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form class="form-horizontal" method="POST" action="{{ route('user.store')}}">
                    {{ csrf_field() }} 
                    <div class="panel-body">
                        
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label><b>Name</b></label><br> 
                                <div class="input-group">
                                    <input class="form-control" required="" placeholder="Name" type="text" name="name" value="{{ old('name') }}">
                                    <div class="input-group-addon">
                                        <span class="fa fa-user"></span>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <label><b>Email</b></label><br> 
                                <div class="input-group">
                                    <input class="form-control" required=""  type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                                    <div class="input-group-addon">
                                        <span class="fa fa-envelope"></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="password"><b>Password</b></label><br> 
                                <div class="input-group ">
                                    <input id="password" type="password" required="" placeholder="Password" class="form-control" name="password" value="{{ old('password') }}">

                                    <div class="input-group-addon">
                                        <span class="fa fa-lock"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="password-confirm"><b>Confirm Password</b></label><br> 
                                <div class="input-group ">
                                    <input id="password-confirm" required="" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">

                                    <div class="input-group-addon">
                                        <span class="fa fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                       <div class="form-group col-md-12 required" >
                           <label for="permissions">Assign roles to user</label>
                           <br><br>
                           @foreach ($roles as $role)
                           <div class="col-md-3">
                           <input type="checkbox" name="roles[]" value="{{ $role->id }}">&nbsp; {{$role->name}}
                           </div>
                           @endforeach
                       </div>
                    <div class="panel-footer">
                        <div class="col-md-12">
                            <div class="form-group no-margin">
                                <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> &nbsp;Save</button>
                                <a href="{{route('user.index')}}" class="btn btn-default"><span class="fa fa-times-circle"></span> &nbsp;Cancel</a>
                            </div>
                        </div>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>
@endsection