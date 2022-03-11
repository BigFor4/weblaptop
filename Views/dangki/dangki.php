<style>
	html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video {
		margin:0;
		padding:0;
		border:0;
		font-size:100%;
		font:inherit;
		vertical-align:baseline;
	}
	article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {
		display: block;
	}
	ol,ul {
		list-style:none;
		margin:0px;
		padding:0px;
	}
	blockquote,q {
		quotes:none;
	}
	blockquote:before,blockquote:after,q:before,q:after {
		content:'';
		content:none;
	}
	table {
		border-collapse:collapse;
		border-spacing:0;
	}
	.footer p {
		font-size: .9em;
		color: white;
		letter-spacing: 2px;
		text-align: center;
		padding: 40px;
	}

	.home{
		min-width: 500px;
		height: 50px;
		background-color: violet;
	}
	/* start editing from here */
	a {
		text-decoration:none;
	}
	.txt-rt {
		text-align:right;
	}/* text align right */
	.txt-lt {
		text-align:left;
	}/* text align left */
	.txt-center {
		text-align:center;
	/*-- W3Layouts --*/	
	}/* text align center */
	.float-rt {
		float:right;
	}/* float right */
	.float-lt {
		float:left;
	}/* float left */
	.clear {
		clear:both;
	}/* clear float */
	.pos-relative {
		position:relative;
	}/* Position Relative */
	.pos-absolute {
		position:absolute;
	}/* Position Absolute */
	.vertical-base {	
		vertical-align:baseline;
	}/* vertical align baseline */
	.vertical-top {	
		vertical-align:top;
	}/* vertical align top */
	nav.vertical ul li {	
		display:block;
	}/* vertical menu */
	nav.horizontal ul li {	
		display: inline-block;
	}/* horizontal menu */
	img {
		max-width:100%;
	}

	/*--- end reset code ---*/

	body {
		background:url(./img/banner.jpg) no-repeat;
		background-attachment:fixed;
		background-position:center;
		background-size:cover;
		-webkit-background-size:cover;
		-moz-background-size:cover;
		-o-background-size:cover;
		font-size: 3em;
		color: white;
		letter-spacing: 8px;
		font-weight: 500;
		font-family: 'Dosis', sans-serif;
		text-transform: uppercase;
		text-shadow: 5px 3px 5px #101010;
	}
	h1.w3ls{
		font-size: 3em;
		color: white;
		letter-spacing: 8px;
		font-weight: 500;
		font-family: 'Dosis', sans-serif;
		text-transform: uppercase;
		text-shadow: 5px 3px 5px #101010;
		text-align:center;
		color:#fff;
		padding:40px 0;
		/*-- w3layouts --*/ 
		text-transform:uppercase;
	}

	.content-w3ls {
		background-color:#202123;
		width:70%;
		margin:0 auto 50px;
		padding:0;
	}
	.content-w3ls .content-agile1 {
		width: 100%;
		float: left;
		background: url(./img/content.jpg) no-repeat;
		background-position: center;
		background-size: cover;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		-ms-background-size: cover;
		height: 555px;
	}
	h2.agileits1 {
		font-size: 40px;
		font-weight: normal;
		color: #fff;
		text-align: Center;
		padding: 200px 0 15px;
		text-transform: uppercase;
		font-family: 'Dosis', sans-serif;
		text-transform: uppercase;
		text-shadow: 5px 3px 5px #101010;
	}
	p.agileits2 {
		font-size: 15px;
		font-weight: normal;
		color: #fff;
		text-align: center;
		text-transform: capitalize;
	}
	.content-w3ls .content-agile2 {
		width: 50%;
		float: left;
		padding: 25px 0 0;
	}
	input#firstname,input#email,input#password1,input#password2 {
		width:350px;
		height:50px;
		padding:0 15px;
		color:black;
		font-size:17px;
		font-weight:200;
		background-color:transparent;
		/*-- w3layouts --*/ 
		border-bottom:none;
		border-top-color:transparent;
		border-left-color:transparent;
		border-right-color:transparent;
		margin:0 auto 20px;
		display:block;
		outline:none;
		background: rgba(255, 255, 255, 0.85);
		border-radius: 30px;
		font-family: 'Dosis', sans-serif;

		letter-spacing: 1px;
		margin-top: 35px;
	}
	input#firstname:focus,input#email:focus,input#password1:focus,input#password2:focus,input#firstname:hover,input#email:hover,input#password1:hover,input#password2:hover {
		color:black;
		border-bottom:none;
	}
	input::-webkit-input-placeholder {
	color:black !important;
	} 
	input:-moz-placeholder { /* Firefox 18- */
	color: black !important;  
	} 
	input::-moz-placeholder {  /* Firefox 19+ */
	color: black !important;  
	} 
	input:-ms-input-placeholder {  
	color: black !important;  
	}
	input:hover::-webkit-input-placeholder {
	color: #3970b0 !important;
	} 
	input:hover:-moz-placeholder { /* Firefox 18- */
	color:	#3970b0 !important;  
	} 
	input:hover::-moz-placeholder {  /* Firefox 19+ */
	color: #3970b0 !important;  
	} 
	input:hover:-ms-input-placeholder {  
	color: #3970b0 !important;  
	}
	a.register {
		width: 335px;
		margin: 30px auto;
		display: block;
		height: 50px;
		text-align: center;
		font-size: 17px;
		font-weight: normal;
		color: #fff;
		margin-top: -10px;
		background-color:#3970b0;
		border-color: transparent;
		font-family: 'Dosis', sans-serif;
		text-transform: uppercase;
		text-shadow: 5px 3px 5px #101010;
		/*-- w3ls --*/
		transition:all 0.5s ease-in-out;
		-webkit-transition:all 0.5s ease-in-out;
		-moz-transition:all 0.5s ease-in-out;
		-o-transition:all 0.5s ease-in-out;
		-ms-transition:all 0.5s ease-in-out;
		cursor:pointer;
	}
	.logo img {
		width: 200px;
		height: 150px;
		margin-right: 6px;
		margin: 30px auto;
		display: block;
		text-align: center;
		margin-top: -10px;
	}
	.thongtin{
		display: flex;
		justify-content: space-between;
	}

	input.register {
		width: 100px;
		margin: 50px auto;
		display: block;
		height: 40px;
		text-align: center;
		
		font-size: 17px;
		border-radius: 10px;
		font-weight: normal;
		color: #fff;
		background-color: #0d6efd;
		border-color: #0d6efd;
		
		font-family: 'Dosis', sans-serif;
		text-transform: uppercase;
		text-shadow: 5px 3px 5px #101010;
		/*-- w3ls --*/
		cursor:pointer;
	}
	input.register:hover {
		color: #fff;
		background-color:#3e03e0;
	}
	p.wthree {
		font-size: 16px;
		font-weight: normal;
		color: #fff;
		text-align: center;
		text-transform: capitalize;
		padding-bottom: 20px;
	}
	ul.social-agileinfo {
		text-align: center;
		margin-left: -25px;
		margin-bottom: 50px;
	}
	ul.social-agileinfo li {
		display:inline-block;
		margin:0;
	}
	ul.social-agileinfo li a i.fa {
		width:40px;
		height:40px;
		border:1px solid #fff;
		text-align:center;
		line-height:40px;
		color:#fff;
	}
	ul.social-agileinfo li a i.fa.fa-facebook:hover {
		background-color:#3b5998;
		color:#fff;
		border-color:#3b5998;
	}
	ul.social-agileinfo li a i.fa.fa-twitter:hover {
		background-color:#1da1f2;
		color:#fff;
		border-color:#1da1f2;
	}
	ul.social-agileinfo li a i.fa.fa-youtube:hover {
		background-color:#cd201f;
		color:#fff;
		border-color:#cd201f;
	}
	ul.social-agileinfo li a i.fa.fa-google-plus:hover {
		/*-- w3ls --*/
		background-color:#dd4b39;
		color:#fff;
		border-color:#dd4b39;
	}
	ul.social-agileinfo li a i.fa:hover {
		-webkit-animation: spin 2s linear infinite;
		animation: spin 2s linear infinite;
		-moz-animation: spin 2s linear infinite;
		-o-animation: spin 2s linear infinite;
		-ms-animation: spin 2s linear infinite;
	}

	@-webkit-keyframes spin {
	0% { -webkit-transform: rotate(0deg); }
	100% { -webkit-transform: rotate(360deg); }
	}

	@keyframes spin {
	0% { transform: rotate(0deg); }
	100% { transform: rotate(360deg); }
	}
	p.copyright {
		font-size: 16px;
		text-align: center;
		color: #dadada;
		line-height: 30px;
		padding: 20px 10px;
	}
	p.copyright a {
		color:#f15f22;
	}
	p.copyright a:hover {
		color:#36b051;
	}

	/*-- responsive design --*/
	@media (max-width:1600px) {
		h2.agileits1 {
		padding: 225px 0 15px;	
		}
	}

	@media (max-width: 1366px) {
	h2.agileits1 {
		padding: 235px 0 15px;
	}
	}

	@media (max-width: 1080px) {
		/*-- agileits --*/
	h1.w3ls {
		font-size: 40px;
	}
	.content-w3ls {
		width:80%;
		margin: 0 auto 40px;
	}
	p.agileits2 {
		font-size: 14px;
	}
	p.copyright {
		font-size: 14px;
	}
	p.wthree {
		font-size: 14px;
	}
	input#firstname, input#email, input#password1, input#password2 {
		font-size:15px;
	}
	}

	@media (max-width: 1024px) {
	h1.w3ls {
		padding: 30px 0;
		font-size:35px;
	}
	}

	@media (max-width: 991px) {
	h2.agileits1 {
		padding: 230px 0 15px;
	}
	.content-w3ls {
		width: 90%;
	}
	}

	@media (max-width: 800px) {
	input#firstname, input#email, input#password1, input#password2 {
		width: 260px;
	}
	input.register {
		width: 295px;
	}
	p.agileits2 {
		font-size: 14px;
		line-height: 30px;
		padding: 0 10px;
	}
	input.register {
		width: 100px;
	}
	/*-- agileits --*/
	}

	@media (max-width: 768px) {
	h2.agileits1 {
		padding: 210px 0 15px;
	}

	}

	@media (max-width: 736px) {
	.content-w3ls .content-agile1 {
		width: 100%;
		height:250px;
	}
	.thongtin{
		display:flex;
		flex-direction: column;
		
	}

	h2.agileits1 {
		padding: 75px 0 15px;
	}
	.content-w3ls .content-agile2 {
		width: 100%;
		padding: 25px 0 30px;
	}
	.content-w3ls {
		width: 65%;
	}
	}

	@media (max-width: 600px) {
	h2.agileits1 {
		padding: 65px 0 10px;
	}
	}

	@media (max-width: 568px) {
	.content-w3ls {
		width: 70%;
	}
	}

	@media (max-width: 480px) {
	h2.agileits1 {
		font-size: 35px;
	}
	}

	@media (max-width: 414px) {
	h1.w3ls {
		padding: 25px 0;
		font-size: 30px;
	}
	.content-w3ls {
		/*-- agileinfo --*/
		width: 85%;
		margin: 0 auto 10px;
	}
	}

	@media (max-width: 384px) {
	input#firstname, input#email, input#password1, input#password2 {
		width: 230px;
		height: 40px;
	}
	input.register {
		width: 100px;
	}
	p.wthree {
		font-size: 14px;
		padding: 0 15px 20px;
		line-height: 30px;
	}
	}

	@media (max-width: 375px) {
	h1.w3ls {
		padding: 25px 0;
		font-size: 27px;
	}
	h2.agileits1 {
		font-size: 25px;
		padding: 43px 0 10px;
	}
	.content-w3ls .content-agile1 {
		width: 100%;
		height: 200px;
	}
	}

	@media (max-width: 320px) {
	h1.w3ls {
		padding: 25px 0;
		font-size: 24px;
	}
	.content-w3ls .content-agile1 {
		width: 100%;
		height: 180px;
	}
	h2.agileits1 {
		font-size: 22px;
		padding: 37px 0 10px;
	}

	p.agileits2 {
		font-size: 13px;
	}
	input#firstname, input#email, input#password1, input#password2 {
		width: 195px;
		height: 40px;
		font-size: 14px;
	}
	.content-w3ls {
		width: 90%;
		margin: 0 auto;
	}
	input.register {
		width: 230px;
		height: 40px;
		font-size:15px;
	}
	p.wthree {
		font-size: 13px;
		padding: 0 15px 15px;
	}
	p.copyright {
		font-size: 13px;
	}
	}
</style>
<h1 style="text-align: center; margin-top: 20px;">NONAME Đăng ký FORM</h1>
<a class="logo" href="./index.php">
	<img  style="margin-top: 20px;" src="./img/logo.png" alt="logo">
</a>
<div class="content-w3ls">
	<div class="content-agile1">
				<form method="post" id="create">
					<div class="thongtin">
						<div class="form-1">
							
							<div class=" w3layouts input-layout"> 
								<input type="text" id="firstname" name="name" placeholder="Name" title="Please enter your  Name" >
							</div>
							<div class="agileinfo input-layout">	
								<input type="text" class="lock" name="address" placeholder="Address" id="password1" >
							</div>	
							<div class="agileinfo input-layout" >	
								<input type="password" class="lock" name="password" placeholder="Mật khẩu" id="password1"  >
							</div>	
				
							
						</div>
						<div class="form-2">
							<div class="w3layouts input-layout">
								<input type="email" id="email" name="email" placeholder="Email" title="Please enter a valid email">
							</div>
							<div class="agileinfo input-layout">	
								<input type="text" class="lock" name="phone" placeholder="Phone" id="password2" >
							</div>
							<div class="agileinfo input-layout">	
								<input type="password" class="lock" name="confirmpassword" placeholder="Xác nhận mật khẩu" id="password2" >
							</div>	
		
							
				
							
				
								
						</div>
					</div>
					<div class="d-flex justify-content-center" id="alert"></div>
					<div class="d-flex justify-content-center">
				<button  class="btn btn-primary  ">Đăng ký</button>
			</div>
					
					<footer style="background:none; margin-top:50px;font-size:20px; text-align:center;letter-spacing: 2px;"><p> &copy; Copyright <strong><span>NONAME</span></strong>. Đã đăng ký bản quyền</p></footer>
				</form>
		
	</div>
	
</div>
<script type="text/javascript">
		$("#create").submit(function(e){
			e.preventDefault();
			let name = $("input[name='name']").val();
			let email = $("input[name='email']").val();
			<?php 
			     
			     foreach ($check as $sl)
			     {
			         
			         
			         ?>if(email == "<?=$sl['email']?>")
                        {
                       $("#alert").html('<strong class="text-danger">Email đã tồn tại</strong>'); 
        				$("input[name='email']").focus();
        				return;
                        }<?php
			     }
			?>
			
			
			
			let password = $("input[name='password']").val();
			let confirmpassword = $("input[name='confirmpassword']").val();
			let address = $("input[name='address']").val();
			let phone = $("input[name='phone']").val();
			
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
			else if(email == null || email == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid Email</strong>'); 
				$("input[name='email']").focus();
				return;
			}
			else if(email.indexOf("@")  == -1)
			{
				$("#alert").html('<strong class="text-danger">Email must have @ character </strong>'); 
				$("input[name='email']").focus();
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
                                email : email,
                                address : address,
                                phone : phone,
                                password : password
                                
                            },
                           
                            success:function(data) {
                                alert("Đăng ký thành công"); 
                                window.location.replace("index.php?controller=user&action=dangnhap");
                            },
                           
                        
				   		});		   		    
		});

    </script>