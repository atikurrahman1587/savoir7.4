<?php

namespace App\Observers;

use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactObserver
{
    /**
     * Handle the Contact "created" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function created(Contact $contact): void
    {
        $data = [
            'name' => $contact->first_name.' '.$contact->last_name,
            'email' => $contact->email,
            'subject' => $contact->first_name.' '.$contact->last_name.' contacted you for more information',
            'city' => $contact->city,
            'contact_number' => $contact->contact_number,
            'company_name' => $contact->company_name,
            'designation' => $contact->designation,
            'message_content' => $contact->message,
        ];
        Mail::send('mail.contact', $data, function ($message) use ($data) {
            $message->to('ericson.tham.sg@gmail.com');
            $message->subject($data['subject']);
        });
    }

    /**
     * Handle the Contact "updated" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function updated(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "deleted" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function deleted(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "restored" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function restored(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "force deleted" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function forceDeleted(Contact $contact)
    {
        //
    }
}
