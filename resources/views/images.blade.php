@extends('layouts.main')

@section('content')

<div class="container" >
<label>Hue Range</label>

  <input type="text" id="amount_start" name="start_price" size="2" style="border: 0px; font-weight: bold; " value="0" readonly="readonly">
  <input type="text" id="amount_end" name="end_price" size="3" value="360" style="border: 0px; font-weight: bold; " readonly="readonly">

<div id="slider-range"></div>
<br>
  
<div id="updateDiv">

			@foreach($images as $image)

			



				<div class="landscape">
				<ul id="image-ul" class="ul-style">

					<li>
					<img src="{{ asset("storage/$image->photo") }}"> <br>

					Average Hue :  {{$image->hue}}


					</li>
				</ul>
				</div>
			@endforeach



</div>

</div>


@endsection


