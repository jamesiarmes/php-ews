<?php

namespace jamesiarmes\PEWS\Test\API;

use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\API\Message;
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

    /**
     * @expectedException \Exception
     */
    public function testMagicCallFail()
    {
        $calendarItem = new Type\CalendarItemType();
        $calendarItem->getSomethingRandom();
    }

    public function testCast()
    {
        $calendarItem = new Type\CalendarItemType();
        $actual = $calendarItem->cast('2015-07-01', 'DateTime');

        $this->assertEquals(new \DateTime('2015-07-01'), $actual);
    }

    public function testSetCasting()
    {
        $calendarItem = new Type\CalendarItemType();
        $dateTime = $calendarItem->setStart('2015-07-01')
            ->getStart();

        $this->assertEquals(new \DateTime('2015-07-01'), $dateTime);
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

        $calendarItem = Type\CalendarItemType::buildFromArray(array(
            'Subject' => 'Test'
        ));

        $calendarControl = new Type\CalendarItemType();
        $calendarControl->setSubject('Test');

        $this->assertEquals($calendarControl, $calendarItem);
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
