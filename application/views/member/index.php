 <div class="row">
     <div class="col-lg-12">
         <div class="card card-primary card-outline">
             <div class="card-header">
                 <h5 class="card-title"><?= $title; ?></h5>
                 <div class="card-tools">
                     <a href="<?= base_url('member/tambah') ?>" class="btn btn-primary"><i class="fas fa-fw fa-users"></i> <sup><i class="fas fa-fw fa-plus"></i></sup></i> Tambah Pelanggan</a>
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
                                     <th class="text-center">Nama</th>
                                     <th class="text-center">Alamat</th>
                                     <th class="text-center">Jenis Kelamin</th>
                                     <th class="text-center">Telpon</th>
                                     <th class="text-center">Aksi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($member as $row) : ?>
                                     <tr>
                                         <td class="text-center"><?= $no++ ?></td>
                                         <td class="text-center"><?= $row['nama'] ?></td>
                                         <td class="text-center"><?= $row['alamat'] ?></td>
                                         <td class="text-center"><?= $row['jenis_kelamin'] ?></td>
                                         <td class="text-center"><?= $row['tlp'] ?></td>
                                         <td class="text-center">
                                             <a class="btn btn-sm btn-warning" href="<?= base_url('member/ubah/') . $row['id_member'] ?>"><i class="fas fa-edit"></i></a>
                                             <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="<?= base_url('member/hapus/') . $row['id_member'] ?>"><i class="fas fa-trash"></i></a>
                                             <!-- <a class="btn btn-sm btn-danger" onclick="return hapusMember('<?= base_url('member/hapus/') . $row['id_member'] ?>')"><i class="fas fa-trash"></i></a> -->
                                             <!-- <button onclick="hapusMember('<?= base_url('member/hapus/') . $row['id_member'] ?>')" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash"></i></button> -->
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