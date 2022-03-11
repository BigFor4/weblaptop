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

                
      <div class="content" id="user" >
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card" style="margin-top:100px;">
                  <div class="card-header card-header-primary" > 
                    <h4 class="card-title" >List Users</h4>
                  
                  </div>
                  <div class="card-body">
                  <div class="col-md-12 col-lg-12 col-xs-12 form-inline" >
                    <div class="col-md-2 ">
                          <input class="form-control" id="search" name = "search"type="text" placeholder="Search..">
                      </div>
                      <div class="col-md-3 ">
                      <button class="btn btn-warning"  onclick="search()"><i class="fas fa-search"></i>&nbsp;&nbsp;Search</button>

                      </div>
                </div>
                  <button class="btn btn-info" style="margin-top: 10px;"  onclick="document.location='index.php?controller=user&action=create'"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New</button>
                    
                <table class="table table-striped table-hover table-bordered" id="myTable">
                  <thead>
                      <tr><th  scope="col">STT</th>
                        <th  scope="col">Image</th>
                        <th  scope="col">Name</th>
                        <th  scope="col">Email</th>
                        <th  scope="col">Role</th>
                        <th  scope="col" >Status</th>
                        <th scope="col" ></th>						
                      </tr>
                      <tbody>
                                      <?php
                                      

                                      $index = 0;
                                      foreach ($listUser as $sl) {
                                          $index++;
                                          $role = "";
                                          $status = "";
                                          if($sl['status'] == 0)
                                          {
                                              $status = "UnLock";
                                          }
                                          else {
                                              $status = "Lock";
                                          }
                                          if($sl['role_id'] == 1)
                                          {
                                              $role = "admin";
                                          }
                                          else {
                                              $role = "user";
                                          }
                                           echo '<tr>
                                          <td >'.$index.'</td>';

                                          if($sl['image'] != null)
                                          {
                                            echo '<td class="align-middle"><img width="150px" height="150px;" src="'.$sl['image'].'"/></td>
                                            ';
                                          }
                                          else
                                          {
                                            echo '<td class="align-middle"><img width="150px" height="150px;" src="https://image.shutterstock.com/image-vector/avatar-man-icon-profile-placeholder-260nw-1229859850.jpg"/></td>
                                            ';
                                          }
                                          echo '<td >'.$sl['name'].'</td>
                                          <td>'.$sl['email'].'</td>
                                            
                                              
                                            
                                              <td>'.$role.'</td>
                                              <td>'.$status.'</td>
                                           <td class=" table-body-center"><button class="btn btn-success" onclick=\'document.location="index.php?controller=user&action=update&id='.$sl['id'].'"\'><i class="fas fa-user-edit"></i></button>
                                            <button class="btn btn-danger " onclick="deleteuser('.$sl['id'].')"><i class="fas fa-trash-alt"></i></button></td>
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
                            echo '<li class="page-item"><a class="page-link" href="?controller=user&action=list&page=' . $curent_pagePrevious . '">Trước</a></li>';
                            for ($i = 1; $i <= $pages; $i++) {
                                echo ' <li class="page-item"><a class="page-link" href="?controller=user&action=list&page=' . $i . '">' . $i . '</a></li>';
                            }
                            echo ' <li class="page-item"><a class="page-link" href="?controller=user&action=list&page=' . $curent_pageNext . '">Sau</a></li>';
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
      function deleteuser(id){
        option = confirm('Bạn có muốn xoá user này không?')
        if(!option) {
          return;
        }
        
        $.ajax({	        
          url : "index.php?controller=user&action=delete",
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
      /*function search(){
        
        let search = $("input[name='search']").val();
        $.ajax({	        
          url : "http://localhost:9090/ADMINLAPTOP/index.php?controller=user&action=search",
          method: "POST",
          data: {  
                    search : search
                  },
                  success: function (data) {
                    
            
            
          },		
            })
      }*/
      function search(){
        var search = $("#search").val();
        
        url = "index.php?controller=user&action=search&value="+search;
        window.location.replace(url);
      }
    </script>