<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Health Barueri</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php
include_once "connection.php";


$selectPacientes = $connection->prepare("SELECT * FROM paciente");
$selectPacientes->execute();

$pediatra = "pediatra";
$selectMedicos = $connection->prepare("SELECT * FROM medico WHERE especialidade = :pediatra");
$selectMedicos->bindParam("pediatra", $pediatra);
$selectMedicos->execute();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  $paciente = $_POST['paciente'];
  $medico = $_POST['medico'];
  $data = $_POST['data'];
  $descricao = $_POST['descricao'];

  $insertQuery = $connection->prepare("INSERT INTO consulta(paciente_id, medico_id, data_consulta, descricao) VALUES (:paciente, :medico, :data, :descricao)");
  $insertQuery->bindParam("paciente", $paciente);
  $insertQuery->bindParam("medico", $medico);
  $insertQuery->bindParam("data", $data);
  $insertQuery->bindParam("descricao", $descricao);
  $insertQuery->execute();
  header("Location: " . $_SERVER['PHP_SELF']);
  exit();
}

?>

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
  <main class="flex flex-col justify-center w-full min-h-screen">
    <section class="flex flex-col items-center w-full">
      <h1 class='text-3xl sm:text-4xl text-center font-bold pt-24 px-8'>Agendar Consulta com os nossos Pediatras</h1>
      <main
        class="flex flex-col justify-center items-center w-5/6 md:w-2/3 lg:w-2/5 bg-gray-300 rounded-xl shadow-xl mt-12">
        <form method="POST" class="flex flex-col w-full h-full justify-center items-center gap-4">
          <h1 class="text-2xl sm:text-3xl text-center font-bold pt-12 text-slate-700 px-8">Formulário de Contato</h1>


          <?php if ($selectPacientes->rowCount() === 0) { ?>
            <select id="paciente" name="paciente" class="input input-bordered bg-gray-100 w-4/5 h-16 max-w-4/5" required>
              <option value="">Nenhum paciente cadastrado</option>
            </select>
            <?php
          } else {
            ?>
            <select id="paciente" name="paciente" class="input input-bordered bg-gray-100 w-4/5 h-16 max-w-4/5" required>
              <?php
              while ($infoPaciente = $selectPacientes->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?= $infoPaciente['paciente_id'] ?>"><?= $infoPaciente['nome'] ?></option>
              <?php }
          }
          ; ?>
          </select>

          <?php if ($selectMedicos->rowCount() === 0) { ?>
            <select id="medico" name="medico" class="input input-bordered bg-gray-100 w-4/5 h-16 max-w-4/5" required>
              <option value="">Nenhum médico cadastrado</option>
            </select>
            <?php
          } else {
            ?>
            <select id="medico" name="medico" class="input input-bordered bg-gray-100 w-4/5 h-16 max-w-4/5" required>
              <?php
              while ($infoMedicos = $selectMedicos->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?= $infoMedicos['medico_id'] ?>"><?= $infoMedicos['nome'] ?></option>
              <?php }
          }
          ; ?>
          </select>

          <input type="datetime-local" id="data" name="data" class="input input-bordered bg-gray-100 w-4/5 h-16 max-w-4/5"
            placeholder="Data" required />

          <input type="text" id="descricao" name="descricao"
            class="input input-bordered bg-gray-100 w-4/5 h-8 max-w-4/5" placeholder="Descrição" required></input>

          <button class="btn bg-gray-100 w-4/5 mt-6 mb-12 border-0" type="submit" name="submit">Enviar</button>
        </form>
      </main>
    </section>

    <div class="w-full max-w-4xl mx-auto h-px bg-gray-300 mt-12 mb-8"></div>

    <section class="w-full flex flex-col items-center">
      <h1 class='text-center text-3xl sm:text-4xl font-bold'>Consultas Agendadas</h1>
      <?php
      $selectQuery = $connection->prepare("SELECT consulta.*, paciente.nome as paciente, medico.nome as medico FROM consulta INNER JOIN paciente ON paciente.paciente_id = consulta.paciente_id INNER JOIN medico ON medico.medico_id = consulta.medico_id WHERE medico.especialidade = :especialidade ORDER BY consulta.consulta_id;");
      $selectQuery->bindParam("especialidade", $pediatra);
      $selectQuery->execute();

      if ($selectQuery->rowCount() > 0) {
        ?>

        <div class="w-full max-w-4xl overflow-x-auto mx-12">
          <table class="w-full max-w-4xl my-12">
            <tr>
              <th class="border-2 bg-gray-300 px-8 py-4 font-bold">ID da consulta</th>
              <th class="border-2 bg-gray-300 px-8 py-4 font-bold">Paciente</th>
              <th class="border-2 bg-gray-300 px-8 py-4 font-bold">Médico</th>
              <th class="border-2 bg-gray-300 px-8 py-4 font-bold">Data</th>
              <th class="border-2 bg-gray-300 px-8 py-4 font-bold">Descrição</th>
            </tr>
            <?php

            while ($colunas = $selectQuery->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <tr>
                <td class="border-2 border-gray-300 px-8 text-center"><?php echo $colunas['consulta_id']; ?></td>
                <td class="border-2 border-gray-300 px-8 text-center"><?php echo $colunas['paciente']; ?></td>
                <td class="border-2 border-gray-300 px-8 text-center"><?php echo $colunas['medico']; ?></td>
                <td class="border-2 border-gray-300 px-8 text-center"><?php echo $colunas['data_consulta']; ?></td>
                <td class="border-2 border-gray-300 px-8 text-center"><?php echo $colunas['descricao']; ?></td>
              </tr>
            <?php }
      } else {
        echo "<h1 class='pt-4 text-lg'>Nenhuma consulta agendada até o momento</h1>";
      }
      ?>
        </table>
      </div>

      </h2>
      </tr>
    </section>
  </main>
</body>

</html>