<?php
$homeVars = [
	'cdn' => getHtmlVariable('cdn'),
	'about-text' => replaceHtml('At %ATRE%, %Mission%') . getSnippet('our-aim'),
	'cta-w-100-link' => pageUrl('get-access'), //TODO: PWA
	'cta-w-100' => 'To start using <span class="cursive btn btn-warning">add to Home Screen</span> and purchase a plan',
	'last-media-embed' => processCanvaShortcode('[canva]DAG9slsHUuU[/canva]'),
];

$itemTemplate = disk_file_get_contents(SITEPATH . '/data/templates/feature.html');
$sheet = getSheet('features', false);
$items = [];

foreach ($sheet->rows as $item) {
	$item = rowToObject($item, $sheet);
	$item['link'] = pageUrl($item['link']);
	$items[] = replaceItems($itemTemplate, $item, '%');
}

$homeVars['featureHtml'] = implode(NEWLINES2, $items);

$itemTemplate = disk_file_get_contents(SITEPATH . '/data/templates/home.html');

echo replaceItems($itemTemplate, $homeVars, '%');
