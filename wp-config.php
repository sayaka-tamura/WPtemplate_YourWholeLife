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
define('DB_NAME', 'ujpdb0_Test_NewTemplate');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'ujpdb0_UjpNews');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'Gaikyo#1075');

/** MySQL のホスト名 */
define('DB_HOST', '209.200.229.220');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'm$?{}at+hBA}PM>2doi^HKVxuh[5E3Mi1n|/`$hRTvPwP#|;oDm7@R3$8P<A4#0@');
define('SECURE_AUTH_KEY',  '**bg,Kq,LK7s+q@f#ol=HR)>Rv2mxzyMZ8<cd8-vs+@b %RGxn,JG?s|;6apZK|`');
define('LOGGED_IN_KEY',    'n+_fQYED&6io$S}Z$%$*+ aV*P(20hvalp}Yc6.M7996u nypZ0R9)6/Roc}cZ8r');
define('NONCE_KEY',        's`]l[?/y#[6d4/sL;Hg!@L]x|A%sJsVUoCY6R(g)lLMz4Gpf,l}=)^~K3e7eHwe6');
define('AUTH_SALT',        '8@./J[0;6I{l7BKV=T[{(tQ7XgF7/B)8=7}qQj_+zS~B7kZg3@K{hMjs5hQyVS8)');
define('SECURE_AUTH_SALT', 'g$kbwG9ss<5mFA[vd$KD2*.(+cgS5GV2k*82~LSL33( ]X_=II*ypJ)h@Vi#y@)>');
define('LOGGED_IN_SALT',   '2{u$aaX8]Ej_XFO`@x>iJ~ TAhdrH5EfHB(hHLI14MLMj_N6y!U9Z`1 cDfK!v3~');
define('NONCE_SALT',       '.^KZf/67x<rhlgfb[0`m..BE[.!Q&Hlr=[WsL(_UJY6d&ET+4+BaJIJ&X5I*HM<5');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_ujp_';

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

//Arrow Word Press to make multi-site
define('WP_ALLOW_MULTISITE', true);
