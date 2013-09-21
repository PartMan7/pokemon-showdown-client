<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<title>Showdown!</title>
		<link rel="shortcut icon" href="//play.pokemonshowdown.com/favicon.ico" id="dynamic-favicon" />
		<link rel="stylesheet" href="//play.pokemonshowdown.com/style/client.css?" />
		<link rel="stylesheet" href="//play.pokemonshowdown.com/style/sim-types.css?" />
		<link rel="stylesheet" href="//play.pokemonshowdown.com/style/battle.css?" />
		<link rel="stylesheet" href="//play.pokemonshowdown.com/style/utilichart.css?" />
		<link rel="stylesheet" href="//play.pokemonshowdown.com/style/font-awesome.css?" />
		<link rel="stylesheet" href="//play.pokemonshowdown.com/style/jquery.slider.min.css?" />
		<meta id="viewport" name="viewport" content="width=640" />
		<meta name="robots" content="noindex" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
		<script>
			var Config = {};
		</script>
		<!--[if lte IE 8]><script>
			document.location.replace('http://pokemonshowdown.com/autodownload/win');
		</script><![endif]-->
		<script>
			var _gaq = _gaq || [];
			if (!(/^(.*)\.psim\.us$/i.test(document.location.hostname))) {
				_gaq.push(['_setAccount', 'UA-26211653-1'], ['_setDomainName', 'pokemonshowdown.com']);
			} else {
				_gaq.push(['_setAccount', 'UA-26211653-2'], ['_setDomainName', 'psim.us']);
			}
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		<script>
			window.onerror = function(err, uri, line) {
				var msg = uri + ':' + line + ': ' + err;
				if ('_gaq' in window) {
					_gaq.push(['_trackEvent', 'Client error', msg]);
				} else {
					alert('ERROR: ' + msg);
				}
				return false;
			};
		</script>
	</head>
	<body>

		<!-- Chrome Frame -->
		<!--[if lte IE 8]>
		<script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
		<style>
		/*
		CSS rules to use for styling the overlay:
		.chromeFrameOverlayContent
		.chromeFrameOverlayContent iframe
		.chromeFrameOverlayCloseBar
		.chromeFrameOverlayUnderlay
		*/
		</style>
		<script>
			CFInstall.check({mode: "overlay"});
		</script>
		<![endif]-->

		<div id="header" class="header">
			<img class="logo" src="//play.pokemonshowdown.com/pokemonshowdownbeta.png" alt="Pok&eacute;mon Showdown! (beta)" /><div class="maintabbarbottom"></div>
		</div>
		<div class="ps-room scrollable" id="mainmenu"><div class="mainmenuwrapper">
			<div class="leftmenu">
				<div class="activitymenu">
					<div class="pmbox">
<?php
if ($_COOKIE['showdown_readnews'] !== '<!-- newsid -->') {
?>
						<div class="pm-window news-embed" data-newsid="<!-- newsid -->">
							<h3><button class="closebutton" tabindex="-1"><i class="icon-remove-sign"></i></button>Latest News</h3>
							<div class="pm-log">
								<div style="font-size:9pt;padding:1px 10px"><!-- news --></div>
							</div>
						</div>
<?php
}
?>
					</div>
				</div>
				<div class="mainmenu">
					<div id="loading-message" class="mainmessage">Initializing... <noscript>FAILED<br /><br />Pok&eacute;mon Showdown requires JavaScript.</noscript></div>
				</div>
			</div>
			<div class="rightmenu">
			</div>
			<div class="mainmenufooter">
				<small><a href="//pokemonshowdown.com/" target="_blank"><strong>Pokémon Showdown</strong></a> | <a href="http://smogon.com/" target="_blank"><strong>Smogon</strong></a><br><a href="//pokemonshowdown.com/dex/" target="_blank">Pokédex</a> | <a href="//pokemonshowdown.com/replay/" target="_blank">Replays</a> | <a href="//pokemonshowdown.com/rules" target="_blank">Rules</a></small> | <small><a href="//pokemonshowdown.com/forums/" target="_blank">Forum</a></small>
			</div>
		</div></div>
		<script>
			document.getElementById('loading-message').innerHTML += ' DONE<br />Loading libraries...';
		</script>
		<script src="//play.pokemonshowdown.com/js/lib/jquery-2.0.0.min.js"></script>
		<script src="//play.pokemonshowdown.com/js/lib/jquery-cookie.js"></script>
		<script src="//play.pokemonshowdown.com/js/lib/autoresize.jquery.min.js?"></script>
		<script src="//play.pokemonshowdown.com/js/lib/jquery.json-2.3.min.js"></script>
		<script src="//play.pokemonshowdown.com/js/lib/soundmanager2-nodebug-jsmin.js?"></script>
		<script>
			soundManager.setup({url: '//play.pokemonshowdown.com/swf/'});
		</script>
		<script src="//play.pokemonshowdown.com/js/lib/html-sanitizer-minified.js?"></script>
		<script src="//play.pokemonshowdown.com/js/lib/lodash.compat.js?"></script>
		<script src="//play.pokemonshowdown.com/js/lib/backbone.js?"></script>

		<script>
			document.getElementById('loading-message').innerHTML += ' DONE<br />Loading data...';
		</script>

		<script src="//play.pokemonshowdown.com/js/config.js?"></script>
		<script src="//play.pokemonshowdown.com/js/battledata.js?"></script>
		<script src="//play.pokemonshowdown.com/data/pokedex-mini.js?"></script>
		<script src="//play.pokemonshowdown.com/data/typechart.js?"></script>
		<script src="//play.pokemonshowdown.com/js/battle.js?"></script>
		<script src="//play.pokemonshowdown.com/js/lib/sockjs-0.3.min.js"></script>

		<script>
			document.getElementById('loading-message').innerHTML += ' DONE<br />Loading client...';
		</script>

		<script src="//play.pokemonshowdown.com/js/client.js?"></script>
		<script src="//play.pokemonshowdown.com/js/client-mainmenu.js?"></script>
		<script src="//play.pokemonshowdown.com/js/client-teambuilder.js?"></script>
		<script src="//play.pokemonshowdown.com/js/client-ladder.js?"></script>
		<script src="//play.pokemonshowdown.com/js/client-chat.js?"></script>
		<script src="//play.pokemonshowdown.com/js/client-battle.js?"></script>
		<script src="//play.pokemonshowdown.com/js/client-rooms.js?"></script>
		<script src="//play.pokemonshowdown.com/js/storage.js?"></script>
		<script src="//play.pokemonshowdown.com/data/graphics.js?"></script>

		<script>
			var app = new App();
		</script>

		<script src="//play.pokemonshowdown.com/data/learnsets.js?"></script>
		<script src="//play.pokemonshowdown.com/js/lib/jquery.slider.min.js?"></script>

		<script src="//play.pokemonshowdown.com/data/pokedex.js?"></script>
		<script src="//play.pokemonshowdown.com/data/formats-data.js?"></script>
		<script src="//play.pokemonshowdown.com/data/moves.js?"></script>
		<script src="//play.pokemonshowdown.com/data/items.js?"></script>
		<script src="//play.pokemonshowdown.com/data/abilities.js?"></script>

		<script src="//play.pokemonshowdown.com/js/utilichart.js?"></script>

		<script src="//play.pokemonshowdown.com/data/aliases.js?" async="async"></script>

	</body>
</html>
