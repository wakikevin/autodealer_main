<body class='login'>
    <div class="wrapper">
            <h1><a href="#"><img src="<?php echo  $this->config->base_url(); ?>img/logo-big.png" alt="" class='retina-ready' width="59" height="49">ADMIN</a></h1>
            
            <div class="login-body">
            
            <!--Error messages-->
            <?php
			
				//error message
				$error_msg = $this->session->flashdata('error');
				
				//print_r($this->session->all_userdata());
				
				if($error_msg):
			?>
                    <div class="alert alert-error">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Warning!</strong> Best check yo self, you're not looking too good.
                    </div>
            <?php
			
				endif;
				
			?>
            
                <h2>SIGN IN</h2>
               <!-- <form action="login" method='get' class='form-validate' id="test">-->
                <?php
					$attributes = array("class"=>"form-validate");
					echo form_open('users/login', $attributes);
				?>
                    <div class="control-group">
                        <div class="email controls">
                            <input type="text" name='username' value="<?php echo set_value('username', 'admin'); ?>" required placeholder="Email address" class='input-block-level' data-rule-required="true" data-rule-email="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="pw controls">
                            <input type="password" name="password" value="<?php echo set_value('password', 'admin'); ?>" required placeholder="Password" class='input-block-level' data-rule-required="true">
                        </div>
                    </div>
                    <div class="submit">
                        <div class="remember">
                            <input type="checkbox" name="remember" value="1"  <?php echo set_checkbox('remember', '1'); ?> class='icheck-me' data-skin="square" data-color="blue" id="remember"> <label for="remember">Remember me</label>
                        </div>
                        <input type="submit" value="Sign me in" class='btn btn-primary'>
                    </div>
                </form>
                <div class="forget">
                    <a href="#"><span></span></a>
                </div>
            </div>
        </div>