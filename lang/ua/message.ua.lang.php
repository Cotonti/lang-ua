<?php
/**
 * Ukrainian Language File for the Message Module (message.ua.lang.php)
 *
 * @package Cotonti
 * @copyright (c) Cotonti Translators Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Wrong URL.');

$L['msg_Message'] = 'Системне повідомлення';
$L['msg_Error'] = 'Помилка';
$L['msg_Warning'] = 'Попередження';
$L['msg_Security'] = 'Безпека';
$L['msg_System'] = 'Система';

$L['msgredir'] = 'Перенаправлення ...';

/**
 * Account-Related Messages
 */

$L['msg100_title'] = 'Помилка доступу до облікового запису';
$L['msg100_body'] = 'Перегляд облікових записів доступний тільки для зареєстрованих і авторизованих користувачів';

$L['msg101_title'] = 'Помилка авторизації';
$L['msg101_body'] = 'Користувач не ідентифікований';

$L['msg102_title'] = 'Вихід з системи завершений';
$L['msg102_body'] = 'Вихід з системи завершений';

$L['msg105_title'] = 'Перший етап реєстрації завершено';
$L['msg105_body'] = 'ППерший етап реєстрації завершено.<br />Перевірте вашу поштову скриньку і підтвердіть реєстрацію, скориставшись отриманим посиланням.<br />До цього моменту Ваш обліковий запис буде позначено як &laquo;Неактивований&raquo; в списку користувачів.';

$L['msg106_title'] = 'Реєстрація завершена повністю';
$L['msg106_body'] = 'Ваш обліковий запис підтверджено й активовано.<br />Використовуйте ваш логін і пароль для авторизації.';

$L['msg109_title'] = 'Користувач видалений';
$L['msg109_body'] = 'Виконано, користувач видалений';

$L['msg117_title'] = 'Помилка реєстрації';
$L['msg117_body'] = 'Реєстрація нових користувачів відключена';

$L['msg118_title'] = 'Перший етап реєстрації завершено';
$L['msg118_body'] = 'Перший етап реєстрації завершено.<br />Ваш обліковий запис ще не активовано.<br />Після того, як адміністратор сайту активує Ваш обліковий запис, вам буде надіслано e-mail.';

$L['msg151_title'] = 'Помилка авторизації';
$L['msg151_body'] = 'Помилка авторизації: ім’я відсутнє в базі даних або був введений неправильно пароль';

$L['msg152_title'] = 'Помилка авторизації';
$L['msg152_body'] = 'Помилка авторизації: Ваш обліковий запис зареєстрований, але ще не активований';

$L['msg153_title'] = 'Помилка авторизації';
$L['msg153_body'] = 'Ваш обліковий запис заблоковано';

$L['msg154_title'] = 'Помилка відновлення пароля';
$L['msg154_body'] = 'Такого пароля немає в базі даних';

$L['msg157_title'] = 'Помилка реєстрації';
$L['msg157_body'] = 'Неправильне посилання для підтвердження реєстрації';

/**
 * Redirection Messages
 */

$L['msg300_title'] = 'Сторінка внесена в базу даних';
$L['msg300_body'] = 'Ваша сторінка внесена в базу даних.<br />Модератор затвердить її публікацію в найближчим часом.<br />Дякуємо!';

/**
 * Client Error Messages
 */

$L['msg400_title'] = 'Помилка запиту (400)';
$L['msg400_body'] = 'Ваш браузер (або проксі-сервер) відправив запит з помилкою в синтаксисі';

$L['msg401_title'] = 'Помилка доступу (401)';
$L['msg401_body'] = 'Ваш запит вимагає ідентифікації користувача.<br />Ім’я / пароль невірні, або ваш браузер не підтримує дану властивість.';

$L['msg403_title'] = 'Заборонено (403)';
$L['msg403_body'] = 'Ваш запит прийнято, але не може бути виконаний через обмеження в доступі.<br />Будь ласка, проінформуйте адміністратора сайту якщо ви вважаєте, що сталася помилка.';

$L['msg404_title'] = 'Не знайдено (404)';
$L['msg404_body'] = 'Даний ресурс сервером не знайдений.<br />Запитаний URL застарів, помилковий, або доступ до нього закритий.';

/**
 * Server Error Messages
 */

$L['msg500_title'] = 'Внутрішня помилка сервера (500)';
$L['msg500_body'] = 'Виникла внутрішня помилка сервера чи помилка в його конфігурації.<br />Будь ласка зв’яжіться з адміністратором сайту і повідомте про помилку і діях що її викликали.';
$L['msg503_title'] = 'Сервіс тимчасово недоступний (503)';
$L['msg503_body'] = 'Cторінка до якої ви звернулись тимчасово недоступна з технічних причин.<br />Будь ласка, спробуйте пізніше або зв’яжіться з адміністратором сайту.';

/**
 * Forum Messages
 */

$L['msg602_title'] = 'Розділ заблокований';
$L['msg602_body'] = 'Даний розділ заблокований';

$L['msg603_title'] = 'Тема заблокована';
$L['msg603_body'] = 'Дана тема заблокована';

/**
 * System Messages
 */

$L['msg900_title'] = 'Сторінка в розробці';
$L['msg900_body'] = 'Робота над сторінкою ще не завершена. Будь ласка, зайдіть пізніше.';

$L['msg904_title'] = 'Помилка доступу до списку системних сторінок';
$L['msg904_body'] = 'У вас відсутні права для перегляду списку системних сторінок';

$L['msg907_title'] = 'Помилка завантаження плагіна';
$L['msg907_body'] = 'Виникла помилка при спробі завантаження плагіна. Можливо відсутні деякі файли.';

$L['msg911_title'] = 'Помилка перевірки пакета локалізації';
$L['msg911_body'] = 'Відсутній файл локалізації';

$L['msg915_title'] = 'Помилка заповнення полів';
$L['msg915_body'] = 'Одне або декілька полів не заповнені';

$L['msg916_title'] = 'Оновлення бази даних виконано';
$L['msg916_body'] = 'База даних успішно оновлено.<br />Порушені записи: $num.';

$L['msg920_title'] = 'Необхідне підтвердження';
$L['msg920_body'] = 'Ви справді хочете виконати цю дію?';

$L['msg930_title'] = 'Помилка доступу';
$L['msg930_body '] = 'Вам заборонено виконувати дану дію';

$L['msg940_title'] = 'Доступ до розділу закрито';
$L['msg940_body'] = 'Доступ до цього розділу сайту тимчасово закрито';

$L['msg950_title'] = 'Помилка в посиланні';
$L['msg950_body'] = 'Невірний URL';

$L['msg951_title'] = 'Сесія закінчилася';
$L['msg951_body'] = 'Ваша сесія більше не дійсна. Спробуйте заново.';
