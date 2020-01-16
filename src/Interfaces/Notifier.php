<?php

namespace Shawsank\OTP\Interfaces;

interface Notifier
{
    public function notify($otp, $to);
    public function withValidation($module, $id);
}
