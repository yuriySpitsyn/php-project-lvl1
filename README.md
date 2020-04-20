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

Установка пакета:

[![asciicast](https://asciinema.org/a/322133.svg)](https://asciinema.org/a/322133)

Запуск brain-even:

[![asciicast](https://asciinema.org/a/322135.svg)](https://asciinema.org/a/322135)

Запуск brain-calc:

[![asciicast](https://asciinema.org/a/322137.svg)](https://asciinema.org/a/322137)