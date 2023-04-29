<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="section">
	<form action="#" method="POST">
		<div class="row">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">
						Data Pribadi
						<span class="d-block text-muted text-truncate mt-2">NISN, NIK, Nama, Jenis Kelamin, Pas Photo, TTL, dsb</span>
					</h5>
					<div class="row mb-3">
						<label for="inputNISN" class="col-sm-1 col-form-label">NISN</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="nisn" id="inputNISN" required>
						</div>
						<label for="inputNIK" class="col-sm-1 col-form-label">NIK</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="nik" id="inputNIK" required>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputNama" class="col-sm-1 col-form-label">Nama</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" id="inputNama">
						</div>
						<label for="inputJenisKelamin" class="col-sm-1 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-2">
							<select name="gender" id="inputJenisKelamin" class="form-select">
								<option selected>Choose...</option>
								<option value="F">Laki - Laki</option>
								<option value="M">Perempuan</option>
							</select>
						</div>
						<label for="inputAgama" class="col-sm-1 col-form-label">Agama</label>
						<div class="col-sm-2">
							<select name="religion" id="inputAgama" class="form-select">
								<option selected>Choose...</option>
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Hindu">Hindu</option>
								<option value="Budha">Budha</option>
								<option value="Kong Hu Chu">Kong Hu Chu</option>
								<option value="Other">Other</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputTempatLahir" class="col-sm-1 col-form-label">Tempat Lahir</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="birthplace" id="inputTempatLahir">
						</div>
						<label for="inputTanggalLahir" class="col-sm-1 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-2">
							<input type="date" class="form-control" name="birthdate" id="inputTanggalLahir">
						</div>
						<label for="inputPhoto" class="col-sm-1 col-form-label">Photo</label>
						<div class="col-sm-2">
							<input type="file" class="form-control" name="photo" id="inputPhoto">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputAlamat" class="col-sm-1 col-form-label">Alamat</label>
						<div class="col-sm-5">
							<textarea type="text" class="form-control" name="address" id="inputAlamat" style="height: 100px"></textarea>
						</div>
						<div class="col-6">
							<div class="row">
								<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
								<div class="col-sm-10 mb-3">
									<input type="email" class="form-control" name="email" id="inputEmail">
								</div>
								<label for="inputPhone" class="col-sm-2 col-form-label">No. HP</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="phone" id="inputPhone">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-end">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
</section>