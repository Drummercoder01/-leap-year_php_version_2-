<?php
$_output= "<h1> Schrikkeljaren (*)</h1>";

$_output.="<table width=1250 border=1><tr><td>";

For ($_jaar= 1900; $_jaar < 2100; $_jaar++)
{
  $_feb = cal_days_in_month(CAL_GREGORIAN,2,$_jaar);
    
    if ($_jaar % 25 == 0 && $_jaar !=1900)
    {
      $_output.="</td><td>\n";
    }
  
  if ($_feb > 28)
  {
    $_schrikkeljaar= "&nbsp;&nbsp;*";
  }
  else
  {
    $_schrikkeljaar="";
  }
  
  $_output.="$_jaar&nbsp;&nbsp;-->&nbsp;&nbsp; $_feb $_schrikkeljaar</br>\n";
  
}

$_output.="</td></tr></table>";

echo $_output;
?>