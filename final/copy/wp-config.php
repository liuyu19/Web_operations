<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'word' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'word' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'word' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8x)a:V15Qm87H;8;Jw=BSu s44HMm 6}l7Q(31}_oTTuY_Wn8Jd_~s,vHtLQV#:u' );
define( 'SECURE_AUTH_KEY',  '.2L/D%NBolL5(#CMq9 #`o5Sne>z,~.h(jH$Pbx#gfR*|41^>b0=x|@:@~e)Y</Z' );
define( 'LOGGED_IN_KEY',    '[3wdv:lw^g7aesb;0rwk|7k&4o0QV xq#U&0D]GSE~E98uV}H&sNr{c}sw3gH!:>' );
define( 'NONCE_KEY',        '~fV  |G1KJdhw+XHR9qL_4{]9m{dk<#swiCPY -)lJJXv33s6s~+g99t{t{g%b@z' );
define( 'AUTH_SALT',        'mM8`q4vu3<Y`FK%)$X#O`w.WCuXyO<ZENci|sQ)@oL  i7_R1<$K(f#UX8$G8Us+' );
define( 'SECURE_AUTH_SALT', '-;Q2-4y*,+]iZQK]#[Kp-Z,2lYF:h~Va,:}1Pp8S5Tynv#@TIN,ySfk,[-9G+b67' );
define( 'LOGGED_IN_SALT',   '6; z5F9/~O5:XxjR7CQI?+liV&m{ZP)yJ2JHN]YkP-%qBi:]{0L[q;$LFy+gIGro' );
define( 'NONCE_SALT',       'ZtSv`1AN%%,t}pK~ERz F=*6wQZ? OB>ZNoX j#S#vo:b8(N8im+#q78Q3(bfDJ*' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
