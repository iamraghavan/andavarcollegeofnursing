<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteMail;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Validator;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\Auth\InvalidPassword;
use Kreait\Firebase\Exception\Auth\UserNotFound;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about.vision-and-mission');
    }

    public function message_from_founder_and_chairman()
    {
        return view('pages.about.message-from-the-founder-and-chairman');
    }

    public function message_from_principal()
    {
        return view('pages.about.message-from-the-principal');
    }

    public function message_from_secretary()
    {
        return view('pages.about.message-from-the-secretary');
    }

    public function our_history()
    {
        return view('pages.about.our-history');
    }




    public function facilities($facility)
    {
        $view = "facilities.$facility";

        if (!View::exists($view)) {
            abort(404, "Facility '$facility' not found.");
        }

        return view($view, ['facility' => $facility]);
    }


    public function contact()
    {
        return view('pages.contact');
    }





    // Department

    /**
     * Display the Obstetrics & Gynaecological Nursing page.
     *
     * @return \Illuminate\View\View
     */
    public function ogn()
    {
        return view('pages.departments.obstetrics-gynaecological-nursing');
    }

    /**
     * Display the Medical Surgical Nursing Department page.
     *
     * @return \Illuminate\View\View
     */
    public function msn()
    {
        return view('pages.departments.medical-surgical-nursing');
    }

    /**
     * Display the Community Health Nursing page.
     *
     * @return \Illuminate\View\View
     */
    public function chn()
    {
        return view('pages.departments.community-health-nursing');
    }

    /**
     * Display the Child Health Nursing Department page.
     *
     * @return \Illuminate\View\View
     */
    public function chnDept()
    {
        return view('pages.departments.child-health-nursing');
    }

    /**
     * Display the Mental Health Nursing page.
     *
     * @return \Illuminate\View\View
     */
    public function mhn()
    {
        return view('pages.departments.mental-health-nursing');
    }





    //sent email
    // PagesController.php

    public function sentMessage(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|regex:/^[0-9]{10}$/',
            'address' => 'required|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:255',
            'inquiry' => 'required|string',
        ]);

        // dd($validatedData);

        try {
            Mail::to('raghavanofficials@gmail.com')->send(new QuoteMail($validatedData));

            return redirect()->back()->with('success', 'Email sent successfully!');
        } catch (\Exception $e) {
            Log::error('Failed to send email: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to send email. Please try again.');
        }
    }

    // Department

    public function a_nursing()
    {
        return view('pages.academics.nursing');
    }

    public function a_dgnm()
    {
        return view('pages.academics.diploma-general-nursing-midwifery');
    }

    public function a_anm()
    {
        return view('pages.academics.auxiliary-nurse-midwifery');
    }


    //admissions

    public function admissions()
    {
        return view('pages.admission');
    }

    //gallery

    public function gallery()
    {
        return view('pages.gallery.gallery');
    }
}
