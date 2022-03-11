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
                  <h4 class="card-title ">Type Laptop</h4>
                  
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
                <button class="btn btn-info"  style="margin-top: 10px;" onclick="document.location='index.php?controller=type&action=create'"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New</button>
                  
                      <table class="table table-striped table-hover table-bordered" >
        				<thead>
        						<tr>
        							<th  scope="col">STT</th>
        							<th  scope="col">Name</th>
        							
        							<th class=" table-body-center"></th>						
        						</tr>
        						<tbody>
                                    <?php
                                    $index = 0;
                                    foreach ($listType as $sl) {
                                        $index++;
                                        echo '<tr>
                            
                                        <td >'.$index.'</td>
                                			<td >'.$sl['name'].'</td>
                                            
                                			<td class=" table-body-center"><button class="btn btn-success" onclick=\'document.location="index.php?controller=type&action=update&id='.$sl['id'].'"\'><i class="fas fa-user-edit"></i></button> &nbsp;&nbsp;&nbsp;
                                			    <button class="btn btn-danger " onclick="deletetype('.$sl['id'].')"><i class="fas fa-trash-alt"></i></button></td>
                                		    </tr>';
                                    }
                                    ?>
            					</tbody>
            				</thead>
            			</table>
                  
                </div>
				              <nav aria-label="Page navigation example" id="pageCurrent">
                        <ul class="pagination pageCurrent" id="mainData">
                            <?php
                            echo '<li class="page-item"><a class="page-link" href="?controller=type&action=list&page=' . $curent_pagePrevious . '">Trước</a></li>';
                            for ($i = 1; $i <= $pages; $i++) {
                                echo ' <li class="page-item"><a class="page-link" href="?controller=type&action=list&page=' . $i . '">' . $i . '</a></li>';
                            }
                            echo ' <li class="page-item"><a class="page-link" href="?controller=type&action=list&page=' . $curent_pageNext . '">Sau</a></li>';
                            ?>
                        </ul>
                    </nav>
              </div>
            </div>
           
          </div>
        </div>
      </div>

<?php require_once('./Views/footer.php');?>
 <script type="text/javascript">
		function deletetype(id){
			option = confirm('Bạn có muốn xoá user này không?')
			if(!option) {
				return;
			}
			
			$.ajax({	        
				url : "index.php?controller=type&action=delete",
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
			url = "index.php?controller=type&action=search&value="+search;
			window.location.replace(url);
		}
	</script>