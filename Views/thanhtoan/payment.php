<?php require_once('./Views/header_view.php');?>

<style>
    @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);


        .container-modal {
            position: relative;
            height: 100vh;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            background: url('https://images.unsplash.com/photo-1544006659-f0b21884ce1d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGxhcHRvcHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80');
            background-position: center;
            background-size: cover;

        }
        .credit-info {
            background: #DB6574;
            height: 100%;
            width: 100%;
            color: #eee;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            font-size: 14px;
            font-size: .9rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            box-sizing: border-box;
            padding-left: 25px;
            padding-right: 25px;
            position: relative;
            border-radius: 50px;
            background: url('https://images.unsplash.com/photo-1544006659-f0b21884ce1d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGxhcHRvcHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80');
            background-position: center;
            background-size: cover;
        }

        .credit-card-image {
            display: block;
            max-height: 80px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 35px;
            margin-bottom: 15px;
        }
        .window {
                width: 80%;
                display: block;
                border-radius: 0px;
        }

        .credit-info-content {
            margin-top: 25px;
            display: flex;
            width: 100%;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }   

        @media (max-width: 600px) {
            .window {
                width: 100%;
                height: 100%;
                display: block;
                border-radius: 0px;
            }

            .credit-info {
                width: 100%;
                height: auto;
                padding-bottom: 100px;
                border-radius: 0px;
            }

            .pay-btn {
                border-radius: 0px;
            }
        }
        .input-card{
            width:150%;
        }
        .input-table{
            width:100%;
        }
        h2{
            color: white;
        }
        .thanhtoan{
            margin-top: 50px;
        }
        .img-laptop{
            width:150%; 
            height:200px;
            border-radius:20px;
        }
        @media (min-width: 1200px){
            .modal-xl {
                max-width: 1155px;
            }
        }
</style>
<div class="container">
   
    <h1 style="color: #2961f3; text-align: center; margin-top: 20px; margin-bottom: 20px;">Thanh Toán</h1>
    <table class="table container table-primary table-bordered " style="text-align: center;">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên SP</th>
                <th scope="col">Image</th>
                <th scope="col">Giá</th>
                <th scope="col">Trạng Thái</th>
                <th scope="col">Đặt Hàng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stt=0;
                foreach($listUser as $user)
                {
                    $stt++;
                    foreach($listLaptop as $laptop)
                    {
                        if($user['product_id'] == $laptop['id'])
                        {
                            $status="";
                            $typepayment = "";
                            if($user['status']==0)
                            {
                                $status="Chưa thanh toán";
                                $typepayment = "Thanh toán";
                            }
                            else if($user['status']==1)
                            {
                                $status="Đã thanh toán";
                            
                            }
                            else if($user['status']==2)
                            {
                                $status="Đang chờ";
                            }
                            else{
                                $status="Thanh toán thất bại";
                            }
                            echo '<tr>
                            <th scope="row">'.$stt.'</th>
                            <td>'.$laptop['name'].'</td>
                            <td><img style="width:150px" data-bs-toggle="modal" data-bs-target="#exampleModal'.$stt.'"                 src="./uploads/'.$laptop['image'].'" alt="laptop"></td>
                            <td>'.$laptop['giamgia'].'</td>
                            <td>'.$status.'</td>';
                            echo '
                                 <div  class="modal fade" id="exampleModal'.$stt.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable ">
                                        <div class="modal-content ">
                                            <div class="modal-body">
                                            <img style="width:50rem" src="./uploads/'.$laptop['image'].'" alt="laptop">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
   
                            ';
                            if($typepayment =="")
                            {
                                echo '<td></td>
                                </tr>';
                            }
                            else{
                                echo '<td><a  href="index.php?controller=payment&action=thanhtoan&id='.$user['order_id'].'&product_id='.$laptop['id'].'" class="btn btn-success">Thanh toán</a>
                                <button  class="btn btn-danger" onclick="deleteorder('.$user['order_id'].')">Hủy đặt hàng</button></td>
                                </tr>';
                            }
                            
                        }
                    }
                }
                
            ?>
            
        </tbody>
    </table>

</div>


<?php  require_once('./Views/footter_view.php');?>
<script type="text/javascript">
      function deleteorder(id){
        option = confirm('Bạn muốn hủy đặt sản phảm này không?')
        if(!option) {
          return;
        }
        
        $.ajax({	        
          url : "index.php?controller=laptop&action=disorder",
          method: "POST",
          data: {  
                    id : id   
                  },
                  success: function (data) {
                    alert("Hủy đặt hàng thành công");
                    location.reload();
          },		
            })
      }
      
    </script>
    