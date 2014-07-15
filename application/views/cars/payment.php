<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
            <?php
					$attributes = array("class"=>"form");
					echo form_open_multipart('cars/pesapal', $attributes);
					
				?>
				<div class="breadcrumbs">
					<a href="<?php echo $this->config->base_url();?>">Home</a>
					<img src="<?php echo $this->config->base_url();?>images/marker_2.gif" alt="" />
					<span>Payment</span>
				</div>
				<div class="main_wrapper">
					
					<h1><strong>Enter</strong> Payment Details</h1>
					
                    <!--<form action="carspesapal-iframe.php" class="form" method="post">-->
                        <table>
                            <tr>
                                <td>Amount:</td>
                                <td><input type="text" class="txb" name="amount" value="1000" />
                                (in Kshs)
                                </td>
                            </tr>
                            <tr>
                                <td>Type:</td>
                                <td><input type="text" name="type" class="txb" value="MERCHANT" readonly="readonly" />
                                (leave as default - MERCHANT)
                                </td>
                            </tr>
                            <tr>
                                <td>Description:</td>
                                <td><input type="text"  class="txb" name="description" value="Order Description" /></td>
                            </tr>
                            <tr>
                                <td>Reference:</td>
                                <td><input type="text" class="txb" name="reference" readonly="readonly" value="<?php echo $order; ?>" />
                                (the Order ID )
                                </td>
                            </tr>
                            <tr>
                                <td>Shopper's First Name:</td>
                                <td><input type="text" name="first_name" class="txb" value="<?php echo $user->name; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Shopper's Last Name:</td>
                                <td><input type="text" name="last_name" class="txb" value="" /></td>
                            </tr>
                            <tr>
                                <td>Shopper's Email Address:</td>
                                <td><div class="input_wrapper"><input type="text" name="email" class="txb"  value="<?php echo $user->email; ?>" /></div></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="Make Payment" /></td>
                            </tr>
                        </table>
                   <!-- </form>-->
                     
					
                    
				</div>
                
                <!--end form-->
                </form>
			</div>
            
		</div>
	<!--EOF CONTENT-->