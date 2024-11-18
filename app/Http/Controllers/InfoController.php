<?php

namespace App\Http\Controllers;

use App\Enums\FormSection;
use App\Traits\HandlesFormSessions;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    use HandlesFormSessions;
    public function create(): View
    {
        $this->regenerateSession();
        return view('info.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => ['required',],
            'email' => ['required', 'email', 'unique:App\\Models\\User'],
            'phone' => ['required','min:10']
        ]);

        $this->storeFormSessionData(FormSection::INFO, $validatedData);


        return redirect('/plans');
    }
}
