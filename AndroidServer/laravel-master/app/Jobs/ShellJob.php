<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShellJob extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    private $shellPath;
    private $userVideoFullName;
    private $standardVideoFullName;
    private $frontStatus;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($shell, $user, $standard, $front)
    {
        $this->shellPath = $shell;
        $this->userVideoFullName = $user;
        $this->standardVideoFullName = $standard;
        $this->frontStatus = $front;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        $process = new Process($shellPath.' '.$userVideoFullName.' '.$standardVideoFullName.' '.'30'.' '.$frontStatus);
//        $process->start();
//
//        while ($process->isRunning()) {
//            //  waiting for process to finish
//        }

        $angleValue = env('ANGLEVALUE', 30);
       // exec($this->shellPath.' '.$this->userVideoFullName.' '.$this->standardVideoFullName.' '.'30'.' '.$this->frontStatus);
        //shell_exec()
        throw new Exception('an error!!!!!!!!!!!!!!');
    }

}
