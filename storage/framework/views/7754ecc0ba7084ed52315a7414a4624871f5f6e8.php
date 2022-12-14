<div class="card scroll">
    <div class="card-header bg-success">RESUME MEDIS PASIEN
    <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
    </button>
    </div>
    </div>

    <form action="" name="resumemedis">
        <div class="card-body">
        <?php $__currentLoopData = $ass_kep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <table class="table table-bordered table-sm text-xs">
                <tr>
                    <td>Tanggal</td>
                    <td><input type="text"  class="form-control" id="tglwaktu_assesmen" name="tglwaktu_assesmen" value="<?php echo e($d->kode_kunjungan); ?>"></td>
                    <td>Dokter</td>
                    <td><input type="text"  class="form-control" id="nama_dokter" name="nama_dokter" value="<?php echo e($d->nama_pasien); ?>"></td>
                </tr>
                <tr>
                    <td>RM</td>
                    <td><input type="text"  class="form-control" id="rm" name="rm" value="<?php echo e($d->no_rm); ?>"></td>
                    <td>PoliKlinik</td>
                    <td><input type="text"  class="form-control" id="unit" name="unit" value=""></td>
                </tr>
                <tr>
                    <td>Nama Pasien</td>
                    <td><input type="text"  class="form-control" id="nama" name="nama" value="<?php echo e($d->nama_pasien); ?>"></td>
                    <td>Diagnosa</td>
                    <td><input type="text"  class="form-control"></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><input type="text" readonly class="form-control" id="umur" name="umur" value=""></td>
                    <td>Jenis kelamin</td>
                    <td><input type="text" readonly class="form-control" id="jk" name="jk" value=""></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea type="text" readonly class="form-control" id="alamat" name="alamat" ></textarea>
                    </td>
                </tr>
            </table>
        </div>
        <table class="table table-md table-bordered ">
                   
                    <tbody>
                        <tr>
                        <td class="text-bold">Ringkasan Riwayat Penyakit</td>
                        <td><?php echo e($d->nama_pasien); ?></td>
                    </tr>
                    <tr>
                        <td class="text-bold">Ringkasan Riwayat Penyakit</td>
                        <td><?php echo e($d->nama_pasien); ?></td>
                    </tr>


                    </tbody>
                
            </div>
            </td>
    
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
</form>
</div><?php /**PATH C:\xampp\htdocs\e-RM\resources\views/erm/resumemedis.blade.php ENDPATH**/ ?>