<div class="row my-4">
		<div class="">
			<div class="card">
				<div class="card-header pb-0">
					<div class="row">
						<div class="col-lg-6 col-7">
							<a class="btn bg-gradient-info mb-0" href="<?= base_url('Jalan/tambah')?>"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data</a>
						</div>
					</div>
				</div>
				<div class="card-body px-0 pb-2">
					<div class="table-responsive">
						<table class="table align-items-center mb-0">
							<thead>
								<tr>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										No</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Lat</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Long</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Nama Jalan</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Kondisi Jalan</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Volume Kendaraan</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Gambar</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Kategori</th>	
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($tb_jalan as $jl) : ?>
								<tr>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><?=$i; ?>.</span></td>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><?=$jl['latitude']; ?></span></td>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><?=$jl['longitude']; ?></span></td>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><?=$jl['nama_jalan']; ?></span></td>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><?=$jl['kondisi_jalan']; ?></span></td>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><?=$jl['volume_kendaraan']; ?></span></td>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><?=$jl['kategori']; ?></span></td>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><img src="<?=$jl['gambar']; ?>" width="100" ></span></td>
									<td class="align-middle text-center text-sm">
										<a href="<?= base_url('Jalan/hapus/') . $jl['id_jalan']; ?>" class="badge bg-gradient-danger">Hapus</a>
										<a href="<?= base_url('Jalan/edit/') . $jl['id_jalan']; ?>" class="badge bg-gradient-success">Edit</a>
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