<?php
session_start();
require_once '../class/user.class.php';
if (isset($_POST['user']) || isset($_POST['pass'])) {

  $user = new User();

  $userLogin = [
    'login'=>$_POST['user'],
    'pass'=>$_POST['pass']
  ];
  $res = $user->login($userLogin);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculo de IMC</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <script src="../js/jquery.mask.js"></script>

</head>

<body>
  <div class="wrapper " style="display:flex; justify-content:center">
    <div class="main-panel">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Acesse o painel</h4>
                  <p class="card-category">Clique aqui para <strong><a href="./register.php">Cadastrar</a><strong></p>
                </div>
                <div class="card-body">
                  <form id="form" method="POST" >
                    <div class="form-group">
                      <label for="weight" class="bmd-label-floating">Usuário</label>
                      <input type="text" class="form-control" name="user" required placeholder="Digite seu usuário">
                    </div>
                    <div class="form-group">
                      <label for="height" class="bmd-label-floating">Senha</label>
                      <input type="password" class="form-control" name="pass" required placeholder="Digite sua senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Acessar</button>
                  </form>
                  <?php
                  $display = 'display:none';
                   if(!empty($res)){
                    $display = 'display:block;';
                  }?>
                  <div class="alert alert-danger m-2" id="res" style='<?php echo $display; ?>' ><?php echo $res;?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>