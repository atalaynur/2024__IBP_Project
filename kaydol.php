<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaydol</title>
    <link rel="stylesheet" href="style4.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 2em;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            text-align: center;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.75em;
            margin: 0.5em 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 0.75em;
            margin: 0.5em 0;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
            background-color: rgb(119, 10, 65);
            color: white;
        }
        .link {
            color: rgb(119, 10, 65);
            text-decoration: none;
        }
        .link:hover {
            text-decoration: underline;
        }
        .divider {
            margin: 1em 0;
            display: flex;
            align-items: center;
        }
        .divider::before, .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background-color: rgb(168, 156, 156);
        }
        .divider::before {
            margin-right: 10px;
        }
        .divider::after {
            margin-left: 10px;
        }
        .ui-datepicker {
            background-color: white; /* Set background color to white */
            border: 1px solid #ccc; /* Add a light border */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
        }
        .ui-datepicker-header {
            background-color: #f5f5f5; /* Set header background color */
            border-bottom: 1px solid #ccc;
            padding: 0.5em;
        }
        .ui-datepicker-title {
            font-weight: bold;
            text-align: center;
        }
        .ui-datepicker-prev, .ui-datepicker-next {
            cursor: pointer;
            display: inline-block;
            padding: 0.2em 0.4em;
            font-size: 12px;
            margin-right: 10px; /* Adjust spacing between buttons */
        }
        .ui-datepicker-prev:hover, .ui-datepicker-next:hover {
            background-color: #eee;
        }
        .ui-datepicker-calendar {
            width: 100%;
            padding: 0;
        }
        .ui-datepicker-week-head {
            background-color: #f5f5f5; /* Set background color for day headers */
            border-bottom: 1px solid #ccc;
        }
        .ui-datepicker-day {
            padding: 0.5em;
            border: 1px solid #ccc; /* Add borders to each day cell */
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kaydol</h2>
        <form action="#" method="POST">
            <input type="text" name="ad" placeholder="Ad" required>
            <input type="text" name="soyad" placeholder="Soyad" required>
            <input type="text" name="telefonnumarası" placeholder="Telefon Numarası" required>
            <input type="text" id="dogumtarihi" name="doğumtarihi" placeholder="Doğum Tarihi" required>
            <input type="text" name="cinsiyet" placeholder="Cinsiyet" required>
            <input type="email" name="email" placeholder="E-posta" required>
            <input type="password" name="password" placeholder="Şifre" required>
            <button type="submit">
            <a href="giris.php" class="link"> GİRİŞ </button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#dogumtarihi").datepicker({
                dateFormat: "dd/mm/yy"
            });
        });
    </script>
</body>
</html>