@php
 use App\food;
 use GrahamCampbell\Markdown\Facades\Markdown;
 $food = food::where('fid', $fid)->join('users', 'users.id', '=', 'food.uid')->select('food.*','users.name as uname')->first();
@endphp

@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/showmenu.css">
	<div class="container mt-5 mb-5">
		<div class="row">
			<div id="menuname" class="col-md-12" style="text-align: center;"><h3>{{ $food->name }}</h3></div>
		</div>
		<div class="row justify-content-center mt-3">
			<div class="col-md-12">
				<img id="photoid" style="background-size:cover;background-image: url('/img/{{$food->fid}}.jpg');">
			</div>
		</div>
		<hr>
		<div class="row justify-content-center">
			<div class="col-md-2">
				วัตถุดิบ
			</div>
			<div class="col-md-8" style="text-align: justify;text-indent: 2rem;">
                <?php echo Markdown::convertToHtml($food->ingradient) ?>
            </div>
		</div>
		<br>
		<div class="row justify-content-center">
			<div class="col-md-2">
				วิธีการทำ
			</div>
			<div class="col-md-8" style="text-align: justify;text-indent: 2rem;">
				<?php echo Markdown::convertToHtml($food->howto) ?>
            </div>
		</div>
		<hr>
		<br>
		<div><p>View: {{ $food->views }} By {{ $food->uname }}</p></div>
		<br>
	</div>
@endsection
