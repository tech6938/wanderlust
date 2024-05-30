<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Booking;
use App\Models\Products;
use Hash;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function packages(Request $id)
    {
        $allPackages = products::all();
        return view('packages', compact('allPackages'));
        // dd($allPackages);  // Fetch all records from the products table
    }

    public function home()
    {
        return view('index');
    }
    public function register()
    {
        return view('auth');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // session()->put('id', $request->id);
            $request->session()->regenerate();
            if (auth()->user()->role !== 'Admin') {
                return view('index');
            }
            return redirect()->intended('dashboard')->with('message', 'Signed In!');
        }
        return redirect('register')->with('error', 'Log In Failed!');
    }


    public function signupsave(Request $request)
    {
        $request->validate([
            'fullName'=>'required',
            'emailAddress'=>'required|email|unique:users,email',
            'userPassword'=>'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        // return redirect()->route('auth')->with('message', 'Account Created Successfully!');
        return view('auth');
    }

    public function create(array $data)
    {
        $role = 'User';
        return User::create([
            'name' => $data['fullName'],
            'email' => $data['emailAddress'],
            'password' => Hash::make($data['userPassword']),
            'role' => $role
        ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            $users = User::all();
            return view('dashboard', ['users' => $users]);
        }
        return redirect('/');
    }

    public function booking()
    {
        if(Auth::check()){
            $bookings = Booking::all();
            return view('booking', ['bookings' => $bookings]);
        }
        return redirect('/');
    }

    public function signOut()
    {
        session::flush();
        Auth::logout();
        return redirect('/');
    }
    //-----logout by id
    public function logout()
    {
        session()->forget('id');
        return redirect('/login');
    }

    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role' => 'required',
        ]);
        $user->update($request->all());
        return redirect('dashboard')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('dashboard')->with('success', 'User deleted successfully.');
    }

    // for bookingNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
    public function editbooking(Booking $booking)
    {
        return view('editbooking', compact('booking'));
    }

    public function updatebooking(Request $request, Booking $booking)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255,' . $booking->id,
            'datetime' => 'required',
            'destination' => 'required|string|max:255',
            'details' => 'nullable|string|max:1000',
            'status' => 'required|string',
        ]);

        $booking->update([
            'name' => $request->name,
            'email' => $request->email,
            'datetime' => $request->datetime,
            'destination' => $request->destination,
            'details' => $request->details,
            'status' => $request->status,
        ]);

        return redirect('booking')->with('success', 'Booking updated successfully.');
    }


    public function destroybooking(Booking $booking)
    {
        $booking->delete();
        return redirect('booking')->with('success', 'Booking deleted successfully.');
    }
// --NNNNNNNNNNNNNNNNNNNNNNNNN-Packages--BookingNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN------
public function packageBooking(){
    $packages = products::all();
    return view('package_bookings' ,compact('packages'));
}
    public function destroyPackage($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->route('package_bookings')->with('success', 'Product deleted successfully');
    }

    //NNNNNNNNNNNNNNN-packages---NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
    public function package()
    {
        if(Auth::check()){
            return view('packege_upload');
        }
        return redirect('/auth');
    }
//
    public function storepackage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'place' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'persons' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);



        $package = new products();
        $package->image=$request->file('image')->getClientOriginalName(); //save image file into DataBase
        $request->file('image')->move('uploads/',$package->image);    //upload image
        $package->place = $request->place;
        $package->duration = $request->duration;
        $package->persons = $request->persons;
        $package->price = $request->price;
        $package->description = $request->description;
        $package->save();
        return redirect('packege_upload')->with('success', 'Package saved successfully!');
    }
    // For Searching on Packages page
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Products::where('place', 'like', "%$query%")->get();
        return view('packages', compact('results'));
    }

    // For Searching on Home Page
    public function search_index(Request $request)
    {
        $query = $request->input('query');
        $results = Products::where('place', 'like', "%$query%")->get();
        return view('index', compact('results'));
    }
}
