 <div class="row mt-4">
     <div class="col-lg-12">
         <div class="card card-info card-outline">
             <div class="card-header">
                 <h5 class="card-title"><?= $title; ?></h5>
                 <div class="card-tools">
                     <a href="<?= base_url('transaksi') ?>" class="btn btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                 </div>
             </div>
             <div class="card-body">

                 <form method="post">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Kode Invoice</label>
                                 <input type="text" name="kode_invoice" id="kode_invoice" class="form-control" value="<?= "TR" . date('Ymd') . $kode_invoice ?>" readonly>
                             </div>

                             <div class="form-group">
                                 <label for="">Tanggal</label>
                                 <input type="datetime-local" name="tgl" id="tgl" class="form-control">
                             </div>

                             <div class="form-group">
                                 <label for="">Batas Waktu</label>
                                 <input type="datetime-local" name="batas_waktu" id="batas_waktu" class="form-control">
                             </div>

                             <div class="form-group">
                                 <label for="">Tanggal Bayar</label>
                                 <input type="datetime-local" name="tgl_bayar" id="tgl_bayar" class="form-control">
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="">Member</label>
                                     <select name="id_member" id="id_member" class="form-control member">
                                         <?php foreach ($member as $row) : ?>
                                             <option value="<?= $row['id_member'] ?>"><?= $row['nama'] ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <hr>
                     <div class="row">
                         <div class="col-md-6">
                             <select name="id_paket" id="id_paket" class="form-control paket">
                                 <?php foreach ($paket as $row) : ?>
                                     <option value="<?= $row['id_paket'] ?>"><?= $row['nama_paket'] ?></option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                         <div class="col-md-2">
                             <input type="text" class="form-control qty" name="qty" placeholder="Qty" autocomplete="off">
                         </div>
                         <div class="col-md-4">
                             <button class="btn btn-primary btn-block btn-tambah-det"><i class="fas fa-plus"></i> Tambah</button>
                         </div>
                     </div>
                     <hr>
                     <div class="row">
                         <div class="col-md-12">
                             <table class="table table-striped table-bordered">
                                 <thead>
                                     <tr>
                                         <th class="text-center">Paket</th>
                                         <th class="text-center">Harga</th>
                                         <th class="text-center">Qty</th>
                                         <th class="text-center">Total Harga</th>
                                         <th class="text-center">Keterangan</th>
                                         <th class="text-center">Hapus</th>
                                     </tr>
                                 </thead>
                                 <tbody class="det-transaksi">

                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-6"></div>
                         <div class="col-md-6">
                             <table class="table">
                                 <tr>
                                     <th>Biaya Tambahan</th>
                                     <td><input autocomplete="off" type="text" name="biaya_tambahan" class="form-control biaya_tambahan" placeholder="Biaya Tambahan"></td>
                                 </tr>
                                 <tr>
                                     <th>Pajak</th>
                                     <td><input autocomplete="off" type="text" name="pajak" class="form-control pajak" placeholder="Pajak"></td>
                                 </tr>
                                 <tr>
                                     <th>Diskon (%)</th>
                                     <td><input autocomplete="off" type="text" name="diskon" class="form-control diskon" placeholder="Diskon"></td>
                                 </tr>
                                 <tr>
                                     <th>Total Bayar</th>
                                     <td><input autocomplete="off" type="text" name="total_bayar" class="form-control total_bayar" readonly></td>
                                 </tr>
                                 <tr>
                                     <th>Cash</th>
                                     <td><input autocomplete="off" type="text" name="cash" class="form-control cash" placeholder="Cash"></td>
                                 </tr>
                                 <tr>
                                     <th>Kembalian</th>
                                     <td><input autocomplete="off" type="text" name="kembalian" class="form-control kembalian" readonly></td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-group">
                                             <label for="">Status transaksi</label>
                                             <select name="status" id="status" class="form-control">
                                                 <option value="Baru">Baru</option>
                                                 <option value="Proses">Proses</option>
                                                 <option value="Selesai">Selesai</option>
                                                 <option value="Diambil">Diambil</option>
                                             </select>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-group">
                                             <label for="">Status Pembayaran</label>
                                             <select name="dibayar" id="dibayar" class="form-control">
                                                 <option value="Dibayar">Dibayar</option>
                                                 <option value="Belum Dibayar">Belum Dibayar</option>
                                             </select>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td colspan="2">
                                         <button type="submit" class="btn btn-block btn-primary"> <i class="fas fa-fw fa-paper-plane"></i>Kirim</button>
                                     </td>
                                 </tr>
                             </table>
                         </div>
                     </div>
                 </form>

             </div>
         </div>
     </div>
 </div>

 <script>
     const base_url = '<?= base_url() ?>'
 </script>