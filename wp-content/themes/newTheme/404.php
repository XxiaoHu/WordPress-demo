<?php
/**
 * Custom 404 page.
 *
 * @package NewTheme
 */

status_header( 404 );
nocache_headers();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php esc_html_e( '页面未找到', 'newtheme' ); ?></title>
	<style>
		* { box-sizing: border-box; }
		html, body { margin: 0; min-height: 100%; }
		body {
			display: grid;
			min-height: 100vh;
			place-items: center;
			padding: 24px;
			background: #f7f7f5;
			color: #171717;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
			text-align: center;
		}
		main { max-width: 560px; }
		.error-code {
			margin: 0;
			font-size: clamp(88px, 20vw, 180px);
			font-weight: 800;
			letter-spacing: -0.08em;
			line-height: 0.9;
		}
		h1 { margin: 28px 0 10px; font-size: 28px; }
		p { margin: 0; color: #686868; font-size: 16px; line-height: 1.7; }
		a {
			display: inline-block;
			margin-top: 30px;
			padding: 12px 22px;
			border-radius: 999px;
			background: #171717;
			color: #fff;
			text-decoration: none;
		}
		a:hover, a:focus { background: #3d3d3d; }
	</style>
</head>
<body>
	<main>
		<p class="error-code" aria-hidden="true">404</p>
		<h1><?php esc_html_e( '页面未找到', 'newtheme' ); ?></h1>
		<p><?php esc_html_e( '抱歉，你访问的页面不存在或已经被移除。', 'newtheme' ); ?></p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( '返回首页', 'newtheme' ); ?></a>
	</main>
</body>
</html>
