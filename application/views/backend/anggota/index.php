<div class="row">
	<div class="col-md-12">
		<div class="card box-shadow-2">
			<?php
			if ($this->session->flashdata('alert') == 'tambah_anggota'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil ditambahkan
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'update_anggota'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil diupdate
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'hapus_anggota'):
				?>
				<div class="alert alert-danger alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil dihapus
				</div>
			<?php
			endif;
			?>
			<div class="card-header">
				<h1 style="text-align: center">Data Anggota</h1>
				<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
				<button type="button" class="btn btn-primary btn-bg-gradient-x-purple-blue box-shadow-2"
						data-toggle="modal" data-target="#bootstrap">
					<i class="ft-plus-circle"></i> Tambah data Anggota
				</button>
				<?php endif; ?>
			</div>
			<hr>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered zero-configuration">
						<thead>
						<tr>
							<th>No</th>
							<th>NIK</th>
							<th>Nama</th>
							<th>No Anggota</th>
							<th>Jenis Kelamin</th>
							<th>Pekerjaan</th>
							<th>Alamat</th>
							<th>Desa</th>
							<th>Kecamatan</th>
							<th>Kabupaten/Kota</th>
							<th>Tanggal Masuk</th>
							<td style="text-align: center"><i class="ft-settings spinner"></i></td>
						</tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						foreach ($anggota as $key => $value):
							?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $value['anggota_id'] ?></td>
								<td><?= $value['nama'] ?></td>
								<td><?= $value['no_anggota'] ?></td>
								<td><?= $value['jenis_kelamin'] ?></td>
								<td><?= $value['pekerjaan'] ?></td>
								<td><?= $value['alamat'] ?></td>
								<td><?= $value['desa'] ?></td>
								<td><?= $value['kecamatan'] ?></td>
								<td><?= $value['kabupaten'] ?></td>
								<td><?= date_indo($value['tanggal_gabung']) ?></td>
								<td>
									<button
										class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 anggota-lihat"
										data-toggle="modal" data-target="#lihat" value="<?= $value['anggota_id'] ?>"
										title="Lihat selengkapnya"><i class="ft-eye"></i></button>
									<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
									<button
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 anggota-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['anggota_id'] ?>"
										title="Update data anggota"><i class="ft-edit"></i></button>
									<button
										class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 anggota-hapus"
										data-toggle="modal" data-target="#hapus" value="<?= $value['anggota_id'] ?>"
										title="Hapus data anggota"><i class="ft-trash"></i></button>
									<?php endif;?>
								</td>
							</tr>
							<?php
							$no++;
						endforeach;
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal tambah -->
<div class="modal fade text-left" id="bootstrap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Tambah Data Anggota</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('anggota/tambah') ?>
			<div class="modal-body">
				<fieldset class="form-group floating-label-form-group">
					<label for="nik">NIK</label>
					<input type="number" class="form-control" name="nik" id="nik" placeholder="NIK"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama anggota"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="no_anggota">No. Anggota</label>
					<input type="number" class="form-control" name="no_anggota" id="no_anggota" placeholder="No Anggota"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="jenis_kelamin">Jenis Kelamin</label>
					<select name="jenis_kelamin" id="basicSelect" class="form-control">
						<option value="">--Pilih--</option>
						<option value="L">Laki Laki</option>
						<option value="P">Perempuan</option>
					</select>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="pekerjaan">Pekerjaan</label>
					<input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" id="alamat" rows="3" name="alamat" placeholder="Alamat"
							  autocomplete="off" required></textarea>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="desa">Desa</label>
					<input type="text" class="form-control" name="desa" id="desa" placeholder="Desa"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="kecamatan">Kecamatan</label>
					<input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="kabupaten">Kabupaten/Kota</label>
					<input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Kabupaten"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="tanggal_gabung">Tanggal Bergabung</label>
					<div class='input-group'>
						<input type="date" class="form-control" id="tanggal_gabung" name="tanggal_gabung"
							   placeholder="Tanggal Bergabung" autocomplete="off" required>
						<div class="input-group-append">
										<span class="input-group-text">
											<span class="ft-calendar"></span>
										</span>
						</div>
					</div>
				</fieldset>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal"
					   value="Tutup">
				<input type="submit" class="btn btn-primary btn-bg-gradient-x-blue-cyan" name="simpan" value="Simpan">
			</div>
			<?= form_close() ?>
		</div>
	</div>
</div>


<!-- Modal lihat -->
<div class="modal fade text-left" id="lihat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Lihat Data anggota</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_nama">Nama</label>
					<input type="text" class="form-control" name="nama" id="lihat_nama" placeholder="Nama anggota"
						   autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_tempat">Tempat Lahir</label>
					<input type="text" class="form-control" name="tempat_lahir" id="lihat_tempat" value=""
						   placeholder="Tempat Lahir" autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_tl">Tanggal Lahir</label>
					<div class='input-group'>
						<input type="date" class="form-control" name="tanggal_lahir" id="lihat_tl"
							   placeholder="Tanggal Lahir" autocomplete="off" readonly>
						<div class="input-group-append">
										<span class="input-group-text">
											<span class="ft-calendar"></span>
										</span>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_alamat">Alamat</label>
					<textarea class="form-control" id="lihat_alamat" rows="3" name="alamat" placeholder="Alamat"
							  autocomplete="off" readonly></textarea>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_tg">Tanggal Bergabung</label>
					<div class='input-group'>
						<input type="date" class="form-control" id="lihat_tg" name="tanggal_gabung"
							   placeholder="Tanggal Bergabung" autocomplete="off" readonly>
						<div class="input-group-append">
										<span class="input-group-text">
											<span class="ft-calendar"></span>
										</span>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_jabatan_anggota">Jabatan</label>
					<input type="text" class="form-control" name="jabatan" id="lihat_jabatan_anggota"
						   placeholder="Jabatan" autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_gaji_pokok">Gaji Perhari</label>
					<input type="text" class="form-control" name="jabatan" id="lihat_gaji_pokok"
						   placeholder="Gaji pokok" autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_nohp">Nomor HP</label>
					<input type="number" class="form-control" id="lihat_nohp" name="nomor_hp" placeholder="Nomor HP"
						   autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_norek">Nomor Rekening</label>
					<input type="number" class="form-control" id="lihat_norek" name="nomor_rekening" placeholder="Nomor rekening boleh kosong"
						   autocomplete="off" readonly>
				</fieldset>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal"
					   value="Tutup">
			</div>
		</div>
	</div>
</div>


<!-- Modal update -->
<div class="modal fade text-left" id="ubah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Update Data anggota</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('anggota/update') ?>
			<div class="modal-body">
				<fieldset class="form-group floating-label-form-group">
					<label for="edit_nama">Nama</label>
					<input type="hidden" id="anggota_id" name="id">
					<input type="text" class="form-control" name="nama" id="edit_nama" placeholder="Nama anggota"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="edit_tempat">Tempat Lahir</label>
					<input type="text" class="form-control" name="tempat_lahir" id="edit_tempat" placeholder="Tempat Lahir"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="edit_tl">Tanggal Lahir</label>
					<div class='input-group'>
						<input type="date" class="form-control" name="tanggal_lahir" id="edit_tl" placeholder="Tanggal Lahir"
							   autocomplete="off" required>
						<div class="input-group-append">
										<span class="input-group-text">
											<span class="ft-calendar"></span>
										</span>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="edit_alamat">Alamat</label>
					<textarea class="form-control" id="edit_alamat" rows="3" name="alamat" placeholder="Alamat"
							  autocomplete="off" required></textarea>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="edit_tg">Tanggal Bergabung</label>
					<div class='input-group'>
						<input type="date" class="form-control" id="edit_tg" name="tanggal_gabung"
							   placeholder="Tanggal Bergabung" autocomplete="off" required>
						<div class="input-group-append">
							<span class="input-group-text">
								<span class="ft-calendar"></span>
							</span>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="jabatan">Jabatan</label>
					<select name="jabatan" id="jabatan" class="select2 form-control" style="width: 100%">
						<?php
						foreach ($jabatan as $key => $value):
							?>
							<option value="<?= $value['jabatan_id'] ?>"><?= $value['jabatan_nama'] ?></option>
						<?php
						endforeach;
						?>
					</select>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="edit_nohp">Nomor HP</label>
					<input type="number" class="form-control" id="edit_nohp" name="nomor_hp" placeholder="Nomor HP"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="edit_norek">Nomor Rekening</label>
					<input type="number" class="form-control" id="edit_norek" name="nomor_rekening" placeholder="Nomor rekening boleh kosong"
						   autocomplete="off">
				</fieldset>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal"
					   value="Tutup">
				<input type="submit" class="btn btn-primary btn-bg-gradient-x-blue-cyan" name="update" value="Update">
			</div>
			<?= form_close() ?>
		</div>
	</div>
</div>


<!-- Modal hapus -->
<div class="modal fade text-left" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Hapus Data anggota ?</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-blue-cyan" data-dismiss="modal" value="Tutup">
				<div id="hapusanggota">

				</div>
			</div>
		</div>
	</div>
</div>
