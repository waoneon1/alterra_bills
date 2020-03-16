<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package alterra_bill
 */

get_header('empty');
?>

	<!-- section header -->
	<div class="c-404 section d-flex align-items-center">
		<div class="container">
			<!-- section content -->
			<div class="c-404__content">
				<div class="container">
					<div class="c-404__inner text-center">
						<div class="js-404 c-404__img"></div>
						<h1>404</h1>
						<h2>Sorry page does not exist :(</h2>
						<a href="<?php echo home_url( '/' ); ?>">Back to Home</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<style type="text/css">
		.c-404__inner {
			align-items: center;
			flex-wrap: wrap;
			justify-content: center;
			padding: 40px 10px 80px;
		}
		.c-404__inner h1 {
			padding: 20px 0 0px;
		}
		.c-404__inner h2 {
			font-size: 26px;
		}
		.c-404__img {
			max-width: 245px;
			display: inline-block;
		}
		.c-404__inner a {
			color: #f07539;
			font-size: 14px;
		}
		.c-404__inner a:hover {
			text-decoration: none;
		}
	</style>

	<script type="text/javascript">
		// 404 Lottie
		bodymovin.loadAnimation({
			container: document.querySelector('.js-404'), // the dom element that will contain the animation
			renderer: 'svg',
			loop: true,
			autoplay: true,
			path: altp_burger_data + '404.json'
		});
	</script>

<?php
get_footer('empty');