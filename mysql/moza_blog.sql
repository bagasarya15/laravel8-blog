-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 09 Okt 2021 pada 10.35
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moza_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Web Programming', 'web-programming', '2021-10-08 20:49:40', '2021-10-08 20:49:40'),
(2, 'Cat', 'cat', '2021-10-08 20:49:40', '2021-10-08 20:49:40'),
(3, 'Smart Phone', 'smart-phone', '2021-10-08 20:49:40', '2021-10-08 20:49:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_19_040645_create_posts_table', 1),
(6, '2021_09_20_062301_create_categories_table', 1),
(7, '2021_10_09_101207_add_is_admin_to_users_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `source`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 'Error architecto aut.', 'illo-vero-incidunt-assumenda-accusantium-itaque-culpa', '', 'Harum incidunt voluptas tempore magni. Id dolore unde dolorum quo nihil deserunt et. Magnam illo saepe vero quae ea et cumque.', '<p>Incidunt dolor magnam earum et. Veniam qui et eveniet est officiis exercitationem. Dolor magni rerum aperiam autem autem.</p><p>Autem porro architecto hic est quidem. Laudantium inventore et vitae molestiae deleniti. Consequatur aut voluptate temporibus ipsa quo beatae.</p><p>Neque voluptas mollitia et voluptatem eaque iste voluptas praesentium. Sunt voluptatem voluptas explicabo dignissimos iure. Quis fuga eum commodi voluptatem repellat. Aperiam quo doloribus id ea. Inventore soluta cupiditate ipsa temporibus.</p><p>Porro nemo facilis qui asperiores dolore architecto. Minus quia repellat molestiae recusandae sit nihil nostrum. Aliquid vero id sunt dolor repellat cupiditate provident.</p><p>A commodi praesentium eius consequuntur neque et et. Dicta mollitia doloremque officia et quo ut assumenda voluptas. Quibusdam neque quod dolores alias reiciendis laboriosam.</p><p>Enim quas perferendis ut tempore. Qui distinctio est repudiandae modi iste nihil non. Et aut eum enim distinctio excepturi veniam.</p><p>Dicta quis et voluptas voluptas deleniti et perspiciatis laudantium. Sint repellendus unde provident ut repellat. Ipsa saepe qui ratione hic assumenda harum ullam.</p>', 'Leo Manullang', '1972-01-31 10:20:57', '2021-10-08 20:49:40', '2021-10-08 20:49:40'),
(2, 1, 3, 'Veritatis rerum et.', 'distinctio-occaecati-consequatur-non-repudiandae-provident-animi-quia-est', '', 'Nulla aut doloribus quasi commodi. Sunt esse quod cupiditate non. Quisquam alias iure eos et et quo.', '<p>Qui itaque eum voluptatem praesentium quia. Doloremque tempore tempora provident unde hic vero.</p><p>Distinctio modi maxime rerum voluptatum. Id cumque at dolores. Placeat commodi rerum sed doloribus ullam animi omnis.</p><p>Aut impedit voluptatum velit aut odio enim. Ducimus quos corrupti provident excepturi. Porro aut unde reiciendis dolores natus impedit. Saepe cupiditate itaque officiis eligendi aut.</p><p>Iusto laudantium possimus autem libero rerum dolores. Quisquam nemo similique et sed exercitationem est ea voluptas. Ipsam et eum officiis perspiciatis aut doloribus nemo. Voluptatem aut aliquid consequatur.</p><p>Facilis libero assumenda officiis consequatur cum ut. Voluptatem quo cumque quo ut error itaque vel. Quo debitis omnis consequuntur recusandae. Laborum eum saepe placeat velit sunt deleniti pariatur.</p><p>Nesciunt id molestias quidem fugiat ut eius. Ipsa adipisci sit et.</p><p>Saepe laboriosam deleniti et consectetur sed itaque. Molestiae nihil rerum sint voluptate repellat quia. Ab dolorem accusamus nulla rem quia voluptates vero vel.</p><p>Fuga ut debitis fuga. Dignissimos et qui nemo velit quia. Provident dolor sint ad id velit. Placeat voluptas ut at ut non consequatur vitae.</p><p>Est qui dolorem maiores iure error doloremque numquam deserunt. Id magnam recusandae dolor neque possimus est. Qui architecto eveniet suscipit aut consequatur nemo sint. Ratione rerum cum dolorum eius et itaque iure laudantium.</p><p>Ea maiores molestias dolorum quibusdam eius laboriosam. Sunt qui ipsa iure voluptatem. Sit quasi architecto cumque deserunt omnis error alias.</p>', 'Wani Farah Aryani', '2019-12-04 04:21:13', '2021-10-08 20:49:40', '2021-10-08 20:49:40'),
(4, 2, 3, 'Et incidunt.', 'magnam-et-suscipit-delectus-quia-reprehenderit-blanditiis-eos-facere', '', 'Quaerat quis adipisci nemo reprehenderit eveniet nisi. Vitae et et et unde nemo dolorem. Aut quo recusandae at consequatur facere. Voluptas perspiciatis quae est voluptate voluptates recusandae et.', '<p>Iusto labore ut saepe. Aut necessitatibus eos laudantium odio. In adipisci optio sunt officiis voluptates deleniti sit. Quod ut debitis fugiat voluptatem.</p><p>Dolore eos exercitationem labore rem sit consequatur aut. Corrupti ut voluptates molestias accusantium. Sit quia maiores eos consequuntur accusamus repellendus. Magnam ab alias dicta praesentium ullam.</p><p>Expedita dolorem debitis ut ipsum itaque. Est consequatur iure harum quis quibusdam. Earum quia laudantium illum natus eveniet quos.</p><p>Rerum voluptatum occaecati voluptatem. Amet eveniet totam doloribus ipsam ut. Ab ut recusandae modi eum. Cum rerum quis eaque minima tempore.</p><p>Repudiandae ipsa ipsum nam dolor. Aut ut sunt minus. Ipsum voluptas aspernatur aut consequatur fugit a autem.</p><p>Ut dignissimos cupiditate ut ut sed est corrupti deleniti. Distinctio id totam voluptatem nostrum iusto quaerat vel modi. Sint non consectetur voluptatem odio minima ea sequi. Rerum asperiores tenetur quasi reiciendis qui corrupti aperiam.</p><p>Quasi ea eum rerum quidem nobis. Et aut sit et quisquam id sunt sit iure. Reiciendis ipsa deleniti id iure deleniti natus recusandae ad. Soluta voluptatem dignissimos est ipsam repellendus saepe.</p>', 'Saiful Endra Hidayanto', '2021-01-21 20:13:23', '2021-10-08 20:49:40', '2021-10-08 20:49:40'),
(5, 1, 2, 'Est veniam dolore aspernatur aliquid architecto harum.', 'vel-perspiciatis-vitae-nesciunt-modi-dolore', '', 'Similique non error quia qui rerum. In dolorem sint aut sequi eligendi. Tempora qui tempore quia quos ad.', '<p>Labore corporis et dignissimos. Laborum cupiditate eos dolorum. Sunt est blanditiis quibusdam beatae quia eum.</p><p>Nostrum voluptas reiciendis quo dolorem blanditiis consequatur aut. Et vero adipisci suscipit consequatur repudiandae.</p><p>Consequatur eum odit eum blanditiis. Et quae ut debitis quod nesciunt quas. Ut hic sunt consequatur. Temporibus nesciunt quos possimus qui fugit molestias.</p><p>Velit architecto blanditiis fuga iure laboriosam quia ab. Et eveniet commodi hic dolorum et tempore est. Quibusdam quaerat nobis sunt aliquam nam.</p><p>Aspernatur sit dolor distinctio porro at velit aut enim. Doloremque officia sed ea eius nulla qui dolorem. A repudiandae necessitatibus sunt repellat voluptatem. Quia voluptates nisi maiores atque. Eligendi doloribus est et omnis.</p><p>Pariatur enim animi et reiciendis error architecto. Vero mollitia qui voluptatem facilis velit. Quod dolor ab in modi libero blanditiis autem. Assumenda neque ab placeat numquam officia suscipit.</p><p>Voluptates dolores quos sit asperiores excepturi sit. Est nemo et accusamus sit. Ipsa saepe assumenda est voluptas voluptatum possimus et. Eum nihil quo ut adipisci necessitatibus vel molestias.</p><p>Sint velit itaque maiores iusto autem aut temporibus. Ipsa dolor facilis dolorem et eos. Impedit est perspiciatis maxime animi officia. In repudiandae aut ad fugit ut.</p>', 'Mahmud Narpati', '2011-11-15 06:09:26', '2021-10-08 20:49:41', '2021-10-08 20:49:41'),
(6, 3, 3, 'Esse ut aliquid quos esse nostrum non tenetur quis cupiditate.', 'magni-cupiditate-aut-aut-eveniet', '', 'Eum sint excepturi ipsam velit quibusdam ut. Saepe beatae et cum voluptatibus voluptas sit. Quidem dicta nostrum soluta harum quasi voluptatem voluptate.', '<p>In et nostrum repudiandae et sit eum. Ad facilis aut voluptatem ipsam. Et velit omnis qui blanditiis est. Tempora earum quo qui qui iusto quas.</p><p>Corporis alias laboriosam nulla et. Molestias deserunt omnis consectetur dolore error.</p><p>Voluptatibus voluptatum velit enim magnam nemo sint totam. Corporis odio doloremque praesentium pariatur natus optio accusamus. Eos autem ratione eos autem id.</p><p>Qui quae ex nam molestiae. Maxime qui nam facilis necessitatibus. Perspiciatis fugit nam illum ullam quo provident.</p><p>Velit totam accusamus tempore dolorum iste quidem. Non exercitationem ut maiores quia. Similique neque qui voluptas exercitationem inventore doloribus. Quod consectetur aperiam vel odio. Aut voluptatum enim qui quo doloremque nulla.</p><p>Amet est cum est quibusdam et aut. Qui dolorum officiis qui voluptate maiores nobis harum. Qui omnis sed voluptatibus dolores illum ut incidunt.</p><p>Necessitatibus odio sequi neque consequatur. Dolores sunt veniam commodi et qui. Cum impedit aut minus ut qui nobis debitis exercitationem.</p><p>Voluptatem maiores molestiae et officiis et id. Et et non omnis fuga fuga dicta. Voluptas ducimus consequatur pariatur maxime dolor quia dolore ducimus. Omnis veritatis eum fuga laudantium sed quas eum.</p><p>Harum quia voluptas ut perferendis beatae magni. Nam temporibus perspiciatis molestiae qui inventore. Quo illum quia asperiores nulla.</p><p>Sed sit distinctio doloribus vel voluptatem. Quia delectus velit officiis sint soluta est. Minima sed non ipsam enim officiis voluptatem et.</p>', 'Jais Pradana', '2017-03-06 19:13:06', '2021-10-08 20:49:41', '2021-10-08 20:49:41'),
(7, 1, 1, 'Et et est quibusdam vel voluptate ea error et excepturi asperiores.', 'ullam-laudantium-itaque-et-vitae', '', 'Molestiae non dolor velit omnis ducimus assumenda. Voluptate dolorem dicta dolorem non reprehenderit omnis. Rem molestiae non recusandae soluta doloremque vitae expedita. Sunt autem ipsam sit sit quisquam voluptates distinctio.', '<p>Qui adipisci rem enim maiores dolorem. Eius consequuntur cupiditate est earum atque facilis. Quo voluptate id qui repudiandae eius.</p><p>Animi repudiandae facilis et soluta dolores quia. Autem consectetur sed maxime officia. Dolor sit sint ut rerum mollitia quaerat vel. Iste rerum aspernatur a molestiae. Nam ut quos rerum eaque quia.</p><p>Distinctio blanditiis enim harum similique ea. Cupiditate sapiente atque molestias molestiae quidem ex. Debitis quidem et animi omnis culpa qui nulla.</p><p>Ex et sit doloribus animi architecto rerum vel. Rem illo harum aperiam error consequatur ea. Aperiam quia excepturi vel et. Voluptatum et perspiciatis officiis fugit.</p><p>Minima exercitationem provident accusamus quia consequatur natus ad. Distinctio facere consequatur provident illum omnis commodi architecto. Doloribus ut a quasi autem et deserunt. Est quas in deleniti molestiae. Vero vel id nihil accusamus ut voluptatem sunt fuga.</p><p>Sunt quod atque dolores modi tempore vel aut. Molestiae qui sint sequi officiis. Non accusantium delectus eveniet blanditiis.</p><p>Velit sapiente odio consequuntur provident aperiam non numquam. Fuga dicta ex rerum quo ipsa. Sint aut cumque dolorum ut voluptatem inventore.</p>', 'Johan Sirait', '2003-09-29 13:25:11', '2021-10-08 20:49:41', '2021-10-08 20:49:41'),
(13, 2, 2, 'Aliquid nemo officia cum sed.', 'qui-temporibus-consectetur-nulla-expedita-qui-repellat', '', 'Et sint distinctio ea consequuntur vel doloremque. Voluptates expedita enim magnam voluptatem. Harum est eius eius recusandae ut. Dolor nihil vitae quam.', '<p>Provident vel cupiditate qui pariatur placeat perspiciatis. Veritatis rem porro quia ut iure. Omnis et molestias optio aut porro consectetur.</p><p>Voluptas rerum earum corporis quaerat sint doloribus. Reiciendis id atque soluta quia repellat. Similique est assumenda eos inventore nisi. Et quam praesentium in cupiditate numquam numquam est.</p><p>Unde sunt et odit quae ex architecto vel. Et assumenda fugit officiis facilis sed error. Saepe optio pariatur tempore ipsam accusantium qui et. Tempora perferendis et iure nisi illo aperiam omnis.</p><p>Ut nobis suscipit quia voluptas aut. Amet sit quas vero quisquam necessitatibus hic alias. Et sunt tenetur quia quo voluptates beatae. Ut officia modi voluptatem eligendi perspiciatis similique tempora at.</p><p>Libero qui velit voluptatem earum alias quia perspiciatis. Sed non fugit inventore non expedita eligendi cupiditate. Voluptatem qui saepe neque est quam.</p><p>Et error reprehenderit nobis deleniti ea nulla inventore. Temporibus quod eos alias explicabo rerum. Molestias illum non eaque. Iste id quasi sed nemo et est cumque laudantium.</p>', 'Jail Saefullah', '1989-01-28 13:08:58', '2021-10-08 20:49:41', '2021-10-08 20:49:41'),
(16, 2, 1, 'Cara Merawat Kucing', 'cara-merawat-kucing', 'post-images/wM35btk3fiwD4ois0KyFrUNjC30er3i9PmAO8WkX.jpg', 'Kucing menjadi salah hewan peliharaan di rumah. Bagi kamu yang ingin memilikinya, ada sejumlah cara memelihara kucing di rumah.&nbsp;Ada banyak pilihan hewan peliharaan di rumah mulai dari yang “stand...', '<div><strong>Kucing menjadi salah hewan peliharaan di rumah. Bagi kamu yang ingin memilikinya, ada sejumlah cara memelihara kucing di rumah.&nbsp;<br></strong><br></div><div>Ada banyak pilihan hewan peliharaan di rumah mulai dari yang “standar” seperti anjing, kucing, atau ikan. Hingga pilihan hewan eksotis dan juga berbahaya seperti ular, biawak, buaya, kadal, hingga bunglon.Namun, kucing masih menjadi salah satu pilihan untuk hewan peliharaan di rumah karena memang lucu. Meski sebenarnya, kucing juga bisa menyebalkan lantaran ulahnya. Kucing tetap jadi pilihan para pencinta hewan.&nbsp; Ada yang memilih memelihara kucing kampung. Walaupun kucing kampung kalau dipelihara bakal terlihat bagus juga kok. Kalau punya uang lebih, orang melirik kucing Persia, Munchkin, British Shorthair, dan jenis kucing impor lainnya.&nbsp; Harga kucing ini mulai dari belasan juta hingga puluhan juta rupiah. Mahal banget kan kalau punya hobi,&nbsp; Jangan salah ya, cara memelihara hewan di rumah itu sebenarnya tidak boleh sembarangan lho. Sesungguhnya cara memeliharanya memang mudah. Untuk itu, kamu wajib mengetahui cara memelihara kucing di rumah.&nbsp;<br><br></div><div><strong>1. Memahami Kebutuhan Makan Kucing&nbsp;</strong></div><div>Kucing membutuhkan makan sesuai porsinya agar tidak terlalu kegemukan atau malah terlalu kurus. Hitung berapa berat badan kucing. Kucing membutuhkan makan sebesar 2 persen dari berat tubuhnya.&nbsp; Kalau beratnya sekitar 5 kilogram, maka dia memerlukan makan 100 gram per hari. Biasakan untuk memberikan makan dua kali sehari. Sementara anak kucing harus makan lebih banyak lagi. Anak kucing bisa makan 4 kali sehari, bahkan 6 kali sehari. Jangan lupa untuk menyediakan air bersih kepada kucing. Hewan ini lebih memilih minum air bersih.&nbsp;<br><br></div><div><strong>2. Kucing Adalah Pemakan Daging&nbsp;</strong></div><div>Kucing adalah hewan yang masih bersaudara dengan harimau, singa, cheetah, leopard, dan sejenisnya. Hewan ini tergolong binatang karnivora alias pemakan daging. Jadi berikan makanan yang sesuai. Berikan kucing berupa makanan yang berasal daging hewan seperti ayam, sapi, ikan, atau lainnya. Hindari untuk memberikan makanan berupa sayuran lantaran susah dicerna dengan baik oleh kucing. Jika kucing diberikan makan berupa nasi dan sayur maka kotorannya bisa lebih berbau jika dibandingkan makan daging. Ada banyak pilihan makan siap saji dari produsen makanan hewan. Kamu tidak perlu pusing lagi.&nbsp;<br><br></div><div><strong>3. Rutin Membawa Kucing ke Dokter&nbsp;</strong></div><div>Awalnya, kucing adalah hewan liar yang berubah menjadi hewan domestik yang tinggal di rumah manusia. Untuk itu, kamu harus rajin membawa kucing kesayangan ke dokter hewan untuk vaksinasi binatang. Kucing harus mendapatkan suntikan rabies, vaksin anti cacing, dan pemeriksaan secara rutin lainnya.<br>&nbsp;<br><strong>4. Memandikan Kucing Secara Teratur&nbsp;</strong></div><div>Kalau kamu membiarkan kucing berkeliaran di dalam rumah, bahkan sampai di kamar tidur, kamu harus rajin memandikannya. Gunakan sabun dan shampo khusus kucing agar bulu kucing tidak mudah rontok saat dimandikan. Jangan lupa juga membersihkan gigi, telinga, dan kuku kucing secara berkala. Bagian ini rentan terhadap kuman dan bakteri. Saat memandikan, gunakan air dingin atau air biasa. Jangan menggunakan air panas karena bisa merusak bulu dan menyebabkan iritasi kulit.&nbsp;<br><br></div><div><strong>5. Menyikat Bulu Kucing Secara Teratur&nbsp;</strong></div><div>Jika kucing di rumah memiliki bulu yang sangat lebat seperti Munchkin, <em>British Shorthair</em> atau Persia, kamu harus rajin menyikatnya. Bulu kucing akan semakin terawat. Kamu juga bisa melihat apakah kucing terkena kutu atau tidak. <br><strong><br>6. Mengajarkan Kucing untuk Buang Air Pada Tempatnya <br></strong>Sejak kecil, kucing sudah bisa diajarkan untuk buang air kecil dan buang air besar pada tempatnya. Untuk itu, harus ada tempat khusus atau <em>litter box</em> berisi pasir atau pasir buatan tempat kucing buang air.&nbsp;<br><br></div><div><strong>7. Memiliki Kandang Atau Tempat Tidur Sendiri&nbsp;</strong></div><div>Ada baiknya memiliki kandang di luar rumah untuk tempat kucing. Kalau bisa, kandang berukuran besar. Jika tidak ingin mempunyai kandang, sediakan tempat yang nyaman bagi kucing untuk tidur di malam hari.&nbsp;<br><br></div><div><strong>8. Memelihara Kebersihan Kandang dan Peralatan Lainnya <br></strong>Bisa jadi kucing akan muntah atau tidak menghabiskan makanan sehingga kandang menjadi kotor. Atau ada sisa bulu pada tempat tidur, sisa kotoran di <em>litter box</em>, dan lainnya. Hal ini harus dibersihkan secara rutin.&nbsp;<br><br></div><div><strong>9. Mengajarkan Kebiasaan Kepada Kucing&nbsp;</strong></div><div>Hal ini mencakup mengenai makan, buang air, dan juga tidur. Kucing harus diajarkan untuk hidup teratur. Kalau tidak, kucing bisa makan di mana saja, buang air sembarangan, dan juga tidur di luar rumah. &nbsp;<br><br></div><div><strong>10. Bersikap Tegas Kalau Kucing Melakukan Kesalahan&nbsp;</strong></div><div>Kucing tergolong hewan yang <em>moody</em>. Bisa jadi kucing akan buang air sembarang, merusak barang, atau mencakar pemilik.&nbsp;<br>Kamu sebagai pemilik harus bisa bertindak tegas agar kucing tidak mengulangi lagi perbuatannya.&nbsp;<br><br></div><div><strong>11. Mengajak Kucing Bermain&nbsp;</strong></div><div>Sebenarnya, kucing adalah hewan yang bisa diajak bermain. Ajak kucing untuk bermain setiap harinya. Atau kamu bisa membelikan mainan kucing agar hewan peliharaan tidak merasa bosan di rumah. Sesekali ajak kucing keluar rumah dengan menggunakan tali pengikat atau lepas saja di halaman rumah.&nbsp;<br><br></div><div><strong>12. Memiliki Persiapan Kalau Memiliki Lebih Dari Satu Kucing&nbsp;</strong></div><div>Kalau kucing peliharaan cukup banyak, kamu harus bersiap agar kucing saling mengenal dan tidak berkelahi. Biasanya, setelah memiliki satu kucing, kamu ingin memelihara beberapa kucing lainnya di rumah. Kucing lama bisa berkelahi dengan kucing baru. Untuk itu, kamu harus memiliki persiapan jika mempunyai beberapa kucing baru.<br><br></div>', 'Unsplash.com', NULL, '2021-10-09 00:42:28', '2021-10-09 00:50:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Bagas Arya P', 'bagasarya', 'bagasarya150800@gmail.com', NULL, '$2y$10$JCbsyCTiWVGJ8TrXc.MfvOg9gJoJWxkrChi3JHP8Mj2ggSzAyau9y', NULL, '2021-10-08 20:49:40', '2021-10-08 20:49:40', 1),
(2, 'User', 'user', 'user@gmail.com', '2021-10-08 20:49:40', '$2y$10$6zvROANZqZ/.Se7OQbDaSOOQOWAToFgEfU/w/ft5X9MFTJWDX0Xcm', 'd7rUhFE2H5rESjNf84wpEbwWGe0TbC5LsTEVeUcwaNR10TJnHhuzQpuTY9gX', '2021-10-08 20:49:40', '2021-10-08 20:49:40', 0),
(3, 'Fava', 'favarini', 'favarini@gmail.com', '2021-10-08 20:49:40', '$2y$10$6cHDyvvBcKnD8Y5RIivw1Ogg/QKUteAmHnxSSGJsu9Wv.KObG1mlK', 'bJliXKpThUyP2QBNLRiYtRqasS182Jmgsb4duUFDa384rTd4zVhHpQ5nmwF2', '2021-10-08 20:49:40', '2021-10-08 20:49:40', 1),
(4, 'Mujur Nababan', 'ade.kusmawati', 'ejanuar@example.org', '2021-10-08 20:49:40', '$2y$10$6zvROANZqZ/.Se7OQbDaSOOQOWAToFgEfU/w/ft5X9M...', 'vXAjiA6THR', '2021-10-08 20:49:40', '2021-10-08 20:49:40', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
