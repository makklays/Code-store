<?php

/*  Знания MySQL + оптимизировать запросы

Имеется 3 таблицы: info, data, link, есть запрос для получения данных:
select * from data,link,info where link.info_id = info.id and link.data_id = data.id
предложить варианты оптимизации:
    таблиц
    запроса.

select * from data,link,info where link.info_id = info.id and link.data_id = data.id

Запросы для создания таблиц:
CREATE TABLE `info` (
    `id` int(11) NOT NULL auto_increment,
    `name` varchar(255) default NULL,
    `desc` text default NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

CREATE TABLE `data` (
    `id` int(11) NOT NULL auto_increment,
    `date` date default NULL,
    `value` INT(11) default NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

CREATE TABLE `link` (
    `data_id` int(11) NOT NULL,
    `info_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;



Ответ:

Как вы узнали, что здесь нужно что-то оптимизировать?
Что именно не устраивает в текущей работе таблиц и запросов?

без данных не просто понять как выделить сущности
(связь таблиц один-ко-многим info - data и промежуточная таблица link), но

Оптимизация запроса:
SELECT * FROM info in LEFT JOIN link li ON (in.id = li.info_id)
    LEFT JOIN data da ON (li.data_id = da.id)

Оптимизация таблиц:
CREATE TABLE `info` (
    `id` int(11) unsigned NOT NULL auto_increment,
    `name` varchar(255) default NULL,
    `desc` text default NULL,
    `date` date default '0000-00-00',
    `value` varchar(255) default NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE info CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

При необходимости (если нужны транзакции и т.д.) необходимо выполнить:
ALTER TABLE `info` ENGINE=INNODB

Оптимизация запроса, после оптимизации таблиц:
SELECT * FROM info

index-ов нет - оптимизировать нечего;
выборка по одной таблице происходит в разы быстрее, чем выборка с LEFT JOIN или WHERE (по нескольким таблицам),
что покажет выборка с EXPLAIN (число строк);

Упростили запрос выбоки и скорость выборки результатов
*/