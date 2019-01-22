<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Paper Stack</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/auth.css" />
</head>
<body>
<div class="container">




    <section id="content">

        <? if (isset($errors)): ?>
            <div>
                <? foreach ($errors as $error): ?>
                    <span style="color: red"><?=$error?></span>
                <? endforeach; ?>
            </div>
        <? endif; ?>

        <form method="post" action="register">
            <h1>Регистрация</h1>
            <div>
                <input name="name"  type="text" placeholder="Имя" required="" id="username" />
            </div>
            <div>
                <input name="email" type="text" placeholder="E-mail" required="" id="username" />
            </div>
            <div>
                <input name="password" type="password" placeholder="Password" required="" id="password" />
            </div>
            <div>
                <input name="confirm_password" type="password" placeholder="Password" required="" id="password" />
            </div>
            <div>
                <input name="register" type="submit" value="Зарегистрироваться" />

                <a href="/login">Войти</a>
            </div>
        </form><!-- form -->

    </section><!-- content -->
</div><!-- container -->
</body>
</html>