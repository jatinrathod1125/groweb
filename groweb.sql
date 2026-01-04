-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2026 at 12:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `html` longtext NOT NULL,
  `css` longtext DEFAULT NULL,
  `js` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `image_preview` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `html`, `css`, `js`, `status`, `image_preview`, `created_at`, `updated_at`) VALUES
(1, '\n                <div class=\"grocery-banner\">\n                    <div class=\"banner-content\">\n                        <div class=\"text-section\">\n                            <div class=\"logo-area\">\n                                <div class=\"logo-icon\">\n                                    <svg viewBox=\"0 0 24 24\" fill=\"currentColor\">\n                                        <path d=\"M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z\"/>\n                                    </svg>\n                                </div>\n                                <span class=\"logo-text\">FOOD</span>\n                            </div>\n\n                            <h3 class=\"tagline\">fresh & healthy</h3>\n\n                            <h1 class=\"main-title\">Grocery Item</h1>\n\n                            <p class=\"description\">\n                                Lorem Ipsum is simply dummy text of the printing and typesetting\n                                industry. Lorem Ipsum has been the industry\'s standard\n                            </p>\n\n                            <button class=\"cta-button\">ORDER NOW</button>\n                        </div>\n\n                        <div class=\"image-section\">\n                            <div class=\"circular-frame\">\n                                <div class=\"inner-circle\">\n                                    <img src=\"https://images.unsplash.com/photo-1610348725531-843dff563e2c?q=80&w=600&auto=format&fit=crop\"\n                                         alt=\"Fresh Vegetables\"\n                                         class=\"grocery-image\">\n                                </div>\n                            </div>\n\n                            <div class=\"discount-badge\">\n                                <div class=\"badge-content\">\n                                    <span class=\"up-to\">up to</span>\n                                    <span class=\"percentage\">25%</span>\n                                    <span class=\"save\">save</span>\n                                </div>\n                                <div class=\"badge-rays\"></div>\n                            </div>\n                        </div>\n                    </div>\n\n                    <div class=\"social-icons\">\n                        <a href=\"#\" class=\"social-icon\" aria-label=\"Facebook\">\n                            <svg viewBox=\"0 0 24 24\" fill=\"currentColor\">\n                                <path d=\"M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z\"/>\n                            </svg>\n                        </a>\n                        <a href=\"#\" class=\"social-icon\" aria-label=\"Twitter\">\n                            <svg viewBox=\"0 0 24 24\" fill=\"currentColor\">\n                                <path d=\"M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z\"/>\n                            </svg>\n                        </a>\n                        <a href=\"#\" class=\"social-icon\" aria-label=\"Instagram\">\n                            <svg viewBox=\"0 0 24 24\" fill=\"currentColor\">\n                                <path d=\"M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z\"/>\n                            </svg>\n                        </a>\n                    </div>\n                </div>\n            ', '\n                .hero {\n                    background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 50%, #a5d6a7 100%);\n                }\n\n                .grocery-banner {\n                    width: 100%;\n                    height: 100%;\n                    max-width: 1400px;\n                    margin: 0 auto;\n                    padding: 0 60px;\n                    display: flex;\n                    align-items: center;\n                    position: relative;\n                }\n\n                /* Decorative background wave */\n                .grocery-banner::before {\n                    content: \"\";\n                    position: absolute;\n                    bottom: 0;\n                    left: 0;\n                    right: 0;\n                    height: 150px;\n                    background: linear-gradient(180deg, transparent 0%, rgba(129, 199, 132, 0.2) 100%);\n                    clip-path: ellipse(100% 100% at 50% 100%);\n                }\n\n                .banner-content {\n                    display: grid;\n                    grid-template-columns: 1fr 1fr;\n                    gap: 60px;\n                    align-items: center;\n                    width: 100%;\n                    z-index: 2;\n                }\n\n                /* Text Section */\n                .text-section {\n                    animation: slideInLeft 0.8s ease-out;\n                }\n\n                .logo-area {\n                    display: flex;\n                    align-items: center;\n                    gap: 10px;\n                    margin-bottom: 20px;\n                }\n\n                .logo-icon {\n                    width: 40px;\n                    height: 40px;\n                    background: linear-gradient(135deg, #66bb6a, #43a047);\n                    border-radius: 8px;\n                    display: flex;\n                    align-items: center;\n                    justify-content: center;\n                    color: white;\n                }\n\n                .logo-icon svg {\n                    width: 24px;\n                    height: 24px;\n                }\n\n                .logo-text {\n                    font-size: 24px;\n                    font-weight: 700;\n                    color: #2e7d32;\n                    letter-spacing: 2px;\n                }\n\n                .tagline {\n                    font-size: 28px;\n                    color: #616161;\n                    font-style: italic;\n                    font-weight: 400;\n                    margin: 0 0 15px 0;\n                }\n\n                .main-title {\n                    font-size: 72px;\n                    font-weight: 700;\n                    color: #81c784;\n                    margin: 0 0 20px 0;\n                    line-height: 1;\n                    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);\n                }\n\n                .description {\n                    font-size: 16px;\n                    color: #616161;\n                    line-height: 1.6;\n                    margin: 0 0 30px 0;\n                    max-width: 450px;\n                }\n\n                .cta-button {\n                    background: linear-gradient(135deg, #66bb6a, #43a047);\n                    color: white;\n                    border: none;\n                    padding: 16px 40px;\n                    font-size: 16px;\n                    font-weight: 700;\n                    border-radius: 50px;\n                    cursor: pointer;\n                    box-shadow: 0 4px 15px rgba(67, 160, 71, 0.3);\n                    transition: all 0.3s ease;\n                    letter-spacing: 1px;\n                }\n\n                .cta-button:hover {\n                    transform: translateY(-2px);\n                    box-shadow: 0 6px 20px rgba(67, 160, 71, 0.4);\n                }\n\n                /* Image Section */\n                .image-section {\n                    position: relative;\n                    display: flex;\n                    align-items: center;\n                    justify-content: center;\n                    animation: slideInRight 0.8s ease-out;\n                }\n\n                .circular-frame {\n                    width: 450px;\n                    height: 450px;\n                    position: relative;\n                }\n\n                .circular-frame::before {\n                    content: \"\";\n                    position: absolute;\n                    top: -10px;\n                    left: -10px;\n                    right: -10px;\n                    bottom: -10px;\n                    border: 3px solid #81c784;\n                    border-radius: 50%;\n                    animation: rotate 20s linear infinite;\n                }\n\n                .inner-circle {\n                    width: 100%;\n                    height: 100%;\n                    border-radius: 50%;\n                    overflow: hidden;\n                    background: white;\n                    box-shadow: 0 10px 40px rgba(0,0,0,0.15);\n                    position: relative;\n                }\n\n                .grocery-image {\n                    width: 100%;\n                    height: 100%;\n                    object-fit: cover;\n                    animation: zoomPulse 3s ease-in-out infinite;\n                }\n\n                /* Discount Badge */\n                .discount-badge {\n                    position: absolute;\n                    bottom: 40px;\n                    left: -40px;\n                    width: 120px;\n                    height: 120px;\n                    background: linear-gradient(135deg, #ef5350, #e53935);\n                    border-radius: 50%;\n                    display: flex;\n                    align-items: center;\n                    justify-content: center;\n                    box-shadow: 0 8px 25px rgba(239, 83, 80, 0.4);\n                    animation: pulse 2s ease-in-out infinite;\n                    z-index: 3;\n                }\n\n                .badge-content {\n                    display: flex;\n                    flex-direction: column;\n                    align-items: center;\n                    text-align: center;\n                    color: white;\n                    position: relative;\n                    z-index: 2;\n                }\n\n                .up-to {\n                    font-size: 12px;\n                    font-weight: 600;\n                    text-transform: uppercase;\n                }\n\n                .percentage {\n                    font-size: 36px;\n                    font-weight: 900;\n                    line-height: 1;\n                    margin: 5px 0;\n                }\n\n                .save {\n                    font-size: 14px;\n                    font-weight: 600;\n                    text-transform: uppercase;\n                }\n\n                .badge-rays {\n                    position: absolute;\n                    width: 140%;\n                    height: 140%;\n                    top: -20%;\n                    left: -20%;\n                    background:\n                        repeating-conic-gradient(\n                            from 0deg,\n                            transparent 0deg 8deg,\n                            rgba(255,255,255,0.1) 8deg 10deg\n                        );\n                    border-radius: 50%;\n                    animation: rotateRays 10s linear infinite;\n                }\n\n                /* Social Icons */\n                .social-icons {\n                    position: absolute;\n                    top: 50%;\n                    right: 30px;\n                    transform: translateY(-50%);\n                    display: flex;\n                    flex-direction: column;\n                    gap: 15px;\n                    z-index: 3;\n                }\n\n                .social-icon {\n                    width: 40px;\n                    height: 40px;\n                    background: white;\n                    border-radius: 50%;\n                    display: flex;\n                    align-items: center;\n                    justify-content: center;\n                    color: #424242;\n                    box-shadow: 0 2px 10px rgba(0,0,0,0.1);\n                    transition: all 0.3s ease;\n                }\n\n                .social-icon:hover {\n                    transform: translateY(-3px);\n                    color: #66bb6a;\n                    box-shadow: 0 4px 15px rgba(102, 187, 106, 0.3);\n                }\n\n                .social-icon svg {\n                    width: 20px;\n                    height: 20px;\n                }\n\n                /* Animations */\n                @keyframes slideInLeft {\n                    from {\n                        opacity: 0;\n                        transform: translateX(-50px);\n                    }\n                    to {\n                        opacity: 1;\n                        transform: translateX(0);\n                    }\n                }\n\n                @keyframes slideInRight {\n                    from {\n                        opacity: 0;\n                        transform: translateX(50px);\n                    }\n                    to {\n                        opacity: 1;\n                        transform: translateX(0);\n                    }\n                }\n\n                @keyframes rotate {\n                    from {\n                        transform: rotate(0deg);\n                    }\n                    to {\n                        transform: rotate(360deg);\n                    }\n                }\n\n                @keyframes rotateRays {\n                    from {\n                        transform: rotate(0deg);\n                    }\n                    to {\n                        transform: rotate(360deg);\n                    }\n                }\n\n                @keyframes pulse {\n                    0%, 100% {\n                        transform: scale(1);\n                    }\n                    50% {\n                        transform: scale(1.05);\n                    }\n                }\n\n                @keyframes zoomPulse {\n                    0%, 100% {\n                        transform: scale(1);\n                    }\n                    50% {\n                        transform: scale(1.02);\n                    }\n                }\n\n                /* Tablet Responsive */\n                @media (max-width: 1024px) {\n                    .grocery-banner {\n                        padding: 0 40px;\n                    }\n\n                    .banner-content {\n                        gap: 40px;\n                    }\n\n                    .main-title {\n                        font-size: 56px;\n                    }\n\n                    .circular-frame {\n                        width: 380px;\n                        height: 380px;\n                    }\n\n                    .discount-badge {\n                        width: 100px;\n                        height: 100px;\n                        left: -30px;\n                        bottom: 30px;\n                    }\n\n                    .percentage {\n                        font-size: 30px;\n                    }\n                }\n\n                /* Mobile Responsive */\n                @media (max-width: 768px) {\n                    .hero {\n                        height: auto;\n                        min-height: 600px;\n                    }\n\n                    .grocery-banner {\n                        padding: 40px 20px;\n                    }\n\n                    .banner-content {\n                        grid-template-columns: 1fr;\n                        gap: 40px;\n                    }\n\n                    .text-section {\n                        text-align: center;\n                    }\n\n                    .logo-area {\n                        justify-content: center;\n                    }\n\n                    .main-title {\n                        font-size: 48px;\n                    }\n\n                    .description {\n                        margin-left: auto;\n                        margin-right: auto;\n                    }\n\n                    .circular-frame {\n                        width: 320px;\n                        height: 320px;\n                    }\n\n                    .discount-badge {\n                        left: 50%;\n                        transform: translateX(-50%);\n                        bottom: -20px;\n                    }\n\n                    .social-icons {\n                        position: static;\n                        flex-direction: row;\n                        justify-content: center;\n                        transform: none;\n                        margin-top: 30px;\n                    }\n                }\n\n                /* Small Mobile */\n                @media (max-width: 480px) {\n                    .grocery-banner {\n                        padding: 30px 15px;\n                    }\n\n                    .logo-icon {\n                        width: 32px;\n                        height: 32px;\n                    }\n\n                    .logo-text {\n                        font-size: 20px;\n                    }\n\n                    .tagline {\n                        font-size: 20px;\n                    }\n\n                    .main-title {\n                        font-size: 36px;\n                    }\n\n                    .description {\n                        font-size: 14px;\n                    }\n\n                    .cta-button {\n                        padding: 14px 32px;\n                        font-size: 14px;\n                    }\n\n                    .circular-frame {\n                        width: 280px;\n                        height: 280px;\n                    }\n\n                    .discount-badge {\n                        width: 90px;\n                        height: 90px;\n                    }\n\n                    .percentage {\n                        font-size: 26px;\n                    }\n\n                    .up-to, .save {\n                        font-size: 10px;\n                    }\n                }\n            ', '\n                document.addEventListener(\"DOMContentLoaded\", () => {\n                    // Parallax effect on scroll\n                    const banner = document.querySelector(\".grocery-banner\");\n                    const imageSection = document.querySelector(\".image-section\");\n\n                    if (banner && imageSection) {\n                        window.addEventListener(\"scroll\", () => {\n                            const scrolled = window.pageYOffset;\n                            const rate = scrolled * 0.3;\n\n                            if (imageSection) {\n                                imageSection.style.transform = `translateY(${rate}px)`;\n                            }\n                        });\n                    }\n\n                    // Animate discount badge on hover\n                    const badge = document.querySelector(\".discount-badge\");\n                    if (badge) {\n                        badge.addEventListener(\"mouseenter\", () => {\n                            badge.style.transform = \"rotate(10deg) scale(1.1)\";\n                        });\n\n                        badge.addEventListener(\"mouseleave\", () => {\n                            badge.style.transform = \"rotate(0deg) scale(1)\";\n                        });\n                    }\n\n                    // Add floating animation to vegetables (if you add them later)\n                    const groceryImage = document.querySelector(\".grocery-image\");\n                    if (groceryImage) {\n                        let hoverTimer;\n                        groceryImage.addEventListener(\"mouseenter\", () => {\n                            clearTimeout(hoverTimer);\n                            groceryImage.style.transform = \"scale(1.05)\";\n                            groceryImage.style.transition = \"transform 0.3s ease\";\n                        });\n\n                        groceryImage.addEventListener(\"mouseleave\", () => {\n                            hoverTimer = setTimeout(() => {\n                                groceryImage.style.transform = \"scale(1)\";\n                            }, 100);\n                        });\n                    }\n\n                    // Intersection Observer for animations on scroll\n                    const observerOptions = {\n                        threshold: 0.3,\n                        rootMargin: \"0px 0px -100px 0px\"\n                    };\n\n                    const observer = new IntersectionObserver((entries) => {\n                        entries.forEach(entry => {\n                            if (entry.isIntersecting) {\n                                entry.target.style.opacity = \"1\";\n                                entry.target.style.transform = \"translateY(0)\";\n                            }\n                        });\n                    }, observerOptions);\n\n                    // Observe elements\n                    const textSection = document.querySelector(\".text-section\");\n                    if (textSection) {\n                        textSection.style.opacity = \"0\";\n                        textSection.style.transform = \"translateY(30px)\";\n                        textSection.style.transition = \"all 0.8s ease\";\n                        observer.observe(textSection);\n                    }\n                });\n            ', 1, 'https://images.unsplash.com/photo-1610348725531-843dff563e2c?q=80&w=600&auto=format&fit=crop', '2025-12-30 00:11:15', '2025-12-30 00:11:15'),
(2, '', '', '', 1, 'banners/banner_1767514328_695a20d81a24d.png', '2026-01-04 02:42:09', '2026-01-04 02:42:09'),
(3, '', '', '', 1, 'banners/banner_1767522050_695a3f02543c2.png', '2026-01-04 04:50:50', '2026-01-04 04:50:50'),
(4, '', '', '', 1, 'banners/banner_1767523957_695a4675093c8.png', '2026-01-04 05:22:37', '2026-01-04 05:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_12_30_050810_create_banners_table', 1),
(5, '2026_01_02_052006_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('B50mBRWG0WgZ9unpxJRLgziwLwrNREz0TmI5uINX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidUJFdmpCU2ZHUERNYlFOVWlBVkZsVFE2RmZDTGNLM3hTSEtsR1Q4byI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czoxMzoiYmFubmVycy5pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1767525592);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
