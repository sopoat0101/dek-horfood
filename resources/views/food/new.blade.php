@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="css/login.css">
<div class="container mt-4 mb-5">
    <div class="row">
        <div class="col-md-10 mx-auto col-md-offset-3 mt-3 mb-3">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Add New Food</h3></div>
                <hr>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL::to('upload') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="uid" value="{{ Auth::user()->id }}" required autofocus>
                      <div class="col-md-12">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-12">
                                <input type="text" class="former col-12" name="name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">ingradient</label>

                            <div class="col-md-12">
                                <textarea type="text" class="former col-12" name="ingradient" required></textarea>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">howto</label>

                            <div class="col-md-12">
                                <textarea type="text" class="former col-12" style="height:300px;" name="howto" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Image</label>

                            <div class="col-md-12">
                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                <input type="file" name="image" id="file" required>
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-dekhor col-12 btn-lg" value="Add New Menu">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
