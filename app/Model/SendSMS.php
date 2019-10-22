<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Config;
use Auth;
use DB; 

class SendSMS extends Model
{
    public function sendMailltesting(){
        
        $mailData['data'] = '';
        $mailData['subject'] = 'Email From Brot!!';
        $mailData['attachment'] = array();
        $mailData['template'] ="emails.test";
        $mailData['mailto'] = 'mahendrajavandhra@gmail.com';
        $sendMail = new Sendmail;
        return $sendMail->sendSMTPMail($mailData);
        
    }
}
