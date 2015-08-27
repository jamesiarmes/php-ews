<?php
/**
 * Created by PhpStorm.
 * User: gareth
 * Date: 27-8-15
 * Time: 10:27
 */

namespace jamesiarmes\PEWS\API;

trait MagicMethodsTrait
{
    public function __call($name, $arguments)
    {
        $callTypeIndex = 3;
        if (substr($name, 0, 2) == "is") {
            $callTypeIndex = 2;
        }

        $callType = substr($name, 0, $callTypeIndex);
        $propertyName = substr($name, $callTypeIndex);

        if ($callType == "get") {
            return $this->get($propertyName);
        }

        if ($callType == "set" && count($arguments) == 1) {
            return $this->set($propertyName, $arguments[0]);
        }

        if ($callType == "add" && count($arguments) == 1) {
            return $this->add($propertyName, $arguments[0]);
        }

        if ($callType == "is" && count($arguments) == 0) {
            return $this->is($propertyName);
        }

        return $this;
    }

    public function __set($name, $value)
    {
        if (!$this->exists($name) && $this->exists(lcfirst($name))) {
            $name = lcfirst($name);
        }

        $this->$name = $value;
    }

    public function exists($name)
    {
        return property_exists($this, $name);
    }

    public function get($name)
    {
        if (!$this->exists($name) && $this->exists(lcfirst($name))) {
            $name = lcfirst($name);
        }

        if ($this->exists($name)) {
            return $this->$name;
        }

        throw new \Exception('Property ' . $name . ' does not exist');
    }

    public function set($name, $value)
    {
        if (!$this->exists($name) && $this->exists(lcfirst($name))) {
            $name = lcfirst($name);
        }

        if ($this->exists($name)) {
            if (isset($this->_typeMap[$name])) {
                $value = $this->cast($value, $this->_typeMap[$name]);
            }

            $this->$name = $value;
        }

        return $this;
    }

    public function add($name, $value)
    {
        if (!$this->exists($name) && $this->exists(lcfirst($name))) {
            $name = lcfirst($name);
        }

        if (!$this->exists($name)) {
            return $this;
        }

        if (isset($this->_typeMap[$name])) {
            $value = $this->cast($value, $this->_typeMap[$name]);
        }

        if ($this->$name == null) {
            $this->$name = array();
        }

        if (!is_array($this->$name)) {
            $this->$name = array($this->$name);
        }

        $this->{$name}[] = $value;

        return $this;
    }

    public function is($name)
    {
        $nameWithIs = "Is$name";
        if ($this->exists($nameWithIs)) {
            $name = $nameWithIs;
        } elseif ($this->exists(lcfirst($nameWithIs))) {
            $name = lcfirst($nameWithIs);
        } elseif ($this->exists(lcfirst($name))) {
            $name = lcfirst($name);
        }

        return ($this->exists($name) && (bool) $this->$name);
    }
}
