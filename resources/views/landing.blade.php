@extends('layouts.app')

@section('content')
<section class="hero is-medium is-bold" style="background-image: url(/img/landing-truck-background-image.jpg)">
	<div class="hero-body">
		<div class="container">
			<div class="columns">
				<div class="column is-offset-2 is-8">
					<h1 class="title" style="color: white">
						Find Loads
					</h1>
					<form method="GET" action="/loads">
						<div class="field is-horizontal">
							<div class="field-body">
								<div class="field is-grouped">
									<p class="control is-expanded">
										<input class="input is-medium" id="autoOrigin" type="text" placeholder="Origin" name="origin" required>
									</p>
								</div>
								<div class="field">
									<p class="control is-expanded">
										<input class="input is-medium" id="autoDestination" type="text" placeholder="Destination" name="dest" required>
									</p>
								</div>
								<button class="button is-medium is-primary">Search Loads</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection