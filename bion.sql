-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 23 2018 г., 10:42
-- Версия сервера: 10.1.34-MariaDB
-- Версия PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bion`
--

-- --------------------------------------------------------

--
-- Структура таблицы `consultances`
--

CREATE TABLE `consultances` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `when` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `consultances`
--

INSERT INTO `consultances` (`id`, `name`, `phone`, `city`, `when`, `interest`, `lang`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '+7 888 888 88 88', 'Алматы', 'До обеда', 'Дом', 'Русский', 'new', '2018-07-19 11:55:37', '2018-07-19 11:55:37', NULL),
(2, 'Admin', '+7 888 888 88 88', 'Алматы', 'До обеда', 'Дом', 'Русский', 'new', '2018-07-19 11:56:34', '2018-07-19 11:56:34', NULL),
(3, 'Абулхаир', '+7 899 546 5 65 6', 'Шымкент', 'До обеда', NULL, 'Русский', 'new', '2018-07-19 17:56:39', '2018-07-19 17:56:39', NULL),
(4, 'Абулхаир', '+7 899 546 5 65 6', 'Шымкент', 'До обеда', NULL, NULL, 'new', '2018-07-19 17:57:17', '2018-07-19 17:57:17', NULL),
(5, 'Абулхаир', '+7 899 546 5 65 6', 'Шымкент', 'До обеда', NULL, NULL, 'new', '2018-07-19 18:20:22', '2018-07-19 18:20:22', NULL),
(6, 'Абулхаир', '+7 899 546 5 65 6', 'Шымкент', 'До обеда', NULL, NULL, 'new', '2018-07-19 18:32:08', '2018-07-19 18:32:08', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `city`, `text`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Слава', '+7 7777 77 7 77', NULL, 'ergerger', 'new', '2018-07-19 05:08:32', '2018-07-19 05:08:32', NULL),
(2, 'Слава', '+7 7777 77 7 77', NULL, 'asdasdasda', 'new', '2018-07-19 05:09:15', '2018-07-19 05:09:15', NULL),
(3, 'Слава', '+7 7777 77 7 77', NULL, 'asdasdasda', 'new', '2018-07-19 05:09:34', '2018-07-19 05:09:34', NULL),
(4, 'Айбек', '+7 7777 77 7 77', 'Алматы', 'Етст Айбека', 'new', '2018-07-19 05:10:32', '2018-07-19 05:10:32', NULL),
(5, 'Ainur', '+7 888 888 88 88', 'Алматы', 'TRe Ainbur btre', 'new', '2018-07-19 05:11:23', '2018-07-19 05:11:23', NULL),
(6, 'Слава2', '+7 7777 77 7 77', 'Алматы', 'sadasdas', 'new', '2018-07-19 05:17:42', '2018-07-19 05:17:42', NULL),
(7, 'Слава', '+7 7777 77 7 77', 'Алматы', 'asdasd', 'new', '2018-07-19 05:28:52', '2018-07-19 05:28:52', NULL),
(8, 'Ulki', '+7 888 888 88 88', 'Алматы', 'asdasdasdasdaw qweqwe', 'new', '2018-07-19 05:29:36', '2018-07-19 05:29:36', NULL),
(9, 'Dakka', '+7 7777 77 7 77', 'Шымкент', 'qweqweqwe', 'new', '2018-07-19 11:38:06', '2018-07-19 11:38:06', NULL),
(10, 'Абулхаир', '+7 899 546 5 65 6', 'Шымкент', 'asd', 'new', '2018-07-19 18:21:21', '2018-07-19 18:21:21', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_07_19_103242_create_messages_table', 1),
(2, '2018_07_19_174236_create_consultances_table', 2),
(3, '2018_07_19_232556_create_textblocks_table', 3),
(4, '2018_07_23_135516_create_reviews_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Trtdgsdfg dsfgdfg faver', '2018-07-23 08:12:54', '2018-07-23 08:12:54', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `textblocks`
--

CREATE TABLE `textblocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `textblocks`
--

INSERT INTO `textblocks` (`id`, `title`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Главный слайдер', '<div class=\"carousel-item active\" style=\"background-image: url(img/common/index/slide.jpg);\">\r\n                    <h3>Лидеры в области качественной оценки</h3>\r\n                    <p>Оценка эффективности деятельности orem ipsum dolor sit amet, consectetur adipisicing elit. Neque necessitatibus repudiandae praesentium asperiores animi sunt quia quo modi in! Corporis et porro expedita nesciunt corrupti similique unde dolores enim, obcaecati amet accusantium quis numquam temporibus quaerat, impedit culpa fuga voluptates. Officia molestiae ullam ut sequi</p>\r\n                </div>\r\n                <div class=\"carousel-item\" style=\"background-image: url(img/common/index/slide.jpg);\">\r\n                    <h3>Лидеры в области качественной оценки</h3>\r\n                    <p>Оценка эффективности деятельности orem ipsum dolor sit amet, consectetur adipisicing elit. Neque necessitatibus repudiandae praesentium asperiores animi sunt quia quo modi in! Corporis et porro expedita nesciunt corrupti similique unde dolores enim, obcaecati amet accusantium quis numquam temporibus quaerat, impedit culpa fuga voluptates. Officia molestiae ullam ut sequi</p>\r\n                </div>\r\n                <div class=\"carousel-item\" style=\"background-image: url(img/common/index/slide.jpg);\">\r\n                    <h3>Лидеры в области качественной оценки</h3>\r\n                    <p>Оценка эффективности деятельности orem ipsum dolor sit amet, consectetur adipisicing elit. Neque necessitatibus repudiandae praesentium asperiores animi sunt quia quo modi in! Corporis et porro expedita nesciunt corrupti similique unde dolores enim, obcaecati amet accusantium quis numquam temporibus quaerat, impedit culpa fuga voluptates. Officia molestiae ullam ut sequi</p>\r\n                </div>\r\n                <div class=\"carousel-item\" style=\"background-image: url(img/common/index/slide.jpg);\">\r\n                    <h3>Лидеры в области качественной оценки</h3>\r\n                    <p>Оценка эффективности деятельности orem ipsum dolor sit amet, consectetur adipisicing elit. Neque necessitatibus repudiandae praesentium asperiores animi sunt quia quo modi in! Corporis et porro expedita nesciunt corrupti similique unde dolores enim, obcaecati amet accusantium quis numquam temporibus quaerat, impedit culpa fuga voluptates. Officia molestiae ullam ut sequi</p>\r\n                </div>\r\n                <div class=\"carousel-item\" style=\"background-image: url(img/common/index/slide.jpg);\">\r\n                    <h3>Лидеры в области качественной оценки</h3>\r\n                    <p>Оценка эффективности деятельности orem ipsum dolor sit amet, consectetur adipisicing elit. Neque necessitatibus repudiandae praesentium asperiores animi sunt quia quo modi in! Corporis et porro expedita nesciunt corrupti similique unde dolores enim, obcaecati amet accusantium quis numquam temporibus quaerat, impedit culpa fuga voluptates. Officia molestiae ullam ut sequi</p>\r\n                </div>\r\n            </div>\r\n            <ol class=\"carousel-indicators\">\r\n               <li data-target=\"#mainCarousel\" data-slide-to=\"0\" class=\"active\"></li>\r\n               <li data-target=\"#mainCarousel\" data-slide-to=\"1\"></li>\r\n               <li data-target=\"#mainCarousel\" data-slide-to=\"2\"></li>\r\n               <li data-target=\"#mainCarousel\" data-slide-to=\"3\"></li>\r\n               <li data-target=\"#mainCarousel\" data-slide-to=\"4\"></li>\r\n            </ol>', '2018-07-23 06:48:26', '2018-07-23 07:12:30', NULL),
(2, 'Как оплатить', '<div class=\"my-tab row\">\r\n    <div class=\"col-lg-4 col-12\">\r\n        <img src=\"/img/common/index/pay1.png\" class=\"htp\">\r\n        <div>\r\n            <p class=\"pay-title\">Через банк и карты <br>путем перечисления</p>\r\n            <ul class=\"pay-ul\">\r\n                <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>\r\n                <li>- Оценка транспорта и оборудования</li>\r\n                <li>- Оценка основных средств</li>\r\n                <li>- Оценка других видов имущества</li>\r\n                <li>- Определение справедливой стоимости основных средств для целей учета</li>\r\n            </ul>                       \r\n        </div>\r\n\r\n    </div>\r\n    <div class=\"col-lg-4 col-12\">\r\n        <img src=\"/img/common/index/pay2.png\" class=\"htp\">\r\n        <div>\r\n            <p class=\"pay-title\">Через банк и карты путем перечисления</p>\r\n            <ul class=\"pay-ul\">\r\n                <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>\r\n                <li>- Оценка транспорта и оборудования</li>\r\n                <li>- Оценка основных средств</li>\r\n                <li>- Оценка других видов имущества</li>\r\n                <li>- Определение справедливой стоимости основных средств для целей учета</li>\r\n            </ul>                       \r\n        </div>\r\n\r\n    </div>\r\n    <div class=\"col-lg-4 col-12\">\r\n        <img src=\"/img/common/index/pay3.png\" class=\"htp\">\r\n        <div>\r\n            <p class=\"pay-title\">Через банк и карты путем перечисления</p>\r\n            <ul class=\"pay-ul\">\r\n                <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>\r\n                <li>- Оценка транспорта и оборудования</li>\r\n                <li>- Оценка основных средств</li>\r\n                <li>- Оценка других видов имущества</li>\r\n                <li>- Определение справедливой стоимости основных средств для целей учета</li>\r\n            </ul>                       \r\n        </div>\r\n    </div>\r\n\r\n    <p class=\"payline\">А также вы можете оплатить наши услуги через терминалы Qiwi. <a href=\"#\">Подробнее</a></p>\r\n</div>', '2018-07-23 07:17:23', '2018-07-23 07:17:23', NULL),
(3, 'Наши услуги', '<div class=\"my-tab row actions\">\r\n    <div class=\"col-lg-6 col-12\">\r\n        <img src=\"/img/common/index/action1.png\" class=\"htp\">\r\n        <div>\r\n            <p class=\"pay-title\">Оценка имущества <br>от 4000 тенге</p>\r\n            <ul class=\"pay-ul ul2\">\r\n                <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>\r\n                <li>- Оценка транспорта и оборудования</li>\r\n                <li>- Оценка основных средств</li>\r\n                <li>- Оценка других видов имущества</li>\r\n                <li>- Определение справедливой стоимости основных средств для целей учета</li>\r\n            </ul>\r\n            <button class=\"reqBtn\">Заказать эту услугу</button>                     \r\n        </div>\r\n\r\n    </div>\r\n    <div class=\"col-lg-6 col-12\">\r\n        <img src=\"/img/common/index/action2.png\" class=\"htp auto\">\r\n        <div>\r\n            <p class=\"pay-title\">Оценка транспорта <br>от 2500 тенге</p>\r\n            <ul class=\"pay-ul ul2\">\r\n                <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>\r\n                <li>- Оценка транспорта и оборудования</li>\r\n                <li>- Оценка основных средств</li>\r\n                <li>- Оценка других видов имущества</li>\r\n                <li>- Определение справедливой стоимости основных средств для целей учета</li>\r\n            </ul>\r\n            <button class=\"reqBtn\">Заказать эту услугу</button>                     \r\n        </div>\r\n    </div>\r\n</div>', '2018-07-23 07:20:10', '2018-07-23 07:20:10', NULL),
(4, 'Вакансии', '<div class=\"my-tab row\">\r\n    <div class=\"col-lg-4 col-12\">\r\n        <img src=\"/img/common/index/vacancy.png\" class=\"htp\">\r\n        <div>\r\n            <p class=\"pay-title\">Требуется оценщик с опытом работы в банках</p>\r\n            <ul class=\"pay-ul ul2\">\r\n                <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>\r\n                <li>- Оценка транспорта и оборудования</li>\r\n                <li>- Оценка основных средств</li>\r\n                <li>- Оценка других видов имущества</li>\r\n                <li>- Определение справедливой стоимости основных средств для целей учета</li>\r\n            </ul>\r\n            <button class=\"reqBtn\">Оставить заявку</button>                     \r\n        </div>\r\n\r\n    </div>\r\n    <div class=\"col-lg-4 col-12\">\r\n        <img src=\"/img/common/index/vacancy.png\" class=\"htp\">\r\n        <div>\r\n            <p class=\"pay-title\">Требуется оценщик с опытом работы в банках</p>\r\n            <ul class=\"pay-ul ul2\">\r\n                <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>\r\n                <li>- Оценка транспорта и оборудования</li>\r\n                <li>- Оценка основных средств</li>\r\n                <li>- Оценка других видов имущества</li>\r\n                <li>- Определение справедливой стоимости основных средств для целей учета</li>\r\n            </ul>\r\n            <button class=\"reqBtn\">Оставить заявку</button>                     \r\n        </div>\r\n\r\n    </div>\r\n    <div class=\"col-lg-4 col-12\">\r\n        <img src=\"/img/common/index/vacancy.png\" class=\"htp\">\r\n        <div>\r\n            <p class=\"pay-title\">Требуется оценщик с опытом работы в банках</p>\r\n            <ul class=\"pay-ul ul2\">\r\n                <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>\r\n                <li>- Оценка транспорта и оборудования</li>\r\n                <li>- Оценка основных средств</li>\r\n                <li>- Оценка других видов имущества</li>\r\n                <li>- Определение справедливой стоимости основных средств для целей учета</li>\r\n            </ul>\r\n            <button class=\"reqBtn\">Оставить заявку</button>                     \r\n        </div>\r\n    </div>\r\n\r\n    <p class=\"payline\">Вы можете  предложить свою кандидатуру <a href=\"#\">здесь</a> или напишите на  <a href=\"#\">электронную почту</a>  и прикрепите резюме</p>\r\n</div>', '2018-07-23 07:21:59', '2018-07-23 07:21:59', NULL),
(5, 'Что вас интересует', '<div class=\"col-lg-3 offset-lg-2 hideMob\">\r\n    <img src=\"/img/common/index/waii.png\">\r\n</div>\r\n<div class=\"col-lg-6 hideMob\">\r\n    <h3 class=\"title\">Что вас интересует?</h3>\r\n    <h4>Выберите и закажите услугу здесь!</h4>\r\n    <p class=\"title\">А специальный калькулятор рассчитает Вам стоимость услуги! Быстро и удобно!</p>\r\n    <p class=\"text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut voluptatibus, molestias eum dolor adipisci voluptatum, placeat praesentium cumque error totam aspernatur beatae esse obcaecati quibusdam ducimus odit quis alias sapiente tempore at sed? Neque ipsam ad vero assumenda, a iste recusandae molestias minima ea deleniti quisquam odit repellendus vitae, doloremque nam autem magnam laudantium enim necessitatibus possimus accusamus? Sit, expedita minima dolorem saepe ipsa explicabo ullam officiis quidem omnis doloremque vitae quisquam, perferendis? Quasi ipsum, distinctio sunt sequi beatae minus eveniet velit debitis dolores omnis eaque, voluptates veritatis illo, minima doloribus natus culpa itaque. Commodi nemo adipisci perferendis quos itaque?</p>\r\n    <button>Заказать услугу</button>\r\n</div>\r\n<div class=\"col-12 showMob\">\r\n    <h3 class=\"title\">Что вас интересует?</h3>\r\n    <h4>Выберите и закажите услугу здесь!</h4>\r\n    <img src=\"/img/common/index/waii.png\">\r\n    <button>Заказать услугу</button>\r\n</div>', '2018-07-23 07:23:35', '2018-07-23 07:23:35', NULL),
(6, 'Как мы работаем', '<h3>Как мы работаем</h3>\r\n<h4>Выберите и закажите услугу здесь!</h4>\r\n<p class=\"top\">А специальный калькулятор рассчитает Вам стоимость услуги! Быстро и удобно!</p>\r\n<div class=\"row top\">\r\n    <div class=\"step\">\r\n        <span class=\"num\">1</span>\r\n        <p class=\"title\">Ваш заказ</p>\r\n        <div class=\"desc\">\r\n            <p>Вы выбираете наиболее подходящий вариант решения задачи</p>\r\n            <img src=\"/img/common/index/hww1.png\">\r\n        </div>\r\n    </div>\r\n    <div class=\"step\">\r\n        <span class=\"num\">2</span>\r\n        <p class=\"title\">Изучаем вашу документацию</p>\r\n        <div class=\"desc\">\r\n            <p>Мы изучаем вашу документацию, рассчитываем цену услуги и выбираем оптимальный вариант решения вашей проблемы</p>\r\n            <img src=\"/img/common/index/hww2.png\">\r\n        </div>\r\n    </div>\r\n    <div class=\"step\">\r\n        <span class=\"num\">3</span>\r\n        <p class=\"title\">Заключение договора</p>\r\n        <div class=\"desc\">\r\n            <p>Вы выбираете наиболее подходящий вариант решения задачи</p>\r\n            <img src=\"/img/common/index/hww4.png\">\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"row bot\">\r\n    <div class=\"step\">\r\n        <span class=\"num\">4</span>\r\n        <p class=\"title\">Выезд на объект</p>\r\n        <div class=\"desc\">\r\n            <p>Вы выбираете наиболее подходящий вариант решения задачи</p>\r\n            <img src=\"/img/common/index/hww5.png\">\r\n        </div>\r\n    </div>\r\n    <div class=\"step\">\r\n        <span class=\"num\">5</span>\r\n        <p class=\"title\">Работа над заданием</p>\r\n        <div class=\"desc\">\r\n            <p>Вы выбираете наиболее подходящий вариант решения задачи</p>\r\n            <img src=\"/img/common/index/hww6.png\">\r\n        </div>\r\n    </div>\r\n    <div class=\"step\">\r\n        <span class=\"num\">6</span>\r\n        <p class=\"title\">Готово!</p>\r\n        <div class=\"desc\">\r\n            <p>Вы выбираете наиболее подходящий вариант решения задачи</p>\r\n            <img src=\"/img/common/index/hww7.png\">\r\n        </div>\r\n    </div>     \r\n</div>', '2018-07-23 07:24:53', '2018-07-23 07:24:53', NULL),
(7, 'Нашими услугами уже воспользовались', '<div class=\"carousel slide\" data-ride=\"carousel\" id=\"ps1\">\r\n            <div class=\"carousel-inner\">\r\n                <div class=\"carousel-item active\">\r\n                    <div class=\"row\">\r\n                        <div class=\"col-lg-3 col-4 pi  offset-lg-1\">\r\n                            <img src=\"/img/common/index/kcell.png\" class=\"partner\">\r\n                        </div>\r\n                        <div class=\"col-lg-8 col-8\">\r\n                            <p><b>Kcell</b></p>\r\n                            <p>Заказчик: Транспортный отдел АО “Кселл” АО «Кселл» является оператором сотовой связи, оказывающим услуги в стандарте GSM-900/1800 и UMTS/WCDMA (2100 МГц)</p>\r\n                            <p>Объект: Движимое имущество</p>\r\n                            <p>Цель: Определение рыночной стоимости</p>\r\n                            <p>Назначение: Для принятия управленческих решений</p>\r\n                            <p>Срок оценки: 10 рабочих дней</p>\r\n                        </div>  \r\n                    </div>\r\n                </div>\r\n                <div class=\"carousel-item\">\r\n                    <div class=\"row\">\r\n                        <div class=\"col-lg-3 col-4 pi  offset-lg-1\">\r\n                            <img src=\"/img/common/index/kcell.png\" class=\"partner\">\r\n                        </div>\r\n                        <div class=\"col-lg-8 col-8\">\r\n                            <p><b>Kcell</b></p>\r\n                            <p>Заказчик: Транспортный отдел АО “Кселл” АО «Кселл» является оператором сотовой связи, оказывающим услуги в стандарте GSM-900/1800 и UMTS/WCDMA (2100 МГц)</p>\r\n                            <p>Объект: Движимое имущество</p>\r\n                            <p>Цель: Определение рыночной стоимости</p>\r\n                            <p>Назначение: Для принятия управленческих решений</p>\r\n                            <p>Срок оценки: 10 рабочих дней</p>\r\n                        </div>  \r\n                    </div>\r\n                </div>\r\n                <div class=\"carousel-item\">\r\n                    <div class=\"row\">\r\n                        <div class=\"col-lg-3 col-4 pi  offset-lg-1\">\r\n                            <img src=\"/img/common/index/kcell.png\" class=\"partner\">\r\n                        </div>\r\n                        <div class=\"col-lg-8 col-8\">\r\n                            <p><b>Kcell</b></p>\r\n                            <p>Заказчик: Транспортный отдел АО “Кселл” АО «Кселл» является оператором сотовой связи, оказывающим услуги в стандарте GSM-900/1800 и UMTS/WCDMA (2100 МГц)</p>\r\n                            <p>Объект: Движимое имущество</p>\r\n                            <p>Цель: Определение рыночной стоимости</p>\r\n                            <p>Назначение: Для принятия управленческих решений</p>\r\n                            <p>Срок оценки: 10 рабочих дней</p>\r\n                        </div>  \r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <a class=\"carousel-control-prev\" href=\"#ps1\" role=\"button\" data-slide=\"prev\">\r\n               <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\r\n               <span class=\"sr-only\">Previous</span>\r\n            </a>\r\n            <a class=\"carousel-control-next\" href=\"#ps1\" role=\"button\" data-slide=\"next\">\r\n               <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\r\n               <span class=\"sr-only\">Next</span>\r\n            </a>\r\n        </div>', '2018-07-23 07:27:42', '2018-07-23 07:29:05', NULL),
(8, 'Наши партнеры', '<div class=\"carousel slide\" data-ride=\"carousel\" id=\"ps2\">\r\n            <div class=\"carousel-inner\">\r\n                <div class=\"carousel-item active\">\r\n                    <div class=\"row\">\r\n                        <div class=\"col-lg-3 col-4 pi  offset-lg-1\">\r\n                            <img src=\"/img/common/index/kcell.png\" class=\"partner\">\r\n                        </div>\r\n                        <div class=\"col-lg-8 col-8\">\r\n                            <p><b>Kcell</b></p>\r\n                            <p>Заказчик: Транспортный отдел АО “Кселл” АО «Кселл» является оператором сотовой связи, оказывающим услуги в стандарте GSM-900/1800 и UMTS/WCDMA (2100 МГц)</p>\r\n                            <p>Объект: Движимое имущество</p>\r\n                            <p>Цель: Определение рыночной стоимости</p>\r\n                            <p>Назначение: Для принятия управленческих решений</p>\r\n                            <p>Срок оценки: 10 рабочих дней</p>\r\n                        </div>  \r\n                    </div>\r\n                </div>\r\n                <div class=\"carousel-item\">\r\n                    <div class=\"row\">\r\n                        <div class=\"col-lg-3 col-4 pi  offset-lg-1\">\r\n                            <img src=\"/img/common/index/kcell.png\" class=\"partner\">\r\n                        </div>\r\n                        <div class=\"col-lg-8 col-8\">\r\n                            <p><b>Kcell</b></p>\r\n                            <p>Заказчик: Транспортный отдел АО “Кселл” АО «Кселл» является оператором сотовой связи, оказывающим услуги в стандарте GSM-900/1800 и UMTS/WCDMA (2100 МГц)</p>\r\n                            <p>Объект: Движимое имущество</p>\r\n                            <p>Цель: Определение рыночной стоимости</p>\r\n                            <p>Назначение: Для принятия управленческих решений</p>\r\n                            <p>Срок оценки: 10 рабочих дней</p>\r\n                        </div>  \r\n                    </div>\r\n                </div>\r\n                <div class=\"carousel-item\">\r\n                    <div class=\"row\">\r\n                        <div class=\"col-lg-3 col-4 pi  offset-lg-1\">\r\n                            <img src=\"/img/common/index/kcell.png\" class=\"partner\">\r\n                        </div>\r\n                        <div class=\"col-lg-8 col-8\">\r\n                            <p><b>Kcell</b></p>\r\n                            <p>Заказчик: Транспортный отдел АО “Кселл” АО «Кселл» является оператором сотовой связи, оказывающим услуги в стандарте GSM-900/1800 и UMTS/WCDMA (2100 МГц)</p>\r\n                            <p>Объект: Движимое имущество</p>\r\n                            <p>Цель: Определение рыночной стоимости</p>\r\n                            <p>Назначение: Для принятия управленческих решений</p>\r\n                            <p>Срок оценки: 10 рабочих дней</p>\r\n                        </div>  \r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <a class=\"carousel-control-prev\" href=\"#ps2\" role=\"button\" data-slide=\"prev\">\r\n               <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\r\n               <span class=\"sr-only\">Previous</span>\r\n            </a>\r\n            <a class=\"carousel-control-next\" href=\"#ps2\" role=\"button\" data-slide=\"next\">\r\n               <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\r\n               <span class=\"sr-only\">Next</span>\r\n            </a>\r\n        </div>', '2018-07-23 07:31:20', '2018-07-23 07:31:20', NULL),
(9, 'Наши отчеты принимают', '<div class=\"row banks\">\r\n    <div class=\"col-4 col-md-3\"><img src=\"/img/banks/halykbank.svg\" alt=\"bank\" class=\"bank\"></div>\r\n    <div class=\"col-4 col-md-3\"><img src=\"/img/banks/sberbank.svg\" alt=\"bank\" class=\"bank\"></div>\r\n    <div class=\"col-4 col-md-3\"><img src=\"/img/banks/cesna.png\" alt=\"bank\" class=\"bank\"></div>\r\n    <div class=\"col-4 col-md-3\"><img src=\"/img/banks/fortebank.png\" alt=\"bank\" class=\"bank\"></div>\r\n    <div class=\"col-4 col-md-3\"><img src=\"/img/banks/vtb.png\" alt=\"bank\" class=\"bank\"></div>\r\n    <div class=\"col-4 col-md-3\"><img src=\"/img/banks/nurbank.png\" alt=\"bank\" class=\"bank\"></div>\r\n    <div class=\"col-6 col-md-3\"><img src=\"/img/banks/centercredit.png\" alt=\"bank\" class=\"bank\"></div>\r\n    <div class=\"col-6 col-md-3\"><img src=\"/img/banks/asiacredit.jpg\" alt=\"bank\" class=\"bank\"></div>\r\n    <div class=\"col-12 col-md-3\"><img src=\"/img/banks/eurasian.png\" alt=\"bank\" class=\"bank eur_bank\"></div>\r\n</div>', '2018-07-23 07:33:23', '2018-07-23 07:33:23', NULL),
(10, 'Мы в цифрах', '<div class=\"col-lg-4 col-6\">\r\n    <div class=\"figure\">\r\n        <img src=\"/img/common/index/waif1.png\" alt=\"\">\r\n        <div class=\"right\">\r\n            <p class=\"first\">До<span class=\"spinNumber1\">15</span></p>\r\n            <p class=\"text\">Опыт лицензированных оценщиков</p>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"col-lg-4 col-6\">\r\n    <div class=\"figure\">\r\n        <img src=\"/img/common/index/waif2.png\" alt=\"\">\r\n        <div class=\"right\">\r\n            <p class=\"first\"><span class=\"spinNumber2\">10</span>лет</p>\r\n            <p class=\"text\">Успешной работы в сфере оценочного бизнеса</p>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"col-lg-4 col-6\">\r\n    <div class=\"figure\">\r\n        <img src=\"/img/common/index/waif3.png\" alt=\"\">\r\n        <div class=\"right\">\r\n            <p class=\"first\">До<span class=\"spinNumber3\">8500</span></p>\r\n            <p class=\"text\">Довольных клиентов за 10 лет</p>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"col-lg-4 col-6\">\r\n    <div class=\"figure\">\r\n        <img src=\"/img/common/index/waif4.png\" alt=\"\">\r\n        <div class=\"right\">\r\n            <p class=\"first\">До<span class=\"spinNumber4\">35%</span></p>\r\n            <p class=\"text\">Составляет прирост числа клиентов за прошедший год</p>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"col-lg-4 col-6\">\r\n    <div class=\"figure\">\r\n        <img src=\"/img/common/index/waif5.png\" alt=\"\">\r\n        <div class=\"right\">\r\n            <p class=\"first\">До<span class=\"spinNumber5\">559</span></p>\r\n            <p class=\"text\">Миллиардов тенге общая стоимость объектов за последние 3 года</p>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"col-lg-4 col-6\">\r\n    <div class=\"figure\">\r\n        <img src=\"/img/common/index/waif6.png\" alt=\"\">\r\n        <div class=\"right\">\r\n            <p class=\"first\">До<span class=\"spinNumber6\">1500</span></p>\r\n            <p class=\"text\">Компаний работают с нами каждый год</p>\r\n        </div>\r\n    </div>\r\n</div>', '2018-07-23 07:34:50', '2018-07-23 07:34:50', NULL),
(11, 'Почему выгодно работать с нами', '<div class=\"col-lg-3 col-6 prof\">\r\n    <img src=\"/img/common/index/profit1.png\" alt=\"\">\r\n    <p class=\"title\">До 20% экономии</p>\r\n    <p class=\"text\">при заказе оценки у нас</p>\r\n</div>\r\n<div class=\"col-lg-3 col-6 prof\">\r\n    <img src=\"/img/common/index/profit2.png\" alt=\"\">\r\n    <p class=\"title\">15 лицензированных</p>\r\n    <p class=\"text\">оценщиков и помощников узкой специализации</p>\r\n</div>\r\n<div class=\"col-lg-3 col-6 prof\">\r\n    <img src=\"/img/common/index/profit3.png\" alt=\"\">\r\n    <p class=\"title\">3500 проектов</p>\r\n    <p class=\"text\">принято без претензий</p>\r\n</div>\r\n<div class=\"col-lg-3 col-6 prof\">\r\n    <img src=\"/img/common/index/profit4.png\" alt=\"\">\r\n    <p class=\"title\">85% заказчиков</p>\r\n    <p class=\"text\">становятся нашими клиентами</p>\r\n</div>', '2018-07-23 07:36:11', '2018-07-23 07:36:11', NULL),
(12, 'Наши оценщики уже работали в следующих сферах', '<div class=\"row\">\r\n    <div class=\"exp\">\r\n        <img src=\"/img/common/index/profit1.png\" alt=\"\">\r\n        <p class=\"title\">Сторительство</p>\r\n        <a href=\"#exp\">\r\n            <p class=\"text\">подробнее</p>\r\n        </a>\r\n    </div>\r\n    <div class=\"exp\">\r\n        <img src=\"/img/common/index/profit2.png\" alt=\"\">\r\n        <p class=\"title\">Электроэнергетика</p>\r\n        <a href=\"#exp\">\r\n            <p class=\"text\">подробнее</p>\r\n        </a>\r\n    </div>\r\n    <div class=\"exp\">\r\n        <img src=\"/img/common/index/profit3.png\" alt=\"\">\r\n        <p class=\"title\">Крупный ретейл</p>\r\n        <a href=\"#exp\">\r\n            <p class=\"text\">подробнее</p>\r\n        </a>\r\n    </div>\r\n    <div class=\"exp\">\r\n        <img src=\"/img/common/index/profit4.png\" alt=\"\">\r\n        <p class=\"title\">Машиностроение</p>\r\n        <a href=\"#exp\">\r\n            <p class=\"text\">подробнее</p>\r\n        </a>\r\n    </div>\r\n    <div class=\"exp\">\r\n        <img src=\"/img/common/index/profit4.png\" alt=\"\">\r\n        <p class=\"title\">Сфера услуг</p>\r\n        <a href=\"#exp\">\r\n            <p class=\"text\">подробнее</p>\r\n        </a>\r\n    </div>\r\n</div>  \r\n<div class=\"row\">\r\n    <div class=\"exp\">\r\n        <img src=\"/img/common/index/profit1.png\" alt=\"\">\r\n        <p class=\"title\">Добыча полезных ископаемых</p>\r\n        <a href=\"#exp\">\r\n            <p class=\"text\">подробнее</p>\r\n        </a>\r\n    </div>\r\n    <div class=\"exp\">\r\n        <img src=\"/img/common/index/profit2.png\" alt=\"\">\r\n        <p class=\"title\">Интеллектуальная собственность</p>\r\n        <a href=\"#exp\">\r\n            <p class=\"text\">подробнее</p>\r\n        </a>\r\n    </div>\r\n    <div class=\"exp\">\r\n        <img src=\"/img/common/index/profit3.png\" alt=\"\">\r\n        <p class=\"title\">Медицина и фармацевтика</p>\r\n        <a href=\"#exp\">\r\n            <p class=\"text\">подробнее</p>\r\n        </a>\r\n    </div>\r\n    <div class=\"exp\">\r\n        <img src=\"/img/common/index/profit4.png\" alt=\"\">\r\n        <p class=\"title\">Сельское хозяйство</p>\r\n        <a href=\"#exp\">\r\n            <p class=\"text\">подробнее</p>\r\n        </a>\r\n    </div>\r\n    <div class=\"exp\">\r\n        <img src=\"/img/common/index/profit4.png\" alt=\"\">\r\n        <p class=\"title\">Оптовая и розничная торговля</p>\r\n        <a href=\"#exp\">\r\n            <p class=\"text\">подробнее</p>\r\n        </a>\r\n    </div>\r\n</div>', '2018-07-23 07:37:39', '2018-07-23 07:37:39', NULL),
(13, 'Лицензии', '<div>\r\n    <a href=\"/img/common/slide/lic-1.jpg\" data-lightbox=\"roadtrip\"><img src=\"/img/common/slide/lic-1.jpg\" alt=\"\" class=\"lic\"></a>\r\n</div>\r\n<div>\r\n    <a href=\"/img/common/slide/lic-1.jpg\" data-lightbox=\"roadtrip\"><img src=\"/img/common/slide/lic-1.jpg\" alt=\"\" class=\"lic\"></a>\r\n</div>\r\n<div>\r\n    <a href=\"/img/common/slide/lic-1.jpg\" data-lightbox=\"roadtrip\"><img src=\"/img/common/slide/lic-1.jpg\" alt=\"\" class=\"lic\"></a>\r\n</div>\r\n<div>\r\n    <a href=\"/img/common/slide/lic-1.jpg\" data-lightbox=\"roadtrip\"><img src=\"/img/common/slide/lic-1.jpg\" alt=\"\" class=\"lic\"></a>\r\n</div>\r\n<div>\r\n    <a href=\"/img/common/slide/lic-1.jpg\" data-lightbox=\"roadtrip\"><img src=\"/img/common/slide/lic-1.jpg\" alt=\"\" class=\"lic\"></a>\r\n</div>\r\n<div>\r\n    <a href=\"/img/common/slide/lic-1.jpg\" data-lightbox=\"roadtrip\"><img src=\"/img/common/slide/lic-1.jpg\" alt=\"\" class=\"lic\"></a>\r\n</div>', '2018-07-23 07:40:04', '2018-07-23 08:20:06', NULL),
(14, 'О компании', '<p>Оценочная компания \"Бион\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>\r\n<p>Гражданско-правовая ответственность \"Бион\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>\r\n<p class=\"hideMobAbout\">Оценочная компания \"Бион\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>\r\n<p class=\"hideMobAbout\">Филиалы компании \"Бион\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>\r\n<p class=\"hideMobAbout\">Оценочная компания \"Бион\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>\r\n<span id=\"moreInfo\"></span>\r\n<div class=\"hideAbout\">\r\n<p>Оценочная компания \"Бион\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>\r\n<p>Гражданско-правовая ответственность \"Бион\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>\r\n<p>Оценочная компания \"Бион\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>\r\n<p>Филиалы компании \"Бион\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>\r\n<p>Оценочная компания \"Бион\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>', '2018-07-23 07:42:49', '2018-07-23 07:42:49', NULL),
(15, 'Благодарность  за работу', '<div class=\"col-lg-7 row\">\r\n    <div class=\"col-lg-6 offset-lg-6\">\r\n    <h3>Благодарность! <br> <b>за работу</b></h3>\r\n    <p class=\"text\">Благополучное развитие компании во многом зависит не только от действий руководства, но и от того насколько продуктивна работа сотрудников. Когда есть поощрения, люди будут обязательно стараться. Компания может стимулировать не только материально, но и морально - объявить благодарность за работу.</p>\r\n    <p class=\"author\">\r\n        С уважением, <br> Жаркынбeк Темирлан\r\n    </p>                \r\n    </div>\r\n</div>\r\n<div class=\"col-lg-5\">\r\n    <p class=\"title\">Оставьте отзыв о нашей работе</p>\r\n    <p class=\"text\">Дорогие друзья! Мы работаем Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque laudantium, quibusdam atque vero impedit cupiditate quod doloribus ratione iure et sint, saepe, minima ut possimus minus in, dolorum nesciunt corporis eveniet neque. Vitae obcaecati perferendis, saepe quae suscipit temporibus, adipisci neque ducimus ad quia voluptatem mollitia quo harum. Reiciendis, animi.</p>\r\n    <form action=\"/send-review\" method=\"post\">\r\n        <textarea name=\"text\" class=\"form-control testi\" placeholder=\"Люди вообще хорошие, только им надо напоминать об этом...\"></textarea>\r\n        <button class=\"sendReview testi\">Отправить и опубликовать</button>\r\n        <p class=\"afterBtn\">Спасибо вам заранее за ваши отзывы - они важны для нас и вдохновляют нас для лучшей работы!</p>\r\n   <input type=\"hidden\" name=\"_token\" value=\"crOtrAVO6TybbdriPM6MucYfpjqeqs3fBnPIkHm0\">\r\n</form>\r\n</div>', '2018-07-23 07:44:37', '2018-07-23 08:12:38', NULL),
(16, 'Уделите немного времени', '<div class=\"col-lg-3\">\r\n    <p class=\"title\">А откуда вы узнали о нашей компании?</p>\r\n    <label class=\"radio\">Поисковая система\r\n      <input type=\"radio\" name=\"radio\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">Соц. сети\r\n      <input type=\"radio\" name=\"radio\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">От друзей\r\n      <input type=\"radio\" name=\"radio\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">СМИ\r\n      <input type=\"radio\" name=\"radio\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">Другое\r\n      <input type=\"radio\" name=\"radio\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n</div>\r\n<div class=\"col-lg-3\">\r\n    <p class=\"title\">Сколько этажные городы будут на новом городе Shynkent City?</p>\r\n    <label class=\"radio\">Поисковая система\r\n      <input type=\"radio\" name=\"floor\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">Соц. сети\r\n      <input type=\"radio\" name=\"floor\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">От друзей\r\n      <input type=\"radio\" name=\"floor\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">СМИ\r\n      <input type=\"radio\" name=\"floor\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">Другое\r\n      <input type=\"radio\" name=\"floor\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n</div>\r\n<div class=\"col-lg-3\">\r\n    <p class=\"title\">Как сказывается на вашем бизнесе курс доллара?</p>\r\n    <label class=\"radio\">Поисковая система\r\n      <input type=\"radio\" name=\"dollar\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">Соц. сети\r\n      <input type=\"radio\" name=\"dollar\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">От друзей\r\n      <input type=\"radio\" name=\"dollar\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">СМИ\r\n      <input type=\"radio\" name=\"dollar\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">Другое\r\n      <input type=\"radio\" name=\"dollar\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n</div>\r\n<div class=\"col-lg-3\">\r\n    <p class=\"title\">Какой иностранный язык вы хотели бы изучать?</p>\r\n    <label class=\"radio\">Поисковая система\r\n      <input type=\"radio\" name=\"lang\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">Соц. сети\r\n      <input type=\"radio\" name=\"lang\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">От друзей\r\n      <input type=\"radio\" name=\"lang\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">СМИ\r\n      <input type=\"radio\" name=\"lang\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n    <label class=\"radio\">Другое\r\n      <input type=\"radio\" name=\"lang\">\r\n      <span class=\"checkmark\"></span>\r\n    </label>\r\n</div>', '2018-07-23 07:47:07', '2018-07-23 07:47:07', NULL),
(17, 'Футер', '<div class=\"row footerRow\">\r\n    <div class=\"col-lg-12\"></div>\r\n    <div class=\"col-lg-6 leftFooter\">\r\n        <p class=\"text\">Современные сайты Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eius doloribus laborum libero odit commodi dolores at. Illo quas sit molestias modi impedit delectus nemo, nesciunt adipisci perspiciatis ut, eos.</p>\r\n        <div class=\"f-soc\">\r\n            <a href=\"#\"><span></span></a>\r\n            <a href=\"#\"><span></span></a>\r\n            <a href=\"#\"><span></span></a>\r\n        </div>\r\n        <p class=\"beforeForm\">\r\n            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima? Ab consequatur deserunt laudantium, obcaecati iste accusamus adipisci saepe dolorum.\r\n        </p>\r\n        <form action=\"#\">\r\n            <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"Подпишитесь на нашу рассылку\">\r\n            <button class=\"signb\">Подписаться</button>\r\n        </form>\r\n        <p class=\"afterForm\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequatur, rem commodi magni neque deserunt.</p>\r\n    </div>\r\n    <div class=\"col-lg-6 row rightFooter\">\r\n        <div class=\"col-lg-4\">\r\n            <p class=\"title\">Главное меню</p>\r\n            <a href=\"#\" class=\"f-link\">О компании</a>\r\n            <a href=\"#\" class=\"f-link\">Наши услуги</a>\r\n            <a href=\"#\" class=\"f-link\">Проекты</a>\r\n            <a href=\"#\" class=\"f-link\">Контакты</a>\r\n            <a href=\"#\" class=\"f-link\">Документы</a>\r\n            <a href=\"#\" class=\"f-link\">Карта сайта</a>\r\n            <a href=\"#\" class=\"f-link\">Оставить отзыв</a>\r\n        </div>\r\n        <div class=\"col-lg-8\">\r\n            <p class=\"title\">Полезные ссылки</p>\r\n            <a href=\"#\" class=\"f-link\">bilim.kz - сайт грантов для жителей Азии</a>\r\n            <a href=\"#\" class=\"f-link\">facebook.com - сайт грантов для жителей Азии</a>\r\n            <a href=\"#\" class=\"f-link\">vc.com - сайт грантов для жителей Азии</a>\r\n            <a href=\"#\" class=\"f-link\">gradustudyabroad.com - сайт грантов для жителей Азии</a>\r\n            <a href=\"#\" class=\"f-link\">bilim.kz - сайт грантов для жителей Азии</a>\r\n            <a href=\"#\" class=\"f-link\">bilim.kz - сайт грантов для жителей Азии</a>\r\n            <a href=\"#\" class=\"f-link\">bilim.kz - сайт грантов для жителей Азии</a>\r\n        </div>\r\n    </div>\r\n</div>\r\n<p class=\"afterRow\">В этом разделе материалы размещаются Lorem ipsum dolor sit amet. <span>BION Group, 2018</span></p>\r\n<div class=\"row lastRow\">\r\n    <div>\r\n    </div>\r\n        <a href=\"#\">Разработано в Lab Graphics</a>\r\n</div>', '2018-07-23 07:48:30', '2018-07-23 07:48:30', NULL),
(18, 'Всплывающее окно телефонов', '<div class=\"phone-popup\" v-show=\"showPhone\">\r\n        <p class=\"phone\" @click=\"showPhone = !showPhone\">+7 (725) 246 71 45</p>\r\n        <p class=\"text\">Call-center города Шымкент</p>\r\n    <hr>\r\n    <div class=\"phone-wrap\">\r\n        <div class=\"phone-inner-wrap\">\r\n            <p class=\"l-phone\">+7 (727) 395 22 96</p>\r\n            <p class=\"l-text\">Call-center города Алматы</p>\r\n        </div>\r\n        <span class=\"callBtn\">\r\n            <img src=\"/img/common/icons/phone.png\">\r\n        </span>\r\n    </div>\r\n    <hr>\r\n    <div class=\"phone-wrap\">\r\n        <div class=\"phone-inner-wrap\">\r\n            <p class=\"l-phone\">+7 (702) 821 48 72</p>\r\n            <p class=\"l-text\">Мобильный рабочий номер <br>менеджеров города Алматы</p>\r\n        </div>\r\n        <span class=\"callBtn\">\r\n            <a href=\"https://api.whatsapp.com/send?phone=77077400825\">\r\n                <img src=\"/img/common/icons/whatsapp.png\">\r\n            </a>\r\n        </span>\r\n        <span class=\"callBtn\">\r\n            <img src=\"/img/common/icons/phone.png\">\r\n        </span>\r\n    </div>\r\n    <hr>\r\n    <div class=\"phone-wrap\">\r\n        <div class=\"phone-inner-wrap\">\r\n            <p class=\"l-phone\">+7 (727) 546 71 45</p>\r\n            <p class=\"l-text\">Call-center города Шымкент</p>\r\n        </div>\r\n        <span class=\"callBtn\">\r\n            <img src=\"/img/common/icons/phone.png\">\r\n        </span>\r\n    </div>\r\n    <hr>\r\n    <div class=\"phone-wrap\">\r\n        <div class=\"phone-inner-wrap\">\r\n            <p class=\"l-phone\">+7 (777) 777 00 00</p>\r\n            <p class=\"l-text\">Мобильный рабочий номер<br> менеджеров города Шымкент</p>\r\n        </div>\r\n        <span class=\"callBtn\">\r\n            <a href=\"https://api.whatsapp.com/send?phone=77077400825\"><img src=\"/img/common/icons/whatsapp.png\"></a>\r\n        </span>\r\n        <span class=\"callBtn\">\r\n            <img src=\"/img/common/icons/phone.png\">\r\n        </span>\r\n    </div>\r\n    <hr>\r\n    <p class=\"socials\">Мы в социальных сетях</p>\r\n    <a href=\"#sc\" class=\"soc-buttons\">\r\n        <img src=\"/img/common/icons/insta.png\">\r\n    </a>\r\n    <a href=\"#sc\" class=\"soc-buttons\">\r\n        <img src=\"/img/common/icons/vk.png\">\r\n    </a>\r\n    <a href=\"#sc\" class=\"soc-buttons\">\r\n        <img src=\"/img/common/icons/mail.png\">\r\n    </a>\r\n    <a href=\"#sc\" class=\"soc-buttons\">\r\n        <img src=\"/img/common/icons/youtube.png\">\r\n    </a>\r\n    <a href=\"#sc\" class=\"soc-buttons\">\r\n        <img src=\"/img/common/icons/map.png\">\r\n    </a>\r\n    <button class=\"share-btn\">\r\n        Поделиться\r\n        <span></span>\r\n    </button>\r\n</div>', '2018-07-23 07:51:18', '2018-07-23 07:51:18', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'abik50000@gmail.com', '$2y$10$DJsIc/2BKpvsoVAT3vEvAOafmKmtAL9i.D6WDhF1lyq7Jw1mGyXpS', '6Z0TfvjDpDxtwvy7rVuGfBkDN9ad2ECkmBhZSkxCZdviOMoRRIgcS07UeRAl', '2018-07-19 04:37:33', '2018-07-19 04:37:33'),
(2, 'almatiskakov', 'almatiskakov@gmail.com', '$2y$10$JYzCklxict8SvJrqp//lFOnCpsLj4Lfo5dSMtpj8IHjnl.7DkQ70y', NULL, '2018-07-19 18:36:28', '2018-07-19 18:36:28');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `consultances`
--
ALTER TABLE `consultances`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `textblocks`
--
ALTER TABLE `textblocks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `consultances`
--
ALTER TABLE `consultances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `textblocks`
--
ALTER TABLE `textblocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
