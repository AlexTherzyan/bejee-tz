


    <!DOCTYPE html>
    <!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
    <!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
    <!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Paper Stack</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
    <div class="container">

        <? if (isset($errors)): ?>
            <div>
                <? foreach ($errors as $error): ?>
                    <span style="color: red"><?=$error?></span>
                <? endforeach; ?>
            </div>
        <? endif; ?>


        <section id="content">
            <form method="post" action="login">
                <h1>Войти</h1>
                <div>
                    <input name="email" type="text" placeholder="E-mail" required="" id="username" />
                </div>
                <div>
                    <input name="password" type="password" placeholder="Пароль" required="" id="password" />
                </div>
                <div>
                    <input type="submit" value="Войти" />

                    <a href="/register">Зарегистрироваться</a>
                </div>
            </form><!-- form -->

        </section><!-- content -->
    </div><!-- container -->
    </body>
    </html>