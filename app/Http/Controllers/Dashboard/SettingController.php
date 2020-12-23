<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShippingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use DB;

class SettingController extends Controller
{
    public function editShipping($type)
    {

        if ($type === 'free')
            $shipping = Setting::where('key', 'free_shipping_label')->first();

        elseif ($type === 'inner')
            $shipping = Setting::where('key', 'locale_label')->first();

        elseif ($type === 'outer')
            $shipping = Setting::where('key', 'outer_label')->first();

        else
            $shipping = Setting::where('key', 'free_shipping_label')->first();

        return view('dashboard.settings.shipping.edit', compact('shipping'));
    }

    public function updateShipping(ShippingRequest $request, $id)
    {
        try {
            $shipping = Setting::find($id);
            DB::beginTransaction();
            $shipping->update(['plain_value' => $request->plain_value]);
            $shipping->value =  $request->value;
            $shipping->save();
            DB::commit();
            return redirect()->back()->with([__('messages.true')]);
        } catch (\Exception $ex) {
            return redirect()->back()->with([__('messages.false')]);
            DB::rollBack();
        }


    }
}
