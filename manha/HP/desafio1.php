<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Três Valores</title>
</head>
<body>
    <h2>Soma de Três Valores</h2>
    <form method="post" action="">
        <input type="number" name="valor1" placeholder="Digite o primeiro valor" required><br>
        <input type="number" name="valor2" placeholder="Digite o segundo valor" required><br>
        <input type="number" name="valor3" placeholder="Digite o terceiro valor" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["valor1"];
        $n2 = $_POST["valor2"];
        $n3 = $_POST["valor3"];

        $resultado_adicao = $n1 + $n2 + $n3;
        echo "<br>Resultado da Adição: $n1 + $n2 + $n3 = $resultado_adicao <br>";
        }
    ?>
</body>
</html>






