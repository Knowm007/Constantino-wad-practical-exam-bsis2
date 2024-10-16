<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT TRANSACTION</title>
</head>
<body>
<h1>EDIT TRANSACTION PAGE</h1>

<form action="{{route('updateTransaction', ['id' => $transaction->id])}}" method="POST">
    @method('PUT')
    @csrf

    <label for="transaction_title">transaction_title:</label>
    <input value="{{$transaction->transaction_title}}" id="transction_title"name="transaction_title" required>
    <br>
    <label for="description">description:</label>
    <input value="{{$transaction->description}}" id="description"name="description" required>
    <br>
    <label for="status">status:</label>
    <select id="status"name="status" required>
        <option value="successful">successful</option>
        <option value="declined">declined</option>
    </select>
    <br>
    <label for="total_amount">total_amount:</label>
    <input value="{{$transaction->total_amount}}" id="total_number"name="total_amount" required>
    <br>
    <label for="transaction_number">transaction_number:</label>
    <input value="{{$transaction->transaction_number}}" id="transction_number"name="transaction_number" required>
    <br>
</select>
    <button type="'submit">Update</button>
</form>

    
</body>
</html>