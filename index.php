<?php
require 'simplehtmldom_1_9_1/simple_html_dom.php';

$html = file_get_html('https://www.amazon.com/s?k=Samsung+Galaxy+S1655650&ref=nb_sb_noss');
$title = $html->find('title', 1);
$image = $html->find('img', 1);


//  لما تعوز تعرف الاسم موجود ولا الموقع بيظيط استخدم in string
//  شوف هل الاسم اللي عملنا بيه سيرش نفس الاسم الموجود في او عنوان لو اه رجع true
//echo $title->plaintext."<br>\n";
//echo $image->src;
//echo $title->plaintext;
$items = $html->find('h1.a-size-base',0)->children(0)->children(0)->children(0)->children(0)->children(0)->plaintext;
$pieces = explode("of", $items);
$showing_number = str_replace(' ', '', $pieces[0]);
$total_result = str_replace(' ', '', explode("results", $pieces[1])[0]);

//$the_test = $html->find('div[id=skiplink]');
echo 'numbers: ' . $showing_number . '</br>';
echo 'Result found: ' . $total_result;

// for loop to get all title in that div store it then search and gg
$products = $html->find('div.s-main-slot',0);
echo $products;
//s-main-slot s-result-list s-search-results sg-row
//$items = $html->find('div.youclassname',0)->children(1)->outertext;
//skiplink
?>
<!DOCTYPE html>
<html>
<body>
<img src=''>

</body>
</html>
