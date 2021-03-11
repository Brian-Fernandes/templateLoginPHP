<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login page</title>
</head>
<body class="center-form d-flex ">
    
    <div class="container center-form d-flex justify-content-center align-items-center">
        <form action="" method = "POST" class="form-group d-flex align-items-center justify-content-around bg-white shadow-lg rounded">
            <table class="d-flex justify-content-around align-items-center">
                <tr class="">
                    <td><label for="user">Usuário:</label></td>
                    <td><input type="text" class="form-control form-control-sm" placeholder="Insira seu usuário"></td>
                </tr>
                <tr class="">
                    <td><label for="password">Senha:</label></td>
                    <td><input type="text" class="form-control form-control-sm" placeholder="Insira sua senha"></td>
                </tr>
                <tr class="d-flex justify-content-center mt-3">
                   <td ><button type="submit" class="btn btn-outline-success">Acessar</button></td> 
                </tr>
            </table>
        </form>
    </div>
    
</body>
</html>