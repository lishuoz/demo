@extends('layouts.app')

@section('content')
<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column is-2">
				<bl-menu default-item="account"></bl-menu>
			</div>
			<div class="column is-10">
				<h1 class="title is-3">Activate My Account</h1>
				<div class="columns">
					<div class="column is-8">
						<form action="/test" method="post">
							{{ csrf_field() }}

							<div class="box">
								<h2 class="title is-4"><span class="tag is-primary is-medium">1</span> Personal Information</h2>
								<hr>
								<div class="field">
									<label class="label">First Name</label>
									<p class="control">
										<input class="input {{ $errors->has('firstName') ? ' is-danger' : '' }}" value="{{ old('firstName') }}" name="firstName" type="text" placeholder="" required>
										<span class="icon is-small is-left">
											<!-- <i class="fa fa-user" aria-hidden="true"></i> -->
										</span>
									</p>
									@if ($errors->has('firstName'))
									<p class="help is-danger">{{ $errors->first('firstName') }}</p>
									@endif
								</div>
								<div class="field">
									<label class="label">Last Name</label>
									<p class="control">
										<input class="input {{ $errors->has('lastName') ? ' is-danger' : '' }}" value="{{ old('lastName') }}" name="lastName" type="text" placeholder="" required>
									<!-- <span class="icon is-small is-left">
										<i class="fa fa-user" aria-hidden="true"></i>
									</span> -->
								</p>
								@if ($errors->has('lastName'))
								<p class="help is-danger">{{ $errors->first('lastName') }}</p>
								@endif
							</div>
							<div class="field">
								<label class="label">Email Address</label>
								<p class="control">
									<input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" value="{{ old('email') }}"  name="email" type="text" placeholder="" required>
									<!-- <span class="icon is-small is-left">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</span> -->
								</p>
								@if ($errors->has('email'))
								<p class="help is-danger">{{ $errors->first('email') }}</p>
								@endif
							</div>
							<div class="field">
								<label class="label">Phone Number</label>
								<p class="control">
									<input class="input {{ $errors->has('phone') ? ' is-danger' : '' }}" value="{{ old('phone') }}"  name="phone" type="text" placeholder="" required>
									<!-- <span class="icon is-small is-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</span> -->
								</p>
								@if ($errors->has('phone'))
								<p class="help is-danger">{{ $errors->first('phone') }}</p>
								@endif
							</div>
						</div>

						<div class="box">
							<h2 class="title is-4"><span class="tag is-primary is-medium">2</span> Select Sevices</h2>
							<hr>
							<div class="field">
								<p class="control">
									<label class="checkbox">
										<input type="checkbox" name="products[]" value="load">
										Load Board
									</label>
								</p>
							</div>
							<div class="field">
								<p class="control">
									<label class="checkbox">
										<input type="checkbox" name="products[]" value="rates">
										Spot Rates
									</label>
								</p>
							</div>
							<div class="field">
								<p class="control">
									<label class="checkbox">
										<input type="checkbox" name="products[]" value="ratio">
										Truck-load Ratio
									</label>
								</p>
							</div>
						</div>

						<div class="box">
							<h2 class="title is-4"><span class="tag is-primary is-medium">3</span> Company Information</h2>
							<hr>
							<div class="field">
								<label class="label">Company Legal Name</label>
								<p class="control">
									<input class="input {{ $errors->has('companyLegalName') ? ' is-danger' : '' }}" value="{{ old('companyLegalName') }}"  name="companyLegalName" placeholder="" type="text"  required>
									<!-- <span class="icon is-small is-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</span> -->
								</p>
								@if ($errors->has('companyLegalName'))
								<p class="help is-danger">{{ $errors->first('companyLegalName') }}</p>
								@endif
							</div>
							<div class="field">
								<label class="label">Company Trade Name</label>
								<p class="control">
									<input class="input {{ $errors->has('companyTradeName') ? ' is-danger' : '' }}" value="{{ old('companyTradeName') }}"  name="companyTradeName" type="text" placeholder="" required>
									<!-- <span class="icon is-small is-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</span> -->
								</p>
								@if ($errors->has('companyTradeName'))
								<p class="help is-danger">{{ $errors->first('companyTradeName') }}</p>
								@endif
							</div>
							<div class="field">
								<label class="label">Office Address</label>
								<p class="control">
									<input class="input {{ $errors->has('officeAddress') ? ' is-danger' : '' }}" value="{{ old('officeAddress') }}"  name="officeAddress" id="officeAddress" type="text" placeholder="" required>
									<!-- <span class="icon is-small is-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</span> -->
								</p>
								@if ($errors->has('officeAddress'))
								<p class="help is-danger">{{ $errors->first('officeAddress') }}</p>
								@endif
							</div>
							
							<div class="field">
								<label class="label">Primary Contact</label>
								<p class="control has-icons-left has-icons-right">
									<input class="input {{ $errors->has('primaryContact') ? ' is-danger' : '' }}" value="{{ old('primaryContact') }}"  name="primaryContact" type="text" placeholder="">
									<!-- <span class="icon is-small is-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</span> -->
								</p>
								@if ($errors->has('primaryContact'))
								<p class="help is-danger">{{ $errors->first('primaryContact') }}</p>
								@endif
							</div>
							<div class="field">
								<label class="label">Primary Email</label>
								<p class="control has-icons-left has-icons-right">
									<input class="input {{ $errors->has('primaryEmail') ? ' is-danger' : '' }}" value="{{ old('primaryEmail') }}"  name="primaryEmail" type="text" placeholder="">
									<!-- <span class="icon is-small is-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</span> -->
								</p>
								@if ($errors->has('primaryEmail'))
								<p class="help is-danger">{{ $errors->first('primaryEmail') }}</p>
								@endif
							</div>
							<div class="field">
								<label class="label">Dispatch Contact</label>
								<p class="control has-icons-left has-icons-right">
									<input class="input {{ $errors->has('dispatchContact') ? ' is-danger' : '' }}" value="{{ old('dispatchContact') }}"  name="dispatchContact" type="text" placeholder="">
									<!-- <span class="icon is-small is-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</span> -->
								</p>
								@if ($errors->has('dispatchContact'))
								<p class="help is-danger">{{ $errors->first('dispatchContact') }}</p>
								@endif
							</div>
							<div class="field">
								<label class="label">Dispatch Email</label>
								<p class="control has-icons-left has-icons-right">
									<input class="input {{ $errors->has('dispatchEmail') ? ' is-danger' : '' }}" value="{{ old('dispatchEmail') }}"  name="dispatchEmail" type="text" placeholder="">
									<!-- <span class="icon is-small is-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</span> -->
								</p>
								@if ($errors->has('dispatchEmail'))
								<p class="help is-danger">{{ $errors->first('dispatchEmail') }}</p>
								@endif
							</div>
							<div class="field">
								<label class="label">Website <small><em>(Optional)</em></small></label>
								<p class="control has-icons-left has-icons-right">
									<input class="input {{ $errors->has('website') ? ' is-danger' : '' }}" value="{{ old('website') }}"  name="website" type="text" placeholder="">
									<!-- <span class="icon is-small is-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</span> -->
								</p>
								@if ($errors->has('website'))
								<p class="help is-danger">{{ $errors->first('website') }}</p>
								@endif
							</div>
						</div>

						<div class="box">
							<h2 class="title is-4"><span class="tag is-primary is-medium">4</span> Payment Information</h2>
							<hr>
							<div class="field">
								<label class="label">Payment Method</label>
								<p class="control">
									<span class="select">
										<select name="paymentMethod">
											<option value="credit" selected>By Credit Card</option>
											<option value="cheque">By Cheque</option>
											<option value="preauthorized">By Pre-Authorized Debit</option>
										</select>
									</span>
								</p>
							</div>
							<div class="field">
								<label class="label">Payment Term</label>
								<p class="control">
									<span class="select">
										<select name="paymentTerm">
											<option value="quarterly" selected>Quarterly - 2% Discount</option>
											<option value="semiannually">Semiannually - 3% Discount</option>
											<option value="annually">Annually - 4% Discount</option>
										</select>
									</span>
								</p>
							</div>
						</div>

						<p class="control">
							<button class="button  is-primary">Confirm my order</button>
						</p>
					</form>
				</div>
				<div class="column is-4">
					<h2 class="title is-4">Your Cart</h2>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

@endsection

@section('script-footer')
<script type="text/javascript">
	function officeAddressAutoComplete(){
		var options = {
			componentRestrictions: {country: "ca"}
		};

		var officeAddress = document.getElementById('officeAddress');
		var autoOfficeAddress = new google.maps.places.Autocomplete(officeAddress, options);
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNHgtcSe8bnt6Z4zBuZjgovVqsa5F_WN0&libraries=places&callback=officeAddressAutoComplete" async defer></script>

@endsection