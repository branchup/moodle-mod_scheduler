<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'scheduler', language 'ja', version '4.1'.
 *
 * @package     scheduler
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '操作';
$string['actions'] = '操作';
$string['addappointment'] = 'もう1人の学生を追加する';
$string['addcommands'] = 'スロットを追加する';
$string['addondays'] = '面談予定を追加する日';
$string['addsession'] = '繰り返しスロットを追加する';
$string['addsingleslot'] = '単一スロットを追加する';
$string['addslot'] = 'あなたはいつでも面談予定のスロットを追加できます';
$string['addstudenttogroup'] = 'この学生を面談予定グループに追加する';
$string['allappointments'] = 'すべての面談予定';
$string['allononepage'] = 'すべてのスロットを１ページに表示する';
$string['allowgroup'] = '排他的スロット - 変更するにはクリック';
$string['alreadyappointed'] = '面談予定を組めません。そのスロットは既にすべて予約済みです。';
$string['appointagroup_help'] = 'あなた一人が面談をしたいのか、グループ全体で面談をしたいのか選択してください。';
$string['appointfor'] = '面談相手は';
$string['appointforgroup'] = '面談相手は: {$a}';
$string['appointingstudent'] = '予約';
$string['appointingstudentinnew'] = '新しい予約';
$string['appointment'] = '面談予定';
$string['appointmentmode'] = '面談予定モードの設定';
$string['appointmentmode_help'] = '<p>あなたはここで予約のために用意されたいくつかの方法を選択して構いません。</p> <p><ul> <li><strong>"<emph>n</emph> 面談予定（本予約カレンダーで）":</strong> 学生はこの活動で決められた数の面談予定しか予約できません。たとえ教師が"面談済み"と記録しても、 さらに面談を予約することは認められません。学生による予約の権利をリセットする唯一の方法は、古い"面談済み"記録を削除することのみです。</li> <li><strong>"<emph>n</emph> 面談予定（同時に）":</strong> 学生は決められた数の面談が予約可能です。一度、面談が終わり、教師がその学生は"面談済み"とマークすると、学生はさらに面談を予約できます。ただし、<emph>n</emph> 個の"空き"（未完）スロット数に制限される点は変わりません。</li> </ul> </p>';
$string['appointmentno'] = '面談予定 {$a}';
$string['appointmentnote'] = '面談予定ノート（学生に表示）';
$string['appointments'] = '面談予定';
$string['appointmentsgrouped'] = 'スロットでグループ化された面談予定';
$string['appointmentsummary'] = '{$a->teacher}との {$a->startdate}の {$a->starttime} から {$a->endtime} までの面談予定';
$string['appointsolo'] = '私のみ';
$string['appointsomeone'] = '新しい面談予定を追加する';
$string['areaappointmentnote'] = '面談予定ノート内のファイル';
$string['areaslotnote'] = 'スロットノート内のファイル';
$string['areateachernote'] = '教師ノート内のファイル';
$string['attendable'] = '面談候補';
$string['attendablelbl'] = 'スケジューリングの全候補者数';
$string['attended'] = '面談済み';
$string['attendedlbl'] = '面談済みの学生数';
$string['attendedslots'] = '参加済みレッスン';
$string['availableslots'] = 'レッスンを予約する';
$string['availableslotsall'] = 'すべてのスロット';
$string['availableslotsnotowned'] = '自分以外のスロット';
$string['availableslotsowned'] = '自分のスロット';
$string['bookaslot'] = '一つの予約';
$string['bookingdetails'] = '予約の詳細';
$string['bookingformoptions'] = '予約フォームと学生が提供したデータ';
$string['bookinginstructions'] = '予約指示';
$string['bookinginstructions_help'] = 'このテキストは学生が予約を行う前に学生に対して表示されます。たとえば、学生にどのようにオプションのメッセージ領域を埋めたらよいのか、どのファイルをアップロードしたら良いのかなどを指示できます．';
$string['bookslot'] = '予約';
$string['bookwithteacher'] = '教師';
$string['bookwithteacher_help'] = '面談する教師を選択してください。';
$string['break'] = 'スロット間の休憩時間';
$string['breaknotnegative'] = '休憩時間の長さはマイナスにすることができません。';
$string['canbook1appointment'] = 'あなたは本予約カレンダーでさらに１件以上の面談予定を予約可能です。';
$string['canbooknappointments'] = 'あなたは本予約カレンダーでさらに {$a} 件の面談予定を予約できます。';
$string['canbooknofurtherappointments'] = 'あなたは本予約カレンダーでこれ以上の面談予定を予約できません。';
$string['canbooksingleappointment'] = 'あなたは本予約カレンダーで 1件の面談予定を予約できます。';
$string['canbookunlimitedappointments'] = 'あなたは本予約カレンダーで何件でも面談予定を予約できます。';
$string['cancelbooking'] = '予約をキャンセル';
$string['chooseexisting'] = '既存のスロットを選択する';
$string['choosingslotstart'] = '既存の開始時間の選択';
$string['choosingslotstart_help'] = '面談予定の開始時刻を変更（または選択）します。もしこの面談予定がその他のスロットと競合するならば，このスロットが競合するすべての面談予定を置き換えるか尋ねられます。新規のスロットパラメーターは以前の設定ですべて上書きされる点に注意してください。';
$string['comments'] = 'コメント';
$string['complete'] = '予約済';
$string['confirmbooking'] = '予約の確認';
$string['confirmdelete-all'] = 'これによりこの予約カレンダーの <b>すべての </b> スロットは削除されます。削除は元に戻せません。それでも続けますか？';
$string['confirmdelete-mine'] = 'これによりこの予約カレンダーのあなたのスロットはすべて削除されます。削除は取り消すことができません。それでも続けますか？';
$string['confirmdelete-myunused'] = 'これによりこの予約カレンダーであなたが使用していないすべてのスロットが削除されます。削除は取り消せません。それでも続けますか？';
$string['confirmdelete-one'] = 'スロットを削除しますか？';
$string['confirmdelete-selected'] = 'これにより選択されたスロットを削除します。削除は取り消せません。それでも続けますか？';
$string['confirmdelete-unused'] = 'これにより本予約カレンダー内の未使用の全スロットを削除します。削除は取り消せません。それでも続けますか？';
$string['confirmrevoke'] = '現在のスロットの全ての面談予定を取り消しますか？';
$string['conflictingslots'] = '{$a}のスロットはスロットの競合のために作成できません。';
$string['conflictlocal'] = '{$a->datetime} ({$a->duration} 分) 本予約カレンダー内';
$string['conflictremote'] = '{$a->datetime} ({$a->duration} 分) {$a->courseshortname}コース内の{$a->schedulername} 予約カレンダー';
$string['contentformat'] = '書式';
$string['contentformat_help'] = '<p>エクスポート形式には３種類の基本的な選択肢が存在し、どのようにスロットと複数の面談予定を結び付けるかで異なります。 <dl> <dt>スロットあたり１行</dt>: <dd> 出力ファイルは各スロットあたり１行で構成されます。一つのスロットに複数組の面談予定を含む場合、学生の名前の代わりに、たとえば、マーカー"(複数組:multiple)"で表されます。 </dd> <dt>面談予定あたり一行</dt>: <dd> 出力ファイルは各面談予定ごとに１行で構成されます。一つのスロットに複数組の面談予定を含む場合、リスト状（そのデータが繰り返し）に複数度、現れます。 </dd> <dt>スロットでグループ化された面談予定</dt>: <dd>一つのスロット中の全面談予定は一緒にグループ化され、ヘッダー行を前置きとして当のスロットを示します。 これは列数が固定ではないのでCSV出力ファイルフォーマットには適しません。</dd> </dl> あなたはこれらのオプションの効果を"プレビュー"ボタンで確かめることができます。</p>';
$string['copytomyself'] = 'コピーを自分自身に送信する';
$string['course'] = 'コース';
$string['createexport'] = 'エクスポートファイルの生成';
$string['csvfieldseparator'] = 'CSV用フィールドセパレータ';
$string['csvformat'] = 'CSV';
$string['cumulatedduration'] = '面談予定の合計時間数';
$string['datatoinclude'] = '含めるデータ';
$string['datatoinclude_help'] = 'エクスポート時に含めるフィールドの選択。各フィールドは出力ファイル中の一列として現れる。';
$string['date'] = '日付';
$string['datelist'] = '概要';
$string['defaultslotduration'] = 'スロット継続時間の既定値';
$string['defaultslotduration_help'] = 'あなたが設定する面談予定スロットの既定時間（分）';
$string['deleteallslots'] = 'すべてのスロットを削除';
$string['deleteallunusedslots'] = '未使用のスロットを削除';
$string['deletecommands'] = 'スロットの削除';
$string['deletedconflictingslots'] = '{$a}のスロットにおいて、競合するスロットは削除されました:';
$string['deletemyslots'] = '私のすべてのスロットを削除';
$string['deleteonsave'] = 'この面談予定を削除する（フォームを保存する時に）';
$string['deleteselection'] = '選択したスロットを削除';
$string['deletetheseslots'] = 'これらのスロットを削除';
$string['deleteunusedslots'] = '私の未使用スロットを削除';
$string['department'] = '所属は?';
$string['disengage'] = '私の面談予定をキャンセルする';
$string['displayfrom'] = '学生にスロットを表示する:';
$string['distributetoslot'] = 'スロットに分割しますか?';
$string['divide'] = 'スロットに分割しますか?';
$string['duration'] = '継続期間';
$string['durationrange'] = 'スロット継続時間は {$a->min} から {$a->max} の範囲に設定する必要があります。';
$string['editbooking'] = '予約の編集';
$string['email_applied_html'] = '<p>学生 <a href="{$a->attendee_url}">{$a->attendee}</a>が
{$a->date} の {$a->time} に面談予定を予約しました。コース: <br/>

<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

<p>" Webサイト: <a href="{$a->site_url}">{$a->site}</a>上の
予約カレンダー名 "<em><a href="{$a->scheduler_url}">{$a->module}</a></em></p>';
$string['email_applied_plain'] = 'コースの学生「 {$a->attendee} 」により、{$a->date} {$a->time} の面談予定が申請されました: {$a->course_short}: {$a->course} ウェブサイト「 {$a->site} 」の予約カレンダー「 {$a->module} 」を使用しています。';
$string['email_applied_subject'] = '{$a->course_short}: 新しい面談予定';
$string['email_cancelled_html'] = '<p>あなたとの<strong>{$a->date}</strong> の <strong>{$a->time}</strong>からの<br/>
学生 <strong><a href="{$a->attendee_url}">{$a->attendee}</a></strong>の面談予定,コース:</p>

<p><strong>{$a->course_short}:<a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>Webサイト:<strong><a href="{$a->site_url}">{$a->site}</a></strong>上の予約カレンダー名"<em><a href="{$a->scheduler_url}">{$a->module}</a></em>"
</p>

<p><strong><span class="error">がキャンセルまたは移動されました。</span></strong>.</p>';
$string['email_cancelled_plain'] = 'ウェブサイト「 {$a->site} 」の予約カレンダー「 {$a->module} 」において、あなたのコース「 {$a->course_short}: {$a->course} 」の学生「 {$a->attendant} 」との {$a->date} {$a->time} の面談予定がキャンセルまたは移動されました。';
$string['email_cancelled_subject'] = '{$a->course_short}: 学生による面談予定のキャンセルまたは移動';
$string['email_invite_html'] = '<p>以下の予約カレンダーにおける面談予定のためのスロットを選択してください。</p> <p>{$a->scheduler_url}</p>';
$string['email_invite_subject'] = '招待: {$a->module}';
$string['email_invitereminder_html'] = '<p>このメールはあなたがまだ面談予定を完了していないことに対するリマインダーです。可能な限り早く以下のスロットを選択してください。:</p><p>{$a->scheduler_url}</p>';
$string['email_invitereminder_subject'] = 'リマインダー: {$a->module}';
$string['email_reminder_html'] = '<p>あなたには以下の面談予定が近付いています（<strong>{$a->date}</strong> の <strong>{$a->time}</strong> から <strong>{$a->endtime}）</strong><br/> こちら <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong>.</p> <p>場所: <strong>{$a->location}</strong></p>';
$string['email_reminder_plain'] = 'あなたには近日中の面談予定があります。 予約日時: {$a->date} {$a->time} - {$a->endtime} 参加者: {$a->attendant}. 場所: {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: 面談予定リマインダー';
$string['email_teachercancelled_html'] = '<p>あなたの<strong>{$a->date}</strong>の<strong>{$a->time} </strong>からの面会予定,<br/> {$a->staffrole} <strong><a href="{$a->attendant_url}">との{$a->attendant}</a></strong> コース:</p> <p><strong>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></strong></p> <p>予約カレンダー"<em><a href="{$a->scheduler_url}">{$a->module}</a></em>"，ウェブサイト: <strong><a href="{$a->site_url}">{$a->site}</a></strong></p> <p><strong><span class="error">はキャンセルされました</span></strong>。新しいスロットに適用して下さい。</p>';
$string['email_teachercancelled_plain'] = 'ウェブサイト「 {$a->site} 」のスケジューラ「 {$a->module} 」において、あなたのコース「 {$a->course_short}: {$a->course} 」の「 {$a->staffrole} {$a->attendant} 」との {$a->date} {$a->time} の予約がキャンセルされました。 新しいスロットを申請してください。';
$string['email_teachercancelled_subject'] = '{$a->course_short}: 教師によりキャンセルされた面談予定';
$string['emailreminder'] = 'リマインダーをメール送信する';
$string['emailreminderondate'] = 'リマインダーをメール送信する';
$string['end'] = '終了';
$string['enddate'] = '繰り返しスロットの終わり';
$string['event_appointmentlistviewed'] = '予約カレンダーの面談予定リストが閲覧された';
$string['event_bookingadded'] = '予約カレンダーの予約が追加された';
$string['event_bookingformviewed'] = '予約カレンダーの予約が閲覧された';
$string['event_bookingremoved'] = '予約カレンダーの予約が削除された';
$string['event_slotadded'] = '予約カレンダーのスロットが追加された';
$string['event_slotdeleted'] = '予約カレンダーのスロットが削除された';
$string['everyone'] = '全員';
$string['excelformat'] = 'Excel';
$string['exclusive'] = '排他的';
$string['exclusivity'] = '排他性';
$string['exclusivity_help'] = '<p>あなたは準備したスロットに割り当て可能な学生数の上限を設定できます。 </p> <p>上限を1（デフォルト）に設定することは、一人の学生にスロットが排他的に割り当てられることを意味します。</p> <p>上限をたとえば3に設定することは、上限三名の学生までそのスロットを予約できることを意味します。</p> <p>もし無効ならば、どの学生もこのスロットを予約できません；その場合、"満員"とは評価されません。</p>';
$string['exclusivityoverload'] = 'スロットにはこの設定を越える {$a} 名の学生の予約があります。';
$string['exclusivitypositive'] = 'スロットあたりの学生数は1以上です。';
$string['explaingeneralconfig'] = 'これらのオプションはサイトレベルでのみ設定することができ、本Moodleインストレーションの予約カレンダーすべてに適用されます。';
$string['export'] = 'エクスポート';
$string['exporthdr'] = 'スロットと面談予定のエクスポート';
$string['exporttimerange'] = '時間帯';
$string['exporttimerangeall'] = '今後と過去のスロット';
$string['exporttimerangefuture'] = '現在の予約のみ';
$string['exporttimerangepast'] = '過去のスロットのみ';
$string['field-appointmentnote'] = '面談予定ノート（学生向け）';
$string['field-attended'] = '参加';
$string['field-date'] = '日付';
$string['field-endtime'] = '終了時刻';
$string['field-filecount'] = 'アップロードされたファイルの数';
$string['field-grade'] = '評定';
$string['field-groupsmulti'] = 'グループ（複数列）';
$string['field-groupssingle'] = 'グループ';
$string['field-groupssingle-label'] = 'グループ（一列）';
$string['field-location'] = '場所';
$string['field-maxstudents'] = '最大学生数';
$string['field-slotnotes'] = 'スロットノート';
$string['field-starttime'] = '開始時刻';
$string['field-studentemail'] = '学生のe-mailアドレス';
$string['field-studentfirstname'] = '学生のファーストネーム';
$string['field-studentfullname'] = '学生のフルネーム';
$string['field-studentidnumber'] = '学生のidナンバー';
$string['field-studentlastname'] = '学生のラストネーム';
$string['field-studentnote'] = '学生によるメッセージ';
$string['field-studentusername'] = '学生のユーザー名';
$string['field-teachernote'] = '極秘ノート（教師のみ）';
$string['fileformat'] = 'ファイルフォーマット';
$string['fileformat_help'] = '以下のファイルフォーマットが利用可能です: <ul> <li>カンマ区切り値(CSV)テキストファイル. フィールド区切り子（規定値はカンマ）は以下で選択可能です。CSVファイルは大半の表計算ソフトで開けます;</li> <li>マイクロソフトExcelファイル(Excel 2007形式);</li> <li>Open Document spreadsheets (ODS);</li> <li>HTML形式 - ブラウザーの表示機能を用いて出力可能なテーブル出力で表示されるWebページ;</li> <li>PDFドキュメント.ランドスケープとポートレート方向から選べます。</li> </ul>';
$string['finalgrade'] = '最終評点';
$string['firstslotavailable'] = '最初のスロットは{$a} に始まります。';
$string['forbidgroup'] = 'グループスロット - 変更するにはクリック';
$string['forcewhenoverlap'] = '重複時に強制する';
$string['forcewhenoverlap_help'] = '<h3>スロット重複時の強制スロット生成</h3> <p>この設定は、もし新しいスロットが重複する際に既に存在するスロットに対して新しいスロットをどう割り当てるかを決定します。</p> <p>もし有効ならば、重複する既存のスロットは削除され、新しいスロットが生成されます。</p> <p>もし無効ならば、重複する既存のスロットは維持され、新しいスロットは生成<em>されません</em>。</p>';
$string['forcewhenoverlap_link'] = 'mod/scheduler/conflict';
$string['forcourses'] = 'コースの学生を選択する';
$string['friday'] = '金曜日';
$string['generalconfig'] = '一般設定';
$string['grade'] = '評点';
$string['gradeingradebook'] = '評定書の評点';
$string['gradingstrategy'] = '評定方法';
$string['gradingstrategy_help'] = '単一の予約カレンダーで学生が複数の面談予定を申請できる場合、評点の総計方法を選択してください。
　学生の評点が<ul><li>評点平均または</li><li>最高評点</li></ul>であっても、評定表に表示可能です。予約カレンダーにおいて、学生が複数の面談予定を申請できる場合、評点の総計方法を選択してください。学生の評点が「評点平均」または「最高評点」であっても、評定表に表示することができます。';
$string['group'] = 'グループ';
$string['groupbookings'] = 'グループでの予約';
$string['groupbookings_help'] = '学生に対して、彼らのグループの全メンバーに対する予約を許可する（これは学生が閲覧可能なスロットを制御する"グループモード”設定とは別である点に注意）。';
$string['groupbreakdown'] = 'グループサイズ';
$string['groupmodeyourgroups'] = 'グループモード: {$a->groupmode}. グループ{$a->grouplist}中の学生のみがあなたとの面談予定を予約できる。';
$string['groupmodeyourgroupsempty'] = 'グループモード: {$a->groupmode}. あなたはどのグループのメンバーでもないので、学生はあなたとの面談予定を予約できません。';
$string['groupscheduling'] = 'グループスケジューリングを有効にする';
$string['groupscheduling_desc'] = 'グループ全体を一度にスケジュールできるようにします (グローバルオプションとは別に、それぞれの予約カレンダーインスタンスで「グループで予約」の設定を有効にする必要があります)';
$string['groupsession'] = 'グループセッション';
$string['groupsize'] = 'グループサイズ';
$string['guardtime'] = 'ガード時間';
$string['guardtime_help'] = 'ガード時間は、学生の面談予定が直前に変更されるのを防ぎます。<p>ガード時間が有効かつ値、たとえば２時間、が設定されている場合、いまから２時間以内に始まるスロットを学生は予約できず、もし２時間以内に面談が始まるならば彼らは面談予定を取り止められません。</p>';
$string['guestscantdoanything'] = 'ゲストはここで何もできません。';
$string['howtoaddstudents'] = '学生をグローバルスコープの予約カレンダーに追加する場合、モジュールのロール設定を選択してください。<br　/>あなたの学生の世話役を定義する場合、モジュールロール定義を使用することもできます。';
$string['htmlformat'] = 'HTML';
$string['ignoreconflicts'] = 'スケジューリング競合を無視する';
$string['ignoreconflicts_help'] = 'このチェックボックスをチェックした場合、他のスロットが同一時間に存在したとしても、スロットはリクエストされた日時に移動されます。これは教師または学生に対して、面談予定の重複を招く可能性があるため、注意して使用してください。';
$string['ignoreconflicts_link'] = 'mod/scheduler/conflict';
$string['includeemptyslots'] = '空きスロットを含める';
$string['includeslotsfor'] = 'スロットを含める';
$string['incourse'] = '- コース';
$string['introduction'] = '説明';
$string['isnonexclusive'] = '非排他的';
$string['landscape'] = 'ランドスケープ';
$string['lengthbreakdown'] = 'スロット継続時間毎';
$string['limited'] = '制限 (残り {$a})';
$string['location'] = '場所';
$string['location_help'] = 'ミーティングのために用意した場所を指定する';
$string['markasseennow'] = '「いま面談済み」にマークする';
$string['markseen'] = '学生との面談後、この上のユーザー写真近くのチェックボックスをクリックして「面談済み」としてください（チェックするだけで記録されます）。';
$string['maxgrade'] = '最高評点';
$string['maxstudentlistsize'] = '学生リストの最大長';
$string['maxstudentlistsize_desc'] = 'スケジューラの教師ビューに表示される面談予定を予約する必要のある学生リストの最大長です。この数より学生数が多い場合、リストは表示されません。';
$string['maxstudentsperslot'] = 'スロットあたりの最大学生数';
$string['maxstudentsperslot_desc'] = 'グループスロット / 非排他的スロットは最大でこの人数の学生を登録可能です。加えて、スロットに対して常に設定「無制限」を選択できることにも留意してください。';
$string['meangrade'] = '評点平均';
$string['meetingwith'] = '面会スケジュール:';
$string['meetingwithplural'] = '面会スケジュール:';
$string['message'] = 'メッセージ';
$string['messagebody'] = 'メッセージ本体';
$string['messageprovider:bookingnotification'] = '予約時またはキャンセル時の通知';
$string['messageprovider:invitation'] = '予約への招待';
$string['messageprovider:reminder'] = '近日中の面談予定のリマインダー';
$string['messagesent'] = '受信者 {$a} へのメッセージ送信';
$string['messagesubject'] = '題名';
$string['minutes'] = '分';
$string['minutesperslot'] = 'スロットあたりの時間（分）';
$string['missingstudents'] = '{$a} 名の学生が面談予定を申請する必要があります。';
$string['missingstudentsmany'] = '{$a} 名の学生が面談予定を申請する必要があります。人数が多すぎる場合、リストは表示されません。';
$string['mixindivgroup'] = '個人およびグループ予約のミックス';
$string['mixindivgroup_desc'] = 'グループスケジューリングが有効なとき、さらに個人予約も許可する。';
$string['mode'] = 'モード';
$string['modeappointments'] = '面談予定';
$string['modeintro'] = '学生が登録可能な面談予定数は';
$string['modeoneatatime'] = '同時に';
$string['modeoneonly'] = '本予約カレンダーで';
$string['modulename'] = '予約カレンダー';
$string['modulename_help'] = '予約カレンダー活動はあなたと学生との面談予定のスケジューリングを手助けします。

教師は面談のためのスロットを明示し、学生はその後、Moodle上でそれらの中から一つを選びます。
教師は本予約カレンダー上に面談の結果（オプションで評価も）を記録できます。

グループスケジューリングもサポートしています:  すなわち、各スロットは複数名の学生を収納でき、全グループの面談予定を同一スロットに同時にスケジュールすることもオプションで可能です。';
$string['modulename_link'] = 'mod/scheduler/view';
$string['modulenameplural'] = '予約カレンダー';
$string['monday'] = '月曜日';
$string['multiple'] = '(multiple)';
$string['myappointments'] = '私の面談予定';
$string['myself'] = '自分自身';
$string['name'] = '予約カレンダー名';
$string['needteachers'] = 'このコースには教師が存在しないため、スロットを追加できません。';
$string['negativerange'] = '範囲がマイナスです。これは受け入れられません。';
$string['never'] = 'なし';
$string['nfiles'] = '{$a} ファイル';
$string['noappointments'] = '面談予定なし';
$string['noexistingstudents'] = '予約可能な学生はいません';
$string['nogroups'] = 'スケジュール可能なグループはありません。';
$string['noresults'] = '結果なし';
$string['noschedulers'] = '予約カレンダーがありません。';
$string['noslots'] = '利用できる面談予定スロットがありません。';
$string['noslotsavailable'] = '現在、予約可能なスロットはありません。';
$string['noslotsopennow'] = '現在、予約できる空きスロットはありません。';
$string['nostudents'] = '予約している学生はいません。';
$string['nostudenttobook'] = '予約できる学生はいません。';
$string['note'] = '評点';
$string['noteacherforslot'] = 'そのスロットには教師が存在しません';
$string['noteachershere'] = '利用可能な教師はいません。';
$string['notenoughplaces'] = 'すみません、このスロットには面談予定に十分な余裕がありません。';
$string['notesrequired'] = 'スロットを予約する前に、あたなはこのフィールドにテキストを入力しなくてはなりません。';
$string['notifications'] = '通知';
$string['notifications_help'] = 'このオプションを有効にした場合、教師および学生に対して、面談予定の申し込みまたはキャンセルが通知されます。';
$string['notseen'] = 'まだ面談していない';
$string['now'] = '今から';
$string['occurrences'] = '発生';
$string['odsformat'] = 'ODS';
$string['on'] = '-';
$string['onedaybefore'] = 'スロットの１日前';
$string['onelineperappointment'] = '面談予定あたり１行';
$string['onelineperslot'] = 'スロットあたり１行';
$string['oneslotadded'] = '１つのスロットが追加されました';
$string['oneslotdeleted'] = '１つのスロットが削除されました';
$string['oneweekbefore'] = 'スロットの１週間前';
$string['onthemorningofappointment'] = '面談予定日の朝';
$string['options'] = 'オプション';
$string['otherstudents'] = 'その他の参加者';
$string['outlineappointments'] = '{$a->attended} 参加予定の面談，{$a->upcoming} が近い';
$string['outlinegrade'] = '評定: {$a}';
$string['overall'] = '全体';
$string['overlappings'] = 'いくつかの他のスロットが重複しています';
$string['pageperteacher'] = '{$a}毎に１ページ';
$string['pagination'] = 'ページネーション';
$string['pagination_help'] = 'エクスポートに各教師毎のページ区切りを含めるか選択してください。ExcelとODSファイル形式では、これらのページはワークブックにおけるタブ（ワークシート）に対応します。';
$string['pdfformat'] = 'PDF';
$string['pdforientation'] = 'PDFページ回転';
$string['pluginadministration'] = '予約カレンダー管理';
$string['pluginname'] = '予約カレンダー';
$string['portrait'] = 'ポートレート';
$string['preview'] = 'プレビュー';
$string['previewlimited'] = '（プレビューは {$a}行に制限される）';
$string['privacy:metadata:filepurpose'] = 'スロットまたは面談予定のノートで使用されるファイル';
$string['privacy:metadata:scheduler_appointment'] = '予約カレンダー毎に一つの学生面談予定を表示する';
$string['privacy:metadata:scheduler_appointment:appointmentnote'] = '教師によるノート（学生に表示）';
$string['privacy:metadata:scheduler_appointment:appointmentnoteformat'] = '教師ノートのフォーマット';
$string['privacy:metadata:scheduler_appointment:attended'] = '面談予定が予約されているかどうか';
$string['privacy:metadata:scheduler_appointment:grade'] = '面談予定の評価';
$string['privacy:metadata:scheduler_appointment:studentid'] = '面談予定を予約した学生';
$string['privacy:metadata:scheduler_appointment:studentnote'] = '学生によるノート';
$string['privacy:metadata:scheduler_appointment:studentnoteformat'] = '学生ノートのフォーマット';
$string['privacy:metadata:scheduler_appointment:teachernote'] = '教師によるノート（プライベート）';
$string['privacy:metadata:scheduler_appointment:teachernoteformat'] = 'プライベート教師ノートのフォーマット';
$string['privacy:metadata:scheduler_slots'] = '予約カレンダー毎に一つのスロットを表示する';
$string['privacy:metadata:scheduler_slots:appointmentlocation'] = '面談場所';
$string['privacy:metadata:scheduler_slots:duration'] = 'スロットの分単位の継続時間';
$string['privacy:metadata:scheduler_slots:exclusivity'] = 'スロットにおける最大の学生数';
$string['privacy:metadata:scheduler_slots:notes'] = 'スロットに関するノート';
$string['privacy:metadata:scheduler_slots:notesformat'] = 'ノートのフォーマット';
$string['privacy:metadata:scheduler_slots:starttime'] = 'スロットの開始時刻';
$string['privacy:metadata:scheduler_slots:teacherid'] = 'スロットに割り当てられた教師';
$string['purgeunusedslots'] = '過去の未使用スロットをパージします';
$string['recipients'] = '参加者';
$string['registeredlbl'] = '面談予定済みの学生数';
$string['reminder'] = 'リマインダー';
$string['requireupload'] = '要ファイルアップロード';
$string['resetappointments'] = '面談予定と評点を削除する';
$string['resetslots'] = '予約カレンダーのスロットを削除';
$string['return'] = 'コースに戻る';
$string['revealteachernotes'] = 'プライバシーエクスポートにおいて教師ノートを開示する';
$string['revealteachernotes_desc'] = 'このオプションを選択すると，内々の教師ノート（通常，生徒に対して非表示）はデータエクスポート要求，たとえばprivay API経由，により生徒たちに開示されるでしょう．GDPR（一般データ保護規則）にしたがって学生へのデータエクスポートに含めるか否か，このフィールドの個別の使用方法に基づいて決定して下さい．';
$string['revoke'] = '面談予定を取り消す';
$string['saturday'] = '土曜日';
$string['save'] = '保存';
$string['savechoice'] = '私の選択を保存する';
$string['saveseen'] = '「面談済み」を保存する';
$string['schedule'] = 'スケジュール';
$string['scheduleappointment'] = '{$a} の面談予定スケジュール';
$string['schedulecancelled'] = '{$a} : あなたの面談予定はキャンセルまたは移動されました。';
$string['schedulegroups'] = 'グループごとのスケジュール';
$string['scheduleinnew'] = '新しいスロット内のスケジュール';
$string['scheduleinslot'] = 'スロット内のスケジュール';
$string['scheduler'] = '予約カレンダー';
$string['scheduler:addinstance'] = '新しい予約カレンダーを追加する';
$string['scheduler:appoint'] = 'スロットを予約する';
$string['scheduler:attend'] = '学生を世話する';
$string['scheduler:canscheduletootherteachers'] = '他のスタッフメンバーの面談予定を決定する';
$string['scheduler:canseeotherteachersbooking'] = '他の教師の予約を閲覧する';
$string['scheduler:disengage'] = 'このケイパビリティは廃止されたため、何も実行されません。';
$string['scheduler:editallattended'] = 'すべての面談予定において学生を出席／欠席としてマーク';
$string['scheduler:editallgrades'] = 'すべての面談予定における評価の編集';
$string['scheduler:editallnotes'] = 'すべての面談予定における面談予定ノートの編集';
$string['scheduler:manage'] = 'あなたのスロットと面談予定を管理する';
$string['scheduler:manageallappointments'] = 'すべての予約カレンダーデータを管理する';
$string['scheduler:seeotherstudentsbooking'] = 'このスロット内に予約した他の学生を閲覧する';
$string['scheduler:seeotherstudentsresults'] = '他のスロット内の学生の結果を閲覧する';
$string['scheduler:seeoverviewoutsideactivity'] = '現在の予約カレンダー活動外のスロットを閲覧するためにオーバービュースクリーンを使用する';
$string['scheduler:viewfullslots'] = 'スロットがすべて予約されていたとしてもスロットを閲覧する（学生スクリーンで）';
$string['scheduler:viewslots'] = '予約用に空いているスロットを閲覧する（学生スクリーンで）';
$string['schedulestudents'] = '学生ごとのスケジュール';
$string['scopemenu'] = '{$a} 内のスロットを表示';
$string['scopemenuself'] = '{$a} 内の私のスロットを表示';
$string['search:activity'] = '予約カレンダー - 活動情報';
$string['seen'] = '面談済み';
$string['selectedtoomany'] = 'あなたはスロットを選び過ぎです。あなたは {$a}までしか選べません。';
$string['sendinvitation'] = '招待を送信';
$string['sendmessage'] = 'メッセージを送信';
$string['sendreminder'] = 'リマインダーを送信';
$string['sendreminders'] = '近日中の面談予定についてのe-mailリマインダーを送信';
$string['sepcolon'] = 'コロン';
$string['sepcomma'] = 'カンマ';
$string['sepsemicolon'] = 'セミコロン';
$string['septab'] = 'タブ';
$string['showemailplain'] = 'メールアドレスをプレインテキストに表示する';
$string['showemailplain_desc'] = '予約カレンダーの教師ビューにおいて、mailto: リンクに加えて、面談予定が必要な学生のメールアドレスをプレインテキストで表示します。';
$string['showparticipants'] = '参加者を見せる';
$string['slot'] = 'スロット';
$string['slot_is_just_in_use'] = 'すみません、その面談予定は別の学生によって選択されてしまいました。もう一度、お試しください。';
$string['slotdatetime'] = '{$a->shortdatetime} から {$a->duration} 分間';
$string['slotdatetimelabel'] = '日時';
$string['slotdatetimelong'] = '{$a->date}, {$a->starttime} &ndash; {$a->endtime}';
$string['slotdescription'] = '{$a->startdate} の {$a->starttime} から {$a->endtime} までの{$a->facilitator}との {$a->location} における{$a->status}。';
$string['slots'] = 'スロット';
$string['slotsadded'] = '{$a} 件のスロットが追加されました';
$string['slotsdeleted'] = '{$a} スロットが削除されました';
$string['slottype'] = 'スロットタイプ';
$string['slotupdated'] = '１つのスロットが更新されました';
$string['slotwarning'] = '<strong>警告:</strong> このスロットを選択した時間に移動すると以下に列記したスロットと競合が発生します。もしそれでもスロットを移動したいのであれば、"スケジューリングの競合を無視する"をチェック。';
$string['staffbreakdown'] = '{$a}';
$string['staffrolename'] = '教師のロール名';
$string['staffrolename_help'] = '学生を世話するロールのラベルです。これは必ずしも「教師」である必要はありません。';
$string['start'] = '開始';
$string['startpast'] = 'あなたは過去の空き予約スロットを始めることはできません。';
$string['statistics'] = '統計';
$string['student'] = '学生';
$string['studentbreakdown'] = '学生';
$string['studentcomments'] = '学生のメッセージ';
$string['studentdetails'] = '学生詳細';
$string['studentfiles'] = 'アップロード済みファイル';
$string['studentmultiselect'] = '各学生はこのスロットを１回しか選択できません';
$string['studentnote'] = '学生によるメッセージ';
$string['studentprovided'] = '学生による提出: {$a}';
$string['students'] = '学生';
$string['sunday'] = '日曜日';
$string['tab-otherappointments'] = 'この学生のすべての面談予定';
$string['tab-otherstudents'] = 'このスロット内の学生';
$string['tab-thisappointment'] = '本面談予定';
$string['teacher'] = '教師';
$string['teachernote'] = '極秘ノート（教師のみ閲覧可）';
$string['teachersmenu'] = '{$a}のスロットを表示';
$string['thiscourse'] = '本コース';
$string['thisscheduler'] = '本予約カレンダー';
$string['thissite'] = '本サイト全体';
$string['thursday'] = '木曜日';
$string['timefrom'] = 'From:';
$string['timerange'] = '時間帯';
$string['timeto'] = 'To:';
$string['totalgrade'] = '全評点';
$string['tuesday'] = '火曜日';
$string['unattended'] = '面談未了';
$string['unlimited'] = '無制限';
$string['unregisteredlbl'] = '面談予定未了の学生数';
$string['upcomingslots'] = '現在の予約';
$string['updategrades'] = '評点を更新する';
$string['updatesingleslot'] = '&nbsp;';
$string['uploadmaxfiles'] = 'アップロード可能な最大ファイル数';
$string['uploadmaxfiles_help'] = '学生がこの予約フォームでアップロード可能な最大のファイル数。"要ファイルアップロード"チェックボックスが選択されない限りファイルアップロードはオプションです。0を設定すると、学生に対してファイルアップロード領域は表示されません。';
$string['uploadmaxfilesglobal'] = 'アップロード可能な最大ファイル数';
$string['uploadmaxfilesglobal_desc'] = '学生が予約フォームにてアップロード可能な最大のファイル数。これは各予約カレンダーレベルにおいて下げることができます。';
$string['uploadmaxsize'] = '最大ファイルサイズ';
$string['uploadmaxsize_help'] = '学生がアップロードするファイルの最大サイズ。この制限はファイルごとに適用されます。';
$string['uploadrequired'] = 'スロットを予約する前にファイルをここにアップロードする必要があります。';
$string['uploadstudentfiles'] = 'アップロードファイル';
$string['usebookingform'] = '予約フォームの利用';
$string['usebookingform_help'] = '有効にすると、学生は彼らがスロットを予約する前に、独立した予約画面を閲覧することになります。予約画面は彼らにデータ入力、ファイルアップロード、またはcaptchaの解決を要求します。以下のオプションを読むこと。';
$string['usebookingform_link'] = 'mod/scheduler/bookingform';
$string['usecaptcha'] = '新しい予約にCAPTCHAを使用';
$string['usecaptcha_help'] = '有効にすると、学生は新しい予約を入れる前にCAPTCHAセキュリティクエスチョンを解く必要があります。学生が自動プログラムにより空きスロットを取るために自動プログラムを用いると疑うならば、この設定を使用しましょう。<p>学生が既存の予約を編集する際は、captchaは表示されません。</p>';
$string['usenotes'] = '面談予定においてノートを使用する';
$string['usenotesboth'] = '両タイプのノート';
$string['usenotesnone'] = 'なし';
$string['usenotesstudent'] = '面談予定ノート: 教師と学生が閲覧可';
$string['usenotesteacher'] = '極秘ノート: 教師のみ閲覧可';
$string['usestudentnotes'] = '学生のメッセージ入力を認める';
$string['usestudentnotes_help'] = '有効にすると、予約画面に、学生がメッセージを入力可能なテキストボックスを含めます。学生がどのような情報を提供すれば良いのかを教えるために上記の”予約指示"を用いてください。';
$string['viewbooking'] = '詳細を閲覧';
$string['wednesday'] = '水曜日';
$string['welcomebackstudent'] = '以下の「予約」ボタンをクリックすることにより、あなたは追加のスロットを予約可能です。';
$string['welcomenewstudent'] = '下記テーブルには面談予定可能なすべてのスロットが表示されます。「予約」ボタンをクリックして選びましょう。あとで変更が必要になった場合、このページに再度アクセス可能です。';
$string['welcomenewteacher'] = '面談予定スロットを追加するには、以下のボタンをクリックしてください。';
$string['what'] = '何を?';
$string['whathappened'] = '何が起きた?';
$string['whatresulted'] = '結果は?';
$string['when'] = 'いつ?';
$string['where'] = 'どこで?';
$string['who'] = '誰と?';
$string['whosthere'] = '誰がそこにいましたか?';
$string['xdaysbefore'] = 'スロットまであと {$a} 日';
$string['xweeksbefore'] = 'スロットまであと {$a} 週';
$string['yesallgroups'] = 'はい。すべてのグループに対して';
$string['yesingrouping'] = 'はい。{$a} グループ内で';
$string['yesoptional'] = 'Yes: 学生の入力は必須ではありません';
$string['yesrequired'] = 'Yes: 学生によるメッセージ入力は必須です';
$string['yourappointmentnote'] = 'あなたの見解によるメモ';
$string['yourslotnotes'] = '面会時のコメント';
$string['yourstudentnote'] = 'あなたのメッセージ';
$string['yourtotalgrade'] = 'あたなのこの活動における総評価は <strong>{$a}</strong>';

/** Update 2023/10/29 */
$string['scheduler:watchslots'] = 'スロットをウォッチ';
$string['event_slotunwatched'] = 'スケジューラースロットのウォッチ解除';
$string['event_slotwatched'] = 'スケジューラースロットをウォッチ';
$string['messageprovider:watchedslotopenedup'] = 'ウォッチされたスロットで予約が可能になった際の通知';
$string['privacy:metadata:scheduler_watcher'] = "スロットをウォッチしている学生を表す";
$string['privacy:metadata:scheduler_watcher:userid'] = "スロットをウォッチしている学生";
$string['privacy:metadata:scheduler_watcher:slotid'] = "ウォッチ対象のスロット";
$string['allowwatching'] = 'ウォッチを許可';
$string['allowwatching_help'] = 'ウォッチが許可されている場合、学生は予約可能なときに通知を受けるために満席のスロットをウォッチできます。ただし、活動がグループでの予約を強制する場合はウォッチができないことに注意してください。';
$string['acceptlatebookings'] = '遅い予約を受け入れる';
$string['acceptlatebookings_help'] = '有効にすると、学生は "終了" 時刻までスロットを予約できます。';
$string['alreadybookedbyyou'] = 'このスロットはすでにあなたによって予約されています。';
$string['applyfilters'] = 'フィルタを適用';
$string['appointmentnotes'] = '予約メモ';
$string['bookingnotsupported'] = '予約はサポートされていません。オンラインバージョンを使用してください。';
$string['cancelfor'] = '予約のキャンセル';
$string['cannotcancelslot'] = 'この時点で予約をキャンセルすることはできません。';
$string['cannotscheduleslotforothers'] = '他のスタッフの予約をスケジュールすることはできません。';
$string['cannotwatchmoreslots'] = '現在、これ以上のスロットをウォッチできません。';
$string['cannotwatchslot'] = '現在、このスロットをウォッチすることはできません。';
$string['choosegrouptobook'] = '予約を割り当てるグループを選択してください。';
$string['clearfilters'] = 'フィルタのクリア';
$string['completionattended'] = '出席を要求';
$string['completionattended_desc'] = '学生は出席としてマークする必要があります';
$string['completionattended_help'] = '有効にすると、この要件を満たすために学生は予約に出席したとしてマークされなければなりません。';
$string['confirmsinglerevoke'] = 'この予約を取り消しますか？';
$string['couldnotresolveteacher'] = '教師を既存のユーザーアカウントに解決できませんでした。';
$string['creditsrequiredtobookyouhavenone'] = '予約するにはクレジットが必要です。利用可能なクレジットはありません。';
$string['creditsrequiredtobookyouhavexuntilx'] = '予約するにはクレジットが必要です。{$a->count}のクレジットがあり、{$a->latestdate}までのスロットを予約するために使用できます。';
$string['csvfile'] = 'CSVファイル';
$string['csvline'] = '行';
$string['csvmissingcolumns'] = '次の列が欠落しています：{$a}。';
$string['emailreminder_help'] = 'これにより、学生に次回の予約のリマインダーが送信されます。';
$string['emailreminderondate_help'] = 'これにより、学生に次回の予約のリマインダーが送信されます。';
$string['errors'] = 'エラー';
$string['filterdatetimeafter'] = 'その後';
$string['filterdatetimeat'] = 'その時間';
$string['filterdatetimebefore'] = 'その前';
$string['filterdatetimeon'] = 'その日';
$string['full'] = '満員';
$string['invalidorpastdate'] = '日付は解析できなかったか、過去のものです。';
$string['invalidteacher'] = '無効な教師が指定されました。それは教師ではありません。';
$string['import'] = 'インポート';
$string['importslots'] = 'スロットのインポート';
$string['importslots_help'] = '
スロットは、次の __必須__ の列を含むCSVファイルからインポートできます：

- date：スロットが始まる日付
- time：スロットが始まる日の時間
- duration：スロットの持続時間（分単位）

次の列もサポートされています：

- maxstudents：スロット内の最大学生数。独占的な場合は1、制限なしの場合は0を使用します。
- location：予約の場所。
- teacher：教師のMoodleアカウントのユーザー名。空の値は現在のユーザーをデフォルトにします。
- displayfrom：スロットが表示される日付。
- comment：スロットに添付するメモ。Markdown形式がサポートされています。

日付は次のいずれかの形式で表すことができます：MM/DD/YYYY、YYYY-MM-DD、またはDD-MM-YYYY。時間は12時間または24時間形式で表すことができます：2:00pmまたは14:00。
';
$string['importslotsintro'] = '必要なフォーマットに一致するCSVファイルを提供してください。例ファイルは[こちら]からダウンロードできます（{$a->exampleurl}）。';
$string['importallvalidslots'] = '有効なすべてのスロットをインポート';
$string['maxslotswatched'] = '監視するスロットの最大数';
$string['maxslotswatched_desc'] = '学生がスケジューラアクティビティごとに監視できるスロットの最大数。0に設定すると、学生は無制限のスロットを監視できます。';
$string['maxwatchers'] = '監視する学生の最大数';
$string['maxwatchers_desc'] = 'スロットを監視する許可される学生の最大数。0に設定すると、無制限の学生が各スロットを監視できます。';
$string['messageminchars'] = 'メッセージの最小文字数';
$string['messageminchars_desc'] = '予約中に学生がメッセージを入力する必要がある場合、そのメッセージに含まれる最小文字数は何文字であるべきか。これを増やすと、学生が要件を無視して一文字だけ提供することがある場合に役立つことがあります。必要な文字数は学生には表示されません。';
$string['mostrecentslots'] = '最新のスロット';
$string['negativetimerange'] = '終了時間は開始時間よりも後である必要があります。';
$string['noappointmentsyet'] = 'まだこのスケジューラで予約がありません。';
$string['noslotsavailableallbooked'] = 'すべてのスロットは現在完全に予約済みです。このスケジューラでは今後利用可能なスロットはありません。後で戻ってきるか、チームにお問い合わせください。';
$string['noslotsavailableallbookedseedate'] = 'すべてのスロットは現在完全に予約済みです。スロットは{$a}にリリースされるかもしれません。';
$string['nslotsimported'] = '{$a}個のスロットがインポートされました';
$string['nslotswitherror'] = '{$a}個のスロットにエラーがあります';
$string['purgeobsoletewatchers'] = '古い監視者を削除';
$string['recentandupcomingslots'] = '最近のおよび現在の予約';
$string['requirecreditstobook'] = '予約にクレジットが必要';
$string['requirecreditstobook_help'] = '予約するために学生はクレジットを消費する必要があります。このオプションはグループで予約する場合と互換性がありません。';
$string['results'] = '結果';
$string['slottabcurrent'] = '現在と未来';
$string['slottabpast'] = '過去と面談済み';
$string['filterstarttime'] = '日時';
$string['filterstarttime_help'] = '日時によるスロットのフィルタリング。確認するために 「フィルタを適用」をクリックしてください。';
$string['studentnotenoughcredits'] = '学生は予約のために十分なクレジットを持っていません。';
$string['unwatchslot'] = 'スロットの監視を解除';
$string['viewmoreoptions'] = 'さらに多くのオプションを表示';
$string['visitwebtoaddnotes'] = 'ノートを追加するには<a href="{$a}" core-link>ウェブサイトを訪問</a>してください。';
$string['visitwebtobook'] = 'このスロットを予約するにはウェブサイトを訪問してください';
$string['visitwebtoeditcancel'] = '予約を変更する場合は、ウェブサイトを訪問してください。<a href="{$a}" core-link>';
$string['visitwebtouploadfiles'] = 'ファイルを予約に添付するには<a href="{$a}" core-link>ウェブサイトを訪問</a>してください。';
$string['watchslotsintro'] = '完全に予約されたスロットが利用可能になったときに通知を受けるには、該当するスロットの「スロットを監視」ボタンをクリックしてください。';
$string['watchslotsintromax'] = '完全に予約されたスロットが利用可能になったときに通知を受けるには、該当するスロットの「スロットを監視」ボタンをクリックしてください。1回に監視できるスロットの数は{$a}個を超えることはできないことに注意してください。';
$string['watchslot'] = 'スロットを監視';
$string['email_slotopenedup_html'] = '<p>日付{$a->date}の{$a->time}に、{$a->staffrole} {$a->attendant}との予約が利用可能になりました。</p>';
$string['email_slotopenedup_plain'] = '日付{$a->date}の{$a->time}に、{$a->staffrole} {$a->attendant}との予約が利用可能になりました。';
$string['email_slotopenedup_subject'] = '{$a->course_short}: スロットが利用可能になりました';
$string['creditreasonslotbooked'] = '予約済み: {$a->datetime}（{$a->minutes}分）。';
$string['creditreasonslotcancelled'] = '予約キャンセル: {$a->datetime}（{$a->minutes}分）。';

