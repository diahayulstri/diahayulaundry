 <div class="row">
     <div class="col-lg-12">
         <div class="card card-info card-outline">
             <div class="card-header">
                 <h5 class="card-title"><?= $title; ?></h5>
                 <div class="card-tools">
                 </div>
             </div>
             <div class="card-body">

                 <div class="row-mt-3">
                     <div class="col-mr-6">
                         <form action="<?= base_url('transaksi'); ?>" method="post">
                             <div class="input-group md-3">
                                 <input type="text" class="form-control" placeholder="Search for... " name="cari">
                                 <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
                                 </input>
                             </div>
                         </form>
                     </div>
                 </div>
                 <br>
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
                                     <th class="text-center">Tanggal</th>
                                     <th class="text-center">Kode Invoice</th>
                                     <th class="text-center">Nama Outlet</th>
                                     <th class="text-center">Nama Member</th>
                                     <th class="text-center">Nama User</th>
                                     <th class="text-center">Batas Waktu</th>
                                     <th class="text-center">Tanggal Bayar</th>
                                     <th class="text-center">Status Transaksi</th>
                                     <th class="text-center">Status Pembayaran</th>
                                     <th class="text-center">Total</th>
                                     <th class="text-center">Aksi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($transaksi as $row) : ?>
                                     <tr>
                                         <td class="text-center"><?= $no++ ?></td>
                                         <td class="text-center"><?= $row['tgl'] ?></td>
                                         <td class="text-center"><?= $row['kode_invoice'] ?></td>
                                         <td class="text-center"><?= $row['nama_outlet'] ?></td>
                                         <td class="text-center"><?= $row['nama_member'] ?></td>
                                         <td class="text-center"><?= $row['nama_user'] ?></td>
                                         <td class="text-center"><?= $row['batas_waktu'] ?></td>
                                         <td class="text-center"><?= $row['tgl_bayar'] ?></td>
                                         <td class="text-center"><?= $row['status'] ?></td>
                                         <td class="text-center"><?= $row['dibayar'] ?></td>
                                         <td class="text-center"><?= $row['total_bayar'] ?></td>
                                         <td class="text-center">
                                             <a class="btn btn-sm btn-warning" href="<?= base_url('transaksi/ubah/') . $row['id_transaksi'] ?>"><i class="fas fa-edit"></i></a>
                                             <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="<?= base_url('transaksi/hapus/') . $row['id_transaksi'] ?>"><i class="fas fa-trash"></i></a>
                                             <a href="<?= base_url() ?>transaksi/cetak/<?= $row['kode_invoice'] ?>" class="btn btn-success btn-sm"><i class="fas fa-print"></i></a>
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