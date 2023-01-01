<div class="container-fluid py-4">
	<div class="row">
		<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
			<div class="card">
				<div class="card-body p-3">
					<div class="row">
						<div class="col-8">
							<div class="numbers">
								<p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah User</p>
								<h5 class="font-weight-bolder mb-0">
									0
								</h5>
							</div>
						</div>
						<div class="col-4 text-end">
							<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
								<i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
			<div class="card">
				<div class="card-body p-3">
					<div class="row">
						<div class="col-8">
							<div class="numbers">
								<p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Jalan</p>
								<h5 class="font-weight-bolder mb-0">
									0
								</h5>
							</div>
						</div>
						<div class="col-4 text-end">
							<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
								<i class="ni ni-pin-3 text-lg opacity-10" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
			<div class="card">
				<div class="card-body p-3">
					<div class="row">
						<div class="col-8">
							<div class="numbers">
								<p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Jalan Rusak Parah</p>
								<h5 class="font-weight-bolder mb-0">
									0
								</h5>
							</div>
						</div>
						<div class="col-4 text-end">
							<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
								<i class="ni ni-map-big text-lg opacity-10" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-sm-6">
			<div class="card">
				<div class="card-body p-3">
					<div class="row">
						<div class="col-8">
							<div class="numbers">
								<p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Jalan Rawan Macet</p>
								<h5 class="font-weight-bolder mb-0">
									0
								</h5>
							</div>
						</div>
						<div class="col-4 text-end">
							<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
								<i class="ni ni-bus-front-12 text-lg opacity-10" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row my-4">
		<div class="">
			<div class="card">
				<div class="card-header pb-0">
					<div class="row">
						<div class="col-lg-6 col-7">
							<a class="btn bg-gradient-info mb-0" href=""><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data</a>
						</div>
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
										<a href="" class="badge bg-gradient-success">Edit</a>
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
