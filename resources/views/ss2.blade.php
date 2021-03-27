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
  .impact {
    font-family: Impact, Charcoal, sans-serif;
  }
  .sansserif {
  font-family: Arial, Helvetica, sans-serif;
}
.bottomDiv{
       position:relative;
       bottom:120px;
       left:50px;
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

  <div class="row" >
      <div class="col-sm-6 col-xs-12 text-center" style="background-color:#6fc179; padding-top:5px">
         <p style="color: white">Money Transfer Successful &nbsp;&nbsp; <i class="fa fa-check-circle"></i></p> 
      </div> 
    <div class="clear"></div>
  </div>

  <!--
  <div class="row" style="background-color:#f3f7f8;" >
      <div class="col-sm-6 col-xs-8" style="">
            <h3><b>Money Sent</b></h3>
            <h2><i class="fa fa-rupee-sign"></i><b> 2,000</b></h2>
          <p>22 Nov 2020, 22:09 pm</p>
    </div> 
    <div class="col-sm-6 col-xs-4 text-right" style="padding-top:35px">
          <i class="fas fa-check-circle fa-3x" style="color:#6fc179"></i>
    </div>
    <div class="clear"></div>
  </div>
-->

  <div class="row" >
      <div class="col-sm-6 col-xs-8"  style="padding-top:20px">
        <div>
          <p>
             <b>To: Sanjay Prakash</b><br/>
          <!--STATE BANK OF INDIA A/c No. XXXXXXXX1232</p> 
          <!-- AXIS BANK A/c No. XXXXXXXX1232</p>-->
           ICICI BANK <br/> A/c No. XXXXXXXX1232</p>
         <!--  UNION BANK A/c No. XXXXXXXX1232</p>-->
         <!--  Yes BANK A/c No. XXXXXXXX1232</p>-->
        </div>
        <div class="bottomDiv">
          <img src="{{asset('assets/logo/logo1.png')}}" width="120" height="120">
        </div>
    </div> 
    <div class="col-sm-6 col-xs-4 text-right" style="padding-top:30px">
           <!-- <img src="images/sbi.webp" width="30" height="30">-->
        
         <!-- <img src="{{asset('assets/images/axisbank.png')}}" width="50" height="50">-->
          
          <img src="{{asset('assets/images/icici.png')}}" width="40" height="40">
          <!--<img src="{{asset('assets/images/unionbank.png')}}" width="30" height="30">
          <img src="{{asset('assets/images/yesbank.png')}}" width="30" height="30">
        -->
    </div>
    <div class="clear"></div>
  </div>

  <div class="row" >
      <div class="col-sm-6 col-xs-8"  style="margin-top:-100px">
          <p>
            From <br/>
            <b>Paytm Payments Bank</b><br/>
          A/c No. 917587407391</p>
    </div> 
    <div class="col-sm-6 col-xs-4 text-right" style="margin-top:-100px;margin-left:230px" >
          <img src="{{asset('assets/images/Paytm-Payments-Bank.png')}}" width="120" height="60">
    </div>
    <div class="clear"></div>
  </div>

  <div class="row" >
      <div class="col-sm-6 col-xs-12"  style="padding-top:0px">
          <p>IMPS Reference No : 34223107043</p>
          <p>22 Nov 2020, 22:09 pm</p>
    </div> 
    <div class="clear"></div>
  </div>

  <div class="row" >
      <div class="col-sm-6 col-xs-12 text-center"  style="padding-top:0px">
           <img src="{{asset('assets/logo/logo.png')}}" width="250" height="250">
    </div> 
    <div class="clear"></div>
  </div>



  
</div>
    
</body>
</html>
s