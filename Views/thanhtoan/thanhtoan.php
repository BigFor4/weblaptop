
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
    </style>

    <div class='container-modal'>
        <div class='window'>
            <div class="row">
                <div class="col-5">
                    <div class='credit-info'>
                        <form id="postPayment" method="post" >
                            <div class='credit-info-content'>
                                <div>
                                    <img class= "img-laptop" src='<?php echo $listLaptop[0]['image'] ?>' >
                                </div>
                                <div>
                                        <h5>Name:<?php echo $listLaptop[0]['name'] ?></h5>
                                    
                                        <h5>Type:<?php echo $listType[0]['name'] ?></h5>
                                    
                                        <h5>Ram:<?php echo $listLaptop[0]['ram'] ?></h5>
                                    
                                        <h5>CPU:<?php echo $listLaptop[0]['cpu'] ?></h5>
                                    
                                        <h5>Card:<?php echo $listLaptop[0]['card'] ?></h5>
                                    
                                        <h5>Weight:<?php echo $listLaptop[0]['trongluong'] ?></h5>
                                    
                                        <h5>Guarantee:<?php echo $listLaptop[0]['baohanh'] ?>Month</h5>
                                    
                                        <h5>Origin:<?php echo $listLaptop[0]['xuatxu'] ?> </h5>
                                    
                                        <h5>Operating System :<?php echo $listLaptop[0]['hedieuhanh'] ?> </h5>
                                    
                                        <h5>Price:<?php echo $listLaptop[0]['price'] ?> VND</h5>
                                     </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-7">
                    <div class='credit-info'>
                        <form  method="POST" id="create" novalidate="novalidate" enctype="multipart/form-data" >
                            <div class='credit-info-content'>
                            <input type="text" placeholder="Card Number" name="price"  class="form-control" hidden="true"  value="<?=$listLaptop[0]['price']?>">
                                <div>
                                    <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' 
                                    class='credit-card-image' id='credit-card-image'>
                                </div>
                                <div class="input-card">
                                    <h2>Card Number</h2>
                                    <div >
                                    <input type="text" placeholder="Card Number" name="cardnumber"  class="form-control">
                                    </div>
                                </div>
                                <div class="input-card">
                                    <h2>Card Holder</h2>
                                    <div>
                                    <input type="text" placeholder="Name"  name="name" " class="form-control">
                                    </div>
                                </div>
                                <div  class="input-card">
                                    <table  class="input-table" >
                                        <tr>
                                            <td> 
                                            <div >
                                                <h2>Expires</h2>
                                                <div>
                                                <input type="text" name="expires"  placeholder="MM/YYYY"  class="form-control">
                                                </div>
                                            </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h2>CVC</h2>
                                                    <div>
                                                    <input type="text" name="cvc"  placeholder="123" class="form-control">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="alert"></div>
                                
                                    <button  class='btn btn-danger thanhtoan'>Thanh Toán</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

    <?php  require_once('./Views/footter_view.php');?>
    <script type="text/javascript">
        var d = new Date();
        var n = d.getFullYear();
        var m = d.getMonth();
        const year = n;
		$("#create").submit(function(e){
			e.preventDefault();
			let cardnumber = $("input[name='cardnumber']").val();
            let name = $("input[name='name']").val();
            let expires = $("input[name='expires']").val();
            let cvc = $("input[name='cvc']").val();
            let yearsplit = expires.split("/");
            if(cardnumber == null || cardnumber == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid cardnumber</strong>'); 
				$("input[name='cardnumber']").focus();
				return;
			}
			else if(cardnumber.length  < 16 ||cardnumber.length>19 )
			{
				$("#alert").html('<strong class="text-danger">The length of the card code is from 16 to 19 characters </strong>'); 
				$("input[name='cardnumber']").focus();
				return;
			}
            else if(isNaN(cardnumber))
			{
				$("#alert").html('<strong class="text-danger">Invalid cardnumber.Cardnumber must be number</strong>'); 
				$("input[name='cardnumber']").focus();
				return;
			}
            else if(name == null || name == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid name</strong>'); 
				$("input[name='name']").focus();
				return;
			}
            else if(name.length  < 5)
			{
				$("#alert").html('<strong class="text-danger">the length of the name i am missing is 5 characters</strong>'); 
				$("input[name='name']").focus();
				return;
			}

            

            else if(expires == null || expires == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid expires</strong>'); 
				$("input[name='expires']").focus();
				return;
			}
            else if(expires.length != 7 )
			{
				$("#alert").html('<strong class="text-danger">Expires Includes 7 characters </strong>'); 
				$("input[name='expires']").focus();
				return;
			}
            else if(expires.indexOf("/")  == -1)
			{
				$("#alert").html('<strong class="text-danger">Expires must have / character </strong>'); 
				$("input[name='expires']").focus();
				return;
			}
            else if(isNaN(yearsplit[0]))
			{
				$("#alert").html('<strong class="text-danger">Invalid Month </strong>'); 
				$("input[name='expires']").focus();
				return;
			}
            else if(isNaN(yearsplit[1]))
			{
				$("#alert").html('<strong class="text-danger">Invalid Year </strong>'); 
				$("input[name='expires']").focus();
				return;
			}
            else if (Number(yearsplit[1]) > Number(year) + 5 || Number(yearsplit[1]) < Number(year)) {
                $("#alert").html('<strong class="text-danger">Invalid year</strong>');
                $("input[name='expires']").focus();
                return;
            } 
            else if (Number(yearsplit[0]) > 12 || Number(yearsplit[0]) < 0) {
                $("#alert").html('<strong class="text-danger">Invalid month</strong>');
                $("input[name='expires']").focus();
                return;
            }
            else if (Number(yearsplit[0]) < Number(m) && Number(yearsplit[1]) == Number(year)) {
                $("#alert").html('<strong class="text-danger">The card has expired</strong>');
                $("input[name='expires']").focus();
                return;
            }
            else if(cvc == null || cvc == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid cvc</strong>'); 
				$("input[name='cvc']").focus();
				return;
			}
            else if(isNaN(cvc))
			{
				$("#alert").html('<strong class="text-danger">CVC number must be a numeric</strong>'); 
				$("input[name='cvc']").focus();
				return;
			}
            else{
                $("#alert").html('<strong class="text-success">successfully</strong>'); 
            }
						const url = $(this).attr("action");
						const formData = new FormData(this);
			    		$.ajax({
				        url,
				        method: "POST",
                        data: formData,
                        dataType: 'html',
                        processData: false,
                        contentType: false,
				        success: function (data) {
				        	alert("Thanh toán thành công vui lòng chờ nhân viên kiểm xem cập nhật tại lịch sử giao dịch");
				        	window.location.replace("index.php");
				        },
				   		});		   		    
		});

    </script>