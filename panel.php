<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #007bff;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #0056b3;
        }
        .container {
            margin: 20px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#home">Anasayfa</a>
        <a href="#appointments">Randevular</a>
        <a href="#contact">İletişim</a>
    </div>
    <div class="container">
        <h1>Randevu Yönetimi</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ad Soyad</th>
                    <th>E-mail</th>
                    <th>Telefon Numarası</th>
                    <th>Tarih</th>
                    <th>Saat</th>
                    <th>Ekstrem Spor</th>
                    <th>Özel İstekler</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("baglanti.php");

                $sql = "SELECT * FROM randevuform";
                $result = $baglan->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['Name Surname']}</td>
                                <td>{$row['E-mail']}</td>
                                <td>{$row['Phone Number']}</td>
                                <td>{$row['Date']}</td>
                                <td>{$row['Time']}</td>
                                <td>{$row['Extreme Sports']}</td>
                                <td>{$row['Text']}</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No records found</td></tr>";
                }

                $baglan->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
