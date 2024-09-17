

<?php
include("oop.php");

if (isset($_POST["tampil"])) {
    $jumlah = $_POST['liter'];
    $jenis = $_POST['jenis'];

    $tampil = new Pertamina($jumlah, $jenis);
     $tampil->showScreen();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Receipt</title>
    <link rel="stylesheet" href="index.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 1.5em;
            margin-bottom: 20px;
            text-align: center;
        }

        .receipt {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 4px;
            font-size: 0.9em;
        }

        .receipt p {
            margin: 5px 0;
            font-size: 1em;
        }

        .receipt .total {
            font-weight: bold;
            font-size: 1.1em;
        }

        .receipt .highlight {
            font-weight: bold;
            color: #4caf50;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }

        .button-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Transaction Receipt</h1>
        <?php if (isset($result)): ?>
            <div class="receipt">
                <?php echo $result; ?>
            </div>
        <?php endif; ?>
        <div class="button-container">
            <button onclick="window.location.href='index.php'">Back</button>
        </div>
    </div>
</body>
</html>
