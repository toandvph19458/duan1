<?php
$id = $_GET['id'];
$query = "select * from hang_hoa where ma_hh =$id";
$product_update = getOne($query);
$queryCate = "select * from loai_hang";
$category = getAll($queryCate);
?>




<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Sản Phẩm > Update sản phẩm</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dashboard</a></li>
                    </ol>

                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-12">
                <div class="white-box">
                    <img width="100%" alt="user" src="../image/<?php echo $product_update['hinh_anh'] ?>">
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" method="post" enctype="multipart/form-data" action="../customer/update_product.php">
                            <input type="text" name="ma_hh" value="<?php echo $product_update['ma_hh'] ?>" hidden>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Tên Sản Phẩm</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" value="<?php echo $product_update['ten_hh'] ?>" class="form-control p-0 border-0" name="ten_hh">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="dongia" class="col-md-12 p-0">Đơn Giá</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number" value="<?php echo $product_update['don_gia'] ?>" class="form-control p-0 border-0" name="don_gia" id="example-email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="giamgia" class="col-md-12 p-0">Giảm giá</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number" value="<?php echo $product_update['giam_gia'] ?>" class="form-control p-0 border-0" name="giam_gia" id="example-email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Hình Ảnh</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="file" name="hinh_anh" class="form-control p-0 border-0">
                                    <input type="text" name="oldImage" value="<?php echo $product_update['hinh_anh'] ?>" hidden>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Ngày Nhập</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="date" value="<?php echo $product_update['ngay_nhap'] ?>" class="form-control p-0 border-0" name="ngay_nhap">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Mô Tả</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea rows="5" class="form-control pl-4 border-0" name="mo_ta">
                                    <?php echo $product_update['mo_ta'] ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-sm-12">Loại Hàng</label>

                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none p-0 border-0 form-control-line" name="ma_loai">
                                        <?php
                                        foreach ($category as $cate) :
                                        ?>
                                            <option <?php echo $cate['ma_loai'] == $product_update['ma_loai'] ? "selected" : ""; ?> value="<?php echo $cate['ma_loai'] ?>"> <?php echo $cate['ten_loai'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="submit">Update Sản Phẩm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        
    </div>
    
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a href="https://www.wrappixel.com/">wrappixel.com</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>