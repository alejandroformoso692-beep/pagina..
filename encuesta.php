```html
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Encuesta - Brawl Dex</title>

<link rel="stylesheet" href="estilos.css">

</head>


<body>

<header>

<img src="logo.png" alt="Brawl Dex" class="logo">

</header>


<nav>

<a href="index.html">GUIAS</a>
<a href="brawlers.html">CATALOGO</a>
<a href="meta.html">META</a>
<a href="tipos.html">TIPOS DE BRAWLER</a>
<a href="modos.html">MODOS DE JUEGO</a>
<a href="topglobales.html">TOP GLOBALES</a>
<a href="tips.html">TIPS</a>
<a href="calidad.html">CALIDAD DE BRAWLERS</a>
<a href="novedades.html">NOVEDADES</a>
<a href="brawlpass.html">BRAWL PASS</a>
<a href="encuesta.html">ENCUESTA</a>

</nav>


<div class="formulario">

<h1>ENCUESTA BRAWL DEX</h1>


<form id="formulario">


<label>Nombre:</label>

<input type="text" id="nombre" placeholder="Ingresá tu nombre">

<p id="errorNombre"></p>


<label>Correo electrónico:</label>

<input type="text" id="correo" placeholder="ejemplo@gmail.com">

<p id="errorCorreo"></p>


<label>Brawler favorito:</label>

<input type="text" id="brawler" placeholder="Ingresá tu brawler favorito">

<p id="errorBrawler"></p>


<button type="submit">
Enviar encuesta
</button>


</form>

</div>


<script>


let formulario = document.getElementById("formulario");


formulario.addEventListener("submit", function(event) {

    event.preventDefault();


    let nombre =
        document.getElementById("nombre").value.trim();

    let correo =
        document.getElementById("correo").value.trim();

    let brawler =
        document.getElementById("brawler").value.trim();


    let errorNombre =
        document.getElementById("errorNombre");

    let errorCorreo =
        document.getElementById("errorCorreo");

    let errorBrawler =
        document.getElementById("errorBrawler");


    // Borrar mensajes anteriores

    errorNombre.innerHTML = "";
    errorCorreo.innerHTML = "";
    errorBrawler.innerHTML = "";


    // VALIDAR NOMBRE

    if (nombre === "") {

        errorNombre.innerHTML =
            "⚠️ El nombre no puede estar vacío.";

    }


    // VALIDAR CORREO

    let formatoCorreo =
        /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


    if (correo === "") {

        errorCorreo.innerHTML =
            "⚠️ El correo no puede estar vacío.";

    }

    else if (!formatoCorreo.test(correo)) {

        errorCorreo.innerHTML =
            "⚠️ Ingresá un correo electrónico válido.";

    }


    // VALIDAR BRAWLER

    if (brawler === "") {

        errorBrawler.innerHTML =
            "⚠️ El brawler no puede estar vacío.";

    }


    // SI TODO ESTÁ CORRECTO

    if (
        nombre !== "" &&
        formatoCorreo.test(correo) &&
        brawler !== ""
    ) {

        alert("¡Encuesta enviada correctamente!");

    }

});

</script>


<footer>

BRAWL DEX © 2026

</footer>


</body>

</html>
```
