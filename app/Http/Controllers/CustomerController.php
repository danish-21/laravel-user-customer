<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Models\UserCustomer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customer_register');
    }

    public function store(Request $request)
    {
        // Validate customer data
        $request->validate([
            'customer_name' => 'required',
            'mobile' => 'required|string|max:12',
            'address' => 'required',
        ]);

        $customer = new Customer([
            'customer_name' => $request->input('customer_name'),
            'mobile' => $request->input('mobile'),
            'address' => $request->input('address'),
        ]);

        $customer->save();

        $users = User::all();

        $assignedUser = $users->first(function ($user) {
            return $user->customers->isEmpty();
        });

        if (!$assignedUser) {
            $assignedUser = $users->first();
        }

        $assignedUser->customers()->attach($customer);

        return redirect('customers/create')->with('success', 'Customer assigned successfully');
    }






    public function showUserCustomerList()
    {
        // Retrieve user-customer relationships
        $userCustomers = UserCustomer::with(['user', 'customer'])->get();

        return view('user_customer_list', compact('userCustomers'));
    }


}
