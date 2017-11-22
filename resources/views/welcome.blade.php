@php
 use App\food;
 $foods = food::where('fid', '!=', '0')->orderBy('views','desc')->take(6)->get();
@endphp
@extends('layouts.app')

@section('content')
<div class="container pt-2 mt-3 pb-3 pt-5 mb-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <form method="GET" action="/search">
                <div class="input-group">
                    <input name="q" type="text" class="inputinfo col-10" placeholder="Find something good">
                    <input id="search" type="submit" class="btn btn-secondary col-2" value="Go" />
                </div>
            </form>
        </div>
        <div class="col-lg-12 m-0 mt-5 mb-5" align="center">
            <h3 class="title col-6">Top 6 Foods</h3>
            <div class="col-12 row p-2">
                @foreach($foods as $food)
                    <div class="p-2 col-lg-4 col-md-6">
                        <div class="menucard">
                            <div class="menuphoto"><img class="inmenuphoto" style="background-image: url('/img/{{ $food->fid }}.jpg');"></div>
                            <div class="namemenu">{{ $food->name }}</div>
                            <div class="viewbutton"><a href="/food/{{ $food->fid }}"><input class="view" type="submit" value="view"></a></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
