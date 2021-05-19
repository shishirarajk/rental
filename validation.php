
<?php /* Template Name: validation */ ?>
<?php 
                                if(isset($_POST['submit_button'])) 
                                { 
                                    $myname = $_REQUEST['myname'];
                                    $myemail = $_REQUEST['myemail'];
                                    $message = $_REQUEST['message'];
                                    $purpose = $_REQUEST['purpose'];

                               
                                  if(empty($myname) || empty($myemail) || empty($purpose) || empty($message) )
                                  {
                                      echo "<script type='text/javascript'>alert('no empty boxes');	                                          
                                      </script>";                                      
                                  }
                                  else{
                                  
                                      // $mail=$_REQUEST['E-Mail'];
                                      // $file=$_REQUEST[]
                                      // $to = "yourname@yourwebsite.com";
                                      // $body=  "body text";                    
                                                    
                                      // $to = 'shishirahere@gmail.com';
                                      // $subject = 'subject';
                                      // $message = 'text here';

                                      // wp_mail( $to, $subject, $message );       
                                      
                                      $to      = 'shishirahere@gmail.com';
                                      $subject = 'the subject';
                                      $message = 'hello';
                                  

                                      wp_mail($to, $subject, $message);
                                  
                               }  
                            }   
                               
  // exit;                             
                              


?>       
