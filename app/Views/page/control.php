<?php $this->layout('layout') ?>

<div class="container my-5" style="max-width: 600px">

	<!-- Botão para abrir tela de senha -->
	<div class="mb-3 text-end">
		<a class="btn btn-light" href="#"><i class="bi bi-box-arrow-up-right"></i> Tela de senha</a>
	</div>

	<!-- Form para chamar senha -->
	<form>
		<div class="d-flex gap-2 align-items-end">
			<div class="flex-fill">
				<label for="code" class="form-label fw-bold">Senha que será chamada:</label>
				<input type="number" min="1" value="1" id="code" class="form-control" required />
			</div>

			<button type="button" class="btn btn-success"><i class="bi bi-volume-down-fill"></i> Charmar</button>
			<button type="button" class="btn btn-light"><i class="bi bi-chevron-double-right"></i> Próxima</button>
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
			<tr>
				<td>10</td>
				<td>18-07-2024 14:48h</td>
			</tr>
		</tbody>
	</table>

</div>