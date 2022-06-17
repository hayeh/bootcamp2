<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Edit Harga Kereta
            </div>
            <div class="card-body">
                <form action="/kereta/<?php echo e($harga->id); ?>/save-harga" method="post" enctype="multipart/form-data">
                    <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>

                    <div class="mb-3">
                        <label class="form-label">Harga Kereta</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">RM</span><input
                                class="form-control" type="number" name="harga_kereta"
                                value="<?php echo e($harga->harga_kereta); ?>" /></div>
                    </div>
                    <button class="btn" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maisarahmusa/Desktop/work/bootcamp/example/resources/views/kereta/harga_kereta.blade.php ENDPATH**/ ?>