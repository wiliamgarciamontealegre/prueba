<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Editores</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="css/estilos.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php 
          include 'menu.php';
        ?>

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Contador de notas</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
          
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre del editor</th>
                          <th>Estado</th>
                          <th>Número de notas</th>
                          <th>Ver notas</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr >
                          <th scope="row">1</th>
                          <td>Daniel diaz</td>
                          <td>Activo</td>
                          <td>150</td>
                          <td><a href="notas_de_editores.php"><button class="boton_ver_mas_notas_editor"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob perez</td>
                          <td>Activo</td>
                          <td>20</td>
                          <td><a href="notas_de_editores.php"><button class="boton_ver_mas_notas_editor"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>Activo</td>
                          <td>23</td>
                          <td><a href="notas_de_editores.php"><button class="boton_ver_mas_notas_editor"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Diego</td>
                          <td>Activo</td>
                          <td>12</td>
                          <td><a href="notas_de_editores.php"><button class="boton_ver_mas_notas_editor"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Santiago</td>
                          <td>Activo</td>
                          <td>71</td>
                          <td><a href="notas_de_editores.php"><button class="boton_ver_mas_notas_editor"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>Aaron</td>
                          <td>Activo</td>
                          <td>53</td>
                          <td><a href="notas_de_editores.php"><button class="boton_ver_mas_notas_editor"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>Sergio</td>
                          <td>Activo</td>
                          <td>8</td>
                          <td><a href="notas_de_editores.php"><button class="boton_ver_mas_notas_editor"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                        </tr>
                        <tr>
                          <th scope="row">8</th>
                          <td>Cristina</td>
                          <td>Activo</td>
                          <td>62</td>
                          <td><a href="notas_de_editores.php"><button class="boton_ver_mas_notas_editor"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                        </tr><tr>
                          <th scope="row">3</th>
                          <td>Diana</td>
                          <td>Activo</td>
                          <td>37</td>
                          <td><a href="notas_de_editores.php"><button class="boton_ver_mas_notas_editor"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Marian</td>
                          <td>Activo</td>
                          <td>11</td>
                          <td><a href="notas_de_editores.php"><button class="boton_ver_mas_notas_editor"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Alejandro</td>
                          <td>Activo</td>
                          <td>42</td>
                          <td><a href="notas_de_editores.php"><button class="boton_ver_mas_notas_editor"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Melissa</td>
                          <td>Activo</td>
                          <td>50</td>
                          <td><a href="notas_de_editores.php"><button class="boton_ver_mas_notas_editor"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Alberto</td>
                          <td>Activo</td>
                          <td>17</td>
                          <td><a href="notas_de_editores.php"><button class="boton_ver_mas_notas_editor"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <footer>
          <div class="pull-right">
            TODOS LOS DERECHOS RESERVADOS POR I24WEB 2010 - 2016
          </div>
          <div class="clearfix"></div>
        </footer>
      </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.min.js"></script>
  </body>
</html>