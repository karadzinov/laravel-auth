<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;

class ping extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ping username for welcome message';

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
     * @return mixed
     */
    public function handle()
    {
        self::request();
    }

    public static function request()
    {
        $browser = request()->userAgent();
        $ip = request()->ip();
        $server = request()->server();
        $exec_loads = sys_getloadavg();
        $exec_cores = trim(shell_exec("grep -P '^processor' /proc/cpuinfo|wc -l"));
        $cpu = round($exec_loads[1]/($exec_cores + 1)*100, 0) . '%';


        $exec_free = explode("\n", trim(shell_exec('free')));
        $get_mem = preg_split("/[\s]+/", $exec_free[1]);
        $mem = round($get_mem[2]/$get_mem[1]*100, 0) . '%';

        $exec_uptime = preg_split("/[\s]+/", trim(shell_exec('uptime')));
        $uptime = $exec_uptime[2] . ' Days';

        $data = ["cpu" => $cpu, "mem" => $mem, "uptime" => $uptime, "browser" => $browser, "ip" => $ip, "server" => $server];
        dd($data);

    }
}
