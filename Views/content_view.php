
<?php

    require_once('header_view.php');

    
?>
<div id="content">
        <div class="container">
            <div class="slider" style="transition: all 2s;">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="https://laptopbaominh.com/wp-content/uploads/2015/08/banner-n04.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://laptopbaominh.com/wp-content/uploads/2015/08/banner-n05.jpg" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="product-box">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 order-lg-0 order-1">
                        <div class="sidebar">
                            <div class="category-box">
                                <h3>Danh mục sản phẩm</h3>
                                <div class="content-cat">
                                    <ul>
                                    <?php 
                                        foreach ($listType as $ls)
                                        {
                                            
                                            echo '<li><i class="fa fa-angle-right"></i> <a href="index.php?controller=product&action=searchType&type='.$ls['id'].'">'.$ls['name'].'</a></li>';
                                        }
                                        ?>
                                        
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <h3>
                                    <i class="fa fa-bars"></i>
                                    Tin tức
                                </h3>
                                <div class="content">
                                    <ul>
                                        <?php
                                            $count=0;
                                            foreach($listTinTuc as $tintuc)
                                            {
                                                $status ="";
                                                $count++;
                                                if($tintuc['status']==0)
                                                {
                                                    $status = "Sản phẩm nổi bật";
                                                }
                                                else if($tintuc['status']==1)
                                                {
                                                    $status = "Sản phẩm mới ra mắt";
                                                }
                                                echo ' <li>
                                                <a href="index.php?controller=payment&action=view&id='.$tintuc['id'].'"><img src="'.$tintuc['image'].'" alt=""></a>
                                                <h4><a href="index.php?controller=payment&action=view&id='.$tintuc['id'].'">'.$status.'?</a></h4>
                                                
                                                </li>';
                                                if($count==2){
                                                    break;
                                                }
                                            }
                                        ?>
                                       
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <h3>
                                    <i class="fa fa-bars"></i>
                                    Quảng cáo
                                </h3>
                                <div class="content-banner">
                                    <a href="#">
                                        <img src="./cssjs/images/banner.png" alt="hay">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 order-lg-1 order-0">
                        <div class="product-section">
                            <h2 class="title-product">
                                <a href="#" class="title">Sản phẩm nổi bật</a>
                                <div class="bar-menu"><i class="fa fa-bars"></i></div>
                                
                                <div class="clear"></div>
                            </h2>
                            <div class="content-product-box">
                                <div class="row">
                                <?php
                                
                                            foreach ($noibat as $sanpham) {
                                                $count = 0;
                                                $status = "0";
                                                 $giamgia = round(((($sanpham['price']-$sanpham['giamgia'])/$sanpham['price'])*100),2);
                                                foreach($listLikeProduct as $like)
                                                {

                                                    if($like['product_id']===$sanpham['id'])
                                                    {
                                                        $count++;
                                                       
                                                    }
                                                   
                                                }
                                                if (!isset($_SESSION["email"]))
                                                {
                                                    echo'
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="item-product">
                                                            <div class="thumb">
                                                            <div style="height: 150px;"><img src="' . $sanpham['image'] . '" alt=""></div>                                                            <span class="sale">Giảm <br> '.$giamgia.'%</span>
                                                                <div class="action">
                                                                    <a href="index.php?controller=payment&action=view&id='.$sanpham['id'].'" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
                                                                    
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                            <div class="info-product">
                                                                <h4><a href="#">'.$sanpham['name'].'</a></h4>
                                                                <div class="price">
                                                                    <span class="price-current">'.$sanpham['giamgia'].'₫</span>
                                                                    <span class="price-old">'.$sanpham['price'].'₫</span>
                                                                </div>
                                                                <a href="index.php?controller=payment&action=view&id='.$sanpham['id'].'" class="view-more">Xem chi tiết</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ';
                                                }
                                               else {
                                                if(($like['product_id']===$sanpham['id']) && ($like['user_id']===$_SESSION['id']) )
                                                {
                                                    $status = $like['status'];
                                                }
                                                echo'
                                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-product">
                                                        <div class="thumb">
                                                        <div style="height: 150px;"><img src="' . $sanpham['image'] . '" alt=""></div>                                                            <span class="sale">Giảm <br> '.$giamgia.'%</span>
                                                            <div class="action">
                                                                <a href="index.php?controller=payment&action=view&id='.$sanpham['id'].'" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
                                                                
                                                               <button class="btn btn-warning" onclick="likesanpham('.$sanpham['id'].','.$status.')" style="width:92px;height:35px;color:white;"><i class="fa fa-heart"></i>'.$count.' Like</button>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                        <div class="info-product">
                                                            <h4><a href="#">'.$sanpham['name'].'</a></h4>
                                                            <div class="price">
                                                                <span class="price-current">'.$sanpham['giamgia'].'₫</span>
                                                                <span class="price-old">'.$sanpham['price'].'₫</span>
                                                            </div>
                                                            <a href="index.php?controller=payment&action=view&id='.$sanpham['id'].'" class="view-more">Xem chi tiết</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                ';
                                               }
                                            };
                                            
                                    ?>
                
                                                                                
                                </div>
                            </div>
                            <nav aria-label="Page navigation example" id="pageCurrent">
                                            <ul class="pagination pageCurrent" id="mainData">
                                            <?php
                                                    echo '<li class="page-item"><a class="page-link" href="?index.php?controller=products&action=page&page='.$curent_pagePrevious.'">Trước</a></li>';
                                                    for ($i=1; $i <= $pages; $i++) { 
                                                        echo ' <li class="page-item"><a class="page-link" href="?index.php?controller=products&action=page&page='.$i.'">'.$i.'</a></li>';
                                                    }
                                                    echo ' <li class="page-item"><a class="page-link" href="?index.php?controller=products&action=page&page='.$curent_pageNext.'">Sau</a></li>';
                                            ?>
                                            </ul>
                                        </nav>
                        </div>
                        <a href="http://www.bigfor4.epizy.com/"><img src="./img/banner.png" alt=""></a>
                        <br>
                        <br>
                        <div class="product-section">
                            <h2 class="title-product">
                                <a href="#" class="title">Sản Phẩm Mới</a>
                                <div class="bar-menu"><i class="fa fa-bars"></i></div>
                                
                                <div class="clear"></div>
                            </h2>
                            <div class="content-product-box">
                                <div class="row">
                                <?php
                                            foreach ($new as $sanpham1) {
                                                 $giamgia = round(((($sanpham1['price']-$sanpham1['giamgia'])/$sanpham1['price'])*100),2);
                                                if (!isset($_SESSION["email"])){
                                                    
                                                    echo'
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="item-product">
                                                            <div class="thumb">
                                                            <div style="height: 150px;"><img src="' . $sanpham1['image'] . '" alt=""></div>
                                                                <span class="sale">Giảm <br> '.$giamgia.'%</span>
                                                                <div class="action">
                                                                    <a href="index.php?controller=payment&action=view&id='.$sanpham1['id'].'" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                            <div class="info-product">
                                                                <h4><a href="#">'.$sanpham1['name'].'</a></h4>
                                                                <div class="price">
                                                                    <span class="price-current">'.$sanpham1['giamgia'].'₫</span>
                                                                    <span class="price-old">'.$sanpham1['price'].'₫</span>
                                                                </div>
                                                                <a href="index.php?controller=payment&action=view&id='.$sanpham1['id'].'" class="view-more">Xem chi tiết</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ';
                                                }
                                                else{
                                                    $count = 0;
                                                    $status = "0";
                                                    foreach($listLikeProduct as $like)
                                                    {
    
                                                        if($like['product_id']==$sanpham1['id'])
                                                        {
                                                            $count++;
                                                           
                                                        }
                                                        if(($like['product_id']==$sanpham1['id']) && ($like['user_id']==$_SESSION['id']) )
                                                        {
                                                            $status = $like['status'];
                                                        }
                                                    }
                                                    echo'
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                        <div class="item-product">
                                                            <div class="thumb">
                                                            <div style="height: 150px;"><img src="' . $sanpham1['image'] . '" alt=""></div>
                                                                <span class="sale">Giảm <br> '.$giamgia.'%</span>
                                                                <div class="action">
                                                                    <a href="index.php?controller=payment&action=view&id='.$sanpham1['id'].'" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
                                                                    <button class="btn btn-warning" onclick="likesanpham('.$sanpham1['id'].','.$status.')" style="width:92px;height:35px;color:white;"><i class="fa fa-heart"></i>'.$count.' Like</button>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                            <div class="info-product">
                                                                <h4><a href="#">'.$sanpham1['name'].'</a></h4>
                                                                <div class="price">
                                                                    <span class="price-current">'.$sanpham1['giamgia'].'₫</span>
                                                                    <span class="price-old">'.$sanpham1['price'].'₫</span>
                                                                </div>
                                                                <a href="index.php?controller=payment&action=view&id='.$sanpham1['id'].'" class="view-more">Xem chi tiết</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ';
                                                }
                                                
                                            };
                                            
                                    ?>
                                        
                                </div>
                            </div>
                            <nav aria-label="Page navigation example" >
                                <ul class="pagination pageCurrent">
                                <?php
                                        echo '<li class="page-item"><a class="page-link" href="?index.php?controller=products&action=page&page1='.$curent_pagePrevious1.'">Trước</a></li>';
                                        for ($i=1; $i <= $pages1; $i++) { 
                                            echo ' <li class="page-item"><a class="page-link" href="?index.php?controller=products&action=page&page1='.$i.'">'.$i.'</a></li>';
                                        }
                                        echo ' <li class="page-item"><a class="page-link" href="?index.php?controller=products&action=page&page1='.$curent_pageNext1.'">Sau</a></li>';
                                ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<?php
    require_once('footter_view.php');
?>
<script type="text/javascript">
		function likesanpham(product_id,status){
			
			if(status == "0")
            {
                status ="1";
                $.ajax({	        
				url : "index.php?controller=laptop&action=like",
				method: "POST",
				data: {  
                    product_id : product_id,
                    status : status
                },
                success: function (data) {
				        	alert("Cảm ơn quý khách đã thích sản phẩm của chúng tôi");
				        	location.reload();
				},		
        	})
            }
            else{
                status = "0";
                $.ajax({	        
				url : "index.php?controller=laptop&action=dislike",
				method: "POST",
				data: {  
                    product_id : product_id,
                    status : status
                },
                success: function (data) {
				        	alert("Đã bỏ thich sản phẩm");
				        	location.reload();
				},	
            })	
            }

			
		}
		
	</script>