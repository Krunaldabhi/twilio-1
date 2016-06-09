<?php namespace Lakshmajim\Twilio\Facade;
 
use Illuminate\Support\Facades\Facade;
 
/**
 * Twilio - Facade to support integration with Laravel framework 
 *
 * @package  Twilio
 * @version  1.0.0
 * @author   lakshmaji <lakshmajee88@gmail.com>
 */ 
class Twilio extends Facade {
 
    protected static function getFacadeAccessor() { return 'twilio'; }
 
}
// end of class Twilio
// end of file Twilio.php