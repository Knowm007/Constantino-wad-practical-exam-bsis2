<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Page</title>
</head>
<body>
    <h1>Transaction Page</h1>
    <div>id:{{$transaction->id}}</div>
    <div>transaction_title:{{$transaction->transaction_title}}</div>
    <div>description:{{$transaction->description}}</div>
    <div>status:{{$transaction->status}}</div>
    <div>total_amount:{{$transaction->total_amount}}</div>
    <div>transaction_number:{{$transaction->transaction_number}}</div>
    <div>timestamps:{{$transaction->timestamps}}</div>
    <hr>


    <form action="{{route('editTransaction', ['id' => $transaction->id])}}" method="GET">
        <button type="submit">Edit</button>
    </form>

    <form action="{{route('showAllTransactions')}}" method="GET">
        <button type="submit">Go back</button>
    </form>
    
</body>
</html>
