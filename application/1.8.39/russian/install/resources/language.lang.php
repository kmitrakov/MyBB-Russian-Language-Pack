<?php
/**
 * MyBB 1.8 English Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

/**
 * MyBB Russian Language Pack
 *
 * Author: Kirill Mitrakov
 * Author website: https://github.com/kmitrakov
 *
 * Compatible version of MyBB: 1.8.39
 *
 */

/* INSTALL LANGUAGE VARIABLES */
$l['none'] = 'Нет';
$l['not_installed'] = 'Не установлено';
$l['installed'] = 'Установлено';
$l['not_writable'] = 'Недоступно для записи';
$l['writable'] = 'Доступно для записи';
$l['done'] = 'выполнено';
$l['next'] = 'Далее';
$l['error'] = 'Ошибка';
$l['multi_byte'] = 'Multi-Byte';
$l['recheck'] = 'Проверить снова';

$l['title'] = "Мастер установки MyBB";
$l['welcome'] = 'Приветствие';
$l['license_agreement'] = 'Лицензионное соглашение';
$l['req_check'] = 'Проверка требований';
$l['db_config'] = 'Настройка базы данных';
$l['table_creation'] = 'Создание таблиц';
$l['data_insertion'] = 'Вставка данных';
$l['theme_install'] = 'Установка темы';
$l['board_config'] = 'Настройка форума';
$l['admin_user'] = 'Администратор';
$l['finish_setup'] = 'Завершение установки';
$l['upgrade_complete'] = 'Обновление завершено';

$l['table_population'] = 'Заполнение таблиц';
$l['theme_installation'] = 'Установка темы';
$l['create_admin'] = 'Создание учетной записи администратора';

$l['already_installed'] = "MyBB уже установлен";
$l['mybb_already_installed'] = "<p>Добро пожаловать в мастер установки MyBB {1}. MyBB обнаружил, что он уже настроен в этом каталоге.</p>
<p>Пожалуйста, выберите подходящее действие ниже:</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>Обновить мою существующую копию MyBB до {1} <span style=\"font-size: 80%; color: maroon;\">(Рекомендуется)</span></h3>
	<p>Эта опция обновит вашу текущую версию MyBB до MyBB {1}.</p>
	<p>Выберите этот вариант, если хотите сохранить текущие темы форума, сообщения, пользователей и другую информацию.</p>
	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Обновить до MyBB {1} &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>Установить новую копию MyBB</h3>
	<p>Эта опция <span style=\"color: red;\">удалит любой существующий форум, который вы могли настроить</span> и установит чистую версию MyBB.</p>
	<p>Выберите этот вариант, чтобы стереть существующую копию MyBB, если хотите начать заново.</p>
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('Вы уверены, что хотите установить новую копию MyBB?\\n\\nЭто удалит ваш существующий форум. ЭТОТ ПРОЦЕСС НЕЛЬЗЯ ОТМЕНИТЬ.');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Установить MyBB {1} &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>MyBB обнаружил, что работает из каталога \"Upload\".</h3>
	<p>Хотя в этом нет ничего плохого, рекомендуется загружать содержимое каталога \"Upload\", а не сам каталог.<br /><br />Для получения дополнительной информации, пожалуйста, ознакомьтесь с <a href=\"https://docs.mybb.com/1.8/install/#uploading-files\" target=\"_blank\" rel=\"noopener\">документацией MyBB</a>.</p>
</div>";

$l['welcome_step'] = '<p>Добро пожаловать в мастер установки MyBB {1}. Этот мастер установит и настроит копию MyBB на вашем сервере.</p>
<p>Теперь, когда вы загрузили файлы MyBB, необходимо создать и импортировать базу данных и настройки. Ниже приведен план того, что будет выполнено во время установки.</p>
<ul>
	<li>Проверка требований MyBB</li>
	<li>Настройка движка базы данных</li>
	<li>Создание таблиц базы данных</li>
	<li>Вставка данных по умолчанию</li>
	<li>Импорт тем и шаблонов по умолчанию</li>
	<li>Создание учетной записи администратора для управления вашим форумом</li>
	<li>Настройка основных параметров форума</li>
</ul>
<p>После успешного завершения каждого шага нажмите &#34;Далее&#34;, чтобы перейти к следующему шагу.</p>
<p>Нажмите &#34;Далее&#34;, чтобы просмотреть лицензионное соглашение MyBB.</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> Отправлять анонимную статистику о характеристиках вашего сервера в группу MyBB</label> (<a href="https://docs.mybb.com/1.8/install/anonymous-statistics/" style="color: #555;" target="_blank" rel="noopener"><small>Какая информация отправляется?</small></a>)</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>Нажимая &#34;Далее&#34;, вы соглашаетесь с условиями, изложенными в Лицензионном соглашении MyBB выше.</strong></p>';


$l['req_step_top'] = '<p>Прежде чем вы сможете установить MyBB, мы должны проверить, что вы соответствуете минимальным требованиям для установки.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">Проверка требований</div>
		<table class="general" cellspacing="0">
		<thead>
			<tr>
				<th colspan="2" class="first last">Требования</th>
			</tr>
		</thead>
		<tbody>
		<tr class="first">
			<td class="first">Версия PHP:</td>
			<td class="last alt_col">{1}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Поддерживаемые расширения БД:</td>
			<td class="last alt_col">{2}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Поддерживаемые расширения перевода:</td>
			<td class="last alt_col">{3}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Расширения PHP XML:</td>
			<td class="last alt_col">{4}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Файл конфигурации доступен для записи:</td>
			<td class="last alt_col">{5}</td>
		</tr>
		<tr>
			<td class="first">Файл настроек доступен для записи:</td>
			<td class="last alt_col">{6}</td>
		</tr>
		<tr>
			<td class="first">Каталог кэша доступен для записи:</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Каталог загрузок доступен для записи:</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">Каталог аватаров доступен для записи:</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>Поздравляем, вы соответствуете требованиям для запуска MyBB.</strong></p>
<p>Нажмите &#34;Далее&#34;, чтобы продолжить процесс установки.</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'MyBB требует PHP версии 5.2.0 или выше для работы. У вас установлена версия {1}.';
$l['req_step_error_dboptions'] = 'MyBB требует установки одного или нескольких подходящих расширений базы данных. Ваш сервер сообщил, что ни одно из них не доступно.';
$l['req_step_error_xmlsupport'] = 'MyBB требует, чтобы PHP был скомпилирован с поддержкой обработки XML данных. Пожалуйста, ознакомьтесь с информацией на <a href="http://www.php.net/xml" target="_blank" rel="noopener">PHP.net</a> для получения дополнительной информации.';
$l['req_step_error_configdefaultfile'] = 'Файл конфигурации (inc/config.default.php) не может быть переименован. Пожалуйста, вручную переименуйте файл <u>config.default.php</u> в <u>config.php</u>, чтобы разрешить запись в него, или обратитесь в <a href="https://mybb.com/support" target="_blank" rel="noopener">службу поддержки MyBB</a>.';
$l['req_step_error_configfile'] = 'Файл конфигурации (inc/config.php) недоступен для записи. Пожалуйста, измените <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">права доступа chmod</a>, чтобы разрешить запись.';
$l['req_step_error_settingsfile'] = 'Файл настроек (inc/settings.php) недоступен для записи. Пожалуйста, измените <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">права доступа chmod</a>, чтобы разрешить запись.';
$l['req_step_error_cachedir'] = 'Каталог кэша (cache/) недоступен для записи. Пожалуйста, измените <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">права доступа chmod</a>, чтобы разрешить запись.';
$l['req_step_error_uploaddir'] = 'Каталог загрузок (uploads/) недоступен для записи. Пожалуйста, измените <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">права доступа chmod</a>, чтобы разрешить запись.';
$l['req_step_error_avatardir'] = 'Каталог аватаров (uploads/avatars/) недоступен для записи. Пожалуйста, измените <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">права доступа chmod</a>, чтобы разрешить запись.';
$l['req_step_error_cssddir'] = 'Каталог css (css/) недоступен для записи. Пожалуйста, измените <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noopener">права доступа chmod</a>, чтобы разрешить запись.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>Ошибка</h3>
<p>Проверка требований MyBB не удалась по причинам, указанным ниже. Установка MyBB не может быть продолжена, так как вы не соответствуете требованиям MyBB. Пожалуйста, исправьте ошибки ниже и попробуйте снова:</p>
{1}
</div>';


$l['db_step_config_db'] = '<p>Теперь пришло время настроить базу данных, которую будет использовать MyBB, а также данные для аутентификации в базе данных. Если у вас нет этой информации, ее обычно можно получить у вашего веб-хостинга.</p>';
$l['db_step_config_table'] = '<div class="border_wrapper">
<div class="title">Настройка базы данных</div>
<table class="general" cellspacing="0">
<tr>
	<th colspan="2" class="first last">Настройки базы данных</th>
</tr>
<tr class="first">
	<td class="first"><label for="dbengine">Движок базы данных:</label></td>
	<td class="last alt_col"><select name="dbengine" id="dbengine" onchange="updateDBSettings();">{1}</select></td>
</tr>
{2}
</table>
</div>
<p>После того как вы убедились, что эти данные верны, нажмите &#34;Далее&#34;, чтобы продолжить.</p>';

$l['database_settings'] = "Настройки базы данных";
$l['database_path'] = "Путь к базе данных:";
$l['database_host'] = "Имя сервера базы данных:";
$l['database_user'] = "Имя пользователя базы данных:";
$l['database_pass'] = "Пароль базы данных:";
$l['database_name'] = "Имя базы данных:";
$l['table_settings'] = "Настройки таблиц";
$l['table_prefix'] = "Префикс таблиц:";
$l['table_encoding'] = "Кодировка таблиц:";

$l['db_step_error_config'] = '<div class="error">
<h3>Ошибка</h3>
<p>Похоже, есть одна или несколько ошибок в информации о конфигурации базы данных, которую вы указали:</p>
{1}
<p>После исправления вышеуказанных ошибок продолжите установку.</p>
</div>';
$l['db_step_error_invalidengine'] = 'Вы выбрали недопустимый движок базы данных. Пожалуйста, сделайте выбор из списка ниже.';
$l['db_step_error_noconnect'] = 'Не удалось подключиться к серверу базы данных по адресу \'{1}\' с указанными именем пользователя и паролем. Вы уверены, что имя хоста и данные пользователя верны?';
$l['db_step_error_nodbname'] = 'Не удалось выбрать базу данных \'{1}\'. Вы уверены, что она существует и указанные имя пользователя и пароль имеют к ней доступ?';
$l['db_step_error_missingencoding'] = 'Вы еще не выбрали кодировку. Пожалуйста, убедитесь, что вы выбрали кодировку перед продолжением. (Выберите \'UTF-8 Unicode\', если не уверены)';
$l['db_step_error_sqlite_invalid_dbname'] = 'Вы не можете использовать относительные URL для баз данных SQLite. Пожалуйста, используйте путь в файловой системе (например: /home/user/database.db) для вашей базы данных SQLite.';
$l['db_step_error_invalid_tableprefix'] = 'В префиксе таблиц можно использовать только символ подчеркивания (_) и буквенно-цифровые символы. Пожалуйста, используйте допустимый префикс таблиц перед продолжением.';
$l['db_step_error_tableprefix_too_long'] = 'Длина префикса таблиц должна быть не более 40 символов. Пожалуйста, используйте более короткий префикс перед продолжением.';
$l['db_step_error_utf8mb4_error'] = '\'4-Byte UTF-8 Unicode\' требует MySQL версии 5.5.3 или выше. Пожалуйста, выберите кодировку, совместимую с вашей версией MySQL.';

$l['tablecreate_step_connected'] = '<p>Подключение к указанному серверу базы данных и базе данных прошло успешно.</p>
<p>Движок базы данных: {1} {2}</p>
<p>Сейчас будут созданы таблицы базы данных MyBB.</p>';
$l['tablecreate_step_created'] = 'Создание таблицы {1}...';
$l['tablecreate_step_done'] = '<p>Все таблицы созданы, нажмите &#34;Далее&#34;, чтобы заполнить их.</p>';

$l['populate_step_insert'] = '<p>Теперь, когда основные таблицы созданы, пришло время вставить данные по умолчанию.</p>';
$l['populate_step_inserted'] = '<p>Данные по умолчанию были успешно вставлены в базу данных. Нажмите &#34;Далее&#34;, чтобы вставить наборы шаблонов и тем MyBB по умолчанию.</p>';


$l['theme_step_importing'] = '<p>Загрузка и импорт файла темы и шаблона...</p>';
$l['theme_step_imported'] = '<p>Наборы тем и шаблонов по умолчанию были успешно вставлены. Нажмите &#34;Далее&#34;, чтобы настроить основные параметры вашего форума.</p>';


$l['config_step_table'] = '<p>Теперь пришло время настроить основные параметры для вашего форума, такие как название форума, URL, данные вашего веб-сайта, а также домен и пути для &#34;cookies&#34;. Эти настройки можно легко изменить в будущем через Панель управления администратора MyBB.</p>
		<div class="border_wrapper">
			<div class="title">Настройка форума</div>
			<table class="general" cellspacing="0">
				<tbody>
				<tr>
					<th colspan="2" class="first last">Детали форума</th>
				</tr>
				<tr class="first">
					<td class="first"><label for="bbname">Название форума:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bbname" id="bbname" value="{1}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="bburl">URL форума (без завершающего слеша):</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" onkeyup="warnUser(this, \'Эта опция была установлена автоматически. Не изменяйте ее, если не уверены в правильном значении, иначе ссылки на вашем форуме могут быть broken.\')" onchange="warnUser(this, \'Эта опция была установлена автоматически. Не изменяйте ее, если не уверены в правильном значении, иначе ссылки на вашем форуме могут быть broken.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Детали веб-сайта</th>
				</tr>
				<tr>
					<td class="first"><label for="websitename">Название веб-сайта:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websitename" id="websitename" value="{3}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="websiteurl">URL веб-сайта:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websiteurl" id="websiteurl" value="{4}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Настройки cookies <a title="Что это?" target="_blank" rel="noopener" href="https://docs.mybb.com/1.8/development/cookies">(?)</a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">Домен cookie:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" onkeyup="warnUser(this, \'Эта опция была установлена автоматически. Не изменяйте ее, если не уверены в правильном значении, иначе вход или выход на вашем форуме могут быть broken.\')" onchange="warnUser(this, \'Эта опция была установлена автоматически. Не изменяйте ее, если не уверены в правильном значении, иначе вход или выход на вашем форуме могут быть broken.\')" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">Путь cookie:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" onkeyup="warnUser(this, \'Эта опция была установлена автоматически. Не изменяйте ее, если не уверены в правильном значении, иначе вход или выход на вашем форуме могут быть broken.\')" onchange="warnUser(this, \'Эта опция была установлена автоматически. Не изменяйте ее, если не уверены в правильном значении, иначе вход или выход на вашем форуме могут быть broken.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Контактные данные</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="contactemail">Контактный email:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="contactemail" id="contactemail" value="{7}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Настройки безопасности</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="acppin">PIN-код ACP:</label><br />Оставьте пустым, если не хотите устанавливать</td>
					<td class="last alt_col"><input type="password" class="text_input" name="pin" id="acppin" value="" /></td>
				</tr>
				</tbody>
			</table>
		</div>

	<p>После того как вы правильно ввели указанные выше данные и готовы продолжить, нажмите &#34;Далее&#34;.</p>';

$l['config_step_error_config'] = '<div class="error">
<h3>Ошибка</h3>
<p>Похоже, есть одна или несколько ошибок в конфигурации форума, которую вы указали:</p>
{1}
<p>После исправления вышеуказанных ошибок продолжите установку.</p>
</div>';
$l['config_step_error_url'] = 'Вы не ввели URL вашего форума.';
$l['config_step_error_name'] = 'Вы не ввели название для вашей копии MyBB.';
$l['config_step_revert'] = 'Нажмите, чтобы вернуть эту настройку к исходному значению.';


$l['admin_step_setupsettings'] = '<p>Настройка основных параметров форума...</p>';
$l['admin_step_insertesettings'] = '<p>Вставлено {1} настроек в {2} групп.</p>
<p>Обновление настроек пользовательскими значениями.</p>';
$l['admin_step_insertedtasks'] = '<p>Вставлено {1} запланированных задач.</p>';
$l['admin_step_insertedviews'] = '<p>Вставлено {1} административных представлений.</p>';
$l['admin_step_createadmin'] ='<p>Вам необходимо создать первоначальную учетную запись администратора для входа и управления вашей копией MyBB. Пожалуйста, заполните обязательные поля ниже, чтобы создать эту учетную запись.</p>';
$l['admin_step_admintable'] = '<div class="border_wrapper">
			<div class="title">Данные учетной записи администратора</div>

		<table class="general" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2" class="first last">Данные учетной записи</th>
		</tr>
		</thead>
		<tr class="first">
			<td class="first"><label for="adminuser">Имя пользователя:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">Пароль:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off" onchange="comparePass()" /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">Повторите пароль:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off" onchange="comparePass()"  /></td>
		</tr>
		<tr>
			<th colspan="2" class="first last">Контактные данные</th>
		</tr>
		<tr class="first last">
			<td class="first"><label for="adminemail">Адрес электронной почты:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminemail" id="adminemail" value="{2}" /></td>
		</tr>
	</table>
	</div>

	<p>После того как вы правильно ввели указанные выше данные и готовы продолжить, нажмите &#34;Далее&#34;.</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3>Ошибка</h3>
<p>Похоже, есть одна или несколько ошибок в конфигурации форума, которую вы указали:</p>
{1}
<p>После исправления вышеуказанных ошибок продолжите установку.</p>
</div>';
$l['admin_step_error_nouser'] = 'Вы не ввели имя пользователя для вашей учетной записи администратора.';
$l['admin_step_error_nopassword'] = 'Вы не ввели пароль для вашей учетной записи администратора.';
$l['admin_step_error_nomatch'] = 'Введенные вами пароли не совпадают.';
$l['admin_step_error_noemail'] = 'Вы не ввели адрес электронной почты для учетной записи администратора.';
$l['admin_step_nomatch'] = 'Введенный повторно пароль не совпадает с паролем из первого поля. Пожалуйста, исправьте его перед продолжением.';

$l['done_step_usergroupsinserted'] = "<p>Импорт групп пользователей...";
$l['done_step_admincreated'] = '<p>Создание учетной записи администратора...';
$l['done_step_adminoptions'] = '<p>Построение прав администратора...';
$l['done_step_cachebuilding'] = '<p>Построение кэшей данных...';
$l['done_step_success'] = '<p class="success">Ваша копия MyBB была успешно установлена и настроена правильно.</p>
<p>Группа MyBB благодарит вас за поддержку в установке нашего программного обеспечения, и мы надеемся увидеть вас на <a href="https://community.mybb.com/" target="_blank" rel="noopener">форумах сообщества</a>, если вам понадобится помощь или вы захотите стать частью сообщества MyBB.</p>';
$l['done_step_locked'] = '<p>Ваш установщик заблокирован. Чтобы разблокировать установщик, удалите файл \'lock\' в этом каталоге.</p><p>Теперь вы можете перейти к вашей новой копии <a href="../index.php">MyBB</a> или ее <a href="../admin/index.php">Панели управления администратора</a>.</p>';
$l['done_step_dirdelete'] = '<p><strong><span style="color:red">Пожалуйста, удалите этот каталог перед использованием вашей копии MyBB.</span></strong></p>';
$l['done_whats_next'] = '<div class="error"><p><strong>Переходите с другого программного обеспечения форума?</strong></p><p>MyBB предлагает систему слияния для легкого объединения нескольких форумов из различных популярных программных обеспечений форумов, позволяя легко конвертировать их в MyBB. Если вы хотите перейти на MyBB, вы движетесь в правильном направлении! Ознакомьтесь с <a target="_blank" rel="noopener" href="https://mybb.com/download/merge-system">Системой слияния</a> для получения дополнительной информации.</p>';

/* UPGRADE LANGUAGE VARIABLES */
$l['upgrade'] = "Процесс обновления";
$l['upgrade_not_needed'] = '<p>Процесс обновления не требуется для этой версии.</p><p>Если вы считаете, что это может быть ошибкой, вы можете <a href="upgrade.php?force=1">принудительно запустить обновление</a>. В противном случае, нажмите &#34;Далее&#34;, чтобы заблокировать установщик.</p>';
$l['upgrade_welcome'] = "<p>Добро пожаловать в мастер обновления MyBB {1}.</p><p>Прежде чем продолжить, убедитесь, что вы знаете, какую версию MyBB вы использовали ранее, так как вам нужно будет выбрать ее ниже.</p><p><strong>Мы настоятельно рекомендуем также сделать полную резервную копию вашей базы данных и файлов перед попыткой обновления</strong>, чтобы в случае возникновения проблем вы могли легко вернуться к предыдущей версии. Также убедитесь, что ваши резервные копии завершены, прежде чем продолжить.</p><p>Убедитесь, что вы нажимаете &#34;Далее&#34; только ОДИН РАЗ на каждом шаге процесса обновления. Страницы могут загружаться некоторое время в зависимости от размера вашего форума.</p><p>Когда будете готовы, выберите вашу старую версию ниже и нажмите \"Далее\", чтобы продолжить.</p>";
$l['upgrade_templates_reverted'] = 'Шаблоны возвращены';
$l['upgrade_templates_reverted_success'] = "<p>Все шаблоны были успешно возвращены к новым, содержащимся в этом выпуске. Пожалуйста, нажмите &#34;Далее&#34;, чтобы продолжить процесс обновления.</p>";
$l['upgrade_settings_sync'] = 'Синхронизация настроек';
$l['upgrade_settings_sync_success'] = "<p>Настройки форума были синхронизированы с последними в MyBB.</p><p>{1} новых настроек вставлено вместе с {2} новыми группами настроек.</p><p>Для завершения обновления, пожалуйста, нажмите &#34;Далее&#34; ниже, чтобы продолжить.</p>";
$l['upgrade_datacache_building'] = 'Построение кэша данных';
$l['upgrade_building_datacache'] = '<p>Построение кэшей...';
$l['upgrade_continue'] = 'Пожалуйста, нажмите &#34;Далее&#34;, чтобы продолжить';
$l['upgrade_locked'] = "<p>Ваш установщик заблокирован. Чтобы разблокировать установщик, удалите файл 'lock' в этом каталоге.</p><p>Теперь вы можете перейти к вашей обновленной копии <a href=\"../index.php\">MyBB</a> или ее <a href=\"../{1}/index.php\">Панели управления администратора</a>.</p>";
$l['upgrade_removedir'] = 'Пожалуйста, удалите этот каталог перед использованием обновленного MyBB.';
$l['upgrade_congrats'] = "<p>Поздравляем, ваша копия MyBB была успешно обновлена до {1}.</p>{2}<p><strong>Что дальше?</strong></p><ul><li>Пожалуйста, используйте инструмент 'Найти обновленные шаблоны' в ACP, чтобы найти настроенные шаблоны, обновленные в процессе этого обновления. Отредактируйте их, чтобы включить изменения, или верните к оригиналам.</li><li>Убедитесь, что ваш форум все еще полностью функционален.</li></ul>";
$l['upgrade_template_reversion'] = "Предупреждение о возврате шаблонов";
$l['upgrade_template_reversion_success'] = "<p>Все необходимые модификации базы данных были успешно выполнены для обновления вашего форума.</p><p>Это обновление требует, чтобы все шаблоны были возвращены к новым, содержащимся в пакете, поэтому, пожалуйста, сделайте резервную копию любых пользовательских шаблонов, которые вы создали, перед нажатием &#34;Далее&#34;.";
$l['upgrade_send_stats'] = "<p><input type=\"checkbox\" name=\"allow_anonymous_info\" value=\"1\" id=\"allow_anonymous\" checked=\"checked\" /> <label for=\"allow_anonymous\"> Отправлять анонимную статистику о характеристиках вашего сервера в группу MyBB</label> (<a href=\"https://docs.mybb.com/1.8/install/anonymous-statistics/\" style=\"color: #555;\" target=\"_blank\" rel=\"noopener\"><small>Какая информация отправляется?</small></a>)</p>";

$l['please_login'] = "Пожалуйста, войдите";
$l['login'] = "Вход";
$l['login_desc'] = "Пожалуйста, введите ваше имя пользователя и пароль, чтобы начать процесс обновления. Вы должны быть действительным администратором форума для выполнения обновления.";
$l['login_username'] = "Имя пользователя";
$l['login_password'] = "Пароль";
$l['login_password_desc'] = "Пожалуйста, обратите внимание, что пароли чувствительны к регистру.";

/* Error messages */
$l['development_preview'] = "<div class=\"error\"><h2 class=\"fail\">Предупреждение</h2><p>Эта версия MyBB является превью версией для разработки и предназначена только для тестирования.</p><p>Официальная поддержка, кроме поддержки для разработки плагинов и тем, предоставляться не будет. Продолжая эту установку/обновление, вы делаете это на свой страх и риск.</p></div>";
$l['locked'] = 'Установщик в настоящее время заблокирован, удалите файл \'lock\' из каталога установки, чтобы продолжить';
$l['no_permision'] = "У вас нет прав для запуска этого процесса. Вам нужны права администратора для выполнения процедуры обновления.<br /><br />Если вам нужно выйти, нажмите <a href=\"upgrade.php?action=logout&amp;logoutkey={1}\">здесь</a>. Оттуда вы сможете снова войти под своей учетной записью администратора.";
$l['no_theme_functions_file'] = 'Файл функций темы не найден. Убедитесь, что все файлы загружены правильно.';

$l['task_versioncheck_ran'] = "Задача проверки версии успешно выполнена.";
$l['task_versioncheck_ran_errors'] = "Не удалось подключиться к MyBB для проверки версии.";
