<?php 

//所有由用户访问到的页面都得先加载init.php

require('./include/init.php');


$conf = conf::getIns();
echo $conf->host;
echo $conf->template = 'dir';