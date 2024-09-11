<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Barueri</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full min-h-screen bg-gray-100">
    <header class="flex shadow p-4 bg-gray-300">
        <a href="../index.html" class="text-xl font-thin">Health Barueri</a>

        <div class="flex-1"></div>

        <ul class="flex gap-4 max-sm:hidden *:*:flex *:*:gap-2 *:*:items-center *:*:border-b-2 *:*:transition">
            <li>
                <a class="px-4 hover:text-blue-700 font-thin py-2" href="../index.html#about">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M13 9h-2V7h2m0 10h-2v-6h2m-1-9A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2" />
                    </svg>
                    Sobre Nós
                </a>
            </li>
            <li>
                <a class="px-4 hover:text-blue-700 font-thin py-2" href="../index.html#appointment">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.1em" height="1.1em" viewBox="-2 -2 24 24">
                        <path fill="#a6adbb"
                            d="M7 12.917v.583a4.5 4.5 0 1 0 9 0v-1.67a3.001 3.001 0 1 1 2 0v1.67a6.5 6.5 0 1 1-13 0v-.583A6 6 0 0 1 0 7V2a2 2 0 0 1 2-2h1a1 1 0 1 1 0 2H2v5a4 4 0 1 0 8 0V2H9a1 1 0 1 1 0-2h1a2 2 0 0 1 2 2v5a6 6 0 0 1-5 5.917M17 10a1 1 0 1 0 0-2a1 1 0 0 0 0 2" />
                    </svg>
                    Consultas
                </a>
            </li>
            <li>
                <a class="px-4 hover:text-blue-700 font-thin py-2" href="login.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.1em" height="1.1em" viewBox="0 0 256 256">
                        <path fill="#a6adbb"
                            d="M230.93 220a8 8 0 0 1-6.93 4H32a8 8 0 0 1-6.92-12c15.23-26.33 38.7-45.21 66.09-54.16a72 72 0 1 1 73.66 0c27.39 8.95 50.86 27.83 66.09 54.16a8 8 0 0 1 .01 8" />
                    </svg>
                    Login
                </a>
            </li>
        </ul>
    </header>
    <main class="flex flex-col mt-24 w-full min-h-screen">
        <section class="flex flex-col items-center w-full">
            <main class="flex flex-col justify-center items-center w-2/5 bg-gray-300 rounded-xl shadow-xl mt-12">
                <form method="POST" class="flex flex-col w-full h-full justify-center items-center gap-4">
                    <h1 class="text-3xl font-bold pt-12 text-slate-700">Entrar com uma conta</h1>

                    <input type="text" id="nome" name="nome"
                        class="input input-bordered bg-gray-100 w-4/5 h-16 max-w-4/5" placeholder="Nome" required />

                    <input type="password" id="senha" name="senha"
                        class="input input-bordered bg-gray-100 w-4/5 h-16 max-w-4/5" placeholder="Senha" required />

                    <button class="btn bg-gray-100 w-4/5 mt-6 mb-12 border-0" type="submit"
                        name="submit">Enviar</button>
                </form>
            </main>
            <h1 class="pt-8 text-red-500" id="erro"></h1>
            <a href="registro.php" class="pt-8 hover:text-blue-700">Não possui uma conta? Crie uma!</a>
        </section>
    </main>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['submit'])) {
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            if (file_exists('users/users.txt')) {
                $credentials = file_get_contents('users/users.txt');

                $lines = explode("\n", $credentials);
                $tableData = [];
                foreach ($lines as $line) {
                    if (!empty($line)) {
                        $parts = explode(',', str_replace(array("\r\n", "\r", "\n"), '', $line));
                        $tableData[] = $parts;
                    }
                }
                foreach ($tableData as $row) {
                    if ($nome == htmlspecialchars($row[0]) && $senha == htmlspecialchars($row[1])) {
                        header("Location: ../index.html");
                    } else {
                        echo "<script>";
                        echo "document.addEventListener('DOMContentLoaded', function() {document.getElementById('erro').innerHTML = 'Usuário não registrado!'})";
                        echo "</script>";
                    }
                }
            } else {
                echo "<script>";
                echo "document.addEventListener('DOMContentLoaded', function() {document.getElementById('erro').innerHTML = 'Usuário não registrado!'})";
                echo "</script>";
            }
        }
    }
    ?>
</body>

</html>