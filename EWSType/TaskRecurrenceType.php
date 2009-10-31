<?php
/**
 * Definition of the TaskRecurrenceType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the TaskRecurrenceType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_TaskRecurrenceType extends EWSType {
	/**
	 * RelativeYearlyRecurrence property
	 * 
	 * @var EWSType_RelativeYearlyRecurrencePatternType
	 */
	public $RelativeYearlyRecurrence;

	/**
	 * AbsoluteYearlyRecurrence property
	 * 
	 * @var EWSType_AbsoluteYearlyRecurrencePatternType
	 */
	public $AbsoluteYearlyRecurrence;

	/**
	 * RelativeMonthlyRecurrence property
	 * 
	 * @var EWSType_RelativeMonthlyRecurrencePatternType
	 */
	public $RelativeMonthlyRecurrence;

	/**
	 * AbsoluteMonthlyRecurrence property
	 * 
	 * @var EWSType_AbsoluteMonthlyRecurrencePatternType
	 */
	public $AbsoluteMonthlyRecurrence;

	/**
	 * WeeklyRecurrence property
	 * 
	 * @var EWSType_WeeklyRecurrencePatternType
	 */
	public $WeeklyRecurrence;

	/**
	 * DailyRecurrence property
	 * 
	 * @var EWSType_DailyRecurrencePatternType
	 */
	public $DailyRecurrence;

	/**
	 * DailyRegeneration property
	 * 
	 * @var EWSType_DailyRegeneratingPatternType
	 */
	public $DailyRegeneration;

	/**
	 * WeeklyRegeneration property
	 * 
	 * @var EWSType_WeeklyRegeneratingPatternType
	 */
	public $WeeklyRegeneration;

	/**
	 * MonthlyRegeneration property
	 * 
	 * @var EWSType_MonthlyRegeneratingPatternType
	 */
	public $MonthlyRegeneration;

	/**
	 * YearlyRegeneration property
	 * 
	 * @var EWSType_YearlyRegeneratingPatternType
	 */
	public $YearlyRegeneration;

	/**
	 * NoEndRecurrence property
	 * 
	 * @var EWSType_NoEndRecurrenceRangeType
	 */
	public $NoEndRecurrence;

	/**
	 * EndDateRecurrence property
	 * 
	 * @var EWSType_EndDateRecurrenceRangeType
	 */
	public $EndDateRecurrence;

	/**
	 * NumberedRecurrence property
	 * 
	 * @var EWSType_NumberedRecurrenceRangeType
	 */
	public $NumberedRecurrence;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'RelativeYearlyRecurrence',
				'required' => false,
				'type' => 'RelativeYearlyRecurrencePatternType',
			),
			array(
				'name' => 'AbsoluteYearlyRecurrence',
				'required' => false,
				'type' => 'AbsoluteYearlyRecurrencePatternType',
			),
			array(
				'name' => 'RelativeMonthlyRecurrence',
				'required' => false,
				'type' => 'RelativeMonthlyRecurrencePatternType',
			),
			array(
				'name' => 'AbsoluteMonthlyRecurrence',
				'required' => false,
				'type' => 'AbsoluteMonthlyRecurrencePatternType',
			),
			array(
				'name' => 'WeeklyRecurrence',
				'required' => false,
				'type' => 'WeeklyRecurrencePatternType',
			),
			array(
				'name' => 'DailyRecurrence',
				'required' => false,
				'type' => 'DailyRecurrencePatternType',
			),
			array(
				'name' => 'DailyRegeneration',
				'required' => false,
				'type' => 'DailyRegeneratingPatternType',
			),
			array(
				'name' => 'WeeklyRegeneration',
				'required' => false,
				'type' => 'WeeklyRegeneratingPatternType',
			),
			array(
				'name' => 'MonthlyRegeneration',
				'required' => false,
				'type' => 'MonthlyRegeneratingPatternType',
			),
			array(
				'name' => 'YearlyRegeneration',
				'required' => false,
				'type' => 'YearlyRegeneratingPatternType',
			),
			array(
				'name' => 'NoEndRecurrence',
				'required' => false,
				'type' => 'NoEndRecurrenceRangeType',
			),
			array(
				'name' => 'EndDateRecurrence',
				'required' => false,
				'type' => 'EndDateRecurrenceRangeType',
			),
			array(
				'name' => 'NumberedRecurrence',
				'required' => false,
				'type' => 'NumberedRecurrenceRangeType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class TaskRecurrenceType