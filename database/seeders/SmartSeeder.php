<?php

namespace Database\Seeders;

use App\Models\System\Seed;
use Illuminate\Database\Seeder;
use Illuminate\Console\OutputStyle;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Helper\ProgressBar;

abstract class SmartSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (!Seed::whereName(static::class)->count()) {
            $this->seed();
            Seed::factory()->create([
                'name' => static::class,
            ]);
        } else {
            $this->message(static::class . ' already seeded.');
        }
    }

    public abstract function seed();

    protected function message($msg)
    {
        if (isset($this->command)) {
            $this->command->getOutput()->writeln($msg);
        }
    }

    /**
     * Получить экзмепляр класса Progress Bar для дальнейшей работы с ним
     *
     * @param int $units
     * @param string|null $message
     *
     * @return ProgressBar
     */
    protected function getProgressBar(int $units, string $message = null)
    {
        $output = new OutputStyle(new StringInput(''), $this->command->getOutput());

        if ($units != 0) {
            $progressBar = new ProgressBar($output, $units);

            $progressBar->setFormatDefinition('custom', "%message%\n %current%/%max% [%bar%] %percent:3s%% %elapsed:6s%/%estimated:-6s%");
            $progressBar->setFormat('custom');
            $progressBar->setRedrawFrequency(round($units * 0.01));
        } else {
            $progressBar = new ProgressBar($output);
        }

        if ($message) {
            $progressBar->setMessage($message);
        }

        $progressBar->start();

        return $progressBar;
    }
}
