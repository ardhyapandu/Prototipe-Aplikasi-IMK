<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Pustakawan</title>
    <!-- Bootstrap Core CSS -->
    <link href="_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <style type="text/css">
        body{
            font-family: 'Quicksand', sans-serif;
            background-color: #FF7433;
        }
        h1{
            text-align: center;
            font-weight: 300;
        }
 
        .tulisan_login{
            text-align: center;
            text-transform: uppercase;
        }
 
        .kotak_login{
            width: 350px;
            height:310px;
            background-color: white;
            margin: 80px auto;
            padding: 30px 20px;
            border-radius:10px;
        }
        .alert{
            background: #e44e4e;
            color: white;
            padding: 10px;
            text-align: center;
            border:1px solid #b32929;
        }
    </style>
</head>
<body>
<h1 style="margin-top: 60px;">LOGIN <br> PUSTAKAWAN</h1><br><br>
    <div id="wrapper">
        <div class="container">
            <div align="center" class="kotak_login">
                <p class="tulisan_login">Silahkan login</p><br>
                <form class="navbar-form">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" required placeholder="ID" autofocus>
                    </div><br><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" required placeholder="Password">
                    </div><br><br>
                    <div class="form-group">
                    <a href="_admin" class="btn btn-primary">Login</a>
                </div>              
                </form>
            </div>
        </div>
    </div>
</body>
</html>
