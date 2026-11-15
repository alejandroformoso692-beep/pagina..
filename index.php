<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brawl Dex</title>

    <link rel="stylesheet" href="estilos.css">

    <style>
        /* ============================= */
        /* RELOJ */
        /* ============================= */
        #reloj {
            position: absolute;
            top: 10px;
            left: 10px;
            background: black;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            font-family: Arial, sans-serif;
            z-index: 1000;
        }

        #fecha {
            font-size: 14px;
        }

        #hora {
            font-size: 18px;
            font-weight: bold;
        }

        /* ============================= */
        /* INTERRUPTOR MODO OSCURO */
        /* ============================= */
        #tema {
            position: absolute;
            top: 10px;
            right: 15px;
            background: white;
            padding: 10px;
            border-radius: 20px;
            z-index: 1000;
        }

        /* ============================= */
        /* MODO OSCURO */
        /* ============================= */
        body.oscuro {
            background: #222;
            color: white;
        }

        body.oscuro .contenido {
            background: #333;
            color: white;
        }

        body.oscuro #informacion {
            background: #333;
            color: white;
        }

        body.oscuro .formulario {
            background: #333;
            color: white;
        }

        /* ============================= */
        /* MENU INTERACTIVO */
        /* ============================= */
        .menu-interactivo {
            width: 80%;
            max-width: 700px;
            margin: 30px auto;
            text-align: center;
        }

        .boton-menu {
            width: 100%;
            padding: 15px;
            background: #ffcc00;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }

        #informacion {
            display: none;
            background: white;
            color: black;
            padding: 20px;
            border-radius: 0 0 8px 8px;
        }
    </style>
</head>

<body>

    <!-- ENCABEZADO -->
    <header>
        <img src="logo.png" alt="Brawl Dex" class="logo">
    </header>

    <!-- RELOJ -->
    <div id="reloj">
        <div id="fecha"></div>
        <div id="hora"></div>
    </div>

    <!-- INTERRUPTOR MODO OSCURO -->
    <div id="tema">
        <label>
            🌙
            <input type="checkbox" id="interruptor" onchange="cambiarTema()">
            ☀️
        </label>
    </div>

    <!-- MENU -->
    <nav>
        <a href="index.php">GUIAS</a>
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

    <!-- BUSCADOR -->
    <div class="buscador">
        <input type="text" placeholder="Buscar...">
    </div>

    <!-- TITULO -->
    <h2 class="titulo">BRAWL DEX</h2>

    <!-- CONTENIDO -->
    <div class="contenido">
        <p>Bienvenido a Brawl Dex.</p>
        <br>
        <p>
            Explora guías, brawlers, modos de juego,
            metas, rankings y consejos para mejorar
            en Brawl Stars.
        </p>
    </div>

    <!-- MENU INTERACTIVO -->
    <div class="menu-interactivo">
        <button class="boton-menu" onclick="mostrarInformacion()">
            ▼ VER INFORMACIÓN DE BRAWL DEX
        </button>

        <div id="informacion">
            <h2>¿Qué es Brawl Dex?</h2>
            <p>
                Brawl Dex es una página creada para
                encontrar información sobre Brawl Stars.
            </p>
            <br>
            <p>
                Podés encontrar guías, información
                sobre brawlers, modos de juego,
                consejos, novedades y rankings.
            </p>
        </div>
    </div>

    <!-- VIDEO -->
    <div class="video">
        <video width="700" height="400" controls autoplay muted loop preload="auto">
            <source src="videoplayback.mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </div>

    <!-- GALERIA DE IMAGENES -->
    <div class="galeria">
        <h2>Galería de Brawl Stars</h2>

        <img id="imagenGrande" src="imagen1.jpg" alt="Imagen de Brawl Stars" width="600">

        <br><br>

        <button onclick="anteriorImagen()">◀ Anterior</button>
        <button onclick="siguienteImagen()">Siguiente ▶</button>

        <br><br>

        <img class="miniatura" src="imagen1.jpg" onclick="mostrarImagen(0)" alt="Imagen 1" width="120">
        <img class="miniatura" src="imagen2.jpg" onclick="mostrarImagen(1)" alt="Imagen 2" width="120">
        <img class="miniatura" src="imagen3.jpg" onclick="mostrarImagen(2)" alt="Imagen 3" width="120">
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // =============================
        // GALERÍA DE IMÁGENES
        // =============================
        let imagenes = [
            "imagen1.jpg",
            "imagen2.jpg",
            "imagen3.jpg"
        ];

        let posicion = 0;

        function mostrarImagen(numero) {
            posicion = numero;
            document.getElementById("imagenGrande").src = imagenes[posicion];
        }

        function siguienteImagen() {
            posicion++;
            if (posicion >= imagenes.length) {
                posicion = 0;
            }
            document.getElementById("imagenGrande").src = imagenes[posicion];
        }

        function anteriorImagen() {
            posicion--;
            if (posicion < 0) {
                posicion = imagenes.length - 1;
            }
            document.getElementById("imagenGrande").src = imagenes[posicion];
        }

        // =============================
        // MENSAJE DE BIENVENIDA
        // =============================
        window.onload = function() {
            alert("bienvenidos a mi pagina");
        };

        // =============================
        // FECHA Y HORA
        // =============================
        function actualizarFechaHora() {
            let ahora = new Date();
            let fecha = ahora.toLocaleDateString("es-AR");
            let hora = ahora.toLocaleTimeString("es-AR");

            document.getElementById("fecha").innerHTML = "Fecha: " + fecha;
            document.getElementById("hora").innerHTML = "Hora: " + hora;
        }

        actualizarFechaHora();
        setInterval(actualizarFechaHora, 1000);

        // =============================
        // MENÚ INTERACTIVO
        // =============================
        function mostrarInformacion() {
            let informacion = document.getElementById("informacion");

            if (informacion.style.display === "block") {
                informacion.style.display = "none";
            } else {
                informacion.style.display = "block";
            }
        }

        // =============================
        // MODO OSCURO
        // =============================
        function cambiarTema() {
            document.body.classList.toggle("oscuro");
        }
    </script>

</body>
</html>