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
<style>
    .container {
        height: 200px;
        position: relative;

    }

    .vertical-center {
        margin: 0;
        position: absolute;
        left: 40%;
        -ms-transform: translateY(-50%);
        transform: translateY(-10%);
    }
</style>

<body>
    <h1 class="mt-5 ms-4">Maturity Level</h1>
    <h1 class="mt-3 ms-4">Generator</h1>
    <hr class="mt-3 ms-4" style="width:30%;text-align:left;margin-left:0">
    <div class="row d-flex justify-content-center ">
        <div class="card border-secondary mb-3 mt-5 ms-5" style="max-width: 18rem;">
            <?php $jawaban = $this->db->get_where('jawaban',['pengisi' => $this->uri->segment('3')])->row()->id_kuisioner ;
            $kategori = $this->db->get_where('kuisioner',['id'=>$jawaban])->row()->id_kategori;
            $sub_kategori =  $this->db->get_where('sub_kategori',['id'=>$kategori])->row();
            $list_kategori = $this->db->get_where('kategori',['id'=>$sub_kategori->id_kategori])->row();
            ?>

            <div class="card-header" style="text-align:center">Maturity Level saat ini untuk <?= $list_kategori->nama;?> dan sub kategori <?= $sub_kategori->nama;?> adalah,</div>
            <div class="card-body text-secondary">
                <h5 class="card-title" style="text-align:center; font-size: 60px"><?= $hasil;?></h5>
            </div>
        </div>


    </div>
    <div class="row d-flex justify-content-center ">
        <div class="card border-secondary mb-3 mt-2 ms-5" style="max-width: 18rem;">
            <div class="card-body">
                <?php if ($hasil == 0){ ?>
                    <h6 class="card-text" style="text-align:center; font-size: 13px">Maturity level Anda berada pada <?= $hasil;?> dari 5 
                    perusahaan belum menyadari pentingnya proses pengelolaan TI dan belum ada tindakan sama sekali.</h6>
               <?php } ?>
               <?php if ($hasil == 1){ ?>
                    <h6 class="card-text" style="text-align:center; font-size: 13px">Maturity level Anda berada pada <?= $hasil;?> dari 5
                    Perushahaan sudah menyadari pentingnya pengelolaan TI dan perencanaan strategisnya, namun semua itu belum distandarisasi..</h6>
               <?php } ?>
               <?php if ($hasil == 2){ ?>
                    <h6 class="card-text" style="text-align:center; font-size: 13px">Maturity level Anda berada pada <?= $hasil;?> dari 5
                    yang berarti sudah terdapat konsistensi terkait pemeliharaan infrastruktur namun belum sesuai dengan kebutuhan bisnis yang ada pada perusahaan.</h6>
               <?php } ?>
               <?php if ($hasil == 3){ ?>
                    <h6 class="card-text" style="text-align:center; font-size: 13px">Maturity level Anda berada pada <?= $hasil;?> dari 5
                    Perusahaan sudah menyadari pentingnya pengelolaan TI dan sudah ada tindakan khusus namun hal ini belum dikembangkan sesuai keadaan perusahaan</h6>
               <?php } ?>
               <?php if ($hasil == 4){ ?>
                    <h6 class="card-text" style="text-align:center; font-size: 13px">Maturity level Anda berada pada <?= $hasil;?> dari 5
                    Sudah ada pengembangan mengenai pengelolaan TI pada perusahaan anda namun hal tersebut belum menyeluruh</h6>
               <?php } ?>
               <?php if ($hasil == 5){ ?>
                    <h6 class="card-text" style="text-align:center; font-size: 13px">Maturity level Anda berada pada <?= $hasil;?> dari 5
                    pengelolaan TI pada perusahaan anda sudah sangat baik/h6>
               <?php } ?>
            </div>

        </div>

    </div>
    <div class="container">
        <div class="vertical-center">
            <a href="<?= base_url('Frontend/expected/');?>" class="btn" style="background-color: #4CAF50; padding: 5px 25px;">Masukkan Expected Maturity Level</a>
        </div>
    </div>
</body>

</html>