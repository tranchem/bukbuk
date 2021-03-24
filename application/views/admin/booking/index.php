 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <a href=<?= base_url('admin/booking_add') ?> class="float-right btn btn-success">Thêm mới</a>
     <h1 class="h3 mb-2 text-gray-800">Đặt bàn</h1>
     <form method="GET" action="<?= base_url('admin/booking') ?>">
         <div class="row">
             <div class="col-lg-3">
                 Thời gian bắt đầu
                 <div class="form-group">
                     <input class="form-control" type="datetime-local" name="start_time" value="<?= $start_time ?>" />
                 </div>
             </div>
             <div class="col-lg-3">
                 Thời gian kết thúc
                 <div class="form-group">
                     <input class="form-control" type="datetime-local" name="end_time" value="<?= $end_time ?>" />
                 </div>
             </div>
             <div class="col-lg-2">
                 Nhà hàng
                 <div class="form-group">
                     <select name="id_restaurant" id="id_restaurant" class="form-control">
                         <option value='0' <?= $id_restaurant == 0 ? ' selected="selected"' : '' ?>>Tất cả</option>
                         <?php foreach ($restaurant as $row) { ?>
                             <option value="<?= $row->id_restaurant ?>" <?= $row->id_restaurant == $id_restaurant ? ' selected="selected"' : '' ?>><?php echo $row->name; ?></option>
                         <?php } ?>
                     </select>
                 </div>
             </div>
             <div class="col-lg-2">
                 Trạng thái
                 <div class="form-group">
                     <select name="status" id="status" class="form-control">
                         <option value='0' <?= $status == 0 ? ' selected="selected"' : '' ?>>Tất cả</option>
                         <option value='1' <?= $status == 1 ? ' selected="selected"' : '' ?>>Chờ xử lý</option>
                         <option value='2' <?= $status == 2 ? ' selected="selected"' : '' ?>>Đã xác nhận</option>
                         <option value='3' <?= $status == 3 ? ' selected="selected"' : '' ?>>Thành công</option>
                         <option value='4' <?= $status == 4 ? ' selected="selected"' : '' ?>>Thất bại</option>
                         <option value='5' <?= $status == 5 ? ' selected="selected"' : '' ?>>Hủy</option>
                     </select>
                 </div>
             </div>
             <div class="col-lg-2">
                 &nbsp;
                 <div class="form-group">
                     <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                 </div>
             </div>
         </div>
     </form>
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Danh sách đặt bàn</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Mã booking</th>
                             <th>Tên nhà hàng</th>
                             <th>Họ tên</th>
                             <th>Số điện thoại</th>
                             <th>Email</th>
                             <th>Thời gian</th>
                             <th>Số lượng</th>
                             <th>Trạng thái</th>
                             <th>Thao tác</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php foreach ($booking as $item) { ?>
                             <tr>
                                 <td><?= $item->id_booking ?></td>
                                 <td><?= $item->name_restaurant ?></td>
                                 <td><?= $item->name ?></td>
                                 <td><?= $item->phone_number ?></td>
                                 <td><?= $item->email ?></td>
                                 <td><?= $item->time ?></td>
                                 <td><?= $item->amount ?></td>
                                 <td>
                                     <?= $item->status == 1 ? '<b class="text-truncate">Chờ xử lý</b>' : '' ?>
                                     <?= $item->status == 2 ? '<b class="text-primary">Đã xác nhận</b>' : '' ?>
                                     <?= $item->status == 3 ? '<b class="text-success">Thành công</b>' : '' ?>
                                     <?= $item->status == 4 ? '<b class="text-warning">Thất bại</b>' : '' ?>
                                     <?= $item->status == 5 ? '<b class="text-danger">Hủy</b>' : '' ?>
                                 </td>
                                 <td>
                                     <a href="<?= base_url('admin/booking_edit?id=' . $item->id_booking . '')  ?>" class="btn btn-info">Sửa</a>
                                     <a href="<?= base_url('admin/booking_delete?id=' . $item->id_booking . '')  ?>" class="btn btn-danger">Xóa</a>
                                 </td>
                             </tr>
                         <?php } ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->