<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
</head>
<body>
    <h1>Order Details</h1>
    <form>
        <label>Transaction No:</label>
        <input type="text" value="{{ request('trans_no') }}" readonly><br>

        <label>Order No:</label>
        <input type="text" value="{{ request('order_no') }}" readonly><br>

        <label>Item ID:</label>
        <input type="text" value="{{ request('item_id') }}" readonly><br>

        <label>Name:</label>
        <input type="text" value="{{ request('name') }}" readonly><br>

        <label>Price:</label>
        <input type="text" value="{{ request('price') }}" readonly><br>

        <label>Quantity:</label>
        <input type="text" value="{{ request('qty') }}" readonly><br>
    </form>
</body>
</html>
