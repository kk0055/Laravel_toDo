<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexTaskTest extends TestCase
{
  /**
 * @test
 */

    public function Todo一覧ページに正常アクセスできること()
    {
        $response = $this->get(route('tasks.index'));

        $response->assertStatus(200);
    }
}
