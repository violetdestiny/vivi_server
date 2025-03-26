<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;
use App\Models\AdoptionApplication;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdoptionApplicationReceived;
use App\Mail\NewAdoptionApplication;
use Illuminate\Support\Facades\Log;

class AdoptionController extends Controller
{
    public function index()
    {
        $cats = Cat::all();
        return view('adoption.index', compact('cats'));
    }

    public function show($id)
    {
        $cat = Cat::findOrFail($id);
        return view('adoption.show', compact('cat'));
    }

    public function applicationForm($id)
    {
        $cat = Cat::findOrFail($id);
        return view('adoption.application', compact('cat'));
    }

    public function apply(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'cat_id' => 'required|exists:cats,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'zip_code' => 'required|string|max:20',
            'reason' => 'required|string|min:20|max:2000',
            'experience' => 'nullable|string|max:2000',
            'living_situation' => 'required|string|in:apartment,house,condo,other',
            'landlord_permission' => 'required_if:living_situation,apartment,condo|accepted',
            'other_pets' => 'required|boolean',
            'pet_details' => 'required_if:other_pets,true|string|max:1000',
            'vet_reference' => 'nullable|string|max:1000',
            'signature' => 'required|string|max:255',
        ]);

        try {
            // Create new adoption application
            $application = new AdoptionApplication();
            $application->fill([
                'cat_id' => $validatedData['cat_id'],
                'applicant_name' => $validatedData['name'],
                'applicant_email' => $validatedData['email'],
                'applicant_phone' => $validatedData['phone'],
                'applicant_address' => $validatedData['address'],
                'applicant_city' => $validatedData['city'],
                'applicant_state' => $validatedData['state'],
                'applicant_zip' => $validatedData['zip_code'],
                'adoption_reason' => $validatedData['reason'],
                'pet_experience' => $validatedData['experience'] ?? null,
                'living_situation' => $validatedData['living_situation'],
                'landlord_permission' => $validatedData['landlord_permission'] ?? false,
                'other_pets' => $validatedData['other_pets'],
                'other_pets_details' => $validatedData['pet_details'] ?? null,
                'vet_reference' => $validatedData['vet_reference'] ?? null,
                'status' => 'pending',
                'ip_address' => $request->ip()
            ])->save();

            // Send confirmation to applicant
            Mail::to($application->applicant_email)
                ->send(new AdoptionApplicationReceived($application));

            // Notify admin (using config settings)
            if (config('admin.email')) {
                Mail::to(config('admin.email'))
                    ->send(new NewAdoptionApplication($application));
            }

            return redirect()
                ->route('adoption.show', $application->cat_id)
                ->with('success', 'Your adoption application has been submitted successfully! We will contact you soon.');

        } catch (\Exception $e) {
            Log::error('Adoption application error: '.$e->getMessage());
            return back()
                ->withInput()
                ->with('error', 'There was an error submitting your application. Please try again.');
        }
    }
}
