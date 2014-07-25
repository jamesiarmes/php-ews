<?php

namespace spec\PhpEws\Console;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApplicationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PhpEws\Console\Application');
    }

    function it_is_a_Symfony_Console_Application()
    {
        $this->shouldHaveType('Symfony\Component\Console\Application');
    }

    function it_is_called_PhpEws()
    {
        $this->getName()->shouldReturn('PhpEws');
    }

    function it_is_versioned()
    {
        $this->getVersion()->shouldNotReturn('UNKNOWN');
    }
}
