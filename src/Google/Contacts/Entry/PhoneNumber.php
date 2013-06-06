<?php
/**
 * Copyright 2013 Asim Liaquat
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\Contacts\Entry;

/**
 * Contacts Service.
 *
 * @package    Google
 * @subpackage Contacts
 * @version    0.1
 * @author     Asim Liaquat <asimlqt22@gmail.com>
 */
class PhoneNumber
{
    /**
     * phone number type.
     * 
     * @var string
     */
    private $type = '';

    /**
     * Phone number
     * 
     * @var string
     */
    private $phoneNumber = '';

    /**
     * Constructor
     */
    public function __construct($type, $phoneNumber)
    {
        $this->type = $type;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Get phone number type
     * 
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the phone number type
     * 
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get phone number
     * 
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
    
}