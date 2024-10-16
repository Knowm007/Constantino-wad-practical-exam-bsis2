<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Page</title>
</head>
<body>
    <h1>Transaction Page</h1>

    <form action="{{route('createTransaction')}}" method="GET">
        <button type="submit">
            create
        </button>
        
    </form>
    @foreach ($transactions as $transaction )
    <div>id:{{$transaction->id}}</div>
    <div>transaction_title:{{$transaction->transaction_title}}</div>
    <div>description:{{$transaction->description}}</div>
    <div>status:{{$transaction->status}}</div>
    <div>total_amount:{{$transaction->total_amount}}</div>
    <div>transaction_number:{{$transaction->transaction_number}}</div>
    <div>timestamps:{{$transaction->timestamps}}</div>

    <form action="{{route('deleteTransaction', ['id' => $transaction->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Transaction</button>
    </form>
    <br>
    <form action="{{route('viewTransaction', ['id' => $transaction->id])}}">
        <button type="submit">
            View
        </button>
    </form>
    <hr>
    @endforeach
    
</body>
</html>
