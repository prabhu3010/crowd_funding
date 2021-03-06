<?php 
include("header.php"); 
$db=new Database();
$db->connect();
        $datenow=date('Y-m-d h:i:s', time());

if(isset($_SESSION['ADMIN_STATUS']) && $_SESSION['ADMIN_STATUS']==true)
{
    if((isset($_POST['city_id'])))
    {

        $city_id=$_POST['city_id'];
        $city_name=$_POST['city_name'];
        $city_description= mysql_real_escape_string($_POST['city_description']);
        $table = "cities";
        $where = " id=".$city_id;

        $rows = array("city_name" => $city_name,"city_description" => $city_description);
        $res=$db->update($table,$rows,$where);
        if(isset($_FILES['files'])){
            $errors= array();
            for($i=0; $i<count($_FILES['files']['name']);$i++)
            {
                $file_name = time().$_FILES['files']['name'][$i];
                $file_size =$_FILES['files']['size'][$i];
                $file_tmp =$_FILES['files']['tmp_name'][$i];
                $file_type=$_FILES['files']['type'][$i];  
                if($file_size > 2097152){
                    $errors[]='File size must be less than 2 MB';
                }       
                $image_path="../uploads/cities/".$file_name;
                if(empty($errors)==true){
                    move_uploaded_file($file_tmp, $image_path);
                    $table = "city_images";
                    $rows='image_name,city_id,created_at,updated_at';
                    $values=array($file_name,$city_id,$datenow,$datenow);
                    $id=$db->insert($table,$values,$rows);

                }else{
                        print_r($errors);
                }

            }
            if(empty($error)){
            }
        }
    }
    else if(isset($_POST['city_name']))
    {
        $db=new Database();
        $db->connect();
        $city_name=$_POST['city_name'];
        $city_description= mysql_real_escape_string($_POST['city_description']);

        $table = "cities";
        $rows='city_name,city_description,created_at,updated_at';
        $values=array($city_name,$city_description,$datenow,$datenow);
        
        $city_id=$db->insert($table,$values,$rows);

        if(isset($_FILES['files'])){
            $errors= array();
            for($i=0; $i<count($_FILES['files']['name']);$i++)
            {
                $file_name = time().$_FILES['files']['name'][$i];
                $file_size =$_FILES['files']['size'][$i];
                $file_tmp =$_FILES['files']['tmp_name'][$i];
                $file_type=$_FILES['files']['type'][$i];  
                if($file_size > 2097152){
                    $errors[]='File size must be less than 2 MB';
                }       
                $image_path="../uploads/cities/".$file_name;
                if(empty($errors)==true){
                    move_uploaded_file($file_tmp, $image_path);
                    $table = "city_images";
                    $rows='image_name,city_id,created_at,updated_at';
                    $values=array($file_name,$city_id,$datenow,$datenow);
                    $id=$db->insert($table,$values,$rows);

                }else{
                        print_r($errors);
                }

            }
            if(empty($error)){
            }
        }

    }
}
else
{
    echo "<script>window.location.href='index.php';</script>";
}


?>

<!-- CONTENT -->
<div id="contentHolder" class="width100">
    <div id="grayGradientLight"></div>
    
    <!-- MAIN -->
    <div id="main" class="width1000">
    
        <!-- Navigation -->
            <?php include("navigation.php"); ?>
        
        <!-- .Navigation -->
        
        <!-- Content -->
        <div id="content" class="default">
            <h2>Cities List</h2>

            <input type="hidden" value="1" id="pageNumber" />
            <div class="btn-toolbar">
                <a class="btn btn-primary" href='add_city.php'>New City</a>
            </div>
            
            <div class="row">

                <div class="span1"></div>
                <div class="span9">
                    <div class="well">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>City Name</th>
                              <th>Images</th>
                              <th>Page</th>
                               <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <div id="loading" ></div>
                          <tbody id="tblcontent">
                          </tbody>
                        </table>
                    </div>
                    <div class="pagination">
                        <ul>
                            <?php
                                $db = new Database();  
                                $db->connect();
                                $sql="SELECT * FROM cities";
                                $res=$db->process_select_query($sql);
                                $per_page = 10; 
                                //Calculating no of pages
                                // $sql = "select * from users";
                                // $result = mysql_query($sql);
                                $count = count($res);
                                $pages = ceil($count/$per_page);
                                //Pagination Numbers
                                    for($i=1; $i<=$pages; $i++)
                                    {
                                    echo '<li id="'.$i.'"><a href="#">'.$i.'</a></li>';
                                    }
                            ?>
                        </ul>
                    </div>

                </div>
                <div class="span2"></div>
            </div> 
           
        </div>
        <!-- .Content -->
    
    </div>
    <!-- .MAIN -->

</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Are you sure you want to delete the Record?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" id="confirm_delete" data-dismiss="modal">Delete</button>
    </div>
</div>


<div class="modal hide fade" id="city_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div>
        <form method="post" action="" name="registerform" id="registerform"
             class="form-horizontal">
            <div class="well">         
                <legend>Add City</legend>
                <table class="">
                    <tr>
                        <td>City Name : &nbsp;</td>
                        <td>
                            <input type="text" class="input-xlarge" id="city_name" name="city_name" />
                        </td>
                    </tr>
                    <tr>
                        <td>City Description : &nbsp;</td>
                        <td>
                            <textarea class="input-xlarge" id="city_description" name="city_description"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><label id="city_error" style="height:20px;" class="error"></label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button id="create_city_button" class="btn btn-success" >Create New City</button>
                            <label id="city_exist_error" style="float:right;" class="error"></label>
                        </td>
                    </tr>
                </table>
            </div>   
        </form>
    </div>
</div>   
<div class="modal hide fade" id="city_view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div>
        <form method="post" action="" name="registerform" id="registerform"
             class="form-horizontal">
            <div class="well">         
                <legend>City Page</legend>
                <iframe style="height:100%;width:100%;" id="description_page" src="add_city.php"></iframe>
            </div>   
        </form>
    </div>
</div>   
<div class="modal hide fade" id="city_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div>
        <form method="post" action="" name="" id=""
             class="form-horizontal">
            <div class="well">         
                <legend>Update City</legend>
                <table class="">
                    <tr>
                        <td>City Name : &nbsp;</td>
                        <td>
                            <input type="text" class="input-xlarge" id="city_name_edit" name="city_name_edit" />
                        </td>
                    </tr>
                    <tr>
                        <td>City Description : &nbsp;</td>
                        <td>
                            <textarea class="input-xlarge" id="city_description_edit" name="city_description_edit"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><label id="city_edit_error" style="height:20px;" class="error"></label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button id="edit_city_button" class="btn btn-success" >Update  City</button>
                        </td>
                    </tr>
                </table>
            </div>   
        </form>
    </div>
</div>   
<!-- .CONTENT -->

<!-- FOOTER -->
            <?php include("../footer.php"); ?>

<!-- .FOOTER -->


</body>
</html>
<script type="text/javascript">
    // alert("fgh");
    Display_Load();
    $("#tblcontent").load("city_paginate.php?page=1", Hide_Load());

    //Display Loading Image
    function Display_Load()
    {
    $("#loading").fadeIn(900,0);
    $("#loading").html("<img class='loader' src='../img/loading.gif'>");
    }
    //Hide Loading Image
    function Hide_Load()
    {
    $("#loading").fadeOut('slow');
    };

    //Default Starting Page Results
    // $(".pagination li:first")
    // .css({'color' : '#FF0084'}).css({'border' : 'none'});
    // Display_Load();


    //Pagination Click
    $(".pagination li").click(function(){
        Display_Load();
        //CSS Styles
        $(".pagination li")
        .css({'border' : 'solid #dddddd 1px'})
        .css({'color' : '#0063DC'});

        $(this)
        .css({'color' : '#FF0084'})
        .css({'border' : 'none'});

        //Loading Data
        var pageNum = this.id;
        console.log("req"+pageNum);
        $("#pageNumber").val(pageNum);
        $("#tblcontent").load("city_paginate.php?page=" + pageNum, Hide_Load());
    });

    $(document).on("click",".change_approve",function(){
        current_status=$(this).attr('id');
        user_id=$(this).attr('data_user_id');
        $.ajax({
                type: "POST",
                url: "change_approve.php",
                data: {
                    "current_status":current_status,
                    "user_id":user_id,
                    "userType":"users"
                    },
                cache: false,
                dataType:"json",
                success: function(result){
                    // console.log(result);
                        if(result.status==1){
                            Display_Load();
                            $("#tblcontent").load("city_paginate.php?page="+$("#pageNumber").val(), Hide_Load());
                        }
                }
        });
    });
    $(document).on("click","#create_city_button",function(){
        city_name=$("#city_name").val();
        city_description=$("#city_description").val();
        if(city_name!="" && city_description!="")
        {
            $.ajax({
                    type: "POST",
                    url: "city_manage.php",
                    data: {
                        "city_name":city_name,
                        "city_description":city_description,
                        "process_type":"add"
                        },
                    cache: false,
                    success: function(result){
                    }
            });
        }
        else
        {
            $("#city_error").html("Enter All Details");
            return false;
        }
    });

    $(document).on("change","#city_name",function(){
      var city_name=$(this).val();
      check_avail(city_name,"new");
    });
    function check_avail(city_name,from)
    {
        if(from =="new")
            errorID="#city_exist_error";
        else
            errorID="#city_exist_edit_error";

            $.ajax({
                    type: "POST",
                    url: "city_manage.php",
                    data: {
                        "city_name":city_name,
                        "process_type":"check_avail"
                        },
                    cache: false,
                    success: function(result){
                        if(result!="success")
                            $(errorID).html(result);
                        else
                            $(errorID).html("");
                    }
            });
    }

    $(document).on("click",".rec_delete",function(){
              var city_id=$(this).attr('rel-id');
        
       $("#confirm_delete").on("click",function(){
        // alert(city_id);


          $.ajax({
                    type: "POST",
                    url: "city_manage.php",
                    data: {
                        "city_id":city_id,
                        "process_type":"delete"
                        },
                    cache: false,
                    success: function(result){
                       location.reload();
                    }
            });

       });
    });

$(document).on("click",".rec_update",function(){
              var city_id=$(this).attr('rel-id');
              var city_name=$(this).attr('rel-name');
              $("#city_name_edit").val($(this).attr('rel-name'));
              $("#city_description_edit").val($(this).attr('rel-des'));
        // alert(city_id);
        $("#edit_city_button").on("click",function(){
            city_name=$("#city_name_edit").val();
            city_description=$("#city_description_edit").val();
            if(city_name=="" || city_description=="" )
            {
                $("#city_error_edit").html("Enter All Fields");
                return false;
            }
            else
            {
                $.ajax({
                        type: "POST",
                        url: "city_manage.php",
                        data: {
                            "city_name":city_name,
                            "city_description":city_description,
                            "city_id":city_id,
                            "process_type":"update"
                            },
                        cache: false,
                        dataType: "json",
                        success: function(result){
                            alert(result.status);
                        }
                });
            }
        });
    });

$(document).on("click",".rec_view",function(){
              var city_id=$(this).attr('rel-id');
              $("#description_page").attr("src",$(this).attr('rel-src'));
       
    });

$(document).on("click","#delete_image",function(){
    var image_id=$(this).attr('data-id');
    var image_path=$(this).attr('data-path');
    if(confirm('Are you sure you want to delete this Image?')){
        $.ajax({
                type: "POST",
                url: "city_manage.php",
                data: {
                    "image_id":image_id,
                    "image_path":image_path,
                    "process_type":"delete_image"
                    },
                cache: false,
                success: function(result){
                   location.reload();
                }
        });
    }

});


</script>