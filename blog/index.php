<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.108.0">
  <title>Inicio de Sesion</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
  }

  .b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
  }

  .bi {
    vertical-align: -.125em;
    fill: currentColor;
  }

  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
  }

  .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
  }
</style>


<!-- Custom styles for this template -->
<link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="../css/blog.css" rel="stylesheet">
</head>
<style>
  #usuario {
    background: #84F3C2;
  }

  #categoria {
    background: #CEB5F8;
  }

  #blog {
    background: #BBD6DE;
  }

  #comentario {
    background: #85C1E9;
  }

  #entrada {
    background: burlywood;
  }
</style>

<body>

  <div class="container">
    <header class="blog-header lh-1 py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-12 text-center">
          <a class="blog-header-logo text-dark" href="../login.php">Mi Blog</a>
        </div>
      </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <li><i class="bi bi-person"><a class="p-2 link-secondary" href="#usuario"> Usuarios</a></i></li>
        <li><i class="bi bi-bookmark"><a class="p-2 link-secondary" href="#categoria"> Categorias</a></i></li>
        <li><i class="bi bi-book"><a class="p-2 link-secondary" href="#blog"> Blogs</a></i></li>
        <li><i class="bi bi-send"><a class="p-2 link-secondary" href="#comentario"> Comentarios</a></i></li>
        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
            <path fill-rule="evenodd"
              d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
            <a class="p-2 link-secondary" href="#entrada"> Entrada</a></svg></li>

        <form class="d-flex" role="search">
          <li class="nav-item">
            <a class="btn btn-outline-danger" onclick=cerrarSesion()><svg xmlns="http://www.w3.org/2000/svg" width="16"
                height="16" fill="currentColor" class="bi bi-building-lock" viewBox="0 0 16 16">
                <path
                  d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1V1Z" />
                <path
                  d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
              </svg> Cerrar Sesion</a>
          </li>

        </form>
      </nav>
    </div>
  </div>

  <main class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">Mi blog escolar</h1>
        <p class="lead my-3">Creacion de un blog escolar con difentes categorias a elegir de tu preferencia. Si deseas
          crear tu primer blog da en... <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
            <path
              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
          </svg></p>
        <p class="lead mb-0"><a href="creablock.php" class="text-white fw-bold">Crea tu blog...</a></p>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-md-6">
        <div id="categoria"
          class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Categorias</strong>
            <h2 class="mb-0">Actualiza y Consulta tu categoria</h2>
            <a href="eliminarcategorias.php" class="stretched-link">Edición y Consulta de Categorias</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" img
              src="../img/categoria.jpg" class="card-img-top" aria-label="Placeholder: Thumbnail"
              preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
            </svg>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div id="categoria"
          class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Categorias</strong>
            <h3 class="mb-0">Creación de nueva categoria </h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">Crear diferentes categorias para tu blog. <svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                <path
                  d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                <path
                  d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
              </svg></p>
            <a href="../blog/categorias.php" class="stretched-link">Nueva categoria</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <div class="card" style="width: 13rem;">
              <img src="../img/categoria.jpg" class="card-img-top" alt="...">
            </div>

          </div>
        </div>
      </div>
    </div>

    <div id="blog" class="row g-6">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
          Blog
        </h3>

        <article class="blog-post">
          <h2 class="blog-post-title mb-1">Blog </h2>
          <p class="blog-post-meta">Enero 1, 2021 por <a href="#">Jocelyn</a></p>

          <p>Tsu publicación de blog muestra algunos tipos diferentes de contenido que es compatible y está diseñado con
            Bootstrap. BÁSICO
            la tipografía, las listas, las tablas, las imágenes, el código y más son compatibles como se esperaba.</p>
          <hr>
          <p>Este es un contenido de marcador de posición de párrafo adicional. Ha sido escrito para llenar el espacio
            disponible y
            mostrar cómo un fragmento de texto más largo afecta el contenido que lo rodea. Lo repetiremos a menudo para
            mantener la
            demostración fluyendo, así que esté atento a esta misma cadena de texto.</p>
          <h2>Citas en bloque</h2>
          <p>Este es un ejemplo de cita en bloque en acción:</p>
          <blockquote class="blockquote">
            <p>El texto citado va aquí.</p>
          </blockquote>
          <p>Este es un contenido de marcador de posición de párrafo adicional. Ha sido escrito para llenar el espacio
            disponible y
            mostrar cómo un fragmento de texto más largo afecta el contenido que lo rodea. Lo repetiremos a menudo para
            mantener la
            demostración fluyendo, así que esté atento a esta misma cadena de texto.</p>
          <h3>Listas de ejemplo</h3>
          <p>Este es un contenido de marcador de posición de párrafo adicional. Es una versión un poco más corta de la
            otra altamente
            cuerpo de texto repetitivo utilizado en todas partes. Este es un ejemplo de lista desordenada:</p>
          <ul>
            <li>Primer elemento de la lista</li>
            <li>Segundo elemento de la lista con una descripción más larga</li>
            <li>Tercer elemento de la lista para cerrarlo</li>
          </ul>
          <p>Y esta es una lista ordenada:</p>
          <ol>
            <li>Primer elemento de la lista</li>
            <li>Segundo elemento de la lista con una descripción más larga</li>
            <li>Tercer elemento de la lista para cerrarlo</li>
          </ol>
          <p>Y esta es una lista de definiciones:</p>
          <dl>
            <dt>Lenguaje de marcado de hipertexto (HTML)</dt>
            <dd>El lenguaje utilizado para describir y definir el contenido de una página web.</dd>
            <dt>Hojas de estilo en cascada (CSS)</dt>
            <dd>Se utiliza para describir la apariencia del contenido web.</dd>
            <dt>JavaScript (JS)</dt>
            <dd>El lenguaje de programación utilizado para construir aplicaciones y sitios web avanzados.</dd>
          </dl>
          <h2>Elementos HTML en línea</h2>
          <p>HTML define una larga lista de etiquetas en línea disponibles, una lista completa de las cuales se puede
            encontrar en el <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Red de desarrolladores
              de Mozilla</a>.</p>
          <ul>
            <li><strong>Al texto en negrita</strong>, uso <code
                class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.</li>
            <li><em>Para poner texto en cursiva</em>, uso <code
                class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.
            </li>
            <li>abreviaturas, como<abbr title="HyperText Markup Language">HTML</abbr> debería usar <code
                class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, Con una opcional <code
                class="language-plaintext highlighter-rouge">título</code> atributo para la frase completa.</li>
            <li>citas, como<cite>— Mark Otto</cite>, debería usar <code
                class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
            <li><del>Eliminar</del> el texto debe usar<code
                class="language-plaintext highlighter-rouge">&lt;del&gt;</code>
              y <ins>inserted</ins> el texto debe usar<code
                class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.</li>
            <li>Superscript <sup>text</sup> uses <code class="language-plaintext highlighter-rouge">&lt;sup&gt;</code>
              and subscript <sub>text</sub> uses <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.
            </li>
          </ul>
          <p>La mayoría de estos elementos están diseñados por navegadores con pocas modificaciones de nuestra parte.
          </p>
          <h2>Título</h2>
          <p>Este es un contenido de marcador de posición de párrafo adicional. Ha sido escrito para llenar el espacio
            disponible y
            mostrar cómo un fragmento de texto más largo afecta el contenido que lo rodea. Lo repetiremos a menudo para
            mantener la
            demostración fluyendo, así que esté atento a esta misma cadena de texto.</p>
          <h3>Subtítulo</h3>
          <p>Este es un contenido de marcador de posición de párrafo adicional. Ha sido escrito para llenar el espacio
            disponible y
            mostrar cómo un fragmento de texto más largo afecta el contenido que lo rodea. Lo repetiremos a menudo para
            mantener la
            demostración fluyendo, así que esté atento a esta misma cadena de texto.</p>
          <pre><code>Bloque de código de ejemplo</code></pre>
          <p>Este es un contenido de marcador de posición de párrafo adicional. Es una versión un poco más corta de la
            otra altamente
            cuerpo de texto repetitivo utilizado en todas partes.</p>
        </article>

        <article class="blog-post">
          <h2 class="blog-post-title mb-1">Entrada del blog</h2>
          <p class="blog-post-meta">Dieciembre 23, 2020 by <a href="#">Jacob</a></p>

          <p>Este es un contenido de marcador de posición de párrafo adicional. Ha sido escrito para llenar el espacio
            disponible y
            mostrar cómo un fragmento de texto más largo afecta el contenido que lo rodea. Lo repetiremos a menudo para
            mantener la
            demostración fluyendo, así que esté atento a esta misma cadena de texto.</p>
          <blockquote>
            <p>Cita más larga va aquí, tal vez con algunos<strong>texto enfatizado</strong> en medio de eso.</p>
          </blockquote>
          <p>Este es un contenido de marcador de posición de párrafo adicional. Ha sido escrito para llenar el espacio
            disponible y
            mostrar cómo un fragmento de texto más largo afecta el contenido que lo rodea. Lo repetiremos a menudo para
            mantener la
            demostración fluyendo, así que esté atento a esta misma cadena de texto.</p>
          <h3>Tabla de ejemplo</h3>
          <p>Y no te olvides de las tablas en estas publicaciones:</p>
          <table class="table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Votos a favor</th>
                <th>Votos negativos</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Alice</td>
                <td>10</td>
                <td>11</td>
              </tr>
              <tr>
                <td>Bob</td>
                <td>4</td>
                <td>3</td>
              </tr>
              <tr>
                <td>Charlie</td>
                <td>7</td>
                <td>9</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td>Totales</td>
                <td>21</td>
                <td>23</td>
              </tr>
            </tfoot>
          </table>

          <p>Este es un contenido de marcador de posición de párrafo adicional. Es una versión un poco más corta de la
            otra altamente
            cuerpo de texto repetitivo utilizado en todas partes.</p>
        </article>

        <article id="comentario" class="blog-post">
          <h2 class="blog-post-title mb-1">Comentarios</h2>
          <p class="blog-post-meta">Febrero 27, 2023 por <a href="#">Victoria</a></p>

          <p>Apartado de comentarios</p>
          <ul>
            <li>Primer elemento de la lista</li>
            <li>Segundo elemento de la lista con una descripción más larga</li>
            <li>Tercer elemento de la lista para cerrarlo</li>
          </ul>
          <p>Este es un contenido de marcador de posición de párrafo adicional. Es una versión un poco más corta de la
            otra altamente
            cuerpo de texto repetitivo utilizado en todas partes.</p>
        </article>

        <nav class="blog-pagination" aria-label="Pagination">
          <a class="btn btn-outline-primary rounded-pill" href="comentario.php">Nuevo comentario</a>
        </nav>

      </div>
     <div class="col-md-4">
      <div class="position-sticky">
      <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">Consulta Usuarios</h4>
            <p class="mb-0">Puedes consultar todos los Usuarios en el siguiente apartado. <svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg></p>
              <a href="consultaUsuario.php" class="stretched-link">Consulta Usuarios</a>
          </div>
      </div>
     </div>
      <div id="usuario" class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">Usuarios</h4>
            <p class="mb-0">Puedes crear un usuario en el siguiente apartado. <svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg></p>
            <a href="usuario.php" class="stretched-link">Crear un usuario</a>
          </div>
         
          <div class="p-4">
            <h4 class="fst-italic">Archivos</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">Enero 2021</a></li>
              <li><a href="#">Febrero 2021</a></li>
              <li><a href="#">Marzo 2021</a></li>
              <li><a href="#">Abril 2020</a></li>
              <li><a href="#">Mayo 2019</a></li>
              <li><a href="#">Junio 2019</a></li>
              <li><a href="#">Julio 2018</a></li>
              <li><a href="#">Agosto 2017</a></li>
              <li><a href="#">Septiembre 2016</a></li>
              <li><a href="#">Octubre 2016</a></li>
              <li><a href="#">Noviembre 2015</a></li>
              <li><a href="#">Diciembre 2015</a></li>
            </ol>
          </div>

          <div class="p-4">
            <h4 class="fst-italic">En otra parte</h4>
            <ol class="list-unstyled">
              <i class="bi bi-github"><a href="#">GitHub</a></li>
                <i class="bi bi-twitter"><a href="#">Twitter</a></li>
                  <i class="bi bi-facebook"><a href="#">Facebook</a></li>
                    <i class="bi bi-instagram"><a href="#">Instagram</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

  </main>

  <footer class="blog-footer">
    <p>Mi blog UTA <a href="https://getbootstrap.com/">Equipo TECNO</a>por <a href="https://twitter.com/mdo">@TECNO
        TEAM</a>.</p>
    <p>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill"
        viewBox="0 0 16 16">
        <path
          d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z" />
        <path
          d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z" />
        <a href="#">Contectanos</a></svg>
    </p>
  </footer>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
  <script src="../sweetalert/dist/sweetalert2.all.min.js"></script>


</body>

</html>