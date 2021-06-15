<?php
/**
 * 获取当前时间的上一个月、下一个月的月份
 * @param $arr
 */
function GetMonth($sign="1")
{
    //得到系统的年月
    $tmp_date=date("Ym");
    //切割出年份
    $tmp_year=substr($tmp_date,0,4);
    //切割出月份
    $tmp_mon =substr($tmp_date,4,2);
    $tmp_nextmonth=mktime(0,0,0,$tmp_mon+1,1,$tmp_year);
    $tmp_forwardmonth=mktime(0,0,0,$tmp_mon-1,1,$tmp_year);
    if($sign==0){
        //得到当前月的下一个月
        return $fm_next_month=date("Ym",$tmp_nextmonth);
    }else{
        //得到当前月的上一个月
        return $fm_forward_month=date("Ym",$tmp_forwardmonth);
    }
}



