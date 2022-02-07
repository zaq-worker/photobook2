<!DOCTYPE html>

<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>PHOTO BOOK2</title>
    </head>

    <body>
        <div class="container">
            <header id="header">
                <h1 class="site-title">
                    <a href="index.php"><img src="img/logo.svg" alt="PHOTO BOOK 2"></a>
                </h1>
            </header>

            <main>
                <div id="mainvisual">
                    <img src="img/mainvisual.jpg" alt="mainvisual">
                </div>

                <div class="inner">
                    <section id="index">
                        <h2 class="section-title">INDEX</h2>
                        <div class="index-inner">
                            <ol class="index-list">
                                <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                                <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                                <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                                <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                                <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                            </ol>
                        </div>
                    </section>

                    <ul class="list">
                        <li><img src="img/photo1.jpg" alt="photo1"></li>
                        <li><img src="img/photo2.jpg" alt="photo2"></li>
                        <li><img src="img/photo3.jpg" alt="photo3"></li>
                        <li><img src="img/photo4.jpg" alt="photo4"></li>
                    </ul>

                    <section id="detail">
                        <h2 class="section-title">DETAIL</h2>
                        <div class="flex">
                            <dl>
                                <dt>著者：</dt>
                                <dd>タイトルタイトルタイトル</dd>
                                <dt>出版社：</dt>
                                <dd>タイトルタイトルタイトル</dd>
                                <dt>発行年：</dt>
                                <dd>2021年1月1日</dd>
                            </dl>
                            <div class="text">
                                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                <a class="link" href="#">オンラインストアで見る</a>
                            </div>
                        </div>
                    </section>
                </div>
            </main>

            <footer id="footer">
                <p class="inner">&copy; <?php echo date('Y') ?> PHOTO BOOK 2</p>
            </footer>
        </div>
    </body>
</html>