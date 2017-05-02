<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<?php if ( 'bylines.io' === parse_url( home_url(), PHP_URL_HOST ) ) : ?>
<!-- Drip -->
<script type="text/javascript">
  var _dcq = _dcq || [];
  var _dcs = _dcs || {}; 
  _dcs.account = '3444075';

  (function() {
    var dc = document.createElement('script');
    dc.type = 'text/javascript'; dc.async = true; 
    dc.src = '//tag.getdrip.com/3444075.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(dc, s);
  })();
</script>
<?php endif; ?>

</head>

<body <?php body_class(); ?>>

	<header class="site-header">
		<div class="top-bar">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="menu-text"><a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>">Bylines</a></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<ul class="menu">
					<li class="menu-text"><a href="#features">Features</a></li>
					<li class="menu-text"><a href="#pricing">Pricing</a></li>
				</ul>
			</div>
		</div>
	</header>
