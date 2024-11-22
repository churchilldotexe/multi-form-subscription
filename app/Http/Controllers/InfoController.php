<?php

namespace App\Http\Controllers;

use App\Enums\FormSection;
use App\Http\Requests\InfoRequest;
use App\Traits\HandlesFormSessions;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class InfoController extends Controller
{
    use HandlesFormSessions;

    public function create(): View
    {
        $this->regenerateSession();

        return view('info.create');
    }

    public function store(InfoRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        $this->storeFormSessionData(FormSection::INFO, $validatedData);

        return redirect('/plans');
    }
}
