# REST-API-Products
REST API PHP for manage products and categories.

Application Link: https://aqueous-bastion-27565.herokuapp.com/api/

<h2>Routes:<h2>
<pre>
product/read
product/read/{id}
product/update/{id}
product/delete/{id}
category/read
</pre>


<h2>Products</h2>


<h3>Read All Products:</h3>
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

<h3>Read One Product</h3>
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


<h3>Create a Product</h3>
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


<h3>Update a Product</h3>
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

<h3>Delete a Product</h3>
<pre>
    // Example
    // https://aqueous-bastion-27565.herokuapp.com/product/delete/50

    // Output
    Product was deleted.
</pre>   


<h2>Categories</h2>
<h3>Read All Categories:</h3>
<pre>
    // Example
    // https://aqueous-bastion-27565.herokuapp.com/category/read

    // Output json
    [
        {
            "id": "1",
            "name": "Fashion",
            "description": "Category for anything related to fashion.",
            "created": "2014-06-01 00:35:07"
        },
        {
            "id": "2",
            "name": "Electronics",
            "description": "Gadgets, drones and more.",
            "created": "2014-06-01 00:35:07"
        },
        {
            "id": "3",
            "name": "Motors",
            "description": "Motor sports and more",
            "created": "2014-06-01 00:35:07"
        },
        {
            "id": "5",
            "name": "Movies",
            "description": "Movie products.",
            "created": "0000-00-00 00:00:00"
        },
        {
            "id": "6",
            "name": "Books",
            "description": "Kindle books, audio books and more.",
            "created": "0000-00-00 00:00:00"
        },
        {
            "id": "13",
            "name": "Sports",
            "description": "Drop into new winter gear.",
            "created": "2016-01-09 02:24:24"
        }
    ]
</pre>


