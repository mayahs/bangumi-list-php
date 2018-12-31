<?php 
//phpinfo(); 
$result = mysqli_connect("localhost","root","zyhuang2369");
if ($result) {
echo "success!";
}
//$handle = fopen("http://www.qttc.net/api.php?action=open_getBlogList&only_recommend=1&limit=5","rb");
//$content = "";
//while (!feof($handle)) {
//    $content .= fread($handle,10000);
//}
//fclose($handle);

//$handle = fopen("https://raw.githubusercontent.com/bangumi-data/bangumi-data/master/dist/data.json", "rb");
//$content = '';
//while (!feof($handle)) {
//    $content .= fread($handle, 8192);
//}
//fclose($handle);

$json_string = file_get_contents('data.json');

$content = json_decode($json_string);
if ($content) {
    echo "success2!";
}
foreach ($content->items as $items) {
    echo '<li><a target="_blank">'.$items->title.'</a></li>';
}
?>