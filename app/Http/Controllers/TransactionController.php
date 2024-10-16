<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;

use Illuminate\Support\Facades\Hash;

class TransactionController extends Controller
{
    public function showAllTransactions(){
        $transactions = Transaction::orderBy('updated_at','desc')->get();
        return view('transactions', ['transactions'=>$transactions]);
    }

    public function viewTransaction(Request $request){
        $transaction = Transaction::find($request->id);
        return view('transaction', ['transaction'=>$transaction]);
    }


    public function createTransaction(){
        return view('create-transaction');
    }

    public function storeTransaction(Request $request){
       
        $validatedData = $request->validate([
            'transaction_title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'total_amount' => 'required|integer|max:1000000',
            'transaction_number' => 'required|string|max:1000000',
        ]);

        $transaction = new Transaction();

        $transaction -> transaction_title = $validatedData['transaction_title'];
        $transaction -> description = $validatedData['description'];
        $transaction -> status = $validatedData['status'];
        $transaction -> total_amount = $validatedData['total_amount'];
        $transaction -> transaction_number = $validatedData['transaction_number'];
        $transaction -> save();

        return redirect()->route('showAllTransactions')->with('successful', 'Transaction processed Sucessfully');

    }

    public function editTransaction(Request $request){
        $transaction = Transaction::find($request->id);
        return view('edit-transaction', ['transaction'=>$transaction]);
    }

    public function updateTransaction(Request $request){
       
        $validatedData = $request->validate([
            'transaction_title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'total_amount' => 'required|integer|max:1000000',
            'transaction_number' => 'required|string|max:1000000',
        ]);

        $transaction = Transaction::find($request->id);

        $transaction -> transaction_title = $validatedData['transaction_title'];
        $transaction -> description = $validatedData['description'];
        $transaction -> status = $validatedData['status'];
        $transaction -> total_amount = $validatedData['total_amount'];
        $transaction -> transaction_number = $validatedData['transaction_number'];
        $transaction -> save();

        return redirect()->route('viewTransaction', ['id'=>$transaction->id])->with('success', 'Transaction processed Sucessfully');

    }

    public function deleteTransaction(Request $request){
        $transaction = Transaction::find($request->id);
        if ($transaction){
            $transaction->delete();
        }
        return redirect()->route('showAllTransactions', ['id' =>$transaction->id])->with('success', 'Transaction Deleted Sucessfully');
    }


}
