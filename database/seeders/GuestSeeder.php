<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Guest;
use App\Models\Party;
use App\Models\Table;
use Illuminate\Database\Seeder;

final class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // add 200 guests to 50 table of 4 seats each (50 * 4 = 200) for one party
        $party = Party::factory()->create();
        $tables = Table::factory()->count(50)->create(['party_id' => $party->id]);
        $guests = Guest::factory()->count(200)->create();
        $guests->each(function (Guest $guest) use ($tables) {
            $table = $tables->random();
            $guest->table_id = $table->id;
            $guest->save();
            if ($table->seats > 0) {
                $table->seats -= 1;
                $table->save();
            }
        });
    }
}
