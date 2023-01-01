
	<section>
		<div class="page-header min-vh-100">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
						<div class="card card-plain">
							<div class="card-header pb-0 text-left">
								<h4 class="font-weight-bolder">Registrasi</h4>
								<p class="mb-0">Masukkan Nama, Email, dan Password untuk Registrasi</p>
							</div>
							<div class="card-body">
								<form role="user" method="post" action="<?= base_url('Auth/register'); ?>">
                                <div class="mb-3">
										<input type="text" class="form-control form-control-lg" placeholder="Nama"
											aria-label="Name" aria-describedby="name-addon" name="nama" value="<?= set_value('nama');?>">
                                    <?= form_error('nama', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
									</div>
									<div class="mb-3">
										<input type="email" class="form-control form-control-lg" placeholder="Email"
											aria-label="Email" aria-describedby="email-addon" name="email" value="<?= set_value('email');?>">
                                    <?= form_error('email', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
									</div>
									<div class="mb-3">
										<input type="password" class="form-control form-control-lg" placeholder="Password"
											aria-label="Password" aria-describedby="password-addon" name="password1" value="<?= set_value('password1');?>">
                                    <?= form_error('password1', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
									</div>
                                    <div class="mb-3">
										<input type="password" class="form-control form-control-lg" placeholder="Ulangi Password"
											aria-label="Password" aria-describedby="password-addon" name="password2" value="<?= set_value('password2');?>">
                                    <?= form_error('password2', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
									</div>
									<div class="text-center">
										<button type="submit"
											class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Registrasi</button>
									</div>
								</form>
							</div>
							<div class="card-footer text-center pt-0 px-lg-2 px-1">
								<p class="mb-4 text-sm mx-auto">
                                    Sudah Punya Akun ?
									<a href="<?= base_url()?>Auth/" class="text-primary text-gradient font-weight-bold">Login</a>
								</p>
							</div>
						</div>
					</div>
					<div
						class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
						<div
							class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
							<img src="<?= base_url('assets/') ?>img/shapes/pattern-lines.svg" alt="pattern-lines"
								class="position-absolute opacity-4 start-0">
							<div class="position-relative">
								<img class="max-width-500 w-100 position-relative z-index-2"
									src="<?= base_url('assets/') ?>img/illustrations/sign-up.png">
							</div>
							<h4 class="mt-5 text-white font-weight-bolder">"Attention is the new currency"</h4>
							<p class="text-white">The more effortless the writing looks, the more effort the writer
								actually put into the process.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
