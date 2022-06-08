<?php
if (!isset($_SESSION["email"])) {
    header('Location: index.php?controller=user&action=dangnhap');
} else if ($_SESSION["role_id"] != 1) {
    header('Location: index.php');
}
?>
<?php require_once('./Views/header.php'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top:100px;">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Type Laptop</h4>

                    </div>
                    <div class="card-body">
                        <div class="col-md-12 col-lg-12 col-xs-12 form-inline">
                            <div class="col-md-2 ">
                                <input class="form-control" id="search" name="search" type="text" placeholder="Search..">
                            </div>
                            <div class="col-md-3 ">
                                <button class="btn btn-warning" onclick="search()"><i class="fas fa-search"></i>&nbsp;&nbsp;Search</button>
                            </div>
                        </div>

                        <table class="table container table-primary table-bordered " style="margin-top:10px;">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên SP</th>
                                    <th scope="col">Khách Hàng</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Trạng Thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listPayment as $payment) {
                                    foreach ($listLaptop as $laptop) {
                                        if ($payment['product_id'] == $laptop['id']) {

                                            $status = "";
                                            $typepayment = "";

                                            if ($payment['status'] == 1) {
                                                $status = "Đã thanh toán";
                                            } else if ($payment['status'] == 2) {
                                                $status = "Đang chờ";
                                            } else {
                                                $status = "Thanh toán thất bại";
                                            }
                                            echo '<tr>
                            <th scope="row">1</th>
                            <td>' . $laptop['name'] . '</td>';
                                            foreach ($listUser as $user) {
                                                if ($user['id'] == $payment['user_id']) {
                                                    echo '<td>' . $user['name'] . '</td>';;
                                                }
                                            }
                                            echo '<td><img style="width:150px" data-bs-toggle="modal" data-bs-target="#exampleModal" src="./uploads/'. $laptop['image'] . '" alt="laptop"></td>
                            <td>' . $laptop['giamgia'] . '</td>
                            <td>' . $status . '</td>
                            <td><button class="btn btn-success" onclick="editpayment(' . $payment['order_id'] . ')"><i class="fas fa-check"></i></button>
							<button class="btn btn-danger" onclick="deletepayment(' . $payment['order_id'] . ')"><i class="fas fa-times-circle"></i></button></td>
                            </tr>';
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

<?php require_once('./Views/footer.php'); ?>
<script type="text/javascript">
    function editpayment(id) {
        option = confirm('Xác nhận thanh toán thành công?')
        if (!option) {
            return;
        }

        $.ajax({
            url: "index.php?controller=payment&action=update",
            method: "POST",
            data: {
                id: id
            },
            success: function(data) {
                alert("Xác nhận thành công");
                location.reload();
            },
        })
    }

    function deletepayment(id) {
        option = confirm('Xác nhận từ chối thanh toán?')
        if (!option) {
            return;
        }

        $.ajax({
            url: "index.php?controller=payment&action=delete",
            method: "POST",
            data: {
                id: id
            },
            success: function(data) {
                alert("Đã từ chối thanh toán");
                location.reload();
            },
        })
    }
</script>