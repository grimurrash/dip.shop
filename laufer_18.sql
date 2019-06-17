-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 17 2019 г., 10:20
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laufer_18`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--
-- Создание: Июн 16 2019 г., 17:36
-- Последнее обновление: Июн 16 2019 г., 17:36
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Газовые котлы', 'gazovye-kotly', '2019-06-02 06:47:21', '2019-06-02 06:47:21'),
(5, 'Электрические котлы', 'elektricheskie-kotly', '2019-06-02 12:05:57', '2019-06-02 12:05:57'),
(6, 'Бойлеры', 'boylery', '2019-06-02 12:06:11', '2019-06-02 12:06:11'),
(7, 'Радиаторы отопления', 'radiatory-otopleniya', '2019-06-02 12:06:42', '2019-06-02 12:06:42'),
(8, 'Насосное оборудование', 'nasosnoe-oborudovanie', '2019-06-02 12:07:10', '2019-06-02 12:07:10'),
(9, 'Инженерная сантехника', 'inzhenernaya-santekhnika', '2019-06-02 12:08:13', '2019-06-02 12:08:13'),
(10, 'Печи и камины', 'pechi-i-kaminy', '2019-06-02 12:08:39', '2019-06-02 12:08:39'),
(11, 'Автоматика для котлов', 'avtomatika-dlya-kotlov', '2019-06-02 12:09:43', '2019-06-02 12:09:43'),
(12, 'Конвекторы', 'konvektory', '2019-06-02 12:12:28', '2019-06-02 12:12:28'),
(13, 'Обычные котлы', 'obychnye-kotly', '2019-06-16 11:29:21', '2019-06-16 11:29:21');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--
-- Создание: Июн 16 2019 г., 17:36
-- Последнее обновление: Июн 16 2019 г., 19:32
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'gazovyy-kotel-bosch-gaz-6000-w020620190957.jpg', 'http://dip.shop/storage/images/gazovyy-kotel-bosch-gaz-6000-w020620190957.jpg', '2019-06-02 06:57:51', '2019-06-02 06:57:51'),
(2, 'gazovyy-kotel-immergas-eolo-st020620191009.jpg', 'http://dip.shop/storage/images/gazovyy-kotel-immergas-eolo-st020620191009.jpg', '2019-06-02 07:09:00', '2019-06-02 07:09:00'),
(3, 'gazovyy-kotel-lemaks-premium-1020620191016.jpg', 'http://dip.shop/storage/images/gazovyy-kotel-lemaks-premium-1020620191016.jpg', '2019-06-02 07:16:38', '2019-06-02 07:16:38'),
(4, 'elektricheskiy-kotel-evan-exper020620191535.jpg', 'http://dip.shop/storage/images/elektricheskiy-kotel-evan-exper020620191535.jpg', '2019-06-02 12:35:34', '2019-06-02 12:35:34'),
(5, 'boyler-kosvennogo-nagreva-aqua020620191538.jpg', 'http://dip.shop/storage/images/boyler-kosvennogo-nagreva-aqua020620191538.jpg', '2019-06-02 12:38:33', '2019-06-02 12:38:33'),
(6, 'radiator-alyuminievyy-germanium020620191540.jpg', 'http://dip.shop/storage/images/radiator-alyuminievyy-germanium020620191540.jpg', '2019-06-02 12:40:55', '2019-06-02 12:40:55'),
(7, 'nasos-tsirkulyatsionnyy-wilo-yono020620191546.jpg', 'http://dip.shop/storage/images/nasos-tsirkulyatsionnyy-wilo-yono020620191546.jpg', '2019-06-02 12:46:33', '2019-06-02 12:46:33'),
(8, 'truba-iz-sshitogo-polietilena-s020620191604.jpg', 'http://dip.shop/storage/images/truba-iz-sshitogo-polietilena-s020620191604.jpg', '2019-06-02 13:04:41', '2019-06-02 13:04:41'),
(9, 'pech-otopitelnaya-termofor-zol020620191610.jpg', 'http://dip.shop/storage/images/pech-otopitelnaya-termofor-zol020620191610.jpg', '2019-06-02 13:10:13', '2019-06-02 13:10:13'),
(10, 'termoregulyator-auraton-3021020620191900.jpg', 'http://dip.shop/storage/images/termoregulyator-auraton-3021020620191900.jpg', '2019-06-02 16:00:52', '2019-06-02 16:00:52'),
(11, 'danko-briz-2s020620191906.jpg', 'http://dip.shop/storage/images/danko-briz-2s020620191906.jpg', '2019-06-02 16:06:22', '2019-06-02 16:06:22'),
(12, 'alyuminievye-radiatory-rifar020620191911.jpg', 'http://dip.shop/storage/images/alyuminievye-radiatory-rifar020620191911.jpg', '2019-06-02 16:11:42', '2019-06-02 16:11:42'),
(13, 'rpoa030620190806.jpg', 'http://dip.shop/storage/images/rpoa030620190806.jpg', '2019-06-03 05:06:49', '2019-06-03 05:06:49'),
(14, 'kotel160620191557.jpg', 'http://dip.shop/storage/images/kotel160620191557.jpg', '2019-06-16 12:57:06', '2019-06-16 12:57:06'),
(15, 'rpoa160620191558.jpg', 'http://dip.shop/storage/images/rpoa160620191558.jpg', '2019-06-16 12:58:51', '2019-06-16 12:58:51'),
(16, 'rpoa160620191600.jpg', 'http://dip.shop/storage/images/rpoa160620191600.jpg', '2019-06-16 13:00:40', '2019-06-16 13:00:40'),
(17, 'kotel160620191611.png', 'http://dip.shop/storage/images/kotel160620191611.png', '2019-06-16 13:11:18', '2019-06-16 13:11:18'),
(18, 'hosseven-hdu-5160620191932.jpg', 'http://dip.shop/storage/images/hosseven-hdu-5160620191932.jpg', '2019-06-16 16:32:02', '2019-06-16 16:32:02');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--
-- Создание: Июн 16 2019 г., 17:36
-- Последнее обновление: Июн 16 2019 г., 17:36
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(65, '2013_05_04_072226_create_images_table', 1),
(66, '2014_10_12_000000_create_users_table', 1),
(67, '2014_10_12_100000_create_password_resets_table', 1),
(68, '2019_05_03_074315_create_categories_table', 1),
(69, '2019_05_03_114658_create_subcategories_table', 1),
(70, '2019_05_04_073203_create_products_table', 1),
(71, '2019_05_28_171039_create_orders_table', 1),
(72, '2019_05_28_204429_create_order_items_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--
-- Создание: Июн 16 2019 г., 17:36
-- Последнее обновление: Июн 17 2019 г., 07:18
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('В ожидании','В процессе','Отменен','Выполнен') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'В ожидании',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `fio`, `email`, `phone`, `address`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Токранова Влада Павловна', 'vladochka.tokranova@mail.ru', '88005553535', 'Чуйова 11/111', 'в', 'Выполнен', '2019-06-02 06:59:53', '2019-06-16 14:18:29'),
(2, 'токранева влада павловна', 'vladochka.tokranoqva@mail.ru', '88009553535', 'чуйкова 12 12/112', 'ууу', 'В ожидании', '2019-06-02 10:26:03', '2019-06-02 10:26:03'),
(4, 'Иванова Влада Владимировна', 'ddar@mail.ru', '89033400357', 'чуйкова 11 12/8', 'побыстрее', 'В процессе', '2019-06-03 05:05:10', '2019-06-03 05:05:36'),
(6, 'Мазитов Адель Расимович', 'qertttttt@mail.ru', '89276795122', 'чуйкова 122/2', 'ddwfw', 'В ожидании', '2019-06-11 17:09:42', '2019-06-11 17:09:42'),
(7, 'Лауфер Влада ОЛеговна', 'zxcv@mail.ru', '8917234199', 'зеленая 12/1', 'ззз', 'Выполнен', '2019-06-15 13:15:38', '2019-06-16 13:03:11'),
(8, 'Елхов Дмитрий Валерьевич', 'v@mail.ru', '8999999999', 'sd sd/sd', 'sd', 'Выполнен', '2019-06-15 13:30:08', '2019-06-16 13:02:29'),
(9, 'Биттов Олег Александрович', 'kk@mail.ru', '97548693765', 'df df/df', '', 'В ожидании', '2019-06-15 13:50:09', '2019-06-15 13:50:09'),
(10, 'Биккинина Эллина Расимовна', 'asdf@maul.ru', '89172545190', 'xtr 1233/66', '', 'В ожидании', '2019-06-15 14:23:47', '2019-06-15 14:23:47'),
(11, 'Кудряшов Ранель Тупович', 'tyuuu@mail.ru', '8917243411', 'qwrrrr 2/3', '', 'В ожидании', '2019-06-15 17:01:50', '2019-06-15 17:01:50'),
(12, 'Сабиров Рашит Алмазович', 'rashit.sabirov1999@gmail.com', '89178567760', 'ул. Гар 14/9', '', 'В ожидании', '2019-06-16 13:53:38', '2019-06-16 13:53:38'),
(13, 'Егорова Настя Александровна', 'ghgjg@mail.ru', '89276795111', 'папапап 2/3', '', 'В ожидании', '2019-06-17 02:25:55', '2019-06-17 02:25:55');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--
-- Создание: Июн 16 2019 г., 17:36
-- Последнее обновление: Июн 17 2019 г., 07:18
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `count`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '2019-06-02 06:59:53', '2019-06-02 06:59:53'),
(2, 2, 1, 1, '2019-06-02 10:26:03', '2019-06-02 10:26:03'),
(4, 4, 1, 1, '2019-06-03 05:05:10', '2019-06-03 05:05:10'),
(6, 6, 5, 1, '2019-06-11 17:09:42', '2019-06-11 17:09:42'),
(7, 7, 13, 1, '2019-06-15 13:15:38', '2019-06-15 13:15:38'),
(8, 7, 4, 2, '2019-06-15 13:15:38', '2019-06-15 13:15:38'),
(9, 7, 5, 2, '2019-06-15 13:15:38', '2019-06-15 13:15:38'),
(10, 7, 3, 2, '2019-06-15 13:15:38', '2019-06-15 13:15:38'),
(11, 7, 6, 1, '2019-06-15 13:15:38', '2019-06-15 13:15:38'),
(12, 8, 13, 1, '2019-06-15 13:30:08', '2019-06-15 13:30:08'),
(13, 9, 3, 2, '2019-06-15 13:50:09', '2019-06-15 13:50:09'),
(14, 10, 2, 3, '2019-06-15 14:23:47', '2019-06-15 14:23:47'),
(15, 10, 1, 2, '2019-06-15 14:23:47', '2019-06-15 14:23:47'),
(16, 10, 3, 1, '2019-06-15 14:23:47', '2019-06-15 14:23:47'),
(17, 11, 4, 1, '2019-06-15 17:01:50', '2019-06-15 17:01:50'),
(18, 12, 6, 1, '2019-06-16 13:53:38', '2019-06-16 13:53:38'),
(19, 13, 5, 1, '2019-06-17 02:25:55', '2019-06-17 02:25:55'),
(20, 13, 2, 1, '2019-06-17 02:25:55', '2019-06-17 02:25:55');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--
-- Создание: Июн 16 2019 г., 17:36
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--
-- Создание: Июн 16 2019 г., 17:36
-- Последнее обновление: Июн 16 2019 г., 19:32
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `best_price` tinyint(1) NOT NULL DEFAULT '0',
  `new_item` tinyint(1) NOT NULL DEFAULT '0',
  `bestsellers` tinyint(1) NOT NULL DEFAULT '0',
  `image_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `slug`, `quantity`, `price`, `description`, `best_price`, `new_item`, `bestsellers`, `image_id`, `subcategory_id`, `disabled`, `created_at`, `updated_at`) VALUES
(1, 'Газовый котел Bosch Gaz 6000 W', 'Высота: 700; Ширина: 400', 'gazovyy-kotel-bosch-gaz-6000-w', 4, 35500, 'Газовый настенный котел Bosch Gaz 6000 WBN-18C предназначен для горячего водоснабжения и отопления квартир или жилых домов площадью до 180 м². Стабильно работает при перепадах давления воды и газа. В котле реализована регулируемая система дымоудаления.\r\n\r\nШирокий диапазон модуляции мощности позволил достичь высокой производительности при меньшем расходе газа - КПД 93,2%.\r\n\r\nПростой монтаж и техническое обслуживание, малые габариты не ограничивают возможности размещения отопительного котла в интерьере.', 0, 0, 0, 1, 7, 0, '2019-06-02 06:57:51', '2019-06-03 05:05:36'),
(2, 'Газовый котел Immergas EOLO Star 24 3R', '', 'gazovyy-kotel-immergas-eolo-st', 5, 36000, 'Комплектация котла Immergas EOLO Star 24 3R - поставляется в коробке, отдельно идут 2 фильтра, коаксиальный дымоход и комнатный термостат.\r\nСамопромывной фильтр - колба с манометром для отопления используется для очистки воды системы отопления и защищает котел, в частности насос и теплообменник от попадания мусора из системы отопления.', 0, 1, 1, 2, 7, 0, '2019-06-02 07:09:00', '2019-06-02 08:03:32'),
(3, 'Газовый котел ЛЕМАКС ПРЕМИУМ 10', '', 'gazovyy-kotel-lemaks-premium-1', 5, 17860, 'Энергонезависимые одноконтурные газовые котлы Лемак ПРЕМИУМ 10 используются для отопления в  системах с естественной или принудительной циркуляцией воды. Представленный Вам котел Лемакс имеет качественную сталь камеры сгорания, чем выгодно отличаются от других производителей аналогичной продукции,  это позволяет эксплуатировать котел значительно дольше. Теплообменник покрыт теплоизоляционной эмалью и обработан ингибирующим составом, который предотвращает коррозию.', 1, 0, 0, 3, 8, 0, '2019-06-02 07:16:38', '2019-06-16 13:03:08'),
(4, 'Электрический котел ЭВАН EXPERT 9', 'Высота: 765; Ширина: 420;', 'elektricheskiy-kotel-evan-exper', 3, 40250, 'ЭВАН EXPERT – это электрический котел нового поколения, обеспечивающий самое экономичное энергопотребление и самые комфортные условия подключения и эксплуатации.', 1, 0, 0, 4, 9, 0, '2019-06-02 12:35:34', '2019-06-16 13:03:08'),
(5, 'Бойлер косвенного нагрева Aquastic AQ IND SC 150 л напольный', 'Высота: 1200; Ширина: 496;', 'boyler-kosvennogo-nagreva-aqua', 1, 38000, 'Бойлеры косвенного нагрева AQUASTIC серии AQ SC обладают отличными техническими характеристика.  В составе бойлера используется теплоизоляция без фреона, которая отлична сохраняет тепло в бойлере на долгое время. К водонагревателям данной серии можно подключить опционально электрический ТЭН и нагревать воду с помощью электричества. Для защиты бака от коррозии применяется активный защитный магниевый анод. В бойлера присутствует патрубок рециркуляции, с помощью которого можно обеспечить моментальную подачу горячей воды из крана, а также подключить полотенцесушители.', 1, 0, 0, 5, 12, 0, '2019-06-02 12:38:33', '2019-06-16 13:03:08'),
(6, 'Радиатор алюминиевый Germanium AL', 'Высота: 580; Ширина: 480;', 'radiator-alyuminievyy-germanium', 9, 3549, 'Алюминиевые радиаторы Germanium — высокопрочные алюминиевые приборы, которые могут использоваться как для автономных систем отопления, так и для систем\r\nцентрального отопления, в том числе многоэтажных высотных зданий.', 1, 0, 0, 6, 15, 0, '2019-06-02 12:40:55', '2019-06-16 13:03:08'),
(7, 'Насос циркуляционный WILO YONOS PICO 25/1-6 (130)', 'Высота:13 ;Ширина: 9.3 ;', 'nasos-tsirkulyatsionnyy-wilo-yono', 7, 11199, 'Высокоэффективный насос Wilo-Yonos PICO с электронной системой регулирования Не требующие техобслуживания циркуляционные насосы с мокрым ротором и с резьбовым подсоединением, устойчивый к токам блокировки синхронный электродвигатель по технологии ECM и встроенная электронная система регулирования частоты вращения для плавного регулирования перепада давления. Применяется во всех системах отопления и кондиционирования. Режим регулировки можно выбрать в соответствии с применяемой системой радиаторного отопления/напольного отопления', 0, 1, 0, 7, 17, 0, '2019-06-02 12:46:33', '2019-06-02 12:46:33'),
(8, 'Труба из сшитого полиэтилена с кислородным слоем STOUT 16х2,0 (бухта 100 метров) PEX-a (красная)', 'Диаметр: 16мм; Размер: 100м;', 'truba-iz-sshitogo-polietilena-s', 3, 6500, 'Предназначена для внутридомовых систем холодного и горячего водоснабжения, отопления. Классы эксплуатации – 1, 2, 4, 5 по ГОСТ 32415-2013. Конструкция трубы включает наружный защитный слой из этиленвинилола (EVOH), который препятствует диффузии кислорода в теплоноситель. Монтаж полиэтиленовых труб PEX-EVOH производится с помощью пресс-фитингов VALTEC. Расчетный срок службы – 50 лет. Форма поставки – отрезки длиной 200 м в бухтах.', 0, 1, 0, 8, 19, 0, '2019-06-02 13:04:41', '2019-06-02 13:04:41'),
(9, 'Печь отопительная Термофор Золушка 2016', 'Высота: 460 ; Ширина:300 ;', 'pech-otopitelnaya-termofor-zol', 4, 8299, 'Дровяная печь длительного горения «Золушка» предназначена для экономичного воздушного отопления жилых и нежилых помещений максимальным объемом 50 м 3.\r\nКомпактные размеры этой печи позволяют размещать ее в самых небольших помещениях. Геометрия топки и боковые конвекторы обеспечивают экономичное отопление помещения.\r\nНа верхней горизонтальной поверхности печи можно приготовить и разогреть пищу.', 0, 1, 0, 9, 22, 0, '2019-06-02 13:10:13', '2019-06-02 13:10:13'),
(10, 'Терморегулятор AURATON 3021', 'Точность регулирования:+(-)0,2 °С; Максимальный ток нагрузки : 16А', 'termoregulyator-auraton-3021', 5, 3500, 'AURATON 3021 имеет 3 уровня температуры, сам терморегулятор представлен в компактном корпусе. Предназначен для управления газовыми и электрическими котлами, и другим отопительным оборудованием, посредством беспотенциальных контактов реле с током нагрузки до 16 А. Доступна беспроводная версия этой модели AURATON 3021 RTH.', 0, 0, 1, 10, 23, 0, '2019-06-02 16:00:52', '2019-06-02 16:02:39'),
(12, 'Алюминиевые радиаторы RIFAR', 'Ширина:112; Высота: 56,6', 'alyuminievye-radiatory-rifar', 5, 9000, 'Технология изготовления алюминиевых радиаторов RIFAR позволяет добиться абсолютной герметичности изделий\r\n\r\nБез протечек радиатор эксплуатируется как на воде, так и на теплоносителе\r\n\r\nОтопительные приборы характеризуются высокой теплоотдачей\r\n\r\nДолгий срок службы обеспечивается за счет внутренней конструкции секций, способствующей уменьшению отложений', 0, 0, 1, 12, 15, 0, '2019-06-02 16:11:42', '2019-06-02 16:11:42'),
(13, 'рпоа', '', 'rpoa', 0, 11999, 'красивая', 0, 0, 0, 16, 22, 1, '2019-06-03 05:06:49', '2019-06-16 14:31:20'),
(14, 'Hosseven HDU-5', 'Ширина:97; Высота:35', 'hosseven-hdu-5', 1, 15000, 'Газовые конвекторы, как правило, используются для обогрева совершенно разных помещений. Для жилых помещений зачастую выбирают Hosseven HDU-5. Это настенный достаточно надежный и безопасный конвектор. Благодаря тому, что камера сгорания имеет закрытый тип и выполнена из прочной стали, все продукты сгорания не имеют контакта с воздухов внутри помещения.', 0, 0, 1, 18, 25, 0, '2019-06-16 16:32:02', '2019-06-16 16:32:02');

-- --------------------------------------------------------

--
-- Структура таблицы `subcategories`
--
-- Создание: Июн 16 2019 г., 17:36
-- Последнее обновление: Июн 16 2019 г., 17:36
--

DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subcategories`
--

INSERT INTO `subcategories` (`id`, `title`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(7, 'Настенные', 'nastennye', 4, '2019-06-02 06:47:32', '2019-06-02 06:47:32'),
(8, 'Напольные', 'napolnye', 4, '2019-06-02 07:11:08', '2019-06-02 07:11:08'),
(9, 'ТЭновые', 'tenovye', 5, '2019-06-02 12:13:48', '2019-06-02 12:13:48'),
(10, '220B', '220b', 5, '2019-06-02 12:14:05', '2019-06-02 12:14:05'),
(11, '380B', '380b', 5, '2019-06-02 12:14:18', '2019-06-02 12:14:18'),
(12, 'Бойлеры косвенного нагрева', 'boylery-kosvennogo-nagreva', 6, '2019-06-02 12:14:40', '2019-06-02 12:14:40'),
(13, 'Комбинированные бойлеры', 'kombinirovannye-boylery', 6, '2019-06-02 12:15:12', '2019-06-02 12:15:12'),
(14, 'Стальные радиаторы', 'stalnye-radiatory', 7, '2019-06-02 12:15:41', '2019-06-02 12:15:41'),
(15, 'Алюминиевые радиаторы', 'alyuminievye-radiatory', 7, '2019-06-02 12:16:00', '2019-06-02 12:16:00'),
(16, 'Биметаллические радиаторы', 'bimetallicheskie-radiatory', 7, '2019-06-02 12:16:22', '2019-06-02 12:16:22'),
(17, 'Циркуляционные', 'tsirkulyatsionnye', 8, '2019-06-02 12:16:42', '2019-06-02 12:16:42'),
(18, 'Скважинные', 'skvazhinnye', 8, '2019-06-02 12:17:05', '2019-06-02 12:17:05'),
(19, 'Трубы', 'truby', 9, '2019-06-02 12:17:28', '2019-06-02 12:17:28'),
(20, 'Пресс-фитинги', 'press-fitingi', 9, '2019-06-02 12:17:57', '2019-06-02 12:17:57'),
(21, 'Камины', 'kaminy', 10, '2019-06-02 12:18:25', '2019-06-02 12:18:25'),
(22, 'Отопительные печи', 'otopitelnye-pechi', 10, '2019-06-02 12:18:41', '2019-06-02 12:18:41'),
(23, 'Терморегуляторы', 'termoregulyatory', 11, '2019-06-02 12:19:25', '2019-06-02 12:19:25'),
(24, 'GSM терморегулятор', 'gsm-termoregulyator', 11, '2019-06-02 12:19:53', '2019-06-02 12:19:53'),
(25, 'Газовые', 'gazovye', 12, '2019-06-02 12:20:16', '2019-06-02 12:20:16'),
(26, 'Электрические', 'elektricheskie', 12, '2019-06-02 12:20:44', '2019-06-02 12:20:44'),
(28, 'Конденсационные', 'kondensatsionnye', 4, '2019-06-02 12:23:25', '2019-06-02 12:23:25');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Июн 16 2019 г., 17:36
-- Последнее обновление: Июн 17 2019 г., 05:15
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','client') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'client',
  `mobile_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('M','F') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `avatar` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `mobile_phone`, `gender`, `birthday`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@bk.ru', '$2y$10$wyEWxzkWR9P3YtXJwXVBw.kjOCeJbSLFDOGhJofcdpyhFMi.12IE6', 'admin', NULL, NULL, NULL, NULL, 'ArTg0B8KCAj0MldqCPxtb5tCOPoIX1cQ7hQNvsBsbGhOIcHK2Wxl3fAakiJv', '2019-06-02 06:33:50', '2019-06-02 06:33:50');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_title_unique` (`title`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `images_name_unique` (`name`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_image_id_foreign` (`image_id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`);

--
-- Индексы таблицы `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategories_title_unique` (`title`),
  ADD UNIQUE KEY `subcategories_slug_unique` (`slug`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_avatar_foreign` (`avatar`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_avatar_foreign` FOREIGN KEY (`avatar`) REFERENCES `images` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
