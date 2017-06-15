





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