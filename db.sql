#shop_status = 1 hot
#shop_status = 0 new
CREATE TABLE IF NOT EXISTS `shop` (
  `shop_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(100) NOT NULL,
  `shop_addr` varchar(255) NOT NULL,
  `shop_tel` varchar(20) NOT NULL,
  `shop_img` varchar(255) NOT NULL,
  `shop_intro` longtext NOT NULL,
  `shop_services` varchar(255) NOT NULL,
  `shop_status` smallint(4) NOT NULL DEFAULT 0,
  `shop_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` bigint(20) unsigned NOT NULL,
  `nick_name` varchar(100) NOT NULL,
  `comment_content` text NOT NULL,
  `rank` smallint(3) NOT NULL DEFAULT 0,
  `ip` varchar(20) NOT NULL DEFAULT 'localhost',
  `comment_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `coupon` (
  `coupon_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` bigint(20) unsigned NOT NULL,
  `coupon_content` text NOT NULL,
  `start_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `add_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`coupon_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# type: 
# 0 => 人才招聘
# 1 => 房源信息
# 2 => 家政服务
# 3 => 教育培训
# 4 => 二手信息
#
CREATE TABLE IF NOT EXISTS `leaflet` (
	`leaflet_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
	`content` longtext NOT NULL,
	`type` smallint(4) NOT NULL,
	`add_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;