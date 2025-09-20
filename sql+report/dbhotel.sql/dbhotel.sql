-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2024 at 04:51 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `addblog`
--

CREATE TABLE IF NOT EXISTS `addblog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `submit_by` varchar(150) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `currentdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `addblog`
--

INSERT INTO `addblog` (`id`, `title`, `submit_by`, `pic`, `message`, `currentdate`) VALUES
(6, 'Breaking Barriers: Designing Hotels for Guests with Special Abilities', 'Aryan Singh', '02_BlogBanner_800x333.jpg', 'Imagine arriving at a hotel, exhausted from your journey, and experiencing that the basic facilities are inaccessible. \r\n\r\nThe entrance has steep stairsâ€“ with no wheelchair ramp, the reception desk is too high and the staff seems inconsiderate. \r\n\r\nYou face a series of unnecessary hurdles just to enter the hotel, which was supposed to be your peaceful abode for the next couple of days.\r\n\r\nFor many guests with special abilities, this is a common and frustrating experience. And trust me, itâ€™s not just a matter of comfort, but also of dignity and independence. \r\n\r\nYou might think this is not as common as I am making it sound. But pause for a moment and read the below stats.\r\n\r\nA whopping 53% of adults with disabilities report staying in a hotel or motel within the past two years. \r\n\r\nAnd the bad news? Nearly 46% of these travelers say they have faced major accessibility obstacles during their stay. \r\n\r\nAs the hospitality industry continues to evolve, it is the utmost responsibility of hotels to become more inclusive, ensuring every guest, regardless of their physical, sensory, or cognitive abilities, feels welcomed and accommodated.\r\n\r\nAnd this blog is your guide to just that.', '2024-08-01 19:11:34'),
(7, 'From Ordinary to Extraordinary: Elevate Hotel Offerings with Local Talent', 'Aryan Singh', 'Blog-Banner_Gig-Workers.jpg', 'The traditional â€œone-size-fits-allâ€ approach to hospitality staffing is slowly becoming a relic of the past. The gig economy empowers businesses to source a wider range of expertise than ever before. \r\n\r\nLocal talent brings with them a unique perspective, a deep understanding of their community, and an inherent passion for their craft. This presents a wealth of opportunities. Hereâ€™s how: \r\n\r\nAccess to Diverse Expertise: Gig workers often bring niche expertise and skills. Whether itâ€™s a yoga instructor for wellness programs, a local artist for cultural events, or a chef specializing in local cuisine, these professionals can provide unique and high-quality experiences that might not be available in-house. \r\nFlexibility and Scalability: Need a Spanish-speaking tour guide for a week? The gig economy allows you to scale your workforce up or down based on seasonal fluctuations or special events. Plus, they bring fresh ideas and perspectives to your business. Their varied experiences and backgrounds can lead to innovative approaches and solutions that enhance your services and operations. \r\nCost-Effectiveness: Hiring gig workers can be more cost-effective than maintaining a full-time staff, especially for roles that are not needed year-round. This flexibility helps manage budgets more effectively and allows for investment in other areas that can enhance the guest experience. \r\nLocal Authenticity: Partnering with local gig workers helps in creating authentic experiences that reflect the true culture and vibe of the area. Guests are increasingly looking for genuine, immersive experiences when they travel, and local freelancers can provide this authenticity. \r\nAt the same time, local talent brings a unique perspective and passion for their craft. This translates into more engaging experiences for guests, fostering a deeper connection with the destination. ', '2024-08-01 19:14:45'),
(11, 'The What, Why, and How of Building A Subscription Model for Hotel Stays', 'Aryan Singh', 'Blog-Post-800x333_Subcription-Model.png', 'Last weekend, I traveled to Pondicherry, our go-to destination for long weekends. Traveling with our furry baby, Coco means we always choose a pet-friendly resort that caters to all our needs. \r\n\r\nFrom a special pool for pups to spacious rooms and the lush green farm, it is our favorite place to stay!  \r\n\r\nAnd the extra belly rubs Coco gets from the staff are just the icing on the cake.ðŸ¶\r\n\r\nThis last trip was our sixth stay, and while checking in, the manager mentioned a new subscription model they were offering which could save me thousands of bucks. This piqued my interest as it was a completely new concept for me. \r\n\r\nAnd after some digging with Coco, let me tell you, itâ€™s a game-changer for the hospitality business!\r\n\r\nSo, let me dive deep into what a subscription model for hotel is and how you being an accommodation provider can make the most out of it. \r\n\r\nA subscription model is basically a business strategy where customers pay a recurring fee, usually monthly or annually, to access a product or service. This model has gained popularity across various industries, revolutionizing how businesses interact with their customers and generate revenue.\r\n\r\nAt its core, a subscription model focuses on building long-term relationships with customers. Instead of a one-time transaction, it encourages continuous engagement by offering ongoing value. For example, streaming services like Netflix and Spotify have transformed entertainment consumption by providing unlimited access to their vast libraries for a monthly fee. Similarly, subscription boxes like Barkbox and Dollar Shave Club deliver curated products to customersâ€™ doorsteps regularly, creating a loyal customer base.\r\n\r\nIn the context of the hospitality industry, a subscription model means offering guests a package where they pay a fixed amount to enjoy a set number of stays or services over a specified period. This could range from monthly stays at a particular hotel chain to access to exclusive amenities and experiences. \r\n\r\nFor example, Inspirato, a luxury vacation home, offers a special subscription model that allows its members to book unlimited stays in 5-star properties including cruises and their vacation homes. The subscription rates started from 2500$ and for members, they could save on nightly rates, enjoy new experiences, and stay anywhere without spending additional costs. \r\n\r\nZoku, in Amsterdam, is another example of a micro aparthotel that offers flexible stays for guests with subscription plans starting from 2,750â‚¬ per month. \r\n\r\nYou can price the subscription plans based on your location, the amenities you offer and a handful of other key factors. But donâ€™t be fixated on a price, remember flexibility is the key. ', '2024-08-02 19:30:07'),
(10, 'Winning More Group Business: Mastering The Art of Hotel RFP', 'Aryan Singh', 'Group-Booking_blog-Banner (1).jpg', 'Imagine this, a big corporate event is rolling into town, and hundreds of guests need a place to stay.  \r\n\r\nSounds like a dream come true for your hotel rooms? Absolutely! But before you start popping the champagne, thereâ€™s usually one hurdle to jump â€“ the RFP.\r\n\r\nAn RFP stands for Request for Proposal. Itâ€™s basically a shopping list from event planners or companies looking for the perfect hotel for their group.  \r\n\r\nTheyâ€™ll outline their needs â€“ number of rooms, meeting space, budget, you name it â€“ and then they will send this list or hotel RFP to several hotels like yours. Your job? To convince them your hotel is the best fit with a killer proposal.\r\n\r\nWhy are hotel RFPs important? Hereâ€™s the scoop:\r\n\r\nBig Bucks: Group bookings mean serious cash flow for your hotel. Landing just a few RFPs can fill up rooms and boost your revenue significantly.\r\nSteady Business: Unlike unpredictable single travelers, groups often book well in advance, giving you a predictable income stream.\r\nFuture Bookings: Impress a group this time, and they might choose you again for their next event â€“ hello, repeat business!\r\nSo, there you have it. RFPs are your gateway to a goldmine of group bookings. Now, letâ€™s crack the code on how to win those proposals and turn them into happy hotel stays, but before that letâ€™s dig a bit deeper into the group business market.\r\n\r\nRemember that big corporate event we mentioned? Well, guess what? Groups like those are becoming a bigger deal for hotels. \r\n\r\nBut hereâ€™s the catch: not all groups are the same. \r\n\r\nSome require fancy meeting spaces and top-notch catering, while others might be all about budget-friendly rooms and a fun social atmosphere. The key is to understand the different types of groups and what makes them tick.\r\n\r\nHereâ€™s a quick rundown of some common groups:\r\n\r\nConferences & Meetings: Think business suits and presentations. These groups need well-equipped meeting spaces, reliable technology, and catering for working lunches.\r\nWeddings: The bridezilla and her entourage! These groups often require special event spaces, banquet halls, and on-site catering for the big day.\r\nSports Teams: Game time! Sports teams need comfortable rooms, laundry services for those sweaty uniforms, and sometimes space for post-game team bonding.\r\nFamily Reunions: Itâ€™s all about togetherness! These groups might be looking for connecting rooms, kid activities, a swimming pool, family-friendly activities, and if you are lucky then catering options for big group meals.\r\nBy understanding different types of groups and their specific needs, you can tailor your RFP responses and hotel offerings to become their perfect match. This way, when a group comes knocking, your hotel will be the first name on their list!', '2024-08-02 19:27:22'),
(12, 'Credit Card Fraud at Hotels: How to Stay One Step Ahead of Them?', 'Aryan Singh', '6-Powerful-Methods-to-Combat-Hotel-Credit-Card-Fraud-blog.png', 'In a recent survey by Stripe, 64 percent of global business leaders said that it has become harder to fight credit card fraud since the pandemic.\r\n\r\nBut hereâ€™s the good news: there are things you can do to fight back!\r\n\r\nThis blog is your one-stop shop for learning how to proactively combat credit card fraud at your hotel. Weâ€™ll explore 6 simple but effective ways to keep your business safe and your guests stress-free. \r\n\r\nSo, grab a cup of coffee (or your beverage of choice), and letâ€™s arm ourselves with knowledge to protect your hotels and guests.\r\n\r\nBefore we delve into credit card fraud, letâ€™s understand what weâ€™re facing. \r\n\r\nCredit card fraud happens when someone uses another personâ€™s credit card information without their permission to make purchases or reservations. This can occur in a few ways:\r\n\r\nCard Not Present (CNP) Fraud: This is becoming increasingly common. Fraudsters steal credit card details (card number, expiration date, CVV code) and use them online to book rooms or pay for services without even needing a physical card.\r\nPhysical Card Theft: The classic case â€“ a thief steals a guestâ€™s wallet or credit card and uses it to pay for their stay or rack up charges.\r\nAccount Takeover: Fraudsters use stolen personal information (including credit card details) to gain access to a guestâ€™s existing account and make unauthorized charges.\r\nBy understanding the different types of fraud, you can be more alert to potential red flags and take steps to protect your hotel and your guests. \r\n\r\nNow, letâ€™s get insights into some proactive ways to keep those credit card bandits at bay!', '2024-08-02 19:46:08'),
(13, 'Hotel Advertising 101: The Essential Guide for Hotel Owners', 'Aryan Singh', 'Hotel-Advertisements_Blog-Banner-800_333.png', 'In the dynamic world of hospitality, where each guestâ€™s journey is a story waiting to unfold, how do you ensure your hotel stands out amidst the bustling crowd? The answer lies in your hotel advertising strategy.\r\n\r\nWhether you run a quaint bed and breakfast nestled in a charming countryside or a luxurious skyscraper dominating the city skyline, effective advertising is your key to attracting potential guests to your doorstep. \r\n\r\nConsider the Marriott Bonvoy campaign, â€œ#WhereCanWeTakeYou?â€ below. Utilizing stunning visuals and evocative storytelling, it transported viewers to dream destinations, igniting wanderlust and driving brand recognition.\r\n\r\nIn todayâ€™s saturated travel market, where hotels compete for clicks and bookings, generic advertising just wonâ€™t work. \r\n\r\nTravelers are 24Ã—7 bombarded with messages and notifications, so capturing their attention requires fresh, creative approaches. This is where out-of-the-box hotel advertisements come into play. Theyâ€™re not just about showcasing plush rooms and sparkling pools (although those have their place, too). \r\n\r\nTheyâ€™re about sparking emotions, igniting wanderlust, and convincing potential guests that your hotel offers an experience far beyond the ordinary.\r\n\r\nHereâ€™s why an innovative hotel advertising strategy is essential for standing out from the crowd:\r\n\r\nCut Through the Clutter: Generic ads are often ignored. Personalized and creative content grabs attention, piques curiosity, and compels viewers to learn more about your unique offerings.\r\n\r\nShowcase Your Brand Personality: Donâ€™t just tell, show! Innovative ads allow you to express your hotelâ€™s personality, creating a connection with travelers who resonate with your brandâ€™s values and style.\r\n\r\nTarget the Right Audience: By using stunning formats and the right platforms, you can reach the specific demographics most likely to be interested in your hotel.\r\n\r\nBoost Brand Recognition: A good ad campaign can go viral, generating buzz and increasing brand awareness.\r\n\r\nDrive Direct Bookings: Bypassing third-party booking platforms can save your hotel significant fees. Creative ads that drive traffic directly to your hotel website, with special offers or exclusive packages, motivate travelers to book with you, maximizing your profit margins.', '2024-08-02 19:48:59'),
(14, 'Maximise Hotel Revenue Streams with Micro-stay Opportunities', 'Aryan Singh', 'Blog_Banner_Micro_Stay.png', 'Traditionally, hotels primarily focused on accommodating guests for overnight or extended stays, considering them the most common and profitable booking options. However, with changing consumer behaviour and preferences, a notable trend has emerged in the hospitality industry: the rise of micro-stay in hotels. \r\n\r\nAnd trust me, itâ€™s more than just a trend. Contrary to its name, the benefits of micro-stay arenâ€™t â€œmicroâ€ for your hotels. \r\n\r\nSo, letâ€™s explore more about the innovative concept of micro-stay and discover how it offers an unconventional solution that caters to modern travellersâ€™ needs and opens up exciting new possibilities for hoteliers as well. \r\n\r\nUnlike the typical overnight or long-term stays, micro-stays offer guests the flexibility to book rooms for shorter durations, often ranging from a few hours to less than a day. \r\n\r\nFor example, consider a business traveller who has a few hours between flights or meetings. Instead of spending those hours at the airport or a coffee shop, they can choose a micro-stay option to freshen up, catch up on work, or even take a quick nap in a comfortable hotel room. \r\n\r\nSimilarly, leisure travellers may opt for micro-stays to rest and recharge during a long layover or to freshen up before attending an event or exploring a new city. \r\n\r\nThis provides the guest with convenience and comfort while enabling the hotel to earn more from otherwise vacant rooms during off-peak hours.', '2024-08-02 19:51:34'),
(15, 'Paying The Way Forward: A Comprehensive Look at Hotel Payment Processing Solution', 'Aryan Singh', 'Blog-Banner_800_333_eZee-Pay.png', 'Whenever I am asked what I love about modern-day businesses, the first thing that comes to my mind is cashless transactions, especially hotel payment processing solutions. \r\n\r\nYes, you heard me right. \r\n\r\nNot AI, not high-speed internet, or any other technology for that matter. And, I cannot possibly emphasize enough the importance of cashless payments for hotels and restaurants. \r\n\r\nWell, to understand this let me take you to an incident that happened to me a year ago. \r\n\r\nI was travelling to Bangalore from Kolkata with my dog and a load of luggage. It was a long tiring train journey, and all I could think of was checking into my cozy hotel room to unwind. \r\n\r\nAs I arrived at the hotel reception, eager to complete the check-in process swiftly, I realized that the only accepted mode of payment was cash.\r\n\r\nNowadays, everyoneâ€” like everyoneâ€” accepts cashless payments, and carrying cash has been out of the picture for a while. Still, I was hoping to have some amount of cash. Unfortunately, I didnâ€™t, and what should have been a smooth check-in turned into a hassle to find an ATM, with all the luggage, my dog, and two days of train journey on me.  \r\n\r\nThis scenario is all too familiar for many travelers, and it highlights the limitations and inconveniences associated with cash transactions in hotels. \r\n\r\nBut imagine an alternate scenario where the hotel embraces modern technology with a payment processing solution. Here the check-in process would become a breeze, allowing me to focus on the excitement of the stay rather than the hassle of handling physical currency.\r\n\r\nNow, as a hotelier or restaurant owner, you must be thinking, â€˜We know it can be hassle-free, but the complicacies are way too much!â€ \r\n\r\nWell, NO!\r\n\r\nSetting up a hotel payment processing solution is childâ€™s play and before getting into that let me explain the what, why, and how of it. ', '2024-08-02 19:56:19'),
(16, 'Sustainability in Hospitality Supply Chains: A Force for Positive Change?', 'Aryan Singh', 'Blog-Banner_Hospitality-Supply-Chains_800_333-1.png', 'Picture this â€“ a lively Friday evening in your hotelâ€™s restaurantâ€”the chefâ€™s all set, and the menu is ready to delight. But, uh-oh, here comes a hiccup. Your go-to supplier hits a delay, and suddenly the kitchen is missing key ingredients. \r\n\r\nFor you, these delays arenâ€™t mere annoyances; they pose a threat to your hotelâ€™s hard-earned reputation. A delay that can transform a seamless guest experience into a disappointment. \r\n\r\nSo, how do you control this and ensure everything is in the right place at the right time? Well, it all depends on your â€˜hotel supply chain.â€™ \r\n\r\nI am sure some of us in the hotel biz might have heard about this but thereâ€™s a pressing question that arises these days: Is it a Massive footprint or a force of good? \r\n\r\nSo, letâ€™s talk everything about hotel supply chain management and figure out the answer. \r\n\r\n\r\nLike the veins and arteries supporting the human body, the hotel supply chain courses through the entire hospitality industry, supplying the lifeblood that keeps establishments thriving. From linens to toiletries, furniture to food, each element is a link in the hospitality supply chain, contributing to the overall guest experience. \r\n\r\nThe hospitality supply chain is a multifaceted network that includes a wide array of products and services. It begins with the sourcing of raw materials, extends through manufacturing and distribution, and culminates in the provision of goods and services within the hotel. ', '2024-08-02 19:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `addimg`
--

CREATE TABLE IF NOT EXISTS `addimg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `currentdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `addimg`
--

INSERT INTO `addimg` (`id`, `image`, `currentdate`) VALUES
(1, '', '2024-08-12 11:08:28'),
(2, 'slider-one.jpg', '2024-08-12 11:08:47'),
(3, 'SP1.jpeg', '2024-08-12 11:09:00'),
(4, 'SP2.jpeg', '2024-08-12 11:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `adults` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `room` varchar(50) NOT NULL,
  `currentdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `phone`, `email`, `checkin`, `checkout`, `adults`, `child`, `room`, `currentdate`) VALUES
(8, 'Kamal', 1354643324, 'kamal@gmail.com', '2024-08-15', '2024-08-21', 2, 1, 'Double Room', '2024-08-05 10:57:22'),
(7, 'Shyam', 2147483647, 'shyam@gmail.com', '2024-08-14', '2024-08-21', 2, 1, 'King Room', '2024-08-05 10:56:34'),
(6, 'Deep', 1234567890, 'deep@yahoo.com', '2024-08-15', '2024-08-21', 2, 1, 'Presidential Suite', '2024-08-05 10:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `currentdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `currentdate`) VALUES
(1, 'admin', 'admin@gmail.com', '1234', '0000-00-00 00:00:00'),
(7, 'add', 'add@gmail.com', '1234', '2024-07-28 19:57:51'),
(5, 'add', 'add@gmail.com', '1234', '2024-07-28 19:53:41'),
(8, 'add', 'adm11@gmail.com', '1234', '2024-07-28 20:10:35'),
(9, 'deep', 'deep@gmail.com', '12345', '2024-07-29 10:02:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbcontact`
--

CREATE TABLE IF NOT EXISTS `tbcontact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `currentdate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbcontact`
--

INSERT INTO `tbcontact` (`id`, `name`, `phone`, `email`, `subject`, `message`, `currentdate`) VALUES
(3, 'Deepchand', 1242436218, 'deep@gmail.com', 'Room Booking Inquiry', 'I want to Know about my booking', '2024-08-12 11:15:42'),
(4, 'Shyam', 2147483647, 'shyam112@gmail.com', 'Questions About Our Hotel', 'How many presidential suite are available in your hotel', '2024-08-12 11:17:59');
