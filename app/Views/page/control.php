<?php $this->layout('layout') ?>

<div class="container my-5" style="max-width: 600px">

	<!-- Botão para abrir tela de senha -->
	<div class="mb-3 text-end">
		<a class="btn btn-light" href="/?route=/senha" target="_blank"><i class="bi bi-box-arrow-up-right"></i> Tela de senha</a>
	</div>

	<!-- Form para chamar senha -->
	<form action="/?route=/save" method="post">
		<div class="d-flex gap-2 align-items-end">
			<div class="flex-fill">
				<label for="code" class="form-label fw-bold">Senha que será chamada:</label>
				<input type="number" min="1" value="1" id="code" name="code" class="form-control" required />
			</div>

			<button type="button" class="btn btn-success"><i class="bi bi-volume-down-fill"></i> Charmar</button>
			<button type="submit" class="btn btn-light" id="btn-next"><i class="bi bi-chevron-double-right"></i> Próxima</button>
		</div>
	</form>

	<!-- Hístorico de senhas chamada -->
	<table class="table table-hover table-bordered mt-3">
		<thead>
			<tr>
				<th>Senhas chamada</th>
				<th>Horas</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($password = $passwords->fetch()) : ?>
			<tr>
				<td><?= $password->code ?></td>
				<td><?= $password->created_at ?></td>
			</tr>
			<?php endwhile ?>
		</tbody>
	</table>

</div>

<script>
	const form = document.querySelector('form')
	const btnNext = document.querySelector('#btn-next')
	const tbody = document.querySelector('table tbody')

	const iconNext = `<i class="bi bi-chevron-double-right"></i>`

	form.onsubmit = async e => {
		e.preventDefault();

		btnNext.setAttribute('disabled', 'disabled')
		btnNext.innerHTML = `${iconNext} Enviando...`

		let response = await fetch(form.action, {
		    method: form.method,
		    body: new URLSearchParams(new FormData(form))
		})

		btnNext.removeAttribute('disabled')
		btnNext.innerHTML = `${iconNext} Próxima`

		if (response.status == 200) {
			let data = await response.json();
			let tr = document.createElement ('tr');
			let td = document.createElement('td');
			let td2 = document.createElement('td');

			td.innerText = data[':code']
			tr.appendChild(td)
			
			td2.innerText = data[':created_at']
			tr.appendChild(td2)

			tbody.insertBefore(tr, tbody.firstChild)
		}
	}
</script>