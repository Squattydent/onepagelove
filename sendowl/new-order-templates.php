
<!-- ///////////////////////// Product IDs ///////////////////////// -->

623557 - Split by One Page Love
623806 - Amari by Ariel Beninca
77694680 - Deft by Coderare

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

<!-- ///////////////////////// Subject - Product Name ///////////////////////// -->

You rock {{ order.buyer_name }}🙏 Your {% for cart_item in order.cart.cart_items %}{{ cart_item.product.name }}{% endfor %} download links and support info are inside!

<!-- ///////////////////////// Text Mail ///////////////////////// -->

If you see this text, please email support@onepagelove.com

Thanks,
Rob

<!-- ///////////////////////// New HTML Email Reference ///////////////////////// -->

<p>Thanks for your order {% if order.buyer_name %} {{ order.buyer_name }}{% endif %}</p> 

{% assign product_ids = order.cart.cart_items | map: 'product' | map: 'id' %} 

<!-- Kick off the product type loop -->
{% assign product_types = order.cart.cart_items | map: 'product' | map: 'member_types' | flatten %}

<!-- Digital File -->
{% if product_types contains 'digital' or product_types contains 'software' or product_types contains 'redirect' %}

<p>Here is your template download link:<br />
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

<p><strong>Important Support Notice:</strong> 
<!-- Template specific notices -->
{% if product_ids contains 623806 %} 
The Amari HTML template was built by Ariel Beninca. If you need help with this template you need to get hold of the template author on this direct email address: hello@omnifycreative.com - the head of support is Ariel and don't forget to include the license key above:)
{% endif %}
{% if product_ids contains 623557 %} 
The Split HTML template was built by One Page Love. If you need help with this template you need to get hold of the template author on this direct email address: support@onepagelove.com - the head of support is Rob and don't forget to include the license key above:)
{% endif %}
{% if product_ids contains 77694680 %} 
The Deft WordPress theme was built by Coderare. If you need help with this theme you need to get hold of the theme author here: https://www.coderare.com/contact - the head of support is Mohammad Nishat and don't forget to include the license key above:)
{% endif %}
</p>
<!-- End Template specific notices -->

<p>Thanks so much for helping support the One Page website community!</p>
<p>Much love,<br />Rob</p>
<p>ps. I've sent the receipt in another email and your order ID is #{{ order.id }}</p>	
