<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Simples</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    @keyframes animate {
        0% {
            transform: translateY(0) rotate(0deg);
            opacity: 1;
            border-radius: 0;
        }

        100% {
            transform: translateY(-1000px) rotate(720deg);
            opacity: 0;
            border-radius: 50%;
        }
    }

    .background {
        position: fixed;
        width: 100vw;
        height: 100vh;
        top: 0;
        left: 0;
        margin: 0;
        padding: 0;
        background: #475569;
        overflow: hidden;
        z-index: -1;
    }

    .background li {
        position: absolute;
        display: block;
        list-style: none;
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.2);
        animation: animate 19s linear infinite;
    }

    .background li:nth-child(0) {
        left: 83%;
        width: 142px;
        height: 142px;
        bottom: -142px;
        animation-delay: 1s;
    }

    .background li:nth-child(1) {
        left: 18%;
        width: 137px;
        height: 137px;
        bottom: -137px;
        animation-delay: 5s;
    }

    .background li:nth-child(2) {
        left: 74%;
        width: 189px;
        height: 189px;
        bottom: -189px;
        animation-delay: 6s;
    }

    .background li:nth-child(3) {
        left: 53%;
        width: 172px;
        height: 172px;
        bottom: -172px;
        animation-delay: 4s;
    }

    .background li:nth-child(4) {
        left: 75%;
        width: 153px;
        height: 153px;
        bottom: -153px;
        animation-delay: 18s;
    }

    .background li:nth-child(5) {
        left: 67%;
        width: 105px;
        height: 105px;
        bottom: -105px;
        animation-delay: 25s;
    }

    .background li:nth-child(6) {
        left: 2%;
        width: 161px;
        height: 161px;
        bottom: -161px;
        animation-delay: 30s;
    }

    .background li:nth-child(7) {
        left: 18%;
        width: 154px;
        height: 154px;
        bottom: -154px;
        animation-delay: 26s;
    }

    .background li:nth-child(8) {
        left: 55%;
        width: 171px;
        height: 171px;
        bottom: -171px;
        animation-delay: 19s;
    }

    .background li:nth-child(9) {
        left: 15%;
        width: 159px;
        height: 159px;
        bottom: -159px;
        animation-delay: 22s;
    }
</style>

<body>
    <ul class="background">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = htmlspecialchars($_POST['nome']);
        $data = htmlspecialchars($_POST['data']);
        $hora = htmlspecialchars($_POST['hora']);

        $changeTime = strtotime($data);
        $newData = date('d-m-Y', $changeTime);

        echo '<section  class="w-full h-screen flex flex-col justify-center items-center">';
        echo "<h1 class='text-center text-white text-5xl font-bold'>Consultas Agendadas</h1>";
        echo '<table class="grid place-items-center text-white w-full mt-12">';                
        echo '<tr>';
        echo '<th class="border-2 px-8 py-4 font-bold">Nome</th>';
        echo '<th class="border-2 px-8 py-4 font-bold">Data</th>';
        echo '<th class="border-2 px-8 py-4 font-bold">Hora</th>';
        echo '</tr>';
        echo '<tr>';        
        echo "<td class='border-2 px-8 py-4 text-center'>$nome</td>";
        echo "<td class='border-2 px-8 py-4 text-center'>$newData</td>";
        echo "<td class='border-2 px-8 py-4 text-center'>$hora</td>";        
        echo '</tr>';
        echo '</table>';
        echo '</section>';
    } else {
        echo "<div class='w-full h-screen flex flex-col justify-center items-center'>";
        echo "<p class='text-xl font-semibold'>Por favor, envie o formulário.<p>";
        echo "</div>";
    }
    ?>
</body>

</html>