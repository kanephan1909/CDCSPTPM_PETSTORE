<?php $__env->startSection('content'); ?>
<!-- Tất cả sản phẩm -->
<div class="body">

    <div class="body__mainTitle">
        <h2>Từ khóa đã tìm kiếm: <?php echo e($tukhoa); ?></h2>
    </div>    

    <div>
        <div class="row">
            <?php $__currentLoopData = $searchs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="<?php echo e(route('detail', ['id' => $search->id_sanpham])); ?>">
                    <div class="product">
                        <div class="product__img">
                            <img src="<?php echo e($search->anhsp); ?>" alt="">
                        </div>
                        <div class="product__sale">
                            <div>
                                <?php if($search->giamgia): ?>
                                    -<?php echo e($search->giamgia); ?>%
                                <?php else: ?> Mới
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                <?php echo e($search->tensp); ?>

                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e(number_format($search->giasp, 0, ',', '.')); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e(number_format($search->giakhuyenmai, 0, ',', '.')); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>      
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
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
        
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Downloads\shopthucung_laravel\shopthucung_laravel\resources\views/pages/search.blade.php ENDPATH**/ ?>