# Landing Page machine-learning

##/html/
Готовая верстка.

##/wp_root/
Папка с WordPress и БД.<br>
Путь к папке с темой: `/wp-content/themes/lubus/`<br>

В файле <b>wp-config.php</b> нужно прописать доступ к БД (см. <b>wp-config-sample.php</b>)<br>

Также нужно изменить ссылки на сайт в БД (через phpMyAdmin).
Подробнее см. [Перенос WordPress на другой домен](http://pro-wordpress.ru/chast-1-nastraivaem-svoj-blog/nastrojka/perenos-wordpress-bloga-na-drugoj-xosting-ili-domen.php)

##/wp_root/themes-lubus-price
Копировать в `/wp-content/themes/lubus/`<br>
папка с готовой темой (по умолчанию сайт будет со стоимостью в конце)

###/wp_root/themes-lubus-noprice
Копировать в `/wp-content/themes/lubus/` **после** копирования `themes-lubus-price`<br>
только изменения для `themes-lubus-price`

Порядок разворачивания сайта:
1. залить /wp_root/wp на свой хостинг
2. в <свой хостинг/домен>/wp-content/themes/lubus/ распаковать содержимое папки /wp_root/themes-lubus-price (на данном этапе готов сайт со стоимостью)
3. в <свой хостинг/домен>/wp-content/themes/lubus/ распаковать содержимое папки /wp_root/themes-lubus-noprice (на данном этапе готов сайт без стоимости)

Аккаунт к WP:<br>
`editor`<br>
`wp_machinelad`<br>

Версия: `WordPress 4.4.2`<br>
