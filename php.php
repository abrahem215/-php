إليك ملخّص شامل وواضح لأهم دوال المصفوفات (Array Functions) ودوال النصوص (String Functions) في لغة PHP مع أمثلة بسيطة — مناسب للشرح أو المذاكرة أو البحث.
 أولًا: دوال المصفوفات في PHP
PHP فيها عدد كبير جدًا من الدوال الخاصة بالمصفوفات، وهذي أهمها وأكثرها استخدامًا:
 1) count()
ترجع عدد عناصر المصفوفة.
$arr = [1, 2, 3]; echo count($arr); // 3 
 2) array_push()
إضافة عنصر/عناصر إلى نهاية المصفوفة.
$arr = [1, 2]; array_push($arr, 3, 4); print_r($arr); // [1, 2, 3, 4] 
 3) array_pop()
إزالة آخر عنصر من المصفوفة.
$arr = [1, 2, 3]; array_pop($arr); print_r($arr); // [1, 2] 
 4) array_shift()
إزالة أول عنصر من المصفوفة.
$arr = [1, 2, 3]; array_shift($arr); print_r($arr); // [2, 3] 
 5) array_unshift()
إضافة عنصر لبداية المصفوفة.
$arr = [2, 3]; array_unshift($arr, 1); print_r($arr); // [1, 2, 3] 
 6) in_array()
التحقق هل قيمة موجودة داخل المصفوفة.
$arr = ['apple', 'banana']; echo in_array('banana', $arr); // 1 (true) 
 7) array_keys()
يرجع مفاتيح (Keys) المصفوفة.
$arr = ["name"=>"Ali", "age"=>20]; print_r(array_keys($arr)); // ["name", "age"] 
 8) array_values()
يرجع القيم فقط بدون المفاتيح.
print_r(array_values($arr)); // ["Ali", 20] 
 9) array_merge()
دمج مصفوفتين.
$a = [1, 2]; $b = [3, 4]; print_r(array_merge($a, $b)); // [1, 2, 3, 4] 
 10) array_reverse()
تقليب عناصر المصفوفة.
print_r(array_reverse([1, 2, 3])); // [3, 2, 1] 
 11) sort(), rsort()
ترتيب المصفوفة تصاعديًا أو تنازليًا:
$arr = [3, 1, 2]; sort($arr); // [1, 2, 3] rsort($arr); // [3, 2, 1] 
 ثانيًا: دوال النصوص (String Functions) في PHP
 1) strlen()
ترجع طول النص (عدد الأحرف).
echo strlen("Hello"); // 5 
 2) str_replace()
استبدال كلمة بكلمة.
echo str_replace("world", "PHP", "Hello world"); // Hello PHP 
 3) strtolower() / strtoupper()
تحويل النص إلى صغير أو كبير.
echo strtolower("HELLO"); // hello echo strtoupper("php"); // PHP 
 4) trim()
حذف المسافات من بداية ونهاية النص.
$text = " Ali "; echo trim($text); // "Ali" 
 5) substr()
استخراج جزء من النص.
echo substr("Hello World", 0, 5); // Hello 
 6) explode()
تحويل النص إلى مصفوفة حسب فاصل.
$str = "Ali,Hassan,Salem"; $arr = explode(",", $str); print_r($arr); // ["Ali", "Hassan", "Salem"] 
 7) implode()
عكس الدالة explode → تحويل مصفوفة إلى نص.
$arr = ["Ali", "Hassan"]; echo implode(" - ", $arr); // Ali - Hassan 
 8) strpos()
البحث عن موقع كلمة داخل نص.
echo strpos("Hello World", "World"); // 6 
 9) htmlspecialchars()
تحويل رموز HTML لنص (مهم جدًا للحماية).
echo htmlspecialchars("<script>alert('XSS')</script>"); 
 10) md5(), sha1()
تشفير نصوص (غير مناسب للأمان التام ولكن يستخدم للفحص).
echo md5("password"); echo sha1("hello");