@extends('package_namespace::layouts.auth')

@section('title')
{{ 'Login' }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">

                <!-- Display Validation Errors -->

                <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                    @if (session()->has('flash_message'))
                    <div class="alert alert-success">
                        {{ session()->get('flash_message') }}
                    </div>
                    @endif

                    @if (session()->has('error_message'))
                    <div class="alert alert-danger">
                        {{ session()->get('error_message') }}
                    </div>
                    @endif



                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail Address</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="">

                        </div>

                    </div>



                    <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password">

                        </div>

                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">Login</button>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection