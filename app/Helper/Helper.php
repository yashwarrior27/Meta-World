<?php


class Helper
{
    public static function LevelIncome($user,$amount,$packageUserid)
 {
     $levels=explode(',',$user->level_str);
     array_pop($levels);
     $levels=array_reverse($levels);

     $levelIncome=static::LevelIncomePercentage();

     $trans=[];

     $i=0;
     while($i<count($levelIncome)&& $i<count($levels))
     {
        $trans[]=[
            'user_id'=>$levels[$i],
            'amount'=> $amount*$levelIncome[$i],
            'trans'=>3,
            'type_id'=>$packageUserid,
            'type'=>'Level-'.(++$i)
          ];
     }

     return $trans;
 }

 public static function LevelIncomePercentage()
 {

  return [0.015,0.015,0.015,0.015,0.015,0.01,0.01,0.01,0.01,0.01,0.005,0.005,0.005,0.005,0.005
   ];
 }

}
