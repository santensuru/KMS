				<!-- body -->
				<div class="col-md-5">
					<h3>Beranda</h3>
					<p>Selamat datang <?=$user?> :)</p>
				</div>
				<!-- space -->
				<div class="col-md-1">
				</div>
				<!-- tips, calculator -->
				<div class="col-md-3" id="rightbar">
					<!-- tips -->
					<div id="tips">
						<h3>Tips</h3>
						<p>
							<?=$quot?>
						</p>
					</div>
					<!-- calculator -->
					<div id="calc">
						<h3>Calculator</h3>
						<form name="calc" class="form form-horizontal">
							<table border="0">
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
								<!-- <tr>
									<td style="text-align:right">
										Usia
									</td>
									<td colspan="2">
										&nbsp; <input type="text" id="Age"    size="16" calss="form-control" style="width: 60%; text-align:right" onclick="changeVal('Age')"    placeholder="usia"> Tahun
									</td>
								</tr> -->
								<tr>
									<td colspan="3">
										<br>
									</td>
								</tr>
								<tr>
									<td colspan="2" style="text-align: right">
										<input type="button" name="one"   value="  1  " onclick="doCalc(1)">
										<input type="button" name="two"   value="  2  " onclick="doCalc(2)">
										<input type="button" name="three" value="  3  " onclick="doCalc(3)">
										<!-- <input type="button" name="plus"  value="  +  " onclick="calc.input.value += ' + '"> -->
										<br>
										<input type="button" name="four"  value="  4  " onclick="doCalc(4)">
										<input type="button" name="five"  value="  5  " onclick="doCalc(5)">
										<input type="button" name="six"   value="  6  " onclick="doCalc(6)">
										<!-- <input type="button" name="minus" value="  -  " onclick="calc.input.value += ' - '"> -->
										<br>
										<input type="button" name="seven" value="  7  " onclick="doCalc(7)">
										<input type="button" name="eight" value="  8  " onclick="doCalc(8)">
										<input type="button" name="nine"  value="  9  " onclick="doCalc(9)">
										<!-- <input type="button" name="times" value="  x  " onclick="calc.input.value += ' * '"> -->
										<br>
										<input type="button" name="clear" value="  c  " onclick="doCalc('c')">
										<input type="button" name="zero"  value="  0  " onclick="doCalc(0)">
										<input type="button" name="doit"  value="  =  " onclick="doCalc('=')">
										<!-- <input type="button" name="div"   value="  /  " onclick="calc.input.value += ' / '"> -->
										<br>
									</td>
									<td width="50%" style="text-align: center">
										<h1 id="hasil"></h1>
									</td>
								</tr>
							</table>
							<script>
								var val;

								function changeVal(e) {
									val = e;
									// alert(e);
								}

								function doCalc(e) {
									if (e == "=") {
										var w = document.getElementById("Weight").value;
										var h = document.getElementById("Height").value;
										// var a = document.getElementById("Age").value;

										// count
										// document.getElementById("hasil").innerHTML = "????";
										// alert("????");

										if (w == "" || h == "")
											swal({
												title: "Tolong Isi kolom Berat dan Tinggi dengan Angka",
												showConfirmationButton: false
											});

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
									else {
										if (val == "Weight") {
											if (e >= "0" && e <= "9")
												document.getElementById("Weight").value += e;
											// if (e == "=")
											// 	document.getElementById("Weight").value = eval(document.getElementById("Weight").value);
											if (e == "c")
												document.getElementById("Weight").value = "";
										}
										else if (val == "Height") {
											if (e >= "0" && e <= "9")
												document.getElementById("Height").value += e;
											// if (e == "=")
											// 	document.getElementById("Height").value = eval(document.getElementById("Height").value);
											if (e == "c")
												document.getElementById("Height").value = "";
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
