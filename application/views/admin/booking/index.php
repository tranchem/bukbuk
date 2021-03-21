 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <a href=<?= base_url('admin/bôking_add') ?> class="float-right btn btn-success">Thêm mới</a>
     <h1 class="h3 mb-2 text-gray-800">Đặt bàn</h1>
     <div></div>
     <div class="form-group">
        <input class="form-control" type="datetime-local" />
     </div>

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
                                     <?=
                                        $item->status == 1 ? '<b class="text-success">Đã xác nhận</b>' : '<b class="text-danger">Chờ xử lý</b>'
                                        ?>
                                 </td>
                                 <td>
                                     <a href="<?= base_url('admin/booking_edit?id=' . $item->id_booking . '')  ?>" class="btn btn-info">Sửa</a>
                                     <a href="<?= base_url('admin/booking_delete?id='.$item->id_booking.'')  ?>" class="btn btn-danger">Xóa</a>
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