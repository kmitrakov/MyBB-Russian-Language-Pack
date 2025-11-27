# MyBB Russian Language Pack
Русский языковой пакет для форума MyBB.

## Описание
Данный пакет используется для установки русского языка на форуме MyBB.

Пакет содержит:
- Мастер установки.
- Интерфейс пользователя.
- Панель управления администратора (будет переведена в последующих релизах).

### Структура проекта
```
└── application
    └── 1.8.39
        ├── english - Оригинальный английский языковой пакет (1.8.39)
        └── russian - Русский языковой пакет (1.8.39)
            ├── inc
            |   └── languages
            |       ├── russian - Интерфейс пользователя
            |       |   └── admin - Панель управления администратора
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
- Запустите мастер установки MyBB, следуя [официальной документацию по установке MyBB](https://docs.mybb.com/1.8/install/).
- Выполните установку MyBB.
- Перейти в панель управления администратора (```admin/index.php```).
- В разделе "Configuration > Settings > General Configuration > Default Language" выберите пункт "Russian" и нажмите кнопку "Save Settings".

## Versions
- MyBB - 1.8.39 (application/1.8.39/russian)

## Releases
- v1.0.0

## Команда проекта
- [Kirill Mitrakov](https://github.com/kmitrakov/) [(k.mitrakov@gmail.com)](mailto:k.mitrakov@gmail.com?subject=MyBB%20Russian%20Language%20Pack).

## Источники
- [Официальный сайт MyBB](https://mybb.com/)
- [Официальная документация по установке MyBB](https://docs.mybb.com/1.8/install/)

## TODO
- [ ] Перевод панели управления администратора для версии 1.8.39.
- [ ] Перевод установленного форума для версии 1.8.39.