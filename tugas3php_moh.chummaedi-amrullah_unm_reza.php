<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Universitas Chummaedi Amrullah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <?php 
        $mhs1 =  ["nim" => "1219001", "nama" =>"Deri Baru","nilai" => 56];
        $mhs2 =  ["nim" => "1219002", "nama" =>"David Silahudin","nilai" => 88];
        $mhs3 =  ["nim" => "1219003", "nama" =>"Ouesman","nilai" => 77];
        $mhs4 =  ["nim" => "1219004", "nama" =>"Agung Jayadi","nilai" => 66];
        $mhs5 =  ["nim" => "1219005", "nama" =>"Raihan Faradiba","nilai" =>84];
        $mhs6 =  ["nim" => "1219006", "nama" =>"Firda nurnaini","nilai" => 20];
        $mhs7 =  ["nim" => "1219007", "nama" =>"Paraboy","nilai" => 99];
        $mhs8 =  ["nim" => "1219008", "nama" =>"Rifqi Samauidin ","nilai" => 15];
        $mhs9 =  ["nim" => "1219009", "nama" =>"chummaedi amrullah","nilai" => 56];
        $mhs10 = ["nim" => "1219010", "nama" =>"Gus samsudin","nilai" => 100];
    
        $kumpulanMahasiswa = [$mhs1, $mhs2, $mhs3, $mhs4, $mhs5, $mhs6, $mhs7, $mhs8, $mhs9, $mhs10];
        $kumpulanJudul = ["No","NIM","Nama","Nilai","Keterangan","Grade","Predikat"];
    ?>
    <div class="container">
    <h1 class="alert alert-success text-center mt-3">Data Nilai Mahasiswa</h1>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <?php 
                        foreach ($kumpulanJudul as $judul) {?>
                            <th><?= $judul ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kumpulanMahasiswa as $mahasiswa) {
                    $nim = $mahasiswa["nim"];
                    $nama = $mahasiswa["nama"];
                    $nilai = $mahasiswa["nilai"];

                    $keterangan = ($nilai >= 60) ? "<p class ='text-success'>Lulus</p>" : "<p class='text-danger'>Gagal</p>";
                    
                    if ($nilai >= 90 && $nilai <= 100) {
                        $grade = "A";
                    } elseif ($nilai >= 80 && $nilai <90) {
                        $grade = "B";
                    } elseif ($nilai >= 70 && $nilai <80) {
                        $grade = "C";
                    } elseif ($nilai >= 60 && $nilai <70) {
                        $grade = "D";
                    } else {
                        $grade = "E";
                    }

                    switch ($grade) {
                        case 'A':
                            $predikat = "Memuaskan";
                            break;
                            case 'B':
                                $predikat = "Baik";
                                break;
                            case 'C':
                                $predikat = "Cukup";
                                break;
                            case 'D':
                                $predikat = "Kurang";
                                break;
                        default:
                                $predikat = "Buruk";
                            break;
                    }?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $nim ?></td>
                        <td><?= $nama ?></td>
                        <td><?= $nilai ?></td>
                        <td><?= $keterangan ?></td>
                        <td><?= $grade ?></td>
                        <td><?= $predikat ?></td>
                    </tr>
                    <?php } ?>
            </tbody>
            <tfoot>
                <?php 
                $jumlahMahasiswa = count($kumpulanMahasiswa);
                $kumpulanNilai = array_column($kumpulanMahasiswa, "nilai");
                $nilaiTertinggi = max($kumpulanNilai);
                $nilaiTerkecil = min($kumpulanNilai);
                $totalNilai = array_sum($kumpulanNilai);
                $rata = $totalNilai / $jumlahMahasiswa;
                
                
                $tfoot =[
                    '<span class="text-primary p-3">Nilai Tertinggi</span>'=> $nilaiTertinggi,
                    "<span class='text-primary p-3'>Nilai Terkecil</span>" => $nilaiTerkecil,
                    "<span class='text-primary p-3'>Nilai Rata - Rata</span>" => $rata,
                    "<span class='text-primary p-3'>Nilai Jumlah Mahasiswa</span>" => $jumlahMahasiswa,
                ];

                 foreach ($tfoot as $kunci => $value) { ?>
                    <tr>
                        <th colspan="4"><?= $kunci ?></th>
                        <th colspan="3"><?= $value ?></th>
                    </tr>
                 <?php } ?>
            </tfoot>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>