-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 07:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ampjam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `item`, `description`, `image`) VALUES
(1, 'Excalibur', 'Excalibur, in Arthurian legend, King Arthur’s sword. As a boy, Arthur alone was able to draw the sword out of a stone in which it had been magically fixed. This account is contained in Sir Thomas Malory’s 15th-century prose rendering of the Arthurian legend, but another story in the same work suggests that it was given to Arthur by the Lady of the Lake and that, when the king lay mortally wounded after his last battle, he ordered the faithful Sir Bedivere to go to the water and throw the sword into it. An arm rose to catch it, brandished Excalibur three times, and then disappeared.', 'excalibur.jpg'),
(2, 'Calabolg', 'Spelled Caladcholg, it is also associated with the more obscure Ulster hero Fergus mac Léti, suggesting a conflation of two legends. It was said to be a two-handed sword that made a circle like an arc of rainbow when swung, and to have the power to slice the tops off hills and slaughter an entire army.', 'caladbolg.jpg'),
(3, 'Muramasa Swords', 'Due to their brilliant quality, Muramasa swords were favoured among samurai, especially the supporters of Tokugawa Ieyasu, the first shogun of the Edo period. Yet the good times didn’t last.\r\n\r\nThe Tokugawa clan were responsible for spreading the demonic rumours that became associated with Muramasa katanas. Ieyasu’s grandfather, Matsudaira Kiyoyasu, was killed by his own vassal Abe Masatoyo with a Muramasa, while Ieyasu’s father, Matsudaira Hirotada was stabbed by a similar blade. The shogun’s first son, Matsudaira Nobuyasu, also came to a violent end when he was beheaded by a Muramasa in an act of seppuku.', 'muramasa.jpg'),
(4, 'Sword of Attila', 'When a certain shepherd beheld one heifer of his flock limping and could find no cause for this wound, he anxiously followed the trail of blood and at length came to a sword it had unwittingly trampled while nibbling the grass. He dug it up and took it straight to Attila. He rejoiced at this gift and, being ambitious, thought he had been appointed ruler of the whole world, and that through the sword of Mars supremacy in all wars was assured to him.', 'attila.jpg'),
(5, 'The Wallace Sword', 'The Wallace Sword is an antique two-handed sword purported to have belonged to William Wallace (1270–1305), a Scottish knight who led a resistance to the English occupation of Scotland during the Wars of Scottish Independence. It is said to have been used by William Wallace at the Battle of Stirling Bridge in 1297 and the Battle of Falkirk (1298).', 'wallace.jpg'),
(6, 'The Harpe Sword', 'The Harpe Sword was the weapon used by the titan Cronus to castrate his father, Uranus.\r\nCronus’ Harpe has an Adamantine (Diamond) blade, and was provided to a then-unborn Cronus by his mother, Gaia. Gaia, who was being prevented from giving birth to the continually growing number of children Uranus was implanting her with, asked each of her unborn children to rise up against Uranus and free her, but was refused by all but the youngest, Cronus. When Cronus leapt out and castrated his father, the Harpe became a symbol of his power.\r\n\r\nPerseus used a similar weapon to decapitate Medusa.', 'harpe.jpg'),
(7, 'Kusanagi', 'Kusanagi-no-Tsurugi (草薙の剣) is a legendary Japanese sword and one of three Imperial Regalia of Japan. It was originally called Ame-no-Murakumo-no-Tsurugi (天叢雲剣, \"Heavenly Sword of Gathering Clouds\"), but its name was later changed to the more popular Kusanagi-no-Tsurugi (\"Grass-Cutting Sword\"). In folklore, the sword represents the virtue of valor.', 'kusanagi.jpg'),
(8, 'Zulfiqar', 'Zulfiqar is the legendary sword of Ali ibn Abi Talib (cousin and son-in-law of the Islamic prophet Muhammad), given to him by Muhammad, according to legends. It was generally depicted as a scissor-like double bladed sword on Muslim flags. It is also commonly shown in Shi’ite depictions of Ali and in the form of jewelry functioning as talismans or as a scimitar (a short sword with a curved blade) terminating in two points. Often, quotes mentioning this sword are inscribed on Islamic swords. Also, as a reference to this legendary sword, Islamic swords are sometimes made with a split tip.', 'zulfiqar.jpg'),
(9, 'Damascus Steel Swords', 'Damascus steel was the forged steel of the blades of swords smithed in the Near East from ingots of Wootz steel[1] either imported from Southern India or made in production centres in Sri Lanka,[2] or Khorasan.[3] These swords are characterized by distinctive patterns of banding and mottling reminiscent of flowing water, sometimes in a \"ladder\" or \"rose\" pattern. Such blades were reputed to be tough, resistant to shattering, and capable of being honed to a sharp, resilient edge.', 'damascus.jpg'),
(10, 'Joyeuse', 'Joyeuse was, in medieval legend, the sword wielded by Charlemagne as his personal weapon. The name means \"joyous\". A sword identified as Joyeuse was used in French royal coronation ceremonies since the 13th century, and is now kept at the Louvre museum.', 'joyeuse.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
