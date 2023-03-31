<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        //INVERTER A DATA
        function inverteData($data) {
            if(count(explode("/",$data)) > 1) {
            return implode("-",array_reverse(explode("/",$data)));
            } elseif(count(explode("-",$data)) > 1) {
            return implode("/",array_reverse(explode("-",$data)));
            }
        }

        $data_nascimento_invertida = inverteData($request->data_nascimento);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telefone' => $request->telefone,
            'celular' => $request->celular,
            'data_nascimento' => $data_nascimento_invertida,
            'cidade' => $request->cidade,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/index');
        //return redirect(RouteServiceProvider::HOME);

    }
}
