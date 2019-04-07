<?php

use App\Ticket;
use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ticket::truncate();
        for ($e = 1; $e <= 50; $e++) {
            $rows = rand(7, 30);
            $price = rand(50, 200) / 10;
            for ($r = 1; $r < $rows; $r++) {
                $seats = rand(7, 40);
                for ($s = 1; $s < $seats; $s++) {
                    Ticket::create(array('event_id' => $e, 'row' => $r, 'seat' => $s, 'price' => $price - $r / 10));                    
                }
            }
        }
    }
}
