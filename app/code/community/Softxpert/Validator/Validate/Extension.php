<?php

/**
 * Softxpert_Validator extension
 *
 * @category    Softxpert
 * @package     Softxpert_Validator
 * @copyright   Copyright (c) 2019
 * @author      Mohamed Abdul-Fattah <csmohamed8@gmail.com>
 */

class Softxpert_Validator_Validate_Extension extends Zend_Validate_File_Extension
{
    /**
     * @var array Error message templates
     */
    protected $_messageTemplates = array(
        self::FALSE_EXTENSION => "The given file has a false extension",
        self::NOT_FOUND       => "The given file is not readable or does not exist",
    );
}