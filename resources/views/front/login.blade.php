<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Səhifəsi</title>
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

        /* Login container */
        .login-container {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Başlıq */
        .login-container h2 {
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

        /* Giriş düyməsi */
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

        /* Qeydiyyat bağlantısı */
        .login-container p {
            text-align: center;
            margin-top: 15px;
            color: #666666;
        }

        .login-container p a {
            color: #007bff;
            text-decoration: none;
        }

        .login-container p a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

<div class="login-container">
    <h2>Giriş</h2>
    <form action="{{route('login.store')}}" method="post">
        @csrf
        <div class="input-group">
            <label for="username">İstifadəçi Adı</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Şifrə</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Giriş</button>
        <p>Hesabınız yoxdur? <a href="/register">Qeydiyyatdan keçin</a></p>
    </form>
</div>
</body>
</html>
