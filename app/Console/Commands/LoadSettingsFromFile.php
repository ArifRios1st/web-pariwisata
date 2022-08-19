<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Settings;
use Illuminate\Support\Arr;

class LoadSettingsFromFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'settings:load-file';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Load settings from file, this command is not overriding db values.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $settings = Arr::dot(require config_path('settings.php'));
        foreach ($settings as $key => $value) {
            Settings::query()
                ->firstOrCreate([
                    'key' => $key,
                ], [
                    'value' => $value,
                ]);
        }

        Settings::refreshCache();

        $this->info('Setting file has been loaded successfully.');

        return Command::SUCCESS;
    }
}
