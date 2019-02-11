<?php
use think\Console;
use hongweizhiyuan\PrintVersion;

Console::init(false)->add(new PrintVersion, '');