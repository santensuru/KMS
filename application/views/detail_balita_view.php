				<!-- body -->
				<div class="col-md-5">
					<!-- <h3>Detail Balita</h3> -->
					<h3></h3>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10" >
								<input type="text" class="form-control" name="name" placeholder="nama" value="<?=$name?>" id="name" disabled>
							</div>
						</div>
					</form>
					<!-- <div id="colm">
						<h3>Tabel</h3>
					</div> -->
					<div id="myfirstchart"></div>
					<script>
						new Morris.Line({
							// ID of the element in which to draw the chart.
							element: 'myfirstchart',
							// Chart data records -- each entry in this array corresponds to a point on
							// the chart.
							data: [
								{ m: '2015-01', v: 1 },
								{ m: '2015-02', v: 2 },
								{ m: '2015-03', v: 5 },
								{ m: '2015-04', v: 5 },
								{ m: '2015-05', v: 6 }
							],
							// The name of the data record attribute that contains x-values.
							xkey: 'm',
							// A list of names of data record attributes that contain y-values.
							ykeys: ['v'],
							// Labels for the ykeys -- will be displayed when you hover over the
							// chart.
							labels: ['Berat'],
							xLabels: ['month'],
							postUnits: [' Kg']
						});
					</script>
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
								if (val == "")
									val = "demo";
								// window.location.replace("<?php echo base_url(); ?>saran/index/"+val);
								swal({
									title: "Saran untuk "+val,
									text: "saran ....",
									showConfirmationButton: false
								});
							}
						</script>
					</div>
				</div>
			</div>
		</div>
