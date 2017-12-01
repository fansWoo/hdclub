<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_groupactivity.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'groupactivity_fids' => '制定群組',
	'groupactivity_fids_comment' => '指定群組，多個ID之間請用半角逗號「,」隔開。',
	'groupactivity_gtids' => '群組分類',
	'groupactivity_gtids_comment' => '設置群組所在分類，可以按住 CTRL 多選，全選或全不選均為不做限制',
	'groupactivity_uids' => '發起者UID',
	'groupactivity_uids_comment' => '設置活動發起人UID ，多個 UID 請用半角逗號「,」隔開。',
	'groupactivity_startrow' => '起始數據行數',
	'groupactivity_startrow_comment' => '如需設定起始的數據行數，請輸入具體數值，0 為從第一行開始，以此類推',
	'groupactivity_items' => '顯示數據條數',
	'groupactivity_items_comment' => '設置一次顯示的主題條目數，請設置為大於 0 的整數',
	'groupactivity_titlelength' => '標題最大字節數',
	'groupactivity_titlelength_comment' => '設置當標題長度超過本設定時，是否將標題自動縮減到本設定中的字節數，0 為不自動縮減',
	'groupactivity_fnamelength' => '標題最大字節數包含版塊名稱',
	'groupactivity_fnamelength_comment' => '設置標題長度是否將所在版塊名稱的長度一同計算在內',
	'groupactivity_summarylength' => '主題簡短內容文字數',
	'groupactivity_summarylength_comment' => '設置主題簡短內容的文字數，0 為使用默認值 255',
	'groupactivity_tids' => '指定主題',
	'groupactivity_tids_comment' => '設置要指定顯示的主題 tid ，多個 tid 請用半角逗號「,」隔開。注意: 留空為不進行任何過濾',
	'groupactivity_keyword' => '標題關鍵字',
	'groupactivity_keyword_comment' => '設置標題包含的關鍵字。注意: 留空為不進行任何過濾； 關鍵字中可使用通配符 *； 匹配多個關鍵字全部，可用空格或 AND 連接。如 win32 AND unix； 匹配多個關鍵字其中部分，可用 | 或 OR 連接。如 win32 OR unix',
	'groupactivity_typeids' => '主題分類',
	'groupactivity_typeids_comment' => '設置特定分類的主題。注意: 全選或全不選均為不進行任何過濾',
	'groupactivity_typeids_all' => '全部的主題分類',
	'groupactivity_sortids' => '分類信息',
	'groupactivity_sortids_comment' => '設置特定分類信息的主題。注意: 全選或全不選均為不進行任何過濾',
	'groupactivity_sortids_all' => '全部的分類信息',
	'groupactivity_digest' => '精華主題過濾',
	'groupactivity_digest_comment' => '設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾',
	'groupactivity_digest_0' => '普通主題',
	'groupactivity_digest_1' => '精華 I',
	'groupactivity_digest_2' => '精華 II',
	'groupactivity_digest_3' => '精華 III',
	'groupactivity_stick' => '置頂主題過濾',
	'groupactivity_stick_comment' => '設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾',
	'groupactivity_stick_0' => '普通主題',
	'groupactivity_stick_1' => '置頂 I',
	'groupactivity_stick_2' => '置頂 II',
	'groupactivity_stick_3' => '置頂 III',
	'groupactivity_special' => '特殊主題過濾',
	'groupactivity_special_comment' => '設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾',
	'groupactivity_special_1' => '投票主題',
	'groupactivity_special_2' => '商品主題',
	'groupactivity_special_3' => '懸賞主題',
	'groupactivity_special_4' => '活動主題',
	'groupactivity_special_5' => '辯論主題',
	'groupactivity_special_0' => '普通主題',
	'groupactivity_special_reward' => '懸賞主題過濾',
	'groupactivity_special_reward_comment' => '設置特定類型的懸賞主題',
	'groupactivity_special_reward_0' => '全部',
	'groupactivity_special_reward_1' => '已解決',
	'groupactivity_special_reward_2' => '未解決',
	'groupactivity_recommend' => '推薦主題過濾',
	'groupactivity_recommend_comment' => '設置是否只顯示推薦的主題',
	'groupactivity_orderby' => '主題排序方式',
	'groupactivity_orderby_comment' => '設置以哪一字段或方式對主題進行排序',
	'groupactivity_orderby_lastpost' => '按最後回覆時間倒序排序',
	'groupactivity_orderby_dateline' => '按發佈時間倒序排序',
	'groupactivity_orderby_replies' => '按回複數倒序排序',
	'groupactivity_orderby_views' => '按瀏覽次數倒序排序',
	'groupactivity_orderby_heats' => '按熱度倒序排序',
	'groupactivity_orderby_recommends' => '按主題評價倒序排序',
	'groupactivity_orderby_hourviews' => '按指定時間內瀏覽次數倒序排序',
	'groupactivity_orderby_todayviews' => '按當天瀏覽次數倒序排序',
	'groupactivity_orderby_weekviews' => '按本周瀏覽次數倒序排序',
	'groupactivity_orderby_monthviews' => '按當月瀏覽次數倒序排序',
	'groupactivity_orderby_hours' => '指定時間(小時)',
	'groupactivity_orderby_hours_comment' => '指定時間內瀏覽次數倒序排序的時間值',
	'groupactivity_orderby_todayhots' => '按當天累計售出數倒序排序',
	'groupactivity_orderby_weekhots' => '按本周累計售出數倒序排序',
	'groupactivity_orderby_monthhots' => '按當月累計售出數倒序排序',
	'groupactivity_price_add' => ' 附加 ',
	'groupactivity_place' => '活動地點',
	'groupactivity_class' => '活動類型',
	'groupactivity_class_all' => '所有類型',
	'groupactivity_gender' => '性別要求',
	'groupactivity_gender_0' => '不限',
	'groupactivity_gender_1' => '男',
	'groupactivity_gender_2' => '女',
	'groupactivity_orderby_weekstart' => '按一周內活動開始時間排序',
	'groupactivity_orderby_monthstart' => '按一月內活動開始時間排序',
	'groupactivity_orderby_weekexp' => '按一周內報名截止時間排序',
	'groupactivity_orderby_monthexp' => '按一月內報名截止時間排序',
	'groupactivity_gviewperm' => '群組瀏覽權限',
	'groupactivity_gviewperm_nolimit' => '不限制',
	'groupactivity_gviewperm_only_member' => '僅成員',
	'groupactivity_gviewperm_all_member' => '所有人',
	'groupactivity_highlight' => '獲得高亮值',
);

?>