<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscription::create([
            'name' => 'Free',
            'description' => 'free plan'
        ]);
        Subscription::create([
            'name' => 'Basic',
            'description' => 'Basic plan',
            'cost' => 5
        ]);
        Subscription::create([
            'name' => 'Starter',
            'description' => 'starter plan',
            'cost' => 12
        ]);
        Subscription::create([
            'name' => 'Business',
            'description' => 'business plan',
            'cost' => 25
        ]);
    }
}
