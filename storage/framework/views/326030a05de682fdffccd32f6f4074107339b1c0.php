<html>
    <head>
        <title>Cetak Laporan</title>
    </head>
    <body>
        <div class="form-group">
            <br>
            <p align="center"><b>Daftar Pengaduan</b></p>
            <table class="static" align="center" rules="all" style="width:95%;" border="1" cellpadding="7">
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Judul
                    <th>Tanggal Pengaduan</th>
                    <th>Tanggal Tanggapan</th>
                    <th>NIK Petugas</th>
                    <th>Nama Petugas</th>
                    <th>Status</th>
                </tr>
                <?php $__currentLoopData = $dtall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($dt->masyarakat->nik); ?></td>
                    <td><?php echo e($dt->masyarakat->nama); ?></td>
                    <td><?php echo e($dt->judul); ?></td>
                    <td><?php echo e($dt->tgl_aduan); ?></td>
                    <td><?php echo e($dt->tanggapan->tgl_tanggapan); ?></td>
                    <td><?php echo e($dt->tanggapan->petugas->nik); ?></td>
                    <td><?php echo e($dt->tanggapan->petugas->nama); ?></td>
                        <?php if($dt->status == "0"): ?>
                            <td style="color:yellow;">Belum Diproses</td>
                        <?php elseif($dt->status == "proses"): ?>
                            <td style="color:blue;">Diproses</td>
                        <?php elseif($dt->status == "selesai"): ?>
                            <td style="color:green;">Selesai</td>
                        <?php else: ?>
                            <td style="color:red;">Ditolak</td>
                        <?php endif; ?>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>

        <script type="text/javascript">
            window.print()
        </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\aduan\resources\views/admin/cetak.blade.php ENDPATH**/ ?>