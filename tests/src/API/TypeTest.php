<?php

namespace jamesiarmes\PEWS\Test\API;

use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\API\Enumeration;
use PHPUnit_Framework_TestCase;
use Mockery;
use DateTime;

class TypeTest extends PHPUnit_Framework_TestCase
{
    private $_typeMock;

    public function getTypeMock()
    {
        if (!$this->_typeMock) {
            $object = Mockery::mock('jamesiarmes\PEWS\API\Type')->makePartial();
            $this->_typeMock = $object;
        }

        return $this->_typeMock;
    }

    public function testMagicCall()
    {
        $item = Type::buildFromArray(array(
            'One' => 'One',
            'Two' => 'Two'
        ));

        $this->assertEquals('One', $item->getOne());
        $this->assertEquals('Two', $item->getTwo());

        $item->setTwo('Two Test');

        $this->assertEquals('Two Test', $item->getTwo());

        $item->setTwo('Two Test Two', 'Some Random Thing');
        $this->assertEquals('Two Test', $item->getTwo());
    }

    public function testBuildFromArray()
    {
        $array = array(
            'One' => 'One',
            'Two' => 'Two',
            'Three' => array('1', '2', '3'),
            'Four' => array('FourOne' => 1, 'FourTwo' => 2, 'FourThree' => 3)
        );

        $excepted = new Type();
        $excepted->One = 'One';
        $excepted->Two = 'Two';
        $excepted->Three = array('1', '2', '3');
        $excepted->Four = new Type();
        $excepted->Four->FourOne = 1;
        $excepted->Four->FourTwo = 2;
        $excepted->Four->FourThree = 3;

        $actual = Type::buildFromArray($array);

        $this->assertEquals($excepted, $actual);
    }

    /**
     * @dataProvider arrayAssocProvider
     *
     * @param $array
     * @param $expected
     */
    public function testArrayIsAssoc($array, $expected)
    {
        $type = $this->getTypeMock();
        $isAssoc = $type->arrayIsAssoc($array);

        $this->assertEquals($expected, $isAssoc);
    }

    public function testToXmlObject()
    {
        $start = new DateTime('8:00 AM');
        $end = new DateTime('9:00 AM');

        /** Creating the control object to test */
        $control = new Type();
        $control->SendMeetingInvitations = Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE;
        $control->Items = new Type();
        $control->Items->CalendarItem = new Type();
        $control->Items->CalendarItem->Start = $start->format('c');
        $control->Items->CalendarItem->End = $end->format('c');
        $control->Items->CalendarItem->Body = new Type();
        $control->Items->CalendarItem->Body->BodyType = Enumeration\BodyTypeType::HTML;
        $control->Items->CalendarItem->Body->_ = 'This is <b>the</b> body';
        $control->Items->CalendarItem->ItemClass = Enumeration\ItemClassType::APPOINTMENT;
        $control->Items->CalendarItem->Sensitivity = Enumeration\SensitivityChoicesType::NORMAL;
        $control->Items->CalendarItem->Categories = array('Testing', 'php-ews');
        $control->Items->CalendarItem->Importance = Enumeration\ImportanceChoicesType::NORMAL;

        /** Creating the first object to test */
        $requestOne = new Type\CreateItemType();
        $requestOne->Items = new Type\ArrayOfTypes();

        $eventOne = new Type\CalendarItem();
        $eventOne->Start = $start->format('c');
        $eventOne->End = $end->format('c');

        $eventOne->Body = new Type\BodyType();
        $eventOne->Body->BodyType = Enumeration\BodyTypeType::HTML;
        $eventOne->Body->_ = 'This is <b>the</b> body';

        $eventOne->ItemClass = new Enumeration\ItemClassType();
        $eventOne->ItemClass->_ = Enumeration\ItemClassType::APPOINTMENT;

        $eventOne->Sensitivity = new Enumeration\SensitivityChoicesType();
        $eventOne->Sensitivity->_ = Enumeration\SensitivityChoicesType::NORMAL;

        $eventOne->Categories = array('Testing', 'php-ews');

        $eventOne->Importance = new Enumeration\ImportanceChoicesType();
        $eventOne->Importance->_ = Enumeration\ImportanceChoicesType::NORMAL;

        $requestOne->Items->CalendarItem = $eventOne;

        $requestOne->SendMeetingInvitations = Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE;

        /** Creating the second object to test */
        $requestTwo = new Type();
        $requestTwo->Items = new Type();
        $requestTwo->SendMeetingInvitations = Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE;

        $eventTwo = new Type();
        $eventTwo->Start = $start->format('c');
        $eventTwo->End = $end->format('c');
        $eventTwo->Body = array(
            'BodyType' => Enumeration\BodyTypeType::HTML,
            '_value' => 'This is <b>the</b> body'
        );
        $eventTwo->ItemClass = Enumeration\ItemClassType::APPOINTMENT;
        $eventTwo->Sensitivity = Enumeration\SensitivityChoicesType::NORMAL;
        $eventTwo->Categories = array('Testing', 'php-ews');
        $eventTwo->Importance = Enumeration\ImportanceChoicesType::NORMAL;

        $requestTwo->Items->CalendarItem = $eventTwo;

        /** Creating the third object to test */
        $requestThree = array(
            'Items' => array(
                'CalendarItem' => array(
                    'Start' => $start->format('c'),
                    'End' => $end->format('c'),
                    'Body' => array(
                        'BodyType' => Enumeration\BodyTypeType::HTML,
                        '_value' => 'This is <b>the</b> body'
                    ),
                    'ItemClass' => Enumeration\ItemClassType::APPOINTMENT,
                    'Sensitivity' => Enumeration\SensitivityChoicesType::NORMAL,
                    'Categories' => array('Testing', 'php-ews'),
                    'Importance' => Enumeration\ImportanceChoicesType::NORMAL
                )
            ),
            'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE
        );

        $requestThree = Type::buildFromArray($requestThree);

        $this->assertEquals($control->toXmlObject(), $requestOne->toXmlObject());
        $this->assertEquals($control->toXmlObject(), $requestTwo->toXmlObject());
        $this->assertEquals($control->toXmlObject(), $requestThree->toXmlObject());

        $object = new Type();
        $object->_value = 'Test';
        $object = $object->toXmlObject();

        $this->assertEquals('Test', $object->_);
        $this->assertEquals('Test', (string) $object);
    }

    /**
     * @dataProvider toStringProvider
     */
    public function testToString($string, $expected)
    {
        $type = $this->getTypeMock();
        $type->_ = $string;
        $this->assertEquals($expected, $type->__toString());
        $this->assertEquals($expected, (string) $type);
    }

    public function testClone()
    {
        $start = new DateTime('8:00 AM');
        $end = new DateTime('9:00 AM');

        $request = array(
            'Items' => array(
                'CalendarItem' => array(
                    'Start' => $start->format('c'),
                    'End' => $end->format('c'),
                    'Body' => array(
                        'BodyType' => Enumeration\BodyTypeType::HTML,
                        '_value' => 'This is <b>the</b> body'
                    ),
                    'ItemClass' => Enumeration\ItemClassType::APPOINTMENT,
                    'Sensitivity' => Enumeration\SensitivityChoicesType::NORMAL,
                    'Categories' => array('Testing', 'php-ews'),
                    'Importance' => Enumeration\ImportanceChoicesType::NORMAL
                )
            ),
            'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE
        );

        $request = Type::buildFromArray($request);

        $this->assertEquals($request, clone $request);
    }

    public function arrayAssocProvider()
    {
        return array(
            array(array(), false),
            array(array(1,2,3), false),
            array(array('One', 'Two', 'Three'), false),
            array(array('One'=>1, 'Two'=>2, 'Three'=>3), true),
            array(array('One'=>1, '2', '3'), true)
        );
    }

    public function toStringProvider()
    {
        return array(
            array(null, ''),
            array(false, ''),
            array(1, ''),
            array(new \stdClass(), ''),
            array('one', 'one')
        );
    }
}
