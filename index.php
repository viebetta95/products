<?php
$company_name = "PT DIGITAL INTI JAYA";
$page_title = "Produk & Layanan SEM SEO";

// Daftar 10 Produk SEM & SEO
$products = [
    // SEM Products
    [
        'id' => 'google-ads',
        'category' => 'SEM',
        'title' => 'Google Ads Management',
        'description' => 'Kelola kampanye Google Ads profesional untuk meningkatkan visibilitas dan konversi bisnis Anda.',
        'features' => ['Keyword Research', 'Ad Copy Optimization', 'Bid Management', 'Performance Tracking'],
        'price' => 'Mulai dari Rp 2.500.000',
        'icon' => 'fab fa-google',
        'color' => 'from-red-500 to-yellow-500'
    ],
    [
        'id' => 'facebook-ads',
        'category' => 'SEM',
        'title' => 'Facebook Ads Campaign',
        'description' => 'Strategi iklan Facebook yang tepat sasaran untuk menjangkau audiens potensial Anda.',
        'features' => ['Audience Targeting', 'Creative Design', 'A/B Testing', 'ROI Optimization'],
        'price' => 'Mulai dari Rp 2.000.000',
        'icon' => 'fab fa-facebook-f',
        'color' => 'from-blue-600 to-blue-800'
    ],
    [
        'id' => 'instagram-ads',
        'category' => 'SEM',
        'title' => 'Instagram Ads Strategy',
        'description' => 'Kampanye Instagram Ads yang engaging untuk meningkatkan brand awareness dan penjualan.',
        'features' => ['Visual Content', 'Story Ads', 'Shopping Ads', 'Influencer Integration'],
        'price' => 'Mulai dari Rp 1.800.000',
        'icon' => 'fab fa-instagram',
        'color' => 'from-pink-500 to-purple-600'
    ],
    [
        'id' => 'tiktok-ads',
        'category' => 'SEM',
        'title' => 'TikTok Ads Management',
        'description' => 'Manfaatkan kekuatan TikTok untuk menjangkau generasi muda dengan konten viral.',
        'features' => ['Viral Content', 'Hashtag Challenge', 'Brand Takeover', 'In-Feed Ads'],
        'price' => 'Mulai dari Rp 2.200.000',
        'icon' => 'fab fa-tiktok',
        'color' => 'from-black to-red-500'
    ],
    [
        'id' => 'youtube-ads',
        'category' => 'SEM',
        'title' => 'YouTube Ads Campaign',
        'description' => 'Kampanye video YouTube yang efektif untuk meningkatkan engagement dan konversi.',
        'features' => ['Video Production', 'Targeting Options', 'Bumper Ads', 'Analytics'],
        'price' => 'Mulai dari Rp 3.000.000',
        'icon' => 'fab fa-youtube',
        'color' => 'from-red-600 to-red-800'
    ],
    // SEO Products
    [
        'id' => 'seo-audit',
        'category' => 'SEO',
        'title' => 'SEO Audit Komprehensif',
        'description' => 'Analisis mendalam website Anda untuk mengidentifikasi peluang optimasi SEO.',
        'features' => ['Technical Analysis', 'Content Audit', 'Competitor Research', 'Action Plan'],
        'price' => 'Mulai dari Rp 1.500.000',
        'icon' => 'fas fa-search',
        'color' => 'from-green-500 to-teal-600'
    ],
    [
        'id' => 'onpage-seo',
        'category' => 'SEO',
        'title' => 'On-Page SEO Optimization',
        'description' => 'Optimasi halaman website untuk meningkatkan ranking di mesin pencari.',
        'features' => ['Meta Tags', 'Content Optimization', 'Internal Linking', 'Schema Markup'],
        'price' => 'Mulai dari Rp 2.000.000',
        'icon' => 'fas fa-file-alt',
        'color' => 'from-blue-500 to-indigo-600'
    ],
    [
        'id' => 'offpage-seo',
        'category' => 'SEO',
        'title' => 'Off-Page SEO Strategy',
        'description' => 'Membangun otoritas website melalui backlink berkualitas dan strategi off-page.',
        'features' => ['Link Building', 'Guest Posting', 'Social Signals', 'Brand Mentions'],
        'price' => 'Mulai dari Rp 2.500.000',
        'icon' => 'fas fa-link',
        'color' => 'from-purple-500 to-pink-600'
    ],
    [
        'id' => 'technical-seo',
        'category' => 'SEO',
        'title' => 'Technical SEO Service',
        'description' => 'Optimasi teknis website untuk performa dan crawlability yang lebih baik.',
        'features' => ['Site Speed', 'Mobile Optimization', 'Crawl Errors', 'XML Sitemaps'],
        'price' => 'Mulai dari Rp 1.800.000',
        'icon' => 'fas fa-cogs',
        'color' => 'from-gray-600 to-gray-800'
    ],
    [
        'id' => 'local-seo',
        'category' => 'SEO',
        'title' => 'Local SEO Optimization',
        'description' => 'Optimasi SEO lokal untuk bisnis yang menargetkan pelanggan di area tertentu.',
        'features' => ['Google My Business', 'Local Citations', 'Review Management', 'Local Keywords'],
        'price' => 'Mulai dari Rp 1.200.000',
        'icon' => 'fas fa-map-marker-alt',
        'color' => 'from-orange-500 to-red-600'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?> - <?= $company_name ?></title>
    <link rel="icon" href="https://digitalintijaya.com/assets/images/favicon.ico" type="image/x-icon">
    
    <meta name="keywords" content="digital marketing, jasa digital marketing, social media management, meta ads, facebook ads, instagram ads, google ads, tiktok ads, digital agency indonesia">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mainharian01.sbs/">
    <meta property="og:title" content="PT DIGITAL INTI JAYA - Jasa Digital Marketing & Social Media Management">
    <meta property="og:description" content="Tingkatkan performa bisnis Anda dengan layanan digital marketing profesional. Spesialis Meta Ads, Google Ads, dan TikTok Ads dengan hasil terukur. Konsultasi gratis!">
    <meta property="og:image" content="https://digitalintijaya.com/assets/images/digitalintijaya.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://mainharian01.sbs/">
    <meta property="twitter:title" content="PT DIGITAL INTI JAYA - Jasa Digital Marketing & Social Media Management">
    <meta property="twitter:description" content="Tingkatkan performa bisnis Anda dengan layanan digital marketing profesional. Spesialis Meta Ads, Google Ads, dan TikTok Ads dengan hasil terukur. Konsultasi gratis!">
    <meta property="twitter:image" content="https://digitalintijaya.com/assets/images/digitalintijaya.png">
    
    <!-- Additional Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="PT DIGITAL INTI JAYA">
    <meta name="copyright" content="PT DIGITAL INTI JAYA">
    <meta name="theme-color" content="white">
    <meta name="msapplication-TileColor" content="white">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    
    <!-- Canonical URLs -->
        <link rel="canonical" href="https://mainharian01.sbs/">
        
    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "PT DIGITAL INTI JAYA",
        "url": "https://mainharian01.sbs/",
        "logo": "https://digitalintijaya.com/assets/images/digitalintijaya.png",
        "description": "Jasa digital marketing profesional spesialis Meta Ads, Google Ads, dan TikTok Ads dengan hasil terukur.",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Ruko Santa Monika Blok A No. 36",
          "addressLocality": "Gading Serpong",
          "addressRegion": "Tangerang",
          "postalCode": "15334",
          "addressCountry": "ID"
        },
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+62-822-9741-0675",
          "contactType": "customer service",
          "email": "info@digitalintijaya.com"
        },
        "sameAs": [
          "https://facebook.com/digitalintijaya",
          "https://instagram.com/digitalintijaya",
          "https://twitter.com/digitalintijaya"
        ]
      }
    </script>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .product-card {
            transition: all 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-10px);
        }
        .category-filter.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.4);
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-gradient-to-r from-slate-900/95 via-blue-900/95 to-indigo-900/95 backdrop-blur-md border-b border-white/10 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-4">
                    <div class="relative group">
                        <div class="w-14 h-14 bg-gradient-to-br from-cyan-400 via-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center shadow-2xl transform transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
                            <div class="relative">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                <div class="absolute inset-0 bg-white/20 rounded-full blur-sm"></div>
                            </div>
                        </div>
                        <div class="absolute -top-1 -right-1 w-4 h-4 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full border-2 border-white shadow-lg animate-pulse"></div>
                        <div class="absolute -bottom-1 -left-1 w-3 h-3 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full border-2 border-white shadow-lg animate-bounce" style="animation-delay: 0.5s;"></div>
                        <div class="absolute inset-0 rounded-2xl border-2 border-cyan-400/0 group-hover:border-cyan-400/50 transition-all duration-300"></div>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl font-bold bg-gradient-to-r from-white via-blue-100 to-cyan-200 bg-clip-text text-transparent leading-tight"><?= $company_name ?></span>
                        <span class="text-sm text-cyan-300 font-medium tracking-wide">Digital Marketing Agency</span>
                    </div>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="../index.php" class="nav-link text-white hover:text-blue-300 transition-colors">Beranda</a>
                    <a href="./" class="nav-link text-blue-300 font-semibold">Produk</a>
                    <a href="../index.php#about" class="nav-link text-white hover:text-blue-300 transition-colors">Tentang</a>
                    <a href="../index.php#portfolio" class="nav-link text-white hover:text-blue-300 transition-colors">Portfolio</a>
                    <a href="../index.php#contact" class="nav-link text-white hover:text-blue-300 transition-colors">Kontak</a>
                    <a href="../index.php#contact" class="btn-primary px-6 py-2 rounded-full text-white font-semibold hover:shadow-lg transition-all">
                        Konsultasi Gratis
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button class="md:hidden text-white" id="mobile-menu-btn">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div class="md:hidden hidden bg-white rounded-lg shadow-lg mt-2 py-4" id="mobile-menu">
                <div class="px-4 space-y-3">
                    <a href="../index.php" class="block text-gray-800 hover:text-blue-600 transition-colors">Beranda</a>
                    <a href="./" class="block text-blue-600 font-semibold">Produk</a>
                    <a href="../index.php#about" class="block text-gray-800 hover:text-blue-600 transition-colors">Tentang</a>
                    <a href="../index.php#portfolio" class="block text-gray-800 hover:text-blue-600 transition-colors">Portfolio</a>
                    <a href="../index.php#contact" class="block text-gray-800 hover:text-blue-600 transition-colors">Kontak</a>
                    <a href="../index.php#contact" class="block bg-blue-600 text-white px-4 py-2 rounded-lg text-center font-semibold hover:bg-blue-700 transition-colors">
                        Konsultasi Gratis
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-[60vh] bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 overflow-hidden pt-20">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black/20"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center px-4 py-2 bg-yellow-400 text-black text-sm font-bold rounded-full mb-6 animate-pulse">
                    10 PRODUK SEM & SEO TERBAIK
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                    Produk & Layanan
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-400">SEM & SEO</span>
                </h1>
                
                <p class="text-xl text-white/80 mb-8 leading-relaxed">
                    Pilih solusi digital marketing yang tepat untuk mengembangkan bisnis Anda dengan strategi SEM dan SEO yang terbukti efektif.
                </p>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Category Filter -->
            <div class="flex justify-center mb-12">
                <div class="bg-white rounded-full p-2 shadow-lg">
                    <button class="category-filter active px-6 py-3 rounded-full font-semibold transition-all" data-category="all">
                        Semua Produk
                    </button>
                    <button class="category-filter px-6 py-3 rounded-full font-semibold transition-all hover:bg-gray-100" data-category="SEM">
                        SEM Products
                    </button>
                    <button class="category-filter px-6 py-3 rounded-full font-semibold transition-all hover:bg-gray-100" data-category="SEO">
                        SEO Products
                    </button>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="products-grid">
                <?php foreach($products as $product): ?>
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden" data-category="<?= $product['category'] ?>" data-aos="fade-up">
                    <!-- Product Header -->
                    <div class="bg-gradient-to-r <?= $product['color'] ?> p-6 text-white">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                                <i class="<?= $product['icon'] ?> text-2xl"></i>
                            </div>
                            <span class="bg-white/20 px-3 py-1 rounded-full text-sm font-semibold">
                                <?= $product['category'] ?>
                            </span>
                        </div>
                        <h3 class="text-xl font-bold mb-2"><?= $product['title'] ?></h3>
                        <p class="text-white/90 text-sm"><?= $product['description'] ?></p>
                    </div>
                    
                    <!-- Product Content -->
                    <div class="p-6">
                        <!-- Features -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3">Fitur Utama:</h4>
                            <ul class="space-y-2">
                                <?php foreach($product['features'] as $feature): ?>
                                <li class="flex items-center text-sm text-gray-600">
                                    <div class="w-4 h-4 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <i class="fas fa-check text-green-600 text-xs"></i>
                                    </div>
                                    <?= $feature ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <!-- Price -->
                        <div class="mb-6">
                            <div class="text-2xl font-bold text-gray-800"><?= $product['price'] ?></div>
                            <div class="text-sm text-gray-500">per bulan</div>
                        </div>
                        
                        <!-- CTA Buttons -->
                        <div class="space-y-3">
                            <a href="https://wa.me/62816404447" class="block w-full bg-gradient-to-r <?= $product['color'] ?> text-white text-center py-3 rounded-xl font-semibold hover:shadow-lg transition-all">
                                Lihat Detail
                            </a>
                            <a href="https://wa.me/62816404447" class="block w-full border-2 border-gray-300 text-gray-700 text-center py-3 rounded-xl font-semibold hover:border-gray-400 transition-all">
                                Konsultasi Gratis
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Siap Meningkatkan Bisnis Anda?
            </h2>
            <p class="text-xl text-white/80 mb-8 max-w-2xl mx-auto">
                Konsultasikan kebutuhan digital marketing Anda dengan tim ahli kami dan dapatkan strategi yang tepat untuk bisnis Anda.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="../index.php#contact" class="bg-yellow-400 text-black px-8 py-4 rounded-full font-bold hover:bg-yellow-300 transition-all">
                    Konsultasi Gratis Sekarang
                </a>
                <a href="tel:+6281234567890" class="border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white hover:text-gray-900 transition-all">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

        <!-- Footer -->
    <footer class="bg-gray-900 text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/svg%3E')]"></div>
        </div>
        
        <!-- Main Footer Content -->
        <div class="relative z-10 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Top Section -->
                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8 mb-12">
                    <!-- Company Info -->
                    <div class="lg:col-span-2">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-2xl font-bold gradient-text">
                                    <?php echo $company_name; ?>
                                </div>
                                <div class="text-sm text-blue-400 font-medium">
                                    #1 Digital Marketing Agency Indonesia
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-300 mb-6 leading-relaxed max-w-md">
                            Solusi digital marketing terdepan untuk mengembangkan bisnis Anda di era digital. Kami membantu perusahaan mencapai target dengan strategi yang tepat dan hasil yang terukur.
                        </p>
                        
                        <!-- Awards & Certifications -->
                        <div class="mb-6">
                            <div class="text-sm font-semibold text-gray-400 mb-3">SERTIFIKASI & PENGHARGAAN</div>
                            <div class="flex flex-wrap gap-3">
                                <div class="bg-gray-800 px-3 py-1 rounded-full text-xs text-gray-300 border border-gray-700">
                                    Google Partner
                                </div>
                                <div class="bg-gray-800 px-3 py-1 rounded-full text-xs text-gray-300 border border-gray-700">
                                    Facebook Marketing Partner
                                </div>
                                <div class="bg-gray-800 px-3 py-1 rounded-full text-xs text-gray-300 border border-gray-700">
                                    Top Digital Agency 2024
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social Media -->
                        <div>
                            <div class="text-sm font-semibold text-gray-400 mb-3">IKUTI KAMI</div>
                            <div class="flex space-x-3">
                                <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-blue-600 rounded-lg flex items-center justify-center text-gray-400 hover:text-white transition-all duration-300 group">
                                    <i class="fab fa-facebook-f group-hover:scale-110 transition-transform"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-pink-600 rounded-lg flex items-center justify-center text-gray-400 hover:text-white transition-all duration-300 group">
                                    <i class="fab fa-instagram group-hover:scale-110 transition-transform"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-blue-500 rounded-lg flex items-center justify-center text-gray-400 hover:text-white transition-all duration-300 group">
                                    <i class="fab fa-linkedin-in group-hover:scale-110 transition-transform"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-blue-400 rounded-lg flex items-center justify-center text-gray-400 hover:text-white transition-all duration-300 group">
                                    <i class="fab fa-twitter group-hover:scale-110 transition-transform"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-red-600 rounded-lg flex items-center justify-center text-gray-400 hover:text-white transition-all duration-300 group">
                                    <i class="fab fa-youtube group-hover:scale-110 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Products -->
                    <div>
                        <h4 class="text-lg font-bold text-white mb-6 flex items-center">
                            <span class="w-2 h-6 bg-gradient-to-b from-blue-500 to-purple-600 rounded-full mr-3"></span>
                            Produk Kami
                        </h4>
                        <ul class="space-y-3">
                            <li><a href="google-ads/" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                                <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i>
                                Google Ads Management
                            </a></li>
                            <li><a href="facebook-ads/" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                                <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i>
                                Facebook Ads
                            </a></li>
                            <li><a href="seo-audit/" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                                <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i>
                                SEO Audit & Analysis
                            </a></li>
                            <li><a href="onpage-seo/" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                                <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i>
                                On-Page SEO
                            </a></li>
                            <li><a href="technical-seo/" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                                <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i>
                                Technical SEO
                            </a></li>
                            <li><a href="local-seo/" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center group">
                                <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i>
                                Local SEO Services
                            </a></li>
                        </ul>
                    </div>
                    
                    <!-- Contact Info -->
                    <div>
                        <h4 class="text-lg font-bold text-white mb-6 flex items-center">
                            <span class="w-2 h-6 bg-gradient-to-b from-blue-500 to-purple-600 rounded-full mr-3"></span>
                            Hubungi Kami
                        </h4>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-map-marker-alt text-blue-400 text-sm"></i>
                                </div>
                                <div>
                                    <div class="text-white font-medium text-sm">Kantor Pusat</div>
                                    <div class="text-gray-400 text-sm leading-relaxed">
                                        Jl. Sudirman No. 123<br>
                                        Jakarta Pusat 10220<br>
                                        Indonesia
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-phone text-green-400 text-sm"></i>
                                </div>
                                <div>
                                    <div class="text-white font-medium text-sm">Telepon</div>
                                    <div class="text-gray-400 text-sm">+62 21 1234 5678</div>
                                    <div class="text-gray-400 text-sm">+62 812 3456 7890</div>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-envelope text-purple-400 text-sm"></i>
                                </div>
                                <div>
                                    <div class="text-white font-medium text-sm">Email</div>
                                    <div class="text-gray-400 text-sm">info@digitalintijaya.com</div>
                                    <div class="text-gray-400 text-sm">hello@digitalintijaya.com</div>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-clock text-yellow-400 text-sm"></i>
                                </div>
                                <div>
                                    <div class="text-white font-medium text-sm">Jam Operasional</div>
                                    <div class="text-gray-400 text-sm">Senin - Jumat: 09:00 - 18:00</div>
                                    <div class="text-gray-400 text-sm">Sabtu: 09:00 - 15:00</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Quick Contact Button -->
                        <div class="mt-6">
                            <a href="../index.php#contact" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 text-sm font-medium">
                                <i class="fas fa-comments mr-2"></i>
                                Konsultasi Gratis
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Newsletter Section -->
                <div class="bg-gradient-to-r from-blue-600/10 to-purple-600/10 rounded-2xl p-8 mb-12 border border-gray-800">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-white mb-2">
                            Dapatkan Tips Digital Marketing Terbaru
                        </h3>
                        <p class="text-gray-400 mb-6 max-w-2xl mx-auto">
                            Berlangganan newsletter kami dan dapatkan insight, tips, dan strategi digital marketing terbaru langsung di inbox Anda.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                            <input type="email" placeholder="Masukkan email Anda" class="flex-1 px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 font-medium">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Subscribe
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Footer -->
        <div class="border-t border-gray-800 py-6 relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-gray-400 text-sm mb-4 md:mb-0">
                        &copy; 2024 <?php echo $company_name; ?>. Semua hak dilindungi. | 
                        <a href="#" class="hover:text-white transition-colors">Privacy Policy</a> | 
                        <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-blue-500/10 rounded-full blur-2xl"></div>
        <div class="absolute bottom-10 right-10 w-32 h-32 bg-purple-500/10 rounded-full blur-2xl"></div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Initialize AOS -->
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
        
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Navbar background on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 100) {
                navbar.classList.add('bg-white/95');
                navbar.classList.remove('bg-white/90');
            } else {
                navbar.classList.add('bg-white/90');
                navbar.classList.remove('bg-white/95');
            }
        });

        // Category Filter
        document.querySelectorAll('.category-filter').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.category-filter').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                // Add active class to clicked button
                this.classList.add('active');
                
                // Get category
                const category = this.dataset.category;
                
                // Filter products
                document.querySelectorAll('.product-card').forEach(card => {
                    if (category === 'all' || card.dataset.category === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>




