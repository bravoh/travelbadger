-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2019 at 04:49 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.2.17-1+ubuntu16.04.1+deb.sury.org+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelbadger`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `route_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `route_id`, `status`, `paid`, `created_at`, `updated_at`, `details`) VALUES
(1, NULL, 1, 'paid', 1, '2019-04-17 09:55:41', '2019-04-17 09:55:41', '_token=ZWSFtH2K9B0CJIFpaICuX8r6pVnOBA5KfWhuzRC0&gender=Female&first_name=Jane&last_name=D&phone=718784058&passport=30359359'),
(2, NULL, 1, 'paid', 1, '2019-04-17 09:58:43', '2019-04-17 09:58:43', '\"_token=ZWSFtH2K9B0CJIFpaICuX8r6pVnOBA5KfWhuzRC0&gender=Female&first_name=Jane&last_name=D&phone=718784058&passport=30359359\"'),
(3, NULL, 1, 'paid', 1, '2019-04-17 10:02:29', '2019-04-17 10:02:29', '\"_token=ZWSFtH2K9B0CJIFpaICuX8r6pVnOBA5KfWhuzRC0&gender=Gender&first_name=&last_name=&phone=&passport=\"'),
(4, NULL, 6, 'paid', 1, '2019-04-17 11:02:37', '2019-04-17 11:02:37', '\"_token=ZWSFtH2K9B0CJIFpaICuX8r6pVnOBA5KfWhuzRC0&gender=Male&first_name=Bravo&last_name=Gidi&phone=718784058&passport=5067565\"'),
(5, NULL, 5, 'paid', 1, '2019-04-17 11:03:41', '2019-04-17 11:03:41', '\"_token=ZWSFtH2K9B0CJIFpaICuX8r6pVnOBA5KfWhuzRC0&gender=Gender&first_name=&last_name=&phone=&passport=\"'),
(6, NULL, 5, 'paid', 1, '2019-04-17 11:06:25', '2019-04-17 11:06:25', '\"_token=ZWSFtH2K9B0CJIFpaICuX8r6pVnOBA5KfWhuzRC0&gender=Gender&first_name=&last_name=&phone=&passport=\"'),
(7, NULL, 5, 'paid', 1, '2019-04-17 11:07:18', '2019-04-17 11:07:18', '\"_token=ZWSFtH2K9B0CJIFpaICuX8r6pVnOBA5KfWhuzRC0&gender=Gender&first_name=&last_name=&phone=&passport=\"'),
(8, NULL, 5, 'paid', 1, '2019-04-17 11:09:38', '2019-04-17 11:09:38', '\"_token=ZWSFtH2K9B0CJIFpaICuX8r6pVnOBA5KfWhuzRC0&gender=Gender&first_name=&last_name=&phone=&passport=\"'),
(9, NULL, 1, 'paid', 1, '2019-04-17 11:12:47', '2019-04-17 11:12:47', '\"_token=ZWSFtH2K9B0CJIFpaICuX8r6pVnOBA5KfWhuzRC0&gender=Gender&first_name=&last_name=&phone=&passport=\"'),
(10, NULL, 1, 'paid', 1, '2019-04-17 11:15:34', '2019-04-17 11:15:34', '\"_token=ZWSFtH2K9B0CJIFpaICuX8r6pVnOBA5KfWhuzRC0&gender=Gender&first_name=&last_name=&phone=&passport=\"'),
(11, NULL, 1, 'paid', 1, '2019-04-17 11:18:47', '2019-04-17 11:18:47', '\"_token=ZWSFtH2K9B0CJIFpaICuX8r6pVnOBA5KfWhuzRC0&gender=Gender&first_name=&last_name=&phone=&passport=\"'),
(12, NULL, 3, 'paid', 1, '2019-04-17 11:20:00', '2019-04-17 11:20:00', '\"_token=ZWSFtH2K9B0CJIFpaICuX8r6pVnOBA5KfWhuzRC0&gender=Gender&first_name=&last_name=&phone=&passport=\"');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_04_16_150941_create_travel_firms_table', 2),
(8, '2019_04_16_151009_create_towns_table', 2),
(13, '2019_04_16_151019_create_routes_table', 3),
(14, '2019_04_16_151931_create_bookings_table', 3),
(15, '2019_04_17_081209_add_image_to_travel_firms_table', 4),
(16, '2019_04_17_123311_create_payments_table', 5),
(17, '2019_04_17_123350_add_details_to_bookings_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` double NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `booking_id`, `amount`, `details`, `created_at`, `updated_at`) VALUES
(1, 3, 25, '{\"create_time\":\"2019-04-17T13:02:27Z\",\"update_time\":\"2019-04-17T13:02:27Z\",\"id\":\"22065652SG484612T\",\"intent\":\"CAPTURE\",\"status\":\"COMPLETED\",\"payer\":{\"email_address\":\"bravogidi@gmail.com\",\"payer_id\":\"R79GNZQCBZS9G\",\"address\":{\"country_code\":\"US\"},\"name\":{\"given_name\":\"Bravo\",\"surname\":\"Gidi\"},\"phone\":{\"phone_number\":{\"national_number\":\"4088121049\"}}},\"purchase_units\":[{\"reference_id\":\"default\",\"amount\":{\"value\":\"25.00\",\"currency_code\":\"USD\"},\"payee\":{\"email_address\":\"bravogidi-facilitator@gmail.com\",\"merchant_id\":\"2CTAW72ENVXDS\"},\"shipping\":{\"name\":{\"full_name\":\"Bravo Gidi\"},\"address\":{\"address_line_1\":\"1 Main St\",\"admin_area_2\":\"San Jose\",\"admin_area_1\":\"CA\",\"postal_code\":\"95131\",\"country_code\":\"US\"}},\"payments\":{\"captures\":[{\"status\":\"COMPLETED\",\"id\":\"44261950TK510461A\",\"final_capture\":\"true\",\"create_time\":\"2019-04-17T13:02:27Z\",\"update_time\":\"2019-04-17T13:02:27Z\",\"amount\":{\"value\":\"25.00\",\"currency_code\":\"USD\"},\"seller_protection\":{\"status\":\"ELIGIBLE\",\"dispute_categories\":[\"ITEM_NOT_RECEIVED\",\"UNAUTHORIZED_TRANSACTION\"]},\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/44261950TK510461A\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/44261950TK510461A\\/refund\",\"rel\":\"refund\",\"method\":\"POST\",\"title\":\"POST\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/22065652SG484612T\",\"rel\":\"up\",\"method\":\"GET\",\"title\":\"GET\"}]}]}}],\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/22065652SG484612T\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"}]}', '2019-04-17 10:02:29', '2019-04-17 10:02:29'),
(2, 4, 40, '{\"create_time\":\"2019-04-17T14:02:35Z\",\"update_time\":\"2019-04-17T14:02:35Z\",\"id\":\"88V80162E1422704A\",\"intent\":\"CAPTURE\",\"status\":\"COMPLETED\",\"payer\":{\"email_address\":\"bravogidi@gmail.com\",\"payer_id\":\"R79GNZQCBZS9G\",\"address\":{\"country_code\":\"US\"},\"name\":{\"given_name\":\"Bravo\",\"surname\":\"Gidi\"},\"phone\":{\"phone_number\":{\"national_number\":\"4088121049\"}}},\"purchase_units\":[{\"reference_id\":\"default\",\"amount\":{\"value\":\"40.00\",\"currency_code\":\"USD\"},\"payee\":{\"email_address\":\"bravogidi-facilitator@gmail.com\",\"merchant_id\":\"2CTAW72ENVXDS\"},\"shipping\":{\"name\":{\"full_name\":\"Bravo Gidi\"},\"address\":{\"address_line_1\":\"1 Main St\",\"admin_area_2\":\"San Jose\",\"admin_area_1\":\"CA\",\"postal_code\":\"95131\",\"country_code\":\"US\"}},\"payments\":{\"captures\":[{\"status\":\"COMPLETED\",\"id\":\"0HL25943BT569570T\",\"final_capture\":\"true\",\"create_time\":\"2019-04-17T14:02:35Z\",\"update_time\":\"2019-04-17T14:02:35Z\",\"amount\":{\"value\":\"40.00\",\"currency_code\":\"USD\"},\"seller_protection\":{\"status\":\"ELIGIBLE\",\"dispute_categories\":[\"ITEM_NOT_RECEIVED\",\"UNAUTHORIZED_TRANSACTION\"]},\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/0HL25943BT569570T\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/0HL25943BT569570T\\/refund\",\"rel\":\"refund\",\"method\":\"POST\",\"title\":\"POST\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/88V80162E1422704A\",\"rel\":\"up\",\"method\":\"GET\",\"title\":\"GET\"}]}]}}],\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/88V80162E1422704A\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"}]}', '2019-04-17 11:02:37', '2019-04-17 11:02:37'),
(3, 5, 35, '{\"create_time\":\"2019-04-17T14:03:40Z\",\"update_time\":\"2019-04-17T14:03:40Z\",\"id\":\"7VH78735EJ921682W\",\"intent\":\"CAPTURE\",\"status\":\"COMPLETED\",\"payer\":{\"email_address\":\"bravogidi@gmail.com\",\"payer_id\":\"R79GNZQCBZS9G\",\"address\":{\"country_code\":\"US\"},\"name\":{\"given_name\":\"Bravo\",\"surname\":\"Gidi\"},\"phone\":{\"phone_number\":{\"national_number\":\"4088121049\"}}},\"purchase_units\":[{\"reference_id\":\"default\",\"amount\":{\"value\":\"35.00\",\"currency_code\":\"USD\"},\"payee\":{\"email_address\":\"bravogidi-facilitator@gmail.com\",\"merchant_id\":\"2CTAW72ENVXDS\"},\"shipping\":{\"name\":{\"full_name\":\"Bravo Gidi\"},\"address\":{\"address_line_1\":\"1 Main St\",\"admin_area_2\":\"San Jose\",\"admin_area_1\":\"CA\",\"postal_code\":\"95131\",\"country_code\":\"US\"}},\"payments\":{\"captures\":[{\"status\":\"COMPLETED\",\"id\":\"2SR22879BK278764C\",\"final_capture\":\"true\",\"create_time\":\"2019-04-17T14:03:40Z\",\"update_time\":\"2019-04-17T14:03:40Z\",\"amount\":{\"value\":\"35.00\",\"currency_code\":\"USD\"},\"seller_protection\":{\"status\":\"ELIGIBLE\",\"dispute_categories\":[\"ITEM_NOT_RECEIVED\",\"UNAUTHORIZED_TRANSACTION\"]},\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/2SR22879BK278764C\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/2SR22879BK278764C\\/refund\",\"rel\":\"refund\",\"method\":\"POST\",\"title\":\"POST\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/7VH78735EJ921682W\",\"rel\":\"up\",\"method\":\"GET\",\"title\":\"GET\"}]}]}}],\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/7VH78735EJ921682W\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"}]}', '2019-04-17 11:03:41', '2019-04-17 11:03:41'),
(4, 6, 35, '{\"create_time\":\"2019-04-17T14:06:24Z\",\"update_time\":\"2019-04-17T14:06:24Z\",\"id\":\"75869561AP390973S\",\"intent\":\"CAPTURE\",\"status\":\"COMPLETED\",\"payer\":{\"email_address\":\"bravogidi@gmail.com\",\"payer_id\":\"R79GNZQCBZS9G\",\"address\":{\"country_code\":\"US\"},\"name\":{\"given_name\":\"Bravo\",\"surname\":\"Gidi\"},\"phone\":{\"phone_number\":{\"national_number\":\"4088121049\"}}},\"purchase_units\":[{\"reference_id\":\"default\",\"amount\":{\"value\":\"35.00\",\"currency_code\":\"USD\"},\"payee\":{\"email_address\":\"bravogidi-facilitator@gmail.com\",\"merchant_id\":\"2CTAW72ENVXDS\"},\"shipping\":{\"name\":{\"full_name\":\"Bravo Gidi\"},\"address\":{\"address_line_1\":\"1 Main St\",\"admin_area_2\":\"San Jose\",\"admin_area_1\":\"CA\",\"postal_code\":\"95131\",\"country_code\":\"US\"}},\"payments\":{\"captures\":[{\"status\":\"COMPLETED\",\"id\":\"0C610359TW5657149\",\"final_capture\":\"true\",\"create_time\":\"2019-04-17T14:06:24Z\",\"update_time\":\"2019-04-17T14:06:24Z\",\"amount\":{\"value\":\"35.00\",\"currency_code\":\"USD\"},\"seller_protection\":{\"status\":\"ELIGIBLE\",\"dispute_categories\":[\"ITEM_NOT_RECEIVED\",\"UNAUTHORIZED_TRANSACTION\"]},\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/0C610359TW5657149\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/0C610359TW5657149\\/refund\",\"rel\":\"refund\",\"method\":\"POST\",\"title\":\"POST\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/75869561AP390973S\",\"rel\":\"up\",\"method\":\"GET\",\"title\":\"GET\"}]}]}}],\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/75869561AP390973S\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"}]}', '2019-04-17 11:06:25', '2019-04-17 11:06:25'),
(5, 7, 35, '{\"create_time\":\"2019-04-17T14:07:15Z\",\"update_time\":\"2019-04-17T14:07:15Z\",\"id\":\"47209377SP873254W\",\"intent\":\"CAPTURE\",\"status\":\"COMPLETED\",\"payer\":{\"email_address\":\"bravogidi@gmail.com\",\"payer_id\":\"R79GNZQCBZS9G\",\"address\":{\"country_code\":\"US\"},\"name\":{\"given_name\":\"Bravo\",\"surname\":\"Gidi\"},\"phone\":{\"phone_number\":{\"national_number\":\"4088121049\"}}},\"purchase_units\":[{\"reference_id\":\"default\",\"amount\":{\"value\":\"35.00\",\"currency_code\":\"USD\"},\"payee\":{\"email_address\":\"bravogidi-facilitator@gmail.com\",\"merchant_id\":\"2CTAW72ENVXDS\"},\"shipping\":{\"name\":{\"full_name\":\"Bravo Gidi\"},\"address\":{\"address_line_1\":\"1 Main St\",\"admin_area_2\":\"San Jose\",\"admin_area_1\":\"CA\",\"postal_code\":\"95131\",\"country_code\":\"US\"}},\"payments\":{\"captures\":[{\"status\":\"COMPLETED\",\"id\":\"9L576639UD1543303\",\"final_capture\":\"true\",\"create_time\":\"2019-04-17T14:07:15Z\",\"update_time\":\"2019-04-17T14:07:15Z\",\"amount\":{\"value\":\"35.00\",\"currency_code\":\"USD\"},\"seller_protection\":{\"status\":\"ELIGIBLE\",\"dispute_categories\":[\"ITEM_NOT_RECEIVED\",\"UNAUTHORIZED_TRANSACTION\"]},\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/9L576639UD1543303\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/9L576639UD1543303\\/refund\",\"rel\":\"refund\",\"method\":\"POST\",\"title\":\"POST\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/47209377SP873254W\",\"rel\":\"up\",\"method\":\"GET\",\"title\":\"GET\"}]}]}}],\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/47209377SP873254W\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"}]}', '2019-04-17 11:07:18', '2019-04-17 11:07:18'),
(6, 8, 35, '{\"create_time\":\"2019-04-17T14:09:36Z\",\"update_time\":\"2019-04-17T14:09:36Z\",\"id\":\"9H532506X92935351\",\"intent\":\"CAPTURE\",\"status\":\"COMPLETED\",\"payer\":{\"email_address\":\"bravogidi@gmail.com\",\"payer_id\":\"R79GNZQCBZS9G\",\"address\":{\"country_code\":\"US\"},\"name\":{\"given_name\":\"Bravo\",\"surname\":\"Gidi\"},\"phone\":{\"phone_number\":{\"national_number\":\"4088121049\"}}},\"purchase_units\":[{\"reference_id\":\"default\",\"amount\":{\"value\":\"35.00\",\"currency_code\":\"USD\"},\"payee\":{\"email_address\":\"bravogidi-facilitator@gmail.com\",\"merchant_id\":\"2CTAW72ENVXDS\"},\"shipping\":{\"name\":{\"full_name\":\"Bravo Gidi\"},\"address\":{\"address_line_1\":\"1 Main St\",\"admin_area_2\":\"San Jose\",\"admin_area_1\":\"CA\",\"postal_code\":\"95131\",\"country_code\":\"US\"}},\"payments\":{\"captures\":[{\"status\":\"COMPLETED\",\"id\":\"2HS91004CM638951F\",\"final_capture\":\"true\",\"create_time\":\"2019-04-17T14:09:36Z\",\"update_time\":\"2019-04-17T14:09:36Z\",\"amount\":{\"value\":\"35.00\",\"currency_code\":\"USD\"},\"seller_protection\":{\"status\":\"ELIGIBLE\",\"dispute_categories\":[\"ITEM_NOT_RECEIVED\",\"UNAUTHORIZED_TRANSACTION\"]},\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/2HS91004CM638951F\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/2HS91004CM638951F\\/refund\",\"rel\":\"refund\",\"method\":\"POST\",\"title\":\"POST\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/9H532506X92935351\",\"rel\":\"up\",\"method\":\"GET\",\"title\":\"GET\"}]}]}}],\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/9H532506X92935351\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"}]}', '2019-04-17 11:09:38', '2019-04-17 11:09:38'),
(7, 9, 25, '{\"create_time\":\"2019-04-17T14:12:46Z\",\"update_time\":\"2019-04-17T14:12:46Z\",\"id\":\"8RG4480264457972S\",\"intent\":\"CAPTURE\",\"status\":\"COMPLETED\",\"payer\":{\"email_address\":\"bravogidi@gmail.com\",\"payer_id\":\"R79GNZQCBZS9G\",\"address\":{\"country_code\":\"US\"},\"name\":{\"given_name\":\"Bravo\",\"surname\":\"Gidi\"},\"phone\":{\"phone_number\":{\"national_number\":\"4088121049\"}}},\"purchase_units\":[{\"reference_id\":\"default\",\"amount\":{\"value\":\"25.00\",\"currency_code\":\"USD\"},\"payee\":{\"email_address\":\"bravogidi-facilitator@gmail.com\",\"merchant_id\":\"2CTAW72ENVXDS\"},\"shipping\":{\"name\":{\"full_name\":\"Bravo Gidi\"},\"address\":{\"address_line_1\":\"1 Main St\",\"admin_area_2\":\"San Jose\",\"admin_area_1\":\"CA\",\"postal_code\":\"95131\",\"country_code\":\"US\"}},\"payments\":{\"captures\":[{\"status\":\"COMPLETED\",\"id\":\"9B1751175D849982L\",\"final_capture\":\"true\",\"create_time\":\"2019-04-17T14:12:46Z\",\"update_time\":\"2019-04-17T14:12:46Z\",\"amount\":{\"value\":\"25.00\",\"currency_code\":\"USD\"},\"seller_protection\":{\"status\":\"ELIGIBLE\",\"dispute_categories\":[\"ITEM_NOT_RECEIVED\",\"UNAUTHORIZED_TRANSACTION\"]},\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/9B1751175D849982L\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/9B1751175D849982L\\/refund\",\"rel\":\"refund\",\"method\":\"POST\",\"title\":\"POST\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/8RG4480264457972S\",\"rel\":\"up\",\"method\":\"GET\",\"title\":\"GET\"}]}]}}],\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/8RG4480264457972S\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"}]}', '2019-04-17 11:12:47', '2019-04-17 11:12:47'),
(8, 10, 25, '{\"create_time\":\"2019-04-17T14:15:33Z\",\"update_time\":\"2019-04-17T14:15:33Z\",\"id\":\"2A7334688L4798708\",\"intent\":\"CAPTURE\",\"status\":\"COMPLETED\",\"payer\":{\"email_address\":\"bravogidi@gmail.com\",\"payer_id\":\"R79GNZQCBZS9G\",\"address\":{\"country_code\":\"US\"},\"name\":{\"given_name\":\"Bravo\",\"surname\":\"Gidi\"},\"phone\":{\"phone_number\":{\"national_number\":\"4088121049\"}}},\"purchase_units\":[{\"reference_id\":\"default\",\"amount\":{\"value\":\"25.00\",\"currency_code\":\"USD\"},\"payee\":{\"email_address\":\"bravogidi-facilitator@gmail.com\",\"merchant_id\":\"2CTAW72ENVXDS\"},\"shipping\":{\"name\":{\"full_name\":\"Bravo Gidi\"},\"address\":{\"address_line_1\":\"1 Main St\",\"admin_area_2\":\"San Jose\",\"admin_area_1\":\"CA\",\"postal_code\":\"95131\",\"country_code\":\"US\"}},\"payments\":{\"captures\":[{\"status\":\"COMPLETED\",\"id\":\"1HC1155963334702P\",\"final_capture\":\"true\",\"create_time\":\"2019-04-17T14:15:33Z\",\"update_time\":\"2019-04-17T14:15:33Z\",\"amount\":{\"value\":\"25.00\",\"currency_code\":\"USD\"},\"seller_protection\":{\"status\":\"ELIGIBLE\",\"dispute_categories\":[\"ITEM_NOT_RECEIVED\",\"UNAUTHORIZED_TRANSACTION\"]},\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/1HC1155963334702P\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/1HC1155963334702P\\/refund\",\"rel\":\"refund\",\"method\":\"POST\",\"title\":\"POST\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/2A7334688L4798708\",\"rel\":\"up\",\"method\":\"GET\",\"title\":\"GET\"}]}]}}],\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/2A7334688L4798708\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"}]}', '2019-04-17 11:15:34', '2019-04-17 11:15:34'),
(9, 11, 25, '{\"create_time\":\"2019-04-17T14:18:45Z\",\"update_time\":\"2019-04-17T14:18:45Z\",\"id\":\"99430183W8906502G\",\"intent\":\"CAPTURE\",\"status\":\"COMPLETED\",\"payer\":{\"email_address\":\"bravogidi@gmail.com\",\"payer_id\":\"R79GNZQCBZS9G\",\"address\":{\"country_code\":\"US\"},\"name\":{\"given_name\":\"Bravo\",\"surname\":\"Gidi\"},\"phone\":{\"phone_number\":{\"national_number\":\"4088121049\"}}},\"purchase_units\":[{\"reference_id\":\"default\",\"amount\":{\"value\":\"25.00\",\"currency_code\":\"USD\"},\"payee\":{\"email_address\":\"bravogidi-facilitator@gmail.com\",\"merchant_id\":\"2CTAW72ENVXDS\"},\"shipping\":{\"name\":{\"full_name\":\"Bravo Gidi\"},\"address\":{\"address_line_1\":\"1 Main St\",\"admin_area_2\":\"San Jose\",\"admin_area_1\":\"CA\",\"postal_code\":\"95131\",\"country_code\":\"US\"}},\"payments\":{\"captures\":[{\"status\":\"COMPLETED\",\"id\":\"4RV46498BT426481E\",\"final_capture\":\"true\",\"create_time\":\"2019-04-17T14:18:45Z\",\"update_time\":\"2019-04-17T14:18:45Z\",\"amount\":{\"value\":\"25.00\",\"currency_code\":\"USD\"},\"seller_protection\":{\"status\":\"ELIGIBLE\",\"dispute_categories\":[\"ITEM_NOT_RECEIVED\",\"UNAUTHORIZED_TRANSACTION\"]},\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/4RV46498BT426481E\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/4RV46498BT426481E\\/refund\",\"rel\":\"refund\",\"method\":\"POST\",\"title\":\"POST\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/99430183W8906502G\",\"rel\":\"up\",\"method\":\"GET\",\"title\":\"GET\"}]}]}}],\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/99430183W8906502G\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"}]}', '2019-04-17 11:18:47', '2019-04-17 11:18:47'),
(10, 12, 10, '{\"create_time\":\"2019-04-17T14:19:59Z\",\"update_time\":\"2019-04-17T14:19:59Z\",\"id\":\"7RV70390CN2284910\",\"intent\":\"CAPTURE\",\"status\":\"COMPLETED\",\"payer\":{\"email_address\":\"bravogidi@gmail.com\",\"payer_id\":\"R79GNZQCBZS9G\",\"address\":{\"country_code\":\"US\"},\"name\":{\"given_name\":\"Bravo\",\"surname\":\"Gidi\"},\"phone\":{\"phone_number\":{\"national_number\":\"4088121049\"}}},\"purchase_units\":[{\"reference_id\":\"default\",\"amount\":{\"value\":\"10.00\",\"currency_code\":\"USD\"},\"payee\":{\"email_address\":\"bravogidi-facilitator@gmail.com\",\"merchant_id\":\"2CTAW72ENVXDS\"},\"shipping\":{\"name\":{\"full_name\":\"Bravo Gidi\"},\"address\":{\"address_line_1\":\"1 Main St\",\"admin_area_2\":\"San Jose\",\"admin_area_1\":\"CA\",\"postal_code\":\"95131\",\"country_code\":\"US\"}},\"payments\":{\"captures\":[{\"status\":\"COMPLETED\",\"id\":\"7P858116JD476513S\",\"final_capture\":\"true\",\"create_time\":\"2019-04-17T14:19:59Z\",\"update_time\":\"2019-04-17T14:19:59Z\",\"amount\":{\"value\":\"10.00\",\"currency_code\":\"USD\"},\"seller_protection\":{\"status\":\"ELIGIBLE\",\"dispute_categories\":[\"ITEM_NOT_RECEIVED\",\"UNAUTHORIZED_TRANSACTION\"]},\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/7P858116JD476513S\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/payments\\/captures\\/7P858116JD476513S\\/refund\",\"rel\":\"refund\",\"method\":\"POST\",\"title\":\"POST\"},{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/7RV70390CN2284910\",\"rel\":\"up\",\"method\":\"GET\",\"title\":\"GET\"}]}]}}],\"links\":[{\"href\":\"https:\\/\\/api.sandbox.paypal.com\\/v2\\/checkout\\/orders\\/7RV70390CN2284910\",\"rel\":\"self\",\"method\":\"GET\",\"title\":\"GET\"}]}', '2019-04-17 11:20:01', '2019-04-17 11:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `travel_firm_id` bigint(20) UNSIGNED NOT NULL,
  `from` bigint(20) UNSIGNED NOT NULL,
  `to` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `image` blob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `type`, `name`, `travel_firm_id`, `from`, `to`, `price`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bus', NULL, 3, 20, 52, 2500, 0, NULL, '2019-04-17 06:41:10', '2019-04-17 06:41:10'),
(2, 'Bus', NULL, 4, 117, 118, 2500, 0, NULL, '2019-04-17 06:44:51', '2019-04-17 06:44:51'),
(3, 'Bus', NULL, 1, 117, 42, 1000, 0, NULL, '2019-04-17 06:45:45', '2019-04-17 06:45:45'),
(4, 'Bus', NULL, 3, 117, 119, 3000, 0, NULL, '2019-04-17 06:46:41', '2019-04-17 06:46:41'),
(5, 'Bus', NULL, 4, 117, 120, 3500, 0, NULL, '2019-04-17 06:47:22', '2019-04-17 06:47:22'),
(6, 'Bus', NULL, 3, 117, 123, 4000, 0, NULL, '2019-04-17 06:49:16', '2019-04-17 06:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `towns`
--

CREATE TABLE `towns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `towns`
--

INSERT INTO `towns` (`id`, `name`, `created_at`, `updated_at`) VALUES
(19, 'AHERO', NULL, NULL),
(20, 'Mombasa', NULL, NULL),
(21, 'Kisumu', NULL, NULL),
(22, 'Nakuru', NULL, NULL),
(23, 'Eldoret', NULL, NULL),
(24, 'Kangundo-Tala', NULL, NULL),
(25, 'Kehancha', NULL, NULL),
(26, 'Ruiru', NULL, NULL),
(27, 'Kikuyu', NULL, NULL),
(28, 'Malindi', NULL, NULL),
(29, 'Naivasha', NULL, NULL),
(30, 'Machakos', NULL, NULL),
(31, 'Thika', NULL, NULL),
(32, 'Athi River (Mavoko)', NULL, NULL),
(33, 'Karuri', NULL, NULL),
(34, 'Nyeri', NULL, NULL),
(35, 'Kilifi', NULL, NULL),
(36, 'Garissa', NULL, NULL),
(37, 'Vihiga', NULL, NULL),
(38, 'Mumias', NULL, NULL),
(39, 'Bomet', NULL, NULL),
(40, 'Molo', NULL, NULL),
(41, 'Ngong', NULL, NULL),
(42, 'Kitale', NULL, NULL),
(43, 'Limuru', NULL, NULL),
(44, 'Kimilili', NULL, NULL),
(45, 'Awasi', NULL, NULL),
(46, 'Kakamega', NULL, NULL),
(47, 'Mariakani', NULL, NULL),
(48, 'Nyamira', NULL, NULL),
(49, 'Mwingi', NULL, NULL),
(50, 'Kisii', NULL, NULL),
(51, 'Rongo', NULL, NULL),
(52, 'Bungoma', NULL, NULL),
(53, 'Ahero', NULL, NULL),
(54, 'Makuyu', NULL, NULL),
(55, 'Taveta', NULL, NULL),
(56, 'Narok', NULL, NULL),
(57, 'Ol Kalou', NULL, NULL),
(58, 'Nakuru', NULL, NULL),
(59, 'Uasin Gishu', NULL, NULL),
(60, 'Kitui', NULL, NULL),
(61, 'Machakos', NULL, NULL),
(62, 'Nyeri', NULL, NULL),
(63, 'Kilifi', NULL, NULL),
(64, 'Kericho', NULL, NULL),
(65, 'Kiambu', NULL, NULL),
(66, 'Nandi', NULL, NULL),
(67, 'Nyandarua', NULL, NULL),
(68, 'Kakuma', NULL, NULL),
(69, 'Webuye', NULL, NULL),
(70, 'Malaba', NULL, NULL),
(71, 'Mbita Point', NULL, NULL),
(72, 'Ukunda', NULL, NULL),
(73, 'Wundanyi', NULL, NULL),
(74, 'Busia', NULL, NULL),
(75, 'Runyenjes', NULL, NULL),
(76, 'Malava', NULL, NULL),
(77, 'Suneka', NULL, NULL),
(78, 'Embu', NULL, NULL),
(79, 'Ogembo', NULL, NULL),
(80, 'Homa Bay', NULL, NULL),
(81, 'Lodwar', NULL, NULL),
(82, 'Kitengela', NULL, NULL),
(83, 'Meru', NULL, NULL),
(84, 'Matuu', NULL, NULL),
(85, 'Nyahururu', NULL, NULL),
(86, 'Luanda', NULL, NULL),
(87, 'Nanyuki', NULL, NULL),
(88, 'Maua', NULL, NULL),
(89, 'Mtwapa', NULL, NULL),
(90, 'Isiolo', NULL, NULL),
(91, 'Voi', NULL, NULL),
(92, 'Londiani', NULL, NULL),
(93, 'Iten/Tambach', NULL, NULL),
(94, 'Juja', NULL, NULL),
(95, 'Ongata Rongai', NULL, NULL),
(96, 'Bondo', NULL, NULL),
(97, 'Maralal', NULL, NULL),
(98, 'Gilgil', NULL, NULL),
(99, 'Nambale', NULL, NULL),
(100, 'Tabaka', NULL, NULL),
(101, 'Muhoroni', NULL, NULL),
(102, 'Ugunja', NULL, NULL),
(103, 'Yala', NULL, NULL),
(104, 'Rumuruti', NULL, NULL),
(105, 'Burnt Forest', NULL, NULL),
(106, 'Bungoma', NULL, NULL),
(107, 'Taita-Taveta', NULL, NULL),
(108, 'Migori', NULL, NULL),
(109, 'Kisii', NULL, NULL),
(110, 'Baringo', NULL, NULL),
(111, 'Kericho', NULL, NULL),
(112, 'Kajiado', NULL, NULL),
(113, 'Siaya', NULL, NULL),
(114, 'Marsabit', NULL, NULL),
(115, 'Kerugoya/Kutus', NULL, NULL),
(116, 'Uasin Gishu', NULL, NULL),
(117, 'Nairobi', NULL, NULL),
(118, 'Kampala', NULL, NULL),
(119, 'Arusha', NULL, NULL),
(120, 'Kigali', NULL, NULL),
(121, 'Mbarara', NULL, NULL),
(122, 'Jinja', NULL, NULL),
(123, 'Dar es Salam', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `travel_firms`
--

CREATE TABLE `travel_firms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` blob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_firms`
--

INSERT INTO `travel_firms` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'North Rift', NULL, NULL, NULL),
(2, 'Great Rift', NULL, NULL, NULL),
(3, 'Akamba', NULL, NULL, NULL),
(4, 'Kampala Coach', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bravo Gidi', 'admin@admin.com', NULL, '$2y$10$fXUdt2wUbnUerOw2PBlFMOXjJ/6vJ8dOVKRihoOokAeZUEOwq8Fa2', NULL, '2019-04-16 14:59:05', '2019-04-16 14:59:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`),
  ADD KEY `bookings_route_id_foreign` (`route_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `routes_from_foreign` (`from`),
  ADD KEY `routes_to_foreign` (`to`),
  ADD KEY `routes_travel_firm_id_foreign` (`travel_firm_id`);

--
-- Indexes for table `towns`
--
ALTER TABLE `towns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_firms`
--
ALTER TABLE `travel_firms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `towns`
--
ALTER TABLE `towns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `travel_firms`
--
ALTER TABLE `travel_firms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `routes`
--
ALTER TABLE `routes`
  ADD CONSTRAINT `routes_from_foreign` FOREIGN KEY (`from`) REFERENCES `towns` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `routes_to_foreign` FOREIGN KEY (`to`) REFERENCES `towns` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `routes_travel_firm_id_foreign` FOREIGN KEY (`travel_firm_id`) REFERENCES `travel_firms` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
