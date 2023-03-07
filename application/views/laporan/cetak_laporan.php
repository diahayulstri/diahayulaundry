<!DOCTYPE html>
<html lang="en">

<head>
    <meta chraset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title><?= $title ?></title>


    <style>
        hr {
            border: 0;
            border-top: 2px solid #AEBAF8;

        }

        .tabel {
            border: 1px solid black;
            border-coLLapse: collapse;
        }

        th {
            font-family: sans-serif;
            font-size: 12px;
            background: lightblue;
        }

        .tabel tr tr {
            font-size: 13;
        }
    </style>
</head>

<body>
    <center>
        <table>
            <tr>
                <td><img src="<?= base_url('assets/css/laundry.png') ?>" width="90" height="90"></td>
                <td>
                    <center>
                        <font size="3">STUKTUR PEMBAYARAN</font>
                    </center>
                    <br>
                    <center>
                        <font size="5"><b>AYU LAUNDRY</b></font>
                    </center>
    </center><br>
    <center>
        <font size="2">
            <i>
                <b>
                    jl. gamalama No. 09 Krajan Wetan-Paleran, Umbulsari, Email : Ayulaundry@gamil.com Telp : 089768797
                </b>
            </i>
        </font>
    </center>
    </td>
    <tr>
        <td colspan="2">
            <hr>
        </td>
    </tr>
    </tr>
    </table>
    <table width="700" class="tabel text-center">
        <tr>
            <th class="tabel text-center">No</th>
            <th class="tabel text-center">Tanggal</th>
            <th class="tabel text-center">Nama Paket</th>
            <th class="tabel text-center">Outlet</th>
            <th class="tabel text-center">Harga</th>
            <th class="tabel text-center">Jumlah</th>
            <th class="tabel text-center">Total</th>
            <th class="tabel text-center">Status pembayaran</th>
            <th class="tabel text-center">Pendapatan</th>

        </tr>
        <?php $index = 1;
        foreach ($laporan as $row) : ?>
            <tr>
                <td class="teble text-center"><?php echo $index++ ?></td>
                <td class="teble text-center"><?php echo $row['tgl'] ?></td>
                <td class="teble text-center"><?php echo $row['nama_paket'] ?></td>
                <td class="teble text-center"><?php echo $row['nama_outlet'] ?></td>
                <td class="teble text-center"><?php echo "Rp." . number_format($row['harga'], 0, '.', '.') ?></td>
                <td class="teble text-center"><?php echo $row['jumlah'] ?></td>
                <td class="teble text-center"><?php echo "Rp." . number_format($row['total'], 0, '.', '.') ?></td>
                <td class="teble text-center"><?php echo $row['dibayar'] ?></td>
                <td class="table text-center">
                    <?php if ($row['dibayar'] == "Dibayar") { ?>
                        <?php echo "Rp." . number_format($row['total'], 0, '.', '.') ?>
                    <?php } else { ?>
                        <?php echo "Rp." . number_format($row['harga'] * 0, 0, '.', '.') ?>
                    <?php } ?>
                </td>
            </tr>
        <?php endforeach ?>
        <tr>
            <th class="table text-center" colspan="8">Total Semua Pendapat</th>
            <th class="table text-center">

            </th>
        </tr>
    </table>
    <table width="700">


</body>
</thml>
<script>
    window.print();
</script>