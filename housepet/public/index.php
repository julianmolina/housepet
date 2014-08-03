<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6 no-js" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 no-js" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->
       <!-- html5.js for IE less than 9 -->
        <!--[if lt IE 9]>
                <script src="assets/js/lib/html5.js"></script>
        <![endif]-->
    

<head>
  <meta charset="UTF-8"/>
  <meta name="description" content=""/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <meta name="google-site-verification" content=""/>
  <meta name="robots" content="All" />
  <meta name="keywords" content="" />

  <title>HousePet</title>
   
  <link type="text/plain" rel="author" href="humans.txt" />
  <link rel="shortcut icon" href="favicon.ico" >
  <link rel="stylesheet" href="assets/css/boostrap.css">
  <link rel="stylesheet" href="assets/css/housepet.css">

  <script src="assets/js/lib/modernizr.min.js"></script>

</head>
<body>


<?php include('header.php'); ?>	

  <!--=======================Inicio Contenido=============================-->
  <section class="container">
  <div class="marge-top">
    <div class="row">
      <div class="col-lg-6">
        <h2>Comunicate con todos tus amigos</h2>
        <img src="assets/imgs/img1.jpg" class="full-width img-thumbnail" alt="">
      </div>

      <div class="col-lg-6">
        <form action="" class="registrese">
          <label class="titulos-form" for="">Regístrate</label>
          <fieldset class="align-input-two">
            <input class="form-control" placeholder="Nombre" type="text">
            <input class="form-control" placeholder="Apellido" type="text">
          </fieldset>
          <fieldset class="form-group">
            <input class="form-control" placeholder="Correo Electrónico" type="text">
          </fieldset>
          <fieldset class="form-group">
            <input class="form-control" placeholder="Vuelva a introducir el correo electrónico" type="text">
          </fieldset>
          <fieldset class="form-group">
            <input class="form-control" placeholder="Contraseña nueva" type="password">
          </fieldset>
          <label class="titulos-form-small" for="">Fecha de nacimiento</label>
          <fieldset class="align-select">
            <select name=""  class="form-control" id="">
                <option value="0">Día</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <select name=""  class="form-control" id="">
                <option value="0">Mes</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <select name=""  class="form-control" id="">
                <option value="0">Año</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
          </fieldset>
          <fieldset class="form-group">
            <label class="radio-inline" for="radios-0"><input type="radio">Hombre</label>
            <label class="radio-inline" for="radios-1"><input type="radio">Mujer</label>
          </fieldset>
          <fieldset class="form-group">
            <div class="inline">
              <input type="checkbox">
              Acepto <a href="#">Terminos y condiciones</a>
            </div>
          </fieldset>
          <fieldset class="form-group">
            <button class="btn btn-lg btn-primary btn-block">Terminado</button>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  </section>

  <!--===Fin Contenido===-->




  <!--=======================Inicio Footer================================-->

  <!--===Fin Footer===-->

  <?php include('footer.php'); ?>
</div>

</body>
</html>
