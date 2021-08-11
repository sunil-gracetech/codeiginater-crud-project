<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=<?php echo base_url("assets/css/bootstrap.css");?> />

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 card p-3">
                <div class="card">
                <?php //echo validation_errors(); ?>
                </div>
                <?php echo form_open("Home/Create"); ?>
                    <div class="form-group">
                        <label for="">Customer name</label>
                        <!-- <input type="text" class="form-control"> -->
                        <?php
                            $cname=array(
                                "name"=>"name",
                                "class"=>"form-control",
                                "type"=>"text"
                            );
                            echo form_input($cname);
                            echo form_error("name","<div class='text-danger'>","</div>");
                            ?>

                    </div>


                    <div class="form-group">
                        <label for="">Customer email</label>
                        <!-- <input type="text" class="form-control"> -->
                        <?php
                            $cemail=array(
                                "name"=>"email",
                                "class"=>"form-control",
                                "type"=>"text"
                            );
                            echo form_input($cemail);
                            echo form_error("email","<div class='text-danger'>","</div>");

                            ?>

                    </div>

                    <div class="form-group">
                        <label for="">Customer password</label>
                        <!-- <input type="text" class="form-control"> -->
                        <?php
                            $cpass=array(
                                "name"=>"password",
                                "class"=>"form-control",
                                "type"=>"password"
                            );
                            echo form_input($cpass);
                            echo form_error("password","<div class='text-danger'>","</div>");

                            ?>

                    </div>


                    <div class="form-group">
                        <label for="">Customer address</label>
                        <!-- <input type="text" class="form-control"> -->
                        <?php
                            $caddress=array(
                                "name"=>"address",
                                "class"=>"form-control",
                                "type"=>"text",
                                "multiline"=>"true"
                            );
                            echo form_input($caddress);
                            echo form_error("address","<div class='text-danger'>","</div>");

                            ?>

                    </div>
                    <div class="form-group">
                        <?php
                        
                        echo form_submit("sub","Create",array("class"=>"btn btn-success"));
                        
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>