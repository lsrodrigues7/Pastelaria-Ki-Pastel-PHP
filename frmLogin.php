<html>
   <head>
     <meta charset="UTF-8">
     <title>Login</title>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/login.css">
    </head>
   <body background="img/1400.png" width=>
        <form id="frmLogin" name="frmLogin" method="POST" action="login.php">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-5 col-md-3">
                            <div class="form-login">
                                <h3>BEM VINDO!</h3>
                                <input type="text" id="user"  name="user" class="form-control input-sm chat-input" placeholder="usuário" />
                                <br>
                                <input type="password" id="password" name="password" class="form-control input-sm chat-input" placeholder="senha" />
                                <br>
                                <div class="wrapper">
                                <span class="group-btn">     
                                    <button class="btn btn-secondary btn-md">Login  <i class="fa fa-sign-in"></i></button>
                                </span>
                                </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>

        </form>
   </body>
</html>