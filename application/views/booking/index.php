
<div class="col-12 p-0 section-content-builder">
    <p>
    <div id="carouselSlider" class="col-12 p-0 carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselSlider" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#" title="a1">
                    <img src="<?= base_url('assets/wp-content/uploads/2019/09/Post-Anh_1900x600_2-02-v2.png') ?>" />
                </a>

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="fw-divider-space" style="padding-top: 50px;"></div>
    <div class="container bg-white pt-4 pb-4">
        <p>

            <!-- <iframe src="../chuong-trinh-khuyen-mai/form-dat-ban-website/index.html" height="550px" width="100%"> </iframe> -->
            <!-- <div class="visible-print-block container">
        </div> -->
        <div class="container hidden-print" style="padding-left: 100px; padding-right: 100px;" id="page-content">


            <div class="row">
                <div class="container" id="content-main">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 pull-right-pc">
                            <!--			
			 	
		-->
                            <div class="row" id="voucher_input">
                                <div class="col-sm-12">

                                    <h6 class="pl-3" style="font-size: 14px"><strong>THÔNG TIN ĐẶT BÀN ONLINE</strong></h6>
                                    <h7 class="pl-3" style="font-size: 12px">(Vui lòng đặt bàn trước giờ dùng bữa ít nhất 1 tiếng)</h7>
                                    <form style="font-size: 14px" method="post" role="form" id="thongtin_khachhang" action="booking/add" class="form-horizontal" data-bv-message="This value is not valid" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
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
                                                <input class="form-control" type="datetime-local" name="time" required/>
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
                                        <!-- <div class="form-group">

                                            <div class="col-sm-5"><input style="font-size: 14px" type="input_capt" class="form-control " required data-bv-notempty-message="Thông tin bắt buộc" name="input_capt" id="input_capt" placeholder="Nhập lại mã bên cạnh"></div>
                                            <div class="col-sm-7"><img src="captcha/captcha.jpg" class="img-responsive" /> </div>


                                        </div> -->



                                        <div class="text-center">
                                            <button type="submit" class="btn btn-default btn-submit  pull-center" name="datban" style="background-color:#D71A21;color:#fff;font-weight:bold;">ĐẶT BÀN NGAY</button>
                                        </div>

                                    </form>
                                </div>

                            </div>


                        </div>




                    </div>
                    <p>&nbsp;</p>

                </div><!-- Hết content-main -->

            </div>
        </div>
        </p>

    </div>
    <div class="col-12 box3 pb-5">
        <div class="container">

            <div class="row">

                <div class="col-12 col-sm-12 col-md-6 wow fadeInLeft text-center">
                    <img src="<?= base_url('assets/wp-content/uploads/2019/09/Web1.png') ?>" />
                </div>

                <div class="col-12 col-sm-12 col-md-6 text-center wow fadeInUp">
                    <img src="<?= base_url('assets/wp-content/uploads/2019/09/200.png') ?>" />
                </div>


            </div>

        </div>
    </div>
    </p>
</div>