<div class="row">
	<div class="col-md-12">
		<div class="card">
			<?php
			if ($this->session->flashdata('alert') == 'login_sukses'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown"
					 style="position: absolute; width: 100%; z-index: 2" id="feedback"
					 role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Berhasil Login
					, <?= $this->session->userdata('session_nama'); ?>
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'sudah_login'):
				?>
				<div class="alert alert-warning alert-dismissible animated fadeInDown"
					 style="position: absolute; width: 100%; z-index: 2" id="feedback"
					 role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Sudah Login
				</div>
			<?php
			endif;
			?>
		</div>
		<div class="row">
		<div class="col-lg-4 col-md-12">
				<div class="row">
					<div class="col-12">
						<div class="card pull-up bg-gradient-directional-danger">
							<div class="card-header bg-hexagons-danger">
								<h4 class="card-title white">Jumlah Anggota</h4>
								<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
								<div class="heading-elements">
									<ul class="list-inline mb-0">
										<li>
											<a class="btn btn-sm btn-white danger box-shadow-1 round pull-right"
											   href="<?= base_url('anggota') ?>">Lihat<i
													class="ft-arrow-right pl-1"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-content collapse show bg-hexagons-danger">
								<div class="card-body">
									<div class="media d-flex">
										<div class="align-self-center width-100">
											<div><i class="ft-users" style="color: white;font-size: 700%"></i></div>
										</div>
										<div class="media-body text-right mt-1">
											<h3 class="font-large-2 white"><?= $jumlah_anggota ?></h3>
											<h6 class="mt-1"><span class="text-muted white">Jumlah Semua Anggota</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="row">
					<div class="col-12">
						<div class="card pull-up bg-gradient-directional-danger">
							<div class="card-header bg-hexagons-danger">
								<h4 class="card-title text-center white">Jenis Kelamin</h4>
							</div>
							<div class="bg-hexagons-danger">							
								<div class="chart-area" id="chartpie">
									<canvas id="myPieChart"></canvas>
									</div>
								<div class="text-center text-white mt-2 mb-2">
									<span class="mr-2">
										<span class="badge badge-success" id="L"></span> Laki-laki
									</span>
									<span class="mr-2">
										<span class="badge badge-warning" id="P"></span> Perempuan
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="col-lg-4 col-md-12">
				<div class="row">
					<div class="col-12">
						<div class="card pull-up bg-gradient-directional-danger">
							<div class="card-header bg-hexagons-danger">
								<h4 class="card-title white">Absen</h4>
								<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
								<div class="heading-elements">
									<ul class="list-inline mb-0">
										<li>
											<a class="btn btn-sm btn-white danger box-shadow-1 round pull-right"
											   href="<?= base_url('absen') ?>">Lihat<i
													class="ft-arrow-right pl-1"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-content collapse show bg-hexagons-danger">
								<div class="card-body">
									<div class="media d-flex">
										<div class="align-self-center width-100">
											<div><i class="ft-user-check" style="color: white;font-size: 700%"></i>
											</div>
										</div>
										<div class="media-body text-right mt-1">
											<h3 class="font-large-2 white"><?= $jumlah_absen ?></h3>
											<h6 class="mt-1"><span class="text-muted white">Jumlah Karyawan Absen Hari Ini
											</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="row">
					<div class="col-12">
						<div class="card pull-up bg-gradient-directional-danger">
							<div class="card-header bg-hexagons-danger">
								<h4 class="card-title white">Pinjaman</h4>
								<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
								<div class="heading-elements">
									<ul class="list-inline mb-0">
										<li>
											<a class="btn btn-sm btn-white danger box-shadow-1 round pull-right"
											   href="<?= base_url('pinjam') ?>">Lihat<i
													class="ft-arrow-right pl-1"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-content collapse show bg-hexagons-danger">
								<div class="card-body">
									<div class="media d-flex">
										<div class="align-self-center width-100">
											<div><i class="ft-calendar" style="color: white;font-size: 700%"></i>
											</div>
										</div>
										<div class="media-body text-right mt-1">
											<h3 class="font-large-2 white"><?= $jumlah_pinjam ?></h3>
											<h6 class="mt-1"><span class="text-muted white">Jumlah Karyawan Yang Meminjam
											</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>

<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/sbadmin/vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url(); ?>assets/js/pie-chart.js"></script>
