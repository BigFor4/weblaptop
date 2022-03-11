
<?php
ob_start();

	require_once('./Views/header_view.php');
	
	foreach ($result as $sanpham) {
		if (!isset($_SESSION["email"]))
		{
			echo'
			<div class="container mt-50 mb-50">
				<div class="row">
					<div class="col-md-6">
						<ul class="slides">
							<li data-thumb="'.$sanpham['image'].'">
								<div class="thumb-image" > <img src="'.$sanpham['image'].'" data-imagezoom="true"
										class="img-responsive"> </div>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<h1 class="chitiet-noibat">'.$sanpham['name'].'</h1>
						<h3 class="chitiet-noibat">CPU: '.$sanpham['cpu'].'</h3>
						<h3 class="chitiet-noibat">RAM: '.$sanpham['ram'].'</h3>
						<h3 class="chitiet-noibat">'.$sanpham['giamgia'].' * <del>'.$sanpham['price'].'</del></h3>
						<h6 class="chitiet-phu">Màn hình: '.$sanpham['manhinh'].'</h6>
						<h6 class="chitiet-phu">'.$sanpham['thongtinkhac'].'</h6>
						<p class="chitiet-phu">Card màn hình: '.$sanpham['card'].'</p>
						<p class="chitiet-phu">Thông tin Pin: 3-cell Li-ion, 41 Wh</p>
						<p class="chitiet-phu">Hệ điều hành: '.$sanpham['hedieuhanh'].'</p>
						<p class="chitiet-phu">Xuất xứ: '.$sanpham['xuatxu'].'</p>
						<p class="chitiet-phu">Trọng lượng: '.$sanpham['trongluong'].'</p>
						<p class="chitiet-phu">Kích thước:  '.$sanpham['kichthuoc'].'</p>
						<h4 class="chitiet-noibat">Thời điểm ra mắt: 2021</h4>
						<ul class="bann-btns">
						
						<li><a href="index.php?controller=user&action=dangnhap"  class="btn btn-success">Đặt hàng</a></li>
						</ul>
					</div>
				</div>
			</div>
		';
		}
		else{
			echo'
			<div class="container mt-50 mb-50">
				<div class="row">
					<div class="col-md-6">
						<ul class="slides">
							<li data-thumb="'.$sanpham['image'].'">
								<div class="thumb-image"> <img src="'.$sanpham['image'].'" data-imagezoom="true"
										class="img-responsive"> </div>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<h1 class="chitiet-noibat">'.$sanpham['name'].'</h1>
						<h3 class="chitiet-noibat">CPU: '.$sanpham['cpu'].'</h3>
						<h3 class="chitiet-noibat">RAM: '.$sanpham['ram'].'</h3>
						<h3 class="chitiet-noibat">'.$sanpham['giamgia'].' * <del>'.$sanpham['price'].'</del></h3>
						<h6 class="chitiet-phu">Màn hình: '.$sanpham['manhinh'].'</h6>
						<h6 class="chitiet-phu">'.$sanpham['thongtinkhac'].'</h6>
						<p class="chitiet-phu">Card màn hình: '.$sanpham['card'].'</p>
						<p class="chitiet-phu">Thông tin Pin: 3-cell Li-ion, 41 Wh</p>
						<p class="chitiet-phu">Hệ điều hành: '.$sanpham['hedieuhanh'].'</p>
						<p class="chitiet-phu">Xuất xứ: '.$sanpham['xuatxu'].'</p>
						<p class="chitiet-phu">Trọng lượng: '.$sanpham['trongluong'].'</p>
						<p class="chitiet-phu">Kích thước:  '.$sanpham['kichthuoc'].'</p>
						<h4 class="chitiet-noibat">Thời điểm ra mắt: 2021</h4>
						<ul class="bann-btns">						
							<li><button onclick="dathang('.$sanpham['id'].')"  class="btn btn-success">Đặt hàng</button></li>
						</ul>
					</div>
				</div>
			</div>
		';
		}
		
	}
	
	
?>
<div class="container">
<div class="col-md-12 col-xs-12" style="background-color: whitesmoke;">
                            <div class="fb-share-button" data-href="//facebook.com/Rì-viu-phim-103418141715660/"
                                data-layout="button_count" data-size="small" data-mobile-iframe="true"><a
                                    class="fb-xfbml-parse-ignore" target="_blank"
                                    href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Friviuphim.net%2Fshop%2F&amp;src=sdkpreparse">Chia
                                    sẻ</a></div>
                            <div class="fb-follow" data-href="//facebook.com/Rì-viu-phim-103418141715660" data-width="400px"
                                data-layout="button_count" data-size="small" data-show-faces="false"></div>
                            <div class="fb-send" data-href="//facebook.com/Rì-viu-phim-103418141715660/"></div>
                            <div class="fb-comments" data-href="http://127.0.0.1:8000/detail/<?=$result[0]['id'] ?>"
                                data-width="1090" data-numposts="10" data-order-by="social"></div>

                        </div>
</div>

<?php  require_once('./Views/footter_view.php');?>
<script type="text/javascript">
		
		function dathang(id){
			option = confirm('Bạn có muốn đặt món đồ này không này không?')
			if(!option) {
				return;
			}
			
			$.ajax({	        
				url : "index.php?controller=payment&action=dathang",
				method: "POST",
				data: {  
                   id : id   
                },
                success: function (data) {
				    url = "index.php?controller=payment&action=payment";
					window.location.replace(url);	
				},		
        	})
		}
</script>
