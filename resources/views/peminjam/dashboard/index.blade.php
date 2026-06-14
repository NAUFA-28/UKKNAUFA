<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Peminjam</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: #f4f7fc;
        }

        .hero{
            background: linear-gradient(135deg,#0ea5e9,#2563eb);
            color:white;
            padding:40px;
            border-radius:25px;
            box-shadow:0 10px 25px rgba(0,0,0,.15);
        }

        .card-menu{
            border:none;
            border-radius:20px;
            transition:.3s;
            box-shadow:0 5px 15px rgba(0,0,0,.08);
        }

        .card-menu:hover{
            transform:translateY(-8px);
        }

        .icon{
            font-size:60px;
            margin-bottom:10px;
        }

        .stat-card{
            border-radius:20px;
            color:white;
            padding:25px;
            box-shadow:0 5px 15px rgba(0,0,0,.1);
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- Header -->
    <div class="hero mb-4">
        <h1 class="fw-bold">🙋 Dashboard Peminjam</h1>
        <p class="mb-0">
            Selamat datang di Sistem Peminjaman Alat
        </p>
    </div>

    <!-- Statistik -->
    <div class="row mb-4">

        <div class="col-md-4 mb-3">
            <div class="stat-card bg-primary">
                <h5>Total Alat</h5>
                <h1>{{ \App\Models\Alat::count() }}</h1>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="stat-card bg-success">
                <h5>Total Kategori</h5>
                <h1>{{ \App\Models\Kategori::count() }}</h1>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="stat-card bg-warning">
                <h5>Stok Alat</h5>
                <h1>{{ \App\Models\Alat::sum('stok') }}</h1>
            </div>
        </div>

    </div>

    <!-- Menu -->
    <div class="row">

        <div class="col-md-6 mb-4">
            <div class="card card-menu text-center p-5">

                <div class="icon">🔧</div>

                <h3>Data Alat</h3>

                <p>
                    Lihat seluruh alat yang tersedia untuk dipinjam
                </p>

                <a href="/alat" class="btn btn-primary btn-lg">
                    Lihat Alat
                </a>

            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card card-menu text-center p-5">

                <div class="icon">🚪</div>

                <h3>Logout</h3>

                <p>
                    Keluar dari sistem aplikasi
                </p>

                <a href="/logout" class="btn btn-danger btn-lg">
                    Logout
                </a>

            </div>
        </div>

    </div>

</div>

</body>
</html>