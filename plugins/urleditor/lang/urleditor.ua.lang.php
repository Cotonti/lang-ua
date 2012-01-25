<?php
/**
 * Ukrainian Language File for URL management tool
 *
 * @package urleditor
 * @version 0.9.5
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['adm_urls'] = 'Посилання';
$L['adm_urls_area'] = 'Модуль';
$L['adm_urls_custom_htaccess'] = 'Додаткові правила .htaccess';
$L['adm_urls_error_dat'] = 'Помилка: datas / urltrans.dat недоступний для запису! Створіть його і встановіть CHMOD 666.';
$L['adm_urls_format'] = 'Формат';
$L['adm_urls_htaccess'] = 'Перезаписати .htaccess?';
$L['adm_urls_new'] = 'Нове правило';
$L['adm_urls_parameters'] = 'Параметри';
$L['adm_urls_rules'] = 'Правила перетворення URL';
$L['adm_urls_save'] = 'Зберегти';
$L['adm_urls_your'] = 'Ваш';
$L['adm_urls_callbacks'] = 'Правило містить callback-виклики';
$L['adm_urls_errors'] = 'Вам доведеться додати опції rewrite для них власноруч.';
$L['adm_help_urls'] = 'На цій сторінці ви можете налаштувати формат посилань, використовуючи прості правила перетворення. Переконайтеся в коректності та відсутності повторювання правил. Не використовуйте пробіли, символи табуляції та інші спеціальні символи в правилах. Розділи та параметри пояснені нижче
<ol>
<li><strong>Модуль</strong> - назва скрипта, до якого належить правило. Метасимвол (*) означає &laquo;будь-який скрипт&raquo;.</li>
<li><strong>Параметри </strong> - умова, що перевіряється на параметрах посилання. Це рядок, що містить пари ім\'я-значення, розділені символом & та символом = між ім\'ям і значенням. Знак питання (?) На початку рядка ставити не слід. Якщо ви вкажете тут деяку змінну, то для роботи правила вона повинна бути присутня в параметрах посилання. Символ * означає будь-яке значення, одиночне значення або список можливих значень, розділених вертикальною рискою (|). Всі значення повинні бути URL-кодовані. <em> Приклад: name = Val | Josh & id = 124 & page =*</em>.</li>
<li><strong>Формат</strong> задає формат формування посилання. Це рядок, що містить спеціальні послідовності, замінні їх значеннями. Звичайна послідовність виглядає як {$ name}, де "name" - ім\'я параметра посилання (GET-змінної), значення якої буде вставлено замість цієї послідовності. Є кілька спеціальних послідовностей, що не згадуються в параметрах посилання (&quot;query string&quot;):
	<ul>
		<li><em>{$_area}</em> - ім\'я скрипта;</li>
		<li><em>{$_host}</em> - ім\'я хоста з головного посилання сайту;</li>
		<li><em>{$_rhost}</em> - ім\'я хоста з поточного HTTP-запиту;</li>
		<li><em>{$_path}</em> - адреса сайту відносно кореня серверу, / якщо сайт в корені.</li>
	</ul>
Ви можете також використовувати параметризовані піддомени, якщо вкажете абсолютне посилання виду: <em>http://{$c}.site.com/{$al}.html</em>. На даний момент піддомени підтримуються тільки для серверів Apache.</li>
<li><strong>Нове правило </strong> - додає нове правило у таблицю.</li>
<li><strong>Порядок</strong> - пам\'ятайте, що порядок слідування правил має значення. Алгоритм перетворення посилань шукає відповідне правило в такий спосіб: спочатку він шукає правила для поточного скрипта, потім він пробує знайти <em>Перше</em> правило, відповідне по параметрам; якщо відповідне правило не знайдено, відбувається повернення до універсальних правил (модуль *) і перше підходяще правило шукається там. Рекомендується правило за замовчуванням (с * модулем і * параметрами) ставити останнім серед усіх правил для *- модуля або навіть останнім в таблиці.<br />
Ви можете змінити порядок правил простим перетягуванням потрібних рядків у таблиці. Рекомендується зберегти нові правила перед зміною порядку, інакше перетягування для них працювати не буде.</li>
<li><strong>Query String</strong> - це те, що ви бачите в більшості посилань після знака питання. Вона використовується для передачі решти GET-параметрів, які ви не використовували при складанні Формату, і у такому випадку автоматично приєднується до посилання.</li>
<li><strong>Зберегти</strong> - ця кнопка збереже правила, і зміни набудуть чинності негайно. Також буде змінено ваш. htaccess (якщо можливо), і вам будуть надані директиви для .htaccess/IsapiRewrite4.ini/nginx.conf (залежно від того який сервер використовується).</li>
</ol>';

$L['cfg_preset'] = array('Набір предустановок');
$L['cfg_preset_params'] = array('Зручний ',' Сумісний з Genoa / Seditio ',' Власний urltrans.dat ',' Вимкнено');

$L['info_desc'] = 'За допомогою цього плагіна ви можете задавати розширені правила перетворення URL у панелі Адміністрування, або вибрати просту у використанні передустановку для дружніх людині та пошуковим системам посилань';

?>
