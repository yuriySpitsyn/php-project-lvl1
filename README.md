# php-project-lvl1
[![Maintainability](https://api.codeclimate.com/v1/badges/27bcc9e38fe1b32f0d50/maintainability)](https://codeclimate.com/github/yuriySpitsyn/php-project-lvl1/maintainability)
[![Build Status](https://travis-ci.org/yuriySpitsyn/php-project-lvl1.svg?branch=master)](https://travis-ci.org/yuriySpitsyn/php-project-lvl1)

Установка пакета:

- Устанавливаем глобально пакет
	 
	`composer global require spitsyn/php-project-lvl1:dev-master`
	
- Узнаем путь директории с ссылками на исполняемые файлы

	`composer global config bin-dir --absolute`

- Открываем редактирование файла ~/.bashrc

	`nano ~/.bashrc`

- Добавляем этот путь в конец файла ~/.bashrc для запуска приложений из любой точки файловой системы (вместо yur, должен быть ваш пользователь)

	`export PATH=$PATH:/home/yur/.composer/vendor/bin`
 
- Перезапускаем ~/.bashrc

	`source ~/.bashrc`
	
[![asciicast](https://asciinema.org/a/sPQeg2n0dXik5h7DObGWmLImd.svg)](https://asciinema.org/a/sPQeg2n0dXik5h7DObGWmLImd)

Запуск brain-even:

[![asciicast](https://asciinema.org/a/cAU5ITvOiE8RfrHykkuR8LYZW.svg)](https://asciinema.org/a/cAU5ITvOiE8RfrHykkuR8LYZW)
