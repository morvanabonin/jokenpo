<?php
use PHPUnit\Framework\TestCase;
use Jokenpo\Jokenpo as Jokenpo;

/**
 * @property Jokenpo jokenpo
 */
class JokenpoTest extends TestCase
{
    public $jokenpo;

    //Initialize the test case. Called for every defined test
    public function setUp() : void {
        $this->jokenpo = new Jokenpo();
    }

    public function testInt() : void {
        $ret = $this->jokenpo->play();
        $this->assertIsInt($ret);
    }

    public function testIfDeadlock() : void {
        $player1 = 0;
        $player2 = 0;
        $ret = $this->jokenpo->winner($player1, $player2);
        $this->assertEquals($ret, 'Deadlock');
    }

    public function testIfPaperBeats() : void {
        $player1 = 1;
        $player2 = 0;
        $ret = $this->jokenpo->winner($player1, $player2);
        $this->assertIsString($ret);
        $this->assertEquals($ret, 'Paper beats Rock');
    }

    public function testIfRockBeats() : void {
        $player1 = 0;
        $player2 = 2;
        $ret = $this->jokenpo->winner($player1, $player2);
        $this->assertIsString($ret);
        $this->assertEquals($ret, 'Rock beats Scissors');
    }

    public function testIfScissorsBeats() : void {
        $player1 = 2;
        $player2 = 1;
        $ret = $this->jokenpo->winner($player1, $player2);
        $this->assertIsString($ret);
        $this->assertEquals($ret, 'Scissors beats Paper');
    }

    // Clean up the test case, called for every defined test
    public function tearDown() :void { }
}

