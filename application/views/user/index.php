 <div class="row">
     <div class="col-lg-12">
         <div class="card card-primary card-outline">
             <div class="card-header">
                 <h5 class="card-title"><?= $title; ?></h5>
                 <div class="card-tools">
                     <a href="<?= base_url('user/tambah') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
                 </div>
             </div>
             <div class="card-body">

                 <div class="row">
                     <div class="col-md-12">

                         <?php if ($message = $this->session->flashdata('message')) : ?>
                             <div class="alert alert-success">
                                 <p><?= $message ?></p>
                             </div>
                         <?php endif; ?>

                         <table class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th class="text-center">No</th>
                                     <th class="text-center">Nama User</th>
                                     <th class="text-center">Outlet</th>
                                     <th class="text-center">Username</th>
                                     <th class="text-center">Role</th>
                                     <th class="text-center">Aksi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($user as $row) : ?>
                                     <tr>
                                         <td class="text-center"><?= $no++ ?></td>
                                         <td class="text-center"><?= $row['nama_user'] ?></td>
                                         <td class="text-center"><?= $row['nama_outlet'] ?></td>
                                         <td class="text-center"><?= $row['username'] ?></td>
                                         <td class="text-center"><?= $row['role'] ?></td>
                                         <td class="text-center">
                                             <a class="btn btn-sm btn-warning" href="<?= base_url('user/ubah/') . $row['id_user'] ?>"><i class="fas fa-edit"></i></a>
                                             <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="<?= base_url('user/hapus/') . $row['id_user'] ?>"><i class="fas fa-trash"></i></a>
                                             <!-- <button onclick="hapusUser('<?= base_url('user/hapus/') . $row['id_user'] ?>')" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash"></i></button> -->
                                             <!-- <button class="btn btn-sm btn-danger" onclick="return hapusUser('<?= base_url('user/hapus/') . $row['id_user'] ?>')"><i class="fas fa-trash"></i></button> -->
                                         </td>
                                     </tr>
                                 <?php endforeach; ?>
                             </tbody>
                         </table>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </div>
 <!-- /.row -->