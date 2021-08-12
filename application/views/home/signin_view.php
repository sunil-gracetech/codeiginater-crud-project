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
            <div class="col-5 offset-3">
            <div class="card">
                <div class="card-header">
                    <h4>Sign in</h4>
                </div>
                <div class="card-body">
                    <?php echo form_open("Home/login"); ?>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group">
                       
                        <input type="submit" name="sub" class=" btn btn-info form-control" value="Sign in">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>