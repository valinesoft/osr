<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="{{asset('assets/fontawesome/css/all.css')}}" rel="stylesheet"> 
</head>
<style>
body {
  overflow: hidden; /* Hide scrollbars */
}
  .impact {
    font-family: Impact, Charcoal, sans-serif;
  }
  .sansserif {
  font-family: Arial, Helvetica, sans-serif;
}
.bottomDiv{
       position:relative;
       bottom:220px;
       left:45px;
    }
.cropimg {
  position: absolute;
  clip: rect(0px, 250px, 170px, 0px);
  transform: rotate(-10deg);
  border-radius: 10px
}

</style>
<body class="sansserif">

<div class="container-fluid" >

   <div class="row" >
      <div class="col-sm-6 col-xs-1 text-left" style="padding: 18px">
         <i class="fas fa-arrow-left" ></i>
      </div> 
      <div class="col-sm-6 col-xs-10 text-center" >
          <img src="{{asset('assets/images/Paytm-Payments-Bank.png')}}" width="180" height="60">
      </div> 
    <div class="clear"></div>
  </div>
<!-- style="background-color:#6fc179; -->
  <div class="row" >
      <div class="col-sm-6 col-xs-12 text-center"   style="background-color:#67cc73;padding-top:5px">
         <p style="color: white">Money Transfer Successful &nbsp;&nbsp; <i class="fa fa-check-circle"></i></p> 
      </div> 
    <div class="clear"></div>
  </div>


  <div class="row" >
      <div class="col-sm-6 col-xs-8"  style="padding-top:20px">
        <div>
          <p>
             <b>To: Sanjay Prakash</b><br/>
             Rupee
          <p/>
        </div>
        
    </div> 
    <div class="col-sm-6 col-xs-4 text-center" style="padding-top:25px">
           <h5><i class="fa fa-rupee-sign"></i><b> {{$amount}}</b></h5>
    </div>
    <div class="clear"></div>
  </div>

  <div class="row" >
      <div class="col-sm-6 col-xs-8" style="padding-top:15px" >
          <p> <span style="font-weight:600"> {{ $bank['name'] }} </span> <br/> 
          <!--STATE BANK OF INDIA A/c No. XXXXXXXX1232</p> 
          <!-- AXIS BANK A/c No. XXXXXXXX1232</p>-->
           A/c No. XXXXXXXX{{ rand(1111,9999) }}</p>
         <!--  UNION BANK A/c No. XXXXXXXX1232</p>-->
         <!--  Yes BANK A/c No. XXXXXXXX1232</p>-->
         <p>IFSC: ICIC{{ rand(1111,9999) }}</p>
    </div> 
    <div class="col-sm-6 col-xs-4 text-right" style="margin-top:-90px; margin-left:240px" >
         <!-- <img src="images/sbi.webp" width="30" height="30">-->
        
         <!-- <img src="{{asset('assets/images/axisbank.png')}}" width="50" height="50">-->
          
          <img src="{{asset($bank['logo_name'])}}" width="50" height="50">
          <!--<img src="{{asset('assets/images/unionbank.png')}}" width="30" height="30">
          <img src="{{asset('assets/images/yesbank.png')}}" width="30" height="30">
        -->
    </div>
    <div class="clear"></div>
  </div>
 
  

  <div class="row" style="margin-top:-250px;">

      <div class="col-sm-6 col-xs-12" >
          <p>Reference No : {{$ref_number}} <br/>
          {{$date}}</p>
    </div> 
    <div class="clear"></div>
  </div>
   <div class="row">
      <div class="bottomDiv">
          <img src="{{asset('assets/logo/picslogo1.jpeg')}}" width="250" height="230" class="cropimg">
        </div>
  </div>

  <div class="row" style="margin-top:10px;">
        <div class="col-sm-6 col-xs-12" >
            <input type="button" name="" value="Repeat Payment" class="btn btn-default" style="color:#61b6b6;">
            <input type="button" name="" value="Share" class="btn btn-default" style="color:#61b6b6">
      </div> 
      <div class="clear"></div>
  </div>



  
</div>
    
</body>
</html>
