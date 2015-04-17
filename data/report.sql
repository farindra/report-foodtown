/*
Navicat MySQL Data Transfer

Source Server         : ServerLinux
Source Server Version : 50541
Source Host           : 10.10.99.3:3306
Source Database       : report

Target Server Type    : MYSQL
Target Server Version : 50541
File Encoding         : 65001

Date: 2015-04-17 17:48:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `Tab_Val`
-- ----------------------------
DROP TABLE IF EXISTS `Tab_Val`;
CREATE TABLE `Tab_Val` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `Val_Nm` varchar(100) DEFAULT NULL,
  `Val_1` int(11) DEFAULT NULL,
  `UPDT` date DEFAULT NULL,
  `Val_Json` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Tab_Val
-- ----------------------------
INSERT INTO `Tab_Val` VALUES ('1', 'Member', '1407', '2015-04-16', null);
INSERT INTO `Tab_Val` VALUES ('2', 'Card', '4251', '2015-04-09', null);
INSERT INTO `Tab_Val` VALUES ('8', 'Top5_Member', null, '2015-04-16', '[{ country: \"Wong Yung Fong\", total: \"3,939,200\" },{ country: \"Imelda Jeni\", total: \"4,792,300\" },{ country: \"Darmawi\", total: \"5,187,500\" },{ country: \"Agus Diyanto\", total: \"5,390,800\" },{ country: \"JM. Dewiyani\", total: \"10,608,300\" }]');
INSERT INTO `Tab_Val` VALUES ('9', 'Top5_Tenant', null, '2015-04-16', '[{ country: \"Bakwan Duta\", total: \"2,705,867,150\" },{ country: \"Soto Betawi Mangga Besar 8\", total: \"3,474,929,000\" },{ country: \"Putra Kenanga\", total: \"3,846,228,050\" },{ country: \"Bakmi Ayam Alok\", total: \"4,605,846,500\" },{ country: \"Beverage\", total: \"7,668,366,370\" }]');
INSERT INTO `Tab_Val` VALUES ('10', 'Top5_Member_Month', null, '2015-04-16', '[{\"nama\":\"JONATHAN LEONARDO\", \"grandtotal\":\"592,000\" },{\"nama\":\"Borai\", \"grandtotal\":\"591,000\" },{\"nama\":\"Fanny\", \"grandtotal\":\"413,000\" },{\"nama\":\"Imelda Jeni\", \"grandtotal\":\"348,000\" },{\"nama\":\"Robby G\", \"grandtotal\":\"305,500\" }]');
INSERT INTO `Tab_Val` VALUES ('11', 'Top5_Member_Year', null, '2015-04-16', '[{\"nama\":\"DAVIN VARANDI\", \"grandtotal\":\"1,798,000\" },{\"nama\":\"Imelda Jeni\", \"grandtotal\":\"1,454,500\" },{\"nama\":\"Siska Benyamin\", \"grandtotal\":\"1,249,000\" },{\"nama\":\"G. Suganda\", \"grandtotal\":\"1,054,500\" },{\"nama\":\"Angelina\", \"grandtotal\":\"1,046,500\" }]');
INSERT INTO `Tab_Val` VALUES ('12', 'Top5_Tenant_Month', null, '2015-04-16', '[{\"nama\":\"Beverage\", \"grandtotal\":\"92,950,950\" },{\"nama\":\"Bakmi Ayam Alok\", \"grandtotal\":\"58,187,500\" },{\"nama\":\"Soto Betawi Mangga Besar 8\", \"grandtotal\":\"48,407,500\" },{\"nama\":\"Bakwan Duta\", \"grandtotal\":\"41,490,000\" },{\"nama\":\"Kuetiau Akang\", \"grandtotal\":\"38,355,000\" }]');
INSERT INTO `Tab_Val` VALUES ('13', 'Top5_Tenant_Year', null, '2015-04-16', '[{\"nama\":\"Beverage\", \"grandtotal\":\"562,944,453\" },{\"nama\":\"Bakmi Ayam Alok\", \"grandtotal\":\"421,710,500\" },{\"nama\":\"Soto Betawi Mangga Besar 8\", \"grandtotal\":\"310,460,000\" },{\"nama\":\"Putra Kenanga\", \"grandtotal\":\"289,050,000\" },{\"nama\":\"Bakwan Duta\", \"grandtotal\":\"276,922,250\" }]');
INSERT INTO `Tab_Val` VALUES ('16', 'Top5_Tenant_New', null, '2015-04-16', '[{\"nama\":\"Bakut Mumu\", \"grandtotal\":\"079\" },{\"nama\":\"Lapo Ni Tondongta\", \"grandtotal\":\"078\" },{\"nama\":\"Bakmi Kepiting 177 Pontianak\", \"grandtotal\":\"077\" },{\"nama\":\"Lamian Jia\", \"grandtotal\":\"076\" },{\"nama\":\"Tasty\", \"grandtotal\":\"075\" }]');
INSERT INTO `Tab_Val` VALUES ('17', 'Top5_Member_New', null, '2015-04-16', '[{\"nama\":\"0009891310\", \"grandtotal\":\"11 Apr 2015\" },{\"nama\":\"0009905628\", \"grandtotal\":\"11 Apr 2015\" },{\"nama\":\"0009898905\", \"grandtotal\":\"11 Apr 2015\" },{\"nama\":\"0009885400\", \"grandtotal\":\"11 Apr 2015\" },{\"nama\":\"TIGER LIE\", \"grandtotal\":\"11 Apr 2015\" }]');
INSERT INTO `Tab_Val` VALUES ('18', 'Trans_Years_All', null, '2015-04-16', '[{ month: \"January\", 2012: 233500853, 2013: 1339185060, 2014: 1323502672, 2015: 1139712153, },{ month: \"February\", 2012: 693110367, 2013: 1090627580, 2014: 1031350363, 2015: 895329600, },{ month: \"March\", 2012: 826079100, 2013: 1454338524, 2014: 1202240158, 2015: 959947500, },{ month: \"April\", 2012: 991157400, 2013: 1234405807, 2014: 1116790107, 2015: 539224700, },{ month: \"May\", 2012: 1107767200, 2013: 1212126552, 2014: 1396030969, },{ month: \"June\", 2012: 1222950450, 2013: 1524952431, 2014: 1190556556, },{ month: \"July\", 2012: 1524359500, 2013: 1361347606, 2014: 1491774133, },{ month: \"August\", 2012: 1752258300, 2013: 1777938852, 2014: 1164637816, },{ month: \"September\", 2012: 1146465900, 2013: 1089036701, 2014: 875905715, },{ month: \"October\", 2012: 1167461050, 2013: 1189376351, 2014: 1028788508, },{ month: \"November\", 2012: 1234354602, 2013: 1240972466, 2014: 988082066, },{ month: \"December\", 2012: 1551355002, 2013: 1604124647, 2014: 1252990908, }]');
