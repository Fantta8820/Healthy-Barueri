<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Health Barueri</title>

  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />

  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full min-h-screen bg-gray-100">
  <header class="flex items-center justify-between shadow p-4 bg-gray-300">
    <a href="home.php" class="text-xl font-thin">Health Barueri</a>

    <div class="dropdown dropdown-end block md:hidden">
      <div tabindex="0" role="button" class="btn text-white h-4 bg-gray-400 border border-0"><svg
          xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24">
          <path fill="white" d="M3 18v-2h18v2zm0-5v-2h18v2zm0-5V6h18v2z" />
        </svg></div>
      <ul tabindex="0" class="dropdown-content menu bg-gray-400 z-[1] w-52 p-2 shadow *:text-white">
        <li>
          <a class="px-4 hover:text-blue-700 font-thin py-2" href="home.php#about">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
              <path fill="currentColor"
                d="M13 9h-2V7h2m0 10h-2v-6h2m-1-9A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2" />
            </svg>
            Sobre Nós
          </a>
        </li>
        <li>
          <a class="px-4 hover:text-blue-700 font-thin py-2" href="home.php#appointment">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.1em" height="1.1em" viewBox="-2 -2 24 24">
              <path fill="currentColor"
                d="M7 12.917v.583a4.5 4.5 0 1 0 9 0v-1.67a3.001 3.001 0 1 1 2 0v1.67a6.5 6.5 0 1 1-13 0v-.583A6 6 0 0 1 0 7V2a2 2 0 0 1 2-2h1a1 1 0 1 1 0 2H2v5a4 4 0 1 0 8 0V2H9a1 1 0 1 1 0-2h1a2 2 0 0 1 2 2v5a6 6 0 0 1-5 5.917M17 10a1 1 0 1 0 0-2a1 1 0 0 0 0 2" />
            </svg>
            Consultas
          </a>
        </li>
        <li>
          <a class="px-4 hover:text-blue-700 font-thin py-2" href="../auth/paciente.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.1em" height="1.1em" viewBox="0 0 256 256">
              <path fill="currentColor"
                d="M230.93 220a8 8 0 0 1-6.93 4H32a8 8 0 0 1-6.92-12c15.23-26.33 38.7-45.21 66.09-54.16a72 72 0 1 1 73.66 0c27.39 8.95 50.86 27.83 66.09 54.16a8 8 0 0 1 .01 8" />
            </svg>
            Cadastrar
          </a>
        </li>
      </ul>
    </div>

    <ul class="hidden md:flex gap-4 *:*:flex *:*:gap-2 *:*:items-center *:*:border-b-2 *:*:transition">
      <li>
        <a class="px-4 hover:text-blue-700 font-thin py-2" href="home.php#about">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M13 9h-2V7h2m0 10h-2v-6h2m-1-9A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2" />
          </svg>
          Sobre Nós
        </a>
      </li>
      <li>
        <a class="px-4 hover:text-blue-700 font-thin py-2" href="home.php#appointment">
          <svg xmlns="http://www.w3.org/2000/svg" width="1.1em" height="1.1em" viewBox="-2 -2 24 24">
            <path fill="#a6adbb"
              d="M7 12.917v.583a4.5 4.5 0 1 0 9 0v-1.67a3.001 3.001 0 1 1 2 0v1.67a6.5 6.5 0 1 1-13 0v-.583A6 6 0 0 1 0 7V2a2 2 0 0 1 2-2h1a1 1 0 1 1 0 2H2v5a4 4 0 1 0 8 0V2H9a1 1 0 1 1 0-2h1a2 2 0 0 1 2 2v5a6 6 0 0 1-5 5.917M17 10a1 1 0 1 0 0-2a1 1 0 0 0 0 2" />
          </svg>
          Consultas
        </a>
      </li>
      <li>
        <a class="px-4 hover:text-blue-700 font-thin py-2" href="../auth/paciente.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="1.1em" height="1.1em" viewBox="0 0 256 256">
            <path fill="#a6adbb"
              d="M230.93 220a8 8 0 0 1-6.93 4H32a8 8 0 0 1-6.92-12c15.23-26.33 38.7-45.21 66.09-54.16a72 72 0 1 1 73.66 0c27.39 8.95 50.86 27.83 66.09 54.16a8 8 0 0 1 .01 8" />
          </svg>
          Cadastrar
        </a>
      </li>
    </ul>
  </header>

  <main class="w-full max-w-4xl grid place-items-center px-12 sm:px-20 mx-auto p-4">
    <section class="space-y-4 my-4 *:text-justify" id="about">
      <h2 class="text-3xl font-semibold">Sobre Nós</h2>

      <p>
        No Health Barueri, nossa missão é proporcionar a você e sua família
        acesso a informações confiáveis e atualizadas sobre saúde e bem-estar.
        Com uma abordagem centrada no paciente e uma equipe de especialistas
        dedicados, estamos aqui para apoiar suas necessidades de saúde em
        todas as fases da vida.
      </p>
      <p>
        Explore nossos recursos abrangentes, que incluem detalhes sobre uma
        variedade de especialidades médicas, desde pediatria até ortopedia,
        odontologia e oftalmologia. Seja para entender melhor uma condição
        específica, encontrar o tratamento mais adequado ou simplesmente obter
        orientações sobre cuidados preventivos, estamos aqui para ajudar.
      </p>
      <p>
        Navegue por nossas seções informativas, agende consultas com
        profissionais qualificados e descubra dicas valiosas para manter um
        estilo de vida saudável. No Health Barueba, acreditamos que a
        informação é a base para uma vida saudável e queremos ser seu parceiro
        confiável nessa jornada.
      </p>
      <p>
        Agradecemos por visitar nosso site e confiar em nós para suas
        necessidades de saúde. Estamos comprometidos em oferecer a melhor
        orientação e suporte para você e sua família.
      </p>
    </section>

    <div class="w-full h-px bg-gray-300 my-8"></div>

    <section class="grid grid=cols-1 sm:grid-cols-2 gap-4 *:card w-full" id="appointment">
      <article class="group shadow p-8">
        <h1 class="text-2xl flex items-center gap-2 group-hover:text-blue-700 transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M15.75 19.13c-.83 0-1.5-.84-1.5-1.88c0-1.03.67-1.87 1.5-1.87s1.5.84 1.5 1.87c0 1.04-.67 1.88-1.5 1.88M12 11.25c-1.24 0-2.25-.84-2.25-1.87c0-1.04 1.01-1.88 2.25-1.88s2.25.84 2.25 1.88c0 1.03-1.01 1.87-2.25 1.87m-3.75 7.88c-.83 0-1.5-.84-1.5-1.88c0-1.03.67-1.87 1.5-1.87s1.5.84 1.5 1.87c0 1.04-.67 1.88-1.5 1.88M12 8.25c.41 0 .75.34.75.75s-.34.75-.75.75s-.75-.34-.75-.75s.34-.75.75-.75M18.75 12c-.32 0-.63.07-.91.2c-.48-.61-1.13-1.13-1.91-1.53c.57-.8.91-1.77.91-2.82v-.06c1.09-.23 1.91-1.2 1.91-2.37c0-1.33-1.09-2.42-2.42-2.42c-.69 0-1.33.29-1.75.75a4.81 4.81 0 0 0-5.16 0C9 3.29 8.36 3 7.67 3C6.34 3 5.25 4.09 5.25 5.42c0 1.16.82 2.13 1.9 2.37v.06c0 1.05.35 2.03.91 2.82c-.77.4-1.42.92-1.9 1.53A2.24 2.24 0 0 0 3 14.25c0 1.25 1 2.25 2.25 2.25h.06c-.04.24-.06.5-.06.75c0 2.07 1.34 3.75 3 3.75c1.01 0 1.9-.63 2.45-1.59c.42.06.85.09 1.3.09s.88-.03 1.3-.09c.55.96 1.44 1.59 2.45 1.59c1.66 0 3-1.68 3-3.75c0-.25-.02-.51-.06-.75h.06c1.25 0 2.25-1 2.25-2.25S20 12 18.75 12" />
          </svg>
          Pediatra
        </h1>

        <p class="line-clamp-3 text-justify my-4">
          O pediatra é o médico especializado no cuidado da saúde infantil,
          desde o nascimento até a adolescência. Ele acompanha o crescimento e
          o desenvolvimento das crianças, realiza exames de rotina, vacinações
          e trata de doenças comuns e condições específicas da infância. O
          pediatra também orienta os pais sobre nutrição, segurança e
          prevenção de doenças.
        </p>

        <a href="pediatra.php" class="hover:text-blue-700 font-thin border-b-2 p-2">
          Agendar
        </a>
      </article>

      <article class="group shadow p-8">
        <h1 class="text-2xl flex items-center gap-2 group-hover:text-blue-700 transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
            <g fill="none">
              <path
                d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
              <path fill="currentColor"
                d="M7.96 7.257c1.397-1.047 3.352-1.511 5.248-1.119c3.763.78 5.725 3.791 5.79 7.54c.054 3.047-1.88 6.8-4.822 8.013c-1.76.726-4.046-.016-4.763-1.873c-.267-.693-.214-1.366-.102-2.044l.08-.452c.058-.313.117-.629.15-.949c.067-.649-.304-1.053-.773-1.388l-.24-.162l-.556-.35l-.266-.183c-.63-.451-1.298-1.093-1.574-2.239c-.485-2.005.41-3.73 1.828-4.794M5 3.5a2 2 0 1 1 0 4a2 2 0 0 1 0-4m13.5 1a1 1 0 1 1 0 2a1 1 0 0 1 0-2M9.5 2a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m5 0a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3" />
            </g>
          </svg>
          Ortopedista
        </h1>

        <p class="line-clamp-3 text-justify my-4">
          O ortopedista é o médico que se dedica ao diagnóstico, tratamento e
          reabilitação de problemas relacionados ao sistema
          musculoesquelético, que inclui ossos, articulações, músculos e
          ligamentos. Ele trata de fraturas, lesões esportivas, deformidades e
          condições crônicas como a artrite. O ortopedista pode realizar
          procedimentos cirúrgicos e terapias não invasivas.
        </p>

        <a href="ortopedista.php" class="hover:text-blue-700 font-thin border-b-2 p-2">Agendar</a>
      </article>

      <article class="group shadow p-8">
        <h1 class="text-2xl flex items-center gap-2 group-hover:text-blue-700 transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M7 2C4 2 2 5 2 8c0 2.11 1 5 2 6s2 8 4 8c4.54 0 2-7 4-7s-.54 7 4 7c2 0 3-7 4-8s2-3.89 2-6c0-3-2-6-5-6s-3 1-5 1s-2-1-5-1" />
          </svg>
          Dentista
        </h1>

        <p class="line-clamp-3 text-justify my-4">
          O dentista é o profissional responsável pela saúde bucal, incluindo
          a prevenção, diagnóstico e tratamento de problemas relacionados aos
          dentes, gengivas e boca. Ele realiza limpezas, restaurações,
          extrações e tratamentos de canal, além de orientar sobre cuidados
          com a higiene oral e a prevenção de doenças bucais.
        </p>

        <a href="dentista.php" class="hover:text-blue-700 font-thin border-b-2 p-2">Agendar</a>
      </article>

      <article class="group shadow p-8">
        <h1 class="text-2xl flex items-center gap-2 group-hover:text-blue-700 transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5" />
          </svg>
          Oftalmologista
        </h1>

        <p class="line-clamp-3 text-justify my-4">
          O oftalmologista é o médico especializado no diagnóstico, tratamento
          e prevenção de doenças e distúrbios dos olhos e da visão. Ele
          realiza exames oftalmológicos, prescreve óculos e lentes de contato,
          e trata condições como catarata, glaucoma e degeneração macular. O
          oftalmologista também pode realizar cirurgias oculares e intervir em
          problemas de visão relacionados a doenças sistêmicas.
        </p>

        <a href="oftalmologista.php" class="hover:text-blue-700 font-thin border-b-2 p-2">Agendar</a>
      </article>
    </section>
  </main>
</body>

</html>