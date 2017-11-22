@php
 use App\food;
 $foods = food::all();
@endphp
@extends('layouts.app')

@section('content')
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>

<div class="container mt-5 mb-5 p-3">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading row">
					<div class="col-md-4">
						<h3 >Search</h3>
					</div>
					<div class="col-md-8">
						<form method="GET" action="/search" class="col-md-12">
							<div class="input-group">
								<input type="text" id="myInput" onkeyup="myFunction()" name="q" class="inputinfo col-md-10" placeholder="Find something good" value="{{ $_GET['q'] }}">
								<input id="search" type="submit" class="btn btn-secondary col-md-2" value="Go" />
							</div>
						</form>
					</div>
				</div>
				<hr>
                <ul id="myUL" class="panel-body row">
					@foreach($foods as $food)
						<li class="p-2 col-lg-4 col-md-6" id="{{ $food->name }} {{ $food->ingradient }}">
							<a style="display:none;">{{ $food->name }} {{ $food->ingradient }}</a>
							<div class="menucard">
								<div class="menuphoto"><img class="inmenuphoto" style="background-size:cover;background-image: url('/img/{{ $food->fid }}.jpg');"></div>
								<div class="namemenu">{{ $food->name }}</div>
								<div class="viewbutton"><a href="/food/{{ $food->fid }}"><input class="view" type="submit" value="view"></a></div>
							</div>
						</li>
					@endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
window.onload = myFunction();
</script>
@endsection
