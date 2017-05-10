<template>
	<div>
		<div class="block">
			<form action="/loads" method="get">
				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field is-grouped">
							<p class="control is-expanded">
								<input class="input is-medium" id="autoOrigin" type="text" placeholder="Origin" name="origin" required autofocus>
							</p>
						</div>
						<div class="field">
							<p class="control is-expanded">
								<input class="input is-medium" id="autoDestination" type="text" placeholder="Destination" name="dest" required>
							</p>
						</div>
						<button class="button is-medium is-primary" @click.prevent="submitForm">Search Loads</button>
					</div>
				</div>
			</form>
		</div>
		<div class="block">
			<bl-loadlist :loads="loads" :auth="auth"></bl-loadlist>
		</div>
	</div>
</template>

<script>
	export default {
		// props: ['origin'],
		mounted() {
			// console.log(this.origin);
		},
		data(){
			return {
				loads: [],
				auth: false,
			}
		},
		methods: {
			submitForm(){
				var myorigin = document.getElementById('autoOrigin').value;
				var mydestination = document.getElementById('autoDestination').value;
				var self = this;
				axios.get('/fetch', {
					params:{
						origin: myorigin,
						destination: mydestination,
					}
				})
				.then(function (response) {
					self.loads = response.data.loads;
					self.auth = response.data.auth;
				})
				.catch(function (error) {
					console.log(error);
				})
			},
			// getParameterByName(name, url) {
			// 	if (!url) url = window.location.href;
			// 	name = name.replace(/[\[\]]/g, "\\$&");
			// 	var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
			// 	results = regex.exec(url);
			// 	if (!results) return null;
			// 	if (!results[2]) return '';
			// 	return decodeURIComponent(results[2].replace(/\+/g, " "));
			// }
		}
	}
</script>