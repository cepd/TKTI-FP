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
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-collapse collapse" id="navbar-main">
            </div>
        </div>
    </div>

    <div class="container">

        <div class="mb-2 col-lg-12">
            <div class="page-header">
                <h1 id="forms">Formulir Kuisioner</h1>
            </div>
        </div>
        <hr class="mt-3 ms-1" style="width:30%;text-align:left;margin-left:0">

        <div class="row">
            <div class="col-lg-10">
                <form class="form-horizontal" action="<?= base_url('Frontend/p_hasil/'.$this->uri->segment(3));?>" method="post">

                <?php if($this->session->flashdata('pesan')){?>
             
                <?= '<h4>'.$this->session->flashdata('pesan').'</h4>'?>
         
                <?php }?>
                        <fieldset>
                            <div id="po" class="form-group">
                                <div class="mb-3 col-lg-10">
                                    <?php foreach($kuisioner as $get) {?>
                                    <p> <?= $get->pertanyaan;?> </p>
                                    <input type="radio" id="html" name="<?= $get->id;?>" value="0">
                                    <label for="html">Tidak benar</label><br>
                                    <input type="radio" id="html" name="<?= $get->id;?>" value="0.33">
                                    <label for="html">Sedikit</label><br>
                                    <input type="radio" id="html" name="<?= $get->id;?>" value="0.67">
                                    <label for="html">Dalam tingkatan tertentu</label><br>
                                    <input type="radio" id="html" name="<?= $get->id;?>" value=" 1">
                                    <label for="html">Ya/Menyeluruh</label><br>
                                    <input type="hidden" id="html" name="pengisi" value="<?= str_shuffle('abcdefghijklx2m1nop2qrstuv3wxyz');?>">
                                    <br>
                                    <?php } ?>
                                   
                                    
                                
                                    
                                </div>
                            </div>

                        </fieldset>
                   
                    <div class="mb-1 mt-3 ms-1 col-md-1 text-center">
                        <button type="submit" class="btn" style="background-color: #4CAF50;">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mb-4 mt-1 col-lg-1 text-center">
            <a href="<?php echo base_url(); ?>/"><button class="btn btn-danger">Batal</button></a>
        </div>
    </div>


    <!-- Vendor JS Files -->
    <script src="assetsfile/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetsfile/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assetsfile/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assetsfile/assets/vendor/php-email-form/validate.js"></script>
    <script src="assetsfile/assets/vendor/purecounter/purecounter.js"></script>
    <script src="assetsfile/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assetsfile/assets/js/main.js"></script>
</body>

</html>