<?php
/**
 * Created by PhpStorm.
 * User: 逍遥哥哥
 * Date: 2018/3/26
 * Time: 15:00
 */

//定义变量保存学生出生的日期
    $stu_bm = 8;
    $stu_bd = 7;

//判断学生的出生日是否是两位数
if ($stu_bd < 10)
{

    $stu_bd = '0'.$stu_bd;

}

$date = "$stu_bm.$stu_bd";

//定义保存星座图片名称的变量
$lev = '';
if ($date >= 1.21 && $date <= 2.19)
{

    $const = '水瓶座';
    $lev = 1;


}
elseif ($date >= 2.20 && $date <= 3.20)
{

    $const = '双鱼座';
    $lev = 2;


}
elseif ($date >= 3.21 && $date <=4.20)
{

    $const = '白羊座';
    $lev = 3;

}
elseif ($date >= 4.21 && $date <= 5.21)
{

    $const = '金牛座';
    $lev = 4;

}
elseif ($date >=5.22 && $date <= 6.21)
{

    $const = '双子座';
    $lev = 5;

}
elseif ($date >= 6.22 && $date <= 7.22)
{

    $const = '巨蟹座';
    $lev = 6;

}
elseif ($date > 7.23 && $date <= 8.23)
{

    $const = '狮子座';
    $lev = 7;

}
elseif ($date >= 8.24 && $date <= 9.23)
{

    $const = '处女座';
    $lev = 8;

}
elseif ($date >= 9.24 && $date <= 10.23)
{

    $const = '天秤座';
    $lev = 9;

}
elseif ($date >= 10.24 && $date <= 11.22)
{

    $const = '天蝎座';
    $lev = 10;

}
elseif ($date >= 11.23 && $date <= 12.21)
{

    $const = '射手座';
    $lev = 11;
}
else
{
    $const = '摩羯座';
    $lev = 12;

}