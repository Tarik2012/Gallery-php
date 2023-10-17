<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo2">Galeria de Tarik</h1>
        </div>
    </header>
    <section class="fotos">
        <div class="contenedor">
           <?php foreach($fotos as $foto):?>
            <div class="thumb">
                <a href="foto.php?id=<?php echo $foto['id'] ?>">
                    <img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
                </a>
            </div>
           <?php endforeach;?>
           <div class="paginacion">
					<!-- Si el usuario esta en la pagina principal entonces no mostramos el enlace a una pagina anterior -->
						<?php if ($pagina_actual != 1): ?>
							<a href="index.php?p=<?php echo $pagina_actual -1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
						<?php endif ?>

					<!-- Si el usuario esta en la pagina principal entonces no mostramos el enlace a una pagina siguiente -->
						<?php if ($total_paginas != $pagina_actual): ?>
							<a href="index.php?p=<?php echo $pagina_actual +1; ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
						<?php endif ?>
				</div>
    </section>
    <footer>
        <p class="copyright">Galeria creada por tarik</p>
    </footer>
</body>
</html>