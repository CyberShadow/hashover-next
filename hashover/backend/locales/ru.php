<?php

// Copyright (C) 2015-2018 Jacob Barkdull
// This file is part of HashOver.
//
// I, Jacob Barkdull, hereby release this work into the public domain.
// This applies worldwide. If this is not legally possible, I grant any
// entity the right to use this work for any purpose, without any
// conditions, unless such conditions are required by law.


// English text for forms, buttons, links, and tooltips
$locale = array (
	'comment-form'		=> 'Пишите комментарий тут...',
	'reply-form'		=> 'Пишите ответ тут...',
	'comment-formatting'	=> 'Разметка',
	'accepted-format'	=> 'Поддержка %s',
	'accepted-html'		=> '&lt;b&gt;, &lt;strong&gt;, &lt;u&gt;, &lt;i&gt;, &lt;em&gt;, &lt;s&gt;, &lt;big&gt;, &lt;small&gt;, &lt;sup&gt;, &lt;sub&gt;, &lt;pre&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;, &lt;blockquote&gt;, &lt;code&gt; экранирует HTML, адреса URL автоматически становятся ссылками, и [img]адрес[/img] будет открываться в новой вкладке.',
	'accepted-markdown'	=> '**Жирный**, _подчеркнутый_, *курсив*, ~~зачеркнутый~~, `подсвеченный`, ```код``` экранирует HTML. HTML и Markdown могут быть использованны вместе в одном комментарии..',
	'post-button'		=> 'Отправить',
	'login'			=> 'Имя',
	'login-tip'		=> 'Имя (необязательно)',
	'logout'		=> 'Выйти',
	'be-first-name'		=> 'Еще комментариев нет.',
	'pending-name'		=> 'В ожидании...',
	'deleted-name'		=> 'Удалено...',
	'error-name'		=> 'Ошибка...',
	'be-first-note'		=> 'Оставьте первый комментарий!',
	'pending-note'		=> 'Этот комментарий в ожидании.',
	'deleted-note'		=> 'Этот комментарий был удален..',
	'error-note'		=> 'Что-то пошло не так. Не удалось получить этот комментарий.',
	'options'		=> 'Настройки',
	'cancel'		=> 'Отмена',
	'reply-to-comment'	=> 'Ответить на этот комментарий',
	'edit-your-comment'	=> 'Редактировать ваш комментарий',
	'optional'		=> 'Необязательно',
	'required'		=> 'Обязательно',
	'name'			=> 'Имя',
	'name-tip'		=> 'Имя (%s)',
	'password'		=> 'Пароль',
	'password-tip'		=> 'Пароль (%s, разрешает редактировать или удалить этот комментарий)',
	'confirm-password'	=> 'Подтвердить Пароль',
	'email'			=> 'Адрес E-mail',
	'email-tip'		=> 'Адрес E-mail (%s, для оповещений)',
	'website'		=> 'Сайт',
	'website-tip'		=> 'Сайт (%s)',
	'logged-in'		=> 'Вы успешно зашли в систему!',
	'logged-out'		=> 'Вы успешно вышли из системы.',
	'comment-needed'	=> 'Ваш комментарий недопустим. Пожалуйста, попробуйте снова.',
	'reply-needed'		=> 'Ваш ответ недопустим. Пожалуйста, попробуйте снова.',
	'field-needed'		=> 'Поле "%s" обязательно.',
	'post-fail'		=> 'Ошибка! У вас отсутствуют необходимые разрешения для этого действия.',
	'comment-deleted'	=> 'Комментарий Удален!',
	'post-reply'		=> 'Написать Ответ',
	'delete'		=> 'Удалить',
	'permanently-delete'	=> 'Удалить Навсегда',
	'subscribe'		=> 'Оповещать меня об ответах',
	'subscribe-tip'		=> 'Подписаться на оповещения по e-mail',
	'edit-comment'		=> 'Редактировать комментарий',
	'status'		=> 'Состояние',
	'status-approved'	=> 'Одобрено',
	'status-pending'	=> 'В ожидании',
	'status-deleted'	=> 'Помечено удаленным',
	'save-edit'		=> 'Сохранить',
	'no-email-warning'	=> 'Вы не сможете получать уведомления об ответах на ваш комментарий если не укажете адрес e-mail.',
	'invalid-email'		=> 'Указанный адрес e-mail неверный.',
	'delete-comment'	=> 'Вы уверенны что хотите удалить этот комментарий?',
	'post-comment-on'	=> array ('Написать Комментарий', 'Написать комментарий к "%s"'),
	'popular-comments'	=> array ('Самый Популярный Комментарий', 'Самые Популярные Комментарии'),
	'showing-comments'	=> array ('Показано %d Комментарий', 'Показано %d Комментариев'),
	'count-link'		=> array ('%d Комментарий', '%d Комментариев'),
	'count-replies'		=> array ('%d включая ответ', '%d включая ответы'),
	'sort'			=> 'Порядок',
	'sort-ascending'	=> 'По порядку',
	'sort-descending'	=> 'В обратном порядке',
	'sort-by-date'		=> 'Самые новые',
	'sort-by-likes'		=> 'Самые популярные',
	'sort-by-replies'	=> 'По ответам',
	'sort-by-discussion'	=> 'По обсуждении',
	'sort-by-popularity'	=> 'По популярности',
	'sort-by-name'		=> 'По автору',
	'sort-threads'		=> 'Темы',
	'thread'		=> 'В ответе %s',
	'thread-tip'		=> 'К началу темы',
	'comments'		=> 'Комментарии',
	'replies'		=> 'Ответы',
	'edit'			=> 'Редактировать',
	'reply'			=> 'Ответить',
	'like'			=> array ('понравилось', 'понравилось'),
	'liked'			=> 'Понравилось',
	'unlike'		=> 'Отменить голос',
	'like-comment'		=> 'Мне Нравится этот комментарий',
	'liked-comment'		=> 'Мне не \'Нравится\' этот комментарий',
	'dislike'		=> array ('не понравилось', 'не понравилось'),
	'disliked'		=> 'Не понравилось',
	'dislike-comment'	=> 'Мне \'Не Нравится\' этот комментарий.',
	'disliked-comment'	=> 'Вам \'Не Понравился\' этот комментарий.',
	'commenter-tip'		=> 'Вы не получите уведомление по e-mail',
	'subscribed-tip'	=> 'будут уведомлены по e-mail',
	'unsubscribed-tip'	=> 'не подписаны на оповещения e-mail',
	'show-other-comments'	=> array ('Показать Еще %d Комментарий', 'Показать Еще %d Комментариев'),
	'show-number-comments'	=> array ('Показать %d Комментарий', 'Показать %d Комментариев'),
	'date-time'		=> '%s в %s',
	'date-years'		=> array ('%d год назад', '%d года назад'),
	'date-months'		=> array ('%d месяц назад', '%d месяцев назад'),
	'date-days'		=> array ('%d день назад', '%d дней назад'),
	'date-today'		=> '%s сегодня',
	'date-day-names'	=> array ('воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'),
	'date-month-names'	=> array ('январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'),
	'untitled'		=> 'Без названия',
	'external-image-tip'	=> 'Кликнете для просмотра внешнего изображения',
	'loading'		=> 'Загрузка...',
	'click-to-close'	=> 'Кликнете для закрытия',
	'hashover-comments'	=> 'Комментарии HashOver',
	'rss-feed'		=> 'Поток RSS',
	'source-code'		=> 'Исходный Код'
);