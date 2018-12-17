-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 01:30 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nuway`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) NOT NULL,
  `blog_img` varchar(500) NOT NULL,
  `blog_heading` varchar(2000) NOT NULL,
  `blog_desc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_img`, `blog_heading`, `blog_desc`) VALUES
(1, '..\\images\\d39f1a_fca2f20682df47d2960279072c50b949_mv2.png', 'Race Winning Brands saves employees 65 hours a month with the help of Nuway Solutions!', 'Winning in professional auto and motorsports races requires a screaming-fast engine, a highly skilled driver, and an efficient pit crew. Race Winning Brands (RWB)—a division of Kinderhook Industries—creates the high-performance engine parts needed to surpass the competition. To accelerate the efficiency of its own crew and deliver the reliable insight executives and sales staff need to drive the business, RWB deployed a business intelligence (BI) solution based on Microsoft SQL Server 2016 and Microsoft Power BI. It provides on-demand, comprehensive reports and dashboards about customer and product data from disparate systems, which global employees can now access using any device. As a result, RWB has greatly improved efficiency and agility. Some employees are saving 65 hours of effort per month because they no longer have to create daily reports manually. All BI data is now 99.7 percent accurate, and with a few clicks, international users can view financial information in any currency. <br>\r\n<br>\r\n \r\nRace Winning Brands (RWB) delivers some of the best engine parts available for professional racecars and powersports machines such as motorcycles, ATVs, snowmobiles, and watercraft. To manage the business, global employees depend on two enterprise resource planning (ERP) systems located in North America and Europe. Although the systems contain all the data about customers, orders, and products that RWB needs to drive success, its business intelligence (BI) solution hindered productivity and created informational blind spots that impeded sales forecasting and marketing activities.<br>\r\n<br>\r\nEvery day, a financial services employee spent an average of two-and-a-half hours creating reports by downloading information from the ERP systems and then consolidating and formatting it in Microsoft Excel spreadsheets. Reports were then circulated via email to sales executives. Gaining insight from spreadsheets with hundreds and thousands of rows was difficult, and executives spent considerable time sifting through the information and creating their own reports for teams. Despite the time invested, employees could not easily glean insights from all the data. Accessing reports when out of the office was also challenging for everyone because they all stored reports on their desktops.<br><br>\r\n \r\nWhile the manual processes slowed efficiency, they also introduced error. For example, employees didn’t have a currency-conversion tool that automatically updated global income and costs over time with the latest conversion rates, so values were sometimes incorrect. In addition, RWB’s global ERP systems use different data models that sometimes identify the same customer by a different name and the same product by different numbers, making it difficult to create accurate summaries. Report calculations also varied. One group might calculate net sales to reflect freight and taxes but not discounts, while another might calculate net sales based on all three variables. Ajit Singh, Director of IT at RWB, says, “There were multiple versions of the truth and reports didn’t provide a complete picture of the business. People also lacked tools for ad-hoc reporting.”<br><br>\r\n \r\n  \r\n<span>Meeting everyone’s requirements for 40% less money</span><br><br>\r\n \r\nTo ensure that it can maintain its leading market position and grow the business, RWB sought a new BI solution. After considering technologies from BOARD Analytics and Microsoft, RWB moved forward with the Microsoft platform, engaging a partner called Nuway Solutions LLC for help. “After looking at the expenses, implementation times, and ease of use of different technologies, the Microsoft BI solution was the right decision,” says Singh. “When we compare licensing, training, and other pricing, Power BI costs 40 percent less than BOARD Analytics. Power BI is also flexible enough to stand the test of time and it’s one of the few tools on the market that can create reports with a prebuilt Excel front end, so people who prefer to work with data in Excel spreadsheets can do so. Microsoft applications including SQL Server are also easier to support. I don’t need a dedicated person on my staff to manage the solution. In addition, Nuway gave us a clear vision of what to expect in terms of implementation expenses. With the other solution, we’d have an open-ended checkbook.” <br><br>\r\n \r\n  \r\n<span>A global BI solution based on one data model and set of tools</span><br><br>\r\n \r\nRWB supported Nuway in designing a new hybrid-cloud BI solution based on an on-premises data warehouse that runs on Microsoft SQL Server 2016 and a four-core server with 32GB of RAM. It made sense to keep the SQL Server 2016 data warehouse on-premises because RWB has an existing Microsoft Enterprise Agreement that covers licensing costs. Engineers spent the bulk of their time creating a hierarchal data model that stores disparate data from the ERP systems using standardized customer names, product numbers, and formulas. Anupam Gupta, Director of Big Data and Analytics Solutions at Nuway and project lead, says, \"Our team enjoyed close, responsive collaboration with Microsoft program managers and product specialists in implementing the cutting-edge features in SQL Server 2016 and Power BI to meet both current and long-term requirements.\" '),
(2, '../images/d39f1a_b7854f5b0d734665948f83ba923a22ef_mv2.png', 'Nuway Solutions Partners with Informatica to Provide Unrivaled Integration Service Delivery', 'Nuway Solutions, LLC., a leader in the delivery of cloud, analytics, and on-premise services announced today that it has   entered   into   a   strategic   partnership   with Informatica, \r\nthe   world\'s   leader   in   enterprise   cloud   data management and data integration. The partnership enables Nuway Solutions and Informatica to provide clients with a comprehensive set of services, including assessment, planning, purchase, deployment and support of a range of products designed  to  streamline and  simplify data  integration  from  multiple  sources  throughout  the \r\nglobal enterprise.<br><br>\r\n \r\nOver the past few years, there is a growing need in the market for comprehensive professional services and solutions to  ease  the  transition  to  the  cloud,  by  simplifying  the  way  enterprise  data  is  managed and  connected.  Nuway Solutions  and  Informatica  have  joined  forces  to  enable,  simplify,  and  accelerate  data-driven  transformations, through native synchronizations between multiple databases, applications and services. \r\nMore  details  to  come!  For  more  information,  please  feel  free  to  ping  me  on  LinkedIn,  or  reach  out  to  me  or  the Nuway Team anytime at Nick@NuwaySolutions.com.<br><br>\r\n \r\n<span>About Nuway Solutions</span><br>\r\nNuway Solutions has been leading the cloud revolution as one of the first professional service firms to implement Customer Engagement focused technologies in the global enterprise. Nuway’s heritage in the Customer Engagement space brings volumes of \"know how\" to each new digital initiative. <br><br>\r\n \r\nToday, Nuway delivers  comprehensive  solutions  that  can  be  measured  in  real  terms  resulting  in  higher  adoption, higher efficiency, and higher ROI. Nuway will simplify and accelerate your digital journey by leveraging expertise and experience.<br><br>\r\n \r\n<span>About Informatica</span><br>\r\nInformatica provides leading  data  integration  software  and  services  to  help  the  organization  gain  a  competitive advantage.  It was founded  in  1993  and  has  been  the  leader  in  the  Data  Integration  from  last  10  years  as  per the Gartner’s Magic Quadrant'),
(3, '../images/d39f1a_94895a6c2527498490ae7f7911db040c_mv2.png', 'Why Accountants / CPA\'s are recommending “Dynamics 365 Finance” for Accounting', 'As most of us know, Dynamics 365 is the next-gen line of cloud business applications from Microsoft, which unifies and brings together traditional CRM and ERP. Microsoft Dynamics 365 for Finance is one of the most popular Accounting solution for growing companies, and highly recommended by CPAs/Accountants.<br><br>\r\n \r\nDynamics 365 for Finance has been developed for small and midsized businesses, who have outgrown their existing accounting and customer relationship software. Many SMB today are using basic, disconnected accounting tools, which can restrict growth and make it tough to analyze data, accurately forecast, and make good decisions. The intent with Dynamics 365 for Finance is to bring these people and business processes together, providing an end-to-end view of Accounting, Sales, Purchasing, Inventory, etc. all with Real-time Analytics.<br><br>\r\n \r\nAs it’s positioned for SMB, the platform puts flexibility at the core of your business, allowing you to start with what you need, grow at your own pace, and adapt in real time. This means a company can start small, with just a couple roles to meet your business needs, and pay for only what you use. <br><br>\r\n \r\n  \r\n<span>What can Dynamics 365 for Financials do?</span><br>\r\nBelow is a simple, high level listing on the major focus areas of Dynamics 365 for Finance.<br><br>\r\n\r\n<span>Financial Management</span><br>\r\nAccounts Receivables & Payables, Bank Reconciliation, Fixed Asset Management, Month / Year End Closings<br><br>\r\n\r\n<span>Sales</span><br>\r\nQuote Generation, Contact Management, Sales Invoicing, Payment Processing<br><br>\r\n\r\n<span>Purchasing</span><br>\r\nProcurement, Purchase Line Discounting, Purchase Order Management, Vendor Management<br><br>\r\n\r\n<span>Inventory Management</span><br>\r\nForecasting, Inventory Control, Shipment & Distribution, Returns & Cancellations<br><br>\r\n\r\n<span>Project Management</span><br>\r\nCapacity Planning, Budgets & Estimates, Jobs & Process Costs, Resource Management \r\n <br><br>\r\n \r\n  \r\n<span>Getting your work done, without even leaving Outlook</span><br>\r\nDynamics 365 for Financials works seamlessly with Microsoft Outlook.  In the latest release, you can go from Quote to Cash without even  leaving your Outlook inbox. Dynamics 365 for Financials lets you to  create quotes – pull product details, quantities directly from a  customer’s email, add key details to your quote template in Outlook, and  email the customer the quote all within minutes. It’s the same basic  process when it’s time to create and send an invoice.You also have full visibility to your customer details, contacts,  activities, and history right from within emails. This is great because  users don’t have to waste time jumping around to different applications  throughout their day, or ever worry about having to enter or type the  same stuff twice.<br><br>\r\n \r\n<span>Getting more out of Word and Excel </span><br>\r\nUsers can access live Dynamics 365 for Financials data, directly from  Microsoft Excel, to read, write, and update Items, Sales Orders, and  Purchase Orders. Integration with Excel has strong capabilities such as  bulk imports / exports / updates, and Excel based data analysis using  Charts and Pivot Tables, and as just about every financial professional  is strong in Excel, this familiarity makes adoption a cakewalk. It’s the  same basic familiar process for generating quotes with Microsoft Word. <br><br>\r\n \r\n<span>CPAs and Accounting Firms can collaborate with Customers</span> <br>\r\nThere is special provision in this solution to provide visibility to  CPAs and Accounting Firms, supporting Accounting processes of a company.  Based on permissions, they can directly connect to multiple customer  companies, and help them with ensuring compliance, and support with  corrections and guidance related to Financial Data. <br><br>\r\n \r\n<span>Easy Migration Path </span><br>\r\nFor QuickBooks users, and other similar accounting software users,  there are easy migration options available. With middleware  components/connectors from Nuway Solutions, we can setup One time data  migrations or easily establish periodic exchange of data across  QuickBooks and Dynamics 365 '),
(4, '../images/d39f1a_c513cd13b4784d5b88725817be300104_mv2.png', 'Microsoft Listens: “Hit Refresh” on Dynamics 365 User Interface', 'This is a very exciting time for Microsoft Dynamics 365 Customers!  Microsoft has begun rolling out the latest major update for the platform  (Version 9.0) earlier this month. The 9.0 Update is the most  significant update to the Dynamics 365 platform since its release last  year. In this brief blog entry, I’ll look to summarize some of the most  significant updates related to the overhauled user experience.<br><br>\r\n \r\n<span>A New User Experience, through a brand new, Unified Interface</span><br>\r\n \r\nMicrosoft has done a good job at listening to customer feedback in  regard to the User Interface of Dynamics 365. The previous versions  suffered from issues including too much white space, inconsistent  columns, fonts and text styles, inability to wrap text and clearly  separate spaces, and missing visual hierarchy and relationships.<br><br>\r\n\r\nMicrosoft addressed virtually all of these issues with the latest release. First of all, they’ve eliminated all of the confusing white space.  I can already hear Microsoft Dynamics users popping Champagne bottles  in the streets. They didn’t stop there--- they’ve also applied borders,  and containers around content sections across the entire platform which  gives a structured, organized look to each page. Also added are advanced  text wrapping features, new intuitive field options, font  standardization, and additional Theme tools. <br><br>\r\n \r\nThis huge facelift is not just for the web however, it’s actually  part of a larger Unified Interface refresh for Microsoft. This new User  Experience is designed to seamlessly extend to tablets and phones. The  value of a Unified Interface established for Dynamics 365 is that the UI  will now adjust to the device or screen in use, while maintaining the  same style, look and feel. Essentially, as the form factor changes, the  control adapts. Content displayed will be shown in a way that will  utilize available screen space, with the intention to give users a  seamless, consistent experience as they transition between Desktop and  Device.<br><br>\r\n\r\nIn my upcoming blog entries, I’ll look to outline some of the other  updates and enhancements that is coming with the Dynamics 365 Version  9.0 Release, including Timeline & Activity Feed Enhancements, more  information on the new “Hub” approach, and the latest and greatest  updates to Outlook Integration. <br><br>\r\n \r\nFor more information, please feel free to reach out to me or the Nuway Team directly at <span>Nick@NuwaySolutions.com</span>.');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
