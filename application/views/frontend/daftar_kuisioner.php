<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

	<title>Daftar Kuesioner</title>
</head>

<body>
	<h1 class="mt-5 ms-3"><?= $slug;?></h1>
<h3 class="mt-3 ms-4"></h3>

	<div class="container">
		<div class="row justify-content-center">
            <?php foreach($kuisioner as $get) { ?>
			<div class="col-7 mt-5"><?= $get->nama;?></div>
			<div class="col-3 mt-5">
				<a class="btn" style="background-color: #4CAF50;" href="<?= base_url('kuisioner/'.$get->id);?>" role="button">Isi Kuesioner</a>
			</div>
            <?php } ?>
		</div>
	</div>
</body>

</html>