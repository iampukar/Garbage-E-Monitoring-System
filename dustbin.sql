-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2016 at 08:59 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dustbin`
--

-- --------------------------------------------------------

--
-- Table structure for table `bin`
--

CREATE TABLE `bin` (
  `record_no` int(11) NOT NULL,
  `date_is` date NOT NULL,
  `bin1` int(11) NOT NULL,
  `bin2` int(11) NOT NULL,
  `bin3` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bin`
--

INSERT INTO `bin` (`record_no`, `date_is`, `bin1`, `bin2`, `bin3`) VALUES
(1, '2013-08-13', 22, 11, 23),
(2, '2015-06-01', 12, 21, 32),
(3, '2016-07-05', 23, 22, 32),
(4, '2016-10-12', 10, 30, 20),
(5, '2016-10-29', 50, 21, 32),
(6, '2017-01-25', 27, 34, 33),
(7, '2017-01-19', 32, 11, 55);

-- --------------------------------------------------------

--
-- Table structure for table `bin_level`
--

CREATE TABLE `bin_level` (
  `record_no` int(11) NOT NULL,
  `bin1` float NOT NULL,
  `bin2` float DEFAULT NULL,
  `bin3` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bin_level`
--

INSERT INTO `bin_level` (`record_no`, `bin1`, `bin2`, `bin3`) VALUES
(2803, 5, 10, 8),
(2804, 5, 10, 7),
(2805, 7, 10, 10),
(2806, 6, 10, 4),
(2807, 7, 10, 2),
(2808, 22, 10, 6),
(2809, 5, 10, 6),
(2810, 14, 10, 7),
(2811, 8, 10, 7),
(2812, 8, 10, 9),
(2813, 8, 10, 10),
(2814, 9, 10, 8),
(2815, 5, 10, 9),
(2816, 9, 10, 8),
(2817, 4, 10, 5),
(2818, 4, 10, 5),
(2819, 4, 10, 4),
(2820, 4, 10, 4),
(2821, 4, 10, NULL),
(2822, 4, 10, NULL),
(2823, 4, 10, NULL),
(2824, 4, 10, NULL),
(2825, 4, 10, NULL),
(2826, 4, 10, NULL),
(2827, 4, 10, NULL),
(2828, 4, 10, NULL),
(2829, 4, 10, NULL),
(2830, 4, 10, NULL),
(2831, 4, 10, NULL),
(2832, 4, 10, NULL),
(2833, 4, 10, NULL),
(2834, 4, 10, NULL),
(2835, 4, 10, NULL),
(2836, 4, 10, NULL),
(2837, 4, 10, NULL),
(2838, 4, 10, NULL),
(2839, 4, 10, NULL),
(2840, 4, 10, NULL),
(2841, 4, 10, NULL),
(2842, 4, 10, NULL),
(2843, 4, 10, NULL),
(2844, 4, 10, NULL),
(2845, 4, 10, NULL),
(2846, 4, 10, NULL),
(2847, 4, 10, NULL),
(2848, 4, 10, NULL),
(2849, 4, 10, NULL),
(2850, 4, 10, NULL),
(2851, 4, 10, NULL),
(2852, 4, 10, NULL),
(2853, 4, 10, NULL),
(2854, 4, 10, NULL),
(2855, 4, 10, NULL),
(2856, 4, 10, NULL),
(2857, 4, 10, NULL),
(2858, 4, 10, NULL),
(2859, 4, 10, NULL),
(2860, 4, 10, NULL),
(2861, 4, 10, NULL),
(2862, 4, 10, NULL),
(2863, 4, 10, NULL),
(2864, 4, 10, NULL),
(2865, 4, 10, NULL),
(2866, 4, 10, NULL),
(2867, 4, 10, NULL),
(2868, 4, 10, NULL),
(2869, 4, 10, NULL),
(2870, 4, 10, NULL),
(2871, 4, 10, NULL),
(2872, 4, 10, NULL),
(2873, 4, 10, NULL),
(2874, 4, 10, NULL),
(2875, 4, 10, NULL),
(2876, 4, 10, NULL),
(2877, 4, 10, NULL),
(2878, 4, 10, NULL),
(2879, 4, 10, NULL),
(2880, 4, 10, NULL),
(2881, 4, 10, NULL),
(2882, 4, 10, NULL),
(2883, 4, 10, NULL),
(2884, 4, 10, NULL),
(2885, 4, 10, NULL),
(2886, 4, 10, NULL),
(2887, 4, 10, NULL),
(2888, 4, 10, NULL),
(2889, 4, 10, NULL),
(2890, 4, 10, NULL),
(2891, 4, 10, NULL),
(2892, 4, 10, NULL),
(2893, 4, 10, NULL),
(2894, 4, 10, NULL),
(2895, 4, 10, NULL),
(2896, 4, 10, NULL),
(2897, 4, 10, NULL),
(2898, 4, 10, NULL),
(2899, 4, 10, NULL),
(2900, 4, 10, NULL),
(2901, 4, 10, NULL),
(2902, 4, 10, NULL),
(2903, 4, 10, NULL),
(2904, 4, 10, NULL),
(2905, 4, 10, NULL),
(2906, 4, 10, NULL),
(2907, 17, 10, NULL),
(2908, 5, 10, NULL),
(2909, 6, 10, NULL),
(2910, 5, 10, NULL),
(2911, 5, 10, NULL),
(2912, 5, 10, NULL),
(2913, 5, 10, NULL),
(2914, 5, 10, NULL),
(2915, 5, 10, NULL),
(2916, 5, 10, NULL),
(2917, 6, 10, NULL),
(2918, 14, 10, NULL),
(2919, 5, 10, NULL),
(2920, 6, 10, NULL),
(2921, 6, 10, NULL),
(2922, 5, 10, NULL),
(2923, 6, 10, NULL),
(2924, 5, 10, NULL),
(2925, 5, 10, NULL),
(2926, 5, 10, NULL),
(2927, 5, 10, NULL),
(2928, 5, 10, NULL),
(2929, 5, 10, NULL),
(2930, 5, 10, NULL),
(2931, 5, 10, NULL),
(2932, 5, 10, NULL),
(2933, 5, 10, NULL),
(2934, 5, 10, NULL),
(2935, 5, 10, NULL),
(2936, 5, 10, NULL),
(2937, 5, 10, NULL),
(2938, 5, 10, NULL),
(2939, 5, 10, NULL),
(2940, 5, 10, NULL),
(2941, 5, 11, NULL),
(2942, 5, 11, NULL),
(2943, 5, 11, NULL),
(2944, 5, 11, NULL),
(2945, 5, 11, NULL),
(2946, 6, 11, NULL),
(2947, 6, 11, NULL),
(2948, 6, 11, NULL),
(2949, 6, 11, NULL),
(2950, 6, 11, NULL),
(2951, 7, 11, NULL),
(2952, 7, 11, NULL),
(2953, 7, 11, NULL),
(2954, 7, 11, NULL),
(2955, 7, 11, NULL),
(2956, 7, 11, NULL),
(2957, 7, 11, NULL),
(2958, 7, 11, NULL),
(2959, 7, 11, NULL),
(2960, 7, 11, NULL),
(2961, 7, 11, NULL),
(2962, 7, 11, NULL),
(2963, 7, 11, NULL),
(2964, 7, 11, NULL),
(2965, 7, 11, NULL),
(2966, 7, 11, NULL),
(2967, 7, 11, NULL),
(2968, 7, 11, NULL),
(2969, 7, 11, NULL),
(2970, 7, 11, NULL),
(2971, 7, 11, NULL),
(2972, 7, 11, NULL),
(2973, 7, 11, NULL),
(2974, 7, 11, NULL),
(2975, 7, 11, NULL),
(2976, 7, 11, NULL),
(2977, 7, 11, NULL),
(2978, 7, 11, NULL),
(2979, 7, 11, NULL),
(2980, 7, 11, NULL),
(2981, 7, 11, NULL),
(2982, 6, 11, NULL),
(2983, 7, 11, NULL),
(2984, 6, 11, NULL),
(2985, 7, 11, NULL),
(2986, 7, 11, NULL),
(2987, 6, 11, NULL),
(2988, 7, 11, NULL),
(2989, 6, 11, NULL),
(2990, 7, 11, NULL),
(2991, 6, 11, NULL),
(2992, 7, 11, NULL),
(2993, 7, 11, NULL),
(2994, 6, 11, NULL),
(2995, 7, 11, NULL),
(2996, 7, 11, NULL),
(2997, 6, 11, NULL),
(2998, 6, 11, NULL),
(2999, 6, 11, NULL),
(3000, 7, 11, NULL),
(3001, 6, 11, NULL),
(3002, 6, 11, NULL),
(3003, 7, 11, NULL),
(3004, 6, 11, NULL),
(3005, 7, 11, NULL),
(3006, 6, 11, NULL),
(3007, 6, 11, NULL),
(3008, 6, 11, NULL),
(3009, 10, 11, NULL),
(3010, 10, 11, NULL),
(3011, 10, 11, NULL),
(3012, 10, 11, NULL),
(3013, 10, 11, NULL),
(3014, 10, 11, NULL),
(3015, 10, 11, NULL),
(3016, 10, 11, NULL),
(3017, 10, 11, NULL),
(3018, 10, 11, NULL),
(3019, 10, 11, NULL),
(3020, 10, 11, NULL),
(3021, 10, 11, NULL),
(3022, 10, 11, NULL),
(3023, 10, 11, NULL),
(3024, 10, 11, NULL),
(3025, 10, 11, NULL),
(3026, 10, 11, NULL),
(3027, 10, 11, NULL),
(3028, 10, 11, NULL),
(3029, 10, 11, NULL),
(3030, 10, 11, NULL),
(3031, 10, 11, NULL),
(3032, 10, 11, NULL),
(3033, 10, 11, NULL),
(3034, 10, 11, NULL),
(3035, 10, 11, NULL),
(3036, 10, 11, NULL),
(3037, 10, 11, NULL),
(3038, 10, 11, NULL),
(3039, 10, 11, NULL),
(3040, 10, 11, NULL),
(3041, 10, 11, NULL),
(3042, 10, 11, NULL),
(3043, 10, 11, NULL),
(3044, 10, 11, NULL),
(3045, 10, 11, NULL),
(3046, 10, 11, NULL),
(3047, 10, 11, NULL),
(3048, 10, 11, NULL),
(3049, 10, 11, NULL),
(3050, 10, 11, NULL),
(3051, 10, 11, NULL),
(3052, 10, 11, NULL),
(3053, 10, 11, NULL),
(3054, 10, 10, NULL),
(3055, 10, 10, NULL),
(3056, 10, 10, NULL),
(3057, 10, 10, NULL),
(3058, 10, 10, NULL),
(3059, 10, 10, NULL),
(3060, 10, 10, NULL),
(3061, 10, 10, NULL),
(3062, 10, 10, NULL),
(3063, 10, 10, NULL),
(3064, 10, 10, NULL),
(3065, 10, 10, NULL),
(3066, 10, 10, NULL),
(3067, 10, 10, NULL),
(3068, 10, 10, NULL),
(3069, 10, 10, NULL),
(3070, 10, 10, NULL),
(3071, 10, 10, NULL),
(3072, 10, 10, NULL),
(3073, 10, 10, NULL),
(3074, 10, 10, NULL),
(3075, 10, 10, NULL),
(3076, 10, 10, NULL),
(3077, 10, 10, NULL),
(3078, 10, 10, NULL),
(3079, 10, 10, NULL),
(3080, 10, 10, NULL),
(3081, 10, 10, NULL),
(3082, 10, 10, NULL),
(3083, 10, 10, NULL),
(3084, 10, 10, NULL),
(3085, 10, 10, NULL),
(3086, 10, 10, NULL),
(3087, 10, 10, NULL),
(3088, 10, 10, NULL),
(3089, 10, 10, NULL),
(3090, 10, 10, NULL),
(3091, 10, 10, NULL),
(3092, 10, 10, NULL),
(3093, 10, 10, NULL),
(3094, 10, 10, NULL),
(3095, 10, 10, NULL),
(3096, 10, 10, NULL),
(3097, 10, 10, NULL),
(3098, 10, 10, NULL),
(3099, 11, 10, NULL),
(3100, 11, 11, NULL),
(3101, 11, 11, NULL),
(3102, 11, 11, NULL),
(3103, 11, 11, NULL),
(3104, 11, 11, NULL),
(3105, 11, 11, NULL),
(3106, 11, 11, NULL),
(3107, 11, 11, NULL),
(3108, 11, 11, NULL),
(3109, 11, 11, NULL),
(3110, 11, 11, NULL),
(3111, 11, 11, NULL),
(3112, 11, 11, NULL),
(3113, 11, 11, NULL),
(3114, 11, 11, NULL),
(3115, 11, 11, NULL),
(3116, 11, 11, NULL),
(3117, 11, 11, NULL),
(3118, 11, 11, NULL),
(3119, 11, 11, NULL),
(3120, 11, 11, NULL),
(3121, 11, 11, NULL),
(3122, 12, 11, NULL),
(3123, 4, 11, NULL),
(3124, 4, 11, NULL),
(3125, 4, 11, NULL),
(3126, 4, 11, NULL),
(3127, 3, 11, NULL),
(3128, 3, 11, NULL),
(3129, 3, 11, NULL),
(3130, 3, 11, NULL),
(3131, 3, 11, NULL),
(3132, 9, 11, NULL),
(3133, 7, 11, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bin_log`
--

CREATE TABLE `bin_log` (
  `date_is` varchar(200) NOT NULL,
  `bin_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bin_log`
--

INSERT INTO `bin_log` (`date_is`, `bin_name`) VALUES
('2016/11/10 10:41:48 am', 'bin1'),
('2016/11/10 10:41:58 am', 'bin3'),
('2016/11/10 10:42:05 am', 'bin2'),
('2016/11/10 11:14:13 am', 'bin1'),
('2016/11/10 11:14:36 am', 'bin3'),
('2016/11/10 11:14:58 am', 'bin2'),
('2016/11/10 11:15:09 am', 'bin1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bin`
--
ALTER TABLE `bin`
  ADD PRIMARY KEY (`record_no`);

--
-- Indexes for table `bin_level`
--
ALTER TABLE `bin_level`
  ADD PRIMARY KEY (`record_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bin`
--
ALTER TABLE `bin`
  MODIFY `record_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bin_level`
--
ALTER TABLE `bin_level`
  MODIFY `record_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3134;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
