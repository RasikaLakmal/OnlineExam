
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <meta name="_token" content="nsZZRkbhIrpMBUQEt7jkULnMpSc7Tiyp3I5Z9oWb"/>


     <link rel="stylesheet" type="text/css" href="/css/bootstrap1.min.css"/>
    
    <link rel="stylesheet" type="text/css" href="/css/font-awesome1.css"/>
    <link rel="stylesheet" type="text/css" href="/css/menu1.css"/>
    <link rel="stylesheet" type="text/css" href="/css/custom1.css"/>
    <link rel="stylesheet" type="text/css" href="/css/AdminLTE1.min.css"/>


    <link rel="stylesheet" type="text/css" href="/css/datatables.bootstrap1.css" />
    <link href="/css/sweetalert1.css" rel="stylesheet" />
    
    <link href="/css/metallic1.css" rel="stylesheet" typeee="text/css"/>
        <link href="/css/select21.css" rel="stylesheet" typeee="text/css"/>
        <link rel="sty1esheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="sty1esheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">   

<link rel="stylesheet" href="styleprof.css">



 
   
</head>
<body>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="nav-side-menu">
    <div class="brand">Online Exam</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
         
            <ul id="menu-content" class="menu-content collapse out">
               
            <li class="collapsed ">
                  <a href="texams"><i class="fa fa-gift fa-lg"></i>Exams</a>
                </li>
                <li class="active">
                  <a href="dashboard"><i class="fa fa-dashboard fa-lg"></i>Dashboard</span></a>
                </li>
                <li class="collapsed ">
                  <a href="mse"><i class="fa fa-gift fa-lg"></i>Monitor Started Exams</a>
                </li>

                

                
                 <!--li class="collapsed ">
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
                </ul-->


                  
                 <!--li data-toggle="collapse" data-target="#profile" class="collapsed">
                    <a href="#"><i class="fa fa-user fa-lg"></i> Profile <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="profile">
                  <li><a href="http://192.248.56.20/match-module/mail/update">Update Mail</a></li>
                  <li><a href="http://192.248.56.20/match-module/members/change-password">Change Password</a></li>
                  <li><a href="http://192.248.56.20/match-module/auth/logout">Logout</a></li>
                </ul-->

                 
               
            </ul>
     </div>
</div>

<div class="admin-header login">
      <a href="#"><i class="fa fa-user"></i> &nbsp;Administrator</a> &nbsp; 
      <span><button class="fa fa-sign-out" style="height:40px;" >
                <!--i class="fa fa-sign-out"></i-->
                <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-dropdown-link>
                        </form>
                
              </button></span></div>
  </div>
 <div id="page-wrapper">
    <div class="row">
    
        <div class="border"><span>Dashboard</span></div>
        
        
        
    </div>
</div>
    





<script type="text/javascript" src="/js/jquery-1.10.21.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap1.min.js"></script>
    

    <script type="text/javascript" src="/js/jquery.dataTables1.min.js"></script>
    <script type="text/javascript" src="/js/datatables.bootstrap1.js"></script>
    <script type="text/javascript" src="/js/sweetalert1.min.js"></script>

    <script type="text/javascript" src="/js/zebra_datepicker1.js"></script>
    <script type="text/javascript" src="/js/select21.full.js"></script>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if($msg = session()->get('msg'))
@if($msg == "User Added")
<script>
     Swal.fire({
               position: 'top',
               icon: 'success',
               title: '{{$msg}}',
               showConfirmButton: false,
               timer: 2000
            
          });
     </script>

@elseif($msg == "Successfully Done")
     <script>
     Swal.fire({
               position: 'top',
               icon: 'success',
               title: '{{$msg}}',
               showConfirmButton: false,
               timer: 2000
            
          });
     </script>

@elseif($msg == "Deleted successfully")
     <script>
     Swal.fire({
               position: 'top',
               icon: 'success',
               title: '{{$msg}}',
               showConfirmButton: false,
               timer: 2000
            
          });
     </script>
     
     @endif
     @endif
<script> 
    $('.tabledash').DataTable();
 </script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<scr1pt src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/l.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<scr1pt src="https://cdn.datatab1es.net/1.10.19/js/jquery.dataTab1es.min.js"></scr1pt>
<script src="https://cdn.datatab1es.net/l.16.19/js/dataTab1es.bootstrap4.min.js"></script>   
</body>
</html>
