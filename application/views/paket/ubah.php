 <div class="row">
     <div class="col-lg-12">
         <div class="card card-primary card-outline">
             <div class="card-header">
                 <h5 class="card-title"><?= $title; ?></h5>
                 <div class="card-tools">
                     <a href="<?= base_url('paket') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
                 </div>
             </div>
             <div class="card-body">

                 <div class="row">
                     <div class="col-md-12">
                         <form method="post">
                             <div class="form-group">
                                 <label for="">Id Paket</label>
                                 <input type="number" name="id_paket" id="id_paket" class="form-control" placeholder="ID Paket" required value="<?= $paket['id_paket'] ?>" readonly>
                             </div>

                             <div class="form-group">
                                 <label for="">Outlet</label>
                                 <select name="id_outlet" id="id_outlet" class="form-control" required>
                                     <option>Pilih Outlet</option>
                                     <?php foreach ($outlet as $row) : ?>
                                         <option value="<?= $row['id_outlet'] ?>"><?= $row['nama'] ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>

                             <div class="form-group">
                                 <label for="">Nama Paket</label>
                                 <input type="text" name="nama_paket" id="nama_paket" class="form-control" placeholder="Nama Paket" required value="<?= $paket['nama_paket'] ?>">
                             </div>

                             <div class="form-group" required>
                                 <label for="">Jenis</label>
                                 <select name="jenis" id="jenis" class="form-control">
                                     <option value="<?= $paket['jenis'] ?>"><?= $paket['jenis'] ?></option>
                                     <option value="Kiloan">Kiloan</option>
                                     <option value="Selimut">Selimut</option>
                                     <option value="Bad Cover">Bad Cover</option>
                                     <option value="Kaos">Kaos</option>
                                     <option value="Lainnya">Lainnya</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="">Harga</label>
                                 <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga" required value="<?= $paket['harga'] ?>">
                             </div>
                             <div class="form-group">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                             </div>
                         </form>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </div>
 <!-- /.row -->