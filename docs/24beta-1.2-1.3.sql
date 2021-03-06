SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

SET NAMES UTF8;

BEGIN;
INSERT INTO `cd_config` VALUES (null, '14', 'auto_remote_image_local', '0', '0', '图片本地化', '后台发表修改文章的时候自动将内容中的图片本地化，0为关闭，1为开启');
INSERT INTO `cd_config` VALUES (null, '22', 'mobile_post_list_page_count', '8', '0', '手机网站每页显示文章数量', '手机网站每页显示文章数量');
INSERT INTO `cd_config` VALUES (null, '22', 'mobileSummaryHtmlTags', '<img>', '0', '手机网站概述中允许使用的html标签', '手机网站概述中允许使用的html标签，可以自行添加，如：<b><img>');
COMMIT;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
