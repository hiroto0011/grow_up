-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 6 朁E29 日 03:20
-- サーバのバージョン： 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_growup`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gu_submitted_contact`
--

CREATE TABLE `gu_submitted_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `filename` varchar(30) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `gu_submitted_contact`
--

INSERT INTO `gu_submitted_contact` (`id`, `name`, `filename`, `created_at`) VALUES
(1, '太郎 太郎', '1524048442.csv', 1524048442),
(2, '太郎 太郎', '1524048575.csv', 1524048575),
(3, '太郎 太郎', '1524049292.csv', 1524049292),
(4, '太郎 太郎', '1524049306.csv', 1524049306),
(5, 'ああ ああ', '1524135675.csv', 1524135675),
(6, 'ああ ああ', '1524135881.csv', 1524135881),
(7, 'ああ ああ', '1524136231.csv', 1524136231),
(8, '太郎 太郎', '1524188189.csv', 1524188189),
(9, '太郎 太郎', '1524188352.csv', 1524188352),
(10, '太郎 太郎', '1524189017.csv', 1524189017),
(11, '太郎 太郎', '1524189020.csv', 1524189020),
(12, '太郎 太郎', '1524189030.csv', 1524189030),
(13, '太郎 太郎', '1524189044.csv', 1524189044),
(14, '太郎 太郎', '1524189512.csv', 1524189512),
(15, '太郎 太郎', '1524189557.csv', 1524189557),
(16, '太郎 太郎', '1524189569.csv', 1524189569),
(17, '太郎 太郎', '1524189712.csv', 1524189712),
(18, '太郎 太郎', '1524189786.csv', 1524189786),
(19, '太郎 太郎', '1524189920.csv', 1524189920),
(20, '太郎 太郎', '1524189960.csv', 1524189960),
(21, '太郎 太郎', '1524190239.csv', 1524190239),
(22, '太郎 太郎', '1524190317.csv', 1524190317),
(23, '太郎 太郎', '1524193494.csv', 1524193494),
(24, '太郎 太郎', '1524194163.csv', 1524194163),
(25, '太郎 太郎', 'data/logs/contact_log.csv', 1524195709),
(26, '太郎 太郎', 'contact_log.csv', 1524195742),
(27, '太郎 太郎', 'contact_log.csv', 1524195785),
(28, '太郎 太郎', 'contact_log.csv', 1524195793),
(29, '太郎 太郎', 'contact_log.csv', 1524195820),
(30, '太郎 太郎', 'contact_log.csv', 1524195827),
(31, '太郎 太郎', 'contact_log.csv', 1524196493),
(32, '太郎 太郎', 'contact_log.csv', 1524196500),
(33, '太郎 太郎', 'contact_log.csv', 1524196549),
(34, '太郎 太郎', 'contact_log.csv', 1524196599),
(35, '太郎 太郎', 'contact_log.csv', 1524196702),
(36, '太郎 太郎', 'contact_log.csv', 1524196713),
(37, '太郎 太郎', 'contact_log.csv', 1524196719),
(38, '太郎 太郎', 'contact_log.csv', 1524196721),
(39, '太郎 太郎', 'contact_log.csv', 1524196735),
(40, '太郎 太郎', 'contact_log.csv', 1524196771),
(41, '太郎 太郎', 'contact_log.csv', 1524196797),
(42, '太郎 太郎', 'contact_log.csv', 1524196977),
(43, '太郎 太郎', 'contact_log.csv', 1524196993),
(44, '太郎 太郎', 'contact_log.csv', 1524197012),
(45, '太郎 太郎', 'contact_log.csv', 1524197014),
(46, '太郎 太郎', 'contact_log.csv', 1524197219),
(47, '太郎 太郎', 'contact_log.csv', 1524197231),
(48, '太郎 太郎', 'contact_log.csv', 1524197287),
(49, '太郎 太郎', 'contact_log.csv', 1524197320),
(50, '太郎 太郎', 'contact_log.csv', 1524197327),
(51, '太郎 太郎', 'contact_log.csv', 1524197914),
(52, '太郎 太郎', 'contact_log.csv', 1524197921),
(53, '太郎 太郎', 'contact_log.csv', 1524197944),
(54, '太郎 太郎', 'contact_log.csv', 1524198032),
(55, '太郎 太郎', 'contact_log.csv', 1524198542),
(56, '太郎 太郎', 'contact_log.csv', 1524198575),
(57, '太郎 太郎', 'contact_log.csv', 1524199007),
(58, '太郎 太郎', 'contact_log.csv', 1524199137),
(59, '太郎 太郎', 'contact_log.csv', 1524199149),
(60, '太郎 太郎', 'contact_log.csv', 1524199240),
(61, '太郎 太郎', 'contact_log.csv', 1524199548),
(62, '太郎 太郎', 'contact_log.csv', 1524199579),
(63, '太郎 太郎', 'contact_log.csv', 1524199625),
(64, '太郎 太郎', 'contact_log.csv', 1524199739),
(65, '太郎 太郎', 'contact_log.csv', 1524199787),
(66, '太郎 太郎', 'contact_log.csv', 1524199809),
(67, '太郎 太郎', 'contact_log.csv', 1524199860),
(68, '太郎 太郎', 'contact_log.csv', 1524199909),
(69, '太郎 太郎', 'contact_log.csv', 1524200126),
(70, 'クララ クララ', 'contact_log.csv', 1524200229),
(71, '太郎 太郎', 'contact_log.csv', 1524200704),
(72, '太郎 太郎', 'contact_log2018.csv', 1524201421),
(73, '太郎 太郎', 'contact_log2018.csv', 1524201597),
(74, '太郎 太郎', 'contact_log2018.csv', 1524201616),
(75, '太郎 太郎', 'contact_log2018.csv', 1524201622),
(76, '太郎 太郎', 'contact_log2019.csv', 1524201672),
(77, '太郎 太郎', 'contact_log2020.csv', 1524201689),
(78, '山田 太郎', 'contact_log2018.csv', 1526285724),
(79, 'd d', 'contact_log2018.csv', 1529049583),
(80, 'd d', 'contact_log2018.csv', 1529049745);

-- --------------------------------------------------------

--
-- テーブルの構造 `gu_users`
--

CREATE TABLE `gu_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `token` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `address` varchar(200) NOT NULL,
  `is_activated` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_user_id` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gu_users`
--

INSERT INTO `gu_users` (`id`, `name`, `username`, `email`, `token`, `password`, `address`, `is_activated`, `created_at`, `created_user_id`, `updated_at`, `updated_user_id`) VALUES
(25, 'アフマドサムライ', 'deer', 'deer@gmail.com', '5ad8726047eaa', 'f6789f7d86f1ceec5090657bbad68e327b449c00', '川崎市高津区', 1, '0000-00-00 00:00:00', 0, 1524134532, 25),
(26, 'Mark', 'mark', 'mark@gmail.com', '5ad85d593e2d6', 'ea2f648e7864400eed3d7e1756d28e4747fb84e7', 'Japan', 1, '0000-00-00 00:00:00', 0, 0, 0),
(27, 'クララ', 'clara', 'clara@gmail.com', '5ad9412a66e3c', 'b2ee6ce8dc3a8f7f358a0c89a6ebee37a920ea06', '東京都', 1, '0000-00-00 00:00:00', 0, 1524187750, 27),
(28, 'kim', 'abcd', 'abc@naver.com', '5b1a31b8c4aa4', '85ac605eaf7ea1efda79a61eb3a6ca734f2e7d8a', 'JAPAN', 0, '0000-00-00 00:00:00', 0, 1528443300, 28),
(29, 'check', 'check', 'check@naver.com', '5b1a3363e0da6', 'dbb2e1b6aa8a3b8103f8b74c84514958c25c193c', 'check', 0, '0000-00-00 00:00:00', 0, 0, 0),
(30, 'check2', 'check2', 'ssds@naver.com', '5b1a33ba3db85', '06ddccdb07406eb770738bf64305df981f7988f5', 'check2', 0, '2018-06-07 15:00:00', 0, 0, 0),
(31, 'abcd', 'abcde', 'abcde@naver.com', '5b1a447f09f50', '9856c26f6aacd7f4122b71ac0b1afbe78b2cdc59', 'abcde', 0, '2018-06-07 15:00:00', 0, 0, 0),
(32, '123', '123', '123@naver.com', '5b1dcaca49b3a', '33af95230fbdff8d5b709244e89055f03f3e4c8f', '123', 0, '2018-06-10 15:00:00', 0, 0, 0),
(34, '12', '12', '12@naver.com', '5b1f8156aa5b5', '81b1a80386756f98485b07b5b47fd4cf15edec87', '12', 0, '2018-06-11 15:00:00', 0, 0, 0),
(35, '1234', '1234', '1234@naver.com', '5b231ea1cce5b', '4f77482a9a6cf9ebdd4dd88c428df25eaefb100e', '1234', 0, '0000-00-00 00:00:00', 0, 0, 0),
(36, '1212', '1212', '1212@naver.com', '5b231f6ef3adf', 'a26cd78cac58ed0caf8b1102cb9f371fb731c895', '1212', 0, '2018-06-15 02:07:42', 0, 0, 0),
(37, '12312', '12312', '12312@naver.com', '5b2329085e78d', '286359d06cdc193f2efc7be026394c5bc3002879', '12312', 0, '2018-06-15 02:48:40', 0, 0, 0),
(38, 'kim', '1313', 'roomescape@naver.com', '5b232f5219e0f', '8acfbeeabfbd701d70096fcb3b7d628e21b9a0f1', '1313', 0, '2018-06-15 03:15:30', 0, 0, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `gu_user_keep`
--

CREATE TABLE `gu_user_keep` (
  `user_name` varchar(30) NOT NULL,
  `job_id` int(11) NOT NULL,
  `keeped_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=ujis;

--
-- テーブルのデータのダンプ `gu_user_keep`
--

INSERT INTO `gu_user_keep` (`user_name`, `job_id`, `keeped_at`) VALUES
('123', 5, '2018-06-12 06:13:51'),
('123', 10, '2018-06-12 09:43:36'),
('123', 1, '2018-06-14 09:31:28'),
('1313', 4, '2018-06-15 07:02:29');

-- --------------------------------------------------------

--
-- テーブルの構造 `gu_user_reset_password`
--

CREATE TABLE `gu_user_reset_password` (
  `user_id` int(11) NOT NULL,
  `token` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `gu_user_reset_password`
--

INSERT INTO `gu_user_reset_password` (`user_id`, `token`, `password`, `created_at`) VALUES
(25, '5ad973816ef84', '', 1524200321);

-- --------------------------------------------------------

--
-- テーブルの構造 `gu_user_search_history`
--

CREATE TABLE `gu_user_search_history` (
  `user_name` varchar(30) NOT NULL,
  `job_id` int(11) NOT NULL,
  `search_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=ujis;

--
-- テーブルのデータのダンプ `gu_user_search_history`
--

INSERT INTO `gu_user_search_history` (`user_name`, `job_id`, `search_at`) VALUES
('123', 1, '2018-06-11 03:05:34'),
('123', 1, '2018-06-11 03:15:06'),
('123', 3, '2018-06-11 03:15:57'),
('123', 8, '2018-06-11 05:40:08'),
('123', 4, '2018-06-11 05:44:11'),
('123', 8, '2018-06-11 07:08:40'),
('123', 4, '2018-06-12 01:01:02'),
('123', 4, '2018-06-12 05:13:50'),
('123', 4, '2018-06-14 06:06:32'),
('123', 4, '2018-06-14 06:45:04'),
('123', 1, '2018-06-14 09:31:33'),
('1313', 4, '2018-06-15 07:02:46'),
('123', 5, '2018-06-28 07:26:35'),
('12', 4, '2018-06-28 07:42:07'),
('12', 4, '2018-06-28 07:42:14'),
('123', 7, '2018-06-28 07:51:53');

-- --------------------------------------------------------

--
-- テーブルの構造 `gu_user_upload_files`
--

CREATE TABLE `gu_user_upload_files` (
  `user_name` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ujis;

--
-- テーブルのデータのダンプ `gu_user_upload_files`
--

INSERT INTO `gu_user_upload_files` (`user_name`, `file`, `uploaded_at`, `file_id`) VALUES
('123', 'K-005.png', '2018-06-14 09:52:39', 6),
('1313', 'K-007.png', '2018-06-15 05:29:09', 10);

-- --------------------------------------------------------

--
-- テーブルの構造 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `file_name` varchar(40) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ujis;

--
-- テーブルのデータのダンプ `news`
--

INSERT INTO `news` (`id`, `file_name`, `updated_at`, `title`) VALUES
(1, 'page1.txt', '2018-06-28 01:18:22', 'イラストレーター勉強会AND同好会'),
(2, 'a.txt', '2018-06-28 05:23:25', 'a'),
(3, 'b.txt', '2018-06-28 05:23:25', 'b'),
(4, 'c.txt', '2018-06-28 05:23:25', 'c'),
(5, 'd.html', '2018-06-28 05:23:25', 'd'),
(6, 'abc.txt', '2018-06-28 06:27:27', 'abc');

-- --------------------------------------------------------

--
-- テーブルの構造 `work_informations`
--

CREATE TABLE `work_informations` (
  `id` int(11) NOT NULL COMMENT 'お仕事登録番号',
  `period` varchar(255) NOT NULL COMMENT '期間',
  `allowance` enum('指定なし','時給','日給','月給','年収') NOT NULL COMMENT '給与形態',
  `money` varchar(255) NOT NULL COMMENT '給与',
  `hours` varchar(255) NOT NULL COMMENT '勤務時間',
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='基本情報';

--
-- テーブルのデータのダンプ `work_informations`
--

INSERT INTO `work_informations` (`id`, `period`, `allowance`, `money`, `hours`, `type`) VALUES
(1, '即日～長期', '月給', '50万円～60万円', '10：00～19：00', '派遣社員'),
(2, '7月1日or中旬～長期', '月給', '25万円～30万円', '', NULL),
(3, '即～中長期　※単月更新', '月給', '～50万円', '', '業務委託'),
(4, '即日～長期(長い方で3年以上)', '月給', '～85万円', '', NULL),
(5, '', '指定なし', '', '', '正社員'),
(6, '', '指定なし', '', '', 'パート・アルバイト'),
(7, '', '指定なし', '', '', '在宅業務,正社員,派遣社員,業務委託'),
(8, '', '指定なし', '', '', '在宅業務,パート・アルバイト'),
(9, '7月～(長期の可能性あり)', '月給', '～26万円', '', NULL),
(10, '即日または7月～', '月給', '～60万円', '10:00～19:00', '正社員');

-- --------------------------------------------------------

--
-- テーブルの構造 `work_locations`
--

CREATE TABLE `work_locations` (
  `id` int(11) NOT NULL COMMENT 'お仕事登録番号',
  `prefectures` enum('東京','神奈川','千葉','埼玉','茨城','栃木','群馬','その他') NOT NULL COMMENT '都道府県',
  `district` set('千代田区','中央区','港区','新宿区','文京区','台東区','墨田区','江東区','品川区','目黒区','大田区','世田谷区','渋谷区','中野区','杉並区','豊島区','北区','荒川区','板橋区','練馬区','足立区','葛飾区','江戸川区','その他') NOT NULL COMMENT '地区',
  `location` varchar(255) NOT NULL COMMENT '勤務地詳細'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='勤務地';

--
-- テーブルのデータのダンプ `work_locations`
--

INSERT INTO `work_locations` (`id`, `prefectures`, `district`, `location`) VALUES
(1, '東京', '渋谷区', ''),
(2, '東京', '渋谷区', ''),
(3, '東京', '港区', '港区 or 千代田区'),
(4, '東京', '千代田区', ''),
(5, '東京', 'その他', ''),
(6, '東京', 'その他', ''),
(7, '東京', 'その他', ''),
(8, '東京', 'その他', ''),
(9, '東京', '大田区', ''),
(10, '東京', '渋谷区', '渋谷区or目黒区');

-- --------------------------------------------------------

--
-- テーブルの構造 `work_occupations`
--

CREATE TABLE `work_occupations` (
  `id` int(11) NOT NULL COMMENT 'お仕事登録番号',
  `occupation` enum('事務','営業','プログラマー','システムエンジニア','イラストレーター','Webデザイナー','DTPデザイナー','漫画家','シナリオライター') NOT NULL COMMENT '職種',
  `description` varchar(255) NOT NULL COMMENT '仕事内容',
  `environment` varchar(255) NOT NULL COMMENT '開発環境',
  `required_skill` varchar(255) NOT NULL COMMENT '必須スキル',
  `recommended_skill` varchar(255) NOT NULL COMMENT '推奨スキル'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='職種';

--
-- テーブルのデータのダンプ `work_occupations`
--

INSERT INTO `work_occupations` (`id`, `occupation`, `description`, `environment`, `required_skill`, `recommended_skill`) VALUES
(1, 'システムエンジニア', 'アプリケーションを開発/設計して頂きます。\nプロジェクトは既に進行中のため、設計/開発フェーズでの参画となります。', 'OS: Linux (Cent OS)\n開発言語：Ruby, Golang, Lua, C/C++', '・Lightweight Language 3年以上\n・Web API 開発経験\n・標準的なWeb技術 (REST)\n・設計経験あり\n・Devopsツールの利用経験（Circle CI, Ansibleなど）', '特になし'),
(2, 'プログラマー', '各種アプリ開発 （PHP）', '開発言語：php', 'phpでの実務経験が少しでもある方（※未経験不可）\nやる気と人柄', '特になし'),
(3, 'システムエンジニア', 'ポータルサイト開発（Java部分）', '開発言語：Java', '・Java、SQL\n・Webシステム構築経験\nやる気と人柄\n※ある程度スキルある方を探しております', 'HTML/JavaScriptの理解／作成経験'),
(4, 'プログラマー', '大手メディア企業', '', '', ''),
(5, 'システムエンジニア', 'iOSエンジニア', '開発言語：Java', '・iOSアプリ開発(Objective-Cでのネイティブアプリの開発)業務半年以上\n・iOSアプリでデータ処理およびネットワーク処理、WebAPI連携を実装したことのある方\n・Objective-C、オブジェクト指向言語の開発の経験あり\n・Swift実業務のご経験もしくは個人的にSwiftを学習されている方、アプリ制作されている方', ''),
(6, 'システムエンジニア', 'Androidエンジニアリーダー', '開発言語：Java', '・Androidアプリ開発(Javaでのネイティブアプリの開発)業務１年以上\n・Androidアプリでデータ処理およびネットワーク処理、WebAPI連携を実装したことのある方\n・Androidアプリ開発チーム（３名以上）のリーダー経験がある方\n・複数人で開発するアプリの要件定義および基礎設計を行ったことがある方', ''),
(7, 'システムエンジニア', 'iOSエンジニア（Swift）', '開発言語：Java', '・iOSアプリ開発(Swiftでの開発)業務半年以上\n・iOSアプリでデータ処理およびネットワーク処理、WebAPI連携を実装したことのある方\n・Objective-C、オブジェクト指向言語の開発の経験あり', ''),
(8, 'システムエンジニア', 'Andoroidエンジニア', '開発言語：Java', '・Androidアプリ開発(Javaでのネイティブアプリの開発)業務３年以上\n・Androidアプリでデータ処理およびネットワーク処理、WebAPI連携を実装したことのある方\n・Java、オブジェクト指向言語の開発の経験あり', ''),
(9, '事務', '・会議の案内\n・議事録作成\n・Excelの更新、集計\n・PowerPointの更新\n・Notesの権限設定 等', 'Excel,PowerPoint', '・議事録作成\n・Excel PowerPointの修正作業', ''),
(10, 'プログラマー', '新規ソーシャルゲームの立ち上げやリリース後の運用改善をお任せ致します。', '', '・ソーシャルゲームの開発・運営事業経験2年以上', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `work_pages`
--

CREATE TABLE `work_pages` (
  `id` int(11) NOT NULL COMMENT 'お仕事登録番号',
  `title` varchar(255) NOT NULL COMMENT '見出し',
  `link` text NOT NULL COMMENT '飛ばすURL',
  `remarks` varchar(255) NOT NULL COMMENT '備考',
  `created_at` datetime NOT NULL COMMENT '作成日',
  `updated_at` datetime NOT NULL COMMENT '更新日'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='webページ表示';

--
-- テーブルのデータのダンプ `work_pages`
--

INSERT INTO `work_pages` (`id`, `title`, `link`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'アプリケーションを開発/設計', './job/job20160629_01.html', '特になし', '2016-06-29 00:00:00', '2018-06-11 00:00:00'),
(2, '各種アプリ開発 （PHP）', './job/job20160629_02.html', '特になし', '2016-06-29 00:00:00', '2018-04-16 00:00:00'),
(3, 'ポータルサイト開発（Java部分）', './job/job20160629_03.html', '月収はスキル見合いで決まります', '2016-06-29 00:00:00', '2018-04-16 00:00:00'),
(4, '大手メディア企業', './job/job20160629_04.html', '・月収は単価スキル見合い\n・ゲーム、組み込み系キャリアの方、\nフル常駐できない方のご相談も受け付けております。', '2016-06-29 00:00:00', '2018-06-11 08:00:00'),
(5, 'iOSエンジニア', './job/job20160629_05.html', '特になし', '2016-06-29 00:00:00', '2018-04-16 00:00:00'),
(6, 'Androidエンジニア', './job/job20160629_05.html', '特になし', '2016-06-29 00:00:00', '2018-04-16 00:00:00'),
(7, 'Andoroid基盤（アーキ）担当エンジニア', './job/job20160629_05.html', '特になし', '2016-06-29 00:00:00', '2018-04-16 00:00:00'),
(8, 'iOSエンジニア（Swift）', './job/job20160629_05.html', '特になし', '2016-06-29 00:00:00', '2018-04-16 00:00:00'),
(9, 'システム開発PMO支援', './job/job20160629_06.html', '特になし', '2016-06-29 00:00:00', '2018-04-16 00:00:00'),
(10, '新規ソーシャルゲームディレクター/プランナー', './job/job20160629_07.html', '特になし', '2016-06-29 00:00:00', '2018-04-16 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gu_submitted_contact`
--
ALTER TABLE `gu_submitted_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gu_users`
--
ALTER TABLE `gu_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `gu_user_reset_password`
--
ALTER TABLE `gu_user_reset_password`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `gu_user_upload_files`
--
ALTER TABLE `gu_user_upload_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_informations`
--
ALTER TABLE `work_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_locations`
--
ALTER TABLE `work_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_occupations`
--
ALTER TABLE `work_occupations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_pages`
--
ALTER TABLE `work_pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gu_submitted_contact`
--
ALTER TABLE `gu_submitted_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `gu_users`
--
ALTER TABLE `gu_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `gu_user_upload_files`
--
ALTER TABLE `gu_user_upload_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `work_informations`
--
ALTER TABLE `work_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'お仕事登録番号', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `work_locations`
--
ALTER TABLE `work_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'お仕事登録番号', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `work_occupations`
--
ALTER TABLE `work_occupations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'お仕事登録番号', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `work_pages`
--
ALTER TABLE `work_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'お仕事登録番号', AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
