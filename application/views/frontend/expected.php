<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

	<title>Maturity Level</title>
</head>

<body>
	<h1 class="mt-5 ms-4">Maturity Level</h1>
	<h1 class="mt-3 ms-4">Generator</h1>
	<hr class="mt-3 ms-4" style="width:30%;text-align:left;margin-left:0">
	<form action="<?= base_url('Frontend/hasil/'.$this->session->userdata('pengisi'));?>" method="post">
	<div class="row d-flex justify-content-center ">
		<div class="card border-secondary mb-3 mt-5 ms-5" style="max-width: 18rem;">
			<div class="card-header">Maturity Level Saat Ini</div>
			<div class="card-body text-secondary">
				<h5 class="card-title"><?= $this->session->userdata('hasil');?></h5>
				<?php $penjumlahan =  substr($this->session->userdata('hasil'),-1) +1;?>
			</div>
		</div>
		<div class="card border-secondary mb-3 mt-5 ms-5" style="max-width: 18rem;">
			<div class="card-header">Expected Maturity Level</div>
			<div class="card-body text-secondary">
				<input  name="maturity_inginkan" type="number"  required min="<?= $penjumlahan;?>" max="5" placeholder="Isi disini..">
				<input class="form" name="maturity" type="hidden" value="<?= substr($this->session->userdata('hasil'),-1);?>" placeholder="Isi disini..">
				<input class="form" name="pengisi" type="hidden" value="<?= $this->session->userdata('pengisi');?>">
			</div>
		</div>
	</div>
	<div class="col-md-12 text-center">
		<button type="submit"> Lihat Rekomendasi </button>
	</div>
	</form>	
</body>