


    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <?php require_once('./Views/header_view.php');?>
    <div class="container">
        <h1 style="color: #2961f3; text-align: center; margin-top: 20px; margin-bottom: 20px;">Tin Tức</h1>
        <div class="main-sec">
            <?php
                $count = 0;
                foreach($listLaptop as $laptop)
                {
                    $count++;
                    if($count%2!=0)
                    {
                        $status ="";
                        if($laptop['status']==0)
                        {
                            $status = "Sản phẩm nổi bật";
                        }
                        else if($laptop['status']==1)
                        {
                            $status = "Sản phẩm mới ra mắt";
                        }
                        echo '<div class="banner-wthree-info container">
                                    <div class="row">
                                        <div class="col-lg-5 banner-left-info">
                                            <h1 style="color: #2196f3;">'.$status.'</h1>
                                            <h3 class="chitiet-noibat">'.$laptop['name'].'</h3>
                                            <p class="chitiet-phu">CPU: '.$laptop['motatintuc'].'</p>
                                         
                                            <a href="index.php?controller=payment&action=view&id='.$laptop['id'].'" class="btn btn-danger shop">Xem chi tiết</a>
                                        </div>
                        
                                        <div class="col-lg-7 banner-img">
                                            <img src="'.$laptop['image'].'" alt="part image" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                    else{
                        $status ="";
                        if($laptop['status']==0)
                        {
                            $status = "Sản phẩm nổi bật";
                        }
                        else if($laptop['status']==1)
                        {
                            $status = "Sản phẩm mới ra mắt";
                        }
                        echo '
                        
                        
                        
                        <section class="banner-wthree-info container">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 ab-content-img">
                                    <img src="'.$laptop['image'].'" alt="">
                                </div>
                                <div class="col-md-4 ab-content text-center p-lg-5 p-3 my-lg-5">
                                <h1 style="color: #2196f3;">'.$status.'</h1>
                                <h3 class="chitiet-noibat">'.$laptop['name'].'</h3>
                                <p class="chitiet-phu">CPU: '.$laptop['motatintuc'].'</p>
                             
                                <a href="index.php?controller=payment&action=view&id='.$laptop['id'].'" class="btn btn-danger shop">Xem chi tiết</a>
                                    
                                    
                
                                </div>
                            </div>
                        </div>
                    </section>';
                    }
                }
            ?>
            
    
        
       
    </div>

    <?php  require_once('./Views/footter_view.php'); ?>