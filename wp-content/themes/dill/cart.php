<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Dill Delivery | Shopping Cart</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="css/dill.min.css">
    <link rel="stylesheet" href="css/drawer.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="drawer drawer--left">
    <div data-role="page" id="cart">
        <nav class="drawer-nav">
            <ul class="drawer-menu" data-role="listview" data-fileter="true">
                <li>　</li>
                <li><a href="home.html">ホーム</a></li>
                <li><a href="cart.html">買い物かご</a></li>
                <li><a href="menu.html">メニュー</a></li>
                <li><a href="news.html">お知らせ</a></li>
                <li>マイページ</li>
                <li><a href="user.html">ユーザー情報</a></li>
                <li><a href="coupon.html">クーポン</a></li>
                <li>About</li>
                <li><a href="faq.html">よくあるご質問</a></li>
                <li><a href="use.html">ご利用方法</a></li>
                <li><a href="inquiry.html">お問い合わせ</a></li>
                <li><a href="policy.html">サイトポリシー</a></li>
            </ul>
        </nav>
        <header data-role="header" data-position="fixed" data-tap-toggle="false">
            <button type="button" class="drawer-toggle drawer-hamburger">
                <span class="sr-only">toggle navigation</span>
                <span class="drawer-hamburger-icon">　　　</span>
            </button>
            <h1>Dill Delivery</h1>
        </header>
        <main data-role="content" role="main">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>
                            <h1>ご注文内容</h1>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="col-xs-4">
                                <img src="images/menu_IW1Ay.jpg" alt=""></div>
                            <div class="col-xs-8">
                                <div>
                                    <h2>バタースカッシュのポタージュスープ</h2>
                                    <span>数量：1</span>
                                </div>
                                <div>850円（税込）</div>
                                <div>
                                    <a href="#" class="ui-btn btn-change">変更</a>
                                    <a href="#" class="ui-btn btn-cancel">キャンセル</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4">
                                <img src="images/menu_YlhFX.jpg" alt=""></div>
                            <div class="col-xs-8">
                                <div>
                                    <h2>アトランティックサーモンのグリル</h2>
                                    <span>数量：1</span>
                                </div>
                                <div>1480円（税込）</div>
                                <div>
                                    <a href="#" class="ui-btn btn-change">変更</a>
                                    <a href="#" class="ui-btn btn-cancel">キャンセル</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4">
                                <img src="images/menu_pmVa5.jpg" alt=""></div>
                            <div class="col-xs-8">
                                <div>
                                    <h2>ズッキーニのベジヌードル（アルフレード）</h2>
                                    <span>数量：1</span>
                                </div>
                                <div>1740円（税込）</div>
                                <div>
                                    <a href="#" class="ui-btn btn-change">変更</a>
                                    <a href="#" class="ui-btn btn-cancel">キャンセル</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4">
                                <img src="images/menu_2OkgY.jpg" alt=""></div>
                            <div class="col-xs-8">
                                <div>
                                    <h2>ミックスベリーのパブロバ</h2>
                                    <span>数量：1</span>
                                </div>
                                <div>1200円（税込）</div>
                                <div>
                                    <a href="#" class="ui-btn btn-change">変更</a>
                                    <a href="#" class="ui-btn btn-cancel">キャンセル</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>
                            <h1>クーポン</h1></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <div>
                                    <h2>誕生日の方限定！！50%OFFクーポン</h2>
                                    <span>1枚</span>
                                </div>
                                <div>－2635円</div>
                                <div>
                                    <button>クーポン変更</button>
                                    <button>クーポン削除</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>
                            <div>
                                <h1>ご注文合計金額</h1>
                            </div>
                            <div>2635円（税込）</div>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <a href="#" class="ui-btn">お会計へ進む</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
        <footer data-role="footer" data-position="fixed" data-tap-toggle="false">
            <div data-role="navbar">
                <ul>
                    <li>
                        <a href="home.html">Home</a>
                    </li>
                    <li>
                        <a href="cart.html">Cart</a>
                    </li>
                    <li>
                        <a href="menu.html">Menu</a>
                    </li>
                    <li>
                        <a href="news.html">News</a>
                    </li>
                    <li>
                        <a href="user.html">Dill</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/iscroll.min.js"></script>
    <script src="js/drawer.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
