 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <!-- <a class="float-right btn btn-success">Thêm mới</a> -->
     <a href=<?= base_url('admin/booking') ?> class="float-right btn btn-success">Danh sách</a>
     <h1 class="h3 mb-2 text-gray-800">Đặt bàn</h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Cập nhật</h6>
         </div>
         <div class="card-body">
             <form style="font-size: 14px" method="post" role="form" id="thongtin_khachhang" action="<?= base_url('admin/booking_edit_action') ?>" class="form-horizontal" data-bv-message="This value is not valid" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                <input type="hidden" name="id_booking" value=<?= $id_booking ?> />
                 <div class="form-group">
                     <div class="col-sm-12">
                         <select style="font-size: 14px" name="id_restaurant" id="id_restaurant" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc">
                             <!-- <option value="">Chọn 1 nhà hàng</option> -->
                             <?php foreach ($restaurant as $row) { ?>
                                 <option value="<?= $row->id_restaurant ?>" <?= $row->id_restaurant == $booking[0]->id_restaurant ? ' selected="selected"' : '' ?>><?php echo $row->name; ?></option>
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
                         <input class="form-control" type="datetime-local" name="time" required value="<?= date('Y-m-d\TH:i', strtotime($booking[0]->time)) ?>" />
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
                             <option value='1' <?= $booking[0]->amount == 1 ? ' selected="selected"' : '' ?>>1</option>
                             <option value='2' <?= $booking[0]->amount == 2 ? ' selected="selected"' : '' ?>>2</option>
                             <option value='3' <?= $booking[0]->amount == 3 ? ' selected="selected"' : '' ?>>3</option>
                             <option value='4' <?= $booking[0]->amount == 4 ? ' selected="selected"' : '' ?>>4</option>
                             <option value='5' <?= $booking[0]->amount == 5 ? ' selected="selected"' : '' ?>>5</option>
                             <option value='6' <?= $booking[0]->amount == 6 ? ' selected="selected"' : '' ?>>6</option>
                             <option value='7' <?= $booking[0]->amount == 7 ? ' selected="selected"' : '' ?>>7</option>
                             <option value='8' <?= $booking[0]->amount == 8 ? ' selected="selected"' : '' ?>>8</option>
                             <option value='9' <?= $booking[0]->amount == 9 ? ' selected="selected"' : '' ?>>9</option>
                             <option value='10' <?= $booking[0]->amount == 10 ? ' selected="selected"' : '' ?>>10</option>
                             <option value='11' <?= $booking[0]->amount == 11 ? ' selected="selected"' : '' ?>>11</option>
                             <option value='12' <?= $booking[0]->amount == 12 ? ' selected="selected"' : '' ?>>12</option>
                             <option value='13' <?= $booking[0]->amount == 13 ? ' selected="selected"' : '' ?>>13</option>
                             <option value='14' <?= $booking[0]->amount == 14 ? ' selected="selected"' : '' ?>>14</option>
                             <option value='15' <?= $booking[0]->amount == 15 ? ' selected="selected"' : '' ?>>15</option>
                             <option value='16' <?= $booking[0]->amount == 16 ? ' selected="selected"' : '' ?>>16</option>
                             <option value='17' <?= $booking[0]->amount == 17 ? ' selected="selected"' : '' ?>>17</option>
                             <option value='18' <?= $booking[0]->amount == 18 ? ' selected="selected"' : '' ?>>18</option>
                             <option value='19' <?= $booking[0]->amount == 19 ? ' selected="selected"' : '' ?>>19</option>
                             <option value='20' <?= $booking[0]->amount == 20 ? ' selected="selected"' : '' ?>>20</option>
                         </select>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-12">
                         <input style="font-size: 14px" type="text" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc" name="name" id="name" placeholder="Họ tên" value="<?= $booking[0]->name ?>">
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-12">
                         <input style="font-size: 14px" type="text" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc" name="phone_number" id="phone_number" placeholder="Điện thoại di động" value="<?= $booking[0]->phone_number ?>">
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-12">
                         <input style="font-size: 14px" type="email" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc" data-bv-emailaddress-message="Không đúng định dạng email" name="email" id="email" placeholder="Email" value="<?= $booking[0]->email ?>">
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-12">
                         Xác nhận đặt bàn
                         <div class="custom-control custom-switch">
                             <input type="checkbox" class="custom-control-input" id="customSwitch1" name="status" <?= $booking[0]->status == 1 ? 'checked' : '' ?>>
                             <label class="custom-control-label" for="customSwitch1"></label>
                         </div>
                     </div>
                 </div>
                 <!-- <div class="form-group">

                                            <div class="col-sm-5"><input style="font-size: 14px" type="input_capt" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc" name="input_capt" id="input_capt" placeholder="Nhập lại mã bên cạnh"></div>
                                            <div class="col-sm-7"><img src="captcha/captcha.jpg" class="img-responsive" /> </div>


                                        </div> -->



                 <div class="text-center">
                     <button type="submit" class="btn btn-default btn-submit  pull-center" name="datban" style="background-color:#D71A21;color:#fff;font-weight:bold;">Cập nhật</button>
                 </div>

             </form>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->