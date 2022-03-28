
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <meta name="_token" content="SFC22gpZIqy5TAzLOu4onWvu4TqiJ6da2P7Tlwi4"/>


     <link rel="stylesheet" type="text/css" href="/css/bootstrap1.min.css"/>
    
    <link rel="stylesheet" type="text/css" href="/css/font-awesome1.css"/>
    <link rel="stylesheet" type="text/css" href="/css/menu1.css"/>
    <link rel="stylesheet" type="text/css" href="/css/custom1.css"/>
    <link rel="stylesheet" type="text/css" href="/css/AdminLTE1.min.css"/>


    <link rel="stylesheet" type="text/css" href="/css/datatables.bootstrap1.css" />
    <link href="/css/sweetalert1.css" rel="stylesheet" />
    
    <link href="/css/metallic1.css" rel="stylesheet" typeee="text/css"/>
        <link href="/css/select21.css" rel="stylesheet" typeee="text/css"/>


        <link rel="stylesheet" href="styleprof.css">


 
   
</head>
<body>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="nav-side-menu">
    <div class="brand">Online Exam</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
         
            <ul id="menu-content" class="menu-content collapse out">
               

            <li class="collapsed">
                  <a href=""><i class="fa fa-dashboard fa-lg"></i>Home</span></a>
                </li>
                <!--li class="collapsed ">
                  <a href=""><i class="fa fa-gift fa-lg"></i>Monitor Started Exams</a>
                </li-->

                <li class="active ">
                  <a href="sexams"><i class="fa fa-gift fa-lg"></i>Exams</a>
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
      <a href="#"><i class="fa fa-user"></i> &nbsp;Profile</a> &nbsp; 
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
                
              </button></span></a></div>
  </div>
 <div id="page-wrapper">
    <div class="row">
    
        <div class="border"><span>Exams</span></div>
        <table  class="table table-striped table-bordered tabledash" >
  <thead >
    <tr>
      <th scope="col">Exam</th>
      <th scope="col">Starting Time</th>
      <th scope="col">Exam Duration</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($d as $user)
    <tr>
    <td scope="row"><a href="{{route('ssexams',$user->exam_id)}}" target="_blank">{{$user->exam_id}}</a></td>
      <td>{{$user->starting_time}}</td>
      <td>{{$user->duration}}</td>
      <td>{{$user->status}}</td>
      
    </tr>@endforeach
   </tbody>
</table>
    </div>
</div>
<div id="myModalqw" class="modal" >
<div class="modal-content" style="width:25%">
    <span onclick="document.getElementById('myModalqw').style.display = 'none';" class="close">&times;</span>
<form method="POST" action="/upcomingeventsadmin" enctype="multipart/form-data">
        @csrf
        
        <div title="Link">Link</div><input id="link" class="form-control" type="text" name="link" placeholder="Link" required="required" ><br>
        <input id="id" class="form-control" type="hidden" name="id" placeholder="Link" required="required" ><br>
        <div title="firstname">Date</div><input id="date" class="form-control" type="text" name="date" placeholder="Date" required="required" ><br>
        <div title="event name">Event Name</div><input id="ename" class="form-control" type="text" name="ename" placeholder="Event Name" required="required" ><br>
        <div title="description">Description</div><input id="des" class="form-control" type="text" name="description" placeholder="Description" required="required" ><br>
       <input class="btn btn-primary" type="submit" value="submit">
        
    </form>
    </div>

</div>

<div id="myModalqw2" class="modal" >
<div class="modal-content" style="width:50%">
    <span onclick="document.getElementById('myModalqw2').style.display = 'none';" class="close">&times;</span>
<form method="POST" action="/upcomingeventsadminadd" enctype="multipart/form-data">
        @csrf
        
        <div title="Link">Link</div><input id="link" class="form-control" type="text" name="link" placeholder="Link" required="required" ><br>
        <input id="id" class="form-control" type="hidden" name="id" placeholder="Link" required="required" ><br>
        <div title="firstname">Date</div><input id="date" class="form-control" type="text" name="date" placeholder="Date" required="required" ><br>
        <div title="event name">Event Name</div><input id="ename" class="form-control" type="text" name="ename" placeholder="Event Name" required="required" ><br>
        <div title="description">Description</div><input id="des" class="form-control" type="text" name="description" placeholder="Description" required="required" ><br>
       <input class="btn btn-primary" type="submit" value="submit">
        
    </form>
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
   var table= $('#lecture-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '',
        columns: [
            {data: 'first_name', name: 'first_name'},
            {data: 'last_name', name: 'last_name'},
            {data: 'contact_no', name: 'contact_no'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action',orderable:false,searchable:false},

        ],
         "scrollY": 500,
        "scrollX": true,
        "fnDrawCallback": function (oSettings) {
          $('[data-toggle="tooltip"]').tooltip();
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
@if($msg == "Event updated")
<script>
     Swal.fire({
               position: 'top',
               icon: 'success',
               title: '{{$msg}}',
               showConfirmButton: false,
               timer: 2000
            
          });
     </script>
     
     @elseif($msg == "Event Added")
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
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js" ></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js" ></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js" ></script>
</body>
</html>
