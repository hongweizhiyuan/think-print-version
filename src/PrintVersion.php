<?php
namespace hongweizhiyuan;

use think\App;
use think\console\Command;
use think\console\Input;
use think\console\Output;

class PrintVersion extends Command
{

    protected function configure()
    {
        //php think version
        $this->setName('tpversion')
            ->setDescription('it will print current thinkphp5 version.');
    }

    protected function execute(Input $input, Output $output)
    {
        $output->write('current thinkphp5 version is:'.App::VERSION);
    }
}