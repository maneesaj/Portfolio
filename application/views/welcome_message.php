<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" >
	<title>Emmie's Portfolio</title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/portfoliostyle.css'); ?>" />
  <?php  $this->load->helper('form'); ?>
</head>
<body>
    
  <div id="wrapper">

      <header>
          <img alt="logo" class="logo" src="<?php echo base_url('assets/img/logo.png');?>" />
        <div id="menu">
              <ul id="header_menu">
              <li><a onclick="hidetext()" href="#">ABOUT ME</a></li>
              <li><a href="#">WORK</a></li>
              <li><a href="#">CONTACT ME</a></li>
              </ul>
         </div>
      </header>

        <div id="content_aboutme">
            <h4><span class="ordinarytext">Hello There!</span>
                </h4><h4 class="text">I'm a Graduate Web Developer based in London.</h4>

            <h3><span class="ordinarytext2">About Me</span></h3>
            <h4 class="text">Two years ago I was siting at a till scanning 
    items for 8 hours and I felt miserable and defeated because I knew it 
    wasn't what I wanted to do.I've always been a computer/ gaming geek and my 
    passion was always there. One day I decided that I wanted to return to 
    education and finally got my degree. It was the best decision I have ever
     made. I love coding and creating projects.</h4>

            <h4><span class="ordinarytext2">Langauges &amp; software I'm familiar with:</span></h4>
            <ul class="text">
            <li>HTML</li>
            <li>CSS</li>
            <li>JS/jQUERY</li>
            <li>PHP</li>
            <li>SQL</li>
            <li>JAVA</li>
            <li>PYTHON</li>
            <li>UNITY</li>
            <li>PHOTOSHOP</li>
            </ul>

            <h3><span class="ordinarytext2">My Work</span></h3>
            <h4 class="text">Have a look at some things I'm working on...</h4>
            
            <div id="box"></div>
            <div id="box"></div>
            <div id="box"></div>

            <div class="contact"><span class="contacttxt">CONTACT ME</span><img class="emailstyle" src="<?php echo base_url('assets/img/Untitled-1.png');?>"/> 
            </div>
            
            <h4 class="text">Want to contact me? Feel free!</h4>
            
            <?php if(isset($errormessage))echo $errormessage ?>
           
            <?php echo form_open('');?>
            
            <ul class="text">
             <? $firstname = array(
              'name'        => 'fname',
              'id'          => 'fname',
              'class'       => 'formstyle',
              'maxlength'   => '100',
              'placeholder' => 'Firstname',
             
            );?>
           <li><?php echo form_input($firstname);?></li>
            
            <? $lastname = array(
              'name'        => 'lname',
              'id'          => 'lname',
              'class'       => 'formstyle',
              'maxlength'   => '100',
              'placeholder' => 'Lastname',
             
            );?>
            <li><?php echo form_input($lastname);?></li>
                
                <? $mail = array(
              'name'        => 'email',
              'id'          => 'email',
              'class'       => 'formstyle',
              'maxlength'   => '100',
              'placeholder' => 'Email',
             
            );?>
            <li><?php echo form_input($mail);?></li>
                
                <? $phone = array(
              'name'        => 'phone',
              'id'          => 'phone',
              'class'       => 'formstyle',
              'maxlength'   => '100',
              'placeholder' => 'Phone number',
             
            );?>
                
            <li><?php echo form_input($phone);?></li>

                
                 <? $website = array(
              'name'        => 'website',
              'id'          => 'website',
              'class'       => 'formstyle',
              'maxlength'   => '100',
              'placeholder' => 'Website',
             
            );?>
                
            <li><?php echo form_input($website); ?></li>
                
                <? $message = array(
              'name'        => 'message',
              'id'          => 'message',
              'class'       => 'messagestyle',
              'maxlength'   => '100',
              'placeholder' => 'Message',
             
            );?>
                
            <li><?php echo form_textarea($message)?></li>
              <?php  $submit = array(
              'class'        => 'send',
              'id'          => 'submit',
                'value' =>'SEND',
            );?>
            <li><?php echo form_submit($submit)?></li>
            <?php echo form_close(); ?>
            </ul>
        </div>
      </div>
    <footer>
    <h2>Created by Maneesa in 2015♥</h2>
    </footer>
</body>
  <?php  $this->load->library('javascript'); ?>
</html>