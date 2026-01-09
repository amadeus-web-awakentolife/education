<?php
variables([
	'social' => [
		[ 'type' => 'facebook', 'url' => 'https://www.facebook.com/vidyashankarchennai', 'name' => 'Vidya FB' ],
		[ 'type' => 'instagram', 'url' => 'https://www.instagram.com/vidyashankarchennai/', 'name' => 'Vidya IG' ],
		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/in/vidya-shankar-1453ab49/', 'name' => 'Vidya LI' ],
		[ 'type' => 'youtube', 'url' => 'https://www.youtube.com/@awaken-to-life', 'name' => 'ATL YT' ],
	],
	'no-seo-info' => !variable('local'),
	'no-search' => true,
	'no-network-in-footer' => true,
	'wants-sentencecase-for-headings' => true,
	'sections-have-files' => true,
	'link-to-sub-node-home' => true,
]);

function after_menu() {
	_headerMenuItem(replaceHtml('<img src="%urlOf-atl%awakentolife-icon.png" height="40" />'), replaceHtml('%urlOf-atl%'), true);
}

function site_before_render() {
	variable('htmlReplaces', [
		'ATRE' => '<span class="h5 cursive">' . variable('name') . '</span>',
		'Vision' => (nodeIs(SITEHOME) ? 'to ' : 'To' ) . ' have assessment frameworks, <span class="h5 cursive">teaching and learning resources</span> available for educators and students, building a <span class="h5 cursive">conscious network of allies in education</span>.',
		'Mission' => (nodeIs(SITEHOME) ? 'silent ' : 'Silent' ) . ' evolution of the education space that <span class="h5 cursive">empowers all its stakeholders</span>.',
	]);
}
