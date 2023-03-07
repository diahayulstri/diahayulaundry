<!DOCTYPE html>
<html lang="en">

<head>
    <meta chraset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title><?= $title ?></title>


    <style>
        td {
            font-size: 12px;
            font-family: sans-serif;
        }

        h3 {
            font-size: 16px;
        }

        /* hr {
            border: 0;
            border-top: 2px solid #AEBAF8;

        } */

        .tabel {
            border: 1px solid black;
            border-coLLapse: collapse;
        }

        th {
            font-size: 12px;
            font-family: sans-serif;
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

    <table width="700">
        <tr>
            <td>kode invoice :</td>
            <td class="text"><?= $transaksi['kode_invoice'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Masuk :</td>
            <td class="text"><?= $transaksi['tgl'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Ambil :</td>
            <td class="text"><?= $transaksi['tgl_bayar'] ?></td>
        </tr>
    </table><br>
    <table width="700" class="tabel">
        <tr>
            <th class="tabel text-center">Nama Paket</th>
            <th class="tabel text-center">Harga</th>
            <th class="tabel text-center">QTY</th>
            <th class="tabel text-center">Status Pambayaran</th>
            <th class="tabel text-center">Total Bayar</th>
        </tr>
        <tr>
            <td class="tabel text-center"><?= $transaksi['nama_paket'] ?></td>
            <td class="tabel text-center"><?= $transaksi['harga'] ?></td>
            <td class="tabel text-center"><?= $transaksi['qty'] ?></td>
            <td class="tabel text-center"><?= $transaksi['dibayar'] ?></td>
            <td class="tabel text-center"><?= "Rp." . number_format($transaksi['total_bayar'], 0, '.', '.') ?></td>
        </tr>
    </table><br>
    <table width="700">
        <tr>
            <td>Keterangan</td>
        </tr>
        <tr>
            <td>
                <p>1. Pengambilan Cucian Harus Membawa Nota</p>
                <p>2. Cucuian Luntur bukan Tanggung Jawab Kami</p>
                <p>3. Hitung dan periksa sebelum pergi</p>
                <p>4. klaim kekurangan/kehilangan cucuian setelah meninggalkan laundry tidak dilayani</p>
            </td>
        </tr>
    </table>
    <table>
        <td> <b>TERIMA KASIH ATAS KUNJUNGAN ANDA</b></td>
    </table>

    </center>





    <!-- <table>
        <tr>
            <center><b> STRUK LAPORAN
                    <p> Ayu laundry</p>
                    <p>jl gamalama No.03, Krajan Wetan-Paleran, Umbulsari email:laundryayu@gmail.com Telp.089768735628</p>
                </b> </center>
            <td>
                <img scr="<?= base_url('assets/css/employee.png'); ?>" width="100">
            </td>
        </tr>
    </table>
    <table>
        <center>
            <tr>
                <td>
                    <p>kode invoice :<?= $transaksi['kode_invoice'] ?></p>
                    <p>tanggal Masuk :<?= $transaksi['tgl'] ?></p>
                    <p>tanggal Ambil :<?= $transaksi['batas_waktu'] ?></p>
                </td>
            </tr>
            <hr>
    </table>
    <table width="700" class="tabel">
        <tr>
            <th class="tabel text-center">Nama Paket</th>
            <th class="tabel text-center">Harga</th>
            <th class="tabel text-center">Qty</th>
            <th class="tabel text-center">Status Pembayaran</th>
            <th class="tabel text-center">Total Bayar</th>
        </tr>

        <tr>
            <td class="tabel text-center"><?= $transaksi['nama_paket'] ?></td>
            <td class="tabel text-center"><?= $transaksi['harga'] ?></td>
            <td class="tabel text-center"><?= $transaksi['qty'] ?></td>
            <td class="tabel text-center"><?= $transaksi['dibayar'] ?></td>
            <td class="tabel text-center"><?= "Rp. " . number_format($transaksi['total_bayar']) ?></td>
        </tr>

        </center>
    </table><br>

    <table>
        <tr>
            <td><b>Keterangan</b></td>
        </tr>
        <tr>
            <td>
                <p>1. Pengambilan cucian harus membawa nota</p>
                <p>2. Cuci luntur bukan tanggung jawab kami</p>
                <p>3. Hitung dan periksa sebelum pergi</p>
                <p>4. Klaim kekurangan/kehilangan cucian setelah meninggalkan laundry tidal dilayani</p>
            </td>
        </tr>
    </table>
    <p><b>Terimakasih Telah berkunjung Di toko Kami</b></p> -->

</body>
</thml>
<script>
    window.print();
</script>