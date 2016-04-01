# Landing Page machine-learning

##/html/
Готовая верстка.

##/wp_root/
Папка с WordPress и БД.<br>
Путь к папке с темой: `/wp-content/themes/lubus/`<br>

В файле <b>wp-config.php</b> нужно прописать доступ к БД (см. <b>wp-config-sample.php</b>)<br>

Также нужно изменить ссылки на сайт в БД (через phpMyAdmin или сразу в файле lpml.sql в любом текстовом редакторе).
Подробнее см. [Перенос WordPress на другой домен](http://pro-wordpress.ru/chast-1-nastraivaem-svoj-blog/nastrojka/perenos-wordpress-bloga-na-drugoj-xosting-ili-domen.php)

###/wp_root/themes-lubus-price
Копировать в `<свой хостинг/домен>/wp-content/themes/lubus/`<br>
Папка с готовой темой (по умолчанию сайт будет **со стоимостью в конце**)

###/wp_root/themes-lubus-noprice
Копировать в `<свой хостинг/домен>/wp-content/themes/lubus/` **после** копирования `themes-lubus-price`<br>
Только изменения для `themes-lubus-price` для версии сайта **без стоимости в конце**

Порядок разворачивания сайта:<br>
1. залить /wp_root/wp на свой хостинг<br>
2. в `<свой хостинг/домен>/wp-content/themes/lubus/` скопировать содержимое папки `/wp_root/themes-lubus-price` (на данном этапе готов сайт со стоимостью)<br>
3. в `<свой хостинг/домен>/wp-content/themes/lubus/` скопировать содержимое папки `/wp_root/themes-lubus-noprice` (на данном этапе готов сайт без стоимости)<br>

Аккаунт к WP:<br>
`editor`<br>
`wp_machinelad`<br>

Версия: `WordPress 4.4.2`<br>
