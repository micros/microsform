<?php
// MyVendor\Contactform\src\Http\Controllers\ContactFormController.php
namespace micros\microsform\Http\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Micros\Microsform\Models\ContactForm;

class ContactFormController extends Controller
{

    public function index()
    {
        return view('Microsform::contact');
    }

    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());
        return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }
}
