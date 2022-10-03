<?php
require_once 'Lingkaran.php';
require_once 'Segitiga.php';
require_once 'PersegiPanjang.php';

    $lingkaran = new Lingkaran(9,3.14);
    $persegipanjang = new PersegiPanjang(42,18);
    $segitiga = new Segitiga(14,13,12);

    $cetak = [$lingkaran,$persegipanjang,$segitiga];
    
$arr_jdl = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 5 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card-body mt-5">
            <h5 class="card-title">Contoh Soal Matematika</h5>
            <p class="card-text">Soal dan Jawaban</p>
        </div>
        <table class="table table-striped mt-4">
            <thead>
                <tr class="text-white bg-primary text-center">
                    <?php
                        foreach ($arr_jdl as $hd) {
                        ?>
                    <th><?= $hd ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                        $no = 1;
                        foreach ($cetak as $btk) { ?>
                <tr>
                    <td align="center"> <?= $no++; ?> </td>
                    <td align="center"> <?= $btk -> namaBidang(); ?> </td>
                    <td align="center"> <?= $btk -> keterangan(); ?> </td>
                    <td align="center"> <?= $btk -> luasBidang(); ?> </td>
                    <td align="center"> <?= $btk -> kelilingBidang(); ?> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>