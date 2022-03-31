
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profile</title>
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

<!--link rel="stylesheet" href="styleprof.css"-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.2.1/moment.min.js"></script>
<link rel="stylesheet" href="https://ssl.gstatic.com/docs/script/css/add-ons1.css">

 
   
</head>
<style>

* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column1 {
  float: left;
  width: 60%;
  padding: 1px;
  height: 300px; /* Should be removed. Only for demonstration */
}
.column {
  float: left;
  width: 40%;
  padding: 1px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.center {

width: 100%;

padding: 10px;
}

/* Style the form */
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

/* Style the input fields */
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}

</style>

<script>
  $(document).ready(function() {
    $('iframe', window.parent.document).css({
      overflow: 'visible'
    });
    $("#toggle1").click(function() {
      $("#settings").toggle();
      $(this).text(function(i, text) {
        return text === "Hide" ? "Show" : "Hide";
      })
    });
    $("#toggle2").click(function() {
      $("#regulartime").toggle();
      $(this).text(function(i, text) {
        return text === "Hide" ? "Show" : "Hide";
      })
    });
    $("#toggle3").click(function() {
      $("#timehalf").toggle();
      $(this).text(function(i, text) {
        return text === "Hide" ? "Show 1.5x" : "Hide";
      })
    });
    $("#toggle4").click(function() {
      $("#timedouble").toggle();
      $(this).text(function(i, text) {
        return text === "Hide" ? "Show 2x" : "Hide";
      })
    });
    $("#size").change(function() {
      $("span").css("font-size", $(this).val() + "px");
      $("span").css("line-height", $(this).val() + "px");
    });
  });

</script>
<script>
  var j;

  function timeNow(l) {
    window.clearTimeout(j);
    document.getElementById('l').value =l;
    l = parseInt(l);
    var time = document.getElementById('customtime').value;
    if (time !== '') {
    	var t = time.split(":")
      time = moment().hours(t[0]).minutes(t[1]).seconds(0);
      time.millisecond(0);
    } else {
      time = moment().millisecond(0);
    }
    var t = endSet(l, time);
    timing(time, t.endTime, t.endhalfTime, t.enddoubleTime);
  }

  function timing(startDate, endDate, endhalfDate, enddoubleDate) {
    var secchk = document.getElementById('seconds');
    var now = moment();
    if (secchk.checked){
    document.getElementById('currenttime').innerText = moment(now).format("h:mm:ss");
    }else{
    document.getElementById('currenttime').innerText = moment(now).format("h:mm");
    }

    var s = (startDate > now ? startDate : now);
    if (s > now) {
      var duration = moment.duration(now.diff(s));
      var durationhalf = moment.duration(now.diff(s));;
      var durationdouble = moment.duration(now.diff(s));;
    } else {
      var duration = moment.duration(endDate.diff(s));
      var durationhalf = moment.duration(endhalfDate.diff(s));
      var durationdouble = moment.duration(enddoubleDate.diff(s));
    }
    
 if (secchk.checked) {
      document.getElementById('timestart').innerText = moment(startDate).format("h:mm:ss");
      document.getElementById('timeend').innerText = endDate.format("h:mm:ss");
      document.getElementById('timehalfend').innerText = endhalfDate.format("h:mm:ss");
      document.getElementById('timedoubleend').innerText = enddoubleDate.format("h:mm:ss");
      document.getElementById('minsleft').innerText = parseInt(duration.asMinutes()) + ":" + ("0" + Math.abs(parseInt(duration.asSeconds()%60))).slice(-2);
    document.getElementById('minshalfleft').innerText = parseInt(durationhalf.asMinutes()) + ":" + ("0" + Math.abs(parseInt(durationhalf.asSeconds()%60))).slice(-2);
    document.getElementById('minsdoubleleft').innerText = parseInt(durationdouble.asMinutes()) + ":" + ("0" + Math.abs(parseInt(durationdouble.asSeconds()%60))).slice(-2);
    } else {
      document.getElementById('timestart').innerText = moment(startDate).format("h:mm");
      document.getElementById('timeend').innerText = endDate.format("h:mm");
      document.getElementById('timehalfend').innerText = endhalfDate.format("h:mm");
      document.getElementById('timedoubleend').innerText = enddoubleDate.format("h:mm");
      document.getElementById('minsleft').innerText = (duration.asMinutes()>2 ? parseInt(duration.asMinutes()) :  parseInt(duration.asMinutes()) + ":" + ("0" + Math.abs(parseInt(duration.asSeconds()%60))).slice(-2));
    document.getElementById('minshalfleft').innerText = (durationhalf.asMinutes()>2 ? parseInt(durationhalf.asMinutes()) :  parseInt(durationhalf.asMinutes()) + ":" + ("0" + Math.abs(parseInt(durationhalf.asSeconds()%60))).slice(-2));
    document.getElementById('minsdoubleleft').innerText = (durationdouble.asMinutes()>2 ? parseInt(durationdouble.asMinutes()) :  parseInt(durationdouble.asMinutes()) + ":" + ("0" + Math.abs(parseInt(durationdouble.asSeconds()%60))).slice(-2));
    }
  
    j = setTimeout(function() {
      timing(startDate, endDate, endhalfDate, enddoubleDate);
    }, 250);
  }

  function endSet(l, time) {
    var endDate = moment(time).add(l, 'minutes');
    var endhalfDate = moment(time).add(l * 1.5, 'm');
    var enddoubleDate = moment(time).add(l * 2, 'm');
    return {
      endTime: endDate,
      endhalfTime: endhalfDate,
      enddoubleTime: enddoubleDate
    }
  }

</script>

<style>
  div {
    width: 'auto';
    height: 'auto';
  }

  @media screen and (min-width:300px) {
    span {
      display: inline-block;
      font-size: 20px;
      line-height: 22px;
    }
  }

  .dhide {
    display: none;
}
</style>


<body><div class="card" style="width: 180rem;">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="nav-side-menu">
    <div class="brand">Online Exam</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
         
            <ul id="menu-content" class="menu-content collapse out">
               

                
                <!--li class="collapsed ">
                  <a href=""><i class="fa fa-gift fa-lg"></i>Monitor Started Exams</a>
                </li-->

                <li class="active ">
                  <a ><i class="fa fa-gift fa-lg"></i>Exam</a>
                </li>

                



                 
               
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
                
              </button></span></div>
  </div>
 <div id="page-wrapper">
    
 </br>

 <h1 ><b>{{$Xtt}}</b></h1></br>

 <button id="toggle1">Hide</button>
<div id="settings">
@foreach($Zt as $z)
  <label for="length"></label>
  <input type="hidden" id="length" name="length" value="{{ $z->duration }}">
  <input type="hidden" id="l">
  @endforeach
  <label for="customtime"></label>
  <input type="hidden"  name="customtime" value="{{ $z->starting_time }}" id="customtime">
  
  <label for="seconds">Include Seconds</label>
  <input type="checkbox" id="seconds">
  <button onclick="timeNow(document.getElementById('length').value)" class="action">Start</button></div>
<br/>
<div class="dhide">
  <span id="currenttimelabel" type="hidden">Current Time:     </span>
  <span id="currenttime"></span><br/>
  <span id="timestartlabel">Start Time:     </span>
  <span id="timestart"></span><br/>
</div>
<h4 class="text-center">

<div id="regulartime" >
  <span id="timeendlabel">End Time:     </span>
  <span id="timeend"></span><br/>
  <span id="minsleftlabel">Time Left:     </span>
  <span id="minsleft"></span>
</div>
</h4>

<div class="dhide" id="timehalf" type="hidden" style="border: 2px solid; padding: 10px;">
  <span id="timehalflabel" type="hidden">1.5x End Time:     </span>
  <span id="timehalfend"></span><br/>
  <span id="minshalfleftlabel">1.5x Minutes Left:     </span>
  <span id="minshalfleft"></span>
</div>

<div class="dhide" id="timedouble" style="border: 2px solid; padding: 10px;">
  <span id="timedoublelabel">2x End Time:     </span>
  <span id="timedoubleend"></span><br/>
  <span id="minsdoubleleftlabel">2x Minutes Left:     </span>
  <span id="minsdoubleleft"></span><br/>
</div>
  
 
</br>

<div style="height: 550px; background-color:LightGray; margin-left:14% ; margin-right:14% ; border: 2px solid; padding: 10px;" >
</br><form id="regForm"  method="POST" action="/answeringed" >
@csrf
<?php $qcount=count($Xt) ?>
<input id="qcount" class="form-control"  type="hidden" name="qcount" placeholder="ExamId" required="required" value="{{$qcount}}">
<input id="qs" class="form-control"  type="hidden" name="qs" placeholder="ExamId" required="required" value="{{$Xt}}">
<?php $n1=1; ?>
@foreach($Xt as $x)
<!-- One "tab" for each step in the form: -->
<input id="examid" class="form-control"  type="hidden" name="examid" placeholder="ExamId" required="required" value="{{$Xtt}}">
<input id="canswer" class="form-control"  type="hidden" name="canswer" placeholder="c" required="required" value="{{$x->correct_answer}}">
<input id="question" class="form-control"  type="hidden" name="question" placeholder="que" required="required" value="{{$x->question}}">
<div class="tab"><h1><b>{{$x->qid}}.{{$x->question}}</b></h1>
<div style="height: 130px; margin-left:1% ; margin-right:1% ; border: 2px solid; padding: 10px;" >
  <p><div class="form-check">
  <input  type="radio" class="form-check-input" id="{{$x->qid}}a1" name="{{$x->qid}}" value="{{$x->answer1}}" checked>a) {{$x->answer1}}
  <label class="form-check-label" for="radio1"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="{{$x->qid}}a2" name="{{$x->qid}}" value="{{$x->answer2}}">b) {{$x->answer2}}
  <label class="form-check-label" for="radio2"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="{{$x->qid}}a3" name="{{$x->qid}}" value="{{$x->answer3}}">c) {{$x->answer3}}
  <label class="form-check-label" for="radio2"></label>
</div><div class="form-check">
  <input type="radio" class="form-check-input" id="{{$x->qid}}a4" name="{{$x->qid}}" value="{{$x->answer4}}">d) {{$x->answer4}}
  <label class="form-check-label" for="radio2"></label>
</div></p>
</div>
</div>
<?php $n1++; ?>
@endforeach
</br>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" class="btn btn-warning " id="prevBtn" onclick="nextPrev(-1)">Previous</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button" class="btn btn-secondary " id="" >Question</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button" class="btn btn-success " id="nextBtn" onclick="nextPrev(1)">Next</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>
</div>


<script>var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}</script>
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

        </div>
</body>
</html>
