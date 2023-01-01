<div class="row my-4">
		<div class="">
			<div class="card">
				<div class="card-header pb-0">
					<div class="row">
					</div>
				</div>
				<div class="card-body px-0 pb-2">
					<div class="table-responsive">
						<table class="table align-items-center mb-0">
							<thead>
								<tr>
									<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										No</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Nama</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Email</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($tb_user as $ur) : ?>
								<tr>
									<td class="align-middle text-center text-sm"><span class="text-xs font-weight-bold"><?=$i; ?>.</span></td>
                                    <td class="align-middle text-center text-sm"><span class="text-xs font-weight-bold"><?=$ur['nama']; ?></span></td>
                                    <td class="align-middle text-center text-sm"><span class="text-xs font-weight-bold"><?=$ur['email']; ?></span></td>
									<td class="align-middle text-center text-sm">
										<a href="<?= base_url('Admin/hapus/') . $ur['id']; ?>" class="badge bg-gradient-danger">Hapus</a>
										<a href="<?= base_url('Admin/edit/') . $ur['id']; ?>" class="badge bg-gradient-success">Edit</a>
									</td>
								</tr>
								<?php $i++;?>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
