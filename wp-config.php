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
define( 'DB_NAME', 'digiwinerp' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'root' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'KeYcPTN~eZ$#/rd)G*:/}KHd_[dT86/|6,E9lF7(!I#V;xz-VY^B.7o(`cyk9y,;' );
define( 'SECURE_AUTH_KEY',  '!c{6#92F}WPFCJ,QRYztA~6na]0_@BJSd;[]qz@&DNr1VUd%Bl9g#f!aVu>O%ZQt' );
define( 'LOGGED_IN_KEY',    '6/?dl<+7dppYufeCy,0(/$np[0%W70*>%wFB=E`nMy@o&s 0iz :^pyN!.j+K{{>' );
define( 'NONCE_KEY',        'uq-!|<:H5-6w0zRct1f62lYm4?GotkQ:K|nMWfba=Mn4*/Z^^9zhD^,+&Lice;#d' );
define( 'AUTH_SALT',        '~yoM98W3`@A-}o[kT]X}3oG3IpAkb-^$gMq!0p1{y}iby@qSQO_I!,qO>XanpI+O' );
define( 'SECURE_AUTH_SALT', '@?nV/iSPqk1SOArNt%+gH0k$IBb/dqwYEpTZCB4wX|i`>rII[A}]7b{K9%VBxa`p' );
define( 'LOGGED_IN_SALT',   'u5ktgrA$2b~5wuHcYRPegha6Ta)-+g`bzkw{|e!I K(EQo=A/yTjCa-i`Qtc(#JB' );
define( 'NONCE_SALT',       '#T{fQQz^B9s31[FvOG`|Ib1Hg(`PWvQ@A?YCXfuU,5<T=&%GFSxWWQ(/*m(T^Iot' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'dw_';

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

//add by super 20200520 系统跳过上传文件的类型检测
define('ALLOW_UNFILTERED_UPLOADS',true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
