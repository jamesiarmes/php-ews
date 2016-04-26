<?php
/**
 * Created by PhpStorm.
 * User: gareth
 * Date: 20-7-15
 * Time: 16:37
 */

namespace jamesiarmes\PEWS\Test;

use jamesiarmes\PEWS\Caster;

class CasterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $input
     * @param $type
     * @param $expected
     *
     * @dataProvider castProvider
     */
    public function testCast($input, $type, $expected)
    {
        $this->assertEquals($expected, Caster::cast($input, $type));
    }

    /**
     * @param $from
     * @param $to
     * @param $expected
     *
     * @dataProvider castExistsProvider
     */
    public function testCastExists($from, $to, $expected)
    {
        $this->assertEquals($expected, Caster::castExists($from, $to));
    }

    public function castProvider()
    {
        return array(
            //DateTime caster
            array('2015-07-01', 'DateTime', new \DateTime('2015-07-01')),
            array(new \DateTime('2015-07-01'), 'ExchangeFormat', (new \DateTime('2015-07-01'))->format('c')),

            //Time caster
            array('2015-07-01 09:00:00', 'time', new \DateTime('2015-07-01 09:00:00')),

            //Date caster
            array('2015-07-01 09:00:00', 'time', new \DateTime('2015-07-01 09:00:00')),

            //dateTime caster
            array('2015-07-01 09:00:00', 'time', new \DateTime('2015-07-01 09:00:00')),

            //Same to Same
            array(new \DateTime('2015-07-01'), 'DateTime', new \DateTime('2015-07-01')),

            //String to Exchange
            array('Hello World', 'ExchangeFormat', 'Hello World'),

            //No conversion
            array('String', 'int', null)
        );
    }

    public function castExistsProvider()
    {
        return array(
            array('string', 'date', true),
            array('string', 'time', true),
            array('string', 'dateTime', true),
            array('string', 'DateTime', true),

            array('date', 'ExchangeFormat', true),
            array('time', 'ExchangeFormat', true),
            array('dateTime', 'ExchangeFormat', true),
            array('DateTime', 'ExchangeFormat', true)
        );
    }
}
