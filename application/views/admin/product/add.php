<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<!-- <a class="float-right btn btn-success">Thêm mới</a> -->
<a href=<?= base_url('admin/product') ?> class="float-right btn btn-success">Danh sách</a>
<h1 class="h3 mb-2 text-gray-800">Món ăn</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Cập nhật</h6>
    </div>
    <div class="card-body">
    <form style="font-size: 14px" method="post" role="form" id="thongtin_thucdon" action="<?= base_url('admin/product_add_action') ?>" class="form-horizontal" data-bv-message="This value is not valid" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
    <div class="form-group">
                     <div class="col-sm-12">
                         <select style="font-size: 14px" name="id_menu" id="id_menu" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc">
                             <!-- <option value="">Chọn 1 nhà hàng</option> -->
                             <?php foreach ($menu as $row) { ?>
                                 <option value="<?= $row->id_menu ?>"><?php echo $row->name; ?></option>
                             <?php } ?>
                         </select>
                     </div>
                 </div>
            
            <div class="form-group">
                <div class="col-sm-12">
                   <h5> Mã món ăn <input style="font-size: 14px" type="text" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc" name="id" id="id" placeholder="Mã món ăn" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <h5> Tên món ăn<input style="font-size: 14px" type="text" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc" name="name" id="name" placeholder="Tên món ăn">
                </div>
            </div>
   
           
            <div class="form-group">
                <div class="col-sm-12">
                    <h5> Ảnh<input style="font-size: 14px" type="text" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc" name="image" id="image" placeholder="Anh">
                </div>
            </div>


            <div class="text-center">
                <button type="submit" class="btn btn-default btn-submit  pull-center" name="thucdon" style="background-color:#D71A21;color:#fff;font-weight:bold;">Cập nhật</button>
            </div>

        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->