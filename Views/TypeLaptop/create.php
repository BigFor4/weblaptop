<?php
    if (!isset($_SESSION["email"]))
    {
        header('Location: index.php?controller=user&action=dangnhap');
    }
    else if($_SESSION["role_id"]!=1)
    {
        header('Location: index.php');
    }
?>
<?php require_once('./Views/header.php');?>
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card" style="margin-top:100px;">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create Type Laptop</h4>
                 
                </div>
                <div class="wrapper wrapper--w680">
            <div class="">
                <div class="card-body">
                    
                    <form method="POST" id="create">
                       	<div class="row" >
                        	<div class="col-md-6">
                        		<div class="form-group">
                                  <label style="font-size:20px;color:black;">Name<span class="text-danger">*</span></label>
                                  <input id="name"  type="text" class="form-control" name="name"  placeholder="Enter Name" >
                               </div>
                        	</div>
                        	
                        	             
                        </div>	       
                        <div id="alert"></div>             
                        <button class="btn btn-success" >Save &nbsp;<i class="fa fa-save"></i></button>
                    </form>
                </div>
            </div>
        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php require_once('./Views/footer.php');?>
<script type="text/javascript">
		$("#create").submit(function(e){
			e.preventDefault();
			let name = $("input[name='name']").val();
			if(name == null || name == "")
			{
				$("#alert").html('<strong class="text-danger">Invalid Name</strong>'); 
				$("input[name='name']").focus();
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
                            
                            name : name
                           
                            
                        },
				        
                        
				        success: function (data) {
				        	
				        },
				   		});		   		    
		});

    </script>