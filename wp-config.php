<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wp_dill');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wpuser');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'secret');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QJo=(M(~x(f1M[n9-vJOw@RNDSarV~t2Wh6S:~Ych5j!Q1I6[Ym2~B25IGAgiot<');
define('SECURE_AUTH_KEY',  '8y*E1+OD2$7qmK_+Rw/Q9zssA63Ls8jgk}DZxnx-D.<P-!2NuqA]Q>J*|=c:VEJ=');
define('LOGGED_IN_KEY',    'CBV6(W[qzEX>8ad;FJcp=C%^Gx-$FY@8R(j`aFd/gQ=t_{w&BNt2}?_ElY=_OWA#');
define('NONCE_KEY',        'u1rA?D(&S5)92#BAB~qLg%92hrnrkN4#qTg6J>IzgP L8LLS @Nu/e]WTdns_oLr');
define('AUTH_SALT',        '7Ue]CP3Q1DzBLZ7F<Im>- v_9c4f4kg$d9#x.`D)OT4n1={JE4;X8_t9,a5LGJET');
define('SECURE_AUTH_SALT', ',EYM+Q1@6f9169EHir0}n&E>U]n`][g&&T%H&ur{WhoJspsr3^Vty{6g!yI8g_z=');
define('LOGGED_IN_SALT',   'dC(]W={N4I Rli.+EaM 5t!CS(2+W*K%&/.qoJM>4m.Mt)K+JL?f8`R2a}|5=?*Y');
define('NONCE_SALT',       'Pq2PHf7:CfSo4&Pm;pvE4uwMu1XJvvGPTNiJtp,k|N}+oA;5rHK2?~x`csAL[<<9');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'dill_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
