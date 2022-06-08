<?php

?>
<header>			
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-3 col-xs-6 col-sm-6 col-md-2 col-lg-2 order-md-0 order-0">
                    <div class="logo">
                        <a href="./index.php"><img src="./img/logo.png" alt=""></a>
                        
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 order-md-1 order-2">
                    <div class="form-seach-product">
                        <form action="/" method="post" id="search" role="form">
                            <select name="type" id="type" class="form-control" >
                                <option value="">Chọn danh mục</option>
                                <?php 
                                foreach ($listType as $ls)
                                {
                                    echo '<option value='.$ls['id'].'>'.$ls['name'].'</option>';
                                }
                                ?>
                            </select>
                            <div class="input-seach">
                                <input type="text" name="search" id="search" class="form-control">
                                <button  class="btn-search-pro"><i class="fa fa-search"></i></button>
                            </div>
                            <div class="clear"></div>
                        </form>
                    </div>
                </div>
                <div class="col-9 col-xs-6 col-sm-6 col-md-4 col-lg-4 order-md-2 order-1" style=" display: flex; justify-content: flex-end;">
                <?php 
                if(isset($_SESSION['email'])==false)
                {
                    ?><div class="icon-cart" style="margin-left: 15px;">
                        <a href="index.php?controller=user&action=dangnhap" class="btn btn-primary dangxuat" >Đăng Nhập</a>
                    </div>
                    <div class="icon-cart" style="margin-left: 10px;">
                        <a href="index.php?controller=user&action=dangki" class="btn btn-primary dangxuat" >Đăng Kí</a>
                    </div><?php
                }
                else
                {
                    
                    ?>
                    <div class="icon-cart" style="margin-left: 10px; margin-top: 10px">
                        
                        <div class="btn-group">
                        <?php echo'<h5 style=" margin-top: 10px">'.$_SESSION['name'].'</h5> ';?>  
							<?php 
                            if($_SESSION['image']!= null)
                            {
                            echo '<img data-bs-toggle="dropdown" aria-expanded="false" style="margin-left: 10px; border-radius: 100px; width:50px ; height:50px" src="./uploads/'.$_SESSION['image'].'" alt="haha">';
                            }
                            else{
                                echo '<img data-bs-toggle="dropdown" aria-expanded="false" style="margin-left: 10px; border-radius: 100px; width:50px ; height:50px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqh30_JHQRPWX4VFRnz_LQKvZMU6kt9VaWMwF6VioJh8DMGyWCfT--Bf2UsPGS0OaH91k&usqp=CAU" alt="haha">';
                            }?>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item btn" href="index.php?controller=payment&action=profile">Thông tin </a></li>
                                <li><a class="dropdown-item" href="index.php?controller=payment&action=payment">Thanh Toán</a></li>
                                <?php if($_SESSION['role_id'] == 1)
                                {
                                    echo '<li><a class="dropdown-item" href="index.php?controller=user&action=dashboard">Administration</a></li>';
                                }?>
                                
                                <li style="display: flex; justify-content: center;"><a class="btn btn-primary btn-sm"  href="index.php?controller=user&action=dangnhap">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <?php
                }
                ?>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-header main-menu-header1" id="nav-mobile">
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        <i class="fas fa-bars" ></i>
        </button>
    </div>
    <div class="collapse" id="collapseExample">
        <div class="main-menu-header main-menu-header1" >
        <div id="nav-menu">
                <ul >
                    <li  <?php if(!$_GET) echo'class="current-menu-item"';?>><a href="./index.php">Trang chủ</a></li>
                    <li 
                    <?php 
                    if($_GET){
                        if($_GET['action'] === 'gioithieu') 
                        echo'class="current-menu-item"';
                        else 
                        '';
                        
                        }
                    ?>
                    
                    
                    
                    ><a href="index.php?controller=index&action=gioithieu">Giới thiệu</a></li>
                    <li <?php 
                    if($_GET){
                        if($_GET['action'] === 'sanpham') 
                        echo'class="current-menu-item"';
                        else 
                        '';
                        
                        }
                    ?>
                    >
                        <a href="index.php?controller=index&action=sanpham">Sản phẩm</a>
                    </li>
                    <li 
                    <?php 
                    if($_GET){
                        if($_GET['action'] === 'tintuc') 
                        echo'class="current-menu-item"';
                        else 
                        '';
                        
                        }
                    ?>
                    ><a href="index.php?controller=index&action=tintuc">Tin tức</a></li>
                    <li><a href="https://www.manula.com/manuals/nhoms2vnpm/web-ban-laptop/1/vi/topic/h-ng-d-n-s-d-ng-web-ban-laptop">Hướng Dẫn</a></li>
                    
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="main-menu-header main-menu-header2">
        <div class="container">
            <div id="nav-menu">
                <ul>
                    <li  <?php if(!$_GET) echo'class="current-menu-item"';?>><a href="./index.php">Trang chủ</a></li>
                    <li 
                    <?php 
                    if($_GET){
                        if($_GET['action'] === 'gioithieu') 
                        echo'class="current-menu-item"';
                        else 
                        '';
                        
                        }
                    ?>
                    
                    
                    
                    ><a href="index.php?controller=index&action=gioithieu">Giới thiệu</a></li>
                    <li <?php 
                    if($_GET){
                        if($_GET['action'] === 'sanpham') 
                        echo'class="current-menu-item"';
                        else 
                        '';
                        
                        }
                    ?>
                    >
                        <a href="index.php?controller=index&action=sanpham">Sản phẩm</a>
                    </li>
                    <li 
                    <?php 
                    if($_GET){
                        if($_GET['action'] === 'tintuc') 
                        echo'class="current-menu-item"';
                        else 
                        '';
                        
                        }
                    ?>
                    ><a href="index.php?controller=index&action=tintuc">Tin tức</a></li>
                    <li><a href="https://www.manula.com/manuals/nhoms2vnpm/web-ban-laptop/1/vi/topic/h-ng-d-n-s-d-ng-web-ban-laptop">Hướng Dẫn</a></li>
                    
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</header>
<script type="text/javascript">
		$("#search").submit(function(e){
			e.preventDefault();
			let type = $("select[name='type']").val();
			let search = $("input[name='search']").val();
			
            if ((type == null || type == "") && (search == null || search == ""))
            {
                alert("Không được để trống");
                return;
            }
            else if((type != null && type != "") && (search != null && search != "") )
			{
                url = "index.php?controller=product&action=searchNameType&type="+type+"&search="+search;
			    window.location.replace(url);
                return;
				
			}
			else if(type != null || type != ""   )
			{
                if(search == null || search == "" )
                {
                    url = "index.php?controller=product&action=searchType&type="+type;
			        window.location.replace(url);
                    return;
                }
				
			}
			if(search != null || search != "")
			{
                if(type == null || type == "")
                {
                    url = "index.php?controller=product&action=searchName&search="+search;
			        window.location.replace(url);
                    return;
                }
				
			}
          
		
			
			
				  
			
			
							    
		});
    </script>