<?php require_once('./Views/header_view.php');?>
    <h1 style="color: #2961f3; text-align: center; margin-top: 20px; margin-bottom: 20px;">Sản Phẩm</h1>
    <div id="content">
        <div class="container">
            <div class="content-product-box">
                <div class="row" >
                     <?php
                                
                                foreach ($result as $sanpham) {
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
                <nav aria-label="Page navigation example" id="pageCurrent">
                        <ul class="pagination pageCurrent" id="mainData">
                            <?php
                            echo '<li class="page-item"><a class="page-link" href="?index.php?controller=index&action=sanpham&page=' . $curent_pagePrevious . '">Trước</a></li>';
                            for ($i = 1; $i <= $pages; $i++) {
                                echo ' <li class="page-item"><a class="page-link" href="?index.php?controller=index&action=sanpham&page=' . $i . '">' . $i . '</a></li>';
                            }
                            echo ' <li class="page-item"><a class="page-link" href="?index.php?controller=index&action=sanpham&page=' . $curent_pageNext . '">Sau</a></li>';
                            ?>
                        </ul>
                    </nav>
            </div>
        </div>
    </div>
<?php  require_once('./Views/footter_view.php'); ?>
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