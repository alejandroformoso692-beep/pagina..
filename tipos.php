<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Brawl Dex - Tipos de Brawler</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#d9d9d9;
}

.contenedor{
    width:950px;
    margin:20px auto;
    background:#ff0000;
    border:3px solid #0099ff;
    min-height:700px;
}

header{
    background:#ffe600;
    padding:10px;
    display:flex;
    align-items:center;
}

.logo{
    width:70px;
    margin-right:20px;
}

nav{
    display:flex;
    flex-wrap:wrap;
    gap:10px;
}

nav a{
    text-decoration:none;
    color:black;
    font-size:12px;
    font-weight:bold;
}

.titulo{
    background:yellow;
    display:inline-block;
    margin:25px;
    padding:8px 15px;
    font-size:20px;
}

.brawlers{
    display:flex;
    justify-content:space-around;
    margin-top:20px;
    padding:20px;
}

.card{
    width:250px;
    color:white;
}

.card img{
    width:100px;
    height:100px;
    border:6px solid black;
}

.card p{
    margin-top:15px;
    line-height:1.6;
}

.boton{
    text-align:center;
    margin-top:40px;
}

.boton a{
    background:yellow;
    color:black;
    text-decoration:none;
    font-weight:bold;
    padding:15px 60px;
    font-size:25px;
}

footer{
    text-align:center;
    padding:20px;
    color:white;
}

</style>
</head>

<body>

<div class="contenedor">

<header>

<img src="logo.png" class="logo">

<nav>
<a href="index.html">GUIAS</a>
<a href="catalogo.html">CATALOGO</a>
<a href="meta.html">META</a>
<a href="tipos.html">TIPOS DE BRAWLER</a>
<a href="modos.html">MODOS DE JUEGOS</a>
<a href="brawlpass.html">BRAWL PASS</a>
<a href="novedades.html">NOVEDADES</a>
<a href="campeonato.html">CAMPEONATO</a>
<a href="tips.html">TIPS</a>
</nav>

</header>

<h2 class="titulo">Brawlers</h2>

<div class="brawlers">

<div class="card">
<img src="shelly.png" alt="Shelly">

<p>
Shelly es la francotiradora perfecta pero su punteria flaquea cuando se trata de elegir amigos. Su mejor amigo es un cactus llamado Spike.
</p>
</div>

<div class="card">
<img src="sandy.png" alt="Sandy">

<p>
Sandy es un brawler adormilado que tiene una conexion especial con la arena. Ataca a los enemigos a pedradas e invoca una tormenta de arena para proteger a sus aliados.
</p>
</div>

<div class="card">
<img src="leon.png" alt="Leon">

<p>
Leon es mas bien un lobo solitario asi que su habilidad de volverse invisible le va al pelo. Su hermana Nita es la unica con la que se muestra tal y como es.
</p>
</div>

</div>

<div class="boton">
<a href="modos.html">VER MAS</a>
</div>

<footer>
BRAWL DEX © 2026
</footer>

</div>

</body>
</html>