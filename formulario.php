<?php
include("class/persona.php");

$persona = new persona();

if(!empty($_POST))
{
	$nombre 			= $_POST["nombre"];
	$sexo 				= $_POST["sexo"];
	$direccion 			= $_POST["direccion"];
	$fecha_nacimiento 	= $_POST["fecha_nacimiento"];
	$curp 				= $_POST["curp"];

	$persona->nombre 			= $nombre;
	$persona->sexo 				= $sexo;
	$persona->direccion 		= $direccion;
	$persona->fecha_nacimiento 	= $fecha_nacimiento;
	$persona->curp 				= $curp;
	
	/*
	$persona->declarar_persona(
		     $nombre,
		     $fecha_nacimiento,
		     $sexo,
		     $curp,
		     $direccion);
	*/
	//$datos_persona = $persona->obtener_datos();

}else{
	$nombre = "";
	$sexo = "";
	$direccion = "";
	$fecha_nacimiento = "";
	$curp = "";
} //end else


 /**
  * Header file
  */
 require_once("template/header.php");
?>

 <div class="container-fluid">
      <div class="row">
 <?php
        /**
         * Siderbar File
         */
         require_once("template/sidebar.php") 
         ?>
         <div class="col-sm-9 col-md-9 col-md-offset-2 main">
         		<h1>Formulario persona</h1>
		
    <?php if(empty($_POST)) 
    	  {	?>
		<form  action="" role="form" method="post" name="formulario_persona">

		  <div class="form-group">
		    <label >Nombre</label>
		    <input required type="text" name="nombre" class="form-control" >
		  </div>

		  <div class="form-group">
		    <label >Fecha Nacimiento</label>
		    <input type="text" name="fecha_nacimiento" class="form-control" >
		  </div>

		  <div class="form-group">
		    <label >Sexo</label>
		    <select name="sexo" class="form-control">
		    	<option value="Hombre">Hombre</option>
		    	<option value="Mujer">Mujer</option>
		    </select>
		  </div>

		  <div class="form-group">
		    <label >CURP</label>
		    <input type="text" name="curp" class="form-control" >
		  </div>

		  <div class="form-group">
		    <label >Dirección</label>
		    <textarea name="direccion" class="form-control"></textarea>
		  </div>  

		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	<?php }else{ 

			echo '<h2>Datos</h2>';
			$salto = "<br>";
			
				echo "Nombre: " 	.$persona->nombre . $salto;
				echo "Curp: " 		.$persona->curp. $salto;
				echo "Direccion: "	.$persona->direccion . $salto;
				echo "Sexo: " 		.$persona->sexo . $salto;
				echo "Fecha Nacimiento: ".$persona->fecha_nacimiento . $salto;

			
	 } ?>
	</div>
	</div>
</div>

    <?php
    /**
     * Footer
     */
    require_once("template/footer.php");