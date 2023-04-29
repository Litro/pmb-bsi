<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="section">
	<?= $this->session->flashdata('pesan'); ?>
	<?php echo var_dump($pendaftaran) ?>
	
	<div class="text-end">
	<?php if ($pendaftaran->status === 'PENDING'): ?>
		<h3>Status <span class="badge bg-warning">Pending</span></h3>
	<?php elseif ($pendaftaran->status === 'SUCCESS'): ?>
		<h3>Status <span class="badge bg-success">Verified</span></h3>
	<?php elseif ($pendaftaran->status === 'REJECTED'): ?>
		<h3>Status <span class="badge bg-danger">Rejected</span></h3>
	<?php endif; ?>
	</div>
	<div class="row">
		<div class="col-2">Index</div>
		<div class="col-4"><?= 'PMBBSI'. $pendaftaran->index; ?></div>
	</div>
	<div class="row">
		<div class="col-2">NISN</div>
		<div class="col-4"><?= $pendaftaran->nisn; ?></div>
	</div>
	<div class="row">
		<div class="col-2">nik</div>
		<div class="col-4"><?= $pendaftaran->nik; ?></div>
	</div>
	<div class="row">
		<div class="col-2">name</div>
		<div class="col-4"><?= $pendaftaran->name; ?></div>
	</div>
	
</section>