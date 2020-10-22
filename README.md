# REST-API-Products
REST API PHP for manage products and categories.

Application Link: https://aqueous-bastion-27565.herokuapp.com/api

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
    // Example
    // https://aqueous-bastion-27565.herokuapp.com/product/read

    // Output json
    [
        {
            "id": "1",
            "name": "Amazing Pillow 3.0",
            "description": "The best pillow for amazing programmers.",
            "price": "255",
            "category_id": "2",
            "created": "2018-08-01 00:35:07",
            "modified": "2014-05-31 17:12:26"
        },
        {
            "id": "2",
            "name": "Teste Pillow 3.0",
            "description": "The best pillow for greatest programmers.",
            "price": "255",
            "category_id": "2",
            "created": "2018-08-01 00:35:07",
            "modified": "2014-05-31 17:12:26"
        },
        {
            "id": "3",
            "name": "Amazing Pillow 3.0",
            "description": "The best pillow for amazing programmers.",
            "price": "255",
            "category_id": "2",
            "created": "2018-08-01 00:35:07",
            "modified": "2014-05-31 17:12:26"
        },
        {
            "id": "6",
            "name": "Amazing Pillow 3.0",
            "description": "The best pillow for amazing programmers.",
            "price": "255",
            "category_id": "2",
            "created": "2018-08-01 00:35:07",
            "modified": "2014-05-31 02:12:21"
        },
        {
            "id": "7",
            "name": "Amazing Pillow 3.0",
            "description": "The best pillow for amazing programmers.",
            "price": "255",
            "category_id": "2",
            "created": "2018-08-01 00:35:07",
            "modified": "2014-05-31 02:13:39"
        }  
    ]

</pre>

<h2>Read One Product</h2>
<pre>
    // Example
    // https://aqueous-bastion-27565.herokuapp.com/product/read/1

    // Output json
    {
        "id": "1",
        "name": "Amazing Pillow 3.0",
        "description": "The best pillow for amazing programmers.",
        "price": "255",
        "category_id": "2",
        "created": "2018-08-01 00:35:07",
        "modified": "2014-05-31 17:12:26"
    }
</pre>   


<h2>Create a Product</h2>
<pre>
    // Example
    // https://aqueous-bastion-27565.herokuapp.com/product/create

    // Input json
    {
        "name": "Amazing Pillow 3.0",
        "description": "The best pillow for amazing programmers.",
        "price": "255",
        "category_id": "2",
        "created": "2018-08-01 00:35:07",
        "modified": "2014-05-31 17:12:26"
    }

    // Output
    Product was created.
</pre>   


<h2>Update a Product</h2>
<pre>
    // Example
    // https://aqueous-bastion-27565.herokuapp.com/product/update

    // Input json
    {
        "id": "1",
        "name": "Amazing Pillow 3.0 (Updated)",
        "description": "The best pillow for amazing programmers.",
        "price": "255",
        "category_id": "2",
        "created": "2018-08-01 00:35:07",
        "modified": "2014-05-31 17:12:26"
    }

    // Output
    Product was update.
</pre>   

<h2>Delete a Product</h2>
<pre>
    // Example
    // https://aqueous-bastion-27565.herokuapp.com/product/delete/50

    // Output
    Product was deleted.
</pre>   

