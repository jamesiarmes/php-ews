<?php
/**
 * Created by PhpStorm.
 * User: gareth
 * Date: 27-8-15
 * Time: 10:27
 */

namespace jamesiarmes\PEWS\API;

use jamesiarmes\PEWS\Caster;

trait MagicMethodsTrait
{
    protected $_typeMap = [ ];

    public function __call($name, $arguments)
    {
        $callTypeIndex = 3;
        if (substr($name, 0, 2) == "is") {
            $callTypeIndex = 2;
        }

        $callType = substr($name, 0, $callTypeIndex);
        $propertyName = substr($name, $callTypeIndex);

        if (in_array($callType, array('get', 'is')) && count($arguments) == 0) {
            return $this->{$callType}($propertyName);
        }

        if (in_array($callType, array('add', 'set')) && count($arguments) == 1) {
            return $this->{$callType}($propertyName, $arguments[0]);
        }

        throw new \Exception("The method you tried to call doesn't exist");
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
        if (!$this->exists($name) && $this->exists("get$name")) {
            $name = "get$name";
        }

        if (!$this->exists($name) && $this->exists(lcfirst($name))) {
            $name = lcfirst($name);
        }

        if (!$this->exists($name)) {
            throw new \Exception('Property ' . $name . ' does not exist');
        }

        return $this->$name;
    }

    public function set($name, $value)
    {
        if (!$this->exists($name) && $this->exists(lcfirst($name))) {
            $name = lcfirst($name);
        }

        if (!$this->exists($name)) {
            throw new \Exception('Property ' . $name . ' does not exist');
        }

        if (isset($this->_typeMap[$name])) {
            $value = $this->cast($value, $this->_typeMap[$name]);
        }

        $this->$name = $value;

        return $this;
    }

    public function add($name, $value)
    {
        if (!$this->exists($name) && $this->exists(lcfirst($name))) {
            $name = lcfirst($name);
        }

        if (!$this->exists($name)) {
            throw new \Exception('Property ' . $name . ' does not exist');
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

        if (!$this->exists($name)) {
            throw new \Exception('Property ' . $name . ' does not exist');
        }

        return ((bool) $this->$name);
    }

    public function cast($value, $type)
    {
        return Caster::cast($value, $type);
    }

    public function castToExchange($value, $type)
    {
        if (Caster::castExists($type, 'ExchangeFormat')) {
            $value = Caster::cast($value, 'ExchangeFormat');
        }

        return $value;
    }
}
