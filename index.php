<?php $homePage = true ?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="src/css/inicio.css" rel="stylesheet">
</head>

<body class="font-exo bg-palette-light text-palette-dark">

  <!-- Hero - section -->
  <section id="inicio" class="h-[350px] md:h-[441px] w-full bg-no-repeat bg-cover -mb-1 pb-1 relative overflow-hidden" style="background-image: url(src/images/web/hero.png)">
    <div class="w-full h-full bg-gradient-to-t from-palette-dark to-palette-dark/20 absolute top-0"></div>
    <div class="container h-full flex flex-col relative">
      <svg class="hidden lg:inline-block w-full absolute bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1296.16 639.58">
        <path class="recorrido" d="M221.06,1.5c-32.58,25.99-58.27,49.5-76.59,67.15c-44.3,42.67-78.31,75.92-107.79,128.55
          c-14.53,25.94-25.93,46.28-31.44,76.81c-7.47,41.39-7.61,120.18,36.91,140.81c26.36,12.21,65.21,2.58,83.39-21.87
          c13.86-18.64,18.67-49.86,5.47-60.15c-9.03-7.04-26.17-4.06-36.91,4.1c-27.12,20.6-19.54,79.38-4.1,116.2
          c15.58,37.15,45.66,68.31,108,101.16c102.18,53.85,197.75,63.36,238.15,66.99c122.1,10.97,529.48,45.74,631.71-35.46
          c25.7-20.41,40.62-43.84,40.62-43.84c21.12-33.05,26.45-67.63,31.9-102.99c5.6-36.37,3.94-54.67,18.16-82.99
          c10.1-20.12,19.71-28.37,22.85-30.93c18.33-14.92,44.78-21.8,70.18-15.49c23.64,5.87,37.84,21.06,43.09,27.34" />
      </svg>


      <div class="h-full flex justify-start items-center">
        <h1 class="w-full max-w-[47rem] mx-auto font-semibold text-3xl md:text-6xl text-white text-center drop-shadow-lg"><span class="leading-snug md:leading-tight">Prepárate para elevarte en tu viaje con nosotros</span></h1>
      </div>
      <div class="w-10/12 mx-auto relative pr-3 pl-5 py-4 bg-white rounded tracking-wide flex gap-y-1 flex-col md:flex-row justify-between items-left md:items-center">
        <a class="" href="#">
          <img class="w-[21px] h-[21px] object-contain inline-block" src="src/images/icons/todos.png" alt="Icono de todos los destinos disponibles">
          <span class="text-sm md:text-base align-middle pl-1">Todos los destinos</span>
        </a>

        <div class="h-[80%] border-r"></div>

        <a class="" href="#">
          <img class="w-[21px] h-[23px] object-contain inline-block" src="src/images/icons/en-oferta.png" alt="Icono de los destinos en oferta">
          <span class="text-sm md:text-base align-middle pl-1">En oferta</span>
        </a>

        <div class="h-[80%] border-r"></div>

        <a class="" href="#">
          <img class="w-[21px] h-[21px] object-contain inline-block" src="src/images/icons/mas-popular.png" alt="Icono de los destinos más populares">
          <span class="text-sm md:text-base align-middle pl-1">Más popular</span>
        </a>

        <div class="h-[80%] border-r"></div>

        <a class="" href="#">
          <img class="w-[21px] h-[22px] object-contain inline-block" src="src/images/icons/experiencia.png" alt="Icono de los destinos filtrados por experiencias">
          <span class="text-sm md:text-base align-middle pl-1">Experiencia</span>
        </a>

        <a class="w-11 h-11 inline-block bg-palette-primary p-3 rounded absolute md:static bottom-3 right-3 text-center" href="#">
          <svg class="h-full" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 15.57 15.57">
            <path fill="#FFFFFF" d="M3.26,12.63c2.57,1.52,5.59,1.22,7.72-0.45l3.14,3.14c0.33,0.33,0.87,0.33,1.2,0l0,0
              c0.33-0.33,0.33-0.87,0-1.2l-3.14-3.14c1.67-2.13,1.97-5.15,0.45-7.72c-0.92-1.56-2.49-2.68-4.25-3.08
              c-4.97-1.12-9.32,3.24-8.2,8.2C0.57,10.14,1.7,11.71,3.26,12.63z M5.64,1.83C9.36,1,12.62,4.26,11.79,7.98
              c-0.42,1.88-1.93,3.39-3.81,3.81C4.26,12.62,1,9.36,1.83,5.64C2.25,3.76,3.76,2.25,5.64,1.83z" />
          </svg>
        </a>
      </div>
    </div>
  </section>

  <!-- Header -->
  <header class="w-full top-0 z-40">
    <?php include 'components/layout/header.php' ?>
  </header>

  <main>

    <!-- About us - section -->
    <section id="sobre-nosotros" class="bg-palette-dark w-full overflow-hidden pb-12 lg:py-12">
      <div class="container flex flex-col">
        <img class="w-full object-cover object-left -ml-16 hidden lg:inline-block" src="src/images/web/te-invito-con-recorrido.png" alt="Letras de Te Invito">

        <div class="h-full flex">
          <div class="w-full max-w-lg h-full text-white p-3">
            <p class="mb-3">Más que una experiencia turística, somos una marca con diversidad, vivencias, identidad y saberes.</p>
            <p class="mb-3"><b>Te invito</b> es la propuesta que te llama a conectarte con el territorio de una forma única y exclusiva.</p>
          </div>
          <div class="w-52 md:w-full md:max-h-52 flex justify-end items-end">
            <img class="w-full md:max-h-52 object-contain" src="src/images/logos/sobre-nosotros.png" alt="Logo de Te Invito">
          </div>
        </div>

        <img class="w-full object-contain" src="src/images/web/destinos-colombia.png" alt="Collage de imágenes turisticas de Colombia" srcset="">
      </div>
      <div class="w-full h-14 lg:h-20 bg-contain -mt-7" style="background-image: url(src/images/decorations/zigzag-amarillo.png);"></div>
    </section>

    <!-- Services - section -->
    <section id="servicios" class="w-full bg-palette-yellow relative">
      <div class="w-full h-full absolute opacity-[0.03]" style="background-image: url(src/images/decorations/patron-circulos.png);"></div>
      <div class="container py-12 relative">
        <h2 class="text-center font-bold text-5xl py-5">Servicios</h2>
        <div class="w-11/12 max-w-2xl lg:max-w-none mx-auto text-center bg-white rounded flex flex-col lg:flex-row justify-around gap-y-7 py-10 shadow-xl">
          <div class="flex flex-col px-7">
            <img class="w-24 h-24 mx-auto mb-3 object-contain" src="src/images/icons/servicio-eventos.png" alt="Servicio de eventos">
            <h3 class="font-bold text-xl mb-2">Eventos</h3>
            <p class="w-56 mx-auto text-sm leading-snug">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</p>
          </div>

          <div class="flex flex-col mx-7 py-7 lg:py-0 lg:px-12 border-y lg:border-y-0 lg:border-x">
            <img class="w-24 h-24 mx-auto mb-3 object-contain" src="src/images/icons/servicio-turismo.png" alt="Servicio de turismo">
            <h3 class="font-bold text-xl mb-2">Turismo</h3>
            <p class="w-56 mx-auto text-sm leading-snug">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</p>
          </div>

          <div class="flex flex-col px-7">
            <img class="w-24 h-24 mx-auto mb-3 object-contain" src="src/images/icons/servicio-consultorias.png" alt="Servicio de consultorías">
            <h3 class="font-bold text-xl mb-2">Consultorías</h3>
            <p class="w-56 mx-auto text-sm leading-snug">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Categories - section -->
    <section id="categorias" class="bg-gradient-to-t from-palette-light to-white overflow-hidden">
      <div class="container relative py-16">
        <p class="max-w-3xl mx-auto font-bold text-3xl md:text-4xl text-center px-7">Siente la emoción de conectarte con <mark class="mark-yellow">nuestra cultura y lugares turísticos</mark></p>

        <div class="w-52 h-[30rem] absolute top-0 -left-40 -z-1 bg-palette-yellow/20"></div>
        <div class="w-36 h-[20rem] absolute -bottom-20 -right-20 -z-1 bg-palette-lightgreen/20"></div>

        <div class="py-7 relative">
          <div class="w-full lg:w-11/12 flex flex-wrap lg:justify-between gap-y-5">
            <a class="w-60 basis-1/2 lg:basis-[calc(25%-20px)] p-4 rounded-lg hover:shadow-md hover:bg-white transition duration-200" href="#">
              <img class="w-20 mb-3 object-contain" src="src/images/icons/categoria-agroturismo.png" alt="Categoría de turismo Agroturismo">
              <h3 class="font-bold text-xl mb-1">Agroturismo</h3>
              <p class="max-w-[16rem] text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam. </p>
            </a>

            <a class="w-60 basis-1/2 lg:basis-[calc(25%-20px)] p-4 rounded-lg hover:shadow-md hover:bg-white transition duration-200" href="#">
              <img class="w-20 mb-3 object-contain" src="src/images/icons/categoria-arqueologico.png" alt="Categoría de turismo Agroturismo">
              <h3 class="font-bold text-xl mb-1">Arqueológico</h3>
              <p class="max-w-[16rem] text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam. </p>
            </a>

            <a class="w-60 basis-1/2 lg:basis-[calc(25%-20px)] p-4 rounded-lg hover:shadow-md hover:bg-white transition duration-200" href="#">
              <img class="w-20 mb-3 object-contain" src="src/images/icons/categoria-bienestar.png" alt="Categoría de turismo Agroturismo">
              <h3 class="font-bold text-xl mb-1">Bienestar</h3>
              <p class="max-w-[16rem] text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam. </p>
            </a>

            <a class="w-60 basis-1/2 lg:basis-[calc(25%-20px)] p-4 rounded-lg hover:shadow-md hover:bg-white transition duration-200" href="#">
              <img class="w-20 mb-3 object-contain" src="src/images/icons/categoria-cientifico.png" alt="Categoría de turismo Agroturismo">
              <h3 class="font-bold text-xl mb-1">Cientifico</h3>
              <p class="max-w-[16rem] text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam. </p>
            </a>
          </div>

          <div class="w-full flex flex-wrap lg:justify-end gap-5 pt-5">
            <a class="w-60 basis-[calc(50%-20px)] lg:basis-[calc(25%-20px)] p-4 rounded-lg hover:shadow-md hover:bg-white transition duration-200" href="#">
              <img class="w-20 mb-3 object-contain" src="src/images/icons/categoria-cultural.png" alt="Categoría de turismo Agroturismo">
              <h3 class="font-bold text-xl mb-1">Cultural</h3>
              <p class="max-w-[16rem] text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam. </p>
            </a>

            <a class="w-60 basis-[calc(50%-20px)] lg:basis-[calc(25%-20px)] p-4 rounded-lg hover:shadow-md hover:bg-white transition duration-200" href="#">
              <img class="w-20 mb-3 object-contain" src="src/images/icons/categoria-naturaleza.png" alt="Categoría de turismo Agroturismo">
              <h3 class="font-bold text-xl mb-1">Naturaleza</h3>
              <p class="max-w-[16rem] text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam. </p>
            </a>

            <a class="w-60 basis-[calc(50%-20px)] lg:basis-[calc(25%-20px)] p-4 rounded-lg hover:shadow-md hover:bg-white transition duration-200" href="#">
              <img class="w-20 mb-3 object-contain" src="src/images/icons/categoria-religioso.png" alt="Categoría de turismo Agroturismo">
              <h3 class="font-bold text-xl mb-1">Religioso</h3>
              <p class="max-w-[16rem] text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam. </p>
            </a>
          </div>
        </div>

        <svg class="w-80 absolute -bottom-20 -scale-x-100 lg:scale-x-100 -right-1/3 sm:right-0 lg:-left-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.23 562.89">
          <path class="recorrido" d="M1.5,1.5c9.6,32.44,39.55,117.33,123.04,177.72c53.46,38.67,104.6,49.74,132.07,55.39
            c69.93,14.37,101.01-0.9,109.37-5.47c11.94-6.53,37.73-20.63,39.65-46.48c1.48-19.95-11.73-41.28-30.08-47.85
            c-23.82-8.52-52.27,11.01-64.25,27.34c-27.97,38.11,31.67,83.52,54.68,203.7c16.15,84.35-0.9,117.86-6.52,127.8
            c-23.34,41.26-64.74,56.6-76.67,60.51c-43.74,14.31-96.1,7.34-131.44-20.61c-39.45-31.21-33.09-69.13-69.19-85.01
            c-26.87-11.82-57.06-2.53-77.92,6.84" />
        </svg>
      </div>

      <div class="w-full relative flex items-center pb-16">
        <div class="w-full h-40 absolute opacity-10 my-auto bg-contain" style="background-image: url(src/images/decorations/patron-precolombino.png);"></div>

        <!-- Destination cards -->
        <div class="container overflow-x-auto flex lg:justify-between gap-x-3 relative p-3 pb-5">
          <svg class="w-full absolute bottom-0 right-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1350.29 142.32">
            <path class="recorrido" d="M1.5,31.45c19.15,26.8,38.99,38.71,53.11,44.66c76.84,32.34,181.65-29.1,281.62-44.66
              c9.92-1.54,26.59-4.33,47.58-2.39c36.02,3.33,55.49,19.92,167.51,22.44c115.06,2.59,216.94-12.34,331.75-29.16
              C987.39,7.05,985.05,2.47,1027.61,1.61c179.14-3.62,276.52,86.21,276.52,86.21c11.09,10.27,27.88,27.51,44.66,53" />
          </svg>
          <?php for ($i = 0; $i < 4; $i++) { ?>
            <div class="transition hover:scale-105 hover:shadow-lg">
              <div class="w-60 min-w-[13rem] h-[22rem] rounded-lg shadow-md flex flex-col justify-between bg-cover bg-no-repeat relative overflow-hidden" style="background-image: url(src/images/destinations/laguna-verde.png);">
                <a class="w-full h-full absolute top-0" href="#yendo-al-destino"></a>

                <!-- Shadows to highlight -->
                <div class="w-full h-24 pointer-events-none bg-gradient-to-b from-black/100 via-black/70  to-black/0 opacity-60 absolute top-0"></div>
                <div class="w-full h-24 pointer-events-none bg-gradient-to-t from-black/100 via-black/70  to-black/0 opacity-60 absolute bottom-0"></div>

                <div class="w-full flex gap-x-3 p-3 justify-between relative">
                  <!-- Destination title -->
                  <p class="w-full max-h-12 ellipsis-2 font-medium text-md drop-shadow-[0_1px_1px_rgba(0,0,0,0.25)] text-white" title="Laguna verde Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, cum nihil ut quae voluptates maxime illum, totam fugit deleniti ex doloremque, iure necessitatibus? Error, non unde minus optio magni dolorum!">Laguna verde Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, cum nihil ut quae voluptates maxime illum, totam fugit deleniti ex doloremque, iure necessitatibus? Error, non unde minus optio magni dolorum!</p>

                  <!-- Viewed -->
                  <button class="h-5 shrink-0 hover:scale-110" title="Aún no le echas un vistazo">
                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.4 17.76">
                      <path class="fill-white opacity-30" d="M5.56,9.06L2.02,5.53C0.63,7.04,0.11,8.56,0.1,8.59L0,8.88l0.1,0.29c0.02,0.06,2.12,6.12,9.1,6.12
                      c0.85,0,1.62-0.09,2.33-0.25l-2.51-2.51C7.15,12.43,5.65,10.93,5.56,9.06z M9.2,2.48c-1.7,0-3.09,0.37-4.25,0.91L1.56,0L0.27,1.29
                      l16.47,16.47l1.29-1.29l-3.02-3.02c2.41-1.79,3.27-4.24,3.29-4.28l0.1-0.29l-0.1-0.29C18.28,8.53,16.18,2.48,9.2,2.48z M10.94,9.38
                      c0.17-0.62,0.03-1.32-0.45-1.79C10.02,7.11,9.32,6.97,8.7,7.14L7.32,5.76C7.88,5.41,8.53,5.22,9.2,5.22c2.02,0,3.66,1.64,3.66,3.66
                      c0,0.66-0.19,1.31-0.54,1.88L10.94,9.38z" />
                    </svg>
                  </button>
                </div>

                <div class="w-full relative bottom-0">
                  <div class="w-full px-3 pb-4 flex justify-between items-center">
                    <!-- Ubication -->
                    <div class="w-10/12">
                      <div class="h-[1.1rem] -mt-1 pr-1 inline-block align-middle" title="Ubicación">
                        <svg class="h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.45 15.57">
                          <path class="fill-white opacity-50 align-top" d="M6.23,0C2.79,0,0,2.79,0,6.22c-0.02,5.02,5.99,9.18,6.23,9.34c0,0,6.25-4.33,6.23-9.34
                          C12.45,2.79,9.66,0,6.23,0z M6.23,9.34c-1.72,0-3.11-1.39-3.11-3.11c0-1.72,1.39-3.11,3.11-3.11c1.72,0,3.11,1.39,3.11,3.11
                          C9.34,7.95,7.95,9.34,6.23,9.34z" />
                        </svg>
                      </div>
                      <span class="w-10/12 font-light text-sm text-white tracking-wide inline-block whitespace-nowrap overflow-hidden text-ellipsis opacity-80 align-middle" title="Tuquerres, Nariño Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur recusandae ea nam. Facilis voluptatibus porro in vitae officia excepturi? Ullam in modi maxime quam excepturi quas fugit repellendus expedita tempore!">Tuquerres, Nariño Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur recusandae ea nam. Facilis voluptatibus porro in vitae officia excepturi? Ullam in modi maxime quam excepturi quas fugit repellendus expedita tempore!</span>
                    </div>

                    <!-- Like button -->
                    <button class="w-8 h-8 shrink-0 hover:scale-110" title="Me encanta">
                      <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.65 33.65">
                        <path class="fill-white opacity-25" d="M16.83,33.65L16.83,33.65c9.29,0,16.83-7.53,16.83-16.83v0C33.65,7.53,26.12,0,16.83,0h0 C7.53,0,0,7.53,0,16.83v0C0,26.12,7.53,33.65,16.83,33.65z" />

                        <!-- No-Actived -->
                        <path class="fill-white opacity-70" d="M8.91,15.01c0-2.35,1.78-4.18,4.34-4.2c1.3-0.01,2.36,0.6,3.26,1.48c0.26,0.25,0.38,0.26,0.65,0 c0.78-0.76,1.68-1.31,2.8-1.45c2.24-0.29,4.32,1.21,4.71,3.44c0.31,1.76-0.23,3.28-1.32,4.65c-0.96,1.2-2.19,2.12-3.36,3.11 c-0.85,0.72-1.71,1.42-2.45,2.27c-0.41,0.48-0.96,0.52-1.36,0.06c-1.2-1.36-2.67-2.42-4.03-3.6c-1.06-0.91-2.05-1.88-2.68-3.15 C9.09,16.87,8.89,16.07,8.91,15.01z M13.24,12.4c-1.36,0-2.35,0.71-2.67,1.96c-0.27,1.05-0.07,2.05,0.51,2.96 c0.54,0.85,1.25,1.53,2,2.19c1.18,1.04,2.45,1.96,3.56,3.08c0.16,0.16,0.26,0.13,0.4-0.02c0.89-0.88,1.88-1.66,2.84-2.46 c0.98-0.82,1.96-1.66,2.67-2.74c0.6-0.92,0.81-1.93,0.54-3c-0.44-1.74-2.48-2.55-4.03-1.6c-0.59,0.36-1.08,0.84-1.52,1.38 c-0.44,0.53-0.98,0.51-1.43-0.01c-0.25-0.29-0.51-0.58-0.8-0.83C14.71,12.79,14.08,12.36,13.24,12.4z" />

                        <!-- Actived -->
                        <!-- <path class="fill-[#E22020]" d="M8.91,15.01c0-2.35,1.78-4.18,4.34-4.2c1.3-0.01,2.36,0.6,3.26,1.48c0.26,0.25,0.38,0.26,0.65,0 c0.78-0.76,1.68-1.31,2.8-1.45c2.24-0.29,4.32,1.21,4.71,3.44c0.31,1.76-0.23,3.28-1.32,4.65c-0.96,1.2-2.19,2.12-3.36,3.11 c-0.85,0.72-1.71,1.42-2.45,2.27c-0.41,0.48-0.96,0.52-1.36,0.06c-1.2-1.36-2.67-2.42-4.03-3.6c-1.06-0.91-2.05-1.88-2.68-3.15 C9.09,16.87,8.89,16.07,8.91,15.01z" /> -->
                      </svg>
                    </button>
                  </div>

                  <!-- Category color -->
                  <div class="w-full text-center bg-palette-lima/50 -mb-12 hover:mb-0 transition-all duration-300 relative">
                    <div class="w-full block overflow-hidden absolute -top-5">
                      <div class="h-5 w-5 mx-auto bg-palette-lima/50 rotate-45 transform origin-bottom-left"></div>
                    </div>
                    <div class="h-full flex justify-center items-center py-4 px-3" title="Categoría Naturaleza Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum officiis quibusdam atque optio eum necessitatibus, quis cumque aspernatur nemo, accusantium quidem, harum natus fugit autem modi earum tenetur incidunt voluptatibus!">
                      <div class="h-8 shrink-0 mr-2"><img class="h-full mb-3 object-contain" src="src/images/icons/categoria-naturaleza.png" alt="Categoría de turismo Agroturismo"></div>
                      <p class="font-semibold text-white text-ellipsis whitespace-nowrap overflow-hidden align-middle">Naturaleza Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quam velit doloribus pariatur numquam, nobis soluta voluptatum quis assumenda rerum vero minima quisquam expedita beatae! Explicabo architecto nostrum sapiente velit.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>

    </section>

    <div class="bg-gradient-to-t from-palette-light to-white">

      <!-- CTA - section -->
      <section class="w-full bg-palette-lightblue relative">
        <div class="w-full h-full absolute opacity-[0.03]" style="background-image: url(src/images/decorations/patron-circulos.png);"></div>
        <div class="max-w-4xl mx-auto text-center text-white py-20 lg:py-28 px-5 relative">
          <h2 class="font-bold text-2xl md:text-4xl mb-2">Tu viaje a medida con nosotros</h2>
          <p class="font-light md:text-xl mb-5">Te ayudamos a encontrar los destinos y actividades ideales para ti, contáctanos y personalizaremos tu experiencia para planificar el viaje de tus sueños</p>
          <a class="btn-solid md:text-xl" href="#">Más info...</a>
        </div>
      </section>

      <!-- Video - section -->
      <section id="video" class="overflow-hidden relative pb-20">
        <div class="w-full h-40 absolute bottom-28 opacity-10 my-auto bg-contain" style="background-image: url(src/images/decorations/patron-precolombino.png);"></div>

        <div class="container px-0 py-10 flex flex-col lg:flex-row">
          <div class="w-full lg:max-w-xs relative px-4 lg:m-7 text-center lg:text-left">
            <div class="w-28 h-52 bg-palette-lightgreen/20 absolute -left-10 lg:-left-16 top-10 lg:top-32"></div>

            <div class="relative lg:top-20">
              <p class="text-sm text-palette-red tracking-wider font-bold mb-1 opacity-90">TURISMO, EVENTOS Y CONSULTORÍAS</p>
              <h2 class="font-bold text-4xl mb-3">Te cuento más sobre nosotros</h2>
              <p class="max-w-2xl mx-auto lg:max-w-auto leading-snug opacity-90">Descubre cómo trabajamos para <b>generar espacios</b> de experiencias armonicas y de desarrollo sostenible.</p>
            </div>
          </div>

          <div class="w-full relative pt-10 ">
            <svg class="w-1/3 absolute top-28 -right-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 228.89 60.89">
              <path class="recorrido !stroke-[3.5]" d="M1.5,1.5c38.12,27.61,62.07,48.31,103.49,55.48c49.44,8.56,93.56-7.39,122.4-21.6" />
            </svg>

            <svg class="w-full absolute -bottom-36 left-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 745.49 256.8">
              <path class="recorrido !stroke-[3.5]" d="M743.99,255.3c-60.07-34.55-111.87-50.99-146.93-59.58c-154.97-38-228.85,16.86-375.12-32.68 c-63.51-21.51-106-50.96-125.31-65.52C74.88,81.11,33.68,50.05,1.5,1.5" />
            </svg>

            <img class="w-full float-right relative -mr-3 -mt-3" src="src/images/web/video-presentation.png" alt="Video presentación de Te invito">

            <button class="w-16 h-16 rounded-full overflow-hidden hover:scale-105 transition-transform absolute inset-0 m-auto">
              <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81.1 81.1">
                <circle class="fill-palette-red" cx="40.55" cy="40.55" r="40.55" />
                <path class="fill-white" d="M32.11,58.91c-0.32,0-0.65-0.08-0.94-0.24c-0.65-0.35-1.06-1.03-1.06-1.76V24.2c0-0.74,0.41-1.42,1.06-1.76 c0.65-0.35,1.44-0.31,2.05,0.1l24.45,16.35c0.55,0.37,0.89,0.99,0.89,1.66s-0.33,1.29-0.89,1.66L33.22,58.57 C32.88,58.79,32.5,58.91,32.11,58.91z M34.11,27.94v25.22l18.86-12.61L34.11,27.94z" />
              </svg>
            </button>

          </div>
        </div>
      </section>

      <!-- Blog - section -->
      <section id="blog" class="text-center overflow-hidden">
        <h2 class="font-bold text-4xl lg:text-5xl">Descrube más en nuestro Blog</h2>
        <div class="w-3/5 md:w-40 h-1 mx-auto mt-7 bg-palette-primary rounded-full"></div>

        <div class="relative py-10">
          <div class="w-full h-full absolute flex items-center">
            <div class="w-full h-60 bg-red-500"></div>
          </div>

          <div class="container relative">
            <svg class="w-full absolute -bottom-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1345.73 136.97"">
              <path class=" recorrido" d="M1344.23,1.5c-15.03,13.83-42.88,37.49-82.03,58.78c-233.44,126.98-469.19-47.35-790.18-47.85 C365.63,12.27,203.09,31.14,1.5,135.47" />
            </svg>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 relative px-2 sm:px-7">
              <a class="aspect-square	col-span-2 row-span-2 shadow-lg shadow-black/25 rounded-lg hover:scale-105 transition-transform flex items-center bg-cover bg-center relative overflow-hidden" href="#" style="background-image: url(src/images/destinations/laguna-verde.png);">
                <div class="w-full p-10 bg-palette-dark/80 text-center">
                  <span class="block font-semibold text-palette-yellow text-xl tracking-[0.2em]">TURISMO</span>
                  <span class="block font-semibold text-white text-3xl ellipsis-2">¿Qué hacer en colombia Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ex sed pariatur eveniet itaque laudantium eos nobis quibusdam aperiam? Nulla ipsa optio rerum. In sint modi voluptas, libero consequatur ratione? ?</span>
                </div>

                <svg class="w-full absolute -bottom-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 570.21 70.58">
                  <path class="fill-palette-yellow" d="M570.21,0.01c-0.46,0-0.92,0.09-1.35,0.31l-69.93,35.17L429,0.32c-0.85-0.43-1.85-0.43-2.7,0l-69.93,35.17
                    L286.45,0.32c-0.85-0.43-1.85-0.43-2.7,0l-69.93,35.17L143.9,0.32c-0.85-0.43-1.85-0.43-2.7,0L71.27,35.49L1.34,0.32
                    C0.92,0.11,0.46,0,0,0v6.36l69.92,35.17c0.85,0.43,1.85,0.43,2.7,0l69.93-35.17l69.93,35.17c0.85,0.43,1.85,0.43,2.7,0L285.1,6.36
                    l69.93,35.17c0.85,0.43,1.85,0.43,2.7,0l69.93-35.17l69.93,35.17c0.85,0.43,1.85,0.43,2.7,0l69.93-35.18V0.01z" />
                  <path class="fill-palette-yellow" d="M570.21,28.75c-0.46,0-0.92,0.09-1.35,0.31l-69.93,35.17L429,29.05c-0.85-0.43-1.85-0.43-2.7,0l-69.93,35.17
                    l-69.93-35.17c-0.85-0.43-1.85-0.43-2.7,0l-69.93,35.17L143.9,29.05c-0.85-0.43-1.85-0.43-2.7,0L71.27,64.23L1.34,29.05
                    C0.92,28.84,0.46,28.73,0,28.73v6.36l69.92,35.17c0.85,0.43,1.85,0.43,2.7,0l69.93-35.17l69.93,35.17c0.85,0.43,1.85,0.43,2.7,0
                    l69.93-35.17l69.93,35.17c0.85,0.43,1.85,0.43,2.7,0l69.93-35.17l69.93,35.17c0.85,0.43,1.85,0.43,2.7,0l69.93-35.18V28.75z" />
                </svg>

              </a>

              <?php for ($i = 0; $i < 3; $i++) { ?>
                <a class="aspect-square	shadow-lg shadow-black/25 rounded-lg hover:scale-105 transition-transform flex items-center bg-cover bg-center" href="#" style="background-image: url(src/images/destinations/laguna-verde.png);">
                  <div class="w-full p-5 bg-palette-dark/80 text-center">
                    <span class="block font-semibold text-palette-lightblue text-xs tracking-[0.1em]">CONSULTORÍAS</span>
                    <span class="block font-semibold text-white text-lg ellipsis-2">¿Qué hacer en colombia Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ex sed pariatur eveniet itaque laudantium eos nobis quibusdam aperiam? Nulla ipsa optio rerum. In sint modi voluptas, libero consequatur ratione? ?</span>
                  </div>
                </a>
              <?php } ?>

              <a class="aspect-square	shadow-lg shadow-black/25 rounded-lg hover:scale-105 transition-transform flex items-center bg-cover bg-center" href="#" style="background-image: url(src/images/destinations/laguna-verde.png);">
                <div class="w-full p-5 bg-palette-dark/80 text-center">
                  <span class="block font-semibold text-palette-red text-xs tracking-[0.1em]">EVENTOS</span>
                  <span class="block font-semibold text-white text-lg ellipsis-2">¿Qué hacer en colombia Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ex sed pariatur eveniet itaque laudantium eos nobis quibusdam aperiam? Nulla ipsa optio rerum. In sint modi voluptas, libero consequatur ratione? ?</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- Footer -->
  <footer class="w-full top-0 z-40">
    <?php include 'components/layout/footer.php' ?>
  </footer>

  <script>
    // MENU TOP FIXED
    window.onscroll = function() {
      if (window.scrollY > document.getElementById("inicio").offsetHeight) {
        document.querySelector('header').classList.add('fixed')
      } else {
        document.querySelector('header').classList.remove('fixed')
      }
    };
  </script>
</body>

</html>