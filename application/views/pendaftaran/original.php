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
		<div class="row">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">
						Data Pendaftaran
						<span class="d-block text-muted text-truncate mt-2">Pilihan Program Studi</span>
					</h5>
					<div class="row mb-3">
						<label for="inputFakultas" class="col-sm-2 col-form-label">Fakultas</label>
						<div class="col-sm-10">
							<select name="faculty" id="inputFakultas" class="form-select">
								<option selected>Choose...</option>
								<option value="Teknik dan Infomatika">Teknik dan Infomatika</option>
								<option value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>
								<option value="Komunikasi dan Bahasa">Komunikasi dan Bahasa</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputProdi" class="col-sm-2 col-form-label">Program Studi</label>
						<div class="col-sm-10">
							<select name="programStudy" id="inputProdi" class="form-select">
								<option selected>Choose...</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">
						Data Orang Tua
						<span class="d-block text-muted text-truncate mt-2">Basic Informasi, Profesi dan Keuangan</span>
					</h5>
					<h5 class="card-title">
						Ayah
					</h5>
					<div class="row mb-3">
						<label for="inputNamaAyah" class="col-sm-1 col-form-label">Nama</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="fatherName" id="inputNamaAyah">
						</div>
						<label for="inputPekerjaanAyah" class="col-sm-1 col-form-label">Pekerjaan</label>
						<div class="col-sm-5">
							<select name="fatherJob" id="inputPekerjaanAyah" class="form-select">
								<option selected>Pilih...</option>
								<option value="Wirausaha">Wirausaha</option>
								<option value="Karyawan">Karyawan</option>
								<option value="Other">Other</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputNoHPAyah" class="col-sm-1 col-form-label">No. HP</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="fatherPhone" id="inputNoHPAyah">
						</div>
						<label for="inputPenghasilanAyah" class="col-sm-1 col-form-label">Penghasilan</label>
						<div class="col-sm-5">
							<select name="fatherIncome" id="inputPenghasilanAyah" class="form-select">
								<option selected>Pilih...</option>
								<option value="< 1.000.000">< 1.000.000</option>
								<option value="1.000.000 - 2.500.000<">1.000.000 - 2.500.000</option>
								<option value="2.500.000 - 5.000.000<">2.500.000 - 5.000.000</option>
								<option value="5.000.000 - 7.500.000<">5.000.000 - 7.500.000</option>
								<option value="7.500.000 - 10.000.000">7.500.000 - 10.000.000</option>
								<option value="> 10.000.000">> 10.000.000</option>
							</select>
						</div>
					</div>
					<h5 class="card-title">
						Ibu
					</h5>
					<div class="row mb-3">
						<label for="inputNamaIbu" class="col-sm-1 col-form-label">Nama</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="motherName" id="inputNamaIbu">
						</div>
						<label for="inputPekerjaanIbu" class="col-sm-1 col-form-label">Pekerjaan</label>
						<div class="col-sm-5">
							<select name="motherJob" id="inputPekerjaanIbu" class="form-select">
								<option selected>Pilih...</option>
								<option value="Wirausaha">Wirausaha</option>
								<option value="Karyawan">Karyawan</option>
								<option value="Other">Other</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputNoHPIbu" class="col-sm-1 col-form-label">No. HP</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="motherPhone" id="inputNoHPIbu">
						</div>
						<label for="inputPenghasilanIbu" class="col-sm-1 col-form-label">Penghasilan</label>
						<div class="col-sm-5">
							<select name="motherIncome" id="inputPenghasilanIbu" class="form-select">
								<option selected>Pilih...</option>
								<option value="< 1.000.000">< 1.000.000</option>
								<option value="1.000.000 - 2.500.000<">1.000.000 - 2.500.000</option>
								<option value="2.500.000 - 5.000.000<">2.500.000 - 5.000.000</option>
								<option value="5.000.000 - 7.500.000<">5.000.000 - 7.500.000</option>
								<option value="7.500.000 - 10.000.000">7.500.000 - 10.000.000</option>
								<option value="> 10.000.000">> 10.000.000</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">
						Data Sekolah Asal dan Nilai
						<span class="d-block text-muted text-truncate mt-2">Sekolah Asal, Jurusan, Ijazah dan Transkrip Nilai</span>
					</h5>
					<div class="row mb-3">
						<label for="inputNamaSekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="inputNamaSekolah">
						</div>
					</div>
					<h5 class="card-title">
						Rata Rata Nilai Semester
					</h5>
					<div class="row mb-3">
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Semester 1</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="inputNamaSekolah">
						</div>
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Semester 2</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="inputNamaSekolah">
						</div>
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Semester 3</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="inputNamaSekolah">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Semester 4</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="inputNamaSekolah">
						</div>
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Semester 5</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="inputNamaSekolah">
						</div>
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Semester 6</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="inputNamaSekolah">
						</div>
					</div>
					<h5 class="card-title">
						Berkas Transkrip Nilai, Piagam dan Lain - lain
					</h5>
					<div class="row mb-3">
						<label for="inputNamaSekolah" class="col-sm-2 col-form-label">Berkas Siswa</label>
						<div class="col-sm-4">
							<input type="file" class="form-control" id="inputNamaSekolah">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputNamaSekolah" class="col-sm-2 col-form-label">Berkas Prestasi</label>
						<div class="col-sm-4">
							<input type="file" class="form-control" id="inputNamaSekolah">
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