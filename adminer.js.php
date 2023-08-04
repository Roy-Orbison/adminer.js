<?php
/** Enable auto-detection and inclusion of adminer.js, like adminer.css
* @author Roy Orbitson, https://github.com/Roy-Orbison
* @license GNU General Public License, version 3
*/

class AdminerDotJs {
	function head() {
		$filename = 'adminer.js';
		if (file_exists($filename)) {
			echo script_src("$filename?v=" . crc32(file_get_contents($filename))), "\n";
		}
	}
}
