<?php
    session_start();
    $var=$_SESSION['sesion'];
    if($var == null || $var = '' ){
        echo "Erro al autentificar";
        header("Location:index.php?error=x");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Vista/bootstrap.css">
    <link rel="stylesheet" href="Vista/header.css">
    <script src="https://kit.fontawesome.com/d848ccec99.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="bg-info w-100 p-4">
            <h4 class="font-italic"><i class="fas fa-users"></i> Bienvenda <?php echo $_SESSION['sesion']; ?></h4>
            <a href="CRUD_publicaciones.php" class="float-right text-dark">Convocatorias</a>
            <br>
            <a href="form_cerrarSession.php" class="float-right text-dark">cerrar session</a>
    </header>
    
    <div id="idConvicatoria" class="mx-auto w-75 p-4 my-5 border border-primary bg-secondary">
    <h1 class="text-center">Publicar Convocatoria</h1>
    <form action="form_subirPublicacion.php" method="post" enctype="multipart/form-data">
        <input type="text" name="titulo" id="titulo" placeholder="Titulo" required autocomplete="off">
        <br>
        <br>
        <textarea id="descripcion" rows="9" name="descripcion" style="resize:none; width:100%;"> </textarea>
        <br>
        <br>
        <input type="file" name="archivo" id="archivo" required accept='.pdf'> 

        <br>
        <br>
        <select id="lista1" name="lista1" class="mr-2">
				<option value="ConvocatoriaDocencia">Convocatoria de Docencia</option>
				<option value="ConvocatoriaAuxiliar">Convocatoria de Auxiliar</option>
				
		</select>

        <select id="lista2" name="lista2" class="mr-2">
				<option value="Convocatoria Sistemas">Departamento de Sistemas/Informatica</option>
				<option value="Convocatoria de biologia">Departamento De Biologia</option>
                <option value="Convocatoria de fisica">Departamento De Fisica</option>
				
		</select>

        <select id="lista3" name="lista3" class="mr-2">
				<option value="gestion I">Gestion I </option>
				<option value="Gestion II">Gestion II</option>	
		</select>
        <br>
        <br>
        <label for="fechaDeExpiracion"> Fecha de Expiracion</label>
        <input type="date" name="fechaDeExpiracion" id="fechaDeExpiracion">
        <label for="horaDeExpiracion"> Hora de Expiracion</label>
        <input type="time" name="horaDeExpiracion" id="horaDeExpiracion">
        <br>
        <br>
        <div class="d-block w-25 mx-auto">
            <input class="btn btn-primary" type="submit" value="Publicar">
            <a href="CRUD_publicaciones.php" class="btn btn-danger ml-5">Cancelar</a>
        </div>
    </form>
        
    </div>

    <footer class="pieIndice">
        <div class="text-center">
            <h6 class="d-inline-block">Contacto: <a  href="mailto:elcorreoquequieres@correo.com">correo_del_Administardor@mail.com ,</a> <a  href="mailto:elcorreoquequieres@correo.com">  correo_de_la_Empresa@mail.com</a></h6>
            <h6 class="d-inline-block">Telefono: (+591) 72584871 Administrador, (+591) 77581871 Secretaria</h6 >
        </div>
        <div class="text-center">
            <h6>Sitios Relacionados : 
                <a href="http://www.umss.edu.bo/" target="_blank">UMSS</a>
                <a href="http://websis.umss.edu.bo/" target="_blank"> | WEBSISS</a>
                <a href="https://www.facebook.com/UmssBolOficial" target="_blank"> | facebook</a>
                <a href="https://twitter.com/UmssBolOficial" target="_blank"> | Twitter</a>
                <a href="https://www.instagram.com/umssboloficial/" target="_blank"> | Instagram</a>
                <a href="https://www.linkedin.com/school/universidad-mayor-de-san-simon/" target="_blank"> | Linkedin</a>
                <a href="https://www.youtube.com/universidadmayordesansimon" target="_blank"> | Youtube</a>                
            </h6>
        </div>
        <div class="text-center">
            <h6>Derechos Reservados © 2020 · Universidad Mayor de San Simón.</h6>
        </div>
    </footer>
</body>
</html>