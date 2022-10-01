<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chummaedi Amrullah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <?php 
        require "Pegawai.php";
        
        $data = [
            [
                "nip" => "21100000342",
                "nama"=>"gorwan",
                "jabatan"=>"staff",
                "agama" =>"hindu",
                "Status" => "Menikah"
            ],
            [
                "nip" => "21200000342",
                "nama"=>"muhammad lylana",
                "jabatan"=>"staff",
                "agama" =>"Islam",
                "Status" => "Belum Menikah"
            ],
            [
                "nip" => "21300000342",
                "nama"=>"Daffa Al mubarock",
                "jabatan"=>"Manager",
                "agama" =>"Islam",
                "Status" => "Menikah"
            ],
            [
                "nip" => "21400000342",
                "nama"=>"David Firmansyah",
                "jabatan"=>"Asmen",
                "agama" =>"Kristen",
                "Status" => "Belum Menikah"
            ],
            [
                "nip" => "21500000342",
                "nama"=>"Ismail Bin mail",
                "jabatan"=>"Manager",
                "agama" =>"Islam",
                "Status" => "Belum Menikah"
            ],
            [
                "nip" => "21600000342",
                "nama"=>"Steven Herlan",
                "jabatan"=>"Kabag",
                "agama" =>"Budha",
                "Status" => "Menikah"
            ],
            [
                "nip" => "21700000342",
                "nama"=>"Drajat Sumarga",
                "jabatan"=>"Asmen",
                "agama" =>"Islam",
                "Status" => "Menikah"
            ],
            
        ]
    ?>

    <div class="container">
            <div class="row">
            
            <?php
                foreach ($data as $pg) {
                    $pegawai = new Pegawai($pg["nip"],$pg["nama"],$pg["jabatan"],$pg["agama"],$pg["Status"]);
                    $pegawai->mencetak();

                }             
            ?>
            </div>

            <div class="card mt-3 bg-warning" style="width: 30rem; ">
         <div class="card-body">
    <h5 class="card-title"><?=Pegawai::PT ?></h5>
    <h6>Jumlah Pegawai : <?=Pegawai::$no-1 ?></h6>
  </div>
</div>
                
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>