<?php
namespace App;

use PHPUnit\Framework\TestCase;
use App\CountSmileys;

class CountSmileysTest extends TestCase
{
    public function count_smileys_test()
    {
        $test = new CountSmileys();
        $this->assertEquals(0, $test->count_smileys([]));
        $this->assertEquals(4, $test->count_smileys([':D',':~)',';~D',':)']));
        $this->assertEquals(2, $test->count_smileys([':)',':(',':D',':O',':;']));
        $this->assertEquals(1, $test->count_smileys([';]', ':[', ';*', ':$', ';-D']));
    }

    public function count_smileys_with_pregmatch_test()
    {
        $test = new CountSmileys();
        $this->assertEquals(0, $test->count_smileys([]));
        $this->assertEquals(4, $test->count_smileys([':D',':~)',';~D',':)']));
        $this->assertEquals(2, $test->count_smileys([':)',':(',':D',':O',':;']));
        $this->assertEquals(1, $test->count_smileys([';]', ':[', ';*', ':$', ';-D']));
    }
}
