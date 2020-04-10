
CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `company` varchar(252) NOT NULL,
  `position` varchar(252) NOT NULL,
  `description` mediumtext NOT NULL,
  `skill` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



INSERT INTO `jobs` (`id`, `company`, `position`, `description`, `skill`) VALUES
(1, 'Google', 'Assistant Developer', 'job for freshers', 'php,mysql'),
(2, 'Yahoo', 'Project Manager', '4-5 years of experience', 'leadership quality'),
(3, 'Facebook', 'Senior Developer', 'required experience 4-5 years', 'python'),
(4, 'Redhat Organisation', 'System Administrator', 'no experience required', 'Unix'),
(5, 'Nvidia', 'Backend Developer', '2-3 years experience', 'C++'),
(6, 'Dell', 'Senior developer', 'freshers can apply', 'php');

