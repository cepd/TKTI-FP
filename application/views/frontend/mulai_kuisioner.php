<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

	<title>Hasil IT Process</title>
</head>

<body>
	<h1 class="mt-4 ms-3 mb-5">Maturity Level Generator</h1>

	<div class="container text-center m-auto">
		<h2><?= $kategori->nama;?></h2>
		<h3><?= $kuisioner->nama;?></h3>
		<p>
			Kuesioner ini akan menilai seberapa baik manajemen proses <?= $kategori->nama;?> yang terstandarisasi untuk mendukung
			<?= $kuisioner->nama;?>
		</p>
		<a class="btn btn-lg" style="background-color: #4CAF50;" href="<?= base_url('Frontend/pertanyaan/'.$kuisioner->id);?>" role="button">Mulai</a>

	</div>
</body>

</html>