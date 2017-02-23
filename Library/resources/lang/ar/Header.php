<?php
$sortsBy = [];
foreach (app('sortsBy') as $getAllSortsBy){
	$sortsBy[$getAllSortsBy->sortByEnglish] = $getAllSortsBy->sortByArabic;
}
$Defaults = [
	'sortBy' => 'اختر طريقة عرض الكتب',
	'Types'  => 'الاقسام',
	'Search' => 'ابحث عن كتابك او كاتبك',
];
return array_merge($sortsBy,$Defaults);