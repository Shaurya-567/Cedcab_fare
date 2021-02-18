<?php

class Ride
{


  public $distance;
  public $cab_type;
  public $luggage;
  public $total_fare;

  public function cal_fare_cab($dist, $cab_name, $lauggage)
  {

    switch ($cab_name) {


     // ************* Check CedMicro Fare *************
      case "CedMicro":
        if ($dist > 0 && $dist <= 10) {
          $price = $dist * 13.50;
        } else if ($dist > 10 && $dist <= 60) {
          $temp = 10 * 13.50;
          $price = (($dist - 10) * 12.00) + $temp;
        } else if ($dist > 60 && $dist <= 160) {
          $temp1 = 10 * 13.50;
          $temp2 = 50 * 12.00;
          $price = (($dist - 60) * 10.20) + ($temp1 + $temp2);
        } else
         {
          $temp1 = 10 * 13.50;
          $temp2 = 50 * 12.00;
          $temp3 = 100 * 10.20;
          $price = (($dist - 160) * 8.50) + ($temp1 + $temp2+$temp3);
        }
        $tot_price=$price+50;
        return $tot_price;
        break;


         // ************* Check CedMini Fare *************

        case "CedMini":
          if ($dist > 0 && $dist <= 10) {
            $price = $dist * 14.50;
          } 
          else if ($dist > 10 && $dist <= 60) {
            $temp = 10 * 14.50;
            $price = (($dist - 10) * 13.00) + $temp;
          } 
          else if ($dist > 60 && $dist <= 160) {
            $temp1 = 10 * 14.50;
            $temp2 = 50 * 13.00;
            $price = (($dist - 60) * 11.20) + ($temp1 + $temp2);
          } 
          else
           {
            $temp1 = 10 * 14.50;
            $temp2 = 50 * 13.00;
            $temp3 = 100 * 11.20;
            $price = (($dist - 160) * 9.50) + ($temp1 + $temp2+$temp3);
          }
          if($lauggage ==null && $lauggage==0)
          {
            $price_lauuge=$price+0;
          }
          else if($lauggage>0 && $lauggage<=10){
            $price_lauuge=$price+50;
          }
          else if($lauggage>10 && $lauggage<=20){
            $price_lauuge=$price+100;
          }
          else if($lauggage>20){
            $price_lauuge=$price+200;
          }

          $tot_price=$price_lauuge+150;
          return $tot_price;
          break;

             // ************* Check CedRoyal Fare *************


          case "CedRoyal":
            if ($dist > 0 && $dist <= 10) {
              $price = $dist * 15.50;
            } 
            else if ($dist > 10 && $dist <= 60) {
              $temp = 10 * 15.50;
              $price = (($dist - 10) * 14.00) + $temp;
            } 
            else if ($dist > 60 && $dist <= 160) {
              $temp1 = 10 * 15.50;
              $temp2 = 50 * 14.00;
              $price = (($dist - 60) * 12.20) + ($temp1 + $temp2);
            } 
            else
             {
              $temp1 = 10 * 15.50;
              $temp2 = 50 * 14.00;
              $temp3 = 100 * 12.20;
              $price = (($dist - 160) * 10.50) + ($temp1 + $temp2+$temp3);
            }
            if($lauggage ==null && $lauggage==0)
          {
            $price_lauuge=$price+0;
          }
           else if($lauggage>0 && $lauggage<=10){
              $price_lauuge=$price+50;
            }
            else if($lauggage>10 && $lauggage<=20){
              $price_lauuge=$price+100;
            }
            else if($lauggage>20){
              $price_lauuge=$price+200;
            }
  
            $tot_price=$price_lauuge+200;
            return $tot_price;
            break;


             // ************* Check CedSUV Fare *************


          case "CedSUV":
            if ($dist > 0 && $dist <= 10) {
              $price = $dist * 16.50;
            } 
            else if ($dist > 10 && $dist <= 60) {
              $temp = 10 * 16.50;
              $price = (($dist - 10) * 15.00) + $temp;
            } 
            else if ($dist > 60 && $dist <= 160) {
              $temp1 = 10 * 16.50;
              $temp2 = 50 * 15.00;
              $price = (($dist - 60) * 13.20) + ($temp1 + $temp2);
            } 
            else
             {
              $temp1 = 10 * 16.50;
              $temp2 = 50 * 15.00;
              $temp3 = 100 * 13.20;
              $price = (($dist - 160) * 11.50) + ($temp1 + $temp2+$temp3);
            }
            if($lauggage ==null && $lauggage==0)
          {
            $price_lauuge=$price+0;
          }
            else if($lauggage>0 && $lauggage<=10){
              $price_lauuge=$price+100;
            }
            else if($lauggage>10 && $lauggage<=20){
              $price_lauuge=$price+200;
            }
            else if($lauggage>20){
              $price_lauuge=$price+400;
            }
  
            $tot_price=$price_lauuge+250;
            return $tot_price;
            break;
            default:
             
            return 0;






    }





    return $this->total_fare;
  }
}
