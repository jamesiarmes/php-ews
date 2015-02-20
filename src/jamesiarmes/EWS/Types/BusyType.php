<?php
/**
 * Contains BusyType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the free/busy status set for a calendar event.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class BusyType extends EWSType
{
    /**
     * The calendar item represents busy time.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BUSY = 'Busy';

    /**
     * The calendar item represents free time.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FREE = 'Free';

    /**
     * The calendar item's status is not defined.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NO_DATA = 'NoData';

    /**
     * The calendar item represents time out of the office.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OUT_OF_OFFICE = 'OOF';

    /**
     * The calendar item represents tentativly busy time.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TENTATIVE = 'Tentative';

  /**
   * Element value.
   *
   * @var string
   */
  public $_;

  /**
   * Returns the value of this object as a string.
   *
   * @return string
   */
  public function __toString()
  {
    return $this->_;
  }
}
