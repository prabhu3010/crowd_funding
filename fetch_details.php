<?php
     include("config/dbconnect.php");
  $db=new Database();
  $db->connect();


   if(isset($_GET['category']) && isset($_GET['party'])){
    $category_id=$_GET['category'];
    $party_id=$_GET['party'];
    $condition_str="pol.category_id=".$category_id." and pol.party_id=".$party_id;
   }else if(!isset($_GET['category']) && isset($_GET['party'])){
    $party_id=$_GET['party'];
        $condition_str=" pol.party_id=".$party_id;
   }else if(isset($_GET['category']) && !isset($_GET['party'])){
    $category_id=$_GET['category'];
      $condition_str="pol.category_id=".$category_id;
   }
// echo $condition_str;

 $sql = "select pol.id as politician_id,pol.email as email,det.id as det_id,det.*,par.id as party_id,par.party_name,cat.id as cat_id,cat.category_name,c.id as city_id,c.city_name from politicians as pol\n"
    . "left join user_details as det on det.id=pol.details_id\n"
    . "left join parties as par on par.id=pol.party_id\n"
    . "left join categories as cat on cat.id=pol.category_id\n"
    . "left join cities as c on c.id=pol.city_id where ".$condition_str.";";

  //echo $sql;

  $result =$db->process_select_query($sql);


         $json = json_encode($result);
     echo $json;



  ?>