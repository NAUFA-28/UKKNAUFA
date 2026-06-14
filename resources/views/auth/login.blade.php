<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Peminjaman Alat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background: linear-gradient(135deg,#0f172a,#1d4ed8);
            font-family:'Segoe UI',sans-serif;
        }

        .login-card{
            width:100%;
            max-width:500px;
            background:#fff;
            border-radius:25px;
            padding:40px;
            box-shadow:0 20px 50px rgba(0,0,0,.25);
        }

        .logo-circle{
            width:100px;
            height:100px;
            background:linear-gradient(135deg,#2563eb,#3b82f6);
            border-radius:50%;
            display:flex;
            justify-content:center;
            align-items:center;
            margin:auto;
            color:white;
            font-size:40px;
            margin-top:-80px;
            box-shadow:0 10px 25px rgba(37,99,235,.4);
        }

        .title{
            text-align:center;
            margin-top:20px;
        }

        .title h1{
            font-weight:700;
        }

        .title p{
            color:#6b7280;
            font-size:20px;
        }

        .form-control{
            height:55px;
            border-radius:12px;
        }

        .btn-login{
            height:55px;
            border-radius:12px;
            background:linear-gradient(135deg,#2563eb,#0ea5e9);
            border:none;
            font-size:20px;
            font-weight:600;
        }

        .btn-login:hover{
            opacity:.9;
        }
    </style>
</head>
<body>

<div class="login-card">

    <div class="logo-circle">
        <i class="fa-solid fa-shield-halved"></i>
    </div>

    <div class="title">
        <h1>Login</h1>
        <p>Sistem Peminjaman Alat</p>
    </div>

    <form method="POST" action="/login">
        @csrf

        <div class="mb-3">
            <label class="fw-bold mb-2">Email</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fa-solid fa-envelope"></i>
                </span>
                <input type="email"
                    name="email"
                    class="form-control"
                    placeholder="Masukkan Email">
            </div>
        </div>

        <div class="mb-4">
            <label class="fw-bold mb-2">Password</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fa-solid fa-lock"></i>
                </span>
                <input type="password"
                    name="password"
                    class="form-control"
                    placeholder="Masukkan Password">
            </div>
        </div>

        <button class="btn btn-primary btn-login w-100">
            <i class="fa-solid fa-right-to-bracket"></i>
            Login
        </button>
    </form>

    <div class="text-center mt-4 text-muted">
        © {{ date('Y') }} Sistem Peminjaman Alat
    </div>

</div>

</body>
</html>