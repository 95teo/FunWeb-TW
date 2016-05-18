<DOCTYPE HTML>
<HEAD>
<TITLE>
</TITLE>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="menu.css">
<script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
<!-- Add jQuery library -->
	<script type="text/javascript" src="fancybox/lib/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
			
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});
			$(".fancybox-effects-c").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});
			$(".fancybox-effects-d").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'info.php',
					type : 'iframe',
					padding : 5
				});
			});
			$("#fancybox-manual-c").click(function() {
				$.fancybox.open({
					href : 'statistici.php',
					type : 'iframe',
					padding : 5
				});
			});
			$("#fancybox-manual-d").click(function() {
				$.fancybox.open({
					href : 'clasament.php',
					type : 'iframe',
					padding : 5
				});
			});


		});
	</script>
</HEAD>
<BODY>
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Profil
    <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-menu-right">
      <li><a id="fancybox-manual-b" href="javascript:;">Informatii cont</a></li>
      <li><a id="fancybox-manual-d" href="javascript:;">Clasamente</a></li>
      <li><a id="fancybox-manual-c" href="javascript:;">Statistici jucator</a></li>
    </ul>
  </div>


</BODY>
</HTML>