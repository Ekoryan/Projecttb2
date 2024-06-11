<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Daftar Nama Izin Masuk</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .edit-btn, .delete-btn {
            cursor: pointer;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            background-color: #3498db;
            color: #fff;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .edit-btn:hover, .delete-btn:hover {
            background-color: #2980b9;
        }

        #searchInput {
            width: 50%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <header>
    <img src="image/gambar2.jpg" alt="Logo Desa Sejahtera">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1>Detail Daftar Nama Izin Masuk</h1>
            <input type="text" id="searchInput" onkeyup="searchName()" placeholder="Cari nama...">
            <div class="data" id="data-container">
                <table id="dataTable">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Keluar</th>
                            <th>Tanggal Submit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <script src="js/izinData.js"></script>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer>
    <p>&copy; 2024 Website yang mengenalkan tentang desa Badui</p>
    </footer>
    
</body>
</html>
