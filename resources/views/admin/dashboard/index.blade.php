<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f6f9;
        }

        .header{
            background:#0d6efd;
            color:white;
            padding:20px;
            border-radius:15px;
            margin-bottom:25px;
        }

        .card-box{
            border:none;
            border-radius:15px;
            box-shadow:0 4px 15px rgba(0,0,0,.1);
        }

        .card-box h2{
            font-size:40px;
            font-weight:bold;
        }
    </style>
</head>
<body>

<div class="container mt-4">

    <div class="header">
        <h2>Sistem Peminjaman Alat</h2>
        <p>Selamat Datang Admin</p>
    </div>

    <div class="row">

        <div class="col-md-6 mb-3">
            <div class="card card-box bg-primary text-white">
                <div class="card-body text-center">
                    <h5>Total Kategori</h5>
                    <h2>{{ $totalKategori }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card card-box bg-success text-white">
                <div class="card-body text-center">
                    <h5>Total Alat</h5>
                    <h2>{{ $totalAlat }}</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="mt-4">

        <a href="/kategori" class="btn btn-primary">
            Data Kategori
        </a>

        <a href="/alat" class="btn btn-success">
            Data Alat
        </a>

        <a href="/logout" class="btn btn-danger">
            Logout
        </a>

    </div>

</div>

</body>
</html>