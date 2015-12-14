<?php

namespace JKrekora\Password;


use Jkan\Component\Password\EncodingMethod;

class Sha1Encoding implements EncodingMethod
{

    public function encode($plainText)
    {
        return Sha1($plainText);
    }
}