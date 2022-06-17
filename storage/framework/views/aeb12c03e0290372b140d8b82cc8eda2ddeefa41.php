<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Edit Kereta
            </div>
            <div class="card-body">
                <form action="/kereta/<?php echo e($kereta->id); ?>" method="post" enctype="multipart/form-data">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>

                    <div class="mb-3">
                        <label class="form-label">Nama Kereta</label>
                        <input class="form-control" type="text" name="nama_kereta" value="<?php echo e($kereta->nama_kereta); ?>" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Warna Kereta</label>
                        <select class="form-select" aria-label="Default select example" name="warna_kereta">
                            <option hidden selected="<?php echo e($kereta->warna_kereta); ?>"><?php echo e($kereta->warna_kereta); ?></option>
                            <option value="Hitam">Hitam</option>
                            <option value="Merah">Merah</option>
                            <option value="Biru">Biru</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kereta</label>
                        
                        <textarea name="jenis_kereta" class="form-control" rows="3"><?php echo e($kereta->jenis_kereta); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga Kereta</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">RM</span><input
                                class="form-control" type="number" name="harga_kereta"
                                value="<?php echo e($kereta->harga_kereta); ?>" /></div>
                    </div>
                    <?php if($kereta->harga_kereta != null): ?>
                        <img src="/storage/<?php echo e($kereta->file_kereta); ?>" alt="" style="width: 50px">
                    <?php endif; ?>
                    <div class="mb-3">
                        <label class="form-label">Gambar Kereta</label>
                        <input class="form-control" type="file" name="file_kereta" />
                    </div>

                    <button class="btn" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maisarahmusa/Desktop/work/bootcamp/example/resources/views/kereta/edit.blade.php ENDPATH**/ ?>