@extends('layouts.frontend')
@section('content')
<div class="container-fluid">
		<div class="row justify-content-center">
			<img style="height:300px" src="{{asset('images/venus.jpg')}}" />
		</div>
		<div class="row justify-content-center">
			<h1>Venus Principle - Demo recordings</h1>
		</div>
		<div class="row justify-content-center">
			<p>All demos are home recordings no live drums</p>
		</div>
		<div class="row justify-content-center">
			<table>
				<tr><td><a href="/media/kindle_the_fire.mp3">Kindle The Fire</a></td>
					<td><audio controls><source src="/media/kindle_the_fire.mp3" type="audio/mpeg"></audio></td></tr>
				<tr><td><a href="/media/the_haunting.mp3">The Haunting</td>
					<td><audio controls><source src="/media/the_haunting.mp3" type="audio/mpeg"></audio></td></tr>
				</tr>
				<tr><td><a href="/media/lord_he_giveth.mp3">The Lord He Giveth</td>
					<td><audio controls><source src="/media/lord_he_giveth.mp3" type="audio/mpeg"></audio></td></tr>
				</tr>
				<tr><td><a href="/media/stand_in_your_light.mp3">Stand In Your Light</td>
					<td><audio controls><source src="/media/stand_in_your_light.mp3" type="audio/mpeg"></audio></td></tr>
				</tr>
				<tr><td><a href="/media/days_of_summer.mp3">Days Of Summer</td>
					<td><audio controls><source src="/media/days_of_summer.mp3" type="audio/mpeg"></audio></td></tr>
				</tr>
					

			</table>
		</div>
		<div class="row justify-content-center">
			<h1>Contacts</h1>>
		</div>
		<div class="row justify-content-center">
			<table class="">
				<tr><td><p>Management: Ula Gehret - <a href="mailto:ula@clandestinemusic.com">ula@clandestinemusic.com</a> </p></td></tr>
				<tr><td><p>Booking:  Zoltan Jakab - <a href="mailto:zoltan@doomstarbookings.com ">zoltan@doomstarbookings.com </a></p></td></tr>
			</table>
			
		</div>

</div>
@endsection