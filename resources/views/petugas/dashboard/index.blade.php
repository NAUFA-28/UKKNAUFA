<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Petugas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f7fc;
        }

        .hero{
            background:linear-gradient(135deg,#2563eb,#06b6d4);
            color:white;
            padding:40px;
            border-radius:25px;
            margin-bottom:30px;
            box-shadow:0 10px 25px rgba(0,0,0,.15);
        }

        .menu-card{
            border:none;
            border-radius:20px;
            transition:.3s;
            box-shadow:0 5px 15px rgba(0,0,0,.08);
        }

        .menu-card:hover{
            transform:translateY(-5px);
        }

        .icon{
            font-size:50px;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <div class="hero">
        <h1>👨‍💼 Dashboard Petugas</h1>
        <p class="mb-0">Selamat datang, Petugas Sistem Peminjaman Alat</p>
    </div>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="card menu-card text-center p-4">
                <div class="icon">🔧</div>
                <h4>Data Alat</h4>
                <p>Kelola seluruh data alat</p>
                <a href="/alat" class="btn btn-primary">
                    Buka
                </a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card menu-card text-center p-4">
                <div class="icon">📂</div>
                <h4>Data Kategori</h4>
                <p>Kelola kategori alat</p>
                <a href="/kategori" class="btn btn-success">
                    Buka
                </a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card menu-card text-center p-4">
                <div class="icon">🚪</div>
                <h4>Logout</h4>
                <p>Keluar dari sistem</p>
                <a href="/logout" class="btn btn-danger">
                    Logout
                </a>
            </div>
        </div>

    </div>

</div>

</body>
</html>