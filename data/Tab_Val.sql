/*
Navicat MySQL Data Transfer

Source Server         : Server_Mysql_online
Source Server Version : 50541
Source Host           : 202.53.254.83:3306
Source Database       : report

Target Server Type    : MYSQL
Target Server Version : 50541
File Encoding         : 65001

Date: 2015-04-20 19:45:36
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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Tab_Val
-- ----------------------------
INSERT INTO `Tab_Val` VALUES ('1', 'Total_Member', '1407', '2015-04-16', null);
INSERT INTO `Tab_Val` VALUES ('2', 'Total_ Card', '4251', '2015-04-09', null);
INSERT INTO `Tab_Val` VALUES ('8', 'Top5_Member', null, '2015-04-20', '[{ country: \"Wong Yung Fong\", total: \"3,939,200\" },{ country: \"Imelda Jeni\", total: \"4,818,300\" },{ country: \"Darmawi\", total: \"5,187,500\" },{ country: \"Agus Diyanto\", total: \"5,390,800\" },{ country: \"JM. Dewiyani\", total: \"10,608,300\" }]');
INSERT INTO `Tab_Val` VALUES ('9', 'Top5_Tenant', null, '2015-04-20', '[{ country: \"Bakwan Duta\", total: \"2,716,784,200\" },{ country: \"Soto Betawi Mangga Besar 8\", total: \"3,488,322,500\" },{ country: \"Putra Kenanga\", total: \"3,857,928,050\" },{ country: \"Bakmi Ayam Alok\", total: \"4,622,971,500\" },{ country: \"Beverage\", total: \"7,695,392,570\" }]');
INSERT INTO `Tab_Val` VALUES ('10', 'Top5_Member_Month', null, '2015-04-20', '[{\"nama\":\"MARIA ANTOINETTE.T\", \"grandtotal\":\"993,500\" },{\"nama\":\"Borai\", \"grandtotal\":\"591,000\" },{\"nama\":\"Amalia Setoputri\", \"grandtotal\":\"478,500\" },{\"nama\":\"Fanny\", \"grandtotal\":\"413,000\" },{\"nama\":\"Imelda Jeni\", \"grandtotal\":\"374,000\" }]');
INSERT INTO `Tab_Val` VALUES ('11', 'Top5_Member_Year', null, '2015-04-20', '[{\"nama\":\"DAVIN VARANDI\", \"grandtotal\":\"1,978,000\" },{\"nama\":\"Imelda Jeni\", \"grandtotal\":\"1,480,500\" },{\"nama\":\"Siska Benyamin\", \"grandtotal\":\"1,249,000\" },{\"nama\":\"Amalia Setoputri\", \"grandtotal\":\"1,082,500\" },{\"nama\":\"G. Suganda\", \"grandtotal\":\"1,054,500\" }]');
INSERT INTO `Tab_Val` VALUES ('12', 'Top5_Tenant_Month', null, '2015-04-20', '[{\"nama\":\"Beverage\", \"grandtotal\":\"119,977,150\" },{\"nama\":\"Bakmi Ayam Alok\", \"grandtotal\":\"75,312,500\" },{\"nama\":\"Soto Betawi Mangga Besar 8\", \"grandtotal\":\"61,801,000\" },{\"nama\":\"Bakwan Duta\", \"grandtotal\":\"52,407,050\" },{\"nama\":\"Kuetiau Akang\", \"grandtotal\":\"48,454,000\" }]');
INSERT INTO `Tab_Val` VALUES ('13', 'Top5_Tenant_Year', null, '2015-04-20', '[{\"nama\":\"Beverage\", \"grandtotal\":\"589,970,653\" },{\"nama\":\"Bakmi Ayam Alok\", \"grandtotal\":\"438,835,500\" },{\"nama\":\"Soto Betawi Mangga Besar 8\", \"grandtotal\":\"323,853,500\" },{\"nama\":\"Putra Kenanga\", \"grandtotal\":\"300,750,000\" },{\"nama\":\"Bakwan Duta\", \"grandtotal\":\"287,839,300\" }]');
INSERT INTO `Tab_Val` VALUES ('16', 'Top5_Tenant_New', null, '2015-04-20', '[{\"nama\":\"Bakut Mumu\", \"grandtotal\":\"079\" },{\"nama\":\"Lapo Ni Tondongta\", \"grandtotal\":\"078\" },{\"nama\":\"Bakmi Kepiting 177 Pontianak\", \"grandtotal\":\"077\" },{\"nama\":\"Lamian Jia\", \"grandtotal\":\"076\" },{\"nama\":\"Tasty\", \"grandtotal\":\"075\" }]');
INSERT INTO `Tab_Val` VALUES ('17', 'Top5_Member_New', null, '2015-04-20', '[{\"nama\":\"0009891310\", \"grandtotal\":\"11 Apr 2015\" },{\"nama\":\"0009905628\", \"grandtotal\":\"11 Apr 2015\" },{\"nama\":\"0009898905\", \"grandtotal\":\"11 Apr 2015\" },{\"nama\":\"0009885400\", \"grandtotal\":\"11 Apr 2015\" },{\"nama\":\"TIGER LIE\", \"grandtotal\":\"11 Apr 2015\" }]');
INSERT INTO `Tab_Val` VALUES ('19', 'Total_Member_Hari', '39', '2015-04-20', null);
INSERT INTO `Tab_Val` VALUES ('20', 'Total_Trans_Hari', '202', '2015-04-20', '[{jam:10,trans:12},{jam:11,trans:30},{jam:12,trans:50}]');
INSERT INTO `Tab_Val` VALUES ('21', 'Total_Grand_Hari', '7074900', '2015-04-20', null);
INSERT INTO `Tab_Val` VALUES ('22', 'Data_Member', null, null, null);
INSERT INTO `Tab_Val` VALUES ('23', 'Data_Tenant', null, null, null);
INSERT INTO `Tab_Val` VALUES ('24', 'Member', '1446', '2015-04-20', null);
INSERT INTO `Tab_Val` VALUES ('25', 'Trans_Years_All', null, '2015-04-20', '[{ month: \"January\", 2012: 233500853, 2013: 1339185060, 2014: 1323502672, 2015: 1139712153, },{ month: \"February\", 2012: 693110367, 2013: 1090627580, 2014: 1031350363, 2015: 895329600, },{ month: \"March\", 2012: 826079100, 2013: 1454338524, 2014: 1202240158, 2015: 959947500, },{ month: \"April\", 2012: 991157400, 2013: 1234405807, 2014: 1116790107, 2015: 691958650, },{ month: \"May\", 2012: 1107767200, 2013: 1212126552, 2014: 1396030969, },{ month: \"June\", 2012: 1222950450, 2013: 1524952431, 2014: 1190556556, },{ month: \"July\", 2012: 1524359500, 2013: 1361347606, 2014: 1491774133, },{ month: \"August\", 2012: 1752258300, 2013: 1777938852, 2014: 1164637816, },{ month: \"September\", 2012: 1146465900, 2013: 1089036701, 2014: 875905715, },{ month: \"October\", 2012: 1167461050, 2013: 1189376351, 2014: 1028788508, },{ month: \"November\", 2012: 1234354602, 2013: 1240972466, 2014: 988082066, },{ month: \"December\", 2012: 1551355002, 2013: 1604124647, 2014: 1252990908, }]');
INSERT INTO `Tab_Val` VALUES ('27', 'Total_Hour_Hari', null, '2015-04-20', '[{ tgl: \"2015-04-20\", jam: 11, total: 29, grand: 1025000 },{ tgl: \"2015-04-20\", jam: 12, total: 53, grand: 1772500 },{ tgl: \"2015-04-20\", jam: 13, total: 32, grand: 1108000 },{ tgl: \"2015-04-20\", jam: 14, total: 35, grand: 1442500 },{ tgl: \"2015-04-20\", jam: 15, total: 20, grand: 717400 },{ tgl: \"2015-04-20\", jam: 16, total: 28, grand: 879000 },{ tgl: \"2015-04-20\", jam: 17, total: 5, grand: 130500 }]');
