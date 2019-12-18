<?php
require_once 'tb.php';
use PHPUnit\Framework\TestCase;
class trungbinhcongtest extends TestCase {
    
    function test_trungbinhcong() {
        $this->assertEquals(2, trungbinhcong(3, 1));
    }
}

