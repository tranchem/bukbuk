 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <!-- <a class="float-right btn btn-success">Thêm mới</a> -->
     <a href=<?= base_url('admin/booking') ?> class="float-right btn btn-success">Danh sách</a>
     <h1 class="h3 mb-2 text-gray-800">Đặt bàn</h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Thêm mới</h6>
         </div>
         <div class="card-body">
             <form style="font-size: 14px" method="post" role="form" id="thongtin_khachhang" action="<?= base_url('booking/add') ?>" class="form-horizontal" data-bv-message="This value is not valid" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                 <div class="form-group">
                     <div class="col-sm-12">
                         <select style="font-size: 14px" name="id_restaurant" id="id_restaurant" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc">
                             <!-- <option value="">Chọn 1 nhà hàng</option> -->
                             <?php foreach ($restaurant as $row) { ?>
                                 <option value="<?= $row->id_restaurant ?>"><?php echo $row->name; ?></option>
                             <?php } ?>
                             <!-- <optgroup label="Miền Bắc"> -->


                             <!-- <option value="233">Buk Buk Lê Đức Thọ</option>
                                                        <option value="210">Buk Buk Aeon Mall Long Biên</option>
                                                        <option value="361">Buk Buk Láng Hạ</option>

                                                        <option value="352">Buk Buk Savico Long Biên</option>
                                                        <option value="312">Buk Buk Bùi Thị Xuân</option>

                                                        <option value="362">Buk Buk Vincom Bắc Ninh</option> -->
                             <!-- </optgroup> -->
                             <!-- <optgroup label="Miền Nam">
                                                        <option value="224">Buk Buk Lê Văn Sỹ</option>
                                                        <option value="382">Buk Buk Vincom Tây Ninh</option>
                                                    </optgroup> -->
                         </select>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-12"> Thời gian đặt bàn</div>
                     <div class="col-sm-12">
                         <input class="form-control" type="datetime-local" name="time" required />
                     </div>
                 </div>
                 <!-- <div class="form-group">
                                            <div class="col-sm-4">
                                                <input style="font-size: 14px" type="text" name="datepicker" id="datepicker" placeholder="Ngày đặt bàn" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc">
                                            </div>
                                            <div class="col-sm-4">

                                                <select name="input_gio" id="input_gio" class="form-control" style="font-size: 14px">

                                                    <option value="10">10 Giờ</option>
                                                    <option value="11">11 Giờ</option>
                                                    <option value="12">12 Giờ</option>
                                                    <option value="17">17 Giờ</option>
                                                    <option value="18">18 Giờ</option>
                                                    <option value="19">19 Giờ</option>
                                                    <option value="20">20 Giờ</option>


                                                </select>
                                            </div>
                                            <div class="col-sm-4" class="form-control ">

                                                <select name="input_phut" id="input_phut" class="form-control" style="font-size: 14px">
                                                    <option value="00">00</option>
                                                    <option value="15">15</option>
                                                    <option value="30">30</option>
                                                    <option value="45">45</option>
                                                </select>

                                            </div>
                                        </div> -->
                 <div class="form-group">
                     <div class="col-sm-12">
                         Số khách
                         <select name="amount" id="amount" class="form-control">
                             <option value='1'>1</option>
                             <option value='2'>2</option>
                             <option value='3'>3</option>
                             <option value='4'>4</option>
                             <option value='5'>5</option>
                             <option value='6'>6</option>
                             <option value='7'>7</option>
                             <option value='8'>8</option>
                             <option value='9'>9</option>
                             <option value='10'>10</option>
                             <option value='11'>11</option>
                             <option value='12'>12</option>
                             <option value='13'>13</option>
                             <option value='14'>14</option>
                             <option value='15'>15</option>
                             <option value='16'>16</option>
                             <option value='17'>17</option>
                             <option value='18'>18</option>
                             <option value='19'>19</option>
                             <option value='20'>20</option>
                         </select>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-12">
                         <input style="font-size: 14px" type="text" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc" name="name" id="name" placeholder="Họ tên">
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-12">
                         <input style="font-size: 14px" type="text" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc" name="phone_number" id="phone_number" placeholder="Điện thoại di động">
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-12">
                         <input style="font-size: 14px" type="email" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc" data-bv-emailaddress-message="Không đúng định dạng email" name="email" id="email" placeholder="Email">
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-12">
                         Trạng thái
                         <div class="form-group">
                             <select name="status" id="status" class="form-control">
                                 <option value='1'>Chờ xử lý</option>
                                 <option value='2'>Đã xác nhận</option>
                                 <option value='3'>Thành công</option>
                                 <option value='4'>Thất bại</option>
                                 <option value='5'>Hủy</option>
                             </select>
                         </div>
                     </div>
                 </div>

                 <div class="text-center">
                     <button type="submit" class="btn btn-default btn-submit  pull-center" name="datban" style="background-color:#D71A21;color:#fff;font-weight:bold;">ĐẶT BÀN NGAY</button>
                 </div>

             </form>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->