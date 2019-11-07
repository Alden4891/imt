# WordPress : buffernow.com MySQL database backup
#
# Generated: Tuesday 2. October 2018 08:58 PHT
# Hostname: localhost
# Database: `dmcsm`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `backups`
# --------------------------------------------------------


#
# Delete any existing table `backups`
#

DROP TABLE IF EXISTS `backups`;


#
# Table structure of table `backups`
#

CREATE TABLE `backups` (
  `backupid` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(200) COLLATE ascii_bin DEFAULT NULL,
  `description` varchar(1000) COLLATE ascii_bin DEFAULT NULL,
  `filedate` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`backupid`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=ascii COLLATE=ascii_bin ;

#
# Data contents of table backups (1 records)
#
 
INSERT INTO `backups` VALUES (45, 'db-backup-2018-09-22-07-56-498072.sql', '', '2018-09-22 07:56:49', NULL) ;
#
# End of data contents of table backups
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Tuesday 2. October 2018 08:58 PHT
# Hostname: localhost
# Database: `dmcsm`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `backups`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `dtr`
# --------------------------------------------------------


#
# Delete any existing table `dtr`
#

DROP TABLE IF EXISTS `dtr`;


#
# Table structure of table `dtr`
#

CREATE TABLE `dtr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMP_ID` int(11) DEFAULT NULL,
  `LOG` datetime DEFAULT NULL,
  `TAG` int(11) DEFAULT NULL,
  `DATE_UPLOADED` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=ascii COLLATE=ascii_bin ;

#
# Data contents of table dtr (24 records)
#
 
INSERT INTO `dtr` VALUES (1, 923, '2018-08-01 07:51:00', 0, NULL) ; 
INSERT INTO `dtr` VALUES (2, 923, '2018-08-01 12:01:00', 1, NULL) ; 
INSERT INTO `dtr` VALUES (3, 923, '2018-08-01 12:51:00', 0, NULL) ; 
INSERT INTO `dtr` VALUES (4, 923, '2018-08-01 17:01:00', 1, NULL) ; 
INSERT INTO `dtr` VALUES (5, 923, '2018-08-03 07:52:00', 0, NULL) ; 
INSERT INTO `dtr` VALUES (6, 923, '2018-08-03 12:02:00', 1, NULL) ; 
INSERT INTO `dtr` VALUES (7, 923, '2018-08-03 12:57:00', 0, NULL) ; 
INSERT INTO `dtr` VALUES (8, 923, '2018-08-03 17:02:00', 1, NULL) ; 
INSERT INTO `dtr` VALUES (9, 630, '2018-08-02 07:52:00', 0, NULL) ; 
INSERT INTO `dtr` VALUES (10, 630, '2018-08-02 12:02:00', 1, NULL) ; 
INSERT INTO `dtr` VALUES (11, 630, '2018-08-03 12:57:00', 0, NULL) ; 
INSERT INTO `dtr` VALUES (12, 630, '2018-08-03 17:02:00', 1, NULL) ; 
INSERT INTO `dtr` VALUES (13, 923, '2018-09-01 07:51:00', 0, NULL) ; 
INSERT INTO `dtr` VALUES (14, 923, '2018-09-01 12:01:00', 1, NULL) ; 
INSERT INTO `dtr` VALUES (15, 923, '2018-09-01 12:51:00', 0, NULL) ; 
INSERT INTO `dtr` VALUES (16, 923, '2018-09-01 17:01:00', 1, NULL) ; 
INSERT INTO `dtr` VALUES (17, 923, '2018-09-03 07:52:00', 0, NULL) ; 
INSERT INTO `dtr` VALUES (18, 923, '2018-09-03 12:02:00', 1, NULL) ; 
INSERT INTO `dtr` VALUES (19, 923, '2018-09-03 12:57:00', 0, NULL) ; 
INSERT INTO `dtr` VALUES (20, 923, '2018-09-03 17:02:00', 1, NULL) ; 
INSERT INTO `dtr` VALUES (21, 630, '2018-09-02 07:52:00', 0, NULL) ; 
INSERT INTO `dtr` VALUES (22, 630, '2018-09-02 12:02:00', 1, NULL) ; 
INSERT INTO `dtr` VALUES (23, 630, '2018-09-03 12:57:00', 0, NULL) ; 
INSERT INTO `dtr` VALUES (24, 630, '2018-09-03 17:02:00', 1, NULL) ;
#
# End of data contents of table dtr
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Tuesday 2. October 2018 08:58 PHT
# Hostname: localhost
# Database: `dmcsm`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `backups`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `dtr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `images`
# --------------------------------------------------------


#
# Delete any existing table `images`
#

DROP TABLE IF EXISTS `images`;


#
# Table structure of table `images`
#

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` blob,
  `description` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ascii COLLATE=ascii_bin ;

#
# Data contents of table images (1 records)
#
 
INSERT INTO `images` VALUES (1, '�PNG

   IHDR   �   �   ":9�  �IDATx^��!  A���o 9E��Q�;��BX���a!,�BX ,��9���I��v��gZ�s��;��8�k����r�H�Hm�[Nl��/���uo��|� 7H|oo�J�lq_f�z�,�GDRT�3�GT���$f��>��٪*2���8���c�}�p��S&��f8f��Ī��c��0��@H?� �O�i>#K�ĆQY5"��A�ד|ґ�~���hEF&� ~pֆi�$dj��!B�iP�eb��Q~�������Q�h*UU	�
��y�2B8��oUU-�&�
o�^fYbM
�����Ѩ�8��!�|�s���p����v!J���t;�^?���4��r%�rffvzz*��w��V+
9�9ih�[a�|�����&��#�*WWeE��"`R�s sv"666���xYp�q1��&��iᘘjM��Ͷ�3/^��n��̴��eՊ��ClΆo�����{+�d�1ȫ����A��C�{ooo}}���C2��P��0�v�&��[] 5Z����ܥ����.���%�8TZ�G�A�1#�qB&��,Wrﺽn��B[!���f���݅u][�3Q� ����W ��k�/0�4׮]�r�
/�g֥DZiM�\\�2��DbYia���VWW_�z���!#���G/�D���j�HJ$͋m�׮]]^^FE2=�J�a�$V5��1�0�V"Py� ��@�M�`�T�;��b�~7�\'n!,���Wkk����7nܸ~����" �X"H�ew�8@w�t,����Ï?�|�R\'�84L�4��@�i{3�x�jK�hcce�YN�P�VV���T�+H�!a#��ٳmm����
�ɲ~F�{�I�:�G�6��[a��ߛn��_�v��-,0���B�I��z��Xg XD)���Rϟ?_[[���s�U8��.
�I<�����|�	ܒ	��l�e�1+��D2�$�<X}�ꃯ�/�P4�&��
kU&���ܹs��U��4rzNg��p�՗�)#Ȉ���oí�_p�{y4�+�筶Z5&���.^~f����)�zk�励a����z��1��ؙ�8�Ї�
ˊ����,N�G��x�E��0��X�|S|�iN>\'��\'
���&��2XW��U%�$h�wv�߿��vp�|�~,WV��>������w?���ډF����Y9�*4�o̊�>C�խ��������G��� �g`�x�J������"�*��@�|��T��9��~����w�X�tiow���H�ɪ0�e�W���PX�{b�P��kl��fIX��+O�=S�D��ΆUeU�¥���S��Z��g1��iÊ�Qiխ��8Yb�9�������m��:; .I����G ��흉���2�֓\'O7�7�\'�h��u���<z�0�db}@�T�4\'���dK��5������/��j�B�P��L,3KĒ����
�E�%*���*4��؎X�.�3�>RV��8B�p:�X��`&�X�~J�3(Es���1�����gO_�Xcv(`���t��_�\\�+�sڹh�>~t��MMM��R�	�w�J3,ȥ����Y4��?BY*�8)�֘b�L�J�
$�a���d���X�a��y���h���&I!ƄVWר&"T���s��Ԍw�W���s��ue�X���
�Z���o�c&�&[X�@v,����"H����p��A���G���LG^��
O!��\'GTE��+(��_�^\'x��V�Yb�Y찰�1~�a�I*�
����*K�փzv�Ig�+������U�!db}�BB�
©� �$�����N?��m,3�l�%�6�U�`����1P�������NYVLdb����d�N,,�LҚvp��(�W-�X�~�=V�����:5�oK�dg�	X�Oyfass�b�S^gb������rZN2�����Uϝ�Ϊ���h�Z��gn�M,��F�f��^?)4��D�i3��0���>1s�ʪ�����I����o���ŋdѠ�+�1;yZi�X�c�穽sV���3+Lz�g�����yi���G�K�O幣��� 8�;Ia�![�tjx��to/���]����{��xvܸH��]���&^��#־<�B�>�- B��8o�P�T�Ӎѭ,��;�AG��"�cq� �����TZ)/3�N�ߩ�z:$V4ڇ���:y��s�XǄ,�ᵏr��C�.����ߑ�d?�qR�����q� E[�̽W�l���Xj�wF��%��J0�B�$�EhJ��<��2gN�k��;�r�R�*/�N�i{�s2�D&m�
���
��1���Xj��\'��E���j��v�����>��{�Oo�L��|ޣ�>k�jŹF�f�)����ǒ��&W(������-@�8z��
`�zm�M��+V�߱[�eb���wܩ9�3rڌ��<�uU�o�0#+��x��j{�m#%��ɰ��*���i2��q�����`�9�t��3�5�$^M4�oRɜ���fAnnkf>nPU5�!=|�z�5�ޣ��b�g\'-�����bܼy��׸B�~Ǚeb���;m��)������O�:ly��_ܼy���X�*<�P\'���
[B���k��R/{�X�Qf��ͭ-s9}ty;���R��u�g+C�3c�ϟ�y��K����#A9�tG�qO��V��-��vα�a�bIn��X�%�q�(T�%������-�	B#��@�>B!�0m_�
�~LA�2Ү��GH��7��ebiG�º����������В�
Y=URϥX%���v�b�\'G9x��G�^.����,��R��,K�c ���ZK]Ǆ�1�n����=αB����I�3K��δ�SS���:F�@�׬UU�n�A��W@V�b����O��6�����W�0Ӛ�\\�W�+g����ڳ3�����:n�<,]M�I�C;?�xf>�af����[S�33GMMΪЬP�>��^\\X���N�7R�\\�V���
�0?���uKe�/_����4#,�_)�a�jn~>��.�ŵ�[��M����U�j1;;���P\'�m,K�3�կ~El���[4�$���}����eL-^�e�uiXT3X\\\\�v�VEr��v��G�ɣ�r�5V�#�������y$
�{���g#orK�1���59�e�q��%[�C%c�{����>[X���ÓB�XG\\`��C$t����o~���#���"�R�E\\3B)�5a@e�u"de��׿���O�U||f�]��:�-#�@�������_}�՗_~� ����@(�?�	[!�1���y�.^�x�Ν���wkyy�~�s�α`��C�a�ke:@5T���ڏ�CA^B��ʮ1�����Żw���І���QrG%ѹ*�U�����0�9�(�	�"d�　:hI�2�)�nh�I"\\�\'Ţ�9�<K]�+���)z���N�L,��C�_��̰0��&{]W�t����9�%��+��hE�����
��T�Y3���,蕉u$�J��<��`��N2��<� �&�����.>�a|--�՟��UwQ��Bi�G�1@m��[��X3&�\\�+u�a���(��9�8�u�!"1�g���µkW�Z�5�!�sG��+������)��^_q�䅑>Fp�{ꪞ��S����փ#�"K��9�d�+]*�X�9#�&�\\@��Wé���338��a�,���Cbɉ��ʘB>�T��rǽ�nO-T�r��)������_��<�	�^�+�S���w?�s�6�������P��X�̤uDb��:q����7�#�����X�^�ti�H��x��݅hD$���wb)���B?�3��3�,VK�6Ch��?Bk�U� �P�H�3�ڳ�
E�J�#W�\\a�Z�ױ;֏(����*���Ng�3��q^=�u�/�g/^���pp)8�2�P#�~�����1Z��}�>�NO-/.T��g�dd?�/��uwKW|t��l�=�u[��V���2��5�U1���+����}t���Ң���=v��1��!mXU5�H�KM�o#��*��"��4�PT\'���
m2PU����c�����`Δ�<��Bc>��իW1�h2�,3�d���7�Q�,jRm�a,�-o��9���w���L,%X)�Q�� =BIܪʊ#�B�V�r1���A��Ua����:xb�#���*XEu���"������d�������ᬈ���@��|j�d㖠G�����V_���c��/��Ʃ	g�벐��	G���o�B��e�]��L��o߾M:��L��S�+�b¾j���˗���5�3��O���%��ʝ�Ch���
nbZ��J��X��?xVu%VX㚍���{���U&��q�X�\'��5!%�A���XMZ���e�Y��S�A�*<&x�,n���|u]�n]i�t�_g��N���6�h��)�I\\�c�i�Y�,�{C����{������R�e�Ք�[:�ޤ���zW�j�|��+��*lV�N�#3�*�.c�3�Ϫ��%���9�߼o��=KBK��&�Ȥg��%FY
����M>	�R��MG&�����n���)ĕ�ڦ�v�v;xq�*�;�y�4��KY�m��(d���zb�d@�k,��|\'^�}�ͬ,�"�:$�|Dq��]FC��lww�5�=_�X��9�Z^�"X#�F	��Utk/��7�˪�Ay�� ����b��C�Ƈ!X.X��G)��,$�R�}�\\������>���y�}�	��,��t�ۻ{/.��c�x�E�K�_�X�b�	︦�
��E���m���A���4��P������¥ez�\\����wt��U��0/�}�%v;�B
�jf�卩���fahf=�n�aUkv�J�,��{�Bݼ�Ƣ���Q�D��k$�zkk�0xo��m���;�L�c��9h#�ܡ������٣0؉���K�j>��D�@�8ͥ�:���d�x��?�*a���fk䥶��D1E;--l9�G]60|q�ٯ�:�N�4��5p>�Bp��%Gٿ�j_��Qv�E���q��"��\'���H����F� #r�N:mf�Zy�+���W�$"mJhbL�J�<Ӣ��W0����:݃��AO�X�����Kl�w7�n�jzA�X]�uU2�������8�]���.�9��և׵�#�R�t�0Mx�Z���:�a�_]���=/q��r�V��� -W�j ��yv�l�g��n(Ԍ ��$C�U���K�c�o%����ä����������ׯ�n�{{8�%�8��Wo]8��ፍ"�7f Z�R@�CL�O�^�<�_7�ln���6�gڍ\\d��6܄JigG8&q��)�h6m󵻵��9IW�͜�R0���\'"9Q�N�}V ؛��%�3��SU�Ơ0�b�� �F����jcAK�T�+�*2��֑L���\'�^�9�JNY]�j�Y(��5�U](8kbv��"s1UR���;��=D;��8Y^�x1��2������Z$AF/�}L%VP͜YR�qhiF���������U.
ϨN8<�Y�R��Zr )�܏i�#��q�3U����\\!j%z%�)��i^G�������XĿ��ގ��z)�K�=�m����CPyt� @�xi@sExĶw�_���z����nJp�8"�F ΈR鴉��]o�d���6��4��_^^�|�
��Z2(�%������I&H,WNu鲧��E��N�5�����ͭ�++D]��e �P�v�Z,#�hIh��NI4vc�z�b�qw̹^�;,&��r0��G,��y�bM�I��6���S���$�N]�e��.(*��^(
8�Ăa4�d��},WX�=r��N��w�M�X�^�v���?�W�^Q6��R0��:]�;CF�|���=��Ƹ\'nܸA	�u��6s�HUX�:D�@�������ֺ]������	̂��y.��8�+l,]y�Z(G��P4�����)��bY��b�������Ƿ��HÑ��S�΀=)�ڻ�U��� L�נ?��m�/5�!��`:��os�`��9x��`W�y�~J/3�>h�Ĉ���n��Lk��M߾q���%|f��L$��c��F,ih�9�M��;�����g++��?����<z�+1���SF
���H��DK�h��U:T�a�ha|j6��.)%.�
�\'�\'�^_7�Ð+��\\p��B{�F�����Ƨ��H*�Oc��`K}���������w���gk&h~��n�=��?��oc�V�)�4�%�\'�,m��c�ٳg���ܿy�����9�톥5F�0����X�m���޽{�D59羟rZ�D�˽\'O����`c�Ғ���AɃ��t3D ��Yi��7�5���K�\\D��O��!�mڄ��|r�̒R�X��k�!��/_����A�Ve�e���b|���f����k�RH��w׍�7nݼ�G��ЭD�� ɑ�5�D�ѕuYOu����j�L0�9b�D�R ��s�׳Jc_��?�xiq���`�$W�̞���$� ā���T(]�|���X�)5	�?���w�n�"S��"a��<�f����ܾ��!�
S.Qu⩓�"��ics����9*;�Ε�b��B9�$��ry��������\'8WL22F��T� ���,"~�~L	�o½��� ����?T����Ê/#� �1	�Hg����s8��b���;����l1��]���#��Y@O��$Űs��G�[�Q�r�ޏCy)��Hf*�-���t��~5PVoE��2����s�l��>���b���b�!�R
���[`��1�D�^�#��H�<#RU&�d�N�[_~�%܂9hF�Z�f.�&�t�-9�����?��*#C��]�JRm�ַ�~K�0���9����eh@���U�GE@��32�	kk���%�@8���J���\'x�YrT�Q�Y!dd�C�SF�h�5���E�U��?����5�!�˗��$yYV�C���j��ՌsE�-�30�AL;(0����i%��U��Y�՟ֱ���etK�����	�Bbh�2�����:Jс���o�|�)��UWeʯ��\'HW��O�N3���;5#�,�_� �h
��C�������w��0��c"#;���>�-|�A�a�SVz�\\���\\@,�F}UVj?/5�cqi7�mi3
���r��`����q��K�Ghu����.#Nw5=S�8�<32�d�r^O��ڕ�����6���R*#C:`���+W.��ک�.���x8#��*��ЉF�*{�l��H�C�D��1�����-����8�6�!Y�[%�wb8T�Vt���0#�IU�c���כSS//bɧU��}R�������(\'ܖu���    IEND�B`�', 'default profile pic') ;
#
# End of data contents of table images
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Tuesday 2. October 2018 08:58 PHT
# Hostname: localhost
# Database: `dmcsm`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `backups`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `dtr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `images`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `profile`
# --------------------------------------------------------


#
# Delete any existing table `profile`
#

DROP TABLE IF EXISTS `profile`;


#
# Table structure of table `profile`
#

CREATE TABLE `profile` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FULLNAME` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  `EMP_ID` int(6) DEFAULT NULL,
  `CATEGORY` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  `ISACTIVE` int(1) DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1325 DEFAULT CHARSET=ascii COLLATE=ascii_bin ;

#
# Data contents of table profile (689 records)
#
 
INSERT INTO `profile` VALUES (630, 'Maricel  B. Aballe', 648, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (632, 'Faizal  M. Abdul', 1436, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (633, 'Norhiyya  S. Abdula', 1421, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (634, 'Alfie  P. Abdulgani', 1031, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (635, 'Emilyn  A. Abdullah', 1179, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (636, 'Nordy  U. Abdullah', 493, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (637, 'Sahida  U. Abdullah', 175, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (638, 'Tarahata  D. Abdullah', 700, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (639, 'Baguindah  P. Abdullah', 1407, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (640, 'Halima  S. Abdulsalam', 1155, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (641, 'Alrasid  S. Abotazil', 169, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (642, 'Melanie  L. Abueva', 225, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (643, 'Florence Joy C. Acupinpin', 761, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (644, 'Maylanie  S. Adam', 755, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (645, 'Rohaina  M. Adam', 1384, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (646, 'Johaira  K. Adang', 1402, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (647, 'Nairah  M. Adiong', 787, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (648, 'Richelle  M. Aguala', 1154, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (649, 'Aisah  B. Aguam', 1366, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (650, 'Chrunche  L. Ajeno', 519, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (651, 'Bai-alliah  G. Akmad', 559, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (652, 'Venzar  P. Akmad', 934, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (653, 'Kristina  B. Akop', 888, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (654, 'Nasroden  L. Alab', 771, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (655, 'Emily  L. Alapan', 162, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (656, 'Cherryl  L. Alasagas', 905, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (657, 'Norjan  A. Alauya', 1058, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (658, 'Moh\'d Norhan M. Alawi', 566, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (659, 'Christien  R. Alcala', 795, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (660, 'Omyrah  K. Ali', 717, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (661, 'Aslima  A. Ali', 1439, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (662, 'Rahani  P. Ali', 826, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (663, 'Sittie Rainee G. Ali', 908, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (664, 'Zambra  N. Ali', 742, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (665, 'Rohaida  D. Ali-lanto', 773, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (666, 'Halima  G. Alim', 814, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (667, 'Phemer Jean M. Almendralejo', 560, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (668, 'Jim  D. Alon', 1182, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (669, 'Ma. Charmel A. Alvior', 498, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (670, 'Jennifer  P. Ambalgan', 483, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (671, 'Nabiela  G. Ambor', 248, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (672, 'Norolhakim  U. Ambor', 561, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (673, 'Edison  M. Ambrad', 407, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (674, 'Aisah  U. Ampatua', 549, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (675, 'Jelfah  D. Ampuan', 704, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (676, 'Rucaya  A. Andi', 903, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (677, 'Irish  C. Angca', 790, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (678, 'Sittie  L. Angkay', 472, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (679, 'Christine  E. Aninipot', 745, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (680, 'Jackie Lou B. Anito', 848, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (681, 'Mary Grace L. Apalla', 721, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (682, 'Kristine  L. Aposter', 465, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (683, 'Meriam  D. Apostol', 231, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (684, 'Maybel Joy F. Aragona', 845, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (685, 'Jeogena  P. Ara?a', 677, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (686, 'Jamalia  D. Arat', 340, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (687, 'Charlyn  C. Arevalo', 428, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (688, 'Miasarah  V. Asi', 782, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (689, 'Norhanie  S. Asi', 810, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (690, 'Jamil  A. Asim', 206, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (691, 'Andrian  G. Atang', 1392, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (692, 'Carena  A. Avila', 936, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (693, 'Jayson  R. Bacaling', 554, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (694, 'Peping  A. Badal', 1010, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (695, 'Norhainie  D. Bagro', 620, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (696, 'Aklima  D. Bakar', 1413, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (697, 'Ayatullah  L. Balayman', 148, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (698, 'Nor-eimman  K. Balayman', 555, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (699, 'Naifah  S. Balindong', 309, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (700, 'Sahida  S. Balindong', 633, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (701, 'Cheryl  J. Balios', 508, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (702, 'Alpha Joy S. Balmaceda', 963, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (703, 'Jenerose  M. Balunto', 774, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (704, 'Nor-ain  P. Banalan', 1446, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (705, 'Erwin  L. Ba?ares', 1379, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (706, 'Rolando  M. Banayag', 711, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (707, 'Alex  A. Bandila', 739, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (708, 'Nanette  P. Bantad', 439, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (709, 'Fely Jane D. Bantan', 1394, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (710, 'Raidah  M. Bantog', 143, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (711, 'Jonnavel  J. Baro', 1390, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (712, 'Shiela Mae L. Baro', 836, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (713, 'Sheila May B. Barreto', 450, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (714, 'Cherryl  D. Batino', 725, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (715, 'Fairuz  B. Batugan', 1428, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (716, 'Charmiedale  D. Baweg', 1399, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (717, 'Maria Lourdes L. Bayogos', 454, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (718, 'Rose  T. Belgira', 791, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (719, 'Asniah  B. Benito', 618, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (720, 'Datubon  G. Benito', 1445, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (721, 'Mahid  T. Benito', 573, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (722, 'Ruby  T. Bernaldez', 452, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (723, 'Meraimah  H. Bitor', 459, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (724, 'Jose  T. Blogo', 1376, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (725, 'Jonah  R. Bolencis', 1096, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (726, 'April Joy F. Boreres', 986, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (727, 'Lumbayan  M. Buat', 1038, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (728, 'Nor-ain  S. Bubong', 783, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (729, 'Irish April C. Bulagao', 696, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (730, 'Taha  P. Bulod', 552, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (731, 'Cheryl Ann D. Burlaza', 793, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (732, 'Normina  D. Butuan', 781, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (733, 'Van Harry C. Caballero', 473, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (734, 'Alejandro  G. Cabantug', 1086, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (735, 'Carin  L. Cabaobao', 640, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (736, 'Ismael  J. Cabilangan', 995, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (737, 'Juhanie Sherine L. Cabugatan', 786, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (738, 'Jestoni  P. Cadungog', 1171, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (739, 'Jay-r  K. Cael', 1422, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (740, 'Jonna Cris M. Calanao', 1011, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (741, 'Charon Rose S. Calibayan', 796, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (742, 'Merlinda  E. Calibayan', 1076, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (743, 'Rohania  M. Calimbaba', 625, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (744, 'Hamidah  A. Camim', 387, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (745, 'Rea  C. Canajero', 835, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (746, 'Anna Lucia S. Canda', 1388, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (747, 'Maebelane  S. Canto', 484, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (748, 'Genly  B. Carbon', 904, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (749, 'Michelle  B. Carbonel', 470, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (750, 'Robert Glenn L. Cartagenas', 955, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (751, 'Arlene  S. Casan', 643, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (752, 'Meriam  B. Casanguan', 763, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (753, 'Sarah May H. Casilagan', 868, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (754, 'Casimero  A. Ladiona', 965, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (755, 'Junaida  S. Casser', 586, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (756, 'Krystal Jean E. Casta?ares', 569, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (757, 'Helen  L. Castillon', 999, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (758, 'Grace  C. Castro', 453, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (759, 'Joylyn  S. Cataan', 319, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (760, 'Aaron,jr  S. Catalan', 435, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (761, 'Melanie  A. Catayas', 870, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (762, 'Richie  E. Ceballos', 662, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (763, 'Glory Grace G. Celiz', 922, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (764, 'Rosemarie  G. Celo', 951, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (765, 'Karen Mae M. Clarito', 900, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (766, 'Mary Mercy Anne C. Claro', 664, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (767, 'Rosalie  M. Clave', 858, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (768, 'Ruth  C. Clementes', 1198, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (769, 'Cheliza  D. Co', 719, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (770, 'Rofaida  B. Codarangan', 631, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (771, 'Jean Joy D. Cohan', 1479, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (772, 'Analyn  A. Colon', 945, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (773, 'Benilda  B. Cortez', 112, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (774, 'Hasmiah  B. Cosain', 386, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (775, 'Rhea  A. Cruz', 666, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (776, 'Caterin  T. Cruz', 649, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (777, 'Joie Mae B. Cudiamat', 668, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (778, 'Bryan  J. Cutin', 973, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (779, 'Julive  F. Daguman', 833, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (780, 'Norma  H. Dagumbel', 312, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (781, 'Richard  S. Dainal', 952, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (782, 'Monesah  A. Daing', 1180, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (783, 'Jamal  M. Daksla', 605, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (784, 'Sittie Ommayma I. Dalig', 772, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (785, 'Fatima  A. Damang', 703, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (786, 'Renato  B. Danial', 1391, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (787, 'Maricel  P. Daraug', 1405, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (788, 'Jehanne  M. Dari', 288, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (789, 'Annakarenina  M. Daroyodun', 670, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (790, 'Bai Jasmine M. Datu esmael', 654, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (791, 'Almirah  T. Datucan', 861, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (792, 'Ma. Catherine T. Dayag', 606, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (793, 'Kristin Vanessa L. De pedro', 298, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (794, 'Ali Bashir K. Debarosan', 145, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (795, 'Leo Marr M. Degracia', 1438, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (796, 'Gary  Z. Dela cruz', 950, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (797, 'Iris  M. Dela cruz', 970, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (798, 'Gerlie  S. Dela rosa', 979, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (799, 'Deserie  M. Delalamon', 651, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (800, 'Daisy  H. Deligos', 1050, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (801, 'Evene  T. Delizo', 546, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (802, 'Jergen  V. Demavivas', 799, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (803, 'Blezzete Anne L. Deriada', 1195, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (804, 'Emelia  U. Dewey', 837, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (805, 'Nurhaylon  S. Diangka', 529, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (806, 'Sapia  A. Diangka', 189, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (807, 'Sittie Naima U. Dicol', 669, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (808, 'Denia  L. Diezon', 266, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (809, 'Gado  S. Digan', 1380, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (810, 'Norhidaya  M. Dimaampao', 760, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (811, 'Norzahra  G. Dimatingkal', 632, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (812, 'Vienna  V. Dimson', 954, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (813, 'Norhuda  M. Dinas', 912, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (814, 'Hamida  D. Dipatuan', 978, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (815, 'Hanira  D. Dipatuan', 1411, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (816, 'Michael  B. Dipatuan', 758, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (817, 'Salam  E. Dipatuan', 816, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (818, 'Jalilah  M. Disomimba', 842, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (819, 'Liza  S. Divinagracia', 486, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (820, 'Sinawi  S. Ducol', 1397, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (821, 'Juny  C. Dulong', 645, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (822, 'Hermelyn  C. Dumagat', 692, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (823, 'Omaida  A. Dumato', 675, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (824, 'Jasper Kennith C. Dumpa', 856, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (825, 'Erlinda  A. Dupio', 1168, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (826, 'Lendy  H. Duran', 697, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (827, 'Jamal  M. Ebrahim', 280, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (828, 'Amal  T. Edres', 804, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (829, 'Judy Ann B. Eglesia', 487, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (830, 'Ivy  D. Eigo', 1000, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (831, 'Mary Grace M. Emboltorio', 839, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (832, 'Kusain  B. Empao', 691, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (833, 'Regina Mae R. Epanto', 119, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (834, 'Anna Marie P. Escolano', 1430, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (835, 'Jonaima  B. Esmail', 865, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (836, 'Juharia  C. Esmail', 503, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (837, 'Chuchie  F. Estampador', 740, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (838, 'Noraima  S. Eting', 502, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (839, 'Charlotte May E. Examen', 946, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (840, 'Leonarda  R. Exmundo', 823, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (841, 'Noila  D. Faderon', 766, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (842, 'Beatrez Marites F. Fale', 611, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (843, 'Izah Clarisse D. Fantin', 942, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (844, 'Eugene  S. Fanulan', 1382, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (845, 'Jenny  L. Fanuncio', 1406, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (846, 'Rosalyn  E. Felipe', 818, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (847, 'Lady Ann S. Felipe', 817, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (848, 'May Antonette S. Fe?ola', 996, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (849, 'Archer  M. Fernandez', 812, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (850, 'Lord Chivas M. Florentin', 853, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (851, 'Chiradee  M. Flores', 830, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (852, 'Rowena  B. Flores', 688, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (853, 'Edzel  O. Formoso', 683, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (854, 'Roshelyn  J. Frediles', 405, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (855, 'Jonna Rose M. Fresco', 222, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (856, 'Janice  E. Fuentes', 961, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (857, 'Hansel  M. Fungan', 1393, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (858, 'Jessa Mae O. Fungan', 1420, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (859, 'Hannah Faith P. Gabac', 701, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (860, 'Aiza  L. Gabion', 431, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (861, 'Xhander Khan E. Gacho', 413, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (862, 'Maricel  B. Galido', 792, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (863, 'April Ainee D. Gallego', 481, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (864, 'Daisy  J. Gallego', 1157, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (865, 'Nyvee  L. Galve', 1003, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (866, 'Abdulfahad  D. Gamor', 1426, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (867, 'Umbai  A. Ganato', 540, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (868, 'Akrima  S. Gani', 119, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (869, 'An-an  E. Gani', 892, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (870, 'Tatonot  B. Gani', 1416, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (871, 'Ryan Roy B. Gaquing', 882, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (872, 'Norma  L. Gasang', 1410, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (873, 'Cheryl  A. Gaspar', 801, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (874, 'Lelibeth  D. Gaupo', 1065, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (875, 'Andrea  A. Gayosa', 1448, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (876, 'Lorlie  P. Gedoria', 1424, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (877, 'Darlene  C. Gelay', 765, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (878, 'Genevieve  C. Gempesaw', 392, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (879, 'Maricel  S. Gocon', 455, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (880, 'Jayzel  A. Gomez', 571, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (881, 'Chistie Rio B. Gri?o', 1067, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (882, 'Rayhana  M. Guiabel', 655, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (883, 'Tansey  A. Guialil', 1172, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (884, 'Aniesa  S. Guialo', 820, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (885, 'Bin Redhuan S. Guiana', 147, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (886, 'Jofemin  L. Guiani', 1381, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (887, 'Mohammad Fahad B. Gunting', 398, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (888, 'Saidamen  P. Guro', 489, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (889, 'Teresita  P. Guylan', 287, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (890, 'John Mark M. Guyos', 173, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (891, 'Insanah  D. H. Racman', 393, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (892, 'Laut Saddath M. Hadji said', 1200, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (893, 'Uthman  B. Hadji zuhayer', 1432, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (894, 'Carmela  A. Hadong', 478, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (895, 'Faridah  D. Hassan', 628, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (896, 'Kathleen  L. Hofer', 706, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (897, 'Michelle  C. Hovina', 301, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (898, 'Fahad  A. Ibrahim', 898, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (899, 'Chester King F. Ideca', 543, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (900, 'Junaida  H. Indar', 385, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (902, 'Farouk  S. Ismael', 1431, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (903, 'Jennelyn  R. Jabla', 824, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (904, 'Mariecel  B. Jagorin', 509, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (905, 'Rhoda  L. Jardenil', 416, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (906, 'Precel  L. Jimena', 368, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (907, 'Jacquelyn Ann C. Jinon', 514, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (908, 'Jorge Welhelm A. Julian', 849, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (909, 'Glezeil  P. Jumao-as', 974, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (910, 'Manding  T. Kabadil', 1414, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (911, 'Naira  M. Kabagani', 907, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (912, 'Norodin  H. Kabugatan', 176, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (913, 'Nadia  P. Kadon', 811, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (914, 'Monawara  U. Kalis', 876, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (915, 'Bainorie  A. Kasan', 496, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (916, 'Rakma  S. Kawilan', 1444, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (917, 'Lailah  A. Kinudalan', 495, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (918, 'Ned  S. Kulan', 1387, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (920, 'Norseha  A. Kusain', 432, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (921, 'Jaslia  A. Labay', 624, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (922, 'Mary Grace R. Labordo', 650, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (923, 'Janese  L. Laco', 1079, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (924, 'Norhaima  K. Laguialam', 1132, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (925, 'Hobaib  S. Laguindab', 418, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (926, 'Claire Joy A. Laidia', 832, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (927, 'Analyn  A. Lampino', 1386, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (928, 'Rosannie Grace L. Lanado', 1425, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (929, 'Abdulzatar  K. Langguyuan', 871, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (930, 'Hanif  M. Lanto', 591, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (931, 'Nabilah  T. Lao', 355, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (932, 'Raisah  L. Lao', 617, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (933, 'Mary Joy A. Latumbo', 869, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (934, 'Zikrullah  M. Lauban', 910, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (935, 'Amerah  H. Laut', 616, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (936, 'Anecita  P. Lawi-an', 1400, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (937, 'Sheryll  C. Layawon', 661, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (938, 'Analie  M. Layson', 819, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (939, 'Jinkee Jane C. Legaspi', 850, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (940, 'Arienda  P. Lemon', 769, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (941, 'Elfa  N. Leoncito', 422, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (942, 'Juamer  B.. Leyson', 1495, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (943, 'Jenelyn  C. Libona', 449, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (944, 'Alijar H. Lidasan', 518, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (946, 'Manilyn  L. Lidot', 447, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (947, 'Pilar  M. Ligo', 421, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (948, 'Abulhazeem  M. Linog', 671, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (949, 'Neil Michael D. Lofranco', 406, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (950, 'May Lyren J. Lo-ot', 322, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (951, 'Emmie Joy C. Lorenzo', 205, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (952, 'Elsa Dora C. Lorenzo', 191, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (953, 'Rovelyn  G. Los ba?ez', 451, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (954, 'Baiphati  A. Luay', 647, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (955, 'Delia  G. Lumbay', 1462, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (956, 'Joymie  G. Lumbay', 1167, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (957, 'Guinaid  B. Lundungan', 689, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (958, 'Jhemrudden  R. Lundungan', 1369, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (959, 'Emargelen  W. Lupina', 547, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (960, 'Josephine  R. Mabalot', 873, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (961, 'Hannie-laifa  D. Macabando', 535, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (962, 'Dong  B. Macalintangui', 1437, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (963, 'Ansar  L. Macalumba', 461, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (964, 'Mohamad-ali  D. Macapaar', 534, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (966, 'Aisa  P. Macawadib', 680, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (967, 'Monaisah  S. Madid', 788, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (968, 'Gretchen  A. Magallon', 944, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (969, 'Raihana  D. Magdaga', 530, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (970, 'Christopher  S. Maghinay', 558, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (971, 'Jesse  S. Maghinay', 313, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (972, 'Sheila Mae S. Maglasang', 710, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (973, 'Maria Nita R. Magno', 448, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (974, 'Arlyn  T. Maguan', 768, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (975, 'Arlyn  M. Mahawan', 807, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (976, 'Aiza  S. Mahmud', 174, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (977, 'Jeoffrey  B. Maitem', 337, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (978, 'Nebien  G. Malang', 770, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (979, 'Shahanie  P. Malawani', 456, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (980, 'Norjannah  C. Malna', 798, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (981, 'Fauzia  N. Maluyoan', 924, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (982, 'Normina  A. Mamalumpon', 500, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (983, 'Babylin  G. Mamantal', 915, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (984, 'Omiesalam  E. Mamantal', 800, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (985, 'Nasihah  S. Mamarungcas', 803, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (986, 'Suharto  T. Mambak', 103, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (987, 'Krisna  A. Manabat', 990, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (988, 'Fairodz  A. Manadting', 259, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (989, 'Sailanie  M. Mandagan', 419, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (990, 'Milanie  O. Mandia', 659, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (991, 'Faisah  M. Mangondaya', 1204, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (992, 'Christine Grace B. Mangyao', 815, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (993, 'Giamal S. Mantawil', 380, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (994, 'Yasmin D. Mantawil', 917, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (995, 'Amparo  U. Manudal', 767, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (996, 'Shiela Mae G. Margate', 506, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (998, 'Aynodin  S. Marohom', 587, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (999, 'Hilal  M. Marohom', 634, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1000, 'Khabeb  A. Marohom', 957, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1001, 'Mohammad  M. Marohom', 578, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1002, 'Normalia  R. Marohom', 532, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1003, 'Rohailah  I. Marohom', 382, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1004, 'Mohammad  A. Marohombsar', 564, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1005, 'Sittie Aineeh S. Marohombsar', 232, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1006, 'Jehan  M. Marohomsalic', 210, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1007, 'Asraf  P. Maruhom', 1433, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1008, 'Rohaidah  S. Maruhom', 213, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1009, 'Rey  C. Masorong', 943, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1010, 'Ada  S. Masukat', 178, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1011, 'Bryan Karl C. Mate', 690, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1012, 'Leah  B. Maulana', 437, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1013, 'Kharlmal  S. Maulana', 538, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1014, 'Coraisan  M. Mauti', 1584, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1015, 'Mylen  P. Maygay', 834, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1016, 'Cherry  M. Medija', 202, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1017, 'Liza  F. Memorial', 794, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1018, 'Joan Grace Q. Mendoza', 417, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1019, 'Amraida  R. Menting', 409, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1020, 'Juditha  C. Mhek', 1396, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1021, 'Karl  A. Milar', 1170, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1022, 'Nelyn  B. Militante', 404, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1023, 'Susan  C. Millan', 471, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1024, 'Wennie  S. Millan', 402, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1025, 'As-bhatty  A. Mipukur', 557, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1026, 'Minda  F. Miranda', 1005, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1027, 'Mayanbai  M. Mocsin', 877, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1028, 'Naira Jade A. Mohamad', 891, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1029, 'Razul Ezzedden A. Mohamad', 528, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1030, 'Samra  A. Mohammad', 570, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1031, 'Lesly  P. Molina', 878, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1032, 'Mohaima  T. Monaalim', 553, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1033, 'Johanna Joyce A. Montinola', 939, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1034, 'Kusain  B. Mustapha', 1418, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1035, 'Bayanisa  M. Mutin', 609, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1036, 'Walid  D. Mutin', 1043, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1037, 'Jalilah  M. Muto', 501, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1038, 'Dionne Lynn B. Nabor', 474, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1039, 'Jodith  P. Nagdaparan', 505, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1040, 'Rahima  S. Namla', 513, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1041, 'Sajid  P. Namla', 62, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1042, 'Charlie Albert L. Nario', 705, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1043, 'Regel  A. Narsico', 948, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1044, 'Sarissa  V. Ni?o', 411, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1045, 'Amina  A. Nuruddin-razik', 880, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1046, 'Liza  M. Obina', 1408, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1047, 'Johna Paz C. Occe?o', 443, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1048, 'Joey  P. Ochavillo', 797, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1049, 'Junellen  O. Ochia', 762, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1050, 'Cres  L. Ocso', 221, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1051, 'Lali  M. Odasan', 426, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1052, 'Flora May O. Gundam', 630, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1053, 'Amira  D. Olalisan', 485, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1054, 'Sharon  T. Ong', 895, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1055, 'Paulina  F. Oping', 1417, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1056, 'Jecear Jay O. Orlopia', 754, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1057, 'Elmar  O. Pagarigan', 233, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1058, 'Girlie  D. Pagarigan', 468, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1059, 'Norhana  B. Pagayawan', 884, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1060, 'Maricar  B. Pagharion', 864, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1061, 'Faidah  D. Paisal', 619, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1062, 'Rona Joy H. Pajinaco', 1017, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1063, 'Mohannad  M. Paker', 702, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1064, 'Amor Divina L. Palesterio', 425, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1065, 'Salvador  R. Paloma ii', 885, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1066, 'Emily  F. Pama', 580, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1067, 'Badrodin  S. Pamaloy', 1055, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1068, 'Heria  D. Panalandang', 507, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1069, 'Yasser  S. Panalandang', 1051, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1070, 'Zukra  D. Panalandang', 497, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1071, 'Moshmerah  A. Panbangan', 265, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1072, 'Jalilah  A. Panbangan', 95, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1073, 'Noraidah  A. Pandapatan', 629, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1074, 'Kahir  T. Pandi', 685, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1075, 'Pearly Mae S. Paniza', 1066, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1076, 'Effie Joy C. Pardello', 537, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1077, 'Debbie  M. Parre?o', 207, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1078, 'Mariam  S. Pasawilan', 1385, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1079, 'Earl Stanly L. Pasion', 1014, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1080, 'Johara  D. Payla', 652, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1081, 'Peter  O. Pechon', 779, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1082, 'Kevin Charles A. Pelagio', 846, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1083, 'Najara  U. Pendaliday', 1443, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1084, 'Zainudin  O. Pendong', 890, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1085, 'Bert Jomar L. Pereyra', 718, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1086, 'Rohanna  S. Piang', 574, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1087, 'Dondon  S. Pigcaulan', 381, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1088, 'Charmiane  B. Pina', 446, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1089, 'Chessy Anne B. Poblete', 756, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1090, 'Honey Grace C. Principe', 947, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1091, 'Dovie  J. Pulido', 642, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1092, 'Fritzie  T. Quijote', 278, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1093, 'Alfredo  U. Quimoyog', 568, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1094, 'ALDEN  A. QUINONES', 923, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1095, 'Daryl  C. Rabanillo', 847, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1096, 'Amram M. Racman', 556, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1097, 'Nasefa  M. Racman', 204, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1098, 'Juliet  S. Ramojal', 388, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1099, 'Rohanna Mayza M. Ramos', 805, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1100, 'Johaira  M. Rascal', 230, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1101, 'Samsodin  B. Rascal', 170, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1102, 'Jadidah  B. Rasuman', 208, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1103, 'Faricia  B. Rayman', 329, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1104, 'Jaysie  B. Raymundo', 686, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1105, 'Roselle  M. Rentoza', 1395, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1106, 'Susana  H. Reyes', 1389, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1107, 'Maria Brita P. Rivera', 326, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1108, 'Nor Marilou D. Roales', 906, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1109, 'Michelle  M. Rondina', 440, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1110, 'Glaiza Shaynne P. Rotel', 199, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1111, 'Vanessa Jane C. Rotel', 1209, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1112, 'Allane May D. Roullo', 684, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1113, 'Saalica  P. Saad', 490, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1114, 'Elizabeth  M. Sabando', 658, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1115, 'Ahman  M. Sabdula', 600, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1116, 'Narissa  G. Sacop', 716, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1117, 'Ariel  G. Saguid', 1177, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1118, 'Louella  V. Saldua', 1441, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1119, 'Sebastian  L. Salif', 1412, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1120, 'Fyron  G. Salilaguia', 780, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1121, 'Roy  U. Salilaguia', 940, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1122, 'Marissa  L. Salmorin', 504, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1123, 'Christine  V. Salutillo', 828, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1124, 'Angelita  G. Sampan', 822, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1125, 'Ma. Erylie S. Sampigat', 494, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1126, 'Flordeliza  C. Samson', 384, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1127, 'Sarah Jane D. Samulde', 533, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1128, 'Anna Carlene M. Sanchez', 424, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1129, 'Almira  A. Sandek', 1383, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1130, 'Asnairah  A. Sangcopan', 857, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1131, 'Narly  P. Santiago', 604, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1132, 'Necita  M. Sapidan', 859, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1133, 'Jeselie  C. Sarael', 1176, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1134, 'George Lyndel S. Sarao', 1015, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1135, 'Corazon  S. Sardedo', 433, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1136, 'Labiba  H. Sarip', 621, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1137, 'Mohammad Sunny A. Sarip', 1008, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1138, 'Nor-shalea  S. Sarip', 195, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1139, 'Talha  D. Sarip', 881, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1140, 'Zuhair  D. Sarip', 1427, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1141, 'Esnaidah  M. Saripada', 324, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1142, 'Michael John D. Segafo', 211, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1143, 'Mario  A. Sembegan', 541, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1144, 'Luvimin  B. Serva?ez', 430, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1145, 'Rosemarie  T. Silorio', 1062, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1146, 'Marie Jennylyn C. Silvestre', 886, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1147, 'Shiela  C. Simon', 831, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1148, 'Maida  K. Simpal', 1419, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1149, 'Enrilo  T. Simson', 1583, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1150, 'Estrellita  A. Sinajonan', 93, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1151, 'Asrullah  A. Sondalo', 466, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1152, 'Cristina  O. Suclan', 829, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1153, 'Joel Rene J. Sulpot', 282, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1154, 'Norlaine  T. Sultan', 1404, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1155, 'Lilybeth  O. Sulutan', 667, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1156, 'Sittie Connie U. Sumandal', 469, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1157, 'Rosemay  C. Sumanting', 122, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1158, 'Abdullah  U. Sumbaga', 427, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1159, 'Nenette  M. Sumonsol', 968, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1160, 'Kris Joy M. Sunga', 1174, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1161, 'Roberto  R. Sunga', 1487, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1162, 'Lynn Orchidjune R. Suria', 1156, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1163, 'Selma  S. Tabion', 1162, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1164, 'Donesa  T. Tablaso', 867, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1165, 'Karen Kaye B. Tabojara', 1398, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1166, 'Lila Mae C. Tadulan', 840, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1167, 'Nurhaifa  H. Taib', 457, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1168, 'Aileen  G. Talapas', 784, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1169, 'Abdulardee  S. Tamama', 1415, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1170, 'April Joy M. Tamayao', 838, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1171, 'Ronald  T. Tambi', 114, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1172, 'Asnairah  S. Tambuto', 467, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1173, 'Diana Ira O. Tan', 991, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1174, 'Ramadayna  D. Tan', 813, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1175, 'Mark  D. Tanael', 712, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1176, 'Janice Gey B. Tanalgo', 429, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1177, 'Amaliya  A. Tanggote', 913, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1178, 'Joharie Abdulkarim P. Taya', 400, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1179, 'Hilda  S. Tenizo', 475, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1180, 'Abusama  B. Tiago', 348, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1181, 'Maria Luisa M. Tindoy', 641, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1182, 'Lea  V. Tolentino', 482, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1183, 'Haydee  M. Tombale', 1173, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1184, 'Grace  S. To-ong', 1077, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1185, 'Haifa  M. Tuanadatu', 777, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1186, 'Noraisa  A. Tudon', 492, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1187, 'Love  M. Tugade', 383, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1188, 'Sheila  S. Tulio', 1175, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1189, 'Joy Antonette D. Ubas', 297, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1190, 'Marizel  B. Ubongen', 1159, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1191, 'Sittie Alma E. Ulangkaya', 679, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1192, 'Mohaeddin  C. Umpar', 971, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1193, 'John  U. Unak', 1423, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1194, 'Faisal  E. Usman', 46, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1195, 'Johairah  L. Usman', 637, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1196, 'Sarah Jane U. Usop', 152, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1197, 'Esnerah  K. Utto', 219, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1198, 'Hamdan  U. Utto', 1403, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1199, 'Rehanna  G. Valmores', 1449, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1200, 'Vivian  T. Vicente', 1070, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1201, 'Jhobert Sonny M. Vidal', 284, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1202, 'Vanessa Lover D. Villaceran', 879, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1203, 'Cristine  A. Villaflor', 196, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1204, 'Thricee Jewel B. Wagas', 914, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1205, 'Rihza  O. Watin', 1165, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1206, 'Judith  A. Yap', 825, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1207, 'Norhata  M. Zacaria', 1447, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1208, 'Baidido  B. Zumbaga', 333, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1209, 'Potre Aleeyah S. Ampong', 1110, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1210, 'Normelah T. Saripada', 1087, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1211, 'Aiza T. Sultan', 1126, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1212, 'Abjuhary H. Amer', 1094, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1213, 'Noralyn S. Masukat', 1131, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1214, 'Queen Hanisha T. Mandangan', 785, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1215, 'Janette I. Abraham', 1084, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1216, 'Maharlika R. Dublin', 108, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1217, 'Marychu L.Radin', 592, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1218, 'Dylene C.Pamularco', 1100, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1219, 'Orkey B.Yap', 1101, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1220, 'Sheila Marie L.Ulbata', 1202, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1221, 'Edgar Roechee P.Gabunales', 1537, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1222, 'Geraldine C.Niones', 1161, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1223, 'Zalika D. Butuan', 1196, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1224, 'Aslanie C. Amerol', 1184, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1225, 'Richelle V. Duyag', 1160, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1226, 'Renalyn B. De Guzman', 1001, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1227, 'Ricky Y. Humagbas', 746, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1228, 'Noor M. Mampen', 1185, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1229, 'Sheena Pearl R. Manatad', 1163, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1230, 'Naikie Jape O. Khan', 1529, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1231, 'Laling B. Mueco', 821, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1232, 'Maleeha B. Salman', 1181, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1233, 'Julievy T. Lorizo', 1020, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1234, 'Norulhuda  U. Sangalia', 809, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1235, 'Dwight  A. Togonon', 852, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1236, 'Renalyn  C. Ruam', 660, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1237, 'Ma Charmel A. Alvior', 498, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1238, 'Ma Catherine T. Dayag', 606, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1239, 'Edgar RoecheeP. Gabunales', 1537, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1240, 'Naira K. GANI', 907, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1241, 'Insanah  D. H Racman', 393, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1242, 'Juamer  B. Leyson', 1495, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1243, 'Anwar Bassit  H. Lidasan', 276, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1244, 'Coraisan  M. Mauti', 1583, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1245, 'Rahima  P. Namla', 513, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1246, 'Sajid  S. Namla', 62, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1247, 'GeraldineC. Niones', 1161, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1248, 'DyleneC. Pamularco', 1100, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1249, 'MarychuL. Radin', 592, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1250, 'Ma Erylie S. Sampigat', 494, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1251, 'Enrilo  T. Simson', 1584, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1252, 'Sheila MarieL. Ulbata', 1202, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1253, 'OrkeyB. Yap', 1101, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1254, 'Jalal A. Toroganan', 1210, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1255, 'Jalilah M. Zacariah', 1186, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1256, 'Norjanna D. Macadadaya', 1192, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1257, 'Norhata M. Abpi', 1040, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1258, 'Johara A. Alauya', 1057, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1259, 'aaaaa', 12323, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1260, 'adasdas', 123, '4PS-CONTRACTUAL', 1) ; 
INSERT INTO `profile` VALUES (1261, 'Noria  Abdul', 66, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1262, 'Robia  Abdula', 203, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1263, 'Anisa Abubacar', 255, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1264, 'Sonaya Livianty Alawi', 306, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1265, 'Rosemarie  Alcebar', 95, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1266, 'Bailano  Ali', 14, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1267, 'Naira  Aratuc', 131, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1268, 'Suharto  Bansilan', 151, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1269, 'Daisy Barnido', 267, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1270, 'Norhata  Benito', 124, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1271, 'Asnaira  Bunsa', 273, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1272, 'Rohaifah Calandada', 511, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1273, 'Julieta  Clavel', 258, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1274, 'Edmundo  Corder', 253, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1275, 'Ernesto  Dagandar', 60, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1276, 'Marez  Dalida', 128, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1277, 'Ibrahim  Damang', 69, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1278, 'Jehanne Dari', 288, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1279, 'Amina  Dataya', 29, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1280, 'Lyhra  Dee', 47, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1281, 'Dennis Domingo', 395, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1282, 'Marcelino  Ewa', 56, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1283, 'Remedios  Gabriel', 41, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1284, 'Edgar Guerra', 109, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1285, 'Merilyn  Guerra', 16, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1286, 'Sinomambai  Guiani', 53, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1287, 'Junaina Guro', 327, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1288, 'Alaminah  Hadji Yusoph', 241, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1289, 'Jabbar Ibrahim', 338, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1290, 'Jelly Jabat', 305, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1291, 'Muslima Lamada', 262, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1292, 'Jackiya Lao', 77, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1293, 'Sarah Lucman', 157, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1294, 'Mona  Lundungan', 61, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1295, 'Naida  Macabato', 249, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1296, 'Datulami Jr. Mama', 217, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1297, 'Sittie Hannah Mama', 102, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1298, 'Norhayma  Mamacotao', 78, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1299, 'Caironsalam  Mama-o', 296, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1300, 'Jonathan Mandi', 235, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1301, 'Guillerma  Medija', 45, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1302, 'Jobaina  Mohamad', 114, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1303, 'Ali Namla', 295, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1304, 'Tayan  Namla', 55, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1305, 'Jamalia Panolong', NULL, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1306, 'Angelita  Paquibot', 136, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1307, 'Abas  Pikit', 43, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1308, 'Evelyn  Pinongcos', 286, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1309, 'Ismael Rasul', 1123, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1310, 'Ludmilla  Rellores', 54, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1311, 'Gemma  Rivera', 5, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1312, 'Annepa  Sanday', 64, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1313, 'Reean  Selma', 134, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1314, 'Bonifacio  Selma Jr.', 58, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1315, 'Johanisa Sinbangan', 268, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1316, 'Melba  Souribio', 24, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1317, 'Camelia  Taha', 132, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1318, 'Bai Zorahayda  Taha', 2, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1319, 'Tautin  Talembo', 68, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1320, 'Windilen  Tato', 141, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1321, 'John  Togonon', NULL, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1322, 'Shalleynie  Usman', 99, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1323, 'Shierra  Usop', 246, 'REGULAR', 1) ; 
INSERT INTO `profile` VALUES (1324, 'Engracia  Ysulat', 21, 'REGULAR', 1) ;
#
# End of data contents of table profile
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Tuesday 2. October 2018 08:58 PHT
# Hostname: localhost
# Database: `dmcsm`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `backups`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `dtr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `images`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `profile`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `roles`
# --------------------------------------------------------


#
# Delete any existing table `roles`
#

DROP TABLE IF EXISTS `roles`;


#
# Table structure of table `roles`
#

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) NOT NULL,
  `desciption` varchar(1000) DEFAULT NULL,
  `client_registration` tinyint(1) DEFAULT '0',
  `client_deletion` tinyint(1) DEFAULT '0',
  `payment_encoding` tinyint(1) DEFAULT '0',
  `mcpr_generation` tinyint(1) DEFAULT '0',
  `incentives_module` tinyint(1) DEFAULT '0',
  `audittrail` tinyint(1) DEFAULT '0',
  `settings_useraccounts` tinyint(1) DEFAULT '0',
  `settings_accessroles` tinyint(1) DEFAULT '0',
  `settings_dbbackup` tinyint(1) DEFAULT '0',
  `settings_dbrestore` tinyint(1) DEFAULT '0',
  `filemaintenance_agents` tinyint(1) DEFAULT '0',
  `filemaintenance_branches` tinyint(1) DEFAULT '0',
  `filemaintenance_plans` tinyint(1) DEFAULT '0',
  `reports_incentives` tinyint(1) DEFAULT '0',
  `reports_audittrails` tinyint(1) DEFAULT '0',
  `accounting` tinyint(1) DEFAULT '0',
  `burial` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ;

#
# Data contents of table roles (2 records)
#
 
INSERT INTO `roles` VALUES (1, 'Administrator', 'Software program administrator', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0) ; 
INSERT INTO `roles` VALUES (2, 'User', 'Encoders Accounts', 1, 0, 1, 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0) ;
#
# End of data contents of table roles
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Tuesday 2. October 2018 08:58 PHT
# Hostname: localhost
# Database: `dmcsm`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `backups`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `dtr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `images`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `profile`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `roles`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `users`
# --------------------------------------------------------


#
# Delete any existing table `users`
#

DROP TABLE IF EXISTS `users`;


#
# Table structure of table `users`
#

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(80) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `approved` int(11) DEFAULT '0',
  `status` varchar(20) DEFAULT 'Active',
  `picture` longblob,
  `picture_size` varchar(40) DEFAULT NULL,
  `picture_type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 ;

#
# Data contents of table users (3 records)
#
 
INSERT INTO `users` VALUES (4, 'ALDEN A. QUINONES', 'alden', 'pass', 1, 1, 'Enabled', '���� JFIF ��  ��<0Exif  MM *         &  �      �    %  �             	      	 (       1    &  	(2      	N       GF        �i      	b�      �  -��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         Windows Photo Editor 10.0.10011.16384 EASTMAN KODAK COMPANY KODAK EASYSHARE C1013 DIGITAL CAMERA    �     �   Windows Photo Editor 10.0.10011.16384 2018:08:27 15:23:18  \'��      H��      P�"       �\'     @  �     0221�      X�      l�     � 
     ��      �� 
     ��      ��       �        �	       �
      ��|   �  ��     0100�       �      
��      P�      -��      -��       �        �       �        �        �        �      -��     "  �        �        �        �	        �
        �        �     <� 	   ���    �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           \' B@      
2008:01:08 11:31:17 2008:01:08 11:31:17   �   d  %   d       
  %   d   =   
IIII �  h   \'  2008/01/08 11:31:17  P�
     @              � d         F/W VER 1.0000                �        zxP    sunny8_iq_debug         �  �ZD852012742                         d � � � � � �   @�                                                                                                                                zxP                                              �$  �@ 7  �  d   �          �              /  _;���    �  x       �  ��X~       x      0  Tc�3    ~  x      �  ���    �$  @                                                           B � � 5 .                     �    �>                                   !B�"\'1�������: o!%05�������&( ,! 4:�������$
\'5�������`������
���
��	9�!�#�E�+��
����/������

	23i������	\':*g������                                     �   awb_debug_info              x�
     tv x�
      �   � � D� �  �          4Z        � �        �4� ��     ]     ����                                                                                                                                   P � � ( � � 7�Xmk3��-��3}Xh���  �\\K�6�0� r� 3� "� "� � V]� _�������X��-��D� � M � @   2 H   F d 1 � � � v W � � � Wn���������(� � � Z                                                                                                                                                                                                                                                                                  K < Y x � � � � ;hi������q�����H:x/he$~��G$4�W�^�aw:(Oc�UX�                                                                                                                                                                                                                                                        ���� � d ��     ��D                                                                           d     �  V  d�  �     Y a i q y �                     n  �  b  �  �  W                                      �+  B0  �3  �7  }7  =0                                          �#  *  �0  �1                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     "         .-,+)\'                                                                                                                    } } k s k � k                                                                                                                                                                                                                                                                               u[	%Ml��?d2kG�E(DsC1FIEr�+	�"Q�	��48�G�FFD�F�F|	�IV�Bs�6�H�H5GE�FH�&��� ]d�6+%M>�H�G�E�F�H��R� � � ^���� *"FA�H��-T�� � 0^y�����CO�|s� � n��]�L>�	d)�~
i�� ���[�?�	LG��%�MdN����F.�	?p ��aA��b;�	A��Q��~Z��	�V!
.\'���VT�k�\'_�I	+	�1F<��.8{� fy�	�	�>E�I��4� =K�9�+�(`>&II�H�>�^=�6�)hI�J5N(J~H�G���D����$*cH3J�M�I&G�E
	n=K&��#�2vG�EID�CYF]E��Z	J"�	�	N 8�GG\'F!D�F�F�%9}R!�p	�?�6�H�H_G;E
GH�6�z�;x��\'�=�H�G�EG�HR$^�q�+^0�+�"�%�AI;(t
�9$%>P"���Fv�#D���6�E�#5R��88-A��b�x+�E�(�K�I�6{"m�.�N> ��0p��=$H<8D�@R7�5�AKtGY+�+
�	W�1XBOP�HnK�H�ClL"PsL.��	z�EA@"H�G�D%+�5];�GKeC�K�	})�;:!s:<B�5q�Y#V9MM�*p8�&0
NG�<9!7q*Kvlw
R!C?�)Mx(WF�I6(�2J/�[��
�
��/,AaIII/�=�H�=f.�IqK5NJ�H�G��)�$(!�j�r-�H�J�M�IMG�E    R   �      �r   (                �: � 	�        @           ��P�\'T6	��  �  �   ]  �                 v   \\   �  p	    �    �   �   �   �                   �   1   �  �"    �  �  }   �   �   }                   }   `   �  �	      )  �   �   �   �                      {��?                     � � � � � � �   � 7�$                                     x  �
        P  �
  P  �
                                                 ,%# P%#                �                                                             tv  Y�      V  t�  �S  �   ^T \\X  \\�T ��  �8U ��  � ]       \\"# �"#     �       �"# (## l##       b` P"# Z � �##    �##     $#    <$#    `$#    �$#    \\�+    �$# P�  @r      t%#                        �                                                  P  �
   ���     d   N   �  n  v   \\   �  p	    �    Qi�?  �?ܳ?   d   �   �   �   �     >�    ` �� �p     �p p: �_ `    �� �y  d= �p �y  �?     �c \\`    \\a �c �` �c �^ Dz  ��     
   �c \\a         �p �c Pe �c    >� �p �o N pI ��    d      �    �   1   �  �"    �  �  ��?  �?{ҹ?   d   }   �   �   }     �B r    �z  M�" �z     �l �z      B�           �~     G  �    G  �0 bMSmean:	1095	bSD: 1�                              ��      x   \'       �  ����    �]	         d   M   �  �l  }   `   �  �	      )  =��?  �?A��?   d   �   �   �   �     �� �)  t  ��        �p P� >E	 �{  �[	 �{  T� P�         pB ~�    ` P� �p         �: �{  �?     �c \\`    \\a �c �` �c �^ $}  ��        �c               26     {��?                                                                                                                                                             0100         @          
                .      .(             .              `      `   ���� C 		
 $.\' ",#(7),01444\'9=82<.342�� C			2!!22222222222222222222222222222222222222222222222222��  z t! ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&\'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&\'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? Њ<���J �`>�� $� ��x,��.%X׶O_�`\\x�؈-����nkHS�ԙI"��1�\'�ǾI�\'����=�<����7Q��\'��q��럗� �[�7 A�<�+Õ�FJH_ �S��TB�J�$X4^h��u�U�Z@H+;X�c����W����ڜU݁�#�/���i&��w$�=�f5�\'��z��U쬌w�`�4��w�t\\�c��.:+����y�i7[? ��3�Oލ��-+�܂E$�:�:�Q�1��ey��E�u�U�P� I���Z��ڌ��(�Ǡ�iore��O?��A�G_z������#<�����踬lU�k���x4�G��OZ�u��&l��O���Et�V3Vf�wDnF*���d�vSتW�*�\\�^E["�3u۟����+�~���{�0���k��3ROE��-!\'�N�\\Ve�4��4\\,8�جOp=�jx2\\Ba�ni�si��L�k�Cq�~#���y���)��$P�񢦪�4��:�y�&���3G�*�В��U�(��t�x��HO�1�kͮT���f�_���=:�SV"� �ק�>���71#�j��eu�5�� !�i-I&�d��+�"rG��]F��m��.�Nz{�Y�VV5�gr=Z���;⻏_}�HkrŚ�������w�gQZgO�U���$��r��LE�qȫM@g�����~�[�8����(Y簭��"����<��� �.�9a����e ��ݖ$B�U���zDzr�.�=����yX����>���:\\���	&��N��":{���WQ-��`(�� �y;��卌�^�%��#�3!�=�U~\\��<G�2��� ]t��8�M3��U[��I�P�h�6�EYj �|_6�`��*� ����u6�Ǐ���z+F�fvn88��5g �>���� :�Z:K�G�Rl{���3�/� ^��(�cvX�Xs&{�?�LVRzPW��Ԁ�
��5IL��A��V8D���;�ʹ�3m-�.w4��y+}��)��6�0�>p���]�����b��MI�L���\'��*� �OL[R�oF��q�+����r�ɭ�$q�#.@P���Z�}�7"K��Tm��?������Ի�����ha".�
n�� �v�s�VW�_GQ�����Eu-\\�4{N~n8�gUЯ5#�� b~�A��������RKB� �<��;�� N;�:֖�
C�.�۟�N�i�գh�H5Vsɫ9J��,\'��XS���%��y�o��H�k�<�I<�g�j���-��H����+���ʢ6Y�r ��	ǯZ攵��N����w�����<�1���z�����R� ��\'/Vkʴ%�0Pt�|��\\����(�DH���oE��bq����)|v9��l���=�u^{��ᮿdy~Ԩ�`ph���ꓙ� c�*[�NQ�I\'ʧ>�vI\\�.���M�ٛ�9�����s��;]A�� �s��c�|%5��;F��|Ü���wv쬠��A���eE��F�*:w���i�3����ey�&9\'#==�1-J�w�A�Ҹ����i�����I���ZQ��6%��:�u)�
X�]�s�x�\'{��@�w3 +��X��n�3�/�R���Ȣ�8Xe��H����EG�$Q�\\ym3�RC��� �S\'�pZ���ш8�k������A��X���\'���NԣC&�oT;��?Z��MM�	(�ǡs����û�ŉ/��A8\'��V���#��f�Ν�/
s.����Ǻ���f!��z��@�k�~!ԓL�X�b�s)c�Gs�W\'e9�{i���7=���+F�^W��G�����tP��D�쎃�*�33F��W���8���y�M3=��6
���X��wd��!�ѱ������:l��r�
O�f�и|Gy06�Ѓ��Ʋ���#� ���8��Ld�nleM�hdQ�Pz���]?��h���X��l��q����r�ѭ*��=��9J�PW��2[A-��8�ș݁����z*]J���/�S��g�ʶ��s3*")<pw��c���溕��z��pir)?uz�4��(ǽu-�*Z���C����-�غ0���ҵ���D詀ǧ=*�&s�N�O�{���u=�h��2�),{�T$+��g�X���Gm��[w�J��/x�眐Ü����Ry	D ���򦎂�X�N*Kz��XA����Cv��Q�	�>����Nf.����K�Ǣ���г�k�<���)��������$l+�W���[���y�\\4���i��A楖A�=k�ly�rݞ�42|���##���Mb��2E1�C2��EKzX�C��� �O,��QSy��e/�A�A�g����=ǔ��`��i�]5��H� 6}�.X2�N�Q�&�k�2ϑ�{z�X�@Q�`vfԑ�[�I�X�J����f��/\\W?S��O�q��K��2��q����X��īk! �ۿ�?�j�jd�Ȭ��9o��I�3��|�=�=>J��sF����c�� ����V�tđ�2>�%*��.*��hnAN�4T�fi���y�\\N�9iebyg� �V�%3=����]�\\^�(�d`v=*d�ovh��y:����I*GL� �뷷��#,��\'�����IXٴ�TPv��г��#�թ[���5Xd��X��r�[<)$�s�)�Կ�$�Q,N�$h��#\'��kr_�Q���kW���^¸�F�F�x�V�g=e�����dy��X�B�q������F�M���
�?��D�mX��?y��0%�̓��|�����#!?k�{�q��ֻ>�_���]����w� 
η�Κ_�ʋ���F��ֵ�r�n��Qַ6�M"9�88��5��5�R�9�������*�B��U@
c� pMy֩� !����iLʶ���I6����gں[Q��]xm�G^����%R��j�UW��:��� �� uFPXR     � /  E x t e n s i o n   L i s t     �� /  S c r e e n   N a i l _ b d 0 1 0 0 6 0 9 7 1 9 a 1 8 0   ��FPXR        ��    Va`�T΅S � ��[   Va`�T΅S � ��[0   q  
      X      `     l     �     �     �     �     �     0    x     �                S c r e e n   N a i l   ����������������������������������������H    0o�н `���      @   Pͧ ��@   Pͧ ��      P i c o s s   ��������������������������������������������������      P r e s i z e d   i m a g e   f o r   L C D   d i s p l a y   ��        /  S c r e e n   N a i l _ b d 0 1 0 0 6 0 9 7 1 9 a 1 8 0   ����⒕FPXR       ��     1o�н `���    1o�н `���0   x         @      H      P      X      `      h      p      �     �     �     ?�               A   ~�  ���� � 		,0# 
$1=84.\'(42<47 ").3\',942		2	222222!222222222!22222222222222222222222222222222222�� ��" ���          	
   } !1AQa"q2���#B��R��$3br�	
%&\'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz�������������������������������������������������������������������������       	
  w !1AQaq"2�B����	#3R�br�
$4�%�&\'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? ���I
 �yܧ�⠆�f��9#��*�K��UN��9���v���H�$�)���C�436쓌�Vn`"=�9�� v5�� Z�1h�+2�\'����U�;�?Z�p� ���\'�8����|2�$j@.*x&tnz��Y��C+��s�U�.G��\\�RGE� #����)��F_�.���ߴ��I#Y�Yb� 7
�a��+�N@R�Rq���S�4mM�=��;��[h\'�GR��3����oy#i���K*l>���������W��?yzG�9He	$�ŉ�<+(�]G�*���q��Z
��S�sB�]@�y�c�8�Q]��8��o��f	d=ZR?](�V�;}�E�n{�D�r����E$Y{�@���S��\\��g*��-���୔��yWx�*��_i�?�,�8��~���H���|ǒ)!�?3Y���GS��v�{sf����u�7Zx�ЌP~��	�_&S)�]�%Gl��W�$x��s\\�^�r	���0a�R��hҾ�H��7Bt��hݓ�p*�8�SJ+FOr�Ȭ�9�5T�U�܀j�1�&OP� �z�S-�e��㈁�UV՝���1S�>8�ڟ4~j��:0� �s�+��c;��X��W���j��hz�D7�[�;1[5�--,��s�j�QE�\'p�ڻ�:d
��
����e{��#�c�O�V�@�!��f��1=2��Ւ�DD�h���L&������(��UT$�3�W�T�$���MBZ��.D���tt?�i���, �	*��~9�i�3�J���i���������+�+Ezx|��읬&f�V�ș� f��Zi��Oʽ9�6�c�[i�#� ��9O�F�?�U��ޟ�[H����Z1�PT���QF����*{DQHC�T=�a�\'�\'�t�elc$�T���B��
3[lJѴ۸Q���r:��s7�9�O���  � �q��=� �ǟP+��vF��~T��N��QEdwQ@Q@Q@Q@Q@Q@Q@Q@Q@Q@Q@Q@Q@Q@E4�}!���	6�l�#>n�=��jr������s��{�����b���� �` �������ӑ�A���_U V]�{<�s����$V�f#�O�Y���� d�>��2��T�#�Uk[av�VI��[3<�3�MU��Oc�њ?������W�E7������0*��9�\'&�Xɾ<8�]߭Z�h��:��*�/ȗ�gS�9��9!fϖ�����A R�nܵ��Wk�k�������kCķ[�N��� 1W��!����d�$uP~b?
��.��ݍ��X�JZ�;p?��.BM*�!�b/�h��w=wñyzt^�,Z�ɪV����4�Uu\'�ս�_�H>��(�(=?S�jJ��D���a��kh�+&��B3>�}G�5�Q�Bk�g���#e<�:>H�ם^ۇ�؞Y���Ӽd�h�&�q�b99�a=&�S���,��\\ڦ`;�W�t����YH5�Y�J�_2��pܜ�5V\\qԚ�d���9�*��3Q)Y�BL8݃�� ?�l@�?�x�k&Ty�$m���@�O�?S�!10�e�_�h�$a�����:+v,A��e_"qn��e��k&���c|x���EX�����vԂH<n~�5ϴG8=+���K[��d!z�KV�ĸ����a��b���́q�@�,��4Ij��x-����T��<����GP=��*��#Ҵ`^����¶��]��]�Vm��Dd1�h~�!�_!��GW�%�謤X��� ���q��E��]�c��Y���w9 b�i���ݏ������-D� ��,%�4�#㦸	"V��cf�~D�a�ݩH!S�^�#�$W+�+T����)ضki=��/��~�A��	�5+L��j�/��5��59-�e�T-�bw`�8#�hZ6�+� {VkǄ��?����� �=�Fۊ��3��/�}���Ԝ�]P�TmQT�J��+9�wᗻ�ETAEPEPEPEPEPEPEPEPEPEPEPEPEPEPEP�R���U{~��i�}e�\'�s<�``Ƶas�*��tC.��� f�em�gں"��a��y�����H��YTFSFr9�	�������I.�
i��e�=QJH���w53H���T�`v�s�����v��@	�-��m	h�\'�(T�H������]�X�����%3��nj]=Lr0�A\'�4I�C~�y���M���H�Z��/�� ��ǟ�>쳹 �j��S.�s��2����q~������0oºHu0nc�Pe�O׊Ě�n�|�Q���Z���=G�#��H�3]\\2�0�z����G�����3�W�_˸%�>��2��#�=q�z���9��V��ũ�����*����6OB¾��2c��u�N�v��d��v>�4���G����)�?�\\r�yHs�)���R���\\��(.���j�/��[�VCx�<���9�*H���2��UTr���5x8G�R�YOo�Ko���L�{�j���q����,� i,���?:ԅ�k��q�"�q�z���U�<�U;Q�#К�K�����j�3y�t�ق�ղ������\'�WX~frc�I>]�Ìc�T+p�C &EE��\'�_��L�ņ+��dzkC˟�rsZ���d<����_�������v_09�����r)���9P��[ys2g��/�Q�9I_�$η�?!� S&�0�[����c�7c��33��TC�b��K��f����Frr�Y��u}�%F}������j��}��RG�*_��%�	���D�Cȫ�H�{�����F)�z���*�5-��C��l � ����Ih�:."�I;��C��Tu����8b$�Zz!���-�\'�Bo2�c����a���{|��ΰ+|�1�?�����@6}�!}[�i�
̱.Nq@u&1����~U��$��Uz++Y�|�n�]�%Sp@9S�U�R�N��;y�ʮ/J�m��:V2�����E��*N���( ��( ��( ��( ��( ��( ��( ��( ��( ��( ��( ��( ��( ��( ��(��{�-�D�O����Z�,.�c�	?��������Ý|	�DP2K(�3Z���fL�1\\-��֒+���� �[Q��� H��߃[F�9�A�&~�hm���p�@�k2~�չ�k��u�ԭ�iRO�`ɴ2����g&��g4�4ޝF�f2eNB��\\dVΟj.�`��4��6H�r�����=���o�̙��:�9�Ld��_u�1-����	 ����8��2KR���n�6H`q�5�x�ȋ���5��^@�M2�2	�S����h�	Y8袥�`�&��V������(�m��[���Q�p��SE@P
�)� ˸����ɵ�El���� �Bc8��:nv�����S��תF�q"����{�Յ�Crp�zG��P�o����� t
�2�rٞ�#@�sҗ�D��k*V+�1�`��zY�"�l�x?�1�s˼m(k�n�H�5Uz���E��u9�y�J�$��~q�\\�Z��9��Y���{��F��\\~����zX�<���$S�n�̳f9$�v��.�5���ۗ��#�G �~���&(?���$�$�����Hjw�$�Rރ)�y�5f+p��A^sG�E-�lܘv1�SCl��c��#�sݳ�¤[RW��FG�VwՅ��}�q���H��T;��<.�)Q�Wh�ւ��l��h�F�����eÑ�|�~kQ��B�$ҩ%	FEh���	. -��mP*���t#��̊�>��Kp����p=�Z�1_�-� ���
K[u�S�RMB.E�%�hز���N��]��Ŝ�O��#��I�1��L}+B�PKw�wB���5�clnnL���3������}
����L�Y,��:�=��d,�,��wq��M��-O0|�;q��r��{?����?��ɖ т8�H��J���aG�PH�y�)	�`�f�溟�*�<��r6� y85��^����+TKv��V�t�j��T�T����Ұ���J��-QRtQ@Q@Q@Q@Q@Q@Q@Q@Q@Q@Q@Q@Q@Q@Q@#���j��N׌w؃��)|�VB�����S1���W�g�GL)>�\\�|9l)d#�Ɂ��� çcU���"����W�Z�����GB����Px#�ʺ��S+`m$pG�WB}��py�p�5��T��y����6�d�<�5.�>b�����tb�:λ�F�rMv�ƻ��xr�K&0��K���u�^�qa$� �����"��� �t1w"t�-xZ"s�\'\'���]�t����`1\\���R��[!NX��]t��#7�����Z�k*�6�JeƏ< �pPq� ׬�O�1[FW&H��\\� l�#�s�ֺ=;���S\'��� Z�o8��n���l�a(��k	yv��?�d\\���j��H�EvW��5b�T�+/��L�#g�2�Ny��hIר���DQ�"��Չ��M�._�ނo���\'��V6��Č61\\��� ` c��j6I �Ʋ��|�վϝI�極5#\'����"�n��+R�
�W�nJ�l�cF�
���܏Ƭ�rY�p@z-�H�s���\'p[���ݰcn�f�{|����6 �U�!C��w���(�h\'�1Z}�E�/	L-�8�Oҩj�_܎H���ڵȌD����͏s*�ELV��.�����H2�2���~�]�D���)#` 8��U�6��X[b�����n�~c��OVvU���M\\0�R�Þ1��{���+��7; k���	�Þ�Օ�i�v���3�Vt�ݮ^�H�c��U-�W�hk���� �	�
�a��v���ƽQ��]��Ur>��?�c�{�մ�ބ����.������aP����"ǯzl$p��"jz
��p�����&�� ݈?�gD��/
\'���,yQ6ܒ�Έ�6z-��WJ�fr���WEe?����Z(���(�� (�� (�� (�� (�� (�� (�� (�� (�� (�� (�� (�� (�� (�� (�� �U*EZU~U"��@h^i�1O ���N�Fc���ȣ��G�R�c4�P^|����jʼ�h�ю*�F�1@ � HH_�<���Dc�U�vo�v5�{����pO }:fF9�#vj��p1���L����c��0�p�� Ȩ�L�648�9�|/Q��&+��3}�����ծ㰷wu�\\~x�}F�[�ҒWj��(��\'��F�.ݕV$~5����K��vFu�䚅��� ���Zy�,��p�����<������]ճ-�m��S���~*����C���s��B���~�5�]Y�.r��s�g5��z�V��a�m�A�F+��5ĒF��^�`�3��VK�����E��?�;�J]�W���Ρ���9vɯZ)�Rc�#�ӖNj��4����Z^Iq�T��#?�5��q��d��R�I�ԒF9�~T�FF=~^j��$�H�׌~�����0�����g�j� 0��_�H�N�N��Y�x5��QN����yڱbz������Rq��T�N1�®[!TUc�^E$�	�)5�0A>�e5��u�V���f�ۆ�r��c�ٲ�s��!��Mj�\\/���r�Z=���}N
�뚙�B��j}�.N>�#�� �A�Fa��+h[�>V��@��V���� �%��x��p?8b?
�%o1�>P��J±�h�m�Pq�V�"�R�3c2���խd3nl-f�����qa��O܉_eE��M�-ʬ�}�\\�f�� ��]��X���ʐ±�5K��/e������L�a2)��B-�z�N�yq �R/�硦��f�W9�bQ�Mkh���T�zʰ#$�lc"�i�:L0������zM�\\��С\'$�&���g?��ÿtZ(���
(��
(��
(��
(��
(��
(��
(��
(��
(��
(��
(��
(��
(��
(��
(��<pS��ګ����Pאw�u��<�Ta�M�I$��@{�z�f���M�[��T���3W��\\������^�W�ͨ�Y-�b&�RUA�,66
�$awu�j����end��U9?�=��u� \\�s�mO�(1���\'�p��~�ԟ)�j�+��ݑ�-�@��z��:�mj��ϦOn���Z[�lw_6��z�kF��¥Bm+��wa�MwƂRZ_�B.��˟ꊤ�R�m=C�S� ���3�@5b�:���ޜ�8��?,���r�W�K��#�s�ݝ^��ٵ8�? ㏥a%ڣn#�k(1�i�u�tFNm��OyQ�
1�Z�u��,����V&��{z�TV��e���g,�I=sQ���ҙ��ޔ�=kT�3[4��"��&y�zb$e����Ґ����}��y�S�
pPz��\\��ԫ!8�R�d�h* �����Y������?�q�Ҁ,��52M���H�N�OBiXw/���Jz�ϷZ�ù�O]�3E�s@m\'ӑR	z7��z3�9�S#��֋4�q�֧�����k)\\0��T���4�)��"����Xu�")-��H:T�}O��b��~ �9W23��h�z�Nѕul��?�y�b�v�\'8��?�Zِ����KH��1����b�����c������>�"��#����R�t������N>�43+��8G=�uyF1&p;��R����N�&�l�D�����^om{2�r9�[Mn��Eu{{V���S���6$G/��ZJ�בX��hp$�#� �[���`������)�ViO�G�Q\\u�������ޟ�W�ŖG��9��Y������@=Gz���E)�MCN����( ��( ��( ��( ��( ��( ��( ��( ��( ��( ��( ��( ��(��l�T��_sY�\'�� |��/S^1�X�_h�sH_$��S2���?Jkρ��>ݨ�H��?�Fs��>�Q��f�x�T������bK�H���UMV�iZD���{�l���VW��RF�қ�g�+�u~����"Cہ9>�}jօ�)�{���~���ڗ(��o���5���X�G�@�{����.XE#*Q�l̖�[ɲ"A�.L
�ԯ#��������}^�m�q�
)�����&���Ǐa���L���I�Q�s��U���6O�i���
�Q��q�)B��V"���?�#��p%�F�6{~X�KHv&�3���b?>R:��>���7��T4Fw�z~�W�fye j�"��a�>bZ�Y�����*�#C�# �8�5WEz �R�~\\
O/=��M���(�w��T	�F�}��W=���`���;�xs�9��<O"��8����}* :ѓ��P��g�JP��|��ӥH����P����f�\\�֩�知K�+Ϸ�BCL���Fx.~`j�q�.�IՄ��\\~B�C1��2c m��;
�]��I�N��<�@��ԝ�s�x��<��=O���q
>^?��,��^�Za}K�L�a�3�1�U"��"�$�(�Bz���*�i��UPT�\\��#�QK��<�ښ�  � �^�\'<��FF���Vz����SE���(D�fЙ��ԢbS>���Xi��U����䞿�P�_�v�ߊx��x9$VZ_(�1�MK��<��� "Z��d`� �*h�p�V ��5�\'��)C�={S�����k�0�d�2�z֔^1�� �#�q������g=���ɱ�p���2maZV�  K ��+�|���)�s��Xi��휟}x��я��{����x/�<u�����u��ù�$Z��vu��W"��U�)g�|�/��� �5"�0 ��9G�}OB)r=k�!��M���㿧5�m�[��H�3��� ף�\\��^C�+�N���=���5�k�K(�:gގQ�Eq��<��hg*H9��ҷ�u�K�������T�53J�@��4���(��(��(��(��(��(�����i�^{� *�d�s��ʣ��6#*9���-��d�r���@UK����# �� �V�֑V?w��Y)��v-��P�q�+�5���%�Ib(�n ����(�~��L.o!��~�I� 
�Ɣ���=�\\��?�[ݫ��)>�A�u��Vo�_�U�+��l)or�� D�5����R���ZV�h�!a�;����f�[F�@I���[��~���6p��7���$�g*oq�JҸ����Vi�&��\'�\'�s�?�z+H��v�2�#UQՁ?�D�}q��WVܹ�O\\���Z(L���ihCՔ��.s�O�ipkjE	lOL�Q���N�f�@����u��hM��{�E��ڈJ�je��T���� trj��istq�/�}�J�ek��r����wZ�R����^o���d��Uo��0�\':�����䅑�]��o�}*G��l�Z����n��Ko%��������PA[�κ��7�f$c#��+��6N9��uөta(X�{fR6��*&���i#)��m!�
��3	㧵4��ʧۭ1� y��L��� �)$�g�i�^�֨�	��Ҟ;�����8�0 �S�@Aޣ�T�a�:S�gL�R���4n\'���Z=e;�8�e$�ߥF"ps��R8�@��<c�SĜ�_jr)=� �3q���	W����4�^;w��7^Z��=O�PU�$z~���#�1Q(������Xz�Ҙ�!NT}�����@�Q,��9�(�F	��Kؐɴ���M��s���x���9=��"ȌFJ`[[�0{T��9w�㚧�8����g�.���{w4��XsT�G��y� �L��c89�)VC�9����7<J�f��A64�^��N���L�u2� _Y����+��ɬ�Ƥs� �☍ep��E;���3Y(J����t�~������40`3לTq^�a��!xߑ���t��q}���� Z�$�$zSv+);�q�F�o�L=�i���x>�������0�c�9�i�f���3&q�����;�ƀ�=dT�v�1����Җ��SLM���k�%+��I�<�����/�3Ǆ���ʼ�[`�S����	�����3a� k�տ�w
n{W�)rP��&�4�j[IQ␫+nR=)rM�HQ^[�|Bdڷk�mPJ���סiz��� �03�3�;T8��3��ET�Q@Q@Q@_�(s�Hթ�#���M��[�>��[늙��S�|���<j�k�=�f�m�O���� ���J���X������̍�����-��kKq��k�2�?�xMj;�=�l~ כ�/���ë��^�~�g��N�[���L�OR?�Q
~���]�/�����2\'�/���6
a-�u�"��U���b�d)~�E��+jF�|�ǹ}6?�W����o����z88ޢ����my�zj[�L��S툆�y����f<�,}O��R.�������X��Z�.Pv���?�Y��������0D���s��
��~Eэ䊚��Z(�EA���kY�h�Nz�v�Ǌ�9��x���?�Z�"��[گ\'��?��W�]/4ٴv��Zǁ$�p���ā�k�ѭB��H8�`��z��DX�l-�������$P9X�?W6��3��t��f�e9*D}zpI�W����.Fz���P���v���P=�Gj%��#�O���:��kI|�n��+��p=����.�Z A������{$ٸ�zz�j�����6�,��=�u��#�㧶Qن9�4*�y�^9����h���CFr��z��������+�}�Nя�9�w/&q2Z�2:�488�uY&9��j��`:{WD*�G�Q�����\'��j���l�d�P*@�i�*�F3ǽ0��+Dȱ�ӊ�Ҥ�x��xcӵ4.��ڜ���P������J�H�?�$P{�zԁ��U�j�X�
M�c�sD*�}�<:w=Gj�PO�<�8���0�xL1��#���2}��� ����@6\'�H���� �R8�ɦ��Q�z��c>� �9Q����AN����D�#��EFWiǧ4�V�4��� ��$��j�������%�~x��{�AI���w�3��=� `d�:�*�}i��H ��@[�b��3ژa烞	?�J�<��w�L}hDJ�rL~U g ���t�;��)����i�Ĉ�������5H�OjM� ������� &�x�~UR9����5(�^0=h��ǟ��A��C��d=Fs��;H��#<})�����#��c�z҃�������=H�b\'���R��?:Q�=�iT7#�zzS��c�F҆oN��"�#�� Z� ���Qq��zS����w�Rr1��� �y�U�
����(lq�A=	Ñ��N�;�m�4�y�cT��Z�VC�� ֭}7U��U�)"�x��%8T�O�����=��~<Y�Az6�*��\'�v�נG"ʁ���|��\\+~��_�si-lw�n��p����Fv=����_Ũ�$�6U��X�QwH(��QE |��cp�!�#p���\\�ղ̤|����n� 3�J�kt��?�f���_3�����zt�fuP�W�2�� \\�m?�ɳ� � �J�̛\\��(���٘�w#�����d(�w��N��כqzv6u٭�VƗp;yD���Ep�c���!�� ��i}��_�<A���X7�k��l�62.�$?һ�pj�[�_�~�}�j��k$��?��q\\b1�wf��������%��n�?�S��W���-��JҽO��u.h� �?ɬ��{� :���h���5`�IZ醑0��/Yǽ�wf�?A]$��S�`-����5GD�i/���s��x�VK{{Ws���Ƹj>j�y�pV����2O5�,(�ϩ���P��3��涂ex|&p� ���?�OÖ�t������ \'����9�U��j?����bDH��3?�ҷ#=ă���������nҟ�T�|�(�(Ԍ�﷓^I�L��mb��z�v$B�� *��g\'�@>�=�tC�m�h���e����5��e��B#�����uI��m���?������ ��� �~����mM��	eD����7����E����������2�~�Ou �>��}�_zcHV� ��DV����F%p�6��}x�j�XB� 	��GJԓk �8�7���-�.>���׏��oN��9=��xa��� x>��s�y� arq���W-;��= ���+	 x&�z4�:���p��N{3��K>�#�
0 �P�i$���RF.B�#<����{{����#��Vg�q���{�\\�Q��46)�8��f�����P9�J��X�3�L]�Q��ҦE�ڨ��V-�1��l~�/GON¬%�Q���-��� ޫK#��$�e��=��u>�#Y�d=Gc߷��玝O�W"��2}*�(-��)��kZ;a�N���g��G���9��Rh����N#�U� 9$��I.��bGlpƭZ�ޤ��2�~����t�ȷY�T�3T�	R\'d<�5+O=��@Jb� y�[��2�H$�;SU@\' ��[&�
�� �R��nP3�W�G)��P�)20��Ej�d~T���S��g��I�����޽��V��׌f�k`��ӹ-*� ����?ÑM08�?�\'N���2lYD\'�r8D�H��re��4�~�y昋@�
�u�_��	8o�U9Rj� �s��r�˞��]���q�FR�8�"��$g��@���ӥ)`rsڪ�u��R}���Ld�fң���7�3��d�y��灟Z@��1LOqۊ���e\'�DG�!��MZ��f�G�#���������B)��e�v�*8?�W�P�׵LF�L] �������ꇊ�	S�*�o��֭2;kϣݫ���h�{��:�=B�9�l�(5�LR���*��!��.�RقI\\v �S��|�}���E5:+������;�QE��>D���������C�U&�K)C��Ryܪ�E��3��L�O\'�l�*YXt�5��矕��V����ݭ�� �m���1oZ"J�������RM	e�Rh>[�2���279��)�L1#���S�EO�P�#H�����I������<����X�F�Oc�~���e�TKb��ɦ�Q����S�΢���:1��fΓb�Z��G��{o<����Emk]�8ؑ�I�Oj$������O�4�>��A�v�k��>��y�v��Y;#�Z�vVfo�n�ۓ9ۈ�覺� iXA<���N�q�M�jz�?u��׮��kU�GX���>Z1^F���&X��� v(���Q�o��D�}TU�{c$�G��W��^(0;����R��t�P��yz�kwFI>��X���9��Y�r�0\'da��8;��k��=X�c:��_Ȱ�l�/��5�w��U��u����W��\'�
��_{�\'��<g���FA
�;�/��O���Iof��.�^���p�َX�\'�U+�`�*�ߟ�洇�#V�`bGQU��E���Q���=f�؛�f�����9$���W%����#��<V�w,���� Z��v�I�!���P�ʎ:���n$y��y��?�tZV |ۈ?��c�.�;�bz8�b�f�W�WC�����M�����2Y?SLh	V�[���Y1��b�Ô��bZ��\\�"�.�͟�U,���lwj3����\\~t�|dg\'�*�P�<��_����On��JLH֊Đ���Gk���j�׷(�#;H8=��R�R��v}��8�4P��Tۖ�B��~`z���Db}� �Nў �s��Z:n�%�����LKq���v�z)�����2�G��N� 8�q�kfe��Mf�Ƒ�Zx}Pn~�WAi��� ��{@����8��\\�V2�og:�Z�c�T�ҳ�0GJ�͐x�C%�8�R�_)��6E�� �pFq�d��7�q����P�B�*G5�dg(�l�u�i
o�Ԛ��V\'��U �Hɭ��<�h϶i��� ?Z�X8���}i��ue�@�Q��t$ԦN}�U �瑚zI��4�d�P�����:��Q�O��I�/c�?�1v*���{})�[���w� �bcʞ�( �U���֘�$�Oi���p��Cc�j� q������#�q�� =�����q�3�G4��\'=6�L8a�y�� M�<p9��q�<��d�z�*&�����7w�?<�J�x����Ձ>��b �Ӛ���S����=3@��q֍�y��<Ʃ
��{U�g��܊��"�=�Nj��L|�t<�Uc��5Z	v�����#�i��~�n�B�ǟ�Vju��&x5h�G�|?����o��>_t�޾y�u\'ӯ��z�"��� �|�����Ӥ��~b���/+6���QYG�*	���< :�O�]�6������8�=��"����8�P�������t��ڥ� ���1�s�mj�Y�d|V�v��H��2�#>�*�L2�;U��K�=�pqО�U9d�J�+�[��-�T�n��L���J��	�g2㩔��f]�~FT�=k~��4�<E�0$�����Ȟ�̮�� ����?.�3^�|��۽�;
��if��ͩ���Ok��w?��;����/M�ڪ}�yq�EV��r�:�[�ڀzz��}	��%�g7?잕�*�i�vF�:X����m�w8������Wk���\'�B�� RZ@
>P�v��nlv^k��W����A�	�<q��� ץێO_Z\\v����0Ʋ��>���|��������jE�����#ߚ���@˷/�k.|<��\\L��¶\\.��*��.�լ�S�<�����k��o�NG�+�5�k�Ĩ����?J#���ֽ̾����sUz��3�	e*�Q�O�������c����:�{����ѐ>��P���]���O�S�g��09��֠�@b{�)�)����G�}�cko�9�i��ߍt�	���+�0����&KB�H;�|��b�TȼU�PEU��s��,Q�{�ΰJ1�"�٠|���k2����~��$e8����������pS�O΁u)�)�f�_���W���Nȸ���&��edq��ǽw�V*�� *����01� ��R�2׵rJwgd!dT��}:�*Ս�o��$T6P���{���@EC4HH �=8�k54Q�~U`G��Ԭ���q�ޮ�t�,`f< �}+#Q�RD<q�]$�֨ܧ�~��<�V�0�����oҰ��}�}y�w:�^Y,��\'�k���dC��>����V:����2G+��S�pw`u�SKB�����g��L�h�d�m�A5�)��?i#�����5e�����U]ɝ� �*h�x<���*���	ң0ps�=���o�d?!NX�s����J:�u�1�-���?�4&4��~�Ǔ���i͐�1�#��LC9��Q���n?S���ppB�1��(ѕ�9���I�` g�8?Za�?:E�\'����H���5^��H�M��G�.��j!�"�V��H��i�����tǧ5H�^ ��pI��Ҫ���;H�j�/����S�nj_x+�T�9?�R%�6�d{�W�|8���d��F����v&�Ͼt>�:~�k2�Y?CM��e=-��}	EG�Xcqё[�%r�wK��M���
�?���nk��0��9�ֻ�{$�T
�m�5��H�Mӣ��cA� ��� ����58\\�L�>{4�FA�s��� �3"�c���We���1�F	��zΟq�ː��9�V;]���ֽ�X�[��H�a��=KN6s2��O����u/���eکp��}�����u���[�kh��4N8 ��}ɮr��2���R+��,rNv�0|+}��_�Ⱥ���$��bf�a�	 �ؓ]��#T^� � ���^��z�ӯ�5�9I��DI�ӏAO?*� 4�8^�9�S� އ��2G=?ZxM���Ҁ23Rcڥ" x�)ϰ���:E�{d��=F�G  n=�������.��;g�a~��Ҕy�6�ݓ9�3�Ϸ ���4L����m�P=�)c�}]8�	vH��swq�F��s��?�m\\[y�C��x��p#1����
DA=qU��v� �3�տ5J�<U{�����Ǝ��3G��`k�r=k��~a�jϸ�q9�T�5����S�*y-�s�3U�c��֗2hq<U;�����"��H2)���j�L���I�]e�"E �b�۫S}�ռ^�EP)�9�����d�QFY�T~&��OA��t?v����4�%�$P0�AY���.>lc���e*0�y�VW��J6�\'��HW�?�e�Sd���X1u-��5=�X*}�fj�~��jVռ|��v��jی��P�$X��Q*H�`G�˚����40��[0����LW*J:�5�tx?�j�x?CX�[{/P!��G�pAH�6�co.I�m>��j�uۂd(�|��e˥�����ʖ�����L«ؚ5�����>��&�K{vl܏jm��u�Rx���w�E�f�� �}����d-Q�K�ǮA��	��K��E<���#5��w����jɃ�lӕ���@�i�	L������L��� sL�cpN�G�Q������Q4x�O]�R�s֘߂A���|���Nj�zw�H$��E�u��� � h�?w<��108�� Ҭ�f\'���zC(��ئ��֟4[�0rz�G �s֨�G�4�����cϵ �11 �b�R����J�GZd��K�Z�O�H��2X�|ƧݸUq�:r��L84�2G�5NE9F?hC��#u�߭S�G���6�TAn3��j��c���� U�v��U"_��/�.~աپr|�S�^+j�����v�� ���k��i�L�ÿ�/+�ɐ�S/Z��e �L��f3�~IO�)ژ�\'��U\'N2*�9��sCB1\'RA�{U��+5�Mn	5B{Bs��*�_Y��c�98>���	|�	_�!��
�{����zt�LXL��=Mc������e��_#��2@�z����k2�W���k`px��� A�|�X�-QҘ��=���h��O^#Q���q�5�C�Jx������[��2�!FM\\!w�bd�z�^i�c#Г����Ji8�84��X����"�e�֯<�A���ڱ��$v��ry��z�e;�o�2��C�c$�����NW֓�{�%b��ڠ�=�⮷=)�q@�~��Kn09�����WC$}j����őv���g���[��ֲ.#�R��pGj��O�*͛s����>�u$��ӏ<U-�Nz͸u�H�S�h�C%��kx�d<{ҭ�\'ޭH�S�m!X�1������t&<��߭m%�9�j�A�0;Ҕ�eF��Z�p�G�\\�����<s�y�S>ՃgB3nǖW�n?QRZj��"T�g���M���-�o����р�>���$ʯ��֜/�R��\\Q�8����ʯF� (�be!���*�����9?�W�`RbE�ƨ�<�e� k~a�~��|����GTWG�r�&�P��0�?�+���-!@H�3l�W�x�ٖ	�b
Ͽ �W�M���� :���r���$l;��7g�Vޕ�ɦί�A�G�a�:�&�ڢ8T�� P	Ϲ�|���GB������.��S�ʾһaU��梵�D�FA��e�A���h9S��_J��.�6U���l����j��+�q�Ij���G�Y쁈����`�]����T.}�W=�h�6�8$t��R-��v�rJP~\\c"�ODHn�b�+����Z�&�!hU��w<~M��NGCWYv��sQ��B)��Z����^03�Z����L���+󎞸��1�x$��A瞴�����7鹣�i�ǎ��9�ژ8��"�?�C��N/ҏ�J ��c��S��F5"�ƨ�9x���1��R!��*���S<ԋ�4Йj6�b#��S��?
�����X�c>b��?��#�b�2�ጿ�5�<��r���
�XU��F���#�-�_�L�;�$j�rVŽ��+��{67���O�X�O�U���KF��Խj�N1ϥK��5v$���n������<R����|�xl��^��J�s��L>��T)m�Q�ǥu�3�W��0�Q(�TY��q
�0�^�_��G���doZ�-�^k�xh���l߇W�||�O�2� V����lx��) ��i$w�xG��H���֘j^�R�T���S�J��Ѱ�;q���g���>����\'ܑ��[���?�7�W�W�I=5�}���ed��xv���1��T`cڣ��IB�N�	ǵ8M��q^��-)_w#:�����M4���)+���q��O��8�{�q@ȈȨ�<�V���\'�@���k�r�k��g5Bx��@#�Bbj����)l�5"���s�g2\\ARGbz��KP�(�R��c�@�z��`
1W�~o����C7`3��qأ"���Ѵ��U{h��c���h�hAT�ƜT�0E��8_J�ʒ�O����W*:t�
I��yc/y7����WH�c>��׆L`f�e�#k�^�b��3GR��:(d�q���p9��KV��PK��FA�����@�i܋�^�Xr7�p}�t,C/�XZ�D���0[�z��I� ��-O��<1�[0"DA���W+oC��������� �7g_�[����z��z��N��a#PI\'ڵ#�٥�uP����[���q�U����F�-��X�?*���ԚK��8	k9��(�P:O�SȦK����ɫ/�
H9#�ʵ�cmY���Ri��hI��k�:�r*��)>V��^f�U��Ү�^�g�T>QCEFVgc���]������Q�{Y[�<}+������֭��ι�Cy ���:��X��1ڡ;3I+�̉1�=sM�C.��{P�{9��O�{V`n��H�V�;VdL̽zb���\\ҥ.��t�r=�D˴� s�Ɵ� ���M�<S��㡥���#z6�S%�.Zx�S�T��b	�)��Kڙ,jx�4�֩9x�H)��R/��Rq�*Q����=*U�}��q���*�g�U���Y����D3���-~��̇�½�p+�<(�=Zч_1G�+�"�����~��]�Xw�����O���_M��D�2=9��N�K��E9~��on��80j����M�;��v"����=xJ�y�J�����~|{�>��%�*�pG�⦁��V�+��Б��/�3ޮ� �?*�G�G�B��9=��!�I�J�j�l�@Ո�8fm�� v)���8��@���7˩�p)�sE��`���ȭ0��(1R�I���|�=�A��G, �«=�&��&dFz
���ԭ��>���g��r��e��6�:�Ԑ��S�8��f6�j|�4\'��;�Yp^H0Xn�h�5�M���G֫��W�b}ja֡[p�R5��(x����[�F�)�c��\'���zdd��@ƽWa�Z,�G"�t��u��S��"���G\'�{
����8��qU\'��T&��q�$zz�A*�v|���f�bݼ[TT��8���%���� �bFzt�o�F �zb��)Z����=MZ{?�$g&���8�≦TL�Ҵ��[���v���n�8�
v��V=X�Mg�r��R�Ee�X�#���$N�e
����W��J�3��3��U<�~��!ٌ�Ȩc��!�Lc(:�sAh���VQ�*�-��Z3ϰ�����1,d{Tȹ���)u�R�\'��-�5�ߘ��1�Wqu ����+�8H����8���KH����\\�?�AV/��1��I��]Xpq�T5C����_Ɯu���9�"��_� ����n������ Um�[B�K~5�Gё��%-I�t<�R��ʰ�E���P�mQ�H��5�W��<lr!���+P���,F�9�~��U�$gR%��.�2��wcһ-;Z�U	�~{���>��"�t9��ֲԘ��Eh��S�=/UӓQ���gTf��������s�H0�Hں��bD[k��#�>� Z��1�f���i���Ʀ:2ި��὘S�� i����d�O�/:2A���V�H]s��r��)����"��>���1F9�y�e���G5H��x�j�
z�A��� �/4��i�8S�� �NQɫD?�x�R�F�jU����=?�J��?�<G�H�UՈ���P�8��X���)�Y�x23U��!\'�q�5#�x߂\\G~��ѕ� ��?�{�� VUz�����ƛqh�̌��:b��(���q^�5����=~�RM2	N�NN}+�)�+���]N)$��鎕���rA:���ں\'ѭ�B�� ���Ӣ1r㞜��ũ[CZt�E�v���l�˕�ҹǍ��k�8�}H�[���V���-��F�c֧BA��*�{��&q�]fM	&H�Ս�0�γ��x=�g�J�`�kD� C7q!G�N�w�MQS��U���ց4Yh�Dd��J\'ԘX�9��{��NFM:6��jB��
d�`Ԙ�E/JL�!\\U�����qRJ�cop�B�VM˟l�&�k��9�t��}Q��p4��I�`��[uS��#�0�n���(u�jiw�b�=zª;E��R:UIl�V�0a�S���z])98���L ��WC��R*l3�m+����K��s�ښ=�]mw8bsHi�O�\'?�=)I�;��B �R��Ҙ�`�8��f �ڵ*	J�$Ұ�!H�J��"�ۚ�mQ!ܬq������1" X�8���E���dAXZ���r��UF�y�,�W��j(m����j��������xf��]j`��e�m��2F?*�"\\Ƨ�G��D�<V]��&@zn�N+N@N~�FX$��Ri�ֳ�1g�M�=����� ejY�a�B�i�Pن����8@j1�C,D�MnS5�=��z�p)
�*R��GR$�����\\�P4}jnD�rH�Oj<�H�3�[���~l��D�+t鞵teG4؇?jb#d��U[��x�s�C~=����w?ʤ$:�x���3�/��._`&�� 5�yk����X�ֽ^��yl�2����?Ҹ=KM��w���͐=�X��qќ�pN���=Q� G�� �{�j�����\'8��)��<���tsl���$��1�\\z��U�m\'�8?�r*�܀�g�EQ����4����j]چR�r��YL�O=3[:U�\\@`����������#u#�M$�WFQ��)�u#DT���L�FM �T��G�֜��D?ИS�F�*U��ǎ���5x�t�T�*D�ץJ�j�d�x��\'��9�jv���Қ%��sW"O�{`U{a���
���ҩΣ�+�P�N�fO�潪�v��+��	jd�2v������3��X��^~�_#�d�p8�㚮U�t�j�܃����Ì��5R>��P�;޴�=�t�zv�O��zr3L�P=��Jӛ@*4hJ��.?ưd�x%(?���Nk�T�A�"�u+5x?2�V�0խ?&��J�~`zU���OΧ��c��V����׷�$ćVR6�m.07��S�*��i���Dsʝ��DC4�V�8p:x���5�t�������x?�O�V#�[�˸{�^�jn���\\��RI��u�4��!A)S�J.4����O
���~�}I�5��Z�r�>J���MjOu�����U\'��+{�B�t}*9W==i��y��Fj�_���!��� rO�^6�
�*�ƨݜ������)�K��3�A�W5c��4�H��r+��P�VL�B�A�IP�N�/bI�WS"n�u 9�MC�h�a?�aޭ���B�R�I������5E<Y> 08�kT��;�������q�����j�>$���+��DTg����(H�_�Y�VF�z�;�I�0�ҕ��r�s����T���o|I����?{¹�O��I��9��%q3��5X�RK  �s�:�]��뻜�~=����)ZK�,C�Oʻ�tU�B�  ��.%x����1����­$b(�Q�qV���Y����J�s6v��j��;�4�q�d�c|�s؟�Z�ܷ.L}H"��S_��I�*���c�b�+vgBO;W�W3������ ��8��X�}�����{�v�����U�d���1�	>«���P{f�{�kiɍ��["R�_���# =([
OR��TmfR��T����6��1ʸ��7��R2梑p)�%C$�cڐ���5]��|��"��sM0&S��2��j�?�X��?
���$ҡݎ8aH��><��ހdn�`r0kU�܏���Ď��O������T2&h�v>{2g���f<{�o hdea�	��׫kZ7�����?��n{A� ��@��VБ�H\\ᢐ�ޣ��*�A��#�O�\\v4�Fͭf(A�N*��8=z���F��c�2�lEx�;��J�3X����F�֩�S��qm� ��;��Y��ўG9�*^6ͭ��S�p6�A?�$Sw)Ҏ��d�w�>��1kQ�}jU��S׃TC%)�LS�OH����"� �F�*U�*�MZ�
��8�S@s��յOܹ$�B�qM�y��㿭M�e��b<޺�}��$=7!?L��C=/��-a��m���8��t{1ko�0\\} �\\�z�T#hz�h�۵+\'B?Ҙ���5(NzW�W>���Ĝ��2w��#�i�Yx�wsU�	�w�,���i���:�Rr	��4^h �ȩ$$���G>�v����M`�[4-�A��x�uf�}��i�"��i~f����n1ط�{ײf5bt��{մ9�kt:��hp�#��1��Θ���g�ҵB ��U��0;��+Oh �*���i2��.�� ��$�Y�_5����A�=�t.�rj�ղܮ���,���͝�r�\\ֺ0�����a���O�\'؊��o1G�Ut3�ԒQ���u��5i8ڸ�rH� =�d8�o#��c�8�K��f���}ʿA^{�<��o"��F� ��S�ܟ,#}��5]ַ:����&9�54e҉��B���+q$L=T�\\�a�����\'�la��3_�cy��2|���R�-�X��F�[H	 f�[CM����qP��{L�?ΪĢ[�"�r�O�n4-�l���fM��O8���x"9#$��\\�!�lE#���+-w�����A  �,��:R�^�1l�[6���tKB}�G�V���ƾ���[�9Ȭ��{n�a�_ªN	l��RE���d=q��ż�1���ە>��E[�9 �ޮ;Cde�&˷�f��uV	m���s:���V��o�*��6Ǟ��oaTZ�����A�e¿bqW��N}*����M̙�epAZ{�_ָ���[u�Һ(n7(�2l^f�-ϵD� :�w��+���?��~~x��lR�"g�������y���b�ɠ�$�u�	�R޺F������r�BCm9㚥[6�G������e?�S�:t���4�Ϊ$3�OZ����q知Nz��X�����9�u�/�&�L����H��ޘI\\w�Č
@�xa���gK��$gl�	C�t��\\T|��Ҹsz��ݒe�ѝ���Z�n�
0�{שj�o��X�����5�^Y-�D��=mNF!s�u `�589�kV�ѡb�9�ֳYpq]Qg����0h#��<tFopf$ ~��x��������?��LQ��qTK��Zb�Ԋ0*�d��N��T(:U��qD�ą�x�[d�v^�ƅB�� �R��l��j�r��sܞޕ��q��u9A\\���\'�n�����s�&���o"�~B��!Ӎ� ` ;QE��y��}zS�q��41��� �����@93�����dA �x;�8��H�t?QH~V8%T� :}DfE�)>�Nhi������ǭ]�"���9�r�,ɸd��+��%��&�X|�>���M]
n-��x���O�Z1*�Ń�q�kދ��	�x�]����fT7&�TWo����+[���W/���<$c�m����{m������S�5�������=R)��*�d`~5���;r01�V��ϥu",ku�Ң�aI���\'��!l�TƖ�W���Y@��Ą(5�uv���j��.~�a�Hq�Vޕt%�H=�r2\\�2�}� ���o�B]��i6}�s���_֨ϜS�U��`�*dJ9��ip��� �;MW�%:��,Fª�t�*ϋH�H��reQ�]����F��� �����/�~����:KV0	� U��j���.�K;�
/r���
~��x��/���P��+{R�Khe���� 5審� h�M 9��_�A�c�z���%��q�j�̯�)\\6bObZ;d$�	�/\'�x�A��EW�l��5^)G�\'=�:{��8���Z��e8@���m
4Q�Aa���*ٷ]��y�^+�`N?*�-����@���$�\'8>�X�d�}Js� ��N:�k&�f2	3�(դV�v�NE�G�szu��AS�~����ך��)=�\\����Amw��cvFT�����քiX�}��_���~B��e�y㝧�I� ��U/x�J��"�KB�-�ɒҖO�V]�ߟ
0��]��~����ԁ�����P�\\t�gMu8��T֗�+��eu/H���UbH�Mj
���:���7N�΁�����}*� �)�&*`��)�"=�t�.�$�U� ?
��_ ��U($�O|����F��J�����C�#ؚ��O|�rK���BG�&�����cWg�uXl����,�sV5�~b���G�^t��2��n#��[�mC΍�&�ȿ&���V���1�������<�~?J�lo<�RG8�W��p5��ےkx{Th�&9��┣x���z����U�p����W3:$f����z��Ӌ��w��Id2�=�V&�dY��J���g���>�VW�S� :hOc���/�E+������j���怓�y�wz����1�+&\\K�����]g5H�9^M7��[P��!���k4�	�uE�䒳bE(��P����h͊:f�ZE�T�c�s�Tъdc�F��T�c�"��C�z
�83��*�a���D�i�)�a�}�ih�D���F�H,���&��ͩ\\,Q�I#\'���h�ցG20ϽL�`Q�$����m�1��3����(�vu�6AEPQ�Ðx�q�Tc��p2=�����\'s~��N� �?J��o���$�	%#����X�,�kcԧ)¨=I�����B�&P�r� 銾�H}�і9�T$���v���ͲU�	#a׾1�H��KS&�N;g�CZ��ؿw8u,>�˟��W0�/�� 1+�RjV��&����� �S�m�"�V*q]���I���JC ���8�r~"�Yc%�W\\��ҵ����o�0��}�)/�Y`�upJ�gw.?Zꢹg�g=b�3M�&�dNc~]+�ѵ��Q��c"���9 q��L�w��:����
Vg�[] ��D�Y� 5�~�$��r��#���!��gg�a%fothK#�����~�N[Fr�{u���\\��^���\\�b+7��3.�(�|)5����A6�U�p"�WpB�´t��A���&�4�`cکό����++P�j�y�Q�41#�����Ё��d�{ɏ�]ռA#J���X��?�u��%=���t� 1�@�T�gM$�1\\޷��h�(���!�rus7�g�_�r��#�0�W\\�&�vyP�f,���X����&6�u� j�b쌜LO�ۨ��p8Ϡ����yP�/9��sn!�����.��%����g����⽙�K��p�cs�57�Ns�I�	�H���)��O ���r9�E�}�\'�7q�O��G��q1j*a�l�Z��v�9�rH��+�C��Qإ{��YW:��=�bKv��/��5��rj�9L���A(�2wg,;º�\'�QܕF;_��+�ʞ�!�PA�j����g��� ՘�W���3錡�t}0z�WU���^���l���Cx��j�u��i��Kn�W[����-#��bĠ�o�*͞��I���Rh���`�D�L�1�ҭ;����۶����� k>���;`V�|��Yu5[�l���z$Z���q㧡��he���;9�ژ�#�4�~5D�s���5����I�Yzɽ���Hb�̍��q\\�";@\\�J���]����^[�e���kX3�Fy�2<���V
��ᔃ��jKI�����+����]�ׅm���M���zm̧��eR}Xb������n����B�&C�yA��"�4��έЬ���5�xZr�~S`>��#�|����X��ZΛ��5�����E�V����
�/��Ƽ�D�6�g�0�5�vw"X��TU��R�<��8���	���|��>�l-`΋���i�k:Yw
�ё�=ꔣ�(��2�F8%G��S�"�,�:�����FO5�2��u�O�:g�+"X�?��o?�N{�|����+x��h�)�B��N��Q�8���!��"�=��:ǁ��h�$qU������"n#�eb�)$�8�%�!-��W[�	ͪL���r�]_�|�Rk�������c�aT`Vr���4}*X�
��qZ�QY1��QEQE y�@�����!�6Y��������\'���q�5���>����	�)�F~fNN��R�a��4�P9���V��ט�k���3��s\\Ρ�[1�\\��븚Գc .�G�X���m�W؏L�m
�	�t2�NU$
�#$S��c@Fy�r9=}�v�K!��z�;w��3D9�5�Ӛ�!�Y&��!_��ϭs73|�/�������2`zd����Ɍ�e�#�^�r��n�1pX1�0����C����8ǵL�,�i��ƥy�`ad c����eĩ���?���B���"S�TP��5�L�+uZIml�q��tM]�ٞ�k(a�?�����.ǅ�7��X%?:��� ����|q�<~��\\R��vE�&��� j��ۀ�A[1K��d�F#�O��%�X���&S5��
���s8��~X�?�*̺��s�$$�>��%1��x��$���k�5*�ay<W��������5^[˽��i�Kz����$1;��)��Q7�;�u8Q�͸Y�	$�Ƨ���"�����kf�:�>�`�|��Ƥ�R��"3�=29�t&�@v;�εb����}�hb\\�����<���b�JGb���Fr»97CC��0?ϵg\\]3�*�����M#��#�*��J�ʎNx<WU�� �ڹ� �9��h��l�3�㚒@3��~��nբ1{�W*rJ�m~b<�<��W�3�{Q�w��́�+�0�n)�!��� l����=*yJ�.K*�s�?֣Y<��0sU�G�:�>QUbnu�\'�J��9� �]ݝ�H�A�q^1[:]�͚�(� �ӽe:w5�KƎ$\\ʿ�,���Kք�6G�^a<x�c��q�:����^@�Xd��Es�vI�����I����[��\\��?*ɆL�W�~?e�F?
xj�$�8I�LD��Y�i�?J�"��d~t	��n�+7T�K��5�sG,���u^LH�>�I����P���S׵\'�5�?x+�Wu+2��=	��3uy��#�=>G5E���(�?3]-�q#����6����#�u�k)?x�*�<��ݭ/JvYN��4;��Rz\'�N\'�,Ã02�~\\
ʰ��@���kv��i��M�<�z���{�+y�}X~��ױ�֧Bd���T��(9��s�s�qX:������Ҫ�b����=j���I���ު��� κw2�#�=j������w�4�\'�c)LG�����RD����b��.��F-�����D���V<���f zףxw�r���,X��؆�9�xr}Z`#\\  1=+��?�X��P�2�ǧַ�l���!�B�(Q�j�Y9ƟqB( `�KE&�EPEPEP���D��ʰ �z�����H�S�p�{u<��rH�++`�{�_�5�=�\\��N8�L�g#j�R�@;���&����qSm�0i�4��}�3T��Vry g��c@�	bq�Teh�#n$�Q�f���
�{F #��Y��A�����W?��?�Z�o m�IA?�T�[;��}�?ֺ�΋I.� >r����W/tX�У�6��v����(�2Nݣn=�z��G��7��]� ���]�u�2�A���Z�nm���� � �k��C�,�n	*N�z�k+�����p=cֽ>%��T���/!^Ңc���_�Z��$˂3Xۄ.U� �ҽzUn��R��ST�>���W�F�dJ�߁�\\im�kiVD8a��J�"����b\\��0�I(�pN~c^ek�51�g(qϧJ�e���c�Aa�\\�;�Jh��m�cP���D��`�#�h���w���Qke<����I�)4jކe���##���$֔n� �?�+�f��Q��e�Q���W�,�nS��#�� ]j���w�4������;@��<��B_�02>P>��gZf9翵
!s����0+�^+���﷓��X��r;�����M�.ē޵�H��ٯ�pC�c��R�U����`l� 3��Z�D�̳-��>f5W9�8�n�T�t�v"���J������s��qL]IpI�H�q��@�1�����ҁ����\\|�LS�`0(��f��q�RI�*Xs@���&�� �ªIܟ�!E+Ԋ��lg<t�1�@����@�Fk��u��VC�� �?�\\�S���)+�fzBM� {���˂=k���	mln3���g�b�@T��QX�f�g{�+F)21\\֟z� U�����+	D��U~)CU%z�[��ܺ��.ꪯ�8����N�l|�vj����\\-���;ٛso�6ƨ�Zy2�T~Y����MZ3� � `��˛����»�$jHL�լ`c)Z��`t�V�ZI�E9��+2�Zy���f����Bpp����C	KS��V�$��`Vt��v��\\�RiBz�T��5�5v��Y�\\3�I�Q�䚑 $�Q�W�\'=�U���>���1�Ʀ�>��K+�� S�x���{�P�ץw�?Ç���㰡�\\�6�ݦ`�rH��þ
��^\'u�7$�j�-#��Zv��`;��J�B��E(��s�/�-t���A�OZ��  :�Z*cQAaEPEPEPEP��F�kzT
�[�c�Ĳ�s� ש��2G�W��u$��}+��{�$rؐg_�zbj>�~��`O�i� nE� ��5^��~� r8�:�*�Z��Eq����RVD�\'$��=�+�A�JF	P;u5^KK��屑�=q]�k�����w`I�>Զӕ#�B]�RI⠶�H���X~-]5�EQ�ʁ[ԗ,{�LJ�iw�
��*%�U�|7�eb���ZQ�̀I=���n5fQ��?J�g�Mz�Y�ma�-Hp*��<se0��z�U�J6Ì�x�֫ہ�`�c�~����/7�ߕ]�|��:~=j�֕f���s߃�]��� �bk�"F�2�w�קj�]�jM�6����#�O�O@s�}+
��r*;#r��:c�z�Щ�2��m$�=j8㶚=�\'=1�1��m<C]� 39SM�?sa-��@機�b��K���{W?}�i\\�{�>�����jrΏc�Ϩ>��g�t����&+�lu랖"�G^��N��9��8lu�?��y�����ɾ�!�8�JX�X��{�cތ�C�s�҃��M֤O�L����S���L��Nߚ`� ���g�9�L.��jC �w�o�3�N�x?Θv,�|S�PrXp3T��<{SԜP2��=�g+t��:�u���t� X��g�!##\'�T;�zs�yP�ɜ�p+�ڪ�@���nz�	\'�O9�Mڤ���T�7�b�9�c�)��_/=��ǅ=��Rynxǥ�0h�9�?�����w.q���T��� <��t;�]�@�Z���Yx���H�8<V�S��*��ڼ��R��G�:�L��^�Vn�J���Ԋs�~���xf��6 ���2kU<%4���#��2~��=��sQ�H�]��ɬ��v��01�A�Y��}�)`H�?7O�k��M6��iD�N��g��Z�����_x���"��¹�^��ρ����i(��\\���l����4��b��nq����V�����ǂ8g$��M0�&�b_~��3&�P���OF���϶8�����j�s��R�4�<��F�-�m�g9��Vm�^ˏ���p}h��*�a�^�e�ɤ�u����ս��3���2�r2[�={���]�݉��e�\\����׼�x\'O�Uv�6ݻA����]$6��ƈ  {T9��Ѿ�]:��8\'=q���N�qmns,����W��*[)S3�t�{�Q��9=�գ�(�4�l��(����( ��( ��( ��( ��( ��(ŭgY� d�u�U��H�S�ڰ����>l��ڹaC�y�|�{Ț�9��rT� i\'�P�  z��ެ�s��8����`+#2�s�x�!���< �H�B��� *�qI# = .O\\s��~����c/ ���jD�F󏘖��i4�e�KWr�s���EH�_���#����/�2(���ڴD+(��o^�+�PE_�l�$��� �K�c��R������h� ��<��������֕�M#?�J8� "��Ĉ� 3����N��YI`�o΋K~m�~����,�RI�C)9%�p3��G��� :�=+:�ζ���a�,��z�� ֪_n`��dId�J��MǱ.Tl 63�x�^}9�ơ�����s�>%��q��\\��b�x�Y���]T��v�3�D���I�H
v�x=���h�:|�1Xz���An2Zʒ�$�s^�;KVrα�u�ڪmH���Ma�7���9�E�4c��t!c�S��i{҄$�;T�ٸ$c=+Fȱ *p��-lQA<���喐�8��\'$���)��ґ�kz�J[E��� :�xR4)�B�c�\\�=��
:���\'�S�6"�׽(lQ垴���q49[�Ӗ�J�F �4��@�$
x�*Da��@��X����4虉m��5-��T��)��x���>� ʬ�i��:R�f"�qV"��s��Wo��.�<�-��d Z��tӬd���P��N��Ox���c̠�����Z޶��#�}�p8�0�L\\"��D���s�jQ����Y�<Yb�ךv����m�$�遚��1��®{�� ������Jm�[���U���7#Y�@�K}2�Δ�$�S�)-lZB��#�]��gv�Fs�k��}�3�aZ�(��pX[�+^�B*�H�A`>��[;��S*��]
61r�cC��(J)z�����KK#c��Z+\\�>&v�^�~b�(�:B�(�QE &��F��KE ��,�e��F3��*(n�Y<�
���7��gY*�M��i��};�-T7��Y���X&�a��d �(U��j��o�hKEU��b��k���2	�U`81���P>�#?ʔ+)Ni=U���ka�U5�BW���b8�=� �Q�����o��QLi1,hw�X�*��Hˋ�@A,傁��FMT���(���� 4ؚ��	��Xda�=C
e��v�~m����S*�TT��m�ږ(��4�\\e���(��~����	>�o��)�J!��n�2󨠹�SiVc��?�g*�U���-?�/��,QPOr��)�g rp���gV+�V*��&����WW�O�hMEV�
(��>K���yRnP8�ޮì�0%��n<4
�C���l��2��8��Q�=[�t�Z� m9�jЖu���W�I��)$��B"��n	�Z��M���y�5��n�(9��U���w��. #�ȥ��(튜k��Z3��^������F� ���J<{A�8��k��0C�}k���M(��8��j�UB��� :�����=55�AV�gR	�,���yշ�g����z��x�Y�
r0x����~ �#���LALdm��T>0�ܲ��?�z��ˋ�v9�UBNO�+�mL\'�:�[ŏp�B6�߿\'5�ϩK!l���2I�s�+��%��yM�:I�I� <TM�S�%�\\��R6�9��rI	B�X\\Ӗn�Һ�|>ɂcc�۷�5�c�y�2B ���y�RFѠqس� V�+8�������-����I\\������ F#28$�O���\\r�]��~F�q6�jDF�� 8|�b�^Oai��!��8�]���(	*X��+�J�	��)d�A��n"�*]��n60��ou9� �_�AF$����ߝ9��$�\\	���?�)�H�Y�r�j����ՙ�-�yNI���;U+��1�0`z�[�p��n`F@=.��\'KmRSs �a�"����[Y�#p9<է�d�\\�?���KVA����~���&k��7d��SR^�3��\\?JX��Ã���5n����+�vO�t�#�w#���~Sd%s� �9\'ګ�����~���ac�H�� � �g�P;�	�j�Kq2ju c�RG�H�-ǡ�t�,�Ҭ�����?���M"����>�.���83��/븯��?���I��&l(U*��cX�R��쑲��O�o[[� �zUk�+)��q�)��lyj �*in�N{��]����r`>��/�,Z�GB��Mr~���Q��m���k��u�)�LO� ٴ���#��+����������F�o)	�r~��a�K7���������I�L��e��#>mJ���\\e�ry<քң[�/\' ~Tz���\';�f�"bۭj�g-ߩrˁ������\\�2.�G�k��H0z�M\'��"F�/cR���F�{
���K��֌K��{I�����++Jo�8� d~��5�W�#��	z�h����
(��
(��
(��$k&��;$I���UF�U⺟�ۉ>��A��b��vX0��P���:m���X� ��<��yx�\'���ޥ\'��?u_���K�k�1T�c���H�T[ /o��f��%��n�)e0�.$rX~��%f��f�d@�� v0@�a��mV>�ޝ*���i��� ۫�ClT�d}�ۥ>��4�)�i��7�r����)���K�X<�4d��_�46�4� \'����	�К��8�|8\\lZ�YT�e;?�r� ۣ�2���[CnF�����#����٬�g��-|�FI����-����#��g��d�Yl�cY�ݰ�ev����������>������YA�v���X�[�� �=�r>�iʭ��EQ�UT} �S���s�,����Kֺ�1��пLM)?��ߥ��	n�����zٟģ�F�ئ=Ȁ�����+4�0Ǜ"���.����U\'��=�CX8�\'�i�3	/IK�ޘ� ��}a����ʀx�K���Q�n��L��EVc�5��=��H�V�b����z5u�My�?�V�m�L��!� ajC}l������^�� ��:��VNZ)��]�� �\\�D�J�1�y�8������ �M[YW������I� L��I�B]9��@ݾ\'���j��v�L�s1��*��Z��\'��L��s	�Pw��N����˴JЅ�#R��D�)-� ު�[;/�?z�{[o{��?����袊�L��(��|�Tg�� �VMێ3�sͩ Ƙ��j�د���z�gbfF	�4Ɓn1�I�}k��Y���UI59�.H��}�uN�P��sR���x���.x�?Z�y�<��.2EwR�[ws9Uܵ4���u���=001Q����+�*�4�qI���L<��Ib���0*ž��> � �ҕK0fg����g � �s]e���w��۰�@pXaGS� ׮�ē:!B��͎	9�?�n��y³)<�omi?uz���"\\ �{��6�5���I���ᄩ-�5���� \\o �"�Rq��s��k���|`g��	��F�X�1Z�$ N9�x�mt�VD#/!�L��T_RP?uv)�}�{�����!!����qۭTik���Xap����t����a�^�:I��*�C\\��)�\'��e����]�S(�BO5N�Y���Y�vMħ�c�^���߳9q	���s������q��ݞ�ڵ��%�N@�}~���>E*�?��w|�ﶌr�T�� 3ְ�K�-��uS�uBY�n-�<��g)e0O��`V�����͐������ui�|�]��KF;� �}��>�f��p�>���\\�ʳ��G�ע[ڋx �
��Yz=�۾�;6����`U�R��H~�s���s�Q�k��v-���_Qss:Z��~[�V֩p,�d^�W�nk/G����c�ǥ\\v&F�[�X6ܟ�ԛD�C��?	� 
��l����T����k3W�;!C¢\'�&��:�~�s��W��UO1����
H�m��?����� �a�q
�AVfɦ�ȱ@z�I��[�J��u\'�+k�("TA�*�� ��|=���S�� �>dT�����cE7��L�DVH���$�u�[[�Y&}�����U�;EP"� 
܇�<���J��Dp�^O�-�.�	� ���j�l��b�KH���5�q	2�2M.��猬�d]<��Hn���*]KyVb�n�&-��(�FV\\q�}kU+D�d�f9#�L�`��5)Y��I��3�TPA�{U� �ٴ�k���85b������ �U��n��<N�l�=7�Dzz���o�µDFC޺;��?�r��>��]0~��k���� ��^��*��1TP��Yo,®[�Q�iz��»w��Ѫa�ۏF��W뒧��K��(�7
(��
(��
(��
(��
(��
(��
(��
(��
(��
(��
(��
(��
(��
(��>/{�s��Q�f��_��EYM*!�Ӡ��It;�6�%Q��硧���Nw������ҦKe ���+7���p��r1$�ӊ��W�s]�F����
�UC�k�x�k
H�"щ| ?�mZ�|m�ڶ3 r3S\\�!�bN2���X�ݍ93?��D99��� �U�2�4m�cҪ�?�<���.@?(��۳�ױj�UR��9#?N��p����c^+DF�V?�h@������ϵ`�ؒ#��  e�����I��Ҙ�v���c�G��p�}jy�Ɛ�Aϱ����S rFOc���p�I���u�*3��M=6��s��d��j��+�����D�y��y�4C\'$���\\ޡ0��1�n>��~�T#w�_�-�C�ꟹ�4���g�k7J�.�J�b�>��{T��l`�2��������V�m�<��B���BZ�����e7��� ;q�z�o�H���q#�<z�Ŗ��ɕ�I������Q���{dd��ιܽҊ�G��/@Ʌ�$�Ҫ�Du+�W8�0��e~�LD�6�e�qU��s��?��W���UBVW�3|�: ������c򁟢������Wh��+\'���W\'�;�b�3�*_�+ޡ.hG���������H~�[�}\'�V���� d�s���J�-��j��2�"��H\'���[�Ķ�k� �d��<���oC4R������(ֹ���\'�9�&�]����>���s������%Q�&D녊.�.~�5��ȼ��؏���\'�+|�#���5�x^� �͏���Jr؞�On��� �t���6����n?���{^m�H;�ߛ�v�_��܊1�(�ޑ�g6^�5�d񺻔`-@� �Ҹkd�*}A�k�h?����>���6g)q��x��Ϊ"+���ʣ�$J{d����͌rrMiOfL:�Ξ��f,�9Rs�+2�U#��O�U���A��T��3��%��\'��W̸���!4D<�݌�٥zӼ�����*S���t	�����-�:g���W��?J��]A�� ��+�Ț�5����/E�����C������` �"�}9�=�r��PO�]>�1��EoIk�8���h�#�W"�*z�(�*1�1VIM�J�EE�E�Vq��5�Y6�}�g�ҵ�����=/�� ��AEVgHQE QE QE QE QE QE QE QE QE QE QE QE QE QE�c����W���ҥݜ���Î8�#��J���a7^��T�I0B��U�U����?Z�T�+*)�\\�r8���E�{RpԤ#��P}�ind(���9��"8<z�R�����[Ѣ�[�D�<���St�����U� :���/� H���z�B�� (��y=9��.i�{c[�F܌���Go-�*%%�&C5�{҅w��5it�����]�5E Vnj�#�p;��U��U9=5:(=�Z�spU~���֬NDw�am�p,�� ����>y�wn�U"����+O�sm�0�2���Y��{���F0���d��W����7�� C	?xӱ�����\'�8�@�֕���D�lc�޸��f��q�ܚ�i6������o�+
���sH�*,#\\�
�ԊxO*,��ʱ�=Y�iց�d����O�q�Uڣod��]���~�3o�wF�#h�U�Ȇ�yTl}��72�݉e��ATn������ d����7HL���+i����|˸�H9�ڸ�8|˓#s������37�\'Y���TI@�y��b;F ~&��/���[V\\Ң]�q�1�/��qQj��3����"��ť����ˀ?��K��ܓ���!���Mu���������I��I� ����"$tR�WB�����a�2�?�r�1[yA�$�� �3W�%� �%���c����Wm�F#�\\v��\'���,#%�u?�w-�6:��f���e¿k�(y����]���8�W+��W����vk�������x��^�m�9=2�~u�7g=�?ʹf4c�h�k���Ϳ����I
��#�o�@�a��>]�x�O� �hݩ%��~���!��=rj��Ԙ|/�K�I�sʷ5^���<d�ƙ,@F�O���Tղ�{�֩����O�V!�(P��Y�nb6�E�KU!�<��U�����дm�y�~T==q]>��&q�mqIx�)��-�T� �����KCXM(?FKo����
鬿ԏ�s6����k��ܴ#>��G��٦�&��xY~�������Ә��+Y�M�ƍ�Ā�9�:Ϸ#�G�օq���G�����QPtQ@Q@Q@Q@Q@Q@Q@Q@Q@Q@Q@Q@���P+��L�I��AG������������������������������������������������������������������������������������������������������1�http://ns.adobe.com/xap/1.0/ <?xpacket begin=\'﻿\' id=\'W5M0MpCehiHzreSzNTczkc9d\'?>
<x:xmpmeta xmlns:x="adobe:ns:meta/"><rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:Description rdf:about="uuid:faf5bdd5-ba3d-11da-ad31-d33d75182f1b" xmlns:xmp="http://ns.adobe.com/xap/1.0/"><xmp:CreatorTool>Windows Photo Editor 10.0.10011.16384</xmp:CreatorTool></rdf:Description></rdf:RDF></x:xmpmeta>
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                   <?xpacket end=\'w\'?>�� C 


�� C		��  z t" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&\'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&\'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? ��lL�8��t���� ���X�� eC���jq��v����|J��m��eY�;m���ݛ�G�HQ���@�J�Z�t� Z�J�;H��y叠I�W�k_�U����v�-��F�ɯ�w�/��鮯n�y�%���A�� ��O�4���T黹��^�0���Y�*�	�w�����b?O�_F�#1R���Z��3id}o�{��� �Kk`6H<��fQF	�����S]
�/�9�J�����:iz��k�E��s��f,��ߍz�ډ�Yta��r��ŏ��d�,{0ʌ��_�?*���� ?�n�ү�L�<�j�����8� �ӷz歆���}���J��=��,�j�m��k����։W5��6�����}bcc�w��̸����`��g�\'l[VW8�-�n�V��|Ǌ+[�t�<?2�B#�ڲ�x�u�֎���q��ڪ2O�|i�[�2���W���[�����T��M}K�[\\� �o�Z�Ҷ�Z1~����?�|)�K�.)0o�:� ��W~�N}L�.kD�յcyq�#g����� <�m���(�8��t v�Z<nv?v<�S��{U	����	,x�� ^��3�f��=��-���9�}��p0qۿ҆�=˞?Z=�����g�J���@a�#6U�OO���O��+0#�^yl�=�>����y.)�� sU�It��>���>(iؗ�nԬ��Lz���X5�L��>��+�x���0�ںʜ��>����c�J��G���4�=B��fO��&")>x�Ίmۖ[�+��r����C�讣��u�?�ej���^U9^��c�K�G,��Ɗ��|Ɗ�27�x�e����u�ֶ�\\ �� �z���j��u�H�(T~�?*��\\��^xP_��?��}Y�Q^f�F����ʾ_��Xn�xj��t�z0Қ&ڜT��	;I��G\'��:��\\z�=�
��O� (�$� �O �ג�R#ödg�8����dW���5��H �/�\'�c&i�Ȳy�3�>X9�1�S�ך�Ӵ��^�x��#9�y2y�@�c�p��o��nk�!����v�0�,���t��H���?m|��⛨ĳ���*��%y�|�\'I-�Qr�����J�ơn-�O-�9d<� �u���O�x�I�4qss{�1���{�\\�w>��]\'����#6����i1��^q��z���*�5��,p�bP�0#Q�q^ulC~�k�Kߩ�>e������]8\\|���}���o�gŃ\\�4�k�e�N���h�eG�w
�>#h������Y!)Nݴ㯾+�5֞?\\Y>T]����1����K��i�<Lm5F�kf}�u�� �t�cj��ں8�ڱ5���s��G;}i���;\'�h�#gG_�kfaX�Ka��%j �o���~�㷌��Kx���d\'�q�Wͺ���my��Fs�+ۿhI�<]���D�^�z�~&�n�.��<�Ĵp��<FH�1�»��R��j�m�K<�aA!X�8 >����i�Y-m �gxl��X��k������@���n?�$��S���w���u���?]I�h��O������9c�~5�)�]����;��[[O��]^�ɸ׵�����8���q]G�� �K�H�#�U�{ɚ���\\�я�p;��B��i�ź����*�C���JŒzB���>�՚�������xfGl�A�:q\\j(�A���f֋c�E��� ,H�� �:��n��m;�։up���ٛd�՛��S]���ژ�6$p�����_>�6k!mq���\'�H]X"�8g�g��s�q���B�\'��<=���ם5޻�o�� X��H}i�{�?g��?�v����/e	�ϥt��?k��7 ��U@�6��7HW���Mu� t�4�Kv	���	ox�8����GZҔ{���v�8ɭQ�����j�W�a���Q�l�q��?1��.�r��e� k��](��pʠex����U�c�Wkj�+sr<��`v����y���ev�:8�gʑ�?����ԥ�D��˂y�� _����2b�B���r�C]��-Hͤ�/%��w=@Q�^]c�ht�Z��Z��>b�5l3������� tɬe;�z�Y����_\\x����!�cf=�M��=��{���8���H�f�aR�J+F�3m�2A#>������gq%�� �o-<ч�sp�
Fk��X�T�>��Ԝ��}n�5K�׹���x.���E�q��O%���<�
H,�9�}+�4?
���,H�v�)�3��?�[7Ek��\\Vdw���S��pjd��㺌/��Y�,��ѱ����lmo���+7v�k^e� E�lך��V[[�M�.�C����/�e�U�z���F�g�q���<y�*��6��f�x�ŉ
���-|�?�\'�ŋ�����20X���z�� ����[�<\\�V�ʞ���|@�	u-�dj���q���Ƽ�M񶠺l+B|���l��VuK�6dX���y�ʊ���x���t���V��GU7��7���@h�(��Yy�^���F����9���Ó��.��oyNu!eJ��]�w遑����e��g�\\[�}rc��n0P���:��Z��#Z�t�	��c%y� �O\\��-�O	߯��u����F=9?���	�R�����,�i��I
�ю~o׌{W��;��-��@�F��נ��QI4�Va�*��ʎ?�\\5��[�v��z�� �v���5Ȟ��>ǫ|�t~�e�s�m;�1�@�`��������8��?x�KP�^!�S�ו���Z}5�9}�[��9urw(#� }��>��w����O�D񄬾QQo����������b)JO�������}�y��m�����*��zՂx.#W��d�	��c\\����[�"x"�ܭ
��F:�ټ��5�mm�+�K	
�.A�Ϯ}~�����)-z���y��c�n� �y���$�*GY&m��%��:����<
���Kx� �`�ێ�O�Z�z�֩{$v��𳝣jD�e���ٻ!�Q�6�q_<ko�}KYZ�^�R���	�r����rq�$xO��g���/��I�rIl7s�z�S����/�IYe��2A|��UO@pI8��R+n��\\�Cu�L�>�W�B��b�:�d}��i���a���3�p��B
�q������aj��5��=�w6�ryۜw��s�
�A{��iv���0ȥc������1��.<#�Geso%Vg�r�+���z4�[#���喇��x��(�4�p������� ¸Օ����~d��Ei�|�9�m�q��!��8PNzv�z��;X��IO@�y�� ��Wd��!�X�*Nю��^5��Iq�5(~���B�rs�}���m�zx{�y�j�"J�;]rF{��f��[���C�a�=�*)���=@S�}G� ��źu�\'p��� ��ζ���nc� ih!2J��?�j�<���\\��X+~�b1�:���~ԞЬ�=BH��ڝ��@$�������m�!���$#`U ^��V5j�-�=����/�����#k�N�8�l�]įqso,���n�\'��q��"K{[�:+3����mq^��˧mLyx!#ߥx�|�>�/�����x�<7�Y<8�$�Z�W�8��r�N1�5�4�� x~��<��F���8� �}y��{W�|i��h��<�ڴ����a78��:�� kp��l��U_4u�@��zqV������7�|�.�.���@�%�������7�I�*����"���q���W��������,1g��@n�z�r�߂j����9�~`r~��^�Zh�	�w���5��2�y��\\�+ۓ�H������I׵�F���Rp�y�m�q���2G>�f�e�d�Җ�Ё������!$�X�Ty<����9���9����b.d���=�汜��#Z7�>�_UZkQ7�~����"���+_��I,�Dks�w18�t������sf��;�D3 ��O�3��@�ھp�g��������@H�	�w�v���㍀c>��m�7�}/����N�����3��|>�	�� ��]��)��Gon�r�SАT��p:���O����_UO� 0��\\���tܑ���M&7@���%^[�k��3��7�O<F����4[{W��
yڸ8�VF�m��O�\'��3�m�A��wZ<j5�(��/���מ�J�T��P����sþ��cF#�:WY�?�&�yq��������t~�b�����[h����ژ�N��b�� K���H�l�L>�,M.�6y9��μ�����}ͅ����WF.f�,n �0.�:�*6���ҽ��q���;W,��:�Z��(��k⹌�C�mKC�]�"�[�x��x/�v d���Yd����^eB�G�@�<q_a����qF�OlY�F�=H�k�� �Ӫ�ԟ���<������Y��1��Y������K��,�ƿ�
��냻#��!|m��K�WzD��&�r�-�~6�r��|1��E����-ʠ\'�A�k���r)�&72/�A���eiP��5�SSJ,�X�6O�h����6��ù��1�>a�b��M�_DO$¤�^M�O4�}�[����', 'width="116" height="122"', 'image/jpeg') ; 
INSERT INTO `users` VALUES (5, 'ENCODER1', 'user1', 'pass', 2, 1, 'Enabled', NULL, NULL, NULL) ; 
INSERT INTO `users` VALUES (26, 'Encoder2', 'user2', 'pass', 2, 1, 'Enabled', NULL, NULL, NULL) ;
#
# End of data contents of table users
# --------------------------------------------------------

