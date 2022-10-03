
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 5 - Moh. Chummaedi Amrullah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <?php 
  require "PersegiPanjang.php";
  require "Lingkaran.php";
  require "Segitiga.php";

  $thead = ["No", "Nama Bidang", "Keterangan", "Luas Bidang","Keliling"];
  
  $no = 1;
  ?>

    <div class="container">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <?php 

                    foreach ($thead as $judul) {?>
                        <th><?= $judul ?></th>
                    <?php  }?>
                </tr>
            </thead>
            <tbody>
                <?php 
                $pp = new PersegiPanjang(10,5);
                $lk = new Lingkaran(14);
                $sg = new Segitiga(12,24,6);

                $bentuk = [$pp, $lk, $sg];

                

                foreach ($bentuk as $b) { 
                    
                    $namaBidang = $b->namaBidang();       
                    $luasbidang = $b->luasBidang();
                    $kelilingbidang = $b->kelilingBidang();
                    
                    ?>  
                    <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $namaBidang ?></td>
                    <td><?= $b->keterangan() ?></td>
                    <td><?= $luasbidang ?></td>
                    <td><?= $kelilingbidang ?></td>
                    </tr>
                 <?php   
                }
                ?>
                
            </tbody>
        
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>