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

<body style="background-color:#f4fbfe;">
    <h1 class="mt-5 ms-4">Rekomendasi</h1>
    <hr class="mt-3 ms-4" style="width:30%;text-align:left;margin-left:0">

    <div class="col d-flex justify-content-center ">
        <div class="card border-secondary mb-3 mt-5 ms-5" style="max-width: 18rem;">
            <div class="card-header">Maturity Level Saat Ini</div>
            <div class="card-body text-secondary">
                <h5 class="card-title">Level <?= $get->maturity;?> </h5>
            </div>
        </div>
        <div class="card border-secondary mb-3 mt-5 ms-5" style="max-width: 18rem;">
            <div class="card-header">Expected Maturity Level</div>
            <div class="card-body text-secondary">
                <h5 class="card-title">Level <?= $get->maturity_inginkan;?> </h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
        </div>
        <div class="col-10">
            <ul class="list-group">
                <?php if ($get->maturity == 0 and $get->maturity_inginkan  == 1) { ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Perusahaan belum sama sekali menyadari akan pentingnya tata kelola teknologi informasi, sebaiknya didefinisikan terlebih dahulu mengenai tata kelola perusahaan yang efektif dan efisien yang dapat mendukung tujuan bisnis perusahaan.
                </li>
           
                <?php }elseif($get->maturity == 0 and $get->maturity_inginkan  == 2){ ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Perusahaan belum sama sekali menyadari akan pentingnya tata kelola teknologi informasi, sebaiknya didefinisikan terlebih dahulu mengenai tata kelola perusahaan yang efektif dan efisien yang dapat mendukung tujuan bisnis perusahaan.
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Setelah memiliki prosedur dan deifinisi yang baik mengenai tata kelola perusahaan, organisasi bisa memulai membuat regulasi tata kelola yang baik. prosedur mengenai tata kelola ini berfungsi untuk menjadi pondasi dari tata kelola TI perusahaan.
                </li>
                <?php }elseif($get->maturity == 0 and $get->maturity_inginkan  == 3){ ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Perusahaan belum sama sekali menyadari akan pentingnya tata kelola teknologi informasi, sebaiknya didefinisikan terlebih dahulu mengenai tata kelola perusahaan yang efektif dan efisien yang dapat mendukung tujuan bisnis perusahaan.
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Setelah memiliki prosedur dan deifinisi yang baik mengenai tata kelola perusahaan, organisasi bisa memulai membuat regulasi tata kelola yang baik. prosedur mengenai tata kelola ini berfungsi untuk menjadi pondasi dari tata kelola TI perusahaan.

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Sebaiknya perusahaan mulai melakukan tata kelola TI secara teratur dan rutin sehingga dapat diketahui apa hal yang perlu ditingkatkan dan diperbaiki dengan mudah dan cepat.

                </li>
                <?php } elseif($get->maturity == 0 and $get->maturity_inginkan  == 4){ ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Perusahaan belum sama sekali menyadari akan pentingnya tata kelola teknologi informasi, sebaiknya didefinisikan terlebih dahulu mengenai tata kelola perusahaan yang efektif dan efisien yang dapat mendukung tujuan bisnis perusahaan.
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Setelah memiliki prosedur dan deifinisi yang baik mengenai tata kelola perusahaan, organisasi bisa memulai membuat regulasi tata kelola yang baik. prosedur mengenai tata kelola ini berfungsi untuk menjadi pondasi dari tata kelola TI perusahaan.

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Sebaiknya perusahaan mulai melakukan tata kelola TI secara teratur dan rutin sehingga dapat diketahui apa hal yang perlu ditingkatkan dan diperbaiki dengan mudah dan cepat.

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Sebaiknya tata kelola yang telah dimiliki oleh perusahaan diawasi secara berkala dan diberikan pengembangan terkait pengawasan serta regulasi untuk menjalankannya. Hal ini bertujuan agar tata kelola perusahaan tetap dapat beradaptasi terhadap perubahan yang terjadi di perusahaan

                </li>
                <?php } elseif($get->maturity == 0 and $get->maturity_inginkan  == 5){ ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Perusahaan belum sama sekali menyadari akan pentingnya tata kelola teknologi informasi, sebaiknya didefinisikan terlebih dahulu mengenai tata kelola perusahaan yang efektif dan efisien yang dapat mendukung tujuan bisnis perusahaan.
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Setelah memiliki prosedur dan deifinisi yang baik mengenai tata kelola perusahaan, organisasi bisa memulai membuat regulasi tata kelola yang baik. prosedur mengenai tata kelola ini berfungsi untuk menjadi pondasi dari tata kelola TI perusahaan.

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Sebaiknya perusahaan mulai melakukan tata kelola TI secara teratur dan rutin sehingga dapat diketahui apa hal yang perlu ditingkatkan dan diperbaiki dengan mudah dan cepat.

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Sebaiknya tata kelola yang telah dimiliki oleh perusahaan diawasi secara berkala dan diberikan pengembangan terkait pengawasan serta regulasi untuk menjalankannya. Hal ini bertujuan agar tata kelola perusahaan tetap dapat beradaptasi terhadap perubahan yang terjadi di perusahaan

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Sebaiknya manajemen dan tata kelola perusahaan di optimasi secara berkala.

                </li>
                <?php }elseif($get->maturity == 1 and $get->maturity_inginkan  == 2){ ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Perusahaan belum sama sekali menyadari akan pentingnya tata kelola teknologi informasi, sebaiknya didefinisikan terlebih dahulu mengenai tata kelola perusahaan yang efektif dan efisien yang dapat mendukung tujuan bisnis perusahaan.
                </li>
               
                <?php } elseif($get->maturity == 1 and $get->maturity_inginkan  == 3){ ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sebaiknya organisasi bisa memulai membuat regulasi tata kelola yang baik. prosedur mengenai tata kelola ini berfungsi untuk menjadi pondasi dari tata kelola TI perusahaan.
                 <li class="list-group-item d-flex justify-content-between align-items-center">
                 Sebaiknya perusahaan mulai melakukan tata kelola TI secara teratur dan rutin sehingga dapat diketahui apa hal yang perlu ditingkatkan dan diperbaiki dengan mudah dan cepat.

                </li>
               
                <?php } elseif($get->maturity == 1 and $get->maturity_inginkan  == 4){ ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sebaiknya organisasi bisa memulai membuat regulasi tata kelola yang baik. prosedur mengenai tata kelola ini berfungsi untuk menjadi pondasi dari tata kelola TI perusahaan.
                 <li class="list-group-item d-flex justify-content-between align-items-center">
                 Sebaiknya perusahaan mulai melakukan tata kelola TI secara teratur dan rutin sehingga dapat diketahui apa hal yang perlu ditingkatkan dan diperbaiki dengan mudah dan cepat.

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Sebaiknya tata kelola yang telah dimiliki oleh perusahaan diawasi secara berkala dan diberikan pengembangan terkait pengawasan serta regulasi untuk menjalankannya. Hal ini bertujuan agar tata kelola perusahaan tetap dapat beradaptasi terhadap perubahan yang terjadi di perusahaan

                </li>
               
                <?php } elseif($get->maturity == 1 and $get->maturity_inginkan  == 5){ ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sebaiknya organisasi bisa memulai membuat regulasi tata kelola yang baik. prosedur mengenai tata kelola ini berfungsi untuk menjadi pondasi dari tata kelola TI perusahaan.
                 <li class="list-group-item d-flex justify-content-between align-items-center">
                 Sebaiknya perusahaan mulai melakukan tata kelola TI secara teratur dan rutin sehingga dapat diketahui apa hal yang perlu ditingkatkan dan diperbaiki dengan mudah dan cepat.

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Sebaiknya tata kelola yang telah dimiliki oleh perusahaan diawasi secara berkala dan diberikan pengembangan terkait pengawasan serta regulasi untuk menjalankannya. Hal ini bertujuan agar tata kelola perusahaan tetap dapat beradaptasi terhadap perubahan yang terjadi di perusahaan

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Sebaiknya manajemen dan tata kelola perusahaan di optimasi secara berkala.

                </li>
               
                <?php } elseif($get->maturity == 2 and $get->maturity_inginkan  == 3){ ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sebaiknya perusahaan mulai melakukan tata kelola TI secara teratur dan rutin sehingga dapat diketahui apa hal yang perlu ditingkatkan dan diperbaiki dengan mudah dan cepat.
                    </li>
                <?php } elseif($get->maturity == 2 and $get->maturity_inginkan  == 4){ ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sebaiknya perusahaan mulai melakukan tata kelola TI secara teratur dan rutin sehingga dapat diketahui apa hal yang perlu ditingkatkan dan diperbaiki dengan mudah dan cepat.
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sebaiknya tata kelola yang telah dimiliki oleh perusahaan diawasi secara berkala dan diberikan pengembangan terkait pengawasan serta regulasi untuk menjalankannya. Hal ini bertujuan agar tata kelola perusahaan tetap dapat beradaptasi terhadap perubahan yang terjadi di perusahaan
                    </li>
                <?php } elseif($get->maturity == 2 and $get->maturity_inginkan  == 5){ ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sebaiknya perusahaan mulai melakukan tata kelola TI secara teratur dan rutin sehingga dapat diketahui apa hal yang perlu ditingkatkan dan diperbaiki dengan mudah dan cepat.
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sebaiknya tata kelola yang telah dimiliki oleh perusahaan diawasi secara berkala dan diberikan pengembangan terkait pengawasan serta regulasi untuk menjalankannya. Hal ini bertujuan agar tata kelola perusahaan tetap dapat beradaptasi terhadap perubahan yang terjadi di perusahaan
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sebaiknya manajemen dan tata kelola perusahaan di optimasi secara berkala.
                    </li>
                <?php } elseif($get->maturity == 3 and $get->maturity_inginkan  == 4){ ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sebaiknya tata kelola yang telah dimiliki oleh perusahaan diawasi secara berkala dan diberikan pengembangan terkait pengawasan serta regulasi untuk menjalankannya. Hal ini bertujuan agar tata kelola perusahaan tetap dapat beradaptasi terhadap perubahan yang terjadi di perusahaan
                    </li>
                   
                <?php } elseif($get->maturity == 3 and $get->maturity_inginkan  == 5){ ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sebaiknya tata kelola yang telah dimiliki oleh perusahaan diawasi secara berkala dan diberikan pengembangan terkait pengawasan serta regulasi untuk menjalankannya. Hal ini bertujuan agar tata kelola perusahaan tetap dapat beradaptasi terhadap perubahan yang terjadi di perusahaan
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sebaiknya manajemen dan tata kelola perusahaan di optimasi secara berkala.

                    </li>
                   
                <?php } elseif($get->maturity == 4 and $get->maturity_inginkan  == 5){ ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sebaiknya manajemen dan tata kelola perusahaan di optimasi secara berkala.
                    </li>                  
                <?php } ?>
            </ul>
            <br>
            <a href="<?= base_url('Frontend');?>" class="btn btn-success">kembali </a>
        </div>
        <div class="col">
           
        </div>
    </div>
     
    <br>
    <br>
    <br>
</body>

</html>