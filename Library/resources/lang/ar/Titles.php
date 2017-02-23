<?php
$titleOfTypes = [1];
foreach (app('types') as $Type) {
	$titleOfTypes[$Type->id] = $Type->Type.' | مكتبة ربيع';
	foreach (app('typesOfTypes') as $typesOfTypes) {
		$titleOfTypesOfTypes[$Type->id.'/'.$typesOfTypes->id] = $typesOfTypes->Type.' | مكتبة ربيع';
	}
}
$titleOfSite = [
		'nameOfSite'=>'مكتبة ربيع',
		'Index'=>'الصفحة الرئيسية | مكتبة ربيع',
	];
return array_merge($titleOfTypes,$titleOfTypesOfTypes,$titleOfSite);
