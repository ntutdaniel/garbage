<?php
if($_GET['id']!=null){
    $file=$_GET['id'];//檔案名稱
    $url=$file; //路徑位置
    echo $file;
    $num=date("Ymds");
    header("Content-disposition: attachment; filename=$file");
    header("Content-Type: application/force-download");
    readfile($url.str_replace("@","",$file));
    exit(0);
}else{
    echo "找不到相關檔案....";
}
?>