-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 03:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brh_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Best Price', 'lower-class', 'category-images/0D2R2BUjkWPNmXpi6Q0NQLrBEqAkRp91LeUgb4o4.png', '2022-06-19 02:55:53', '2022-06-19 04:21:45'),
(2, 'Standart', 'standart', 'category-images/tX7iSzxdnnZ8XQZ2KFkNymKrSd2HSLhiXCq80qOn.png', '2022-06-19 02:56:10', '2022-06-19 04:21:59'),
(3, 'Premium', 'premium', 'category-images/GI2eu8GWkE0CP8YP7QKjxUuQjKoNJ57kjNSdopmU.png', '2022-06-19 02:56:21', '2022-06-19 04:22:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facility` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `price`, `location`, `facility`, `rating`, `contact`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Negara Hotel', 'negara-hotel', 'hotel-images/u3jkeqA9Mg5n4gsmVV83Yf7Zvn5ugQZiJMRjtYwe.jpg', 'Negara Hotel is a budget hotel in Kota Negara with a minimalist contemporary design located in the h..', '<div>Negara Hotel is a budget hotel in Kota Negara with a minimalist contemporary design located in the heart of Kota Negara - Bali. This 44-room hotel provides a distinctive feel of Kota Negara which is full of a thick touch of Balinese culture.<br><br>All hotel rooms have been perfectly arranged and are equipped with flat screen TVs. Certain rooms have a seating area to relax after a busy day and each room has a private bathroom. This is to increase the comfort of you and your family with adequate and very comfortable facilities to improve the quality of your overall stay at Negara Hotel .<br><br>Strategically located, Negara Hotel offers easy access to lively tourist areas in the City of the Country. Budget Hotels in Negara-Bali which are in the center of the city of the country that will make you more comfortable staying in this hotel because it is really close to other supports such as restaurants and malls.</div>', '213.750', 'Jl. Ngurah Rai No.107, Pendem, Kec. Negara, Kabupaten Jembrana, Bali 82218', 'Restaurant, AC, Free Parking', '3.8', '+62 877 6144 2728', NULL, '2022-06-19 03:00:11', '2022-06-19 03:00:11'),
(2, 3, 1, 'The edge', 'the-edge', 'hotel-images/AraljjlxmgAStZUe5OsSUf7lt7EJel0z7bojaqZA.jpg', 'Experience tranquillity, luxury, and impeccable service at The edge. Nestled upon a clifftop in Uluw..', '<div>Experience tranquillity, luxury, and impeccable service at The edge. Nestled upon a clifftop in Uluwatu, Bali with breathtaking views of the ocean, this is your chance to enjoy an unforgettable romantic getaway or family holiday.<br><br>Our villa resort in southern Bali will allow you to immerse yourself in the best that Indonesia has to offer. Our team of highly-trained butlers are available 24-hours a day and will take care of you throughout your stay, while our spacious villas, spectacular sky pool, and modern facilities will leave you speechless.</div>', '13.770.000', 'Jalan Pura Goa Lempeh Banjar Dinas Kangin Pecatu, Uluwatu, Kec. Kuta Sel., Kabupaten Badung, Bali 80361', 'Club, Work Out, 24h Reception, Spa', '4.8', '+62 361 8470 700', NULL, '2022-06-19 03:02:57', '2022-06-19 03:14:21'),
(3, 3, 1, 'Alila Villas Uluwatu', 'alila-villas-uluwatu', 'hotel-images/N5XxDJgU4fU53GSbpNXXSB6nYXYIDGXI6uS9FrAv.jpg', 'Offering a 50-meter outdoor pool overlooking the Indian Ocean, Alila Villas Uluwatu is a 15-minute d..', '<div>Offering a 50-meter outdoor pool overlooking the Indian Ocean, Alila Villas Uluwatu is a 15-minute drive from Jimbaran Bay. Offering pool villas, the hotel has a 24-hour gym and spa.<br><br>Alila Villas has an art gallery featuring modern Indonesian art, and a library for quiet reading. The fitness center includes a yoga and Pilates studio. You will enjoy the convenience of butler service and free Wi-Fi.<br><br>The modern Balinese style villas feature a raised outdoor pavilion overlooking the sea. Each villa has an outdoor dining area and large bathroom. Room amenities include a 32-inch flat-screen TV and an espresso machine.</div>', '13.695.048', 'Jl. Belimbing Sari Tambiyak, Pecatu, South Kuta, Badung Regency, Bali 80364', 'Swimming Pool, Alila Hospitalities, Sunset Cabana', '4.8', '+62361 8482 166', NULL, '2022-06-19 03:04:33', '2022-06-19 03:15:48'),
(4, 1, 2, 'Handara Golf & Resort Bali', 'handara-golf', 'hotel-images/yoW8Z1ccdZtIx6flcwOznhgsFSZNcmMgpFNd2PPG.jpg', 'Handara Golf &amp; Resort Bali is a mountain golf course &amp; resort. It boasts a world class golf..', '<div>Handara Golf &amp; Resort Bali is a mountain golf course &amp; resort. It boasts a world class golf course in a magnificent setting, cozy hotel and cottage accommodation and a beautiful dining experience.<br><br>Come and experience the natural wonderland featuring lush tropical gardens, cool weather, and breathtaking mountain scenery. A perfect place to getaway from the hustle and bustle.<br><br>Handara has benefited from some major recent renovations. Come and experience the new Breeze Terrace with amazing 180 degree panorama over the spectacular mountain view. Another unforgettable experience is the new Soyokaze restaurant where guests can enjoy Japanese cuisine by Handara’s veteran chef whilst appreciating the serene ambiance provided by the stunning panorama. Other renovations include the new Pro-Shop, Ladies Locker Room, renovated Cottage and Chalet rooms.</div>', '820.799', 'Desa Singaraja-Denpasar Pancasari Sukasada, Pancasari, Kec. Buleleng, Kabupaten Buleleng, Bali 81161', 'Golf Area, Resort, Spa', '4.4', '+6236 1846 8600', NULL, '2022-06-19 03:05:51', '2022-06-19 05:32:06'),
(5, 2, 1, 'Adiwana Dara Ayu', 'adiwana-dara-ayu', 'hotel-images/98YzeEqyRYIKTFaoLu5hmYr8AFA0D9VgYpmMG9RF.jpg', 'Adiwana Dara Ayu Villas is a cluster of secluded Adults-Only eco friendly boutique suites &amp; vill..', '<div>Adiwana Dara Ayu Villas is a cluster of secluded Adults-Only eco friendly boutique suites &amp; villas immersed in the lush green of unspoiled scenery which offers terraced rice fields and mountains. A place of breath-taking natural exquisiteness, encircled by a sacred creek and underground mineral springs, Adiwana Dara Ayu Villas is nestled in Payangan-Ubud, host to one of the most beautiful and the richest indigenous culture area in Bali. We appeal to a varied range of vacationers as there are many things to do in the Villa and its area such as spa, gym, picnic lunch, romantic dinner, beautifully designed infinity pools,<br><br>or even the most appealing one is the fine art of doing nothing at all. Each villa is a unique retreat surrounded by tropical Balinese landscape featuring a sizeable infinity pool and space to enjoy a peaceful rice fields view with loved one. The suites are specially design for creating romantic ambience overlooking the generous-sized infinity pool. All bathrooms are set with natural stone bathtub, sophisticated amenities and decorative waterfall to enrich the romantic ambience. Balinese courteous butlers at Adiwana Dara Ayu Villas will ensure that all possible needs are smoothly taken care.</div>', '1.095.610', 'JL. Raya Buahan, No. 88X, Majangan, Payangan, Buahan Kaja, Payangan, Buahan Kaja, Payangan, Buahan Kaja, Kec. Payangan, Kabupaten Gianyar, Bali 80572', 'Swimming Pool, Kembang Suite Bathub, Restaurant', '4.5', '+62361 9000 797', NULL, '2022-06-19 03:13:48', '2022-06-19 03:15:17'),
(6, 1, 2, 'Atanaya Hotel', 'atanaya-hotel', 'hotel-images/6CNOVJKE6iKsLkXQzDOVIWx6PpFmO9g4LhTnSW0t.jpg', 'Atanaya Hotel Kuta Bali is CHSE Certified, features 109 rooms accommodation, 5 meeting rooms, Balagr..', '<div>Atanaya Hotel Kuta Bali is <strong>CHSE Certified</strong>, features 109 rooms accommodation, 5 meeting rooms, Balagra Resto, Brewu Coffee &amp; Pastry and Rooftop pool. Located on Sunset Road in Kuta Bali, next to Krisna gift store, holidays here are filled with physical and spiritual relaxation.&nbsp; With hotel facilities : free parking &amp; basement parking, wireless internet connection in guestrooms and public areas, rooftop swimming pool, non smoking hotel, and room service.<br><br>Atanaya Kuta Bali Hotel is located only 25 minutes from Ngurah Rai International Airport, our hotel is capable in creating the feel of home while providing the best modern comfort.</div>', '560.500', 'Jl. Sunset Road No.88A, Kuta, Kec. Kuta, Kabupaten Badung, Bali 80361', 'Swimming Pool, AC, Free Parking', '4.4', '+62361 8468 600', NULL, '2022-06-19 03:22:53', '2022-06-19 05:34:07'),
(7, 3, 1, 'Amnaya Resort Kuta', 'amnaya-resort-kuta', 'hotel-images/VJjR4EqKfUkog3kCVJMnyq2OXUSoVYzCKkZ9QnCk.jpg', 'Amnaya Resort Kuta is just a 4-minute walk from Discovery Shopping Mall and offers comprehensive spa..', '<div>Amnaya Resort Kuta is just a 4-minute walk from Discovery Shopping Mall and offers comprehensive spa treatments and an outdoor pool. Free WiFi is available in all areas for all staying guests.<br><br>The spacious rooms at Amnaya Resort Kuta feature warm tones, private balconies and seating areas. In-room amenities also include a coffee/tea maker, minibar and flat-screen TV with cable channels. The private bathroom has a shower, hairdryer and bathroom amenities. Bathrobes and a safety deposit box are also provided. Some rooms have direct access to the swimming pool.</div>', '2.092.500', 'Jalan Kartika Plaza,Gang Puspa Ayu No. 99, Kuta, Kabupaten Badung, Bali 80361', 'Restaurant, Swimming Pool, WiFi, Spa, Receptionist 24 Hours', '4.6', '+62877 0168 8503', NULL, '2022-06-19 03:24:57', '2022-06-19 03:25:44'),
(8, 2, 1, 'Aryaduta Bali', 'aryaduta-bali', 'hotel-images/lENoDqdlIL4nLkgZya4VGJHCbRCmBr8MlGJ2C0Mo.jpg', 'Aryaduta Bali offers five-star accommodation in the middle of South Kuta. The hotel features a rooft..', '<div>Aryaduta Bali offers five-star accommodation in the middle of South Kuta. The hotel features a rooftop pool and traditional spa treatments. Free WiFi is also available in all areas of the hotel for all staying guests.<br><br>Aryaduta Bali is located just 950 meters from Discovery Shopping Mall and Waterbom Bali Indonesia. Kuta Beach is 1.8 km from the hotel, while Jimbaran Beach is a 13-minute drive from the hotel. Ngurah Rai International Airport is only a 4-minute drive from the hotel. An airport shuttle service is also available at an additional charge.</div>', '1.037.439', 'Jl. Kartika Plaza, Lingkungan Segara, Kuta, Kabupaten Badung, Bali 80361', 'Long Bar, Swimming Pool, WiFi, Spa, 24 Hours Receptionist', '4.5', '+62361 4754 188', NULL, '2022-06-19 03:31:38', '2022-06-19 03:39:02'),
(9, 1, 1, 'Graha Socio Hotel Nusa Dua', 'graha-socio-hotel-nusa-dua', 'hotel-images/u6qsECZQYsbnvSey0yZKltd3QudgOmBS6z8SqjGz.jpg', 'Graha Socio Hotel in Nusa Dua Bali, near Toll Bali mandara, 6 minute from ITDC, 10 minute from panta..', '<div>Graha Socio Hotel in Nusa Dua Bali, near Toll Bali mandara, 6 minute from ITDC, 10 minute from pantai benoa, we welcome for family guest, group guest, and solo guest, we have many facility, restaurant, public pool, gym, kids playground, and bathminton court. all room are have terace<br><br>We can welcoming you with good service and all facility free use if you stay at Graha Socio Hotel Nusa Dua Bali.</div>', '217.240', 'Toll, Jalan By Pass Ngurah Rai, Jalan Nusa Dua – Bandara Ngurah Rai Road No.87x, Benoa, Kec. Kuta Sel., Kabupaten Badung, Bali 80361', 'Free Park, Restaurant, Swimming Pool, WiFi', '4.4', '+62361 778 031', NULL, '2022-06-19 03:34:51', '2022-06-19 03:34:51'),
(10, 1, 1, 'The ONE Legian', 'the-one-legian', 'hotel-images/5ZhQY77iJsHtWmtlYZZ4W93h9khmEXyh6jXgWQYi.jpg', 'The ONE Legian offers 4-star accommodation with a minimalist contemporary design. A 4-minute drive t..', '<div>The ONE Legian offers 4-star accommodation with a minimalist contemporary design. A 4-minute drive to Kuta Beach, the hotel also offers two outdoor swimming pools, a rooftop area for events and a spa. Free WiFi is available throughout the hotel.<br><br>Kuta Beach can be reached in 4 minutes by car from the hotel. Those of you who want to shop can visit Beachwalk Shopping Center with a 4-minute drive. Meanwhile, it takes 14 minutes to drive to Ngurah Rai International Airport from The ONE Legian. Airport shuttle service is available upon request at a surcharge.</div>', '345.000', 'Jl. Raya Legian No.117, Kuta, Kec. Kuta, Kabupaten Badung, Bali 80361', 'Gym, Spa, Swimming Pool, luxury atmosphere', '4.4', '+62361 3001 101', NULL, '2022-06-19 03:38:11', '2022-06-19 03:38:11'),
(11, 1, 1, 'Grand Whiz Hotel Nusa Dua', 'grand-whiz-hotel-nusa-dua', 'hotel-images/yxQ9S1L1miW1JPX3QRxlK9wB1KPKdCtua32PUnE8.jpg', 'Grand Whiz Hotel Nusa Dua is a four-star accommodation in Bali which can be reached on foot from Nus..', '<div>Grand Whiz Hotel Nusa Dua is a four-star accommodation in Bali which can be reached on foot from Nusa Dua Beach. The hotel features 2 outdoor swimming pools and a fitness center. WiFi and free parking are also available for in-house guests.<br><br>Grand Whiz Hotel Nusa Dua is located a 5-minute drive from Bali National Golf Club, a 7-minute drive from Tanjung Benoa Beach and a 14-minute drive from Jimbaran Beach. Garuda Wisnu Kencana Cultural Park is located just a 20-minute drive from the hotel. Ngurah Rai International Airport is 11.4 km from the hotel and airport shuttle service is available at an additional charge.</div>', '700.524', 'Komplek Wisata Nusa Dua, Jl. Kw. Nusa Dua Resort, Benoa, Kec. Kuta Sel., Kabupaten Badung, Bali 80363', 'Swimming Pool, WiFi, 24 Hours Receptionist', '4.3', '+62361 8498 020', NULL, '2022-06-19 05:01:09', '2022-06-19 05:01:09'),
(12, 1, 1, 'CLV Hotel & Villa', 'clv-hotel', 'hotel-images/kXqEdBlLyU6WQzyo1uBiDB3xfs6LS7B63yAXcDdU.jpg', 'This upscale hotel surrounded by farmland is an 11-minute walk from the picturesque Ulun Danu Berata..', '<div>This upscale hotel surrounded by farmland is an 11-minute walk from the picturesque Ulun Danu Beratan temple on Lake Beratan, 3 km from Bali Botanical Gardens, and 65 km from Ngurah Rai International Airport.<br>Situated in a 2-story, 3-bedroom villa, the bright, modern rooms come with flat-screen TVs, safes and en suite bathrooms. Living areas, minifridges, and tea and coffeemakers, are shared. Some rooms come with balconies, and garden or lake views.<br>Breakfast is served in a dining area with floor-to-ceiling windows and a terrace. Additional amenities include a hip rooftop bar, a spa and a garden. An airport shuttle can be arranged.</div>', '334.900', 'Jl. Raya Bedugul, Candikuning, Kec. Baturiti, Kabupaten Tabanan, Bali 82191', 'Room, Free WiFi, Free Parking, Free Breakfast, Restaurant, Laundry', '4.3', '+62819 9910 5252', NULL, '2022-06-19 05:04:09', '2022-06-19 05:04:09'),
(13, 1, 1, 'Strawberry Hill Hotel And Restaurant', 'strawberry-hill-hotel-and-restaurant', NULL, 'This tranquil mountain resort in traditional Balinese bungalows is 3 km from both Lake Beratan and t..', '<div>This tranquil mountain resort in traditional Balinese bungalows is 3 km from both Lake Beratan and the Pura Ulun Danu Bratan water temple. It\'s 5 km from the Bratan volcanic lake complex.<br>Simply furnished bungalows have balconies with mountain views. All feature complimentary Wi-Fi and satellite TV, as well as bathrooms with free-standing tubs. Room service is available.<br><br>Parking and breakfast are included. There\'s a casual restaurant with a fireplace, darts and a pool table. Other amenities consist of a BBQ area, a fire pit, and gardens with strawberry patches. Pets are permitted.</div>', '648.000', 'Jl. Raya Denpasar-Singaraja Km. 48, Jl. Raya Bedugul, Batunya, Kec. Baturiti, Kabupaten Tabanan, Bali 82191', 'Room, Free WiFi, Free Parking, Free Breakfast, Restaurant', '4.2', '+62368 212 65', NULL, '2022-06-19 05:07:14', '2022-06-19 05:07:14'),
(14, 1, 1, 'Umah Lumbung Bedugul', 'umah-lumbung-bedugul', 'hotel-images/faQk8TtBNta6TVwc9g4BYDxleJl08eWbBO00Jv9v.jpg', 'Umah lumbung bedugul offers accommodation with a restaurant, free private parking, a garden and a te..', '<div>Umah lumbung bedugul offers accommodation with a restaurant, free private parking, a garden and a terrace in Bedugul, 1.3 km from Ulun Danu Temple.<br>Every room at this hotel has a balcony. A continental breakfast is available every morning at Umah lumbung bedugul. The nearest airport is Ngurah Rai International Airport, 51 km from the property.</div>', '400.000', 'Jln intaran, Jl. Kebun Raya Bedugul, Candikuning, Kec. Baturiti, Kabupaten Tabanan, Bali 82191', 'Room, Free WiFi', '4.4', '+62813 3915 7886', NULL, '2022-06-19 05:09:26', '2022-06-19 05:09:26'),
(15, 1, 1, 'SenS Hotel & Spa, Ubud Town Centre', 'sens-hotel', 'hotel-images/m6rdKS2ibsC6YKYTkWnhCQodu83fF3UheDvGMUqP.jpg', 'Stay in our 4-star boutique hotel in downtown Ubud, on the island of Bali. Enjoy being within walkin..', '<div>Stay in our 4-star boutique hotel in downtown Ubud, on the island of Bali. Enjoy being within walking distance to major Ubud town tourist attractions, our renowned warmth in service, wonderful restaurant and well-appointed spa. Discover elegant, contemporary aesthetics graced by artwork and architecture that reflect the artisan heritage of Bali’s cultural capital at the new SenS Hotel and Spa + Conference, Ubud Town Center.&nbsp;<br><br>Whether you are travelling for business, leisure or little bit of both, you’ll find the perfect combination of comfort and convenience, of value and indulgence, all within walking distance of Ubud Royal Palace, Sacred Monkey Forest, museums, art galleries, shopping, dining, and cafes. With a commitment to the warmth and caring of Asian hospitality, SenS Hotel and Spa + Conference offers a boutique hotel experience beyond expectations.</div>', '710.000', 'Jl. Sukma Kesuma No.1, Banjar Tebesaya, Kecamatan Ubud, Kabupaten Gianyar, Bali 80571', 'Room, Free WiFi, Free Breakfast, Swimming Pool', '4.4', '+62361 8493 328', NULL, '2022-06-19 05:13:40', '2022-06-19 05:13:40'),
(16, 1, 1, 'Desak Putu Putra Homestay', 'desak-putu-putra-homestay', 'hotel-images/nJZFkYpxG0aOsPB0OaloWOj09zkGd5AxX3NAJy3L.jpg', 'Ideal for fun and relaxation, Desak Putu Puetra Homestay is 10-minute drive from Monkey Forest and U..', '<div>Ideal for fun and relaxation, Desak Putu Puetra Homestay is 10-minute drive from Monkey Forest and Ubud Art Market. From here, guests can enjoy easy access to all that the lively city has to offer. This budget hotel is in the vicinity of popular city attractions such as Monkey Forest, Ubud Art Market, and Ubud Royal Palace. When visiting Bali, you\'ll feel right at home at Desak Putu Putera Homestay, It just 15 minutes’ short walk to shopping district.</div>', '247.500', 'Jl. Sukma No.30, Dusun Banjar Tebesaya, Desa Peliatan, Ubud, Peliatan, Kec. Gianyar, Kabupaten Gianyar, Bali 80571', 'Room, Free Wifi, AC, Free Breakfast, Swimming Pool', '4.3', '+62361 9732 04', NULL, '2022-06-19 05:16:04', '2022-06-19 05:16:04'),
(17, 1, 1, 'Green Padma Ubud', 'green-padma-ubud', 'hotel-images/90PUAIg5Ppb8sqCCwronSHHNQr20yuklT8IzdVPU.jpg', 'A comfortable residence with a peaceful rural atmosphere. This inn has been established in February..', '<div>A comfortable residence with a peaceful rural atmosphere. This inn has been established in February 2020 and has been operating since June 2020.<br><br>Located close to the city of ubud and the surrounding entertainment area. With all humility, we are ready to help complete all your holiday needs. CP: Ayu Suci (08123986311).</div>', '247.500', 'Jl. Sukma No.30, Dusun Banjar Tebesaya, Desa Peliatan, Ubud, Peliatan, Kec. Gianyar, Kabupaten Gianyar, Bali 80571', 'AC, TV, Breakfast, Swimming Pool, Free Wifi, Balinese Spa, Transportation Services', '4.0', '+62812 3986 311', NULL, '2022-06-19 05:18:25', '2022-06-19 05:18:25'),
(18, 2, 1, 'Beehouse Dijiwa Ubud', 'beehouse-dijiwa-ubud', 'hotel-images/H8cn8VbHOmvBtX5eeUPWdbMl5mMysvfMlCLEPFfz.jpg', 'Like a bee returning to its hive, we all long for a sanctuary that feels close to home. Beehouse Dij..', '<div>Like a bee returning to its hive, we all long for a sanctuary that feels close to home. Beehouse Dijiwa Ubud offers a private paradise surrounded by amazing rice paddies, lush greeneries, and view of Mount Agung. The resort is centered around a stunning pool lagoon that acts as an oasis on a hot tropical day.&nbsp;<br><br>The garden and stone pathways will lead you to the beautifully-design villas. The house has a unique façade of a circular shape made of bamboo. The rest of the structures are also dominated by natural materials, like wood, bamboo, and stone. The rooms are spacious and open, allowing you to bask in nature at its finest. The facilities are yours to enjoy, with full privacy, because the resort is reserved for adults only (18+).&nbsp;<br><br>Revel in the magical moments, from watching the breathtaking sunrise to observing birds playing in the rice paddies. Beehouse Dijiwa Ubud is the perfect destination for travelers who seeks a one-of-a-kind getaway and to step in a world of unspoiled natural beuty. Experience the ultimate Bali escape at Beehouse Dijiwa Ubud.</div>', '1.770.500', 'Jl. Sawah Indah, Peliatan, Kecamatan Ubud, Kabupaten Gianyar, Bali 80571', 'Free Parking, Restaurant, Swimming Pool, WiFi, Spa', '4.7', '+62361 6207 677', NULL, '2022-06-19 05:20:47', '2022-06-19 05:20:47'),
(19, 1, 1, 'Kandarpa Ubud', 'kandarpa-ubud', 'hotel-images/29j70k6kzzp320GpQp39qjzHxRttKs91bAao2Zol.jpg', 'Kandapa is a perfect place to stay in Ubud while being close to all the actions yet sheltered from t..', '<div>Kandapa is a perfect place to stay in Ubud while being close to all the actions yet sheltered from the hustle-bustle of the city. This boutique hotel is only 5 minutes from the Ubud Palace, and Ubud Art Market, and can only be assessed by a quiet road through the luscious rice paddies. The room design is inspired by the minimalist idea of simplicity and strives to be 100% environmentally friendly.</div>', '467.000', 'Jl. Cok Gede Rai No.23, Peliatan, Kecamatan Ubud, Kabupaten Gianyar, Bali 80571', 'Swimming Pool, Restaurant, AC', '4.4', '+62361 9086 111', NULL, '2022-06-19 05:22:52', '2022-06-19 05:22:52');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_06_044044_create_hotels_table', 1),
(6, '2022_06_07_014140_create_categories_table', 1),
(7, '2022_06_07_140224_create_reviews_table', 1),
(8, '2022_06_10_092010_create_articles_table', 1),
(9, '2022_06_10_092331_add_foreign_keys_to_articles', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin BRH', 'admin', 'admin@gmail.com', NULL, '$2y$10$oKNDNxp2Dh2MimHe/pSqguugoWuXxanL2r2tz4IkwTjb0NkzfZ2ES', 1, NULL, '2022-06-19 02:42:15', '2022-06-19 02:42:15'),
(3, 'testing', 'testing', 'testing123@gmail.com', NULL, '$2y$10$F3ttOd6C.Dct/es6onYNmeq6p/Ajsg04qQ7in84LcpcsGEPhQA1lW', 0, NULL, '2022-06-19 05:25:18', '2022-06-19 05:25:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `id_hotel_fk1_idx` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hotels_slug_unique` (`slug`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id_fk3_idx` (`hotel_id`),
  ADD KEY `user_id_fk2_idx` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `user_id_fk1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
