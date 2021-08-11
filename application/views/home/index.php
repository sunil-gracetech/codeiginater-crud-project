<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo base_url("assets/css/bootstrap.css");?> />    <title>Document</title>
</head>
<body>
    <div class="container">
    <h3>I am Home Page</h3>
    <?php  echo anchor("Home/CreateCustomer","Create"); ?>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($customer as $row)
            {
            ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["password"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                <td>
               <a href="#" class="btn btn-info" id='<?php echo $row["id"]; ?>' onclick="editcustomer(this.id)">edit</a>
                ||
                <?php  echo anchor("Home/DeleteCustomer?id=".$row["id"],"Delete"); ?>

                </td>
            </tr>
                <?php
                    }
            ?>
        </tbody>
    </table>



    </div>
    
    <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit customer</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" id="frm_edit">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <input type="hidden" name="id" class="id">
                        <label for="">Edit Name</label>
                        <input type="text" name="name" class="form-control cname" >
                    </div>

                    <div class="form-group">
                        <label for="">Edit Email</label>
                        <input type="text" name="email" class="form-control cemail" >
                    </div>

                    <div class="form-group">
                        <label for="">Edit password</label>
                        <input type="text" name="password" class="form-control cpass" >
                    </div>

                    <div class="form-group">
                        <label for="">Edit Address</label>
                        <input type="text" name="address" class="form-control caddress" >
                    </div>

                    <div class="form-group">
                       <button class='btn btn-success' id="btn_update" >Submit</button>
                    </div>
                </div>
            </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
      </div>

    </div>
  </div>
</div>
    <script src="<?php echo base_url("assets/js/jquery.js");?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.js");?>"></script>
    <script src="<?php echo base_url("assets/js/custome.js");?>"></script>
    
</body>
</html>