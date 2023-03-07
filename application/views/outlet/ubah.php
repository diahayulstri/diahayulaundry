 <div class="row">
     <div class="col-lg-12">
         <div class="card card-primary card-outline">
             <div class="card-header">
                 <h5 class="card-title"><?= $title; ?></h5>
                 <div class="card-tools">
                     <a href="<?= base_url('outlet') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
                 </div>
             </div>
             <div class="card-body">

                 <div class="row">
                     <div class="col-md-12">
                         <form method="post">
                             <div class="form-group">
                                 <label for="">Id Outlet</label>
                                 <input type="number" name="id_outlet" id="id_outlet" class="form-control" placeholder="ID Outlet" required value="<?= $outlet['id_outlet'] ?>" readonly>
                             </div>
                             <div class=" form-group">
                                 <label for="">Nama Outlet</label>
                                 <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Outlet" required value="<?= $outlet['nama'] ?>">
                             </div>
                             <div class=" form-group">
                                 <label for="">Alamat</label>
                                 <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required value="<?= $outlet['alamat'] ?>">
                             </div>
                             <div class="form-group">
                                 <label for="">Telpon</label>
                                 <input type="number" name="tlp" id="tlp" class="form-control" placeholder="Telpon" required value="<?= $outlet['tlp'] ?>">
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