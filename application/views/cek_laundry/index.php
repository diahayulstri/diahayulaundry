<form method="post" action="<?= base_url() ?>Cek_status">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-10">
                <input type="text" name="kode_invoice" class="form-control" placeholder="Silahkan masukkan kode invoice anda!">
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Cek Laundry</button>
            </div>
        </div>
    </div>
</form>

<div class="container">
    <table class="table table-bordered table-striped mb-5">
        <thead>
            <tr>
                <th class="text-center">Nama Member</th>
                <th class="text-center">Tanggal Masuk</th>
                <th class="text-center">Total</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>

            <?php if (!empty($data)) {

                foreach ($data as $row) { ?>
                    <tr>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->tgl ?></td>
                        <td><?= "Rp. " . number_format($row->total_bayar, 0, '.', '.')  ?></td>
                        <td><?= $row->status ?></td>
                    </tr>
                <?php  }
            } else { ?>
                <tr>
                    <td colspan="5" class="bg-danger text-warning">Tidak ada data</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>