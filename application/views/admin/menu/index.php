 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <a href=<?= base_url('admin/menu_add') ?> class="float-right btn btn-success">Thêm mới</a>
     <h1 class="h3 mb-2 text-gray-800">Thực đơn</h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Danh sách thực đơn</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Mã thực đơn</th>
                             <th>Tên thực đơn</th>
                             <th>Thao tác</th>
                         </tr>
                     </thead>
                     <tbody>
                     <?php foreach ($menu as $item) { ?>
                             <tr>
                                 <td><?= $item->id_menu ?></td>
                                 <td><?= $item->name ?></td>
                                
                              
                                 <td>
                                     <a href="<?= base_url('admin/menu_edit?id=' . $item->id_menu . '')  ?>" class="btn btn-info">Sửa</a>
                                     <a href="<?= base_url('admin/menu_delete?id='.$item->id_menu.'')  ?>" class="btn btn-danger">Xóa</a>
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