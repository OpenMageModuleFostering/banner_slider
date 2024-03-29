<?php
$installer = $this;
$installer->startSetup();
$installer->run("
-- DROP TABLE IF EXISTS {$this->getTable('banner')};
CREATE TABLE {$this->getTable('banner')} (
  `banner_id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `filename` varchar(255) NOT NULL default '',
  `content` text NULL default '',  
  `link` varchar(255) NULL default '',
  `buynow` smallint(6) NOT NULL default '0',
  `status` smallint(6) NOT NULL default '0',
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ");
$installer->endSetup();