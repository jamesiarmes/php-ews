<?php
/**
 * Definition of the FileAsMappingType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Mapping types for Contacts
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FileAsMappingType extends EWSType {
	/**
	 * File as mapping for "company"
	 * 
	 * @var string
	 */
	const COMPANY = 'Company';
	
	/**
	 * File as mapping for "last name, first name"
	 * 
	 * @var
	 */
	const COMPANY_LAST_COMMA_FIRST = 'CompanyLastCommaFirst';
	
	/**
	 * File as mapping for "company last name first name"
	 * 
	 * @var string
	 */
	const COMPANY_LAST_FIRST = 'CompanyLastFirst';
	
	/**
	 * File as mapping for "company last name first name"
	 * 
	 * @var string
	 */
	const COMPANY_LAST_SPACE_FIRST = 'CompanyLastSpaceFirst';
	
	/**
	 * File as mapping for "first name last name"
	 * 
	 * @var string
	 */
	const FIRST_SPACE_LAST = 'FirstSpaceLast';
	
	/**
	 * File as mapping for "last name first name"
	 * 
	 * @var string
	 */
	const LAST_FIRST = 'LastFirst';
	
	/**
	 * File as mapping for "last name first name company"
	 * 
	 * @var string
	 */
	const LAST_FIRST_COMPANY = 'LastFirstCompany';
	
	/**
	 * File as mapping for "last name first name suffix"
	 * 
	 * @var string
	 */
	const LAST_FIRST_SUFFIX = 'LastFirstSuffix';
	
	/**
	 * File as mapping for "last name, first name"
	 * 
	 * @var string
	 */
	const LAST_COMMA_FIRST = 'LastCommaFirst';
	
	/**
	 * File as mapping for "last name, first name company"
	 * 
	 * @var string
	 */
	const LAST_COMMA_FIRST_COMPANY = 'LastCommaFirstCompany';
	
	/**
	 * File as mapping for "last name first name"
	 * 
	 * @var string
	 */
	const LAST_SPACE_FIRST = 'LastSpaceFirst';
	
	/**
	 * File as mapping for "lasy name first name company"
	 * 
	 * @var string
	 */
	const LAST_SPACE_FIRST_COMPANY = 'LastSpaceFirstCompany';
	
	/**
	 * File as mapping to use when no mapping is desired.
	 * 
	 * @var string
	 */
	const NONE = 'None';
	
	/**
	 * Value of the desired mapping. Should be one of the constants from the
	 * EWSType_FileAsMappingType class.
	 * 
	 * @var string
	 */
	public $_;
	
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => '_',
				'required' => true,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
	
	/**
	 * Returns the value of this object as a string
	 * 
	 * @return string
	 */
	public function __toString() {
		return $this->_;
	} // end function __toString()
} // end class EWSType_FileAsMappingType