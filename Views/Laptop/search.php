<?php require_once('./Views/header.php');?>
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card" style="margin-top:100px;">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Laptop</h4>
                 
                </div>
                <div class="card-body">
                <div class="col-md-12 col-lg-12 col-xs-12 form-inline" >
                    <div class="col-md-2 " >
                        <input class="form-control" id="search" name = "search"type="text" placeholder="Search..">
                    </div>
                    <div class="col-md-3 ">
                    <button class="btn btn-warning"  onclick="search()"><i class="fas fa-search"></i>&nbsp;&nbsp;Search</button>

                    </div>
            	</div>
              
                <button class="btn btn-info" style="margin-top: 10px;" onclick="document.location='index.php?controller=laptop&action=create'"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New</button>
                  
                      <table class="table table-striped table-hover table-bordered" >
        				<thead>
        						<tr>
        							<th  scope="col">STT</th>
        							<th  scope="col">Image</th>
        							<th  scope="col">Name</th>
        							<th  scope="col">Type</th>
        							<th  scope="col">Price</th>
        							<th  scope="col">Showmenu</th>
        							<th class=" table-body-center"></th>						
        						</tr>
        						<tbody>
                                    <?php
                                    $index = 1;
                                    foreach ($listLaptop as $sl) {
                                        $typename = "";
                                        foreach ($listType as $sl1)
                                        {
                                            if($sl1['id'] == $sl['type'])
                                            {
                                                $typename = $sl1['name'];
                                            }
                                        }
                                        $showmenu = "";
                                        if($sl['showmenu'] == 0)
                                        {
                                            $showmenu = "Not Show";
                                        }
                                        else {
                                            $showmenu = "Show";
                                        }
                                        echo '<tr>
                                			<td>'.($index++).'</td>
                                			<td class="align-middle"><img width="150px" height="150px;" src="'.$sl['image'].'"/></td>
                                			<td >'.$sl['name'].'</td>
                                            <td>'.$typename.'</td>
                                           
                                            <td>'.$sl['price'].'</td>
                                            <td>'.$showmenu.'</td>
                                			<td class=" table-body-center"><button class="btn btn-success" onclick=\'document.location="index.php?controller=laptop&action=update&id='.$sl['id'].'"\'><i class="fas fa-user-edit"></i></button> &nbsp;&nbsp;&nbsp;
                                			    <button class="btn btn-danger " onclick="deletelaptop('.$sl['id'].')"><i class="fas fa-trash-alt"></i></button></td>
                                		    </tr>';
                                    }
                                    ?>
            					</tbody>
            				</thead>
            			</table>
                  
                </div>
                
                
              </div>
            </div>
          </div>
        </div>
      </div>

<?php require_once('./Views/footer.php');?>
 <script type="text/javascript">
		function deletelaptop(id){
			option = confirm('Bạn có muốn xóa laptops này không?')
			if(!option) {
				return;
			}
			
			$.ajax({	        
				url : "index.php?controller=laptop&action=delete",
				method: "POST",
				data: {  
                   id : id   
                },
                success: function (data) {
				        	alert("delete success");
				        	location.reload();
				},		
        	})
		}
        function search(){
			var search = $("#search").val();
			
			url = "index.php?controller=laptop&action=searchADMIN&value="+search;
			window.location.replace(url);
		}
	</script>