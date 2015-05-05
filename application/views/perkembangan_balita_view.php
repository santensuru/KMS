				<!-- body -->
				<div class="col-md-6">
					<h3>Perkembangan Balita</h3>
					<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>perkembangan_balita/set">
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10" >
								<input type="text" name="name" placeholder="nama" disabled value="<?=$name?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Tanggal Lahir</label>
							<div class="col-sm-10" >
								<input type="date" name="date" placeholder="dd/mm/yyyy" disabled value="<?=$date?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-10" >
								<input type="text" name="addr" placeholder="alamat" disabled value="<?=$addr?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Jenis Kelamin</label>
							<div class="col-sm-10" >
								<input type="radio" name="gend" value="L" disabled <?=$sele[0]?>>Laki-laki
								<br>
								<input type="radio" name="gend" value="P" disabled <?=$sele[1]?>>Perempuan
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Berat</label>
							<div class="col-sm-10" >
								<input type="text" name="widt" placeholder="berat">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Tinggi</label>
							<div class="col-sm-10" >
								<input type="text" name="heig" placeholder="tinggi">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Catatan</label>
							<div class="col-sm-10" >
								<textarea name="note"></textarea>
							</div>
						</div>
						<div class="form-group">
    						<div class="col-sm-offset-2 col-sm-10">
    							<input type="reset" class="btn btn-default confirm" value="Batal" title="Apakah Anda yakin ingin membatalkan?">
    							<input type="submit" class="btn btn-default confirm" value="Simpan" title="Apakah Anda yakin ingin menyimpan data ini?">
							</div>
						</div>
					</form>
				</div>
				<!-- search -->
				<div class="col-md-2">
					<input type="text" class="form-control" id="search" placeholder="Cari Balita" style="width: 100%" onchange="cari()" value="<?=$sear?>">
					<script>
						function cari() {
							var val = $('#search').val();
							// alert(val);
							window.location.replace("perkembangan_balita/index/"+val);
						}
					</script>
				</div>
			</div>
		</div>
