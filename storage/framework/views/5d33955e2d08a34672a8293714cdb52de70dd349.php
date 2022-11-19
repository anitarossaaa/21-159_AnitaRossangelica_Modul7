
<?php $__env->startSection('main'); ?>
<div class="row">
    <div class="container">
        <header class="d-flex flex-wrap py-3 mb-4 border-bottom" style="background-color: #B6E2A1;">
            <ul class="navbar-nav">
                <li class="nav-item" style="font-size: 20px; margin-left:20px;">Simple Siakad</li>
            </ul>

            <ul class="nav nav-pills ml-auto" style="margin-right: 10px;">
                <li class="nav-item"><a href="/" class="btn btn-success active">Data Mahasiswa</a></li>
                <li class="nav-item"><a href=" <?php echo e(url('mahasiswis/create')); ?>" class="nav-link" style="color: black;">Input Data</a></li>
                <li class="nav-item"><a href="/about" class="nav-link" style="color: black;">About Me</a></li>
            </ul>
        </header>

    </div>
    <div class="col-md-12 " style="margin-top: 50px; font-family:'Lucida Sans';">
        <h3 style="color: #557153;"> Data Mahasiswa</h3>
        <table class="table table-striped">
            <thead style="color: #557153;">
                <tr>
                    <!-- <th> ID </th> -->
                    <th> Nama </th>
                    <th> NRP </th>
                    <th> Alamat </th>
                    <th> Email </th>
                    <th colspan="2"> Action </th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $mahasiswis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <!-- <td><?php echo e($mahasiswi->id); ?></td> -->
                    <td><?php echo e($mahasiswi->nama); ?></td>
                    <td><?php echo e($mahasiswi->nrp); ?></td>
                    <td><?php echo e($mahasiswi->alamat); ?></td>
                    <td><?php echo e($mahasiswi->email); ?></td>
                    <td>
                        <form action="<?php echo e(url("mahasiswis/{$mahasiswi->id}")); ?>" method="Post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button style="border: 0;"><i class="bi bi-trash3" style="color: red;"></i> </button>
                        </form>
                    </td>
                    <td> <a class="nav-link active" href="<?php echo e(url("mahasiswis/{$mahasiswi->id}/edit")); ?>"><i class=" bi bi-pencil-square"></i></a>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mahasiswi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\modul7\resources\views/mahasiswis\index.blade.php ENDPATH**/ ?>