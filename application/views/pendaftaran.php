<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="section">
	<form>
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
							<input type="text" class="form-control" id="inputNISN">
						</div>
						<label for="inputNIK" class="col-sm-1 col-form-label">NIK</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputNIK">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputNama" class="col-sm-1 col-form-label">Nama</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputNama">
						</div>
						<label for="inputJenisKelamin" class="col-sm-1 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-2">
							<select id="inputJenisKelamin" class="form-select">
								<option selected>Choose...</option>
								<option>Laki - Laki</option>
								<option>Perempuan</option>
							</select>
						</div>
						<label for="inputAgama" class="col-sm-1 col-form-label">Agama</label>
						<div class="col-sm-2">
							<select id="inputAgama" class="form-select">
								<option selected>Choose...</option>
								<option>Islam</option>
								<option>Kristen</option>
								<option>Hindu</option>
								<option>Budha</option>
								<option>Kong Hu Chu</option>
								<option>Other</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputTempatLahir" class="col-sm-1 col-form-label">Tempat Lahir</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputTempatLahir">
						</div>
						<label for="inputTanggalLahir" class="col-sm-1 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-2">
							<input type="date" class="form-control" id="inputTanggalLahir">
						</div>
						<label for="inputPhoto" class="col-sm-1 col-form-label">Photo</label>
						<div class="col-sm-2">
							<input type="file" class="form-control" id="inputPhoto">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputAlamat" class="col-sm-1 col-form-label">Alamat</label>
						<div class="col-sm-5">
							<textarea type="text" class="form-control" id="inputAlamat" style="height: 100px"></textarea>
						</div>
						<div class="col-6">
							<div class="row">
								<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
								<div class="col-sm-10 mb-3">
									<input type="email" class="form-control" id="inputEmail">
								</div>
								<label for="inputPhone" class="col-sm-2 col-form-label">No. HP</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputPhone">
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
						<label for="inputGelombang" class="col-sm-1 col-form-label">Gelombang</label>
						<div class="col-sm-5">
							<select id="inputGelombang" class="form-select">
								<option selected>Choose...</option>
								<option>I (1 Nov 2023 - 2 Feb 2024)</option>
								<option>II (3 Feb 2024 - 6 Apr 2024)</option>
								<option>III (7 Apr 2024 - 7 Jun 2024)</option>
								<option>IV (8 Jun 2024 - 6 Jul 2024)</option>
								<option>V (7 Jul 2024 - 3 Agt 2024)</option>
								<option>VI (4 Agt 2024 - 2 Sep 2024)</option>
							</select>
						</div>
						<label for="inputJalur" class="col-sm-1 col-form-label">Jalur</label>
						<div class="col-sm-5">
							<select id="inputJalur" class="form-select">
								<option selected>Choose...</option>
								<option>Reguler</option>
								<option>Prestasi</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputFakultas" class="col-sm-1 col-form-label">Fakultas</label>
						<div class="col-sm-5">
							<select id="inputFakultas" class="form-select">
								<option selected>Choose...</option>
								<option>Teknik dan Infomatika</option>
								<option>Ekonomi dan Bisnis</option>
								<option>Komunikasi dan Bahasa</option>
							</select>
						</div>
						<label for="inputProdi" class="col-sm-1 col-form-label">Program Studi</label>
						<div class="col-sm-5">
							<select id="inputProdi" class="form-select">
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
						<span class="d-block text-muted text-truncate mt-2">Pilihan Program Studi</span>
					</h5>
					<label for="Ayah" class="col-sm-1 col-form-label"><b>Ayah</b></label>
					<div class="row mb-3">
						<label for="inputNamaAyah" class="col-sm-1 col-form-label">Nama</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputNamaAyah">
						</div>
						<label for="inputPekerjaanAyah" class="col-sm-1 col-form-label">Pekerjaan</label>
						<div class="col-sm-5">
							<select id="inputPekerjaanAyah" class="form-select">
								<option selected>Choose...</option>
								<option>Ngala bambu</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputNoHPAyah" class="col-sm-1 col-form-label">No. HP</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputNoHPAyah">
						</div>
						<label for="inputPenghasilanAyah" class="col-sm-1 col-form-label">Penghasilan</label>
						<div class="col-sm-5">
							<select id="inputProdi2" class="form-select">
								<option selected>Choose...</option>
								<option>1 M</option>
							</select>
						</div>
					</div>
					<label for="Ibu" class="col-sm-1 col-form-label"><b>Ibu</b></label>
					<div class="row mb-3">
						<label for="inputNamaIbu" class="col-sm-1 col-form-label">Nama</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputNamaIbu">
						</div>
						<label for="inputPekerjaanIbu" class="col-sm-1 col-form-label">Pekerjaan</label>
						<div class="col-sm-5">
							<select id="inputPekerjaanIbu" class="form-select">
								<option selected>Choose...</option>
								<option>Ngala bambu</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputNoHPIbu" class="col-sm-1 col-form-label">No. HP</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputNoHPIbu">
						</div>
						<label for="inputPenghasilanIbu" class="col-sm-1 col-form-label">Penghasilan</label>
						<div class="col-sm-5">
							<select id="inputProdi2" class="form-select">
								<option selected>Choose...</option>
								<option>1 M</option>
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
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Nama Sekolah</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputNamaSekolah">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Semester 1</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputNamaSekolah">
						</div>
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Semester 2</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputNamaSekolah">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Semester 3</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputNamaSekolah">
						</div>
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Semester 4</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputNamaSekolah">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Semester 5</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputNamaSekolah">
						</div>
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Semester 6</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputNamaSekolah">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Berkas Siswa</label>
						<div class="col-sm-5">
							<input type="file" class="form-control" id="inputNamaSekolah">
						</div>
						<label for="inputNamaSekolah" class="col-sm-1 col-form-label">Berkas Prestasi</label>
						<div class="col-sm-5">
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