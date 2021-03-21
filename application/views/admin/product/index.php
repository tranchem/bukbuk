
 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <a href=<?= base_url('admin/product_add') ?> class="float-right btn btn-success">Thêm mới</a>
     <h1 class="h3 mb-2 text-gray-800">Món ăn</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Danh sách món ăn</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Mã món ăn</th>
                             <th>Tên món ăn</th>
                             <th>Mã thực đơn</th>
                             <th>Ảnh</th>
                             <th>Thao tác</th>
                         </tr>
                     </thead>
                     <tbody>
                     <?php foreach ($product as $item) { ?>
                             <tr>
                                 <td><?= $item->id_product ?></td>
                                 <td><?= $item->name ?></td>
                                 <td><?= $item->id_menu ?></td>
                                 <td><?= $item->image ?> </td>
                              
                                 <td>
                                     <a href="<?= base_url('admin/product_edit?id=' . $item->id_product . '')  ?>" class="btn btn-info">Sửa</a>
                                     <a href="<?= base_url('admin/product_delete?id='.$item->id_product.'')  ?>" class="btn btn-danger">Xóa</a>
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