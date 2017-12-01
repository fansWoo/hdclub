<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_activitylist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'activitylist_fids' => '所在版塊',
	'activitylist_fids_comment' => '設置允許參與新帖調用的版塊，可以按住 CTRL 多選，全選或全不選均為不做限制',
	'activitylist_uids' => '發起者UID',
	'activitylist_uids_comment' => '設置活動發起者UID，多個UID請用半角逗號「,」隔開。',
	'activitylist_startrow' => '起始數據行數',
	'activitylist_startrow_comment' => '如需設定起始的數據行數，請輸入具體數值，0 為從第一行開始，以此類推',
	'activitylist_items' => '顯示數據條數',
	'activitylist_items_comment' => '設置一次顯示的主題條目數，請設置為大於 0 的整數',
	'activitylist_titlelength' => '標題最大字節數',
	'activitylist_titlelength_comment' => '設置當標題長度超過本設定時，是否將標題自動縮減到本設定中的字節數，0 為不自動縮減',
	'activitylist_fnamelength' => '標題最大字節數包含版塊名稱',
	'activitylist_fnamelength_comment' => '設置標題長度是否將所在版塊名稱的長度一同計算在內',
	'activitylist_summarylength' => '主題簡短內容文字數',
	'activitylist_summarylength_comment' => '設置主題簡短內容的文字數，0 為使用默認值 255',
	'activitylist_tids' => '指定主題',
	'activitylist_tids_comment' => '設置要指定顯示的主題 tid ，多個 tid 請用半角逗號「,」隔開。注意: 留空為不進行任何過濾',
	'activitylist_keyword' => '標題關鍵字',
	'activitylist_keyword_comment' => '設置標題包含的關鍵字。注意: 留空為不進行任何過濾； 關鍵字中可使用通配符 *； 匹配多個關鍵字全部，可用空格或 AND 連接。如 win32 AND unix； 匹配多個關鍵字其中部分，可用 | 或 OR 連接。如 win32 OR unix',
	'activitylist_typeids' => '主題分類',
	'activitylist_typeids_comment' => '設置特定分類的主題。注意: 全選或全不選均為不進行任何過濾',
	'activitylist_typeids_all' => '全部的主題分類',
	'activitylist_sortids' => '分類信息',
	'activitylist_sortids_comment' => '設置特定分類信息的主題。注意: 全選或全不選均為不進行任何過濾',
	'activitylist_sortids_all' => '全部的分類信息',
	'activitylist_digest' => '精華主題過濾',
	'activitylist_digest_comment' => '設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾',
	'activitylist_digest_0' => '普通主題',
	'activitylist_digest_1' => '精華 I',
	'activitylist_digest_2' => '精華 II',
	'activitylist_digest_3' => '精華 III',
	'activitylist_stick' => '置頂主題過濾',
	'activitylist_stick_comment' => '設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾',
	'activitylist_stick_0' => '普通主題',
	'activitylist_stick_1' => '置頂 I',
	'activitylist_stick_2' => '置頂 II',
	'activitylist_stick_3' => '置頂 III',
	'activitylist_special' => '特殊主題過濾',
	'activitylist_special_comment' => '設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾',
	'activitylist_special_1' => '投票主題',
	'activitylist_special_2' => '商品主題',
	'activitylist_special_3' => '懸賞主題',
	'activitylist_special_4' => '活動主題',
	'activitylist_special_5' => '辯論主題',
	'activitylist_special_0' => '普通主題',
	'activitylist_special_reward' => '懸賞主題過濾',
	'activitylist_special_reward_comment' => '設置特定類型的懸賞主題',
	'activitylist_special_reward_0' => '全部',
	'activitylist_special_reward_1' => '已解決',
	'activitylist_special_reward_2' => '未解決',
	'activitylist_recommend' => '推薦主題過濾',
	'activitylist_recommend_comment' => '設置是否只顯示推薦的主題',
	'activitylist_orderby' => '主題排序方式',
	'activitylist_orderby_comment' => '設置以哪一字段或方式對主題進行排序',
	'activitylist_orderby_lastpost' => '按最後回覆時間倒序排序',
	'activitylist_orderby_dateline' => '按發佈時間倒序排序',
	'activitylist_orderby_replies' => '按回複數倒序排序',
	'activitylist_orderby_views' => '按瀏覽次數倒序排序',
	'activitylist_orderby_heats' => '按熱度倒序排序',
	'activitylist_orderby_recommends' => '按主題評價倒序排序',
	'activitylist_orderby_hourviews' => '按指定時間內瀏覽次數倒序排序',
	'activitylist_orderby_todayviews' => '按當天瀏覽次數倒序排序',
	'activitylist_orderby_weekviews' => '按本周瀏覽次數倒序排序',
	'activitylist_orderby_monthviews' => '按當月瀏覽次數倒序排序',
	'activitylist_orderby_hours' => '指定時間(小時)',
	'activitylist_orderby_hours_comment' => '指定時間內瀏覽次數倒序排序的時間值',
	'activitylist_orderby_todayhots' => '按當天累計售出數倒序排序',
	'activitylist_orderby_weekhots' => '按本周累計售出數倒序排序',
	'activitylist_orderby_monthhots' => '按當月累計售出數倒序排序',
	'activitylist_price_add' => ' 附加 ',
	'activitylist_place' => '活動地點',
	'activitylist_class' => '活動類型',
	'activitylist_class_all' => '所有類型',
	'activitylist_gender' => '性別要求',
	'activitylist_gender_0' => '不限',
	'activitylist_gender_1' => '男',
	'activitylist_gender_2' => '女',
	'activitylist_orderby_weekstart' => '按一周內活動開始時間排序',
	'activitylist_orderby_monthstart' => '按一月內活動開始時間排序',
	'activitylist_orderby_weekexp' => '按一周內報名截止時間排序',
	'activitylist_orderby_monthexp' => '按一月內報名截止時間排序',
	'activitylist_orderby_weekhot' => '按一周內已參加人數排序',
	'activitylist_orderby_monthhot' => '按一月內已參加人數排序',
	'activitylist_orderby_alltimehot' => '按所有未結束活動已參加人數排序',
	'activitylist_highlight' => '獲得高亮值',
);

?>