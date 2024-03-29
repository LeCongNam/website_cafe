
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="View/public/css/login.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 m-auto">
                <form action="index.php?controller=User&action=login" method="POST" id="form-login">
                    <div class="col">
                        <h1 style="text-align: center;">Đăng nhập vào hệ thống</h1>
                    </div>
                    <div class="form-group">
                        <label for="user_name">User Name</label>
                        <input type="text" name="user_name" value="<?php echo isset($user_name)?$user_name:""; ?>" id="user_name" class="form-control" placeholder="UserName...">
                        <span class="error"><?php echo isset($userNameErrr)?$userNameErrr:''; ?> </span>
                    </div>
                    <div class="form-group">
                        <label for="pass_word">Password</label>
                        <input type="password" name="pass_word" value="" placeholder="password" id="pass_word" class="form-control">
                        <span class="error"><?php echo  isset($passWordErr)?$passWordErr:''; ?> </span>
                    </div>
                    <button  class="btn btn-primary btn-lg btn-block">
                        Đăng Nhập
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>