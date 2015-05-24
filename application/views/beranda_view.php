				<!-- body -->
				<div class="col-md-5">
					<!-- <h3>Beranda</h3> -->
					<h3></h3>
					<h4>Selamat datang <?=$user?> :)</h4>
					<p>Aplikasi ini dibuat untuk membantu para orang tua yang ingin mengetahui Status Gizi bayi dan balita. Seperti layaknya KMS (Kartu Menuju Sehat), bayi dan balita diukur berdasarkan umur dan berat badan, dari situlah bisa diketahui status gizi bayi dan balita, jadwal imunisasi, anjuran pemberian makanan,tahap perkembangan dan rangsangan perkembangan untuk bayi dan balita.</p>
					
					<!-- slider -->
					<div id="slider">
						<!-- AnythingSlider #1 -->
						<ul id="slider1">
							<li><img src="<?php echo base_url(); ?>images/1.jpg" alt="1"></li>
							<li><img src="<?php echo base_url(); ?>images/2.jpg" alt="2"></li>
							<li class="panel5">
								<div>
									<div class="textSlide">
									<span class="rightside"><object><iframe width="85%" height="300px" src="https://www.youtube.com/embed/qj_baEHkdcY" frameborder="0" allowfullscreen></iframe></object></span>
										<ul>
											<li>Bayi sehat bisa dilihat dari cara dia tertawa.</li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
						<!-- END AnythingSlider #1 -->

						<script>
							// Set up Sliders
							// **************
							$(function(){

								$('#slider1').anythingSlider({
									theme           : 'default',
									easing          : 'easeInOutBack',
									navigationFormatter : function(index, panel){
										return ['Sehat', 'Gemuk', 'Tertawa'][index - 1];
									},
									onSlideComplete : function(slider){
										// alert('Welcome to Slide #' + slider.currentPage);
									}
								});

							});
						</script>
					</div>
				</div>
				<!-- space -->
				<div class="col-md-1">
				</div>
				<!-- tips, calculator -->
				<div class="col-md-3" id="rightbar">
					<!-- tips -->
					<div id="tips">
						<!-- <h3>Tips</h3> -->
						<p>
							<?=$quot?>
						</p>
					</div>
					<!-- calculator -->
					<div id="calc">
						<h3 style="text-align:center;">Kalkulator Sehat</h3>
						<form name="calc" class="form form-horizontal">
							<table border="0" align="center">
								<tr>
									<td colspan="3">
										<br>
									</td>
								</tr>
								<tr>
									<td style="text-align:right">
										Berat
									</td>
									<td colspan="2">
										&nbsp; <input type="text" id="Weight" size="16" calss="form-control" style="width: 60%; text-align:right"  onclick="changeVal('Weight')" placeholder="berat"> KG
									</td>
								</tr>
								<tr>
									<td style="text-align:right">
										Tinggi
									</td>
									<td colspan="2">
										&nbsp; <input type="text" id="Height" size="16" calss="form-control" style="width: 60%; text-align:right"  onclick="changeVal('Height')" placeholder="tinggi"> CM
									</td>
								</tr>
								<tr>
									<td style="text-align:right">
										Usia
									</td>
									<td colspan="2">
										&nbsp; <select id="selectAge" onchange="changeAge()" style="width: 50%">
											<option value="1"> < 1 bulan </option>
											<option value="2" selected="selected"> 1 - 10 tahun </option>
											<option value="3"> > 10 tahun </option>
										</select>
										<input type="text" id="Age"   size="16" calss="form-control" style="width: 20%; text-align:right"  onclick="changeVal('Age')"     placeholder="usia">
									</td>
								</tr>
								<tr>
									<td colspan="3">
										<br>
									</td>
								</tr>
								<!-- <tr>
									<td colspan="2" style="text-align: right">
										<input type="button" name="one"   value="  1  " onclick="doCalc(1)">
										<input type="button" name="two"   value="  2  " onclick="doCalc(2)">
										<input type="button" name="three" value="  3  " onclick="doCalc(3)">
										<br>
										<input type="button" name="four"  value="  4  " onclick="doCalc(4)">
										<input type="button" name="five"  value="  5  " onclick="doCalc(5)">
										<input type="button" name="six"   value="  6  " onclick="doCalc(6)">
										<br>
										<input type="button" name="seven" value="  7  " onclick="doCalc(7)">
										<input type="button" name="eight" value="  8  " onclick="doCalc(8)">
										<input type="button" name="nine"  value="  9  " onclick="doCalc(9)">
										<br>
										<input type="button" name="clear" value="  c  " onclick="doCalc('c')">
										<input type="button" name="zero"  value="  0  " onclick="doCalc(0)">
										<input type="button" name="point" value="  .   " onclick="doCalc('.')">
										<br>
										<input type="button" name="point"  value="  =  " onclick="doCalc('=')">
										<br>

									</td>
									<td width="50%" style="text-align: center">
										<h1 id="hasil"></h1>
									</td>
								</tr> -->
								<tr>
									<td colspan="3">
									<button type="button" class="btn btn-default" onclick="doCalc('=')">Hitung</button>
									</td>
								</tr>
								<tr>
									<td colspan="3">
										<br>
									</td>
								</tr>
								<tr>
									<td colspan="3">
										<h1 id="hasil"></h1>
									</td>
								</tr>
							</table>
							<script>
								var val;
								var age = 2;

								function changeAge() {
									var e = document.getElementById("selectAge");
									age = e.options[e.selectedIndex].value;
									// alert(age);
								}

								function changeVal(e) {
									val = e;
									// alert(e);
								}

								function doCalc(e) {
									if (e == "=") {
										var w = document.getElementById("Weight").value;
										var h = document.getElementById("Height").value;
										var a = document.getElementById("Age").value;

										// count
										// document.getElementById("hasil").innerHTML = "????";
										// alert("????");

										if (w == "" || h == "" || a == "")
											swal({
												title: "Tolong Isi kolom Berat dan Tinggi dengan Angka",
												showConfirmationButton: false
											});

										else {
											if (age == 1) {
												var imt = a / 2.0 + 4;
												document.getElementById("hasil").innerHTML = imt.toFixed(2);

												var pos = Math.round(imt).toFixed(2);
												var wei = Math.round(w).toFixed(2);
											
												if (wei < pos - 0.5)
													swal({
														title: "Sangat Kurus",
														showConfirmationButton: false
													});
												else if (wei > pos + 0.5)
													swal({
														title: "Gemuk",
														showConfirmationButton: false
													});
												else
													swal({
														title: "Ideal",
														showConfirmationButton: false
													});

											}
											else if (age == 2) {
												var imt = a * 2.0 + 8;
												document.getElementById("hasil").innerHTML = imt.toFixed(2);

												var pos = Math.round(imt).toFixed(2);
												var wei = Math.round(w).toFixed(2);
											
												if (wei < pos - 0.5)
													swal({
														title: "Sangat Kurus",
														showConfirmationButton: false
													});
												else if (wei > pos + 0.5)
													swal({
														title: "Gemuk",
														showConfirmationButton: false
													});
												else
													swal({
														title: "Ideal",
														showConfirmationButton: false
													});

											}
											else {
												// w & h
												var imt = w / Math.pow(h/100.0, 2);
												document.getElementById("hasil").innerHTML = imt.toFixed(2);
												// alert("imt");

												var pos = Math.round(imt).toFixed(2);

												if (pos < 17)
													swal({
														title: "Sangat Kurus",
														showConfirmationButton: false
													});
												// alert("Sangat Kurus");
												else if (pos < 18.5)
													swal({
														title: "Kurus",
														showConfirmationButton: false
													});
													// alert("Kurus");
												else if (pos < 25)
													swal({
														title: "Ideal",
														showConfirmationButton: false
													});
													// alert("Ideal");
												else if (pos < 30)
													swal({
														title: "Gemuk",
														showConfirmationButton: false
													});
													// alert("Gemuk");
												else if (pos < 35)
													swal({
														title: "Obesitas I",
														showConfirmationButton: false
													});
													// alert("Obesitas I");
												else if (pos < 40)
													swal({
														title: "Obesitas II",
														showConfirmationButton: false
													});
													// alert("Obesitas II");
												else
													swal({
														title: "Obesitas III",
														showConfirmationButton: false
													});
													// alert("Obesitas III");
											}
										}
									}
									else {
										if (val == "Weight") {
											if (e >= "0" && e <= "9")
												document.getElementById("Weight").value += e;
											// if (e == "=")
											// 	document.getElementById("Weight").value = eval(document.getElementById("Weight").value);
											if (e == "c")
												document.getElementById("Weight").value = "";
											if (e == ".")
												document.getElementById("Weight").value += e;
										}
										else if (val == "Height") {
											if (e >= "0" && e <= "9")
												document.getElementById("Height").value += e;
											// if (e == "=")
											// 	document.getElementById("Height").value = eval(document.getElementById("Height").value);
											if (e == "c")
												document.getElementById("Height").value = "";
											if (e == ".")
												document.getElementById("Height").value += e;
										}
										//  else if (val == "Age") {
										// 	if (e >= "0" && e <= "9")
										// 		document.getElementById("Age").value += e;
										// 	// if (e == "=")
										// 	// 	document.getElementById("Age").value = eval(document.getElementById("Age").value);
										// 	if (e == "c")
										// 		document.getElementById("Age").value = "";
										// }
									}
								}
							</script>
						</form>
					</div>
				</div>
			</div>
		</div>
