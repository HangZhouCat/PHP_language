<?php
/**
 * Created by PhpStorm.
 * User: 逍遥哥哥
 * Date: 2018/3/26
 * Time: 14:31
 */

//定义变量保存学生的年、月、日。

    $stu_by = 1996;
    $stu_bm = 8;
    $stu_bd = 19;

//获取当前变量的年、月、日
    $cur_y = date('Y');     //4位数字完整表示的年份
    $cur_m = date('n');     //数字表示的月份，没有前导零， 1-12
    $cur_d = date('j');     //月份中的第几天，没有前导零，1-31

//计算学生从出生到当前年的周岁
    $age = $cur_y - $stu_by;
    //判断学生是否已过生日
    if ($cur_m < $stu_bm || $cur_m == $stu_bm && $cur_d <$stu_bd)
    {

        $age--;

    }

    echo "hello,hacker";

?>