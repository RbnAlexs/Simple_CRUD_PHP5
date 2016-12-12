<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Prueba</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
</head>
<body>
<style>
    body{background: #8A8787;} 
    .formulario{    
        position: absolute;
        top: 25%;
        background: #4D4949;
        padding: 20px;
        border-radius: 10px;
        }
    .logo{
        margin: 10px;
    }
    
    
</style>
    <div class="container">
        <div class="row">
            <div class="formulario col-xs-12 col-sm-8 col-sm-push-2">
                <div class="logo"><img src="images/logo.png"/></div>  
                <form name="formulario" method="post" action="login.php">
                    <div class="form-group col-xs-12">
                        <input placeholder="Username" class="form-control" type="text"  name="username" required=""/>
                    </div>
                    <div class="form-group col-xs-12">
                        <input placeholder="Contraseña" class="form-control" type="password" id="password" name="password" required=""/>
                    </div>
                
                    <center>
                        <input type="submit" value="Entrar" name="loginform" class="btn btn-success" />
                    </center>
                </form>

            </div>
        </div>
    </div>
</body>
</html>