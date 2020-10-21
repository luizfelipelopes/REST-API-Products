# REST-API-Products
REST API PHP for manage products and categories.

Application Link: https://aqueous-bastion-27565.herokuapp.com/

<h2>Routes:<h2>
<pre>
product/read
product/read/{id}
product/update/{id}
product/delete/{id}

category/read
category/read/{id}
category/update/{id}
category/delete/{id}
</pre>



<h2>Read All Products:</h2>
<pre>
    https://aqueous-bastion-27565.herokuapp.com/product/read

    {
        "name": "Teste Deploy Heroku (Editado)",
        "description": "This is a test deploy heroku.",
        "price": "777",
        "category_id": "2",
        "created": "2018-08-01 00:35:07",
        "modified": "2014-05-31 17:12:26"
    }
</pre>

