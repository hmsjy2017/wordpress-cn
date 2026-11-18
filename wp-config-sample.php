<?php
/**
 * WordPress 基础配置
 *
 * 安装过程中，wp-config.php 创建脚本会使用本文件。
 * 您也可以直接将本文件复制为「wp-config.php」并填写各项配置值，
 * 无需通过网页完成配置。
 *
 * 本文件包含以下配置：
 *
 * * 数据库设置
 * * 密钥
 * * 数据表前缀
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** 数据库设置 - 您可以从主机服务商处获取这些信息 ** //
/** WordPress 使用的数据库名称 */
define( 'DB_NAME', 'database_name_here' );

/** 数据库用户名 */
define( 'DB_USER', 'username_here' );

/** 数据库密码 */
define( 'DB_PASSWORD', 'password_here' );

/** 数据库主机名 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时使用的数据库字符集。 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库排序规则。如不确定，请勿更改。 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份验证唯一密钥与盐值。
 *
 * 请将以下值替换为各不相同的独特字符串！您可以使用
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org 密钥服务}生成这些值。
 *
 * 您可以随时更改这些值，使所有现有的 Cookie 失效。
 * 这将要求所有用户重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/

/**
 * WordPress 数据表前缀。
 *
 * 为每个 WordPress 站点设置唯一的数据表前缀，即可让多个站点共用一个数据库。
 * 前缀只能包含数字、字母和下划线！
 *
 * 安装时，系统会使用指定的前缀创建数据表。
 * 安装 WordPress 后更改此值，会导致您的站点认为
 * WordPress 尚未安装。
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress 调试模式。
 *
 * 将此值设为 true，可在开发过程中显示程序通知。
 * 强烈建议插件和主题开发者在开发环境中
 * 启用 WP_DEBUG。
 *
 * 有关其他调试常量的信息，
 * 请参阅文档。
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* 请在本行与「停止编辑」行之间添加自定义配置。 */



/* 好了，请停止编辑！祝您发布愉快。 */

/** WordPress 目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** 设置 WordPress 变量并加载所需文件。 */
require_once ABSPATH . 'wp-settings.php';
