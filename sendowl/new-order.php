
<!-- ///////////////////////// Product IDs ///////////////////////// -->

Feedback For Coffee ☕️
https://www.sendowl.com/products/597112/edit

Clutterless Pro
https://www.sendowl.com/products/568245/edit

eBook: 10 Landing Page Design Tips 
https://www.sendowl.com/products/512413/edit

One Page Love Submission
https://www.sendowl.com/products/490059/edit

One Page Love Template submission
https://www.sendowl.com/products/507826/edit

Private Video Feedback
https://www.sendowl.com/products/490123/edit

<!-- ///////////////////////// Subject Old ///////////////////////// -->

Info for Order #{{ order.id }} with One Page Love

<!-- ///////////////////////// Subject New ///////////////////////// -->

{% for cart_item in order.cart.cart_items %}Thanks for your {{ cart_item.product.name }} order{% endfor %}!

<!-- ///////////////////////// If Then Statements  ///////////////////////// -->

{% assign product_ids = order.cart.cart_items | map: 'product' | map: 'id' %} 
{% if product_ids contains 597112 %} 

Hi order_custom_checkout_fields.
Thanks for the coffee! ☕️
{% endif %} 
{% if product_ids contains 568245 %} 
Thanks for you purchase of Clutterless Pro!
{% endif %}
{% if product_ids contains 512413 %} 
Thanks for purchasing the eBook: 10 Landing Page Design Tips 📖
{% endif %}
{% if product_ids contains 490059 %} 
Thanks for your One Page website submission
{% endif %}
{% if product_ids contains 507826 %} 
Thanks for your One Page template submission
{% endif %}
{% if product_ids contains 490123 %} 
Thanks for your order of a Private Video Feedback 🎞
{% endif %}


<!-- ///////////////////////// Body ///////////////////////// -->


{{order_custom_checkout_fields.your_first_name}}


<!-- ///////////////////////// Reference to Product ID calls ///////////////////////// -->

{% assign product_ids = order.cart.cart_items | map: 'product' | map: 'id' %} 
{% if product_ids contains 1234 %} 
Message for product 1234 
{% endif %} 
{% if product_ids contains 4321 %} 
Message for product 4321
{% endif %}



<!-- ///////////////////////// New HTML Email Reference ///////////////////////// -->


<p>Hey {% for custom_checkout_fields in order.order_custom_checkout_fields %}

	{% if custom_checkout_fields.name contains 'Your First Name' %}

		{{ custom_checkout_fields.value }} 

	{% endif %}

{% endfor %}</p> 


	<!-- Kick off the product type loop -->
	{% assign product_types = order.cart.cart_items | map: 'product' | map: 'member_types' | flatten %}

	<!-- Digital File -->
	{% if product_types contains 'digital' or product_types contains 'software' or product_types contains 'redirect' %}

	<p>Here is your download link:<br />
	{{ order.download_url }}<br />  
	({{ order.validity_statement }})</p>

		<!-- WordPress themes -->
		{% if product_types contains 'software' %} 

			{% for license in order.licenses %}
				<p>Here is your {{ license.product.name }} license key 🔑<br />
				{{ license.key }} (keep this for support)</p>
			{% endfor %}

		{% endif %}

	{% endif %}

	<!-- OPL Submissions, OPL Private Reviews -->
	{% if product_types contains 'service' %}
	    <p>The review takes approximately one week and I'll mail you once ready.</p>
	{% endif %}



<p>
Cheers,<br />
Rob
</p>
<p>
ps. your order ID is #{{ order.id }} and I've sent the receipt in another email.
</p>	

<!-- ///////////////////////// Old HTML Email Reference ///////////////////////// -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Info for Order #{{ order.id }} with One Page Love</title>
</head>

	<!-- ////////////// MAIN TABLE CONTAINER START ////////////  -->		
	<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="#E2E2E2" border="0" style="background-color: #E2E2E2; padding-top:10px;">



		<!-- ////////////// MAIN CONTENT TABLE START ////////////  -->		
		<table width="600" cellpadding="0" cellspacing="0" border="0" valign="top" align="center" style="width: 600px;">

			<!-- ////////////// CONTENT START ////////////  -->		
			<table width="600" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF" valign="top" align="center" style="
			background-color: #FFFFFF; 
			width: 600px; 
			padding-left: 49px;
			padding-right: 49px;
			padding-top: 20px;
			padding-bottom: 35px;
			max-width: 600px; 
			font-family: Helvetica, Arial, Sans-Serif; 
			font-size: 16px; 
			line-height: 25px; 
			color: #777777; 
			border-width: 1px; 
			border-style: solid; 
			border-color: #CCCCCC; 
			-moz-border-radius: 3px; 
			-webkit-border-radius: 3px; 
			border-radius: 3px;
			">
				
				<tr>
				<td style="width: 100%; padding-top: 5px; padding-bottom: 5px;">

					<div>

						<p>Hi{% if order.receiver_name %} {{ order.receiver_first_name }}{% endif %},</p>

						<p>
						Here are all the details you need regarding your order:
						</p>

						<div style="background-color: #F2F2F2; border-width: 1px; border-style: dashed; border-color: #DDD; padding: 20px;">

							<!-- Merch/Shop -->
							{% assign product_types = order.cart.cart_items | map: 'product' | map: 'member_types' | flatten %}

							{% if product_types contains 'tangible' %}
								You have ordered tangible goods. These will be posted shortly and you will be notified once they have been dispatched.<br /><br />
							{% endif %}

							<!-- Download link -->
							{% if product_types contains 'digital' or product_types contains 'software' or product_types contains 'redirect' %}

							Download Link:<br />
							{{ order.download_url }}<br />  
							({{ order.validity_statement }})<br /><br />

								<!-- FullSingle theme -->
								{% if product_types contains 'software' %} 

									{% for license in order.licenses %}
										Product Name:<br />
										{{ license.product.name }}<br />
										<br />
										License Key:<br />
										{{ license.key }}<br />
										(keep this for support)<br />
									{% endfor %}

								{% endif %}

							{% endif %}

							<!-- OPL Submissions, OPL Private Reviews -->
							{% if product_types contains 'service' %}
							    Order ID:<br /> 
							    {{ order.id }}<br />
							    <br />
								Product Name:<br />
								{% for cart_item in order.cart.cart_items %}{{ cart_item.product.name }}{% endfor %}<br />
								<br />
							    Review Estimate:<br /> 
							    1 week<br />
							    <br />
							    Reviewer:<br /> 
							    Rob Hope<br />
							{% endif %}

						</div>

						<p>
						I've sent the receipt in another email.
						</p>	

					</div><!-- End Intro Edit -->
					
					<!-- Signature -->
					<table width="300" cellpadding="0" cellspacing="0">
					  <tr>
					    <td width="60">
					      <a href="http://twitter.com/hitdelete"><img src="https://onepagelove.com/wp-content/uploads/2016/11/rob-hope.png" alt="Rob Hope" width="60" height="60"></a>
					    </td>
					    <td width="10">&nbsp;</td>
					    <td width="230">
					      Much Love,<br>Rob 
					    </td>
					  </tr>
					</table>

				</td>
				</tr>		
				
			</table>	
			<!-- ////////////// CONTENT END ////////////  -->		

			<!-- ////////////// SPACING BELOW WHITE TABLE //////////////  -->		
			<table width="100%" cellpadding="0" cellspacing="0" border="0" valign="top" align="center" style="width: 90%; max-width: 500px;"><tr><td height="20" style="display: block; margin-bottom: 20px; width: 100%; max-width: 600px; ">&nbsp;</td></tr></table>	
			

	</table>
	<!-- ////////////// MAIN TABLE CONTAINER END //////////////  -->		

</body>
</html>


