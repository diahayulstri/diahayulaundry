 <div class="row">
     <div class="col-lg-12">
         <div class="card card-primary card-outline">
             <div class="card-header">
                 <h5 class="card-title"><?= $title; ?></h5>
                 <div class="card-tools">
                     <a href="<?= base_url('member') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
                 </div>
             </div>
             <div class="card-body">

                 <div class="row">
                     <div class="col-md-12">
                         <form method="post">
                             <div class="form-group">
                                 <label for="">Id Member</label>
                                 <input type="number" name="id_member" id="id_member" class="form-control" placeholder="ID Member" required value="<?= $member['id_member'] ?>" readonly>
                             </div>
                             <div class=" form-group">
                                 <label for="">Nama</label>
                                 <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Member" required value="<?= $member['nama'] ?>">
                             </div>
                             <div class=" form-group">
                                 <label for="">Alamat</label>
                                 <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required value="<?= $member['alamat'] ?>">
                             </div>
                             <div class="form-group" required>
                                 <label for="">Jenis Kelamin</label>
                                 <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                     <option value="<?= $member['jenis_kelamin'] ?>"><?= $member['jenis_kelamin'] ?></option>
                                     <option value="L">Laki-Laki</option>
                                     <option value="P">Perempuan</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="">Telpon</label>
                                 <input type="number" name="tlp" id="tlp" class="form-control" placeholder="Telpon" required value="<?= $member['tlp'] ?>">
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