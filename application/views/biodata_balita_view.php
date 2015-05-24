				<!-- body -->
				<div class="col-md-5">
					<h3>Biodata Balita</h3>
					<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>biodata_balita/set">
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10" >
								<input type="text" class="form-control" name="name" placeholder="nama">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Tanggal Lahir</label>
							<div class="col-sm-10" >
								<input type="date" class="form-control" name="date" placeholder="dd/mm/yyyy">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-10" >
								<input type="text" class="form-control" name="addr" placeholder="alamat">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Jenis Kelamin</label>
							<div class="col-sm-10" >
								<input type="radio" name="gend" value="L">Laki-laki
								<br>
								<input type="radio" name="gend" value="P">Perempuan
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Berat</label>
							<div class="col-sm-10" >
								<input type="text" class="form-control" name="widt" placeholder="berat">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Tinggi</label>
							<div class="col-sm-10" >
								<input type="text" class="form-control" name="heig" placeholder="tinggi">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Catatan</label>
							<div class="col-sm-10" >
								<textarea name="note" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
    						<div class="col-sm-offset-2 col-sm-10">
    							<input type="reset" class="btn btn-default confirm" value="Batal" title="Apakah Anda yakin ingin membatalkan?">
    							<input type="submit" class="btn btn-default confirm" value="Simpan" title="Apakah Anda yakin ingin menyimpan data ini?">
								
								<!-- <div class="btn-group" role="group" aria-label="...">
									<input type="submit" class="btn btn-default confirm" value="Simpan" title="Apakah Anda yakin ingin menyimpan data ini?">
									<input type="reset" class="btn btn-default confirm" value="Batal" title="Apakah Anda yakin ingin membatalkan?">
									<button type="button" class="btn btn-default" onclick="simpan()">Simpan</button>
									<button type="button" class="btn btn-default" onclick="batal()">Batal</button>
									<script>
										function simpan() {
											alert("Apakah Anda yakin ingin menyimpan data ini?");
										}
										function batal() {
											alert("Apakah Anda yakin ingin membatalkan?");
										}
									</script>
								</div> -->
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
