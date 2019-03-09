
<?php

            
$index='href="../../index.php"';

$logout='href="../../logout.php"';
$img='src="../../dist/img/user2-160x160.jpg"';

//   -----------------------------------------------------------------//


// class for active



$dashboard = 'class=""'; //dashboard
$home = 'class=""'; // home

$cons = 'class="treeview active"'; //about us
$admin= 'class="active"';

$student = 'class="treeview "'; //about us
$curr= 'class=""';

$notice= 'class="treeview "';

$ln= 'class=""';
$sc= 'class=""';
$cep= 'class=""';
$tender= 'class=""';

//   -----------------------------------------------------------------//


// pages path href

$dashboard_href ='href="../../index.php"'; //dashboard
$home_href ='href="../../pages/home/home.php"';//home

$admin_href='href="../../pages/concession/admin.php"'; //about us
$curr_href='href="../../pages/curr/curr.php"'; //about us

$ln_href='href="../../pages/notices/ln.php"';
$sc_href='href="../../pages/notices/sc.php"';
$cep_href='href="../../pages/notices/cep.php"';
$tender_href='href="../../pages/notices/tender.php"';
$feedback_href='href="../../pages/feedback/graph.php"';
$feedback='class="treeview"';
$feed= 'class=""';
$TT_href='href="../../pages/curr/TT.php"';
$TT= 'class=""';
$qs_href='href="../../pages/curr/qs.php"';
$qs= 'class=""';
session_start();
if (isset($_SESSION['user_id'])) {
  // logged in


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin GPM | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->

 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
  <style>
  .hide
  {
     display:none;
  }

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


  <!-- Left side column. contains the logo and sidebar -->
 
  <?php

include "../../header.php"

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="#">About us</a></li>

        <li class="active">Mission & Vission</li>
      </ol>
    </section>

      <section class="content">

<div class="row">

  <!-- /.col -->
  <div class="col-md-9">
    <div class="nav-tabs-custom">
     
      <div class="tab-content">
        <div class="active tab-pane" id="activity">
        <div class="box box-primary">
           
           <!-- /.box-header -->
           <!-- form start -->
           <form method="POST" name="verify" id="verify" action="verify.php" enctype="multipart/form-data" >

             <div class="box-body" >
        
          
         <div class="form-group">
         <div class="box-footer">
               <button type="submit" name="verify" id="verify" class="btn btn-primary">Verify</button>
             </div>
             </div>
             </div>
             </form>
             <div class="box-body" >
        
          
        <div class="form-group">
        <div class="box-footer">
        <input type='button' class="btn btn-primary" value='Open PDF' onclick = 'openPdf()'/>
        </div>
        <div class="form-group">
            
        <iframe id='myFrame' style='display:none' width='500' height='300'></iframe>

<?php



if(isset($_POST['submitSear'])){

    $db = mysqli_connect("localhost","root","","gpm");

    $title = $_POST['search'];
    $file= $title . ".pdf";
    $_SESSION['filename'] = $file;
    

    $sql = "SELECT * FROM concession where filename = '$file' ";

  $result =   mysqli_query($db,$sql);
  $data = mysqli_fetch_array($result);
 echo $data['filename'];
// $file = 
echo "


  
  <script type='text/javascript'>
  function openPdf()
  {
  var omyFrame = document.getElementById('myFrame');
  omyFrame.style.display='block';
 omyFrame.src ='../../../GPM/pdf_concession/".$data['filename']."';

  }
  </script>";
    // header("refresh:2; url=principal_desk.php")

   // omyFrame.src ='../../../GPM/pdf_concession".$data['filename']."';

  }

?>

          </div>
               </div>
               </div>

        </div>
      
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

</section>
    <!-- /.content -->
  </div>
  <?php

include "../../footer.php"

?>

<script>
 
 $('#grid_table_vission').jsGrid({

  width: "100%",
  height: "600px",

  filtering: true,
  inserting:true,
  editing: true,
  sorting: true,
  paging: true,
  autoload: true,
  pageSize: 10,
  pageButtonCount: 5,
  deleteConfirm: "Do you really want to delete data?",

  controller: {
   loadData: function(filter){
    return $.ajax({
     type: "GET",
     url: "fetch_data.php",
     data: filter
    });
   },
   insertItem: function(item){
    return $.ajax({
     type: "POST",
     url: "fetch_data.php",
     data:item
    });
   },
   updateItem: function(item){
    return $.ajax({
     type: "PUT",
     url: "fetch_data.php",
     data: item
    });
   },
   deleteItem: function(item){
    return $.ajax({
     type: "DELETE",
     url: "fetch_data.php",
     data: item
    });
   },
   
  },

  fields: [
   {
    name: "id",
 type: "text",
 css: ''
   },
   {
    name: "name", 
 type: "text", 
 width: 150, 
 validate: "required"
   },
   {
    name: "enroll", 
 type: "text", 
 width: 150, 
 validate: "required"
   },
   {
    name: "filename", 
 type: "text", 
 width: 150, 
 validate: "required"
 
   },
 
   {
    type: "control"
   }
  ]

 });

</script>

<script>
 
 $('#grid_table_mission').jsGrid({

  width: "100%",
  height: "600px",

  filtering: true,
  inserting:true,
  editing: true,
  sorting: true,
  paging: true,
  autoload: true,
  pageSize: 10,
  pageButtonCount: 5,
  deleteConfirm: "Do you really want to delete data?",

  controller: {
   loadData: function(filter){
    return $.ajax({
     type: "GET",
     url: "fetch_data.php",
     data: filter
    });
   },
   insertItem: function(item){
    return $.ajax({
     type: "POST",
     url: "fetch_data.php",
     data:item
    });
   },
   updateItem: function(item){
    return $.ajax({
     type: "PUT",
     url: "fetch_data.php",
     data: item
    });
   },
   deleteItem: function(item){
    return $.ajax({
     type: "DELETE",
     url: "fetch_data.php",
     data: item
    });
   },
  },

  fields: [
   {
    name: "id",
 type: "text",
 css: ''
   },
   {
    name: "title mission", 
 type: "text", 
 width: 150, 
 validate: "required"
   },

   
   
  
   
 
   {
    type: "control"
   }
  ]

 });

</script>
<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add_mission').click(function(){  
           i++;  
           var html_code = "<div id='row"+i+"'>";
           html_code += " <div class='form-group'>";
           html_code += "<input type='text' name='name[]' placeholder='Enter your Name' class='form-control name_list' /> ";
           html_code += "</div>";
           html_code += " <div align='right'class='form-group'>";
           html_code +="<button type='button' name='remove' id="+i+" class='btn btn-danger btn_remove'>X</button>";
           html_code += "</div>";
           html_code += "</div>";
           $('#dynamic_field_mission').append(html_code);  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit_mission').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name_mission').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name_mission')[0].reset();  
                }  
           });  
      });  
 });  
 </script>

 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add_vission').click(function(){  
           i++;  
           var html_code = "<div id='row"+i+"'>";
           html_code += " <div class='form-group'>";
           html_code += "<input type='text' name='name1[]' placeholder='Enter your Name' class='form-control name_list' /> ";
           html_code += "</div>";
           html_code += " <div align='right'class='form-group'>";
           html_code +="<button type='button' name='remove' id="+i+" class='btn btn-danger btn_remove'>X</button>";
           html_code += "</div>";
           html_code += "</div>";
           $('#dynamic_field_vission').append(html_code);  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit_vission').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name_vission').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name_vission')[0].reset();  
                }  
           });  
      });  
 });  
 </script>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../../bower_components/moment/min/moment.min.js"></script>
<script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
<?php
} else {
  header('Location: http://localhost/Admin/login.php');
}

?>