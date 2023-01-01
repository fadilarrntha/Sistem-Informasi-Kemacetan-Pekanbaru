<section class="pt-3 pb-4 mt-5" id="count-stats">
<?php foreach($macetdetail as $detail){?>
	<div class="container mt-5">
		<div class="row">
			<div class="row">
				<div class="col-lg-6">
					<div id="map" style="height: 580x;"></div>
				</div>
				<div class="col-6 ">
					<h3 class="text-primary">Detail kemacetan</h3>
                    
					<div class="row mt-5">
						<div class="col-6">
							<h6>Nama jalan </h4>
						</div>
						<div class="col-6 ">
							<h6 class=" bg-gradient-primary text-light p-2 rounded"><?=$detail["nama_jalan"]?></h6>
                            
						</div>
					</div>
					<div class="row ">
						<div class="col-6">
							<h6>latitude</h4>
						</div>
						<div class="col-6">
							<h6 class=" bg-gradient-primary text-light p-2 rounded"><?=$detail["latitude"]?></h6>
						</div>
					</div>
					<div class="row ">
						<div class="col-6">
							<h6>longitude</h4>
						</div>
						<div class="col-6">
							<h6 class=" bg-gradient-primary text-light p-2 rounded"><?=$detail["longitude"]?></h6>
						</div>
					</div>
					<div class="row ">
						<div class="col-6">
							<h6>kondisi</h4>
						</div>
						<div class="col-6">
							<h6 class=" bg-gradient-primary text-light p-2 rounded"><?=$detail["kondisi_jalan"]?></h6>
						</div>
					</div>
					<div class="row ">
						<div class="col-6">
							<h6>Volume </h4>
						</div>
						<div class="col-6">
							<h6 class=" bg-gradient-primary text-light p-2 rounded"><?=$detail["volume_kendaraan"]?></h6>
						</div>
					</div>
					<div class="row ">
						<div class="col-6">
							<h6>Kategori</h4>
						</div>
						<div class="col-6">
							<h6 class=" bg-gradient-primary text-light p-2 rounded"><?=$detail["kategori"]?></h6>
						</div>
					</div>
					<div class="row ">
						<div class="col-6">
							<h6>Gambar</h4>
						</div>
						<div class="col-6">
							<img src ="<?=$detail['gambar']?>" style="width: 200px;" width="100px">
						</div>
                   
				</div>
			</div>
		</div>
	</div>
</section>



<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
	integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin="">

</script>
<script>
	var map = L.map('map', {
		center: [<?php echo $detail['latitude']?>,<?php echo $detail['longitude']?>],
		zoom: 13

	});
    var rawanmacetMarker = L.marker([<?php echo $detail['latitude']?>,<?php echo $detail['longitude']?>]).addTo(map);
	L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

</script>
<?php } ?>