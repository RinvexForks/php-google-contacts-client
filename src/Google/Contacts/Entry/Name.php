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
class Name
{
    /**
     * Given name.
     * 
     * @var string
     */
    private $givenName = '';

    /**
     * Family name
     * 
     * @var string
     */
    private $familyName = '';

    /**
     * Full name
     * 
     * @var string
     */
    private $fullName = '';

    /**
     * Constructor
     */
    public function __construct($element=array())
    {
        foreach($element as $key => $val) {
            $name = substr($key, 3);
            $this->{$name} = $val['$t'];
        }
    }

    /**
     * Get the contacts given name
     * 
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    public function setGivenName($name)
    {
        $this->givenName = $name;
        return $this;
    }

    /**
     * Get the contacts family name
     * 
     * @return string
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    public function setFamilyName($name)
    {
        $this->familyName = $name;
        return $this;
    }

    /**
     * Get the contacts full name
     * 
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    public function setFullName($name)
    {
        $this->fullName = $name;
        return $this;
    }
    
}