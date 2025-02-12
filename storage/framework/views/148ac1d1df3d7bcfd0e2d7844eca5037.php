<?php $__env->startSection('admin_content'); ?>

    <h1 class="h3 mb-3"><strong>Từ khóa đã tìm kiếm: <?php echo e($tukhoa); ?></strong></h1>

    <div class="d-flex justify-content-between">
        <a class="btn btn-primary" href="<?php echo e(route('product.create')); ?>">Thêm sản phẩm</a>
      
        <form action="<?php echo e(route('adminSearch')); ?>" method="GET" class="d-flex">
            <input type="text" value="" placeholder="Nhập để tìm kiếm..." name="tukhoa" class="form-control" style="width: unset;" required>
            <button class="btn btn-primary" type="submit">
              <i class="align-middle" data-feather="search"></i> 
            </button>
        </form>
      
      </div>

    <table class="table">
        <thead>
            <tr>
            <th>Tên sp</th>
            <th>Hình</th>
            <th>Số lượng</th>
            <th>giá</th>
            <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $searchs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($product->tensp); ?></td>
            <td><img src="<?php echo e(asset($product->anhsp)); ?>" width="120" height="120" alt=""></td>
            <td><?php echo e($product->soluong); ?></td>
            <td><?php echo e($product->giasp); ?></td>
            <td colspan="2">
                <a href="<?php echo e(route('product.edit', ['product' => $product])); ?>" class="btn btn-warning mb-2">Edit</a>
                <form method="post" action="<?php echo e(route('product.destroy', ['product' => $product])); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <input type="submit" class="btn btn-danger" value="Delete"
                    onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')">
                </form>
            </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item <?php if($searchs->currentPage() === 1): ?> disabled <?php endif; ?>">
                <a class="page-link" href="<?php echo e($searchs->url(1)); ?>&tukhoa=<?php echo e($tukhoa); ?>">First</a>
            </li>
            <li class="page-item <?php if($searchs->currentPage() === 1): ?> disabled <?php endif; ?>">
                <a class="page-link" href="<?php echo e($searchs->previousPageUrl()); ?>&tukhoa=<?php echo e($tukhoa); ?>">Previous</a>
            </li>
            <?php for($i = 1; $i <= $searchs->lastPage(); $i++): ?>
                <li class="page-item <?php if($searchs->currentPage() === $i): ?> active <?php endif; ?>">
                    <a class="page-link" href="<?php echo e($searchs->url($i)); ?>&tukhoa=<?php echo e($tukhoa); ?>"><?php echo e($i); ?></a>
                </li>
            <?php endfor; ?>
            <li class="page-item <?php if($searchs->currentPage() === $searchs->lastPage()): ?> disabled <?php endif; ?>">
                <a class="page-link" href="<?php echo e($searchs->nextPageUrl()); ?>&tukhoa=<?php echo e($tukhoa); ?>">Next</a>
            </li>
            <li class="page-item <?php if($searchs->currentPage() === $searchs->lastPage()): ?> disabled <?php endif; ?>">
                <a class="page-link" href="<?php echo e($searchs->url($searchs->lastPage())); ?>&tukhoa=<?php echo e($tukhoa); ?>">Last</a>
            </li>
        </ul>
    </nav>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Downloads\shopthucung_laravel\shopthucung_laravel\resources\views/admin/products/search.blade.php ENDPATH**/ ?>