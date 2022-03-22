
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Y-Bridge Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <meta name="_token" content="nsZZRkbhIrpMBUQEt7jkULnMpSc7Tiyp3I5Z9oWb"/>


    <link rel="stylesheet" type="text/css" href="http://192.248.56.20/match-module/asset/admin-tem/css/bootstrap.min.css"/>
    
    <link rel="stylesheet" type="text/css" href="http://192.248.56.20/match-module/asset/admin-tem/css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="http://192.248.56.20/match-module/asset/admin-tem/css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="http://192.248.56.20/match-module/asset/css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="http://192.248.56.20/match-module/asset/css/AdminLTE.min.css"/>


    <link rel="stylesheet" type="text/css" href="http://192.248.56.20/match-module/asset/css/datatables.bootstrap.css" />
    <link href="http://192.248.56.20/match-module/asset/admin-tem/css/sweetalert.css" rel="stylesheet" />
    <link href="http://192.248.56.20/match-module/asset/css/AdminLTE.css" rel="stylesheet" typeee="text/css"/>
    <link href="http://192.248.56.20/match-module/asset/date/css/metallic.css" rel="stylesheet" typeee="text/css"/>
        <link href="http://192.248.56.20/match-module/asset/select2/select2.css" rel="stylesheet" typeee="text/css"/>





 
   
</head>
<body>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="nav-side-menu">
    <div class="brand">Y-Bridge Admin</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
         
            <ul id="menu-content" class="menu-content collapse out">
               

                <li class="active">
                  <a href="admin"><i class="fa fa-dashboard fa-lg"></i>Dashboard</span></a>
                </li>
                <li class="collapsed ">
                  <a href="aacademic"><i class="fa fa-gift fa-lg"></i>Academic</a>
                </li>

                <li class="collapsed ">
                  <a href="astudent"><i class="fa fa-gift fa-lg"></i>Student</a>
                </li>

                <li class="collapsed ">
                  <a href="aindustrial"><i class="fa fa-gift fa-lg"></i>Industrial</a>
                </li>

                <li class="collapsed ">
                  <a href="http://192.248.56.20/match-module/subject"><i class="fa fa-gift fa-lg"></i>Subject</a>
                </li>

                <li class="collapsed ">
                  <a href="http://192.248.56.20/match-module/topic"><i class="fa fa-gift fa-lg"></i>Topics</a>
                </li>

                 <li class="collapsed ">
                  <a href="http://192.248.56.20/match-module/subtopic"><i class="fa fa-gift fa-lg"></i>Sub Topic</a>
                </li>
                <li class="collapsed ">
                  <a href="http://192.248.56.20/match-module/technologies"><i class="fa fa-gift fa-lg"></i>Technologies</a>
                </li>

                <li class="collapsed ">
                  <a href="http://192.248.56.20/match-module/event"><i class="fa fa-gift fa-lg"></i>Events</a>
                </li>

                <li  data-toggle="collapse" data-target="#staff" class="collapsed ">
                  <a href="#"><i class="fa fa-gift fa-lg"></i>University<span class="arrow"></span></a>
                </li>

                <ul class="sub-menu collapse " id="staff">
                  <li class=""><a href="http://192.248.56.20/match-module/university">University</a></li>
                  <li class=""><a href="http://192.248.56.20/match-module/faculty">Faculty</a></li>
                    <li class=""><a href="http://192.248.56.20/match-module/department">Department</a></li>
                </ul>


                  
                 <li data-toggle="collapse" data-target="#profile" class="collapsed">
                    <a href="#"><i class="fa fa-user fa-lg"></i> Profile <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="profile">
                  <li><a href="http://192.248.56.20/match-module/mail/update">Update Mail</a></li>
                  <li><a href="http://192.248.56.20/match-module/members/change-password">Change Password</a></li>
                  <li><a href="http://192.248.56.20/match-module/auth/logout">Logout</a></li>
                </ul>

                 
               
            </ul>
     </div>
</div>

  <div class="admin-header login">
      <a href="#"><i class="fa fa-user"></i> &nbsp;Administrator</a> &nbsp; 
      <span><a href="home"><i class="fa fa-sign-out"></i> Log out</span></a></div>
  </div>
 <div id="page-wrapper">
    <div class="row">
    
        <div class="border"><span>New Partcipants Details</span></div>
   <table class="table table-responsive table-hover" id="users">
	<thead>
	<tr> 
		<th>First Name</th> 
		<th>Last Name</th> 
		<th>Email</th> 
		<th>Request for</th> 
    <th>Action</th>
	 	<th>Select Type</th>

	</tr>
	</thead>
  @foreach($table_data as $data)
  <tbody><tr>

  <td>{{$data->fname}}</td> 
		<td>{{$data->lname}}</td> 
    <td>{{$data->email}}</td> 
    <td>{{$data->role}}</td> 
    <td>{{$data->fname}}</td>
    <td>{{$data->role}}</td>  

</tr>
  </tbody>
  @endforeach
</table>
    
    </div>
</div>
    





    <script type="text/javascript" src="http://192.248.56.20/match-module/asset/admin-tem/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://192.248.56.20/match-module/asset/admin-tem/js/bootstrap.min.js"></script>
    

    <script type="text/javascript" src="http://192.248.56.20/match-module/asset/admin-tem/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://192.248.56.20/match-module/asset/admin-tem/js/datatables.bootstrap.js"></script>
    <script type="text/javascript" src="http://192.248.56.20/match-module/asset/admin-tem/js/sweetalert.min.js"></script>

    <script type="text/javascript" src="http://192.248.56.20/match-module/asset/date/js/zebra_datepicker.js"></script>
    <script type="text/javascript" src="http://192.248.56.20/match-module/asset/select2/select2.full.js"></script>
    <script type="text/javascript">


    $(document).ready(function(){
      setTimeout(function(){
         $(".select").select2({
          width:'100%',
          placeholder: "Please Select",
          allowClear: true
        });
         
        $("#myMessage").hide('slow');}, 2000);

      $('input[type=text]#date').Zebra_DatePicker({
        format: 'Y-m-d'
      });
      //alert();
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        }); 
    });
     (function ($) {

        $('#Adminfilter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.AdminSearchable tr').hide();
            $('.AdminSearchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();
            //$('#pager').html('');

        }) 
    }(jQuery));
      
    </script>

  <script type="text/javascript">
	//alert('welcome');
$(document).ready(function(){
   var table= $('#pending-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/',
        columns: [
         
           // {data: 'first_name', name: 'first_name'},
           // {data: 'last_name', name: 'last_name'},
            {data: 'email', name: 'email'},
           // {data: 'gender', name: 'gender'},
           // {data: 'action', name: 'action',orderable:false,searchable:false},
           // {data: 'select', name: 'select',orderable:false,searchable:false},

        ],
         "scrollY": 500,
        "scrollX": true,
        "fnDrawCallback": function (oSettings) {
          $('[data-toggle="tooltip"]').tooltip();
           $('.SelectPermission').change(function(){
                    var Id = $(this).attr('id');
                    var type = $(this).val();
                    var url = '/';
                    
                    //////////
                    swal({   
                    title: "Are you sure?",    
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DB3945",   
                    confirmButtonText: "Yes",   
                    closeOnConfirm: false }, 
                    function(isConfirm){   
                         if (isConfirm) {  
                            var get= $.get(url,{Type:type,userID:Id});

					      	get.done(function( data ) {
					            if(data.success) {
							    swal({
							          title: "Permission Allowed!",
							          timer: 2000,
							          type:"success",
							          showConfirmButton: true
							        });
					         table.ajax.reload();
					          
					            } else{
					            	alert('please try again!');
					            }
					        });
					         
					    
					        }
					                    });
                    ///////////
                    get.fail(function(){
                        swal({
                            title: "Fail please try again",
                            timer: 2000,
                            type:"fail",
                            showConfirmButton: false
                        });
                    });
                });

        }
    });

//delete function

$(document).on("click","#DeleteBtn",function(e){
        e.preventDefault();
        var deleteUrl=$(this).attr('href');
        //alert(deleteUrl);
        var token = $(this).attr('data-token');

                swal({   
                    title: "Are you sure?",   
                    text: "You will not be able to recover this imaginary file!",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DB3945",   
                    confirmButtonText: "Yes, delete it!",   
                    closeOnConfirm: false }, 
                    function(isConfirm){   
                         if (isConfirm) {   
                                

    var request = $.ajax({
          url:deleteUrl,
          method: "GET",
          data: {_method: 'delete', _token :token},
          dataType: "json"
        });
         
        request.done(function( data ) {
            if(data.success) {
    swal({
          title: "Deleted!",
          //text:"Lecture Delete",
          timer: 2000,
          type:"success",
          showConfirmButton: true
        });
         table.ajax.reload();
          
            } //success
        });
         
        request.fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
                            }
                    });


    });

});
	
	
</script>

</body>
</html>
