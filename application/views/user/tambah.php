 <div class="row">
     <div class="col-lg-12">
         <div class="card card-primary card-outline">
             <div class="card-header">
                 <h5 class="card-title"><?= $title; ?></h5>
                 <div class="card-tools">
                     <a href="<?= base_url('user') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
                 </div>
             </div>
             <div class="card-body">

                 <div class="row">
                     <div class="col-md-12">
                         <form method="post">
                             <div class="form-group">
                                 <label for="">Id User</label>
                                 <input type="number" name="id_user" id="id_user" class="form-control" placeholder="ID User">
                             </div>
                             <div class="form-group">
                                 <label for="">Id Outlet</label>
                                 <select name="id_outlet" id="id_outlet" class="form-control">
                                     <option value="">Pilih Outlet</option>
                                     <?php foreach ($outlet as $row) : ?>
                                         <option value="<?= $row['id_outlet'] ?>"><?= $row['nama'] ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="">Nama User</label>
                                 <input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="Nama User" required>
                             </div>
                             <div class="form-group">
                                 <label for="">Username</label>
                                 <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                             </div>
                             <div class="form-group">
                                 <label for="">Password</label>
                                 <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                             </div>
                             <div class="form-group">
                                 <label for="">Role</label>
                                 <select name="role" id="role" class="form-control">
                                     <option value="admin">Admin</option>
                                     <option value="kasir">Kasir</option>
                                     <option value="owner">Owner</option>
                                 </select>
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