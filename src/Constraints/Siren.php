<?php

namespace SLLH\IsoCodesValidator\Constraints;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 *
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
class Siren extends IsoCodesGeneric
{
    public $message = 'This value is not a valid SIREN.';
}
