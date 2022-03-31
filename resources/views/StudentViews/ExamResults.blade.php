<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head><style>.x {
    display:flex;
  float: center;
  width: 6%;
  padding: 0px;
  height: 30px; /* Should be removed. Only for demonstration */
}
.pos {
    position: relative;
    left: 20px;
}
body{margin-left: 10%;
  margin-right: 10%;}
</style>
<body ></br>
    <h2 >{{$ex}}</h2></br><div class="column" align="center"style="background-color:white;">
    <div class="card" style="width: 70rem;">
    <div class="input-group rounded"><form style="text-align: center;">
   <div  ><h4>Exam Completed</h4>

    
  <h1  class="text-center" style="color: green">PASSED</h1></br>
  
 <h3>{{$cd}} Points</h3>

</div></div></div></div>
</br>

@foreach($ab as $usera)

</div></h5>
</br>
</br><div class="column" align="center"style="background-color:white;">
    <div class="card" style="width: 70rem;">
    <div class="input-group rounded"><form style="text-align: center;">
   <div  ><h5>Questions</h5>
    
   <tbody>
<td><h3>{{$usera->qid}}&nbsp;&nbsp;&nbsp;
{{$usera->c_or_w}}</h3></td>

</tbody>

 @endforeach
</table>
</div></div></div>
</br>
</br>
<table>
<thead><th></th>
<th></th></thead>



</div></div></div></form>

<div class="col-md-12  text-right" type="pos" ><button class="btn btn-secondary"  ><a href="/profile">Close</a></button>
</body>
</html>