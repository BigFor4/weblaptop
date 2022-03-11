
<style>

	html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
	article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
	ol,ul{list-style:none;margin:0px;padding:0px;}
	blockquote,q{quotes:none;}
	blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
	table{border-collapse:collapse;border-spacing:0;}
	/* start editing from here */
	a{text-decoration:none;}
	.txt-rt{text-align:right;}/* text align right */
	.txt-lt{text-align:left;}/* text align left */
	.txt-center{text-align:center;}/* text align center */
	.float-rt{float:right;}/* float right */
	.float-lt{float:left;}/* float left */
	.clear{clear:both;}/* clear float */
	.pos-relative{position:relative;}/* Position Relative */
	.pos-absolute{position:absolute;}/* Position Absolute */
	.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
	.vertical-top{	vertical-align:top;}/* vertical align top */
	nav.vertical ul li{	display:block;}/* vertical menu */
	nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
	img{max-width:100%;}
	/*end reset*/
	body {
		background: url(./img/1.jpg)no-repeat center top;
		background-size: cover;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		-ms-background-size: cover;
		background-attachment: fixed;
		background-position: center;
		text-align: center;
		font-family: 'Open Sans', sans-serif;
	}
	/*--header--*/
	.header-w3l {
		padding-top: 2em;
	}
	.header-w3l h1 {
		font-size: 3em;
		color: white;
		letter-spacing: 8px;
		font-weight: 500;
		font-family: 'Dosis', sans-serif;
		text-transform: uppercase;
		text-shadow: 5px 3px 5px #101010;
	}
	/*--//header--*/

	/*--main--*/
	.wthree-pro h2 {
		font-size: 1.2em;
		color: #fff;
		letter-spacing: 4px;
		margin-bottom: 1.5em;
		text-transform: uppercase;
		font-family: 'Dosis', sans-serif;
		text-transform: uppercase;
		text-shadow: 5px 3px 5px #101010;
		margin-top: -100px;
	}
	.sub-main-w3 input[type="text"], .sub-main-w3 input[type="password"] {
		outline: none;
		font-size: .9em;
		padding: 1em 3em 1em 1em;
		border: none;
		margin-bottom: 0.3em;
		background: rgba(255, 255, 255, 0.85);
		width: 82%;
		color: #000;
		border-radius: 30px;
		font-weight: 400;
		font-family: 'Open Sans', sans-serif;
		letter-spacing: 1px;
	}
	.sub-main-w3 {
		width: 26%;
		margin: 10em auto 12em;
		
	}
	.sub-w3l h6 a{
		color: white;
	}
	.sub-w3l h6 a {
		font-size: .9em;
		letter-spacing: 1px;
		text-align: right;
		display: inherit;
		font-family: 'Dosis', sans-serif;
		text-transform: uppercase;
		text-shadow: 5px 3px 5px #101010;
	}
	.dangnhap{
		font-family: 'Dosis', sans-serif;
		text-transform: uppercase;
		text-shadow: 5px 3px 5px #101010;
	}
	.sub-w3l {
		margin-top: 1em;
	}
	.right-w3l {
		margin-top: 2em;
	}
	.pom-agile {
		position: relative;
	}
	input.pass {
		margin-top: .7em;
	}
	span.icon1, span.icon2 {
		color: #ea2858;
		font-size: 1.1em;
		position: absolute;
		margin-left: -30px;
	}
	span.icon1 {
		top: 23%;
	}
	span.icon2 {
		top: 34%;
	}
	.sub-main-w3 input[type="submit"] {
		color: white;
		background: #ea2858;
		border: none;
		padding: .7em 0;
		outline: none;
		width: 44%;
		font-size: 1em;
		cursor: pointer;
		letter-spacing: 1px;
		font-weight: 400;
		font-family: 'Open Sans', sans-serif;
		transition: 0.5s all;
		-webkit-transition: 0.5s all;
		-o-transition: 0.5s all;
		-moz-transition: 0.5s all;
		-ms-transition: 0.5s all;
		border-radius: 30px;
	}
	.sub-w31--hover:hover{
		color: blue;
	}
	.sub-main-w3 input[type="submit"]:hover {
		background: #fff;
		color: black;
		transition:0.5s all;
		-webkit-transition:0.5s all;
		-o-transition:0.5s all;
		-moz-transition:0.5s all;
		-ms-transition:0.5s all;
	}

	/*--//main--*/

	/*--footer--*/
	.footer p {
		font-size: .9em;
		color: white;
		letter-spacing: 2px;
		margin-top: -150px;
		font-family: 'Dosis', sans-serif;
		text-transform: uppercase;
		text-shadow: 5px 3px 5px #101010;
	}
	.footer p a {
		color: #fff;
	}
	.footer p a:hover {
		color: #ea2858;
	}
	/*--//footer--*/
	/*--responsive--*/
	.dangkiquenmk{
		display: flex;
		justify-content: space-between;
	}
	ul.social-agileinfo {
		text-align: center;
		margin-left: -25px;
		margin-top: 30px;

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
	@media(max-width: 1680px){

	}
	@media(max-width: 1600px){

	}
	@media(max-width: 1440px){
		.footer {
			padding-bottom: 3em;
		}
		.sub-main-w3 {
			width: 29%;
			margin: 7em auto 9em;
		}
	}
	@media(max-width: 1366px){
		.footer p {	
			margin-top: -100px;
		}
	}
	@media(max-width: 1280px){
		.footer p {	
			margin-top: -80px;
		}
	}
	@media(max-width: 1080px){
		.sub-main-w3 {
			width: 35%;
		}
	}
	@media(max-width: 1050px){
		.footer p {	
			margin-top: -60px;
		}
	}
	@media(max-width: 1024px){
		.sub-main-w3 {
			width: 38%;
		}
	}
	@media(max-width: 991px){
		.footer p {	
			margin-top: -80px;
		}
	}
	@media(max-width: 900px){
		.header-w3l {
			padding-top: 1.5em;
		}
		.sub-main-w3 {
			width: 42%;
			margin: 6em auto 8em;
		}
		.footer {
			padding-bottom: 2.5em;
		}
	}
	@media(max-width: 800px){
		.header-w3l h1 {
			font-size: 2.7em;
			letter-spacing: 7px;
		}
	}
	@media(max-width: 768px){
		.header-w3l {
			padding-top: 4.5em;
		}
		.sub-main-w3 {
			width: 50%;
			margin: 10em auto 16em;
		}
	}
	@media(max-width: 736px){
		.header-w3l {
			padding-top: 1.5em;
		}
		.sub-main-w3 {
			margin: 5em auto 6.5em;
		}
		.footer p {	
			margin-top: -40px;
		}
	}
	@media(max-width: 667px){
		.footer {
			padding-bottom: 2em;
		}
	}
	@media(max-width: 640px){

	}
	@media(max-width: 600px){
		.sub-main-w3 input[type="text"], .sub-main-w3 input[type="password"] {
			padding: .9em 3em .9em 1em;
		}
		.sub-main-w3 input[type="submit"] {
			font-size: .95em;
		}
		.footer p {
			letter-spacing: 1px;
		}
		.right-w3l {
			margin-top: 1em;
		}
		.header-w3l h1 {
			font-size: 2.5em;
			letter-spacing: 5px;
		}
		.wthree-pro h2 {
			font-size: 1em;
		}
		.sub-main-w3 {
			margin: 6em auto 8em;
			width: 54%;
		}
	}
	@media(max-width: 568px){
		.sub-main-w3 {
			width: 56%;
		}
		.footer p {	
			margin-top: -80px;
		}
	}
	@media(max-width: 480px){
		.header-w3l h1 {
			font-size: 2.3em;
			letter-spacing: 4px;
		}
		.sub-main-w3 {
			width: 69%;
			margin: 6em auto 6.3em;
		}
		.footer p {
			line-height: 1.9;
		}
	}
	@media(max-width: 440px){
		.sub-main-w3 {
			width: 72%;
		}
	}
	@media(max-width: 414px){
		.sub-main-w3 input[type="text"], .sub-main-w3 input[type="password"] {
			font-size: .85em;
		}
		.sub-w3l h6 a {
			font-size: .8em;
		}
		.header-w3l h1 {
			font-size: 2.1em;
		}
		.sub-main-w3 {
			margin: 7em auto 9.3em;
		}
	}
	@media(max-width: 384px){
		.sub-main-w3 input[type="text"], .sub-main-w3 input[type="password"] {
			font-size: .8em;
		}
		.header-w3l h1 {
			font-size: 2em;
		}
		.sub-main-w3 input[type="submit"] {
			font-size: .9em;
		}
		.wthree-pro h2 {
			margin-bottom: 1.2em;
		}
		.sub-main-w3 {
			margin: 6em auto 7.5em;
			width: 74%;
		}
		span.icon1 {
			top: 18%;
		}
		span.icon2 {
			top: 32%;
		}
	}
	@media(max-width: 375px){

	}
	@media(max-width: 320px){
		.header-w3l h1 {
			font-size: 1.8em;
			letter-spacing: 2px;
		}
		.wthree-pro h2 {
			font-size: .9em;
			letter-spacing: 2px;
		}
		.sub-main-w3 input[type="submit"] {
			font-size: .8em;
		}
		.footer p {
			font-size: .8em;
		}
		.sub-main-w3 {
			margin: 4.2em auto 4.5em;
			width: 81%;
		}
		.sub-main-w3 input[type="text"], .sub-main-w3 input[type="password"] {
			width: 80%;
		}
		.footer p {	
			margin-top: 0px;
		}
	}
	
</style>

<div class="center-container">
	<div class="header-w3l">
		<h1>NONAME ĐĂNG NHẬP FORM</h1>
	</div>
	<a class="logo" href="./index.php">
		<img src="./img/logo.png" alt="logo">
	</a>
	<div class="main-content-agile">
		<div class="sub-main-w3">	
			<div class="wthree-pro">
				<h2>đăng nhập nhanh</h2>
			</div>
			<form method="post" id="create">
				<div class="pom-agile">
					<input class="user" type="text" placeholder="Tài Khoản" name="email" >
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
				</div>
				<div class="pom-agile">
					<input  placeholder="Mật Khẩu" name="password" class="pass" type="password"  >
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
				</div>
				<div class="sub-w3l">
					<div class="dangkiquenmk">
						<h6><a href="index.php?controller=user&action=dangki" class="dangki sub-w31--hover">Đăng kí</a></h6>
						<h6><a href="index.php?controller=user&action=quanmetkhau" class="sub-w31--hover quenmk">Quên mật khẩu?</a></h6>
					</div>
					<div class="d-flex justify-content-center" id="alert"></div>
					<div class="d-flex justify-content-center">
				<button  class="btn btn-primary  ">Đăng Nhập</button>
			</div>
				</div>
			</form>
			<footer style="background:none; margin-top:50px"><p> &copy; Copyright <strong><span>NONAME</span></strong>. Đã đăng ký Bản quyền</p></footer>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#create").submit(function(e){
			e.preventDefault();
		
			
			let email = $("input[name='email']").val();
			
			let password = $("input[name='password']").val();
			let count = 0;
			
			if(email == null || email == "")
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
			<?php 
			     
			     foreach ($check as $sl)
			     {
			         
			         
			         ?>if((email == "<?=$sl['email']?>" && password == "<?=$sl['password']?>"))
                        {
                        	
                          count++;
                        }<?php
			     }
			?>
			if(count ==0)
			{
			 				$("#alert").html('<strong class="text-danger">Mật khẩu không hợp lệ</strong>'); 
            				$("input[name='password']").focus();
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
                                email : email,
                                password : password
                                
                            },
                            
                            success: function (data) {
                             
                             
                             	window.location="index.php";
                             
                             
				        	
				        },
				   		});		   		    
		});
	
</script>