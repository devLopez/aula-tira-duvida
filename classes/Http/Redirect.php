<?php

class Redirect
{
    public static function to($to)
    {
        header('location:' . $to);
    }
}