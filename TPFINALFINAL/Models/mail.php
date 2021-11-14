<?php
    namespace Models;

    class mail{

    public static function send($to, $subject, $message, $we)
        {
                mail($to, $subject, $message, $we);
                
        }
        
}