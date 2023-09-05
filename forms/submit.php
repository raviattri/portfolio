<?php


if(isset($_POST['submit']))
{
    

 $date=$_POST['date'];
 $number=$_POST['number'];
 $name=$_POST['name'];
 $phone=$_POST['mobile'];
 $email=$_POST['email'];
 $msg=$_POST['desc'];


 
 $to = "ul@webseekers.in,annexetourandtravels@gmail.com,sales@requisitetech.com";
    $subject = "Tour Package Enquiry Details";

    $message = "
    <html>
    <head>
    <title>Inquriy Details</title>
    </head>
    <body>
    <table width='100%' cellspacing='10' cellpadding='10' border='4'>
                              
              <tbody>
              
              <tr>
                <td>Date</td>
                <td>$date</td>
              </tr>

              <tr>
                <td>Number</td>
                <td>$number</td>
              </tr>

              <tr>
                <td>Name</td>
                <td>$name</td>
              </tr>

              <tr>
              <td>Mobile</td>
              <td>$phone</td>
             </tr> 

               <tr>
                <td>Email</td>
                <td>$email</td>
              </tr>
             
              <tr>
                <td>Description</td>
                <td>$msg</td>
              </tr> 
           
                
             
    
    </body>
    </html>
    ";


   
                
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // More headers
                $headers .= 'From: <annexetourandtravels@gmail.com>' . "\r\n";
             //   $headers .= 'Cc: myboss@example.com' . "\r\n";
                
                mail($to,$subject,$message,$headers);
                
                header('Location:thanku.php');
	            		}
	            		else{
            			echo '<script type="text/javascript">'; 
                        echo 'alert(" Form Not Submitted, Please contact to support team.");'; 
                        echo 'window.location.href = "contact.php";';
                        echo '</script>';
            		}
            		
            		
if(isset($_POST['submit1']))
{
    

  $date=$_POST['date'];
  $number=$_POST['number'];
  $name=$_POST['name'];
  $phone=$_POST['mobile'];
  $email=$_POST['email'];
  $msg=$_POST['desc'];


 
 $to = "ul@webseekers.in,annexetourandtravels@gmail.com,sales@requisitetech.com";
    $subject = "Tour Package Get in Touch Details";

    $message = "
    <html>
    <head>
    <title>Get in Touch Details</title>
    </head>
    <body>
    <table width='100%' cellspacing='10' cellpadding='10' border='4'>
                              
              <tbody>
              
              <tr>
                <td>Date</td>
                <td>$date</td>
              </tr>

              <tr>
                <td>Number</td>
                <td>$number</td>
              </tr>

              <tr>
                <td>Name</td>
                <td>$name</td>
              </tr>

              <tr>
              <td>Mobile</td>
              <td>$phone</td>
             </tr> 

               <tr>
                <td>Email</td>
                <td>$email</td>
              </tr>
             
              <tr>
                <td>Description</td>
                <td>$msg</td>
              </tr> 
               
                
             
    
    </body>
    </html>
    ";


   
                
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // More headers
                $headers .= 'From: <annexetourandtravels@gmail.com>' . "\r\n";
             //   $headers .= 'Cc: myboss@example.com' . "\r\n";
                
                mail($to,$subject,$message,$headers);
                
                header('Location:thanku.php');
	            		}
	            		else{
            			echo '<script type="text/javascript">'; 
                        echo 'alert(" Form Not Submitted, Please contact to support team.");'; 
                        echo 'window.location.href = "contact.php";';
                        echo '</script>';
            		}
   
            		
   
if(isset($_POST['submit2']))
{
    

 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['mobile'];
$msg=$_POST['desc'];


 
 $to = "ul@webseekers.in,annexetourandtravels@gmail.com,sales@requisitetech.com";
    $subject = "Tour Package Contact Details";

    $message = "
    <html>
    <head>
    <title>Contact Details</title>
    </head>
    <body>
    <table width='100%' cellspacing='10' cellpadding='10' border='4'>
                              
              <tbody><tr>
                <td>Name</td>
                <td>$name</td>
              </tr>
               <tr>
                <td>Email</td>
                <td>$email</td>
              </tr>
              <tr>
                <td>Mobile</td>
                <td>$phone</td>
              </tr> 
              <tr>
                <td>Description</td>
                <td>$msg</td>
              </tr> 
               
                
             
    
    </body>
    </html>
    ";


   
                
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // More headers
                $headers .= 'From: <annexetourandtravels@gmail.com>' . "\r\n";
             //   $headers .= 'Cc: myboss@example.com' . "\r\n";
                
                mail($to,$subject,$message,$headers);
                
                header('Location:thanku.php');
	            		}
	            		else{
            			echo '<script type="text/javascript">'; 
                        echo 'alert(" Form Not Submitted, Please contact to support team.");'; 
                        echo 'window.location.href = "contact.php";';
                        echo '</script>';
            		}
