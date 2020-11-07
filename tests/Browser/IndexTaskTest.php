<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class IndexTaskTest extends DuskTestCase
{
    
    /**
     * @test
     */
    public function Todoが正常に登録できること()
    {
        $this->artisan('migrate:refresh');

        $this->browse(function (Browser $browser) {
            $browser->visit(route('tasks.create'))
                    ->assertSee('Todo 登録')
                    ->type('task', 'てすと')
                    ->press('登録')
                    ->assertSee('登録しました。');
        });
    }
}
