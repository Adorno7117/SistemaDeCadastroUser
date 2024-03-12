
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
            </div>    
            <div class="second-column">
                <h2 class="title title-second">LOGIN</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>        
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div>
                <form action="login.php" class="form" method="post">
                    <label class="label-input" for="user">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="user" name="user" id="user">
                    </label>
                    
                    <label class="label-input" for="senha">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Password" name="senha" id="senha">
                    </label>
                    
                    <input type="submit" class="btn btn-second" value="Login">
                    
                </form>
            </div>

    </div>
    <script src="js/app.js"></script>
</body>
</html>
