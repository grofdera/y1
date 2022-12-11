<footer class="site-footer" id="site-footer" style="border-top: 1px solid #fcaf3b;">
	<div class="hfg_footer">
		<div class="footer--row footer-bottom layout-full-contained"
	id="cb-row--footer-bottom"
	data-row-id="bottom" data-show-on="desktop">
	<div
		class="footer--row-inner footer-bottom-inner footer-content-wrap">
		<div class="container">
			<div
				class="hfg-grid nv-footer-content hfg-grid-bottom row--wrapper row "
				data-section="hfg_footer_layout_bottom" >
				<div class="hfg-slot left"><div class="builder-item"><div class="item--inner"><div class="component-wrap"><div><p><a href="https://lokbidhi.com" rel="nofollow">YubaSpace by Lokbidhi</a> | <a href="http://m.me/yubaspace" rel="nofollow">Contact Us</a></p></div></div></div></div></div><div class="hfg-slot c-left"></div><div class="hfg-slot center"></div></div>
		</div>
	</div>
</div>

	</div>
</footer>

</div><!--/.wrapper-->
<script type='text/javascript' id='neve-script-js-extra'>
/* <![CDATA[ */
var NeveProperties = {};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo get_template_directory_uri();?>/neve.min.js' id='neve-script-js' async></script>
<script type='text/javascript' id='neve-script-js-after'>
	var html = document.documentElement;
	var theme = html.getAttribute('data-neve-theme') || 'light';
	var variants = {"logo":{"light":{"src":false,"srcset":false,"sizes":false},"dark":{"src":false,"srcset":false,"sizes":false},"same":true}};

	function setCurrentTheme( theme ) {
		var pictures = document.getElementsByClassName( 'neve-site-logo' );
		for(var i = 0; i<pictures.length; i++) {
			var picture = pictures.item(i);
			if( ! picture ) {
				continue;
			};
			var fileExt = picture.src.slice((Math.max(0, picture.src.lastIndexOf(".")) || Infinity) + 1);
			if ( fileExt === 'svg' ) {
				picture.removeAttribute('width');
				picture.removeAttribute('height');
				picture.style = 'width: var(--maxwidth)';
			}
			var compId = picture.getAttribute('data-variant');
			if ( compId && variants[compId] ) {
				var isConditional = variants[compId]['same'];
				if ( theme === 'light' || isConditional || variants[compId]['dark']['src'] === false ) {
					picture.src = variants[compId]['light']['src'];
					picture.srcset = variants[compId]['light']['srcset'] || '';
					picture.sizes = variants[compId]['light']['sizes'];
					continue;
				};
				picture.src = variants[compId]['dark']['src'];
				picture.srcset = variants[compId]['dark']['srcset'] || '';
				picture.sizes = variants[compId]['dark']['sizes'];
			};
		};
	};

	var observer = new MutationObserver(function(mutations) {
		mutations.forEach(function(mutation) {
			if (mutation.type == 'attributes') {
				theme = html.getAttribute('data-neve-theme');
				setCurrentTheme(theme);
			};
		});
	});

	observer.observe(html, {
		attributes: true
	});
</script>
</body>

</html>
