<?php
/**
 * Base class for all NonEmptyArray* types.
 */

/**
 * Base class for all NonEmptyArray* types.
 */
abstract class EWSType_NonEmptyArray extends ArrayObject
{
	/**
	 * Constructor.
	 *
	 * @param array|object $input Array or object to be used as the data source.
	 * @param integer $flags Flags to control the behavior of the object.
	 * @param string $iterator_class Class to use for iterating over elements of
	 * the array.
	 */
	public function __construct($input = array(), $flags = NULL, $iterator_class = 'ArrayIterator')
	{
		$property = &$this->getProperty();
		$property = $input;

		parent::__construct(array(), $flags, $iterator_class);
	}

	abstract public function &getProperty();

	/**
	 * Appends the value.
	 *
	 * @param mixed $value The value being appended.
	 */
	public function append($value)
	{
		$property = &$this->getProperty();
		$property[] = $value;
	}

	/**
	 * Sort the entries by value
	 */
	public function asort()
	{
		$this->applySort('asort');
	}

	/**
	 * Get the number of public properties in the object.
	 *
	 * @return integer The number of public properties in the object.
	 */
	public function count()
	{
		return count($this->getProperty());
	}

	/**
	 * Exchange the array for another one.
	 *
	 * @param mixed $input The new array or object to exchange with the current
	 * array.
	 * @return array The old array.
	 */
	public function exchangeArray($input)
	{
		$property = &$this->getProperty();
		$return_value = $property;
		$property = $input;

		return $property;
	}

	/**
	 * Creates a copy of the array.
	 *
	 * @return array A copy of the array.
	 */
	public function getArrayCopy()
	{
		return $this->getProperty();
	}

	/**
	 * Sort the entries by key
	 */
	public function ksort()
	{
		$this->applySort('ksort');
	}

	/**
	 * Sort an array using a case insensitive "natural order" algorithm.
	 */
	public function natcasesort()
	{
		$this->applySort('natcasesort');
	}

	/**
	 * Sort entries using a "natural order" algorithm.
	 */
	public function natsort()
	{
		$this->applySort('natsort');
	}

	/**
	 * Returns whether the requested index exists.
	 *
	 * @param mixed $index The index being checked.
	 * @return boolean Whether or not the index exists.
	 */
	public function offsetExists($index)
	{
		$property = $this->getProperty();

		return (isset($property[$index]));
	}

	/**
	 * Returns the value at the specified index.
	 *
	 * @param mixed $index The index with the value.
	 * @return mixed The value at the specified index or false.
	 */
	public function offsetGet($index)
	{
		$property = $this->getProperty();

		return ($this->offsetExists($index) ? $property[$index] : false);
	}

	/**
	 * Sets the value at the specified index to newval.
	 *
	 * @param mixed $index The index being set.
	 * @param mixed $newvalThe new value for the index.
	 */
	public function offsetSet ($index, $newval)
	{
		// If the index is null then we should just append to the end (e.g.
		// the [] syntax was used).
		if (is_null($index)) {
			$this->append($newval);
		} else {
			$property = &$this->getProperty();
			$property[$index] = $newval;
		}
	}

	/**
	 * Unsets the value at the specified index.
	 *
	 * @param mixed $index The index being unset.
	 */
	public function offsetUnset($index)
	{
		if ($this->offsetExists($index)) {
			$property = &$this->getProperty();
			unset($property[$index]);
		}
	}

	/**
	 * Serialize the array.
	 *
	 * @return string The serialized representation of the array.
	 *
	 * @see NonEmptyArray::unserialize()
	 */
	public function serialize()
	{
		return serialize($this->getProperty());
	}

	/**
	 * Sort the entries with a user-defined comparison function and maintain key
	 * association.
	 *
	 * @param callable $cmp_function The callback comparison function. Function 
	 * should accept two parameters which will be filled by pairs of entries.
	 * The comparison function must return an integer less than, equal to, or
	 * greater than zero if the first argument is considered to be respectively
	 * less than, equal to, or greater than the second.
	 */
	public function uasort($cmp_function)
	{
		$this->applySort('uasort', array($cmp_function));
	}

	/**
	 * Sort the entries by keys using a user-defined comparison function.
	 *
	 * @param callable $cmp_function The callback comparison function. Function
	 * should accept two parameters which will be filled by pairs of entry keys.
	 * The comparison function must return an integer less than, equal to, or
	 * greater than zero if the first argument is considered to be respectively
	 * less than, equal to, or greater than the second.
	 */
	public function uksort($cmp_function)
	{
		$this->applySort('uksort', array($cmp_function));
	}

	/**
	 * Unserialize the array.
	 *
	 * @param string $serialized The serialized array.
	 * @return array The unserialized array.
	 *
	 * @see NonEmptyArray::serialize()
	 */
	public function unserialize($serialized)
	{
		$property = &$this->getProperty();
		$property = unserialize($serialized);

		return $property;
	}

	/**
	 * Applies a sort to the data array.
	 *
	 * @param string $sort_function The function to call that will apply the
	 * sort to the data.
	 * @param array $arguments Array of additional arguments to be passed to the
	 * sort function.
	 * @return mixed The result of the sorting function.
	 */
	protected function applySort($sort_function, array $arguments = array())
	{
		$property = &$this->getProperty();
		$arguments = array_unshift($arguments, $property);

		return call_user_func_array($sort_function, $arguments);
	}
} // end class EWSType_NonEmptyArray
