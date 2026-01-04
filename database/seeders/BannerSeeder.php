<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('banners')->insert([
            'html' => '
                <div class="grocery-banner">
                    <div class="banner-content">
                        <div class="text-section">
                            <div class="logo-area">
                                <div class="logo-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/>
                                    </svg>
                                </div>
                                <span class="logo-text">FOOD</span>
                            </div>

                            <h3 class="tagline">fresh & healthy</h3>

                            <h1 class="main-title">Grocery Item</h1>

                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry\'s standard
                            </p>

                            <button class="cta-button">ORDER NOW</button>
                        </div>

                        <div class="image-section">
                            <div class="circular-frame">
                                <div class="inner-circle">
                                    <img src="https://images.unsplash.com/photo-1610348725531-843dff563e2c?q=80&w=600&auto=format&fit=crop"
                                         alt="Fresh Vegetables"
                                         class="grocery-image">
                                </div>
                            </div>

                            <div class="discount-badge">
                                <div class="badge-content">
                                    <span class="up-to">up to</span>
                                    <span class="percentage">25%</span>
                                    <span class="save">save</span>
                                </div>
                                <div class="badge-rays"></div>
                            </div>
                        </div>
                    </div>

                    <div class="social-icons">
                        <a href="#" class="social-icon" aria-label="Facebook">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="Twitter">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="Instagram">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            ',

            'css' => '
                .hero {
                    background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 50%, #a5d6a7 100%);
                }

                .grocery-banner {
                    width: 100%;
                    height: 100%;
                    max-width: 1400px;
                    margin: 0 auto;
                    padding: 0 60px;
                    display: flex;
                    align-items: center;
                    position: relative;
                }

                /* Decorative background wave */
                .grocery-banner::before {
                    content: "";
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    height: 150px;
                    background: linear-gradient(180deg, transparent 0%, rgba(129, 199, 132, 0.2) 100%);
                    clip-path: ellipse(100% 100% at 50% 100%);
                }

                .banner-content {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 60px;
                    align-items: center;
                    width: 100%;
                    z-index: 2;
                }

                /* Text Section */
                .text-section {
                    animation: slideInLeft 0.8s ease-out;
                }

                .logo-area {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    margin-bottom: 20px;
                }

                .logo-icon {
                    width: 40px;
                    height: 40px;
                    background: linear-gradient(135deg, #66bb6a, #43a047);
                    border-radius: 8px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                }

                .logo-icon svg {
                    width: 24px;
                    height: 24px;
                }

                .logo-text {
                    font-size: 24px;
                    font-weight: 700;
                    color: #2e7d32;
                    letter-spacing: 2px;
                }

                .tagline {
                    font-size: 28px;
                    color: #616161;
                    font-style: italic;
                    font-weight: 400;
                    margin: 0 0 15px 0;
                }

                .main-title {
                    font-size: 72px;
                    font-weight: 700;
                    color: #81c784;
                    margin: 0 0 20px 0;
                    line-height: 1;
                    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
                }

                .description {
                    font-size: 16px;
                    color: #616161;
                    line-height: 1.6;
                    margin: 0 0 30px 0;
                    max-width: 450px;
                }

                .cta-button {
                    background: linear-gradient(135deg, #66bb6a, #43a047);
                    color: white;
                    border: none;
                    padding: 16px 40px;
                    font-size: 16px;
                    font-weight: 700;
                    border-radius: 50px;
                    cursor: pointer;
                    box-shadow: 0 4px 15px rgba(67, 160, 71, 0.3);
                    transition: all 0.3s ease;
                    letter-spacing: 1px;
                }

                .cta-button:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 6px 20px rgba(67, 160, 71, 0.4);
                }

                /* Image Section */
                .image-section {
                    position: relative;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    animation: slideInRight 0.8s ease-out;
                }

                .circular-frame {
                    width: 450px;
                    height: 450px;
                    position: relative;
                }

                .circular-frame::before {
                    content: "";
                    position: absolute;
                    top: -10px;
                    left: -10px;
                    right: -10px;
                    bottom: -10px;
                    border: 3px solid #81c784;
                    border-radius: 50%;
                    animation: rotate 20s linear infinite;
                }

                .inner-circle {
                    width: 100%;
                    height: 100%;
                    border-radius: 50%;
                    overflow: hidden;
                    background: white;
                    box-shadow: 0 10px 40px rgba(0,0,0,0.15);
                    position: relative;
                }

                .grocery-image {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    animation: zoomPulse 3s ease-in-out infinite;
                }

                /* Discount Badge */
                .discount-badge {
                    position: absolute;
                    bottom: 40px;
                    left: -40px;
                    width: 120px;
                    height: 120px;
                    background: linear-gradient(135deg, #ef5350, #e53935);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    box-shadow: 0 8px 25px rgba(239, 83, 80, 0.4);
                    animation: pulse 2s ease-in-out infinite;
                    z-index: 3;
                }

                .badge-content {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                    color: white;
                    position: relative;
                    z-index: 2;
                }

                .up-to {
                    font-size: 12px;
                    font-weight: 600;
                    text-transform: uppercase;
                }

                .percentage {
                    font-size: 36px;
                    font-weight: 900;
                    line-height: 1;
                    margin: 5px 0;
                }

                .save {
                    font-size: 14px;
                    font-weight: 600;
                    text-transform: uppercase;
                }

                .badge-rays {
                    position: absolute;
                    width: 140%;
                    height: 140%;
                    top: -20%;
                    left: -20%;
                    background:
                        repeating-conic-gradient(
                            from 0deg,
                            transparent 0deg 8deg,
                            rgba(255,255,255,0.1) 8deg 10deg
                        );
                    border-radius: 50%;
                    animation: rotateRays 10s linear infinite;
                }

                /* Social Icons */
                .social-icons {
                    position: absolute;
                    top: 50%;
                    right: 30px;
                    transform: translateY(-50%);
                    display: flex;
                    flex-direction: column;
                    gap: 15px;
                    z-index: 3;
                }

                .social-icon {
                    width: 40px;
                    height: 40px;
                    background: white;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: #424242;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                    transition: all 0.3s ease;
                }

                .social-icon:hover {
                    transform: translateY(-3px);
                    color: #66bb6a;
                    box-shadow: 0 4px 15px rgba(102, 187, 106, 0.3);
                }

                .social-icon svg {
                    width: 20px;
                    height: 20px;
                }

                /* Animations */
                @keyframes slideInLeft {
                    from {
                        opacity: 0;
                        transform: translateX(-50px);
                    }
                    to {
                        opacity: 1;
                        transform: translateX(0);
                    }
                }

                @keyframes slideInRight {
                    from {
                        opacity: 0;
                        transform: translateX(50px);
                    }
                    to {
                        opacity: 1;
                        transform: translateX(0);
                    }
                }

                @keyframes rotate {
                    from {
                        transform: rotate(0deg);
                    }
                    to {
                        transform: rotate(360deg);
                    }
                }

                @keyframes rotateRays {
                    from {
                        transform: rotate(0deg);
                    }
                    to {
                        transform: rotate(360deg);
                    }
                }

                @keyframes pulse {
                    0%, 100% {
                        transform: scale(1);
                    }
                    50% {
                        transform: scale(1.05);
                    }
                }

                @keyframes zoomPulse {
                    0%, 100% {
                        transform: scale(1);
                    }
                    50% {
                        transform: scale(1.02);
                    }
                }

                /* Tablet Responsive */
                @media (max-width: 1024px) {
                    .grocery-banner {
                        padding: 0 40px;
                    }

                    .banner-content {
                        gap: 40px;
                    }

                    .main-title {
                        font-size: 56px;
                    }

                    .circular-frame {
                        width: 380px;
                        height: 380px;
                    }

                    .discount-badge {
                        width: 100px;
                        height: 100px;
                        left: -30px;
                        bottom: 30px;
                    }

                    .percentage {
                        font-size: 30px;
                    }
                }

                /* Mobile Responsive */
                @media (max-width: 768px) {
                    .hero {
                        height: auto;
                        min-height: 600px;
                    }

                    .grocery-banner {
                        padding: 40px 20px;
                    }

                    .banner-content {
                        grid-template-columns: 1fr;
                        gap: 40px;
                    }

                    .text-section {
                        text-align: center;
                    }

                    .logo-area {
                        justify-content: center;
                    }

                    .main-title {
                        font-size: 48px;
                    }

                    .description {
                        margin-left: auto;
                        margin-right: auto;
                    }

                    .circular-frame {
                        width: 320px;
                        height: 320px;
                    }

                    .discount-badge {
                        left: 50%;
                        transform: translateX(-50%);
                        bottom: -20px;
                    }

                    .social-icons {
                        position: static;
                        flex-direction: row;
                        justify-content: center;
                        transform: none;
                        margin-top: 30px;
                    }
                }

                /* Small Mobile */
                @media (max-width: 480px) {
                    .grocery-banner {
                        padding: 30px 15px;
                    }

                    .logo-icon {
                        width: 32px;
                        height: 32px;
                    }

                    .logo-text {
                        font-size: 20px;
                    }

                    .tagline {
                        font-size: 20px;
                    }

                    .main-title {
                        font-size: 36px;
                    }

                    .description {
                        font-size: 14px;
                    }

                    .cta-button {
                        padding: 14px 32px;
                        font-size: 14px;
                    }

                    .circular-frame {
                        width: 280px;
                        height: 280px;
                    }

                    .discount-badge {
                        width: 90px;
                        height: 90px;
                    }

                    .percentage {
                        font-size: 26px;
                    }

                    .up-to, .save {
                        font-size: 10px;
                    }
                }
            ',

            'js' => '
                document.addEventListener("DOMContentLoaded", () => {
                    // Parallax effect on scroll
                    const banner = document.querySelector(".grocery-banner");
                    const imageSection = document.querySelector(".image-section");

                    if (banner && imageSection) {
                        window.addEventListener("scroll", () => {
                            const scrolled = window.pageYOffset;
                            const rate = scrolled * 0.3;

                            if (imageSection) {
                                imageSection.style.transform = `translateY(${rate}px)`;
                            }
                        });
                    }

                    // Animate discount badge on hover
                    const badge = document.querySelector(".discount-badge");
                    if (badge) {
                        badge.addEventListener("mouseenter", () => {
                            badge.style.transform = "rotate(10deg) scale(1.1)";
                        });

                        badge.addEventListener("mouseleave", () => {
                            badge.style.transform = "rotate(0deg) scale(1)";
                        });
                    }

                    // Add floating animation to vegetables (if you add them later)
                    const groceryImage = document.querySelector(".grocery-image");
                    if (groceryImage) {
                        let hoverTimer;
                        groceryImage.addEventListener("mouseenter", () => {
                            clearTimeout(hoverTimer);
                            groceryImage.style.transform = "scale(1.05)";
                            groceryImage.style.transition = "transform 0.3s ease";
                        });

                        groceryImage.addEventListener("mouseleave", () => {
                            hoverTimer = setTimeout(() => {
                                groceryImage.style.transform = "scale(1)";
                            }, 100);
                        });
                    }

                    // Intersection Observer for animations on scroll
                    const observerOptions = {
                        threshold: 0.3,
                        rootMargin: "0px 0px -100px 0px"
                    };

                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.style.opacity = "1";
                                entry.target.style.transform = "translateY(0)";
                            }
                        });
                    }, observerOptions);

                    // Observe elements
                    const textSection = document.querySelector(".text-section");
                    if (textSection) {
                        textSection.style.opacity = "0";
                        textSection.style.transform = "translateY(30px)";
                        textSection.style.transition = "all 0.8s ease";
                        observer.observe(textSection);
                    }
                });
            ',

            'image_preview' => 'https://images.unsplash.com/photo-1610348725531-843dff563e2c?q=80&w=600&auto=format&fit=crop',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
