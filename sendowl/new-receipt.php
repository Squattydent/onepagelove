
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

<!-- ///////////////////////// If Subject ///////////////////////// -->

{% assign product_ids = order.cart.cart_items | map: 'product' | map: 'id' %} 
{% if product_ids contains 597112 %} 
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





Hi{% if order.receiver_name %} {{ order.receiver_first_name }}{% endif %},

Thanks for ordering from us. This email confirms your order of the following items:

{% for cart_item in order.cart.cart_items %}{{ cart_item.product.name }} x {{ cart_item.quantity }}
{% endfor %}

Your Order ID is {{ order.id }}{% if order.settled_gross %} and your payment has now cleared. A receipt has been emailed to you separately.{% endif %}

{% assign product_types = order.cart.cart_items | map: 'product' | map: 'member_types' | flatten %}{% if product_types contains 'tangible' %}
You have ordered tangible goods. These will be posted shortly and you will be notified once they have been dispatched.
{% endif %}

{% if product_types contains 'digital' or product_types contains 'software' or product_types contains 'redirect' %}
You can download your digital products from {{ order.download_url }}  {{ order.validity_statement }}{% if product_types contains 'software' %} In order to use some of the products in this order you will require the following license keys:

{% for license in order.licenses %}{{ license.product.name }}: {{ license.key }}
{% endfor %}{% endif %}
{% endif %}

{% if product_types contains 'service' %}
You have ordered service goods. The merchant will be in contact to arrange the carrying out of these services.
{% endif %}

Thanks,

The SendOwl









<!-- ///////////////////////// HTML Email Receipt Reference ///////////////////////// -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>{% if transaction.refund %}Refund{% else %}Receipt{% endif %} for Order #{{ order.id }} with One Page Love</title>
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

						<p>Hi{% if order.buyer_name %} {{ order.buyer_first_name }}{% endif %},</p>

						<p>
						{% if transaction.refund %}
						Your refund has been made, here are all the details for your records:
						{% else %}
						Awesome! Your payment has cleared for Order #{{ order.id }} - here is the receipt for your records:
						{% endif %}
						</p>

						<div style="background-color: #F2F2F2; border-width: 1px; border-style: dashed; border-color: #DDD; padding: 20px;">

							<strong>{% if transaction.refund %}REFUND{% else %}RECEIPT{% endif %}</strong><br />
							<br />
							Date:<br />                   
							{{ transaction.created_at | date: "%Y-%m-%d" }}<br />
							<br />
							Order ID: <br />              
							{{ order.id }}<br />
							<br />
							PayPal Gateway Transaction ID:<br /> 
							{{ transaction.gateway_transaction_id }}<br />
							<br />

							{% if order.business_name %}

								{% if order.buyer_name %}
								Buyer:<br />                 
								{{ order.buyer_name }}<br /><br />
								{% endif %}

								Buyer Email:<br />            
								{{ order.buyer_email }}<br /><br />

								Business Name:<br />          
								{{ order.business_name }}<br /><br />

								{% if order.business_vat_number %}
								Business VAT Number:<br />    
								{{ order.business_vat_number }}<br /><br />

							{% endif %}

							{% else %}
							{% if order.buyer_name %}

								Customer Name:<br />          
								{{ order.buyer_name }}<br /><br />
								{% endif %}

								Customer Email:<br />        
								{{ order.buyer_email }}<br /><br />

							{% endif %}

							{% if order.buyer_address1 %}
								Address:<br />                
								{{ order.buyer_address1 }},<br /> 
								{% if order.buyer_address2 %}
								{{ order.buyer_address2 }},<br /> 
							{% endif %}

							{{ order.buyer_city }},<br /> 
								{% if order.buyer_region %}
								{{ order.buyer_region }},<br /> 
							{% endif %}

							{% if order.buyer_postcode %}
								{{ order.buyer_postcode }},<br />
							{% endif %}

							{{ order.buyer_country }}<br />
							{% endif %}

							{% if order.for_subscription %}
							Subscription:<br />           
							{{ order.cart.cart_items.first.product.name }} x 1 @ {{ transaction.net_price }}<br /><br />

							{% else %}
							Products: <br />              
							{% for cart_item in order.cart.cart_items %}{{ cart_item.product.name }} x {{ cart_item.quantity }} @ {{ cart_item.product.price }}<br /><br />
							{% endfor %}

							{% endif %}

							{% if transaction.net_price != transaction.payment_gross %}
							Sub-Total: {{ transaction.net_price }}<br />
							{% endif %}

							{% if order.discount %}
							Discount: {{ order.discount }}<br />
							{% endif %}

							{% if transaction.payment_shipping %}
							Delivery: {{ transaction.payment_shipping }}<br />
							{% endif %}

							{% if transaction.payment_tax or order.eu_reverse_charge %}
							{% if order.eu_reverse_charge %}
							Tax:  0.00 [EU reverse charge applied]<br />
							{% else %}
							Tax: {{ transaction.payment_tax }}<br />
							{% endif %}
							{% endif %}
							Total: {{ transaction.payment_gross }}{% if transaction.alternate_pay_method_note %} ({{ transaction.alternate_pay_method_note }}){% endif %}<br />

						</div>

						<p>
						{% if transaction.refund %}
						Please let me know if there is anything else you need.
						{% else %}
						Thank you for supporting One Page Love!	
						{% endif %}
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