<?php $__env->startSection('admin_content'); ?>
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Dashboard</strong></h1>

    <div class="row">
      <div class="col-xl-12 col-xxl-12 d-flex">
        <div class="w-100">
          <div class="row">
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-0">
                      <h5 class="card-title">Orders</h5>
                    </div>

                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i
                          class="align-middle"
                          data-feather="shopping-cart"
                        ></i>
                      </div>
                    </div>
                  </div>
                  <h1 class="mt-1 mb-3"><?php echo e($totalsOrders); ?></h1>
                  <div class="mb-0">
                    <span class="text-danger">
                      <i class="mdi mdi-arrow-bottom-right"></i> -2.25%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-0">
                      <h5 class="card-title">Members</h5>
                    </div>

                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i
                          class="align-middle"
                          data-feather="users"
                        ></i>
                      </div>
                    </div>
                  </div>
                  <h1 class="mt-1 mb-3"><?php echo e($totalsCustomer); ?></h1>
                  <div class="mb-0">
                    <span class="text-success">
                      <i class="mdi mdi-arrow-bottom-right"></i> 5.25%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-0">
                      <h5 class="card-title">Sales</h5>
                    </div>

                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i
                          class="align-middle"
                          data-feather="truck"
                        ></i>
                      </div>
                    </div>
                  </div>
                  <h1 class="mt-1 mb-3"><?php echo e($totalsSaleProducts); ?></h1>
                  <div class="mb-0">
                    <span class="text-danger">
                      <i class="mdi mdi-arrow-bottom-right"></i> -3.65%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-0">
                      <h5 class="card-title">Tổng thu nhập</h5>
                    </div>

                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i
                          class="align-middle"
                          data-feather="dollar-sign"
                        ></i>
                      </div>
                    </div>
                  </div>
                  <h1 class="mt-1 mb-3"><?php echo e($totalsMoney); ?></h1>
                  <div class="mb-0">
                    <span class="text-success">
                      <i class="mdi mdi-arrow-bottom-right"></i> 6.65%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
          <div class="card flex-fill">
            <div class="card-header">
              <h5 class="card-title mb-0">Orders</h5>
            </div>
            <table class="table table-hover my-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Phương thức tt</th>
                  <th>Ngày đặt</th>
                  <th>Ngày giao</th>
                  <th>Trạng thái</th>
                  <th>Địa chỉ giao hàng</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $getOrderView; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($order->id_dathang); ?></td>
          
                  <?php if($order->phuongthucthanhtoan == "COD"): ?>
                    <td class="d-none d-xl-table-cell"><div class="badge bg-secondary"><?php echo e($order->phuongthucthanhtoan); ?></div></td>
                  <?php elseif($order->phuongthucthanhtoan == "VNPAY"): ?>
                    <td class="d-none d-xl-table-cell"><div class="badge bg-primary"><?php echo e($order->phuongthucthanhtoan); ?></div></td>
                  <?php else: ?>
                  <td class="d-none d-xl-table-cell"><?php echo e($order->phuongthucthanhtoan); ?></td>
                  <?php endif; ?>
          
                  <td class="d-none d-xl-table-cell"><?php echo e($order->ngaydathang); ?></td>
                    <?php if($order->ngaygiaohang): ?>
                      <td class="d-none d-xl-table-cell"><?php echo e(date('d/m/Y', strtotime($order->ngaygiaohang))); ?></td>
                    <?php else: ?>
                      <td></td>
                    <?php endif; ?>
                  <td>
                    <?php if($order->trangthai == 'đang xử lý'): ?>
                      <span class="badge bg-primary"><?php echo e($order->trangthai); ?></span>
                    <?php elseif($order->trangthai == 'chờ lấy hàng'): ?>
                      <span class="badge bg-warning"><?php echo e($order->trangthai); ?></span>
                    <?php elseif($order->trangthai == 'đang giao hàng'): ?>
                      <span class="badge bg-success"><?php echo e($order->trangthai); ?></span>
                    <?php elseif($order->trangthai == 'giao thành công'): ?>
                      <span class="badge bg-success"><?php echo e($order->trangthai); ?></span>
                    <?php else: ?>
                      <span class="badge bg-danger"><?php echo e($order->trangthai); ?></span>
                    <?php endif; ?>
                  </td>
                  <td class="d-none d-md-table-cell"><?php echo e($order->diachigiaohang); ?></td>
                  <td class="d-none d-md-table-cell"><a href="<?php echo e(route('orders.edit', ['orders' => $order->id_dathang])); ?>" class="btn btn-primary">Edit</a></td>
                </tr>
                <tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>

       
    </div>

   

  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pkhan\OneDrive\Desktop\CDCS_2200008424_PhanLamNhatKhang\shopthucung_laravel\shopthucung_laravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>