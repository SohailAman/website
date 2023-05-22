require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "epunkgo2@gmail.com";
$mail->Password = "amitkumar";
$mail->SetFrom("epunkgo3@gmail.com");
$mail->Subject = "Test";
$mail->Body = '<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .left {
            float: left;
            width: 30%;
            padding-left: 40px;
            height: 100px;
        }
        
        .right {
            float: right;
            width: 60%;
            text-align: right;
            height: 100px;
            vertical-align: middle;
        }
        
        .head {
            background-color: #C6DAFF;
            height: 500px;
            position: relative;
        }
        
        .right p {
            padding-right: 40px;
            margin-top: 20px;
        }
        
        .heading {
            position: absolute;
            top: 30%;
            left: 14%;
        }
        
        .heading h1 {
            font-size: 60px;
        }
       .img {
    position: absolute;
    top: 29%;
    right: 0%;
}
       .img img {
    height: 240px;
    width: 61%;   
}

        .Total{ width: 100%; 
            float: left; 
            border-bottom: 2px green solid;
              }
        .bg{ background-color: #F8F8FA; 
padding: 30px; height: 300px;

        }   

        a.bt {
    background-color: #276EF1;
    padding: 15px 30px 15px 30px;
    margin-top: 22px;
    float: left;
    color: white;
}   

a.bt-5 {
    background-color: black;
    color: white;
    padding: 10px 15px 10px 15px;
    border-radius: 15px;
}
 
.content {
    margin-top: 35px;
}

img.wes {
    margin-top: 50px;
    margin-left: 100px;
}

.bg-2{ background-color: #276EF1;
 height: 100px; 
}
.bg-2 ul{ 
list-style: none;
 color: white; 
 margin-top: 50px;

 }

 .bg-2 ul li{ 
float: left; 
padding-left: 30px; 
padding-right: 30px;
}

    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
        <div class="head">

            <div class="left"> 
                <h1>Uber</h1>
            </div>
            <div class="right">
                <p>Total :99.01
                    <br>web.dec 26 ,2018</p>
            </div>
            <div class="heading">
                <h1>Thanks For Riding <br><span>Tenver</span></h1>
                <h2>We Hope You Enjoyed your ride<br>This Afternoon</h2>
            </div>
            <div class="img">
                <img src="img/ubersuv-icon.png" width="">

            </div>

        </div>
    </div>

    </div>


    <div class="container">
<div class="Total">
    <div class="left"> 
                <h1>Total</h1>
            </div>
            <div class="right">
                <h1>99.01</h1>
             
            </div>
    

</div>
<div class="Total">
    <div class="left" style="margin-top: 20px"> 
                <h4>Trip Free </h4>
            </div>
            <div class="right" style="margin-top: 20px">
                <h4>99.01</h4>
             
            </div>
    

</div>

<div class="Total">
    <div class="left" style="margin-top: 20px" > 
                <h4>SubTotal</h4>
            </div>
            <div class="right" style="margin-top: 20px">
                <h4>99.01</h4> 
             
            </div>
    

</div>
<div class="Total">
    <div class="left" style="margin-top: 20px"> 
                <h4>BeforeTexes</h4>
                 <h4>GST(5%)</h4>

            </div>
            <div class="right" style="margin-top: 20px">
                <h4>99.01</h4>
                 <h4>99.03</h4> 
             
            </div>


    
    

</div>  

<div class="col-md-9">
    <img src="img/paytm-.png" height="50px" width="50px">
      &nbsp;  <span>Paytm/<a href="" style=" color: blue;">Switch</a></span>
      <p><a href="">Vist the Trip Page</a>  For More Information including invoice(where avalible) </p>
      <h3><a href="">Downlod PDF</a></h3>
      <p>Downlod expies 1/25/12</p>
    

</div>
<div class="col-md-3" style="text-align: right;">
    <div class="row">
    <h4>99.01</h4>
    
</div>
</div>
</div>

<div class="col-md-12 bg">
    <div class="container">
        <div class="row">
   
        <div class="col-md-4">
            <img src="img/1.jpg" width="100px" width="100px" style=" border-radius: 50%;">
            &nbsp;     &nbsp;    &nbsp; 
 


    <img src="img/1.jpg" width="100px" width="100px" style=" border-radius: 50%;" class=""> 
        </div>

         <div class="col-md-4">
            <div style="margin-top: 20PX;">
            <center>




         <p style="">484<span> &nbsp;<i class="fas fa-star"></i></span> Rating</p>
          <hr style="width: 26%; border:2px green solid;">
           <p style="">Top Driver Compliment</p> 
           </center>



</div>

        </div>
        

         <div class="col-md-4">
            <center>
            <h3 style="float: right;">HOW WAS your RIDE ?</h3>

            <a href="" class="bt" style="float: right; margin-right: 116px">RATE NOW</a>

</center>
        </div>
        
        <div class="col-md-12">
            <div class="" style="margin-top: 30px;">

           <p>Issued on behaif of rajat kumar</p>
           <p>License plate PB01B3358</p> 
           </div>
            

        </div>

</div>
</div>

    </div>
<div class="col-md-12">
    <div class="container">


    <div class="row">
        <div class="container">
            <div class="" style=" margin-top: 30px;">

<a href="" class="bt-5">UberGo</a> &nbsp; &nbsp; &nbsp; &nbsp; <span>6.23km /16m</span>
</div>
        
    </div>
    
</div>


<div class="col-md-4">
    <div class="row">

<div class="content">
   <p> C-175, Industrial Area, Sector 62,<br>

 Sahibzada Ajit Singh Nagar, Punjab 160055<br>
PM6V+8P Sahibzada Ajit Singh Nagar, Punjab<br>
iappomninos.com<br>
081469 07164 </p>

</div>



  
</div>

</div>

<div class="col-md-8">
    <div class="row">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109740.86108784034!2d76.69348820329914!3d30.735210199731238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1548926231606" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>



    </div>


</div>

</div>

</div>

<div class="container">
    <div class="col-md-12 bg" style="margin-top: 30px;">
         
         <div class="row">


            <div class="col-md-4">
                <div class="row">
                    <img src="img/th.jpg" width="100px" width="100px" class="wes">  


</div>
                


            </div>

            <div class="col-md-8">
                    <div class="row">
                        <div class="" style="margin-top: 50px;">
                        <p> Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    
</div>

                      </div>
                


          </div>



             


         </div>

        






    </div>


    <div class="col-md-12 bg-2">


        <div class="row">
            <ul>
                <li>REPORT LOST ITEM > </li>
                <li>CONTACT SUPPORT ></li>



            </ul>


            


        </div>
        


    </div>
    





</div>
        


  

</body>

</html>';
$mail->AddAddress("epunkgo3@gmail.com");
$mail->addStringAttachment($fileatt, 'myfile.pdf');

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
 
