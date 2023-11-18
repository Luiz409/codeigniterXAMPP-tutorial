<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">CEPs</h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url()?>ceps/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> CEP</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>CEP</th>
					<th>Logradouro</th>
					<th>Numero</th>
					<th>Complemento</th>
					<th>Bairro</th>
					<th>Estado</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
            <?php foreach ($games as $game): ?>
					<tr>
						<td><?= $game['cep'] ?></td>
						<td><?= $game['logradouro'] ?></td>
						<td><?= $game['numero'] ?></td>
						<td><?= $game['complemento'] ?></td>
						<td><?= $game['bairro'] ?></td>
						<td><?= $game['estado'] ?></td>
						<td>
							<a href="<?= base_url()?>ceps/edit/<?=$game['cep'] ?>" class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></a>
							<a href="<?= base_url()?>ceps/delete/<?=$game['cep'] ?>" class="btn btn-sm btn-outline-secondary"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</main>