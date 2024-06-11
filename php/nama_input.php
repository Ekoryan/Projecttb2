<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Izin Masuk Desa Badui</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }

        form label {
            font-weight: 600;
            color: #2c3e50;
        }

        form input, form textarea {
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        form input:focus, form textarea:focus {
            border-color: #3498db;
            box-shadow: 0 0 8px rgba(52, 152, 219, 0.2);
            outline: none;
        }

        form textarea {
            resize: vertical;
            min-height: 100px;
        }

        form button {
            padding: 12px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }

        form button:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        form button:active {
            background-color: #1f6391;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    
    <header>
        <img src="../image/gambar2.jpg" alt="Logo Desa Sejahtera">
        <nav>
        <ul>
        <li><a href="../index.php">Home</a></li>
    </ul>
    </nav>
    </header>
    <main>
        <div class="content">
            <h1>Input Data Izin Masuk Desa Badui</h1>
            <form action="submit_izin_data.php" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
                <label for="tgl_masuk">Tanggal Masuk:</label>
                <input type="date" id="tgl_masuk" name="tgl_masuk" required>
                <label for="tgl_keluar">Tanggal Keluar:</label>
                <input type="date" id="tgl_keluar" name="tgl_keluar" required>
                <button type="submit">Submit</button>
            </form>
        </div>
    </main>
    <footer>
    <p>&copy; 2024 Website yang mengenalkan tentang desa Badui</p>
    </footer>
</body>
</html>
