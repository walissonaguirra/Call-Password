<?php $this->layout('layout') ?>

<div class="container my-5 position-relative" style="max-width: 600px">

	<!-- Icon de fone -->
	<span class="display-3 text-secondary position-absolute top-0 end-0">
		<i class="bi bi-volume-up"></i>
	</span>

	<!-- Exibi senha -->
	<div class="text-center">
		<h2 class="h1">Senha</h2>
		<h1 class="fw-bold" id="code" style="font-size: 20rem">10</h1>
	</div>

</div>

<script>
	let eventSource = new EventSource('/?route=/event')
	let currentID

	eventSource.addEventListener('password', e => {
		let response = JSON.parse(e.data)
		
		currentID ? currentID : response.id

		if (currentID != response.id) {
			updatePassword(response.code)
		}
	})

	function updatePassword(code) {
		document.querySelector('#code').innerText = code
	}
</script>