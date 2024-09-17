

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<center>
    <form action="payment.php" method="post">
        <!-- UNTUK JUMLAH LITER -->
        <label for="liter">Jumlah Liter:</label>
        <input type="number" name="liter" id="liter" required>

        <!-- UNTUK JENIS BAHAN BAKAR -->
        <label for="jenis">Bahan Bakar:</label>
        <select name="jenis" id="jenis" required>
            <option value="premium">Premium</option>
            <option value="pertalite">Pertalite</option>
            <option value="pertamax">Pertamax</option>
            <option value="turbo">Turbo</option>
        </select>

        <button type="submit" name="tampil">Bayar</button>
    </form>
</center>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    form {
        background-color: #fff;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="number"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    center {
        display: block;
        margin-top: 20px;
    }
</style>
</body>
</html>
