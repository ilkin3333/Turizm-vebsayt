<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budapeşte - İstanbul Uçuş Bilgileri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #007BFF;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .flight-info {
            background: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .flight-info table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .flight-info table th, .flight-info table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .flight-info table th {
            background: #007BFF;
            color: #fff;
        }
        .flight-info table tr:nth-child(even) {
            background: #f9f9f9;
        }
        .flight-info table tr:hover {
            background: #f1f1f1;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
<header>
    <h1>Budapeşte - İstanbul Uçuş Bilgileri</h1>
</header>

<div class="container">
    <div class="flight-info">
        <h2>Uçuş Detayları</h2>
        <table>
            <thead>
            <tr>
                <th>Hava Yolu</th>
                <th>Uçuş Numarası</th>
                <th>Kalkış Zamanı</th>
                <th>Varış Zamanı</th>
                <th>Fiyat</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Türk Hava Yolları</td>
                <td>TK 1030</td>
                <td>10:00</td>
                <td>14:00</td>
                <td>1200 TL</td>
            </tr>
            <tr>
                <td>Wizz Air</td>
                <td>W6 247</td>
                <td>15:00</td>
                <td>19:00</td>
                <td>950 TL</td>
            </tr>
            <tr>
                <td>Pegasus</td>
                <td>PC 810</td>
                <td>18:00</td>
                <td>22:00</td>
                <td>1100 TL</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<footer>
    <p>&copy; 2024 Uçuş Bilgileri. Tüm hakları saklıdır.</p>
</footer>
</body>
</html>
