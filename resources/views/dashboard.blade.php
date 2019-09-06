@extends('layout.app')

@section('contentLoad')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8 col-lg-offset-4 col-md-offset-3 col-sm-offset-2">
                <div class="brand-logo text-center">
                <div class="authfy-login">
                    <div class="authfy-panel panel-login text-center active">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <h3> <p>This is your dashboard</p></h3>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        @if(session('successLogin'))
                                        <div class="alert alert-success " role="alert">
                                        <p>{{ session('successLogin') }}</p>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="panel-body">LogOut</div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ./panel-login -->

                </div>
            </div>
        </div> <!-- ./row -->
    </div> <!-- ./container -->

@stop
