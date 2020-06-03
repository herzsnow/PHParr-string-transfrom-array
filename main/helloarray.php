<?php
//看书的时候发现关联数组没有直接用数字直接索引的功能，采用的是链表的存储结构，恰好现在有时间，用我刚学的一点知识，设置一个新的数组保存索引，用索引在按照顺序查找相应的值
//但是不知道，这个效率应该比不上直接用循环结构，到相应的地方输出。代码如下：
// $myarr1=array("hello"=>"你好","world"=>"世界","dorm"=>"宿舍","mutual"=>"相互影响");
$oarr=$_POST['arr'];
$oarrinsert=array();
$oarrinsert[]=storeit($oarr);
print_r($oarrinsert);
 static $store1=array();
 static $store2=array();
 static $store3=array();
 static $store4=array();
//  print_r02($myarr1);
//  print_r(storert($myarr1));
//  $arr=storert($myarr1);
//  $arr[]=storeit("nihao=>hioajof");
 
//  print_r($arr);
// for($i=0;$i<=count($myarr1)-1;$i++)
// {
//     $store1[]=key($myarr1);
//     $hello=next($myarr1);
// }
// print_r($store1);


// for($i=0;$i<=count($myarr1)-1;$i++)
// {
//     $j=$store1[$i];
//    // echo  $j;
// echo $myarr1[$j];
// //测试方法成功
// }

// for($i=0;$i<=count($myarr1)-1;$i++)
// {
//     $j=$store1[$i];
//    // echo  $j;
//    $store2[]=$myarr1[$j];
// //优化操作
//     print_r ($store2);
// }
//如果是读出数据那么选择的内容直接用对应的索引号直接调用
function print_r02($myarr1){
    for($i=0;$i<=count($myarr1)-1;$i++)
    {
        $store1[]=key($myarr1);
        $hello=next($myarr1);
        $hello=$store1[$i];
        $store2[]=$myarr1[$j];
    }
    print_r($store1);
    print_r($store2);
//将索引数组转换成两个关联数组并输出结果，这样做可以看清楚索引数组相关变量
}

function storert($myarr1){
    for($i=0;$i<=count($myarr1)-1;$i++)
    {
        $j=0;
        $oarr[$j]=key($myarr1);
        $j=$j+1;
        $oarr[$j]=current($myarr1);
        $hello=next($myarr1);
        $store3[]=$oarr;

        // $store1[]=key($myarr1);
        // $hello=next($myarr1);
        // $j=$store1[$i];
        // $store2[]=$myarr1[$j];
        // print_r ($store3);
        //将两个数组组成一个进行输出
    }
return $store3;
}
function storeit($stringit){
//定义的二维数组的插入，院里就是将输入的值转换成以为数组
static $i=0;
for(;substr($stringit,$i,2)<>"=>";$i=$i+1){};
$store4[]=substr($stringit,0,$i+1);
$store4[]=substr($stringit,$i+2,);
$i=0;

return $store4;//一次只能插入一个值
}
    
   





?>` 