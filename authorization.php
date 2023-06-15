<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="flex items-center justify-center h-screen bg-gray-500">
        <form action="loginAction.php" method="POST">
            <div class="bg-white w-96 p-6 rounded shadow-sm">
                <div class="flex items-center justify-center mb-4">
                    <img src="./img/Logo.png">
                </div>
                <label class="text-gray-700">Email</label>
                <input class="w-full py-2 bg-gray-50 text-gray-700 px-1 outline-none mb-4" name="login" type="email">
                <label class="text-gray-700">Password</label>
                <input class="w-full py-2 bg-gray-50 text-gray-700 px-1 outline-none mb-4" name="password" type="password">
                <div class="buttons">
                    <div class="buttons_login">
                <button type="submit" class="submit login" name="submit_login">Войти</button>
                </div>
                <div class="buttons_esc">
                <a href="index.php"class="submit esc" align="center" >Выйти</a>
                </div>
                </div>
            </div>
        </form>
    </main>
    <script src="./js/main.js" class="h-32">Email</script>
</body>
</html>