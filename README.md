# MyBB Russian Language Pack

![MyBB Version](https://img.shields.io/badge/MyBB-v1.8.39-blue?style=flat-square)
![Release](https://img.shields.io/badge/Release-v1.0.0-orange?style=flat-square)
![Status](https://img.shields.io/badge/Status-Actively%20Maintained-brightgreen?style=flat-square)

Русский языковой пакет для системы форумов MyBB.
Этот пакет переводит интерфейс пользователя и мастера установки для комфортного использования MyBB русскоязычным сообществом.

## Описание
Данный пакет содержит актуальную версию русского языкового пакета для MyBB.
Перевод тщательно проверен, чтобы обеспечить естественную локализацию всех элементов системы.

Пакет содержит передвод для следующих элементов MyBB:
- Мастер установки.
- Интерфейс пользователя.
- Административная панели управления (ACP) (будет переведена в последующих релизах).

### Структура проекта
```
└── application
    └── 1.8.39
        ├── english - Оригинальный английский языковой пакет (1.8.39)
        └── russian - Русский языковой пакет (1.8.39)
            ├── inc
            |   └── languages
            |       ├── russian - Интерфейс пользователя
            |       |   └── admin - Административная панели управления (ACP)
            |       └── russian.php
            |
            └── install
                └── resources - Мастер установки
                    └── language.lang.php
```
### Установка пакета при создании нового форума
- Скачайте MyBB с официального сайта, используя [официальную страницу MyBB](https://mybb.com/download/).
- Разместите все необходимые файлы на целевом сервере, следуя [официальной документации по установке MyBB](https://docs.mybb.com/1.8/install/).
- Получите код данного пакета:.
```
git clone https://github.com/kmitrakov/MyBB-Russian-Language-Pack.git
```
- Скопируйте на целевой сервер каталог ```application/1.8.39/russian/inc/languages/russian``` в каталог ```inc/languages/``` вашей установки MyBB.
- Скопируйте на целевой сервер файл ```application/1.8.39/russian/inc/languages/russian/russian.php``` в каталог ```inc/languages/``` вашей установки MyBB.
- Создайте резервную копию файла ```install/resources/language.lang.php``` на целевом сервере.
- Скопируйте на целевой сервер файл ```application/1.8.39/russian/install/resources/language.lang.php``` в каталог ```install/resources/``` вашей установки MyBB.
- Запустите мастер установки MyBB, следуя [официальной документации по установке MyBB](https://docs.mybb.com/1.8/install/).
- Выполните установку MyBB.
- Перейдите в Административная панели управления (ACP) (```admin/index.php```).
- В разделе "Configuration > Settings > General Configuration > Default Language" выберите пункт "Russian" и нажмите кнопку "Save Settings".

## Версии и совместимость
| Версия пакета | Совместимость с MyBB | Статус            |
|:--------------|:---------------------|:------------------|
| 1.0.0         | 1.8.39               | ✅ Поддерживается |

## Часто задаваемые вопросы
- **Я нашел ошибку в переводе. Куда сообщить?**
- Пожалуйста, создайте [Issue](https://github.com/kmitrakov/MyBB-Russian-Language-Pack/issues) в этом репозитории, подробно описав проблему, указав путь к файлу или описав интерфейс, на котором обнаружена ошибка.

## Разработка и внесение правок

Если вы хотите помочь с улучшением перевода или исправить ошибку:
1.  Сделайте форк (Fork) этого репозитория.
2.  Создайте новую ветку (Branch) для ваших изменений (`git checkout -b improve-translation`).
3.  Внесите правки в языковые файлы в папке `russian`.
4.  Сделайте коммит (Commit) ваших изменений (`git commit -am 'Исправлена опечатка в разделе модерации'`).
5.  Запуште (Push) изменения в ваш форк (`git push origin improve-translation`).
6.  Создайте новый Pull Request в этом репозитории.

Ваша помощь приветствуется!

## Команда проекта
- [Kirill Mitrakov](https://github.com/kmitrakov/) [(k.mitrakov@gmail.com)](mailto:k.mitrakov@gmail.com?subject=MyBB%20Russian%20Language%20Pack).

## Источники
- [Официальный сайт MyBB](https://mybb.com/)
- [Официальная документация по установке MyBB](https://docs.mybb.com/1.8/install/)
- [Сообщество MyBB](https://community.mybb.com)

## TODO
- [ ] Перевод административной панели управления (ACP) для версии 1.8.39.
- [ ] Перевод установленного форума для версии 1.8.39.