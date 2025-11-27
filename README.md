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
- Скачать MyBB, используя [официальную страницу MyBB](https://mybb.com/download/).
- Разместить на сервере назначения все необходимые файлы, используя [официальнаю документацию по установке MyBB](https://docs.mybb.com/1.8/install/).
- Получить код данного пакета.
- Скопировать на сервер назначения каталог **application/1.8.39/russian/inc/languages/russian**, в каталог **inc/languages** MyBB.
- Скопировать на сервер назначения файл **application/1.8.39/russian/inc/languages/russian/russian.php**, в каталог **inc/languages** MyBB.
- Создать резевную копию файла MyBB **install/resources/language.lang.php** на сервере назначения.
- Скопировать на сервер назначения файл **application/1.8.39/russian/install/resources/language.lang.php**, в каталог **install/resources** MyBB.
- Запустить мастер установки MyBB, используя [официальнаю документацию по установке MyBB](https://docs.mybb.com/1.8/install/).
- Выполнить установку MyBB.
- Перейти в панель управления администратора (admin/index.php).
- В разделе "Configuration > Settings > General Configuration > Default Language" выбрать пункт "Russian" и нажать кнопку "Save Settings".

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