<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Transaction</title>
</head>
<body>

    <h1>CREATE TRANSACTION PAGE</h1>

    <form action="{{route('storeTransaction')}}" method="POST">
        @method('POST')
        @csrf
        <label for="transaction_title">transaction_title:</label>
        <input type="text" id="transction_title"name="transaction_title" required>
        <br>
        <label for="description">description:</label>
        <input type="text" id="description"name="description" required>
        <br>
        <label for="status">status:</label>
        <select id="status"name="status" required>
            <option value="successful">successful</option>
            <option value="declined">declined</option>
        </select>
        <br>
        <label for="total_amount">total_amount:</label>
        <input type="number" id="total_number"name="total_amount" required>
        <br>
        <label for="transaction_number">transaction_number:</label>
        <input type="text" id="transction_number"name="transaction_number" required>
        <br>
    
        <button type="'submit">Create</button>
    </form>


    
</body>
</html>
