<?php

namespace Database\Seeders;

use App\Models\Setting\DocumentDefault;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed 10 invoices without line items
        DocumentDefault::factory(1)
            ->create();

    
    }
}
