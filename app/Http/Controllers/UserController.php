<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->get('name') ?: 'Goyette';

        $builder = User::nameSearch($name.'%')
            ->sortBy('id')
            ->toArray();

        dd($builder);
    }

    public function getUser(Request $request)
    {
        $name = $request->get('name') ?: 'Goyette';

        dd(User::search($name)->first());
    }

    public function create()
    {
        $user = [
            'name' => 'fatih',
            'email' => 'fatihirday@gmail.com',
            'password' => Hash::make('password')
        ];

        $newUser = User::create($user);
        $newUser->searchable();
    }

    public function destroy(User $user)
    {
        $user->unsearchable();
        $user->delete();
    }
}
