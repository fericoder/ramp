<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DocumentUpdated extends Mailable
{
    use Queueable, SerializesModels;
    protected $docNo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($docNo)
    {
        $this->docNo = $docNo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('jooyandeh@rieco.ir')->cc('rahmani@rieco.ir')->view('emails.dcc.updated')->with(['docNo' => $this->docNo]);
    }
}
