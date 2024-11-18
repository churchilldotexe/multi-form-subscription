<?php

namespace App\Http\Controllers;

use App\Enums\AddOns;
use App\Enums\FormSection;
use App\Service\PricingServices;
use App\Traits\HandlesFormSessions;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AddOnController extends Controller
{
    use HandlesFormSessions;
    public function create()
    {
        $this->regenerateSession();
        return view('add-ons.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'service' => ['sometimes', 'required', Rule::enum(AddOns::class)],
            'storage' => ['sometimes', 'required', Rule::enum(AddOns::class)],
            'profile' => ['sometimes', 'required', Rule::enum(AddOns::class)],
        ]);

        $addOns = $this->generateSessionData($validatedData);

        $this->storeFormSessionData(FormSection::ADDONS, $addOns);
        return redirect('/summary');
    }
}
