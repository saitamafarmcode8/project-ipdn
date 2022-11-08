<?php if($this->uri->segment(1)=="home_tampilkan_berita_xml" || $this->uri->segment(1)=="home_berita_write_draft_xml") : ?>
	<script src="<?= base_url(); ?>bundle/vendors/js/datatable/datatables.min.js" type="text/javascript"></script>
	<script>
		$(document).ready(function(){
			$('.scroll-vertical').DataTable( {
				"scrollY":        "400px",
				"scrollCollapse": true,
				"paging":         false
			} );
		});
	</script>
<?php endif; ?>

<?php if($this->uri->segment(1)=="news_dashboard_panel_system_xml") : ?>
	<script src="<?= base_url(); ?>bundle/vendors/js/chartist.min.js" type="text/javascript"></script>
	<script>
		$(document).ready(function(){
			var lineArea2 = new Chartist.Line('#line-area2', {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				series: [
					[5, 30, 25, 55, 45, 65, 60, 105, 80, 110, 120, 150],
					[80, 95, 87, 155, 140, 147, 130, 180, 160, 175, 165, 200]
				]
			}, {
					showArea: true,
					fullWidth: true,
					lineSmooth: Chartist.Interpolation.none(),
					axisX: {
						showGrid: false,
					},
					axisY: {
						low: 0,
						scaleMinSpace: 50,
					}
				},
				[
					['screen and (max-width: 640px) and (min-width: 381px)', {
						axisX: {
							labelInterpolationFnc: function (value, index) {
								return index % 2 === 0 ? value : null;
							}
						}
					}],
					['screen and (max-width: 380px)', {
						axisX: {
							labelInterpolationFnc: function (value, index) {
								return index % 3 === 0 ? value : null;
							}
						}
					}]
				]);

			lineArea2.on('created', function (data) {
				var defs = data.svg.elem('defs');
				defs.elem('linearGradient', {
					id: 'gradient2',
					x1: 0,
					y1: 1,
					x2: 0,
					y2: 0
				}).elem('stop', {
					offset: 0,
					'stop-opacity': '0.2',
					'stop-color': 'rgba(255, 255, 255, 1)'
				}).parent().elem('stop', {
					offset: 1,
					'stop-opacity': '0.2',
					'stop-color': 'rgba(0, 201, 255, 1)'
				});

				defs.elem('linearGradient', {
					id: 'gradient3',
					x1: 0,
					y1: 1,
					x2: 0,
					y2: 0
				}).elem('stop', {
					offset: 0.3,
					'stop-opacity': '0.2',
					'stop-color': 'rgba(255, 255, 255, 1)'
				}).parent().elem('stop', {
					offset: 1,
					'stop-opacity': '0.2',
					'stop-color': 'rgba(132, 60, 247, 1)'
				});
			});
			lineArea2.on('draw', function (data) {
				var circleRadius = 4;
				if (data.type === 'point') {

					var circle = new Chartist.Svg('circle', {
						cx: data.x,
						cy: data.y,
						r: circleRadius,
						class: 'ct-point-circle'
					});
					data.element.replace(circle);
				}
				else if (data.type === 'label') {
					// adjust label position for rotation
					const dX = data.width / 2 + (30 - data.width)
					data.element.attr({ x: data.element.attr('x') - dX })
				}
			});
		});
	</script>
	<script>
		$(document).ready(function (){
			var Donutdata = {
				series: [
					{
						"name": "Kesehatan",
						"className": "ct-Kesehatan",
						"value": 0
					},
					{
						"name": "progress",
						"className": "ct-progress",
						"value": 8
					},
					{
						"name": "outstanding",
						"className": "ct-outstanding",
						"value": 35
					},
					{
						"name": "started",
						"className": "ct-started",
						"value": 28
					}
				]
			};

			var donut = new Chartist.Pie('#donut-dashboard-chart', {

				series: [
					{
						"name": "Kesehatan",
						"className": "ct-Kesehatan",
						"value": 0
					},
					{
						"name": "progress",
						"className": "ct-progress",
						"value": 8
					},
					{
						"name": "outstanding",
						"className": "ct-outstanding",
						"value": 35
					},
					{
						"name": "started",
						"className": "ct-started",
						"value": 28
					}
				]
			}, {
					donut: true,
					startAngle: 0,
					labelInterpolationFnc: function (value) {
						var total = Donutdata.series.reduce(function (prev, series) {
							return prev + series.value;
						}, 0);
						return total + '%';
					}
				});

			donut.on('draw', function (data) {
				if (data.type === 'label') {
					if (data.index === 0) {
						data.element.attr({
							dx: data.element.root().width() / 2,
							dy: data.element.root().height() / 2
						});
					} else {
						data.element.remove();
					}
				}
			});
		});
	</script>
<?php endif; ?>

<?php if($this->uri->segment(1)=="home_berita_write_xml") : ?>
<script>
	function previewImg()
	{
		const foto = document.querySelector('#foto');
		const fotoLabel = document.querySelector('.custom-file-label');
		const imgPreview = document.querySelector('.img-preview');
		fotoLabel.textContent = foto.files[0].name;
		const fileSampul = new FileReader();
		fileSampul.readAsDataURL(foto.files[0]);
		fileSampul.onload = function(e){
			imgPreview.src = e.target.result;
		}
	}
</script>
<?php endif; ?>
