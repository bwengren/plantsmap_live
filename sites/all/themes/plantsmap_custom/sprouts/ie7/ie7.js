/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referring to this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'plantsmap\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-leaf': '&#xe600;',
		'icon-question': '&#xe60a;',
		'icon-lock': '&#xe60b;',
		'icon-book': '&#xe60c;',
		'icon-book2': '&#xe60d;',
		'icon-facebook': '&#xe601;',
		'icon-pinterest': '&#xe602;',
		'icon-arrow-right': '&#xe60f;',
		'icon-twitter': '&#xe603;',
		'icon-instagram': '&#xe604;',
		'icon-google-plus': '&#xe60e;',
		'icon-heart': '&#xe605;',
		'icon-location': '&#xe606;',
		'icon-search': '&#xe607;',
		'icon-heart2': '&#xe608;',
		'icon-menu': '&#xe610;',
		'icon-plus': '&#xe609;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
