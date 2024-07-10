<?php
extract($sanphamchitiet);

if($gia_khuyen_mai==""){
    $gia_khuyen_mai=0;
}
$duong_dan_anh= "views/admin/view/upload/".$anh_sp;

?>


<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ </a></li>
                        <li class="breadcrumb-item"><a href="index.php?act=sanpham">Sản phẩm </a></li>
                    </ol>
                </div>
            </nav>

            <div class="container">
            <div class="product-single-container product-single-default" id="product-<?= $id_sp ?>">
    <div class="cart-message d-none">
        <strong class="single-cart-notice"><?= $ten_sp ?></strong>
        <span>sản phẩm của bạn đã được thêm vào giỏ hàng.</span>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-6 product-single-gallery">
            <!-- Product Images -->
            <div class="product-slider-container">
                <div class="label-group">
                    <div class="product-label label-hot"><?= $khuyen_mai ?></div>
                </div>

                <div class="product-single-carousel owl-carousel owl-theme show-nav-hover product-default">
                    <figure>
                        <div class="product-item">
                            <img class="product-single-image" src="views/admin/view/upload/<?= $anh_sp ?>"
                                data-zoom-image="views/admin/view/upload/<?= $anh_sp ?>" width="468" height="468"
                                alt="product" />
                        </div>
                    </figure>
                </div>
                <span class="prod-full-screen">
                    <i class="icon-plus"></i>
                </span>
            </div>

            <!-- Product Thumbnails -->
            
        </div>

        <div class="col-lg-7 col-md-6 product-single-details">
            <!-- Product Title -->
            <h1 class="product-title" data-id="<?= $id_sp ?>"> <?= $ten_sp ?></h1>

            <!-- Product Ratings -->
            <div class="ratings-container">
                <div class="product-ratings">
                    <span class="ratings" style="width:60%"></span>
                    <span class="tooltiptext tooltip-top"></span>
                </div>
                <a href="#" class="rating-link">( 6 Reviews )</a>
            </div>

            <!-- Price Box -->
            <hr class="short-divider">
            <div class="price-box product-price">

            <?php if($gia_khuyen_mai==0){ ?>

            <span class="new-price"><?= $gia_goc ?>.999.000 VND</span>
             <?php } else{?>
            <span class="old-price"><?= $gia_goc ?>.999.000 VND</span>
            <span class="new-price"><?= $gia_khuyen_mai ?> VND</span>
                                           
               <?php } ?>
               
                
            </div>

            <!-- Product Description -->
            <div class="product-desc">
                <p><?= $mota_sp ?></p>
            </div>

            <!-- Product Information -->
            <ul class="single-info-list">
                <li>Số lượng còn : <strong><?= $soluongtonkho ?></strong></li>
            </ul>

            <!-- Product Action -->
            <div class="product-action">
                <div class="product-single-qty">
                    <input class="horizontal-quantity form-control" type="" id="quantity" value="1" min="1">
                </div>
                <button class="btn btn-dark thesanphamchitiet add-cart mr-2 product-type-simple">
                 Thêm vào giỏ hàng
                </button>
                <a href="index.php?act=giohang" class="btn btn-gray view-cart d-none">Xem giỏ hàng </a>
            </div>

            <!-- Share and Wishlist -->
            <hr class="divider mb-0 mt-0">
            <div class="product-single-share mb-3">
                <label class="sr-only">Share:</label>
                <div class="social-icons mr-2">
                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                </div>
                <a href="wishlist.html" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i
                        class="icon-wishlist-2"></i><span>Add to Wishlist</span></a>
            </div>
        </div>
    </div>
</div>



         

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab"
                                href="#product-desc-content" role="tab" aria-controls="product-desc-content"
                                aria-selected="true">Mô tả </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-size" data-toggle="tab" href="#product-size-content"
                                role="tab" aria-controls="product-size-content" aria-selected="true">Thông tin khuyến mãi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content"
                                role="tab" aria-controls="product-tags-content" aria-selected="false">Thông tin ký thuật </a>
                        </li>

                        
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                            aria-labelledby="product-tab-desc">
                            <div class="product-desc-content font2">
                                <p><?=$mota_sp?></p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-size-content" role="tabpanel"
                            aria-labelledby="product-tab-size">
                            <div class="product-size-content">
                                <div class="row">

                                </div><!-- End .row -->
                            </div><!-- End .product-size-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-tags-content" role="tabpanel"
                            aria-labelledby="product-tab-tags">
                            <?=$tinh_nang_ky_thuat?>
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel"
                            aria-labelledby="product-tab-reviews">

                          

                           
                          

                        </div><!-- End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-single-tabs -->

                <div class="products-section pt-0">
                    <h2 class="section-title m-b-4 border-0">Sản phẩm mới nhất</h2>
                  <div class="row">
                                
                        <div class="products-slider 5col owl-carousel owl-theme appear-animate" data-owl-options="{
                            'margin': 0
                        }" data-animation-name="fadeInUpShorter" data-animation-delay="200">

                        <?php
                         $tam= " - ";
                        foreach($dstop10 as $key => $value){ 
                                 $link = "index.php?act=chitietsanpham&id_sp=".$value['id_sp'];
                                ?>
                            <div class="product-default">
                                <figure>
                                    <a href="<?=$link?>">
                                        <img src="views/admin/view/upload/<?=$value['anh_sp']?>" width="280"
                                            height="280" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <!-- <div class="category-list">
                                        <a href="category.html" class="product-category">Categor</a>
                                    </div> -->
                                    <h3 class="product-title" data-id="<?=$value['id_sp']?>">
                                        <a href="<?=$link?>"><?=$value['ten_sp']?></a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <?php if($value['gia_khuyen_mai']==""){
                                            ?>
                                        <span class="product-price"> <?=$value['gia_goc']?>.999.000 VND</span>
                                        <?php } else{?>
                                            <span class="product-price"> <s style="font-size: small; opacity: 0.6;"><?=$value['gia_goc']?>.999.000 VND</s></span>
                                        <span class="product-price-new">  <?=$tam?> <?=$value['gia_khuyen_mai']?> VND</span>
                                           
                                            <?php } ?>
                                    </div><!-- End .price-box -->
                                    <div class="product-action">
                                        
                                        <a href="#" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                                <a href="" id="addToCartBtn" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i><span>Thêm giỏ hàng </span></a>
                                        <a href="" class="btn-quickview"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div><!-- End .product-details -->
                            </div>
                       <?php }?>

                        </div>
                    </div>
                </div>
              
            </div><!-- End .container -->
        </main><!-- End .main -->
     
       


