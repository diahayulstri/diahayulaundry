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
                             <div class="form-group" hidden>
                                 <label for="">Kode Invoice</label>
                                 <input type="text" name="kode_invoice" id="kode_invoice" class="form-control" value="<?= $transaksi['kode_invoice'] ?>">
                             </div>

                             <div class="form-group" hidden>
                                 <label for="">Tanggal</label>
                                 <input type="datetime-local" name="tgl" id="tgl" class="form-control" value="<?= date('Y-m-d\TH:i:s', strtotime($transaksi['tgl'])) ?>">
                             </div>

                             <div class="form-group" hidden>
                                 <label for="">Batas Waktu</label>
                                 <input type="datetime-local" name="batas_waktu" id="batas_waktu" class="form-control" value="<?= date('Y-m-d\TH:i:s', strtotime($transaksi['batas_waktu'])) ?>">
                             </div>

                            
                         </div>
                         <div class="col-md-12">
                         <div class="form-group">
                                 <label for="">Tanggal Bayar</label>
                                 <input type="datetime-local" name="tgl_bayar" id="tgl_bayar" class="form-control" value="<?= date('Y-m-d\TH:i:s', strtotime($transaksi['tgl_bayar'])) ?>">
                             </div>
                             <div class="form-group" hidden>
                                 <label for="">Member</label>
                                 <select name="id_member" id="id_member" class="form-control member">
                                     <?php foreach ($member as $row) : ?>
                                         <option value="<?= $row['id_member'] ?>"><?= $row['nama'] ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="">Status</label>
                                 <select name="status" id="status" class="form-control">
                                     <option value="<?= $transaksi['status'] ?>"><?= $transaksi['status'] ?></option>
                                     <option value="Baru">Baru</option>
                                     <option value="Proses">Proses</option>
                                     <option value="Selesai">Selesai</option>
                                     <option value="Diambil">Diambil</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="">Dibayar</label>
                                 <select name="dibayar" id="dibayar" class="form-control">
                                     <option value="<?= $transaksi['dibayar'] ?>"><?= $transaksi['dibayar'] ?></option>
                                     <option value="Dibayar">Dibayar</option>
                                     <option value="Belum Dibayar">Belum Dibayar</option>
                                 </select>
                             </div>
                         </div>
                     </div>
                     <hr>
                     <div class="row">
                         <div class="col-md-12">
                             <button type="submit" class="btn btn-info btn-block">KIRIM</button>
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