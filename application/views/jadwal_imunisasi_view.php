				<!-- body -->
				<div class="col-md-5" id="calendar-body">
					<!-- <h3>Jadwal Imunisasi</h3> -->
					<!-- <div id="colm2">
						<h3>Jadwal</h3>
					</div> -->
					<div id="calendar">
					</div>

					<script>

						$(document).ready(function() {
							
							$('#calendar').fullCalendar({
								header: {
									left: 'prev,next today',
									center: 'title',
									right: 'month,agendaWeek,agendaDay'
								},
								defaultDate: formatDate(new Date()),
								editable: true,
								eventLimit: true, // allow "more" link when too many events
								events: [
									// {
									// 	title: 'Imunisasi',
									// 	start: '2015-05-07',
									// 	end: '2015-05-10'
									// },
									// {
									// 	title: 'Click for Google',
									// 	url: 'http://google.com/',
									// 	start: '2015-05-28'
									// },

<?php
	foreach ($jadw->result() as $row) {
?>
									{
										title: '<?= $row->Memo ?>',
										start: '<?= $row->Tanggal ?>'
									},
<?php
	}
?>
								]
							});
							
						});

						function formatDate(date) {
							var d = new Date(date),
								month = '' + (d.getMonth() + 1),
								day = '' + d.getDate(),
								year = d.getFullYear();

							if (month.length < 2) month = '0' + month;
							if (day.length < 2) day = '0' + day;

							return [year, month, day].join('-');
						}

					</script>
				</div>
			</div>
		</div>
