<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Tambah Data</h3>
                  <p class="mb-0">Silahkan Masukkan Data Jalan</p>
                </div>
                <div class="card-body">
                  <form role="form"  method="POST" enctype="multipart/form-data" action="<?= base_url('Jalan/tambah')?>">
                    <label>Latitude</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Latitude" aria-label="Email" aria-describedby="email-addon" name="latitude" value="<?= set_value('latitude') ?>">
                      <?= form_error('latitude', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
                    </div>
                    <label>Longitude</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Longitude" aria-label="Email" aria-describedby="email-addon" name="longitude" value="<?= set_value('longitude') ?>">
                      <?= form_error('longitude', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
                    </div>
                    <label>Nama Jalan</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Nama Jalan" aria-label="Email" aria-describedby="email-addon" name="nama_jalan" value="<?= set_value('nama_jalan') ?>">
                      <?= form_error('nama_jalan', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
                    </div>
                    <label>Kondisi Jalan</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Kondisi Jalan" aria-label="Email" aria-describedby="email-addon" name="kondisi_jalan" value="<?= set_value('kondisi_jalan') ?>">
                      <?= form_error('kondisi_jalan', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
                    </div>
                    <label>Volume Kendaraan</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Volume Kendaraan" aria-label="Email" aria-describedby="email-addon" name="volume_kendaraan" value="<?= set_value('volume_kendaraan') ?>">
                      <?= form_error('volume_kendaraan', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
                    </div>
                    <label>Url Gambar</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Url Gambar" aria-label="Email" aria-describedby="email-addon" name="gambar" value="<?= set_value('gambar') ?>">
                      <?= form_error('gambar', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Tambah</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('<?= base_url('assets2/') ?>img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>