<?php
    if (!isset($_SESSION["email"]))
    {
        header('Location: index.php?controller=user&action=dangnhap');
    }
    
?>
<?php  require_once('./Views/header_view.php'); ?>

<style>
    .thongtin-img{
        width: 200px;
        height: 200px;
        border-radius: 100px;
        margin-top: 50px;
    }
    .center{
        text-align: center;
    }
    .thongtin-check{
        margin-top: 20px;
    }
</style>
<body>
    <div class="container">
    <h1 style="color: #2961f3; text-align: center; margin-top: 20px;">Thông Tin</h1>
        <div class="center">
            <div class="">
                 
							<?php 
                            if($_SESSION['image']!= null)
                            {
                            echo '<img data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 100px; width:200px ; height:200px" src="'.$_SESSION['image'].'" alt="haha">';
                            }
                            else{
                                echo '<img data-bs-toggle="dropdown" aria-expanded="false" style=" border-radius: 100px; width:200px ; height:200px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqh30_JHQRPWX4VFRnz_LQKvZMU6kt9VaWMwF6VioJh8DMGyWCfT--Bf2UsPGS0OaH91k&usqp=CAU" alt="haha">';
                            }?>
            </div>
            <div class="thongtin-check">
                <p >
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#thongtin" aria-expanded="false" aria-controls="collapseExample">
                        Sửa Thông tin
                    </button>
                    &nbsp;
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#lichsu" aria-expanded="false" aria-controls="collapseExample">
                        Xem Lịch sử
                    </button>
                </p>
                <div class="collapse multi-collapse " id="thongtin">
                    <div class="card card-body">
                    <form method="POST" id="create" novalidate="novalidate" enctype="multipart/form-data">
                       	<div class="row" >
                        	<div class="col-md-6">
                        		<div class="form-group">
                                  <label class="row" style="font-size:20px;color:black;">Name<span class="text-danger">*</span></label>
                                  <input id="name"  type="text" class="form-control" name="name"  placeholder="Enter Name" value="<?=$_SESSION['name']?>">
                               </div>
                        	</div>
                        	
                        	<div class="col-md-6">
                        		<div class="form-group">
                                  <label class="row" style="font-size:20px;color:black;">Address<span class="text-danger">*</span></label>
                                  <input id="address"  type="text" class="form-control" name="address"  placeholder="Enter address" value="<?=$_SESSION['address']?>">
                               </div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group">
                                  <label class="row"  style="font-size:20px;color:black;">Phone<span class="text-danger">*</span></label>
                                  <input id="phone" type="text" class="form-control" name="phone"  placeholder="Enter phone" value="<?=$_SESSION['phone']?>" >
                               </div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group">
                                  <label class="row" style="font-size:20px;color:black;">Password<span class="text-danger">*</span></label>
                                  <input id="password"  type="password" class="form-control" name="password"  placeholder="Enter password"  value="<?=$_SESSION['password']?>">
                               </div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group">
                                  <label class="row" style="font-size:20px;color:black;">Confirm Password<span class="text-danger">*</span></label>
                                  <input id="confirmpassword"  type="password" class="form-control" name="confirmpassword"  placeholder="Enter confirm password" value="<?=$_SESSION['password']?>">
                               </div>
                        	</div>
                            <div class="col-md-6">
                        		<div class="form-group">
                                  <label class="row" style="font-size:20px;color:black;">Image<span class="text-danger">*</span></label>
                                  <input id="image"  type="url" class="form-control" name="image"  placeholder="Enter image" value="<?=$_SESSION['image']?>">
                               </div>
                        	</div>

                        	             
                        </div>
                        <div id="alert"></div>	  
                        <button class="btn btn-success" >Save &nbsp;<i class="fa fa-save"></i></button>                  
                    </form>
                    </div>
                </div>
                <div class="collapse multi-collapse " id="lichsu">
                    <div class="card card-body">
                        <div class="container">
                            
                            <table class="table container table-primary table-bordered ">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên SP</th>
                <th scope="col">Image</th>
                <th scope="col">Giá</th>
                <th scope="col">Trạng Thái</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $stt=0;
                foreach($listPayment as $payment)
                {
                    $stt++;
                    foreach($listLaptop as $laptop)
                    {
                        if($payment['product_id'] == $laptop['id'])
                        {
                            $status="";
                            $typepayment = "";
                            
                            if($payment['status']==1)
                            {
                                $status="Đã thanh toán";
                            
                            }
                            else if($payment['status']==2)
                            {
                                $status="Đang chờ";
                            }
                            else{
                                $status="Thanh toán thất bại";
                            }
                            echo '<tr>
                            <th scope="row">'.$stt.'</th>
                            <td>'.$laptop['name'].'</td>
                            <td><img style="width:150px" data-bs-toggle="modal" data-bs-target="#exampleModal'.$stt.'"         src="'.$laptop['image'].'" alt="laptop"></td>
                            <td>'.$laptop['giamgia'].'</td>
                            <td>'.$status.'</td></tr>';
                            echo '
                                <div  class="modal fade" id="exampleModal'.$stt.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable ">
                                    <div class="modal-content ">
                                        <div class="modal-body">
                                        <img style="width:50rem" src="'.$laptop['image'].'" alt="laptop">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                            
                    }
                       
                }
                
                
            ?>
            
        </tbody>
    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php  require_once('./Views/footter_view.php'); ?>
<script type="text/javascript">
		$("#create").submit(function(e){
			e.preventDefault();
			let name = $("input[name='name']").val();
			let email = $("input[name='email']").val();
			let password = $("input[name='password']").val();
			let confirmpassword = $("input[name='confirmpassword']").val();
			let address = $("input[name='address']").val();
			let phone = $("input[name='phone']").val();
			let image = $("input[name='image']").val();
			let status = $("select[name='status']").val();
			let role_id = $("select[name='role_id']").val();
			
			
			if(name == null || name == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid Name</strong>'); 
				$("input[name='name']").focus();
				return;
			}
			else if(name.length  < 5)
			{
				$("#alert").html('<strong class="text-danger">the length of the name i am missing is 5 characters</strong>'); 
				$("input[name='name']").focus();
				return;
			}
			
			else if(address == null || address == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid Address</strong>'); 
				$("input[name='address']").focus();
				return;
				
			}
			else if(address.length  < 5)
			{
				$("#alert").html('<strong class="text-danger">the length of the address i am missing is 5 characters</strong>'); 
				$("input[name='address']").focus();
				return;
			}
			else if(phone == null || phone == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid Phone</strong>'); 
				$("input[name='phone']").focus();
				return;
				
			}
			else if(phone.length  != 10)
			{
				$("#alert").html('<strong class="text-danger">Phone number must be 10 characters</strong>'); 
				$("input[name='phone']").focus();
				return;
			}
			else if(isNaN(phone))
			{
				$("#alert").html('<strong class="text-danger">Phone number must be a numeric</strong>'); 
				$("input[name='phone']").focus();
				return;
			}
			else if(password == null || password == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid Password</strong>'); 
				$("input[name='password']").focus();
				return;
				
			}
			else if(password.length  < 6)
			{
				$("#alert").html('<strong class="text-danger">the length of the password i am missing is 6 characters</strong>'); 
				$("input[name='phone']").focus();
				return;
			}
			else if(confirmpassword == null || confirmpassword == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid Confirmpassword</strong>'); 
				$("input[name='password']").focus();
				return;
				
			}
			else if(confirmpassword.length  < 6)
			{
				$("#alert").html('<strong class="text-danger">the length of the confirmpassword i am missing is 6 characters</strong>'); 
				$("input[name='confirmpassword']").focus();
				return;
			}
			else if(password != confirmpassword)
			{
				$("#alert").html('<strong class="text-danger">Password and Confirm password do not match </strong>'); 
				$("input[name='confirmpassword']").focus();
				return;
			}
			else if(image == null || image == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid image</strong>'); 
				$("input[name='image']").focus();
				return;
				
			}
			else
			{
				$("#alert").html('<strong class="text-success">successfully</strong>'); 
				
			}
						const url = $(this).attr("action");
						
						
			    		$.ajax({
				        
				        url,
				        method: "POST",
				        data: {
                            name : name,
                            address : address,
                            phone : phone,
                            image : image,
                            password : password

                        },
						
				        
                        
				        success: function (data) {
				        	alert("Cap nhat thanh cong");
				        	location.reload();
				        },
				   		});		   		    
		});

    </script>