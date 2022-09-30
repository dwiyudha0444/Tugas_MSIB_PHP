<?php
//Buatlah daftar nilai mahasiswa minimal 10 data dengan array scalar ($m1 s/d $m10): nim, nama, nilai
 $m1 = ['nim'=>'202053001','nama'=>'adi','nilai'=>79];
 $m2 = ['nim'=>'202053002','nama'=>'bayu','nilai'=>88];
 $m3 = ['nim'=>'202053003','nama'=>'cici','nilai'=>80];
 $m4 = ['nim'=>'202053004','nama'=>'didik','nilai'=>65];
 $m5 = ['nim'=>'202053005','nama'=>'eka','nilai'=>55];
 $m6 = ['nim'=>'202053006','nama'=>'febri','nilai'=>79];
 $m7 = ['nim'=>'202053007','nama'=>'gina','nilai'=>48];
 $m8 = ['nim'=>'202053008','nama'=>'hilda','nilai'=>59];
 $m9 = ['nim'=>'202053009','nama'=>'intan','nilai'=>55];
 $m10 = ['nim'=>'202053010','nama'=>'jefri','nilai'=>39];

//Buat array associative $mahasiswa = [ $m1 ... $m10]
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

//Buat array judul = No, NIM, Nama, Nilai, Keterangan, Grade,Predikat (di aera looping)
 $ar_judul = ['no','nim','nilai','keterangan','grade',
'predikat'];
//aggregate function in array
$jumlah_mahasiswa = count($mahasiswa);
//$jml_kg = array_column($,'jml')
$nilai = array_column($mahasiswa,'nilai');
$max_nilai = max($nilai);
$min_nilai = min($nilai);
$total_nilai = array_sum($nilai);
$rata2 = $total_nilai / $jumlah_mahasiswa;

//Buat daftar aggregate nilai gunakan aggregate function di array (TFoot) => Nilai Tertinggi, Nilai Terendah, Nilai Rata2, Jumlah Siswa
$data = [
    'Jumlah Mahasiswa'=>$jumlah_mahasiswa,
    'Jumlah Nilai Tertinggi'=>$max_nilai,
    'Jumlah Nilai Terendah'=>$min_nilai,
    'Rata-Rata'=> $rata2
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas PHP 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="text-center mt-4">Daftar Nilai Mahasiswa</h3>
        <table class="table table-striped mt-4">
            <thead>
                <tr class="bg-primary text-light">
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $mhs){
                //rumus2
                //Keterangan => Ternary minimal nilai 60 lulus
                $keterangan = $mhs['nilai'] >=60  ? 'Lulus' : 'Tidak Lulus';
                //Grade If multi kondisi => A, B, C, D, E
                if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = "A";
                    else if ($mhs['nilai'] >= 75 && $mhs['nilai'] < 85) $grade = "B";
                    else if ($mhs['nilai'] >= 50 && $mhs['nilai'] < 75) $grade = "C";
                    else if ($mhs['nilai'] >= 35 && $mhs['nilai'] < 50) $grade = "D";
                    else $grade = "E";
                //Predikat Switch Case dari Grade : Memuaskan ... Buruk
                switch ($grade) {
                    case "A":
                      $predikat = "Memuaskan";
                      break;
                    case "B":
                      $predikat = "Bagus";
                      break;
                    case "C":
                      $predikat = "Cukup";
                      break;
                    case "D":
                      $predikat = "Kurang";
                      break;
                    case "E":
                      $predikat = "Buruk";
                      break;
                    default:
                      $predikat = 0;
                      break;
                    }
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $keterangan ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
                <?php $no++; } ?>

            </tbody>
            <tfoot>
                <?php
                foreach ($data as $ket => $hasil) {
                ?>
                <tr>
                    <th colspan="7"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
