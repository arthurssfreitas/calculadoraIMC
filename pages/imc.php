<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de IMC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <script src="../js/jquery.mask.js"></script>
    <link href="../js/styles.js" rel="stylesheet">

</head>

<body>
    <div class="wrapper ">
        <div class="sidebar" data-color="azure" data-background-color="white">
            <div class="sidebar-wrapper" >
                <ul class="nav" >
                    <li class="nav-item   ">
                        <a class="nav-link" href="./dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./imc.php">
                            <i class="material-icons">calculate</i>
                            <p>Calculadora de IMC</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./weight.php">
                            <i class="material-icons">fitness_center</i>
                            <p>Cadastrar Peso</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel" >
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " >
                <div class="container-fluid" >
                    <div class="navbar-wrapper" >
                        <a class="navbar-brand" href="javascript:;">Calculadora de IMC</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">person</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                            <a class="dropdown-item" id="logout" href="#">Sair</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-info">
                                    <h4 class="card-title">Calculadora de IMC</h4>
                                    <p class="card-category">Verifique sua saúde</p>
                                </div>
                                <div class="card-body">
                                    <form id="form">
                                        <div class="form-group">
                                            <label for="weight" class="bmd-label-floating">Informe seu peso</label>
                                            <input type="number" class="form-control" id="weight" required
                                                placeholder="Exemplo: 75">
                                        </div>
                                        <div class="form-group">
                                            <label for="height" class="bmd-label-floating">Informe sua altura (metro e
                                                cm)</label>
                                            <input type="text" class="form-control" required id="height"
                                                placeholder="Exemplo 1,80">
                                        </div>
                                        <button type="submit" id="calc" class="btn btn-info">Calcular</button>
                                    </form>
                                    <div class="alert alert-success m-2" id="res" style="display: none;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="#">

                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                    </div>
                    <!-- your footer here -->
                </div>
            </footer>
        </div>
    </div>
    <script src="../js/styles.js"></script>
</body>

</html>