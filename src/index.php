<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">

        <h1>Dashboard</h1>

        <div class="cards">

            <div class="card">
                <h2>🌡 Temperatura</h2>
                <p id="temperature">24°C</p>
            </div>

            <div class="card">
                <h2>🚶 Movimento</h2>
                <p id="motion">Sem movimento</p>
            </div>

            <div class="card">
                <h2>🚨 Estado do alarme</h2>
                <p id="alarm-status">DESARMADO</p>
            </div>

        </div>

        <div class="buttons">

            <button id="arm-btn">
                Armar Alarme
            </button>

            <button id="disarm-btn">
                Desarmar Alarme
            </button>

        </div>

        <div class="logs">
            <h2>📜 Logs</h2>

            <ul id="log-list">
                <li>Sistema iniciado</li>
            </ul>
        </div>

    </div>

    <script src="script.js"></script>

</body>
</html>