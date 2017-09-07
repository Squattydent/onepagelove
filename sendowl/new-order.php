
<!-- ///////////////////////// Product IDs ///////////////////////// -->

Feedback For Coffee ☕️
https://www.sendowl.com/products/597112/edit

Clutterless Pro
https://www.sendowl.com/products/568245/edit

FullSingle Pro
https://www.sendowl.com/products/489045/edit

eBook: 10 Landing Page Design Tips 
https://www.sendowl.com/products/512413/edit

One Page Love Submission
https://www.sendowl.com/products/490059/edit

One Page Love Template submission
https://www.sendowl.com/products/507826/edit

Private Video Feedback
https://www.sendowl.com/products/490123/edit

Screenshot Concierge
https://www.sendowl.com/products/627090/edit

<!-- ///////////////////////// If Then Statements  ///////////////////////// -->

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

<!-- ///////////////////////// Subject ///////////////////////// -->

{% for cart_item in order.cart.cart_items %}Thanks for your {{ cart_item.product.name }} order 🎉 {% endfor %} (#{{ order.id }})

<!-- ///////////////////////// Subject - Name ///////////////////////// -->

#{{ order.id }} - {% for cart_item in order.cart.cart_items %}Thanks for your {{ cart_item.product.name }} order {% endfor %}🎉 

<!-- ///////////////////////// Subject - Name ///////////////////////// -->

You rock {{ order.buyer_name }}! {% for cart_item in order.cart.cart_items %}Thanks for your {{ cart_item.product.name }} order {% endfor %}🎉 

<!-- ///////////////////////// Text Mail ///////////////////////// -->

If you see this text, please email support@onepagelove.com

Cheers,
Rob

<!-- ///////////////////////// Reference: Custom Field  ///////////////////////// -->

<p>Hey {% for custom_checkout_fields in order.order_custom_checkout_fields %}{% if custom_checkout_fields.name contains 'First Name:' %}{{ custom_checkout_fields.value }} {% endif %}{% endfor %}</p> 

<!-- ///////////////////////// Reference: Order Buyer Name ///////////////////////// -->

<p>Hey {% if order.buyer_name %} {{ order.buyer_name }}{% endif %}</p> 



<!-- ///////////////////////// New HTML Email Reference ///////////////////////// -->

<p>Hey {% for custom_checkout_fields in order.order_custom_checkout_fields %}{% if custom_checkout_fields.name contains 'First Name:' %}{{ custom_checkout_fields.value }} {% endif %}{% endfor %}</p> 

{% assign product_ids = order.cart.cart_items | map: 'product' | map: 'id' %} 

{% if product_ids contains 627090 %} 
<p>Thanks for the ordering screenshots from Screenshot Concierge! 📸</p>
<p>The service takes 1 working day. We are going to begin shortly based on this URL: <br/>{% for custom_checkout_fields in order.order_custom_checkout_fields %}

	{% if custom_checkout_fields.name contains 'Screenshot URL:' %}

		{{ custom_checkout_fields.value }}<br />

	{% endif %}

{% endfor %}</p>
{% endif %} 

{% if product_ids contains 597112 %} 
<p>Thanks for the coffee! ☕️</p>
<p>The feedback takes about 2 days and I'll email you once ready - so long could you email back a paragraph or two with a bit of context for the review? What are you trying to achieve with this website: <br/>{% for custom_checkout_fields in order.order_custom_checkout_fields %}

	{% if custom_checkout_fields.name contains 'Feedback URL:' %}

		{{ custom_checkout_fields.value }}<br />

	{% endif %}

{% endfor %}</p>
{% endif %} 

{% if product_ids contains 568245 %} 
<p>Thanks for you purchase of Clutterless Pro!</p>
{% endif %}


{% if product_ids contains 512413 %} 
<p>Thanks for purchasing the eBook: 10 Landing Page Design Tips 📖</p>
{% endif %}


{% if product_ids contains 490059 %} 
<p>Thanks for your One Page website submission of {% for custom_checkout_fields in order.order_custom_checkout_fields %}

	{% if custom_checkout_fields.name contains 'Website Name:' %}

		{{ custom_checkout_fields.value }}:<br />

	{% endif %}

	{% if custom_checkout_fields.name contains 'Website URL:' %}

		{{ custom_checkout_fields.value }}

	{% endif %}

{% endfor %}</p>
<p>The review takes approximately one week and I'll email you once ready - so long could you email back a few notes on the build? This gets added below my review. Like a behind-the-scenes insight for One Page Love readers on what was fun to implement or even tricky to achieve.</p>
{% endif %}


{% if product_ids contains 507826 %} 
<p>Thanks for your One Page template submission of {% for custom_checkout_fields in order.order_custom_checkout_fields %}

	{% if custom_checkout_fields.name contains 'Template Name:' %}

		{{ custom_checkout_fields.value }}:<br />

	{% endif %}

	{% if custom_checkout_fields.name contains 'Template URL:' %}

		{{ custom_checkout_fields.value }}

	{% endif %}

{% endfor %}</p>
<p>The template review takes approximately one week and I'll email you once ready.</p>
{% endif %}


{% if product_ids contains 490123 %} 
<p>Thanks for your order of a Private Video Feedback 🎞</p>
<p>The feedback takes approximately one week and I'll email you a link to the video once ready.</p>
{% endif %}

<!-- Kick off the product type loop -->
{% assign product_types = order.cart.cart_items | map: 'product' | map: 'member_types' | flatten %}

<!-- Digital File -->
{% if product_types contains 'digital' or product_types contains 'software' or product_types contains 'redirect' %}

<p>Here is your download link:<br />
{{ order.download_url }}<br />  
({{ order.validity_statement }})</p>

	<!-- WordPress themes with licenses for support -->
	{% if product_types contains 'software' %} 

		{% for license in order.licenses %}
			<p>Here is your {{ license.product.name }} license key 🔑<br />
			{{ license.key }} (keep this for support)</p>
		{% endfor %}

	{% endif %}

{% endif %}

<p>Thanks so much for helping support One Page Love!</p>
<p>Chat soon,<br />Rob</p>
<p>ps. I've sent the receipt in another email and your order ID is #{{ order.id }}</p>	
