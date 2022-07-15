<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ToolsApiTest extends TestCase
{
    /**
     * Test the palindrome tool.
     *
     * @return void
     */
    public function testPalindromeTool(): void
    {
        $response = $this->get('/api/palindrome/level');

        $response->assertStatus(200);
        $response->assertJsonPath('data.result', true);
    }

    /**
     * Test the symbol frequency tool.
     *
     * @return void
     */
    public function testSymbolFrequencyTool(): void
    {
        $response = $this->get('/api/string-frequency/abccdceff');

        $response->assertStatus(200);
        $response->assertJsonPath('data.result', 'c');
    }
}
