/*
Navicat MySQL Data Transfer

Source Server         : ServerLinux
Source Server Version : 50541
Source Host           : 10.10.99.3:3306
Source Database       : report

Target Server Type    : MYSQL
Target Server Version : 50541
File Encoding         : 65001

Date: 2015-05-03 08:34:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `Tab_User`
-- ----------------------------
DROP TABLE IF EXISTS `Tab_User`;
CREATE TABLE `Tab_User` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `UPDT` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `level` int(11) DEFAULT '3',
  PRIMARY KEY (`Id`,`user`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Tab_User
-- ----------------------------
INSERT INTO `Tab_User` VALUES ('1', 'admin', 'asd123', null, '0');
INSERT INTO `Tab_User` VALUES ('2', 'demo', 'demo', null, '3');
INSERT INTO `Tab_User` VALUES ('3', 'stephen', 'asd123', null, '1');
INSERT INTO `Tab_User` VALUES ('4', 'tano', 'tano', '2015-04-22 15:54:28', '1');
INSERT INTO `Tab_User` VALUES ('5', 'ievana', 'asd123', null, '1');
INSERT INTO `Tab_User` VALUES ('6', 'erick', 'asd123', null, '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Tab_Val
-- ----------------------------
INSERT INTO `Tab_Val` VALUES ('1', 'Total_Member', '1407', '2015-04-16', null);
INSERT INTO `Tab_Val` VALUES ('2', 'Total_ Card', '4251', '2015-04-09', null);
INSERT INTO `Tab_Val` VALUES ('8', 'Top5_Member', null, '2015-04-27', '[{ country: \"Wong Yung Fong\", total: \"3,939,200\" },{ country: \"Imelda Jeni\", total: \"4,882,300\" },{ country: \"Darmawi\", total: \"5,347,500\" },{ country: \"Agus Diyanto\", total: \"5,488,800\" },{ country: \"JM. Dewiyani\", total: \"10,608,300\" }]');
INSERT INTO `Tab_Val` VALUES ('9', 'Top5_Tenant', null, '2015-04-27', '[{ country: \"Bakwan Duta\", total: \"2,734,813,200\" },{ country: \"Soto Betawi Mangga Besar 8\", total: \"3,513,635,000\" },{ country: \"Putra Kenanga\", total: \"3,878,116,050\" },{ country: \"Bakmi Ayam Alok\", total: \"4,654,423,500\" },{ country: \"Beverage\", total: \"7,738,753,470\" }]');
INSERT INTO `Tab_Val` VALUES ('10', 'Top5_Member_Month', null, '2015-05-03', '[{\"nama\":\"0009901093\", \"grandtotal\":\"387,000\" },{\"nama\":\"Lusi Liana\", \"grandtotal\":\"298,500\" },{\"nama\":\"R.DJATI UDIONO YUDHO S\", \"grandtotal\":\"264,000\" },{\"nama\":\"0009881979\", \"grandtotal\":\"232,000\" },{\"nama\":\"0009894873\", \"grandtotal\":\"173,500\" }]');
INSERT INTO `Tab_Val` VALUES ('11', 'Top5_Member_Year', null, '2015-04-27', '[{\"nama\":\"DAVIN VARANDI\", \"grandtotal\":\"1,984,000\" },{\"nama\":\"Imelda Jeni\", \"grandtotal\":\"1,544,500\" },{\"nama\":\"Siska Benyamin\", \"grandtotal\":\"1,249,000\" },{\"nama\":\"Angelina\", \"grandtotal\":\"1,211,500\" },{\"nama\":\"G. Suganda\", \"grandtotal\":\"1,105,500\" }]');
INSERT INTO `Tab_Val` VALUES ('12', 'Top5_Tenant_Month', null, '2015-05-03', '[{\"nama\":\"Beverage\", \"grandtotal\":\"28,170,000\" },{\"nama\":\"Bakmi Ayam Alok\", \"grandtotal\":\"16,248,500\" },{\"nama\":\"Soto Betawi Mangga Besar 8\", \"grandtotal\":\"13,139,500\" },{\"nama\":\"Bakwan Duta\", \"grandtotal\":\"12,894,000\" },{\"nama\":\"Putra Kenanga\", \"grandtotal\":\"11,044,500\" }]');
INSERT INTO `Tab_Val` VALUES ('13', 'Top5_Tenant_Year', null, '2015-04-27', '[{\"nama\":\"Beverage\", \"grandtotal\":\"633,331,553\" },{\"nama\":\"Bakmi Ayam Alok\", \"grandtotal\":\"470,287,500\" },{\"nama\":\"Soto Betawi Mangga Besar 8\", \"grandtotal\":\"349,166,000\" },{\"nama\":\"Putra Kenanga\", \"grandtotal\":\"320,938,000\" },{\"nama\":\"Bakwan Duta\", \"grandtotal\":\"305,868,300\" }]');
INSERT INTO `Tab_Val` VALUES ('16', 'Top5_Tenant_New', null, '2015-05-03', '[{\"nama\":\"Bakmi Medan Kebon Jahe\", \"grandtotal\":\"081\" },{\"nama\":\"Oizumi Ramen\", \"grandtotal\":\"080\" },{\"nama\":\"Bakut Mumu\", \"grandtotal\":\"079\" },{\"nama\":\"Lapo Ni Tondongta\", \"grandtotal\":\"078\" },{\"nama\":\"Bakmi Kepiting 177 Pontianak\", \"grandtotal\":\"077\" }]');
INSERT INTO `Tab_Val` VALUES ('17', 'Top5_Member_New', null, '2015-05-03', '[{\"nama\":\"Pegi Rompas\", \"grandtotal\":\"21 Apr 2015\" },{\"nama\":\"Lim Wie Liang\", \"grandtotal\":\"20 Apr 2015\" },{\"nama\":\"0009887312\", \"grandtotal\":\"20 Apr 2015\" },{\"nama\":\"David Prawira\", \"grandtotal\":\"20 Apr 2015\" },{\"nama\":\"Dinda Juniar\", \"grandtotal\":\"20 Apr 2015\" }]');
INSERT INTO `Tab_Val` VALUES ('19', 'Total_Member_Hari', '0', '2015-05-03', null);
INSERT INTO `Tab_Val` VALUES ('20', 'Total_Trans_Hari', '0', '2015-05-03', '[{jam:10,trans:12},{jam:11,trans:30},{jam:12,trans:50}]');
INSERT INTO `Tab_Val` VALUES ('21', 'Total_Grand_Hari', '0', '2015-05-03', null);
INSERT INTO `Tab_Val` VALUES ('22', 'Data_Member', null, null, null);
INSERT INTO `Tab_Val` VALUES ('23', 'Data_Tenant', null, null, null);
INSERT INTO `Tab_Val` VALUES ('24', 'Member', '1447', '2015-05-03', null);
INSERT INTO `Tab_Val` VALUES ('27', 'Total_Hour_Hari', null, '2015-05-03', '[{ tgl: \"2015-05-01\", jam: 10, 3 : 7, grand: 824000 },{ tgl: \"2015-05-01\", jam: 11, 3 : 77, grand: 3483000 },{ tgl: \"2015-05-01\", jam: 12, 3 : 166, grand: 6522500 },{ tgl: \"2015-05-01\", jam: 13, 3 : 258, grand: 10375000 },{ tgl: \"2015-05-01\", jam: 14, 3 : 204, grand: 8083000 },{ tgl: \"2015-05-01\", jam: 15, 3 : 213, grand: 8377500 },{ tgl: \"2015-05-01\", jam: 16, 3 : 171, grand: 6429000 },{ tgl: \"2015-05-01\", jam: 17, 3 : 226, grand: 9318000 },{ tgl: \"2015-05-01\", jam: 18, 3 : 281, grand: 10932500 },{ tgl: \"2015-05-01\", jam: 19, 3 : 291, grand: 11847700 },{ tgl: \"2015-05-01\", jam: 20, 3 : 228, grand: 7976800 },{ tgl: \"2015-05-01\", jam: 21, 3 : 78, grand: 2566000 },{ tgl: \"2015-05-01\", jam: 22, 3 : 3, grand: 59000 },{ tgl: \"2015-05-02\", jam: 10, 3 : 12, grand: 684500 },{ tgl: \"2015-05-02\", jam: 11, 2 : 61, grand: 2525500 },{ tgl: \"2015-05-02\", jam: 12, 2 : 150, grand: 5945500 },{ tgl: \"2015-05-02\", jam: 13, 2 : 221, grand: 8214000 },{ tgl: \"2015-05-02\", jam: 14, 2 : 218, grand: 7273000 },{ tgl: \"2015-05-02\", jam: 15, 2 : 162, grand: 5220500 },{ tgl: \"2015-05-02\", jam: 16, 2 : 129, grand: 4506000 },{ tgl: \"2015-05-02\", jam: 17, 2 : 139, grand: 4594500 },{ tgl: \"2015-05-02\", jam: 18, 2 : 209, grand: 8024500 },{ tgl: \"2015-05-02\", jam: 19, 2 : 274, grand: 9740000 },{ tgl: \"2015-05-02\", jam: 20, 2 : 224, grand: 8719500 },{ tgl: \"2015-05-02\", jam: 21, 2 : 86, grand: 3167000 },{ tgl: \"2015-05-02\", jam: 22, 2 : 4, grand: 45000 }]');
INSERT INTO `Tab_Val` VALUES ('28', 'Total_Grand_Weekly', null, '2015-05-03', '[{none:00}]');
INSERT INTO `Tab_Val` VALUES ('29', 'Update_Dash', '0', null, null);
INSERT INTO `Tab_Val` VALUES ('30', 'Trans_Years_All', null, '2015-05-03', '[{ month: \"January\", 2012: 233500853, 2013: 1339185060, 2014: 1323502672, 2015: 1139712153, },{ month: \"February\", 2012: 693110367, 2013: 1090627580, 2014: 1031350363, 2015: 895329600, },{ month: \"March\", 2012: 826079100, 2013: 1454338524, 2014: 1202240158, 2015: 959947500, },{ month: \"April\", 2012: 991157400, 2013: 1234405807, 2014: 1116790107, 2015: 1010542850, },{ month: \"May\", 2012: 1107767200, 2013: 1212126552, 2014: 1396030969, 2015: 86794000, },{ month: \"June\", 2012: 1222950450, 2013: 1524952431, 2014: 1190556556, },{ month: \"July\", 2012: 1524359500, 2013: 1361347606, 2014: 1491774133, },{ month: \"August\", 2012: 1752258300, 2013: 1777938852, 2014: 1164637816, },{ month: \"September\", 2012: 1146465900, 2013: 1089036701, 2014: 875905715, },{ month: \"October\", 2012: 1167461050, 2013: 1189376351, 2014: 1028788508, },{ month: \"November\", 2012: 1234354602, 2013: 1240972466, 2014: 988082066, },{ month: \"December\", 2012: 1551355002, 2013: 1604124647, 2014: 1252990908, }]');
INSERT INTO `Tab_Val` VALUES ('31', 'Total_Grand_Weekly_Month', null, '2015-05-03', '[{ day: 1, name: \"Monday\", total: 14.58, date: 30-Mar-2015 },{ day: 2, name: \"Tuesday\", total: 14.53, date: 31-Mar-2015 },{ day: 3, name: \"Wednesday\", total: 20.18, date: 01-Apr-2015 },{ day: 4, name: \"Thursday\", total: 24.16, date: 02-Apr-2015 },{ day: 5, name: \"Friday\", total: 78.48, date: 03-Apr-2015 },{ day: 6, name: \"Saturday\", total: 66.07, date: 04-Apr-2015 },{ day: 7, name: \"Sunday\", total: 77.53, date: 05-Apr-2015 },{ day: 1, name: \"Monday\", total: 16.87, date: 06-Apr-2015 },{ day: 2, name: \"Tuesday\", total: 18.87, date: 07-Apr-2015 },{ day: 3, name: \"Wednesday\", total: 12.6, date: 08-Apr-2015 },{ day: 4, name: \"Thursday\", total: 14.19, date: 09-Apr-2015 },{ day: 5, name: \"Friday\", total: 21.61, date: 10-Apr-2015 },{ day: 6, name: \"Saturday\", total: 70.82, date: 11-Apr-2015 },{ day: 7, name: \"Sunday\", total: 65.9, date: 12-Apr-2015 },{ day: 1, name: \"Monday\", total: 11.95, date: 13-Apr-2015 },{ day: 2, name: \"Tuesday\", total: 15.32, date: 14-Apr-2015 },{ day: 3, name: \"Wednesday\", total: 15.2, date: 15-Apr-2015 },{ day: 4, name: \"Thursday\", total: 14.39, date: 16-Apr-2015 },{ day: 5, name: \"Friday\", total: 22.62, date: 17-Apr-2015 },{ day: 6, name: \"Saturday\", total: 44.63, date: 18-Apr-2015 },{ day: 7, name: \"Sunday\", total: 80.52, date: 19-Apr-2015 },{ day: 1, name: \"Monday\", total: 15.64, date: 20-Apr-2015 },{ day: 2, name: \"Tuesday\", total: 15.38, date: 21-Apr-2015 },{ day: 3, name: \"Wednesday\", total: 23.4, date: 22-Apr-2015 },{ day: 4, name: \"Thursday\", total: 18.82, date: 23-Apr-2015 },{ day: 5, name: \"Friday\", total: 22.78, date: 24-Apr-2015 },{ day: 6, name: \"Saturday\", total: 73.2, date: 25-Apr-2015 },{ day: 7, name: \"Sunday\", total: 86.69, date: 26-Apr-2015 },{ day: 1, name: \"Monday\", total: 12.08, date: 27-Apr-2015 }]');

-- ----------------------------
-- Table structure for `Tab_Val_oldd`
-- ----------------------------
DROP TABLE IF EXISTS `Tab_Val_oldd`;
CREATE TABLE `Tab_Val_oldd` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `Val_Nm` varchar(100) DEFAULT NULL,
  `Val_1` int(11) DEFAULT NULL,
  `UPDT` date DEFAULT NULL,
  `Val_Json` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Tab_Val_oldd
-- ----------------------------
INSERT INTO `Tab_Val_oldd` VALUES ('1', 'Member', '1407', '2015-04-16', null);
INSERT INTO `Tab_Val_oldd` VALUES ('2', 'Card', '4251', '2015-04-09', null);
INSERT INTO `Tab_Val_oldd` VALUES ('8', 'Top5_Member', null, '2015-04-16', '[{ country: \"Wong Yung Fong\", total: \"3,939,200\" },{ country: \"Imelda Jeni\", total: \"4,792,300\" },{ country: \"Darmawi\", total: \"5,187,500\" },{ country: \"Agus Diyanto\", total: \"5,390,800\" },{ country: \"JM. Dewiyani\", total: \"10,608,300\" }]');
INSERT INTO `Tab_Val_oldd` VALUES ('9', 'Top5_Tenant', null, '2015-04-16', '[{ country: \"Bakwan Duta\", total: \"2,705,867,150\" },{ country: \"Soto Betawi Mangga Besar 8\", total: \"3,474,929,000\" },{ country: \"Putra Kenanga\", total: \"3,846,228,050\" },{ country: \"Bakmi Ayam Alok\", total: \"4,605,846,500\" },{ country: \"Beverage\", total: \"7,668,366,370\" }]');
INSERT INTO `Tab_Val_oldd` VALUES ('10', 'Top5_Member_Month', null, '2015-04-16', '[{\"nama\":\"JONATHAN LEONARDO\", \"grandtotal\":\"592,000\" },{\"nama\":\"Borai\", \"grandtotal\":\"591,000\" },{\"nama\":\"Fanny\", \"grandtotal\":\"413,000\" },{\"nama\":\"Imelda Jeni\", \"grandtotal\":\"348,000\" },{\"nama\":\"Robby G\", \"grandtotal\":\"305,500\" }]');
INSERT INTO `Tab_Val_oldd` VALUES ('11', 'Top5_Member_Year', null, '2015-04-16', '[{\"nama\":\"DAVIN VARANDI\", \"grandtotal\":\"1,798,000\" },{\"nama\":\"Imelda Jeni\", \"grandtotal\":\"1,454,500\" },{\"nama\":\"Siska Benyamin\", \"grandtotal\":\"1,249,000\" },{\"nama\":\"G. Suganda\", \"grandtotal\":\"1,054,500\" },{\"nama\":\"Angelina\", \"grandtotal\":\"1,046,500\" }]');
INSERT INTO `Tab_Val_oldd` VALUES ('12', 'Top5_Tenant_Month', null, '2015-04-16', '[{\"nama\":\"Beverage\", \"grandtotal\":\"92,950,950\" },{\"nama\":\"Bakmi Ayam Alok\", \"grandtotal\":\"58,187,500\" },{\"nama\":\"Soto Betawi Mangga Besar 8\", \"grandtotal\":\"48,407,500\" },{\"nama\":\"Bakwan Duta\", \"grandtotal\":\"41,490,000\" },{\"nama\":\"Kuetiau Akang\", \"grandtotal\":\"38,355,000\" }]');
INSERT INTO `Tab_Val_oldd` VALUES ('13', 'Top5_Tenant_Year', null, '2015-04-16', '[{\"nama\":\"Beverage\", \"grandtotal\":\"562,944,453\" },{\"nama\":\"Bakmi Ayam Alok\", \"grandtotal\":\"421,710,500\" },{\"nama\":\"Soto Betawi Mangga Besar 8\", \"grandtotal\":\"310,460,000\" },{\"nama\":\"Putra Kenanga\", \"grandtotal\":\"289,050,000\" },{\"nama\":\"Bakwan Duta\", \"grandtotal\":\"276,922,250\" }]');
INSERT INTO `Tab_Val_oldd` VALUES ('16', 'Top5_Tenant_New', null, '2015-04-16', '[{\"nama\":\"Bakut Mumu\", \"grandtotal\":\"079\" },{\"nama\":\"Lapo Ni Tondongta\", \"grandtotal\":\"078\" },{\"nama\":\"Bakmi Kepiting 177 Pontianak\", \"grandtotal\":\"077\" },{\"nama\":\"Lamian Jia\", \"grandtotal\":\"076\" },{\"nama\":\"Tasty\", \"grandtotal\":\"075\" }]');
INSERT INTO `Tab_Val_oldd` VALUES ('17', 'Top5_Member_New', null, '2015-04-16', '[{\"nama\":\"0009891310\", \"grandtotal\":\"11 Apr 2015\" },{\"nama\":\"0009905628\", \"grandtotal\":\"11 Apr 2015\" },{\"nama\":\"0009898905\", \"grandtotal\":\"11 Apr 2015\" },{\"nama\":\"0009885400\", \"grandtotal\":\"11 Apr 2015\" },{\"nama\":\"TIGER LIE\", \"grandtotal\":\"11 Apr 2015\" }]');
INSERT INTO `Tab_Val_oldd` VALUES ('18', 'Trans_Years_All', null, '2015-04-16', '[{ month: \"January\", 2012: 233500853, 2013: 1339185060, 2014: 1323502672, 2015: 1139712153, },{ month: \"February\", 2012: 693110367, 2013: 1090627580, 2014: 1031350363, 2015: 895329600, },{ month: \"March\", 2012: 826079100, 2013: 1454338524, 2014: 1202240158, 2015: 959947500, },{ month: \"April\", 2012: 991157400, 2013: 1234405807, 2014: 1116790107, 2015: 539224700, },{ month: \"May\", 2012: 1107767200, 2013: 1212126552, 2014: 1396030969, },{ month: \"June\", 2012: 1222950450, 2013: 1524952431, 2014: 1190556556, },{ month: \"July\", 2012: 1524359500, 2013: 1361347606, 2014: 1491774133, },{ month: \"August\", 2012: 1752258300, 2013: 1777938852, 2014: 1164637816, },{ month: \"September\", 2012: 1146465900, 2013: 1089036701, 2014: 875905715, },{ month: \"October\", 2012: 1167461050, 2013: 1189376351, 2014: 1028788508, },{ month: \"November\", 2012: 1234354602, 2013: 1240972466, 2014: 988082066, },{ month: \"December\", 2012: 1551355002, 2013: 1604124647, 2014: 1252990908, }]');
