<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
	public function index() {

		$settings = Setting::get();
        $data = [];
        foreach ($settings as $setting) {
            $data[$setting->setting_name_en] = $setting->setting_value_en;
        }

		return view('admins.settings.index')->with('setting', $data);
	}

	public function update(Request $request) {
		$inputs = $request->all();

		if ($request->file('logo')) {
			@unlink(setting('logo'));
			$inputs['logo'] = uploadImage($request->file('logo'), 'images/logo/');
		}

		unset($inputs['_token']);
		unset($inputs['_method']);

		foreach ($inputs as $input => $value) {
			$setting = Setting::firstOrCreate([
				'setting_name' => $input
			]);

			if ($setting) {
				$setting->setting_value_en = $value;
				$setting->save();
			}
		}

		 session(['app.settings' => Setting::all()]);

		return redirect()->back()->with([
			'info' => 'Settings updated.'
		]);
	}

}
