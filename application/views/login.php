<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('/'); ?>public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('/'); ?>public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('/'); ?>public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('/'); ?>public/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('/'); ?>public/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php 
              if($this->session->flashdata('login_error'))
              {
            ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $this->session->flashdata('login_error'); ?>
            </div>
            <?php
              }

                $attributes = array('class' => 'email', 'id' => 'myform');
                echo form_open('jc/authentication', $attributes);

            ?>  
              <h1>Login Form</h1>
              <div>
                <?php

                  $data = array(
                          'name'          => 'username',
                          'id'            => 'username',
                          'placeholder'   => 'Username',
                          'maxlength'     => '100',
                          'class'         => 'form-control'
                  );

                  echo form_input($data);
                ?>
              </div>
              <div>
                <?php

                  $data = array(
                          'name'          => 'password',
                          'id'            => 'password',
                          'placeholder'   => 'Password',
                          'maxlength'     => '100',
                          'class'         => 'form-control'
                  );

                  echo form_password($data);
                ?>
              </div>
              <div>
                <?php 

                    $data=array(
                        'name'=>'submit',
                        'value'=>'Log In',
                        'class'=>'btn btn-default submit'

                    );
                    echo form_submit($data);
 ?>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
               <?php

                $attributes = array('class' => 'register', 'id' => 'reg-form');
                echo form_open('jc/register', $attributes);

            ?>  
              <h1>Create Account</h1>
              <div>
                
              <!-- <input type="text" class="form-control" placeholder="Username" required="" /> -->

               <?php

                $data1= 
                array(
                          'type'          =>'text',
                          'name'          => 'email',
                          'id'            => 'email',
                          'placeholder'   => 'Enter your email',
                          'maxlength'     => '100',
                          'class'         => 'form-control'
                );
                echo form_input($data1);

               ?>
              </div>

              <div>
                <!-- <input type="email" class="form-control" placeholder="Email" required="" /> -->
                <?php
                $data1=
                array(
                      'type'=>'text',
                      'name'=>'username',
                      'id'=>'username',
                      'placeholder'=>'Enter your username',
                      'maxlength'=>'100',
                      'class'=>'form-control'
                );
                echo form_input($data1);
                ?>
              </div>
              <div>
                <!-- <input type="password" class="form-control" placeholder="Password" required="" /> -->
                <?php
                $data1=

                array(
                     'type'=>'password',
                     'name'=>'password',
                     'id'=>'password',
                     'placeholder'=>'Enter your password',
                     'maxlength'=>'100',
                     'class'=>'form-control'
                );
                echo form_password($data1);
                ?>
              </div>
              <div>
                <!-- <a class="btn btn-default submit" href="Success.php">Submit</a> -->
                <?php

                $data1=array(

                'name' =>'submit',
                'value'=>'SUBMIT TO REGISTER',
                'class'=>'btn btn-default',
                
                );
                 echo  form_submit($data1);

                ?>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
