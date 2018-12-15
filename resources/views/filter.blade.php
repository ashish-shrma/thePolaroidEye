

			@foreach($images as $image)

			



				<div class="landscape">
				<ul id="image-ul">

					<li>
					<img src="{{ asset("storage/$image->photo") }}"> <br>

					Average Hue :  {{$image->hue}}


					</li>
				</ul>
				</div>
			@endforeach