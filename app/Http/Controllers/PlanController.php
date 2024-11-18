<?php

namespace App\Http\Controllers;

use App\Enums\FormSection;
use App\Enums\SubscriptionPlans;
use App\Service\PricingServices;
use App\Traits\HandlesFormSessions;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PlanController extends Controller
{
    use HandlesFormSessions;
    public function create(): View
    {
        $this->regenerateSession();

        return view('plans.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'plan' => ['required', Rule::enum(SubscriptionPlans::class)],
            'billing_type' => ['sometimes', 'required', 'in:yearly']
        ]);

        $plan = $request->plan;
        $billingType = $request->get('billing_type') ?? 'monthly';
        $montlyPrice = SubscriptionPlans::tryFrom($plan)->getPrice();
        $price = PricingServices::getPrice($montlyPrice, $billingType);

        $this->storeFormSessionData(FormSection::PLAN, compact('plan', 'billingType', 'price'));
        return redirect('/add-ons');
    }
}
