<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1:3300;dbname=p2111',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
/*
CREATE TABLE `feed` (
  `code` CHAR(6) NOT NULL PRIMARY KEY,
  `name` CHAR(32) NOT NULL,
  `protein` INT(3) NOT NULL DEFAULT '0',
  `fat` INT(3) NOT NULL DEFAULT '0',
  `carbohydrate` INT(3) NOT NULL DEFAULT '0',
  `Na` INT(3) NOT NULL DEFAULT '0',
  `K` INT(3) NOT NULL DEFAULT '0',
  `Ca` INT(3) NOT NULL DEFAULT '0',
  `Mg` INT(3) NOT NULL DEFAULT '0',
  `P` INT(3) NOT NULL DEFAULT '0',
  `Fe` INT(3) NOT NULL DEFAULT '0',
  `vCarotin` INT(3) NOT NULL DEFAULT '0',
  `vA` INT(3) NOT NULL DEFAULT '0',
  `vB1` INT(3) NOT NULL DEFAULT '0',
  `vPP` INT(3) NOT NULL DEFAULT '0',
  `vC` INT(3) NOT NULL DEFAULT '0',
  `energyValue` INT(4) NOT NULL DEFAULT '0',
  `partInedible` INT(2) NOT NULL DEFAULT '0'

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `feed`(`name`, `protein`, `fat`, `carbohydrate`) VALUES
('buckwheat', 126, 33, 621),
('grutsCorn', 83, 12, 716),
('oatWheat', 110, 62, 501),
('breadWheat', 79, 10, 481),
('sugar', 0, 0, 999),
('cacoa', 242, 175, 279),
('milk', 28, 32, 47),
('pork', 143, 333, 0),
('beef liver', 179, 37, 0),
('chiken', 187, 161, 5),
('fish Capelin', 131, 71, 0),
('scomber', 234, 64, 0),
('eggs', 125, 115, 0),
('sunflowerOil', 0, 100, 0);

('AU','Australia',24016400);

<textarea id="log"></textarea>
<style type="text/css">
	#log{
		height: 120px;
		width: 350px;
		display: block;
		box-sizing: border-box;
	}
</style>
container.onmouseenter=handler;

*/
