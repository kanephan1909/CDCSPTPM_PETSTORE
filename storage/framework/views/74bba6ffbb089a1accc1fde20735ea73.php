<?php $__env->startSection('admin_content'); ?>
<h1 class="h3 mb-3"><strong>Sửa đơn hàng</strong></h1>

    <div class="err">
        <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
    </div>

    <?php $__currentLoopData = $showusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $showuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mb-3">
            <div style="font-size: 18px;"><strong>Khách hàng:</strong> <?php echo e($showuser->hoten); ?></div>
            <div style="font-size: 18px;"><strong>Email:</strong> <?php echo e($showuser->email); ?></div>
            <div style="font-size: 18px;"><strong>Số điện thoại:</strong> <?php echo e($showuser->sdt); ?></div>
            <div style="font-size: 18px;"><strong>Địa chỉ nhận hàng:</strong> <?php echo e($showuser->diachi); ?></div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <form method="POST" action="<?php echo e(route('orders.update', ['orders' => $order->id_dathang])); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <div class="mb-3">
            <label for="id_dathang" class="form-label">ID đơn hàng</label>
            <input type="text" class="form-control" id="id_dathang" name="id_dathang" value="<?php echo e($order->id_dathang); ?>" disabled>
        </div>

        <div class="mb-3">
            <label for="ngaydathang" class="form-label">Ngày đặt</label>
            <input type="text" class="form-control" id="ngaydathang" name="ngaydathang" value="<?php echo e($order->ngaydathang); ?>" disabled>
        </div>

        <div class="mb-3">
            <label for="ngaygiaohang" class="form-label">Ngày giao</label>
            <?php if($order->ngaygiaohang): ?>
                <input type="date" class="form-control" id="ngaygiaohang" name="ngaygiaohang" value="<?php echo e(date('Y-m-d', strtotime($order->ngaygiaohang))); ?>">
            <?php else: ?>
                <input type="date" class="form-control" id="ngaygiaohang" name="ngaygiaohang" value="<?php echo e(date('Y-m-d')); ?>">
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="phuongthucthanhtoan" class="form-label">Phương thức thanh toán</label>
            <input type="text" class="form-control" id="phuongthucthanhtoan" name="phuongthucthanhtoan" value="<?php echo e($order->phuongthucthanhtoan); ?>" disabled>
        </div>

        <!-- Địa chỉ giao hàng -->


        <!-- Trạng thái đơn hàng -->
        <div class="mb-3">
            <label for="trangthai" class="form-label">Trạng thái</label>
            <select class="form-select" id="trangthai" name="trangthai" required>
                <option value="đang xử lý" <?php echo e($order->trangthai == 'đang xử lý' ? 'selected' : ''); ?>>Đang xử lý</option>
                <option value="chờ lấy hàng" <?php echo e($order->trangthai == 'chờ lấy hàng' ? 'selected' : ''); ?>>Chờ lấy hàng</option>
                <option value="đang giao hàng" <?php echo e($order->trangthai == 'đang giao hàng' ? 'selected' : ''); ?>>Đang giao hàng</option>
                <option value="giao thành công" <?php echo e($order->trangthai == 'giao thành công' ? 'selected' : ''); ?>>Giao thành công</option>
            </select>
        </div>

        <!-- Chi tiết sản phẩm -->
        <div class="mb-3">
            <table class="table table-hover my-0">
                <thead>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá gốc</th>
                   
                    <th>Giá khuyến mại</th>
                    <th>Tổng tiền</th>
                </thead>
                <tbody>
                    <?php
                        $totalPrice = 0; // Khởi tạo biến tổng tiền
                    ?>
                    <?php $__currentLoopData = $orderdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($orderdetail->tensp); ?></td>
                            <td><?php echo e($orderdetail->soluong); ?></td>
                            <td><?php echo e($orderdetail->giatien); ?></td>
                            <td><?php echo e($orderdetail->giakhuyenmai); ?></td>
                            <td><?php echo e($orderdetail->giakhuyenmai * $orderdetail->soluong); ?></td>
                        </tr>

                        <?php
                            $totalPrice += $orderdetail->giakhuyenmai * $orderdetail->soluong; // Cộng giá trị tổng tiền
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <!-- Tiền ước tính -->
        <div class="mb-3">
            <label for="tongiten" class="form-label">Tiền ước tính</label>
            <input type="text" class="form-control" id="tongiten" name="tongiten" value="<?php echo e($totalPrice); ?>" disabled>
        </div>

        <!-- Nút Submit và Hủy -->
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Cập nhật">
            &nbsp;<a class="btn btn-secondary" href="<?php echo e(URL::to('/admin/orders')); ?>">Hủy</a>
        </div>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pkhan\OneDrive\Desktop\shopthucung_laravel\shopthucung_laravel\resources\views/admin/orders/edit.blade.php ENDPATH**/ ?>