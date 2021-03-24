 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <a href=<?= base_url('admin/restaurant_add') ?> class="float-right btn btn-success">Thêm mới</a>
     <h1 class="h3 mb-2 text-gray-800">Nhà hàng</h1>
     <div></div>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Danh sách nhà hàng</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Mã nhà hàng</th>
                             <th>Tên nhà hàng</th>
                             <th>Thao tác</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php foreach ($restaurant as $item) { ?>
                             <tr>
                                 <td><?= $item->id_restaurant ?></td>
                                 <td><?= $item->name ?></td>
                                 <td>
                                     <a href="<?= base_url('admin/restaurant_edit?id=' . $item->id_restaurant . '')  ?>" class="btn btn-info">Sửa</a>
                                     <a href="<?= base_url('admin/restaurant_delete?id='.$item->id_restaurant.'')  ?>" class="btn btn-danger">Xóa</a>
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