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
        // dd(session('plan.billingType'));
        // name , price , billing-type
        // TODO: refactor, the pricing service especially the billing type can possibly be omitted and put a default instead(monthly)
        // ! must check if the key (service,storage,profile) exist
        $addOns = [
            'service' => [
                'name' => $request->service,
                'price' => PricingServices::getPrice(AddOns::tryFrom($request->service)->getPrice(), session('plan.billingType') ?? 'monthly'),
                'billing-type' => session('plan.billingType') ?? 'monthly'
            ],
            'storage' => [
                'name' => $request->storage,
                'price' => PricingServices::getPrice(AddOns::tryFrom($request->storage)->getPrice(), session('plan.billingType') ?? 'monthly'),
                'billing-type' => session('plan.billingType')
            ],
            'profile' => [
                'name' => $request->profile,
                'price' => PricingServices::getPrice(AddOns::tryFrom($request->profile)->getPrice(), session('plan.billingType') ?? 'monthly'),
                'billing-type' => session('plan.billingType')
            ],
        ];
        // $plan = $request->plan;
        // $billingType = $request->get('billing_type') ?? 'monthly';
        // $montlyPrice = SubscriptionPlans::tryFrom($plan)->getPrice();
        // $price = Pricing::getPrice($montlyPrice, $billingType);

        $this->storeFormSessionData(FormSection::ADDONS, $addOns);
        return redirect('/summary');
    }
}
