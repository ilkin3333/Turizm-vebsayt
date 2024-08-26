<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qeydiyyat Səhifəsi</title>
    <style>
        /* Ümumi üslublar */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Signup container */
        .signup-container {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Başlıq */
        .signup-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333333;
        }

        /* Input qrupları */
        .input-group {
            margin-bottom: 15px;
        }

        /* Input qutuları */
        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #333333;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Qeydiyyat düyməsi */
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Giriş bağlantısı */
        .signup-container p {
            text-align: center;
            margin-top: 15px;
            color: #666666;
        }

        .signup-container p a {
            color: #007bff;
            text-decoration: none;
        }

        .signup-container p a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
<div class="signup-container">
    <h2>Qeydiyyatdan Keç</h2>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group">
            <label for="avatar">Profil Fotoğrafı Seç:</label>
            <input type="file" name="avatar" id="avatar">
        </div>
        <div class="input-group">
            <label for="name">Ad və Soyad</label>
            <input type="text" id="fullname" name="name" required>
        </div>
        <div class="input-group">
            <label for="email">E-poçt</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="username">İstifadəçi Adı</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Şifrə</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Qeydiyyatdan Keç</button>
        <p>Artıq hesabınız var? <a href="{{ route('login.create') }}">Giriş edin</a></p>
    </form>
</div>
</body>
</html>
