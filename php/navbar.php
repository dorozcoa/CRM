<nav class="navbar navbar-default" role="navigation">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php"><b><div align="left"><img src="imagenes/logo-crm.jpg" width='100px' heigth='120px' title="Hola aca registras la opcion"> </div>
   </b></a></b></a>
    
  <div align="center"><img src="imagenes/logo_head.png" width='150px' heigth='120px' title="Hola acà ingresas a las opciones"> </div>
  </div>

  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><a class=navbar-brand href="ver.php">VER</a></li>
    </ul>
<form class="navbar-form navbar-left" role="search" action="./buscar.php">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>       
</form>
         <div align="left"><img src="imagenes/compusep-02.png" width='200px' heigth='200px' title="Ir a la pàgina principal"> </div>  
        
  </div>
     <div align="right"> <?php include "./home.php"; ?></div>
</div>
</nav>