				<!-- body -->
				<div class="col-md-5">
					<h3>Detail Balita</h3>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10" >
								<input type="text" name="name" placeholder="nama" value="<?=$name?>" id="name" disabled>
							</div>
						</div>
					</form>
					<div id="colm">
						<h3>Tabel</h3>
					</div>
				</div>
				<!-- space -->
				<div class="col-md-1">
				</div>
				<!-- search -->
				<div class="col-md-3" id="rightbar">
					<input type="text" class="form-control" id="search" placeholder="Cari Balita" style="width: 100%" onchange="cari()" value="<?=$sear?>">
					<script>
						function cari() {
							var val = $('#search').val();
							// alert(val);
							window.location.replace("<?php echo base_url(); ?>detail_balita/index/"+val);
						}
					</script>
					<div style="margin-top: 450px">
						<button type="button" class="btn btn-default" id="saran" onclick="saran()">Saran</button>
						<script>
							function saran() {
								var val = $('#name').val();
								window.location.replace("<?php echo base_url(); ?>saran/index/"+val);
							}
						</script>
					</div>
				</div>
			</div>
		</div>
