<?php
// אל תציג שגיאות/אזהרות בפלט ללקוח
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

//yedidya.php.beta.1.0.2🎆🐍🔥🔥🔥💥

//טקסט עזרה
define ('HELP','פרמטרים
did
pass
path
text
GoToOk
GoToError
GoToBlook
api0
api1
api2
api3
api4
api5
api6
api7
api8
api9



path1
path2
mode
textkey
mode2
api_did
api_pass
check
__________
נשלחים אוטומטית
ApiPhone
ApiDID
ApiEnterIDName
(האחרון רק במיגה והגדרתם 
enter_id=yes
login_add_val_name=yes
__________

did
מספר מערכת שאליה יכניס את הנתונים
api_add_0=did=077123456
_______________

pass
סיסמת ניהול
api_add_0=pass=123456
____________

path
שלוחה
api_add_0=path=1/3
___________

text
הטקסט שאותו יכניס לשלוחה
api_add_0=text=type=menu
____________

GoToOk
לאן יעבור בסיום פעולה מוצלחת
(שימו לב האו (O) האחרונה גדולה), אם לא מוגדר חוזר שלב אחד אחורה.
שימו לב: יש לכתוב את הנתיב עם סלש בהתחלה.
שימו לב כאן ובשתי ההגדרות הבאות ניתן להכניס רק תווים מסויימים
[א-ת a-z A-Z 0-9 / .] אלו התווים שאפשר להכניס, במידה ויתקבל קלט לא תואם יעבור לברירת מחדל.
___________

GoToError
לאן יעבור בשגיאה כללית, אם לא מוגדר חוזר שלב אחד אחורה.
שימו לב: יש לכתוב את הנתיב עם סלש בהתחלה.
הערה לא את כל התווים אפשר להכניס עיין בהגדרה מעל.
____________

GoToBlook
לאן יעבור כשהפרטים שהוקשו שגויים, ברירת מחדל עובר לתיקיה Blook שבתוך תיקיית GoTo (GoTo/Blook)
שימו לב יש לכתוב עם סלש בהתחלה.
הערה לא את כל התווים אפשר להכניס עיין שתי הגדרות אחורה.
_____________


מצב רגיל 
כשנמצאים במצב רגיל יש כמה קיצורים שאפשר להכניס בתוך הטקסט, הראשון והכי חשוב הוא שסימן שאלה מינוס זה מעבר שורהת לדוגמא: 
api_add 0=text=type=menu?-title=dugma
יגדיר במערכת
type=menu
title=dugma
____________
יש עוד כמה קיצורים שהם רשות ונועדו להקל על השימוש במערכת
________
?phone
יכניס את המספר של המאזין, לדוגמא
api_add 0=text=type=menu?-title=?phone
יגדיר במערכת
type=menu
title=0527612345
הערה: הקיצור הזה עובד גם בנתיב השלוחה (path)
__________ 

?did
יכניס את מספר המערכת שהמאזין הקיש
________

?pass
יכניס את הסיסמא שהמאזין הקיש
__________

?path
יכניס את הנתיב שהמאזין הקיש
__________

?api1
זה יכניס את מה שתשלחו בערך נפרד, כדי שתוכלו לבקש מהמאזין להקיש משהו ספציפי והשאר יהיה אוטומטי, לדוגמא
api_add_0=text=type=menu?-title=?api1
api_add_0=api1=123
יגדיר במערכת
type=menu
title=123
הערה: זה נתמך גם בנתיב (path)
___________

api2
כנ"ל
נתמך גם בנתיב
__________
api3 api4 api5 api6 api7 api8 api9
כנ"ל 
הערה: לא נתמך בנתיב
____________
path1
כמו api1 אבל נתמך רק בנתיב
_____________
path2
כנ"ל
_____________
?name
יכניס את השם של המאזין.
שימו לב: יעבוד רק במידה ועשיתם אנטר אי די ועשיתם
 login_add_val_name=yes

__________    
כדי לעבור למצב מקלדת צריך להוסיף את השורה
api_add_0=mode=1
ואז לכתוב את הרצף ?key (קודם סימן שאלה ואז את המילה) ואיפה שכתבתם את זה הוא יכניס את הטקסט שהמאזין הקיש, לדוגמא:
api_add0=mode=1
api_add1=text=type=menu?-title=?key
המאזין הקיש 123, יגדיר בשלוחה:
type=menu
title=123
אם ברצונכם שהמאזין יקליד את כל הטקסט פשוט תכניסו
api_add0=mode=1
api_add1=text=?key

אחרי שנמצאים במצב מקלדת הוא כבר יקריא את ההחלפות בעצמו , ההחלפות של הטקסט לא עובדות במקלדת (כדי שתוכלו להקליד ?phone וזה לא יהפוך למספר של המאזין הנוכחי אלא ייכנס לשלוחה כמות שהוא).
_________

יש פונקציה שעוזרת במידה מסויימת למנוע את חסימת השרת, הפונקציה שולחת לימות נתונים של מערכת אחרת כדי לייצר התחברות תקנית ולמנוע את הרצף של השגיאות. 
יש שלושה אפשרויות
1 לשלוח את מספר המערכת שלכם והסיסמא (אל דאגה המערכת לא משנה כלום היא רק עושה לוגין ולוגאאוט) בשביל זה צריך להכניס את הסיסמא (את מספר המערכת ימות כבר שולחים)
הפקודה היא:
mode2=1
להפעיל את מצב אחד
api_pass=123456
הסיסמא.
_________
מצב 2 המערכת משתמשת במספר מערכת וסיסמא שמוגדרים כבר בפנים
הפקודה היא:
mode2=2

הערה: במצב זה אפשר לבדוק את המערכת כדי לדעת שהמערכת והסיסמא בשרת הם נכונים 
הפקודה היא:
check=1
במצב זה לא צריך לשלוח עוד שום פרמטר בשביל זה חוץ משתי הפרמטרים כאן.
 
[שימו לב זה עובד רק כשmode2 על מצב שתיים]
___________
מצב שלוש
לשלוח בעצמכם למערכת מספר מערכת וסיסמא חיצוניים
הפקודה היא:
mode2=3
מספר מערכת:
api_did=0771234567
סיסמא:
api_pass=123456
_____________');

//הודעת מקלדת
define ('M_KEYBOARD', 'read=t-אנא הקישוא את האות ולסיום הקישוא סולמית, לאות גדולה הקלידו סימן שאלה ואת האות, למקף תחתון הקלידו רווח, לשווה הקלידו פלוס, לסלש הקלידו סימן קריאה,  לנקודותיים הקלידו פעמיים נקודה, לכוכבית הקלידו פלוס שטרודל, למעבר שורה הקלידו נקודה על ידי הקשת אחד וסולמית ואז מקף תחתון על ידי אפס וסולמית, לסימן שאלה הקלידו פעמיים סימן שאלה=text,,,1,14,EnglishKeyboard,');
//קבלת עזרה
if (isset ($_REQUEST['help'])){
print "HELP";
exit();
}

$did=$_REQUEST['did'];


$pass=$_REQUEST['pass'];
$path = $_REQUEST['path'];

$phone =$_REQUEST['ApiPhone'];

$text=$_REQUEST['text'];



$name = $_REQUEST['ApiEnterIDName'];
//נתיב במצב טקסט
$pathkey = $_REQUEST['pathkey'];

//התאמות אישיות
$api = array(
    $_REQUEST['api0'],
    $_REQUEST['api1'],
    $_REQUEST['api2'],
    $_REQUEST['api3'],
    $_REQUEST['api4'],
    $_REQUEST['api5'],
    $_REQUEST['api6'],
    $_REQUEST['api7'],
    $_REQUEST['api8'],
    $_REQUEST['api9'],
);


$path1 = $_REQUEST['path1'];
$path2 = $_REQUEST['path2'];

//האם יהיה על מצב מקלדת
$mode =$_REQUEST['mode'];
//אם כן, הטקסט
$textkey = $_REQUEST['textkey'];

//האם יפעיל את הפונקציה למניעת חסימה ובאיזה מצב
$mode2 = $_REQUEST['mode2'];

//להיכן לשלוח את המאזין במצבים שונים
if (preg_match ('/^[0-9a-zA-Z./א-ת ]*$/',$_REQUEST['GoToOk']) !== false){
$GoToOk = $_REQUEST['GoToOk'];
} else {
$GoToOk = "..";
}
if (preg_match ('/^[0-9a-zA-Z./א-ת ]*$/',$_REQUEST['GoToError']) !== false) {
$GoToError = $_REQUEST['GoToError'];
} else {
$GoToError = "..";
}
if (preg_match ('/^[0-9a-zA-Z./א-ת ]*$/',$_REQUEST['GoToBlook']) !== false) {
    $GoToBlook = $_REQUEST['GoToBlook'];
} else {
    $GoToBlook = "/GoTo/Blook";
}


//פונקציה למניעת חסימה

//בדיקה על איזה מצב הפונקציה נמצאת

if ($mode2 == 1){
$api_did = $_REQUEST['ApiDID'];
$api_pass = $_REQUEST['api_pass'];
}
else if ($mode2 == 2) {
$api_did ="11111";
$spi_pass = "333333";
}
else if ($mode2 == 3){
$api_did = $_REQUEST['api_did'];
$api_pass = $_REQUEST['api_pass'];
}

//הפונקציה עצמה
function DontLook($api_did,$api_pass, $check){

/*פונקציה  שמיועדת למנוע את חסימת השרת על ידי שליחת נתונים נכונים לאחר כל שגיאה*/

if ($check == 1 ){
//האם המערכת נמצאת על מצב בדיקה
if ($mode2 == 2){

$url = "https://www.call2all.co.il/ym/api/UpdateExtension?token={$api_did}:{$api_did}&path=ivr2:check&title=בדיקת פונקציה";

$status = file_get_contents($url);
$ok = json_decode($status, true);
$return = $ok['responseStatus'];
return $return;
} else {
return "error1";
}
}

//קבלת טוקן מימות
$url = "https://www.call2all.co.il/ym/api/Login?username={$api_did}&password={$api_pass}";

$status = file_get_contents($url);
$token = json_decode($status, true);

//החזרת הטוקן ויציאה מימות
$url = " https://www.call2all.co.il/ym/api/Logout?token={$token['token']}";
$ggg = file_get_contents($url);
return "6";
}

//מצב בדיקה לפונקציית אל חסום

$check = $_REQUEST['check'];

if  ($check == 1){
$check_ok = dontLook($api_did, $api_pass, $check);
if( $check_ok === ok){
print "id_list_massage=t-המערכת תקנית&";
exit();
} else if ($check_ok === error1){
print "id_list_massage=m-1080&t-לא ניתן לבדוק מערכות חיצוניות";
exit();
} else {
print " I'd_list_massage=m-1080";
exit();
}
}

//פונקציה מקלדת
function KeyBoard ($text, $mode){

$text = strtolower ($text);

$text = str_replace ('??', '~', $text);

$text = str_replace ("?a","A",$text);
$text = str_replace ("?b","B",$text);
$text = str_replace ("?c","C",$text);
$text = str_replace ("?d","D",$text);
$text = str_replace ("?e","E",$text);
$text = str_replace ("?f" , "F" , $text);
$text = str_replace ("?g" , "G" , $text);
$text = str_replace ("?h" , "H" , $text);
$text = str_replace ("?i" , "I" , $text);
$text = str_replace ("?j" , "J" , $text);
$text = str_replace ("?k" , "K" , $text);
$text = str_replace ("?l" , "L" , $text);
$text = str_replace ("?m" , "M" , $text);
$text = str_replace ("?n" , "N" , $text);
$text = str_replace ("?o" , "O" , $text);
$text = str_replace ("?p" , "P" , $text);
$text = str_replace ("?q" , "Q" , $text);
$text = str_replace ("?r" , "R" , $text);
$text = str_replace ("?s" , "S" , $text);
$text = str_replace ("?t" , "T" , $text);
$text = str_replace ("?u" , "U" , $text);
$text = str_replace ("?v" , "V" , $text);
$text = str_replace ("?w" , "W" , $text);
$text = str_replace ("?x" , "X" , $text);
$text = str_replace ("?y" , "Y" , $text);
$text = str_replace ("?z" , "Z" , $text);

//מצב הקלדת שלוחה
if ($mode === "path"){
$text = str_replace (" " , "/" , $text);
$text = str_replace("?" , " " , $text);
return "$text" ;
}

//מצב רגיל
$text = str_replace (" " , "_" , $text);
$text = str_replace ("!" , "/" , $text);
$text = str_replace ("+@","*",$text);
$text = str_replace ("+" , "=" , $text);
$text = str_replace ("..", ":" , $text);
$text = str_replace ("._", "&", $text);

$text = str_replace ('~', '?', $text);

}

//בדיקה האם המשתמש העביר את כל הנתונים

if ($did == null){
 print 'read=m-2571=did,yes,10,9,15,phone,yes,,,,,,,&noop=לקבלת עזרה שלח את הפרמטר "help"';
exit();
}
if ($pass == null){
print "read=m-1800=pass,yes,100,1,20,Digits,";
exit();
}
if ($path == null){
print "read=t-אנא הקישוא את מספר השלוחה וסולמית לסיום, לשלוחה ראשית הקישוא כוחבית וסולמית, לכוחבית הקישוא כוחבית כוחבית אחד וסולמית, לסולמית הקישוא כוחבית כוחבית שתיים וסולמית להקלדת שם השלוחה במקלדת טקסט הקישוא כוחבית כוחבית שלוש=path,,1000,0,15,Digits,,,*/,,,ok,root,";
exit();
} elseif ($path =='root'){
$path = '';
}


//החלפת תווים לשלוחה
$path = str_replace ("//0" , "hangup" , $path);
$path = str_replace ("//1" , "Star" , $path);
$path = str_replace ("//2" , "Hash", $path);

$path = str_replace ( "?phone" , "$phone" , $path);
$path = str_replace ( "?api1" , "$api1" , $path);
$path = str_replace ( "?api2" , "$api2" , $path);
$path = str_replace ("?path1" , "$path1" , $path);
$path = str_replace ("?path2" , "$path2" , $path);

//בדיקה אם הועבר למצב הקלדת שלוחה בטקסט
if ("$path" === "//3"){
if ($pathkey == null)
print "read=t-אנא הקישוא על המקשים את מיקום השלוחה, בשביל סלש הקישוא אפס וסולמית,בשביל אות גדולה הקלידו סימן שאלה ואת האות, בשביל רווח הקישו סימן שאלה, ניתן להחליף לעברית או ספרות כמו במקלדת הרגילה על ידי כוחבית וסולמית=pathkey,,1000,0,20,EnglishKeyboard,";

//קריאה לפונקציית מקלדת
$path = KeyBoard($pathkey, "path");
}


//בדיקה של הנתונים
if (preg_match('/^[0-9]{9,10}$/', $did) == false){
print '<h3 dir=" rtl"  style="color:red;">שגיאה, יש להקליד מספר מערכת תקני</h3>';
}
if (preg_match('/^[0-9]*$/', $pass) == false){
print '<h3 dir=" rtl"  style="color:red;">שגיאה, ניתן להכניס רק ספרות בערך של  סיסמא</h3>';
}
//מצב מקלדת טקסט

if ($mode == 1){

//בדיקה אם המשתמש העביר את כל הנתונים
if ($text_key == null){
print M_KEYBOARD;
exit();
}
$textkey = KeyBoard($textkey, 0);
//הכנסה של הטקסט
$text = str_replace("?key", "$textkey", $text);

//שליחת הפקודה לימות

$url="https://www.call2all.co.il/ym/api/UpdateExtension?token={$did}:{$pass}&path=ivr2:{$path}&{$text}";
$status = file_get_contents($url);
$ok = json_deccde($status,true);

//בדיקה האם עבר בהצלחה או שגוי או חסום
if ($ok['responseStatus'] === ok){
print "id_list_massage=m-2573&go_to_folder={$GoToOk}";
exit();
} elseif ($ok['message']==="creating login token error(user name or password do not match)") {
  
//אם פרטים שהוקשו שגויים print("id_list_massage=m-1800&go_to_folder=$GoToBlook");
   if ($mode2 !== null){
$g = DontLook($api_did, $api_pass,0);
}
   exit();
  } else {
//אם שגיאה אחרת
print "id_list_massage=m-1080&go_to_folder={$GoToError}";
if ($mode2 !== null){
$g = DontLook($api_did, $api_pass,0);
}
exit();
}
}


//מצב רגיל
//החלפת טקסטים
$text = str_replace ("?pass" , "$pass" , $text);
$text = str_replace("?did" , "$did" , $text);
$text = str_replace ("?path" , "$path" , $text);
$text = str_replace("?phone" , "$phone" , $text);
$text = str_replace("?name" , "$name" , $text);


for ($i=0; $i<10;$i++){
$text = str_replace ("?api{$i}", $api[$i], $text);
}


$text = str_replace("?-" , "&" , $text);


//שליחת הבקשה לימות

$url="https://www.call2all.co.il/ym/api/UpdateExtension?token={$did}:{$pass}&path=ivr2:{$path}&{$text}";

$status = file_get_contents($url);

$ok = json_decode($status,true);

//בדיקה אם הצליח או שגוי או חסום
if ($ok['responseStatus'] === "ok"){
//אם תקיו
print "id_list_massage=m-2573&go_to_folder={$GoToOk}";
exit();
} elseif ($ok['message']==="creating login token error(user name or password do not match)") {

//אם פרטים שגויים print("id_list_massage=m-1800&go_to_folder=$GoToBlook");
   if ($mode2 !== null){
$g = DontLook($api_did, $api_pass,0);
}
   exit();
} else{

//אם שגיאה אחרת או שרת חסום
print "id_list_massage=m-1080&go_to_folder={$GoToError}";
if ($mode2 !== null){
$g = DontLook($api_did, $api_pass,0);
}
exit();
}
?>
