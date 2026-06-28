<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/services/{slug}', function (string $slug) {
    $services = [
        'ai-solutions' => [
            'title' => 'AI Solutions',
            'subtitle' => 'Intelligent automation and AI-powered tools to transform your business operations.',
            'icon' => 'bx-brain',
            'heading' => 'Transform Your Business with Artificial Intelligence',
            'description' => 'Our AI Solutions service helps businesses leverage the power of artificial intelligence to automate processes, gain insights from data, and make smarter decisions. We build custom AI models and integrate them into your existing workflows.',
            'description_extended' => 'From natural language processing to computer vision and predictive analytics, we provide end-to-end AI solutions that are tailored to your specific business needs. Our solutions are designed to work in low-connectivity environments, ensuring reliability across African markets.',
            'image' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=600&h=450&fit=crop',
            'meta_description' => 'AI Solutions by Aloflux - Custom AI-powered tools and automation for African businesses.',
            'features' => [
                ['icon' => 'bx-bot', 'title' => 'Custom AI Models', 'description' => 'Purpose-built machine learning models trained on your data to solve your specific business challenges.'],
                ['icon' => 'bx-analyse', 'title' => 'Predictive Analytics', 'description' => 'Data-driven insights and forecasting to help you make informed business decisions ahead of the curve.'],
                ['icon' => 'bx-cog', 'title' => 'Process Automation', 'description' => 'Intelligent automation of repetitive tasks, freeing your team to focus on strategic activities.'],
            ],
        ],
        'offline-first-development' => [
            'title' => 'Offline-First Development',
            'subtitle' => 'Software that works seamlessly even without internet connectivity.',
            'icon' => 'bx-shield',
            'heading' => 'Build Software That Works Everywhere',
            'description' => 'We design and develop software with cleaner, offline-first architectures specifically tailored for African markets. Our applications sync automatically when connectivity is restored, ensuring no data is ever lost.',
            'description_extended' => 'Our offline-first approach means your business never stops operating, regardless of internet availability. We use cutting-edge synchronization technologies to ensure data consistency across all devices and locations.',
            'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&h=450&fit=crop',
            'meta_description' => 'Offline-First Development by Aloflux - Software that works without internet for African markets.',
            'features' => [
                ['icon' => 'bx-data', 'title' => 'Auto Data Sync', 'description' => 'Automatic background synchronization when connectivity is restored, with conflict resolution built in.'],
                ['icon' => 'bx-mobile-alt', 'title' => 'Cross-Platform', 'description' => 'Works across mobile, tablet, and desktop devices with a consistent experience everywhere.'],
                ['icon' => 'bx-lock-alt', 'title' => 'Data Security', 'description' => 'End-to-end encryption ensures your data stays secure whether stored locally or syncing to the cloud.'],
            ],
        ],
        'systems-integration' => [
            'title' => 'Systems Integration',
            'subtitle' => 'Connect your tools and systems into one unified workflow.',
            'icon' => 'bx-transfer',
            'heading' => 'Unify Your Business Systems',
            'description' => 'We integrate disparate systems, databases, and applications to create seamless workflows across your organization. Our integration solutions eliminate data silos and enable real-time data flow between platforms.',
            'description_extended' => 'Whether you need to connect legacy systems with modern applications, integrate third-party APIs, or build custom middleware, our team has the expertise to deliver robust, scalable integration solutions.',
            'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&h=450&fit=crop',
            'meta_description' => 'Systems Integration by Aloflux - Connect your business tools and platforms seamlessly.',
            'features' => [
                ['icon' => 'bx-link', 'title' => 'API Integration', 'description' => 'Connect with any third-party service through custom API integrations and middleware solutions.'],
                ['icon' => 'bx-sync', 'title' => 'Real-Time Sync', 'description' => 'Keep all your systems in sync with real-time data flow and automatic updates across platforms.'],
                ['icon' => 'bx-server', 'title' => 'Legacy Modernization', 'description' => 'Bridge the gap between legacy systems and modern applications without disrupting operations.'],
            ],
        ],
        'enterprise-automation' => [
            'title' => 'Enterprise Automation',
            'subtitle' => 'Streamline your operations with custom workflow automation.',
            'icon' => 'bx-cog',
            'heading' => 'Automate Your Enterprise Workflows',
            'description' => 'Custom enterprise workflow automation solutions designed for SMEs in low-connectivity environments. We help businesses reduce manual work, minimize errors, and increase operational efficiency.',
            'description_extended' => 'Our automation solutions cover everything from document processing and approval workflows to inventory management and customer communications. Each solution is tailored to your specific business processes.',
            'image' => 'https://images.unsplash.com/photo-1518432031352-d6fc5c10da5a?w=600&h=450&fit=crop',
            'meta_description' => 'Enterprise Automation by Aloflux - Custom workflow automation for African SMEs.',
            'features' => [
                ['icon' => 'bx-task', 'title' => 'Workflow Design', 'description' => 'Custom workflow design that maps to your exact business processes and approval chains.'],
                ['icon' => 'bx-bar-chart-alt-2', 'title' => 'Performance Tracking', 'description' => 'Real-time dashboards and reporting to monitor workflow performance and identify bottlenecks.'],
                ['icon' => 'bx-bell', 'title' => 'Smart Notifications', 'description' => 'Automated alerts and notifications to keep your team informed and tasks moving forward.'],
            ],
        ],
        'marketing' => [
            'title' => 'Marketing',
            'subtitle' => 'Strategic digital marketing solutions to grow your brand.',
            'icon' => 'bx-line-chart',
            'heading' => 'Grow Your Brand with Digital Marketing',
            'description' => 'Our marketing services help businesses reach their target audience effectively through strategic digital campaigns. We combine data-driven approaches with creative storytelling to maximize your brand\'s impact.',
            'description_extended' => 'From brand strategy and market research to campaign execution and performance analysis, we provide comprehensive marketing solutions tailored to African markets and audiences.',
            'image' => 'https://images.unsplash.com/photo-1533750349088-cd871a92f312?w=600&h=450&fit=crop',
            'meta_description' => 'Digital Marketing by Aloflux - Strategic marketing solutions for African businesses.',
            'features' => [
                ['icon' => 'bx-target-lock', 'title' => 'Targeted Campaigns', 'description' => 'Data-driven campaigns that reach the right audience at the right time with the right message.'],
                ['icon' => 'bx-trending-up', 'title' => 'Growth Strategy', 'description' => 'Comprehensive growth strategies that align marketing efforts with your business objectives.'],
                ['icon' => 'bx-bar-chart', 'title' => 'Analytics & Reporting', 'description' => 'Detailed analytics and reporting to measure campaign performance and optimize ROI.'],
            ],
        ],
        'content-marketing' => [
            'title' => 'Content Marketing',
            'subtitle' => 'Compelling content that engages your audience and drives results.',
            'icon' => 'bx-edit',
            'heading' => 'Create Content That Converts',
            'description' => 'Our content marketing service helps businesses create and distribute valuable, relevant content that attracts and retains a clearly defined audience. We craft stories that resonate with your target market.',
            'description_extended' => 'From blog posts and articles to video content and infographics, we develop content strategies that build brand authority, drive organic traffic, and generate quality leads for your business.',
            'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=450&fit=crop',
            'meta_description' => 'Content Marketing by Aloflux - Engaging content strategies for African businesses.',
            'features' => [
                ['icon' => 'bx-pen', 'title' => 'Content Strategy', 'description' => 'Comprehensive content plans aligned with your brand voice, audience interests, and business goals.'],
                ['icon' => 'bx-video', 'title' => 'Multi-Format Content', 'description' => 'Blog posts, videos, infographics, and more — content in the formats your audience prefers.'],
                ['icon' => 'bx-calendar', 'title' => 'Content Calendar', 'description' => 'Organized publishing schedules that maintain consistency and keep your audience engaged.'],
            ],
        ],
        'social-media-marketing' => [
            'title' => 'Social Media Marketing',
            'subtitle' => 'Build and grow your social media presence with targeted strategies.',
            'icon' => 'bx-share-alt',
            'heading' => 'Dominate Social Media',
            'description' => 'We help businesses build a strong social media presence through targeted campaigns, community management, and engaging content. Our strategies are designed to increase brand awareness and drive meaningful engagement.',
            'description_extended' => 'We manage your social media presence across all major platforms, creating content calendars, running paid campaigns, and engaging with your community to build lasting relationships with your audience.',
            'image' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=600&h=450&fit=crop',
            'meta_description' => 'Social Media Marketing by Aloflux - Grow your social presence and engagement.',
            'features' => [
                ['icon' => 'bx-group', 'title' => 'Community Management', 'description' => 'Active community management that builds trust and fosters genuine relationships with your audience.'],
                ['icon' => 'bx-image', 'title' => 'Visual Content', 'description' => 'Eye-catching graphics, videos, and stories designed to stop the scroll and drive engagement.'],
                ['icon' => 'bx-dollar', 'title' => 'Paid Advertising', 'description' => 'Targeted social media ad campaigns that maximize reach and deliver measurable results.'],
            ],
        ],
        'search-engine-optimization' => [
            'title' => 'Search Engine Optimization',
            'subtitle' => 'Improve your search rankings and drive organic traffic.',
            'icon' => 'bx-search-alt',
            'heading' => 'Rank Higher, Get Found',
            'description' => 'Our SEO services help businesses improve their search engine rankings and drive organic traffic to their websites. We use data-driven strategies and best practices to boost your online visibility.',
            'description_extended' => 'From technical SEO audits and keyword research to on-page optimization and link building, we provide comprehensive SEO solutions that deliver sustainable, long-term results for your business.',
            'image' => 'https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?w=600&h=450&fit=crop',
            'meta_description' => 'SEO by Aloflux - Improve your search rankings and drive organic traffic.',
            'features' => [
                ['icon' => 'bx-search', 'title' => 'Keyword Research', 'description' => 'In-depth keyword research to identify high-value opportunities that your target audience is searching for.'],
                ['icon' => 'bx-code-block', 'title' => 'Technical SEO', 'description' => 'Technical audits and optimizations to ensure your website is fast, crawlable, and search engine friendly.'],
                ['icon' => 'bx-link-alt', 'title' => 'Link Building', 'description' => 'Strategic link building campaigns that boost your domain authority and search rankings.'],
            ],
        ],
        'digital-commerce' => [
            'title' => 'Digital Commerce Infrastructure',
            'subtitle' => 'E-commerce platforms, payment gateways, and cross-border transaction tooling.',
            'icon' => 'bx-store',
            'heading' => 'Build Commerce Infrastructure That Scales',
            'description' => 'We design and build digital commerce systems for businesses that need reliable, scalable transaction infrastructure. From e-commerce storefronts to POS and inventory management, we cover the full stack of commerce operations.',
            'description_extended' => 'Our team integrates leading payment gateways including Pesapal, DusuPay, SeerBit, Tazapay, and Dodo Payments, supporting cross-border transactions and local payment methods. We also build custom POS systems and inventory management platforms tailored to your business operations.',
            'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=450&fit=crop',
            'meta_description' => 'Digital Commerce Infrastructure by Aloflux - E-commerce, POS, payment gateways, and cross-border transaction tooling.',
            'features' => [
                ['icon' => 'bx-credit-card', 'title' => 'Payment Gateway Integration', 'description' => 'Integrate Pesapal, DusuPay, SeerBit, Tazapay, Dodo Payments, and other gateways for seamless local and cross-border payments.'],
                ['icon' => 'bx-store-alt', 'title' => 'E-Commerce Platforms', 'description' => 'Custom e-commerce storefronts and marketplaces built for performance, conversion, and scale.'],
                ['icon' => 'bx-package', 'title' => 'POS and Inventory Management', 'description' => 'Point of sale systems and inventory management platforms tailored to your retail or distribution operations.'],
            ],
        ],
        'it-managed-services' => [
            'title' => 'IT Managed Services',
            'subtitle' => 'Web hosting, email infrastructure, domain administration, and IT support.',
            'icon' => 'bx-server',
            'heading' => 'Reliable IT Management Without the Overhead',
            'description' => 'We manage the IT infrastructure that keeps your organisation running. Web hosting, email infrastructure, domain administration, and ongoing IT support, all handled by a dedicated team so your internal staff can focus on what matters.',
            'description_extended' => 'Our managed services cover Linux server administration, cPanel and WHM environments, email infrastructure setup and maintenance, SSL management, and responsive IT support. We currently manage services for organisations including CONSENT and FoSCU.',
            'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&h=450&fit=crop',
            'meta_description' => 'IT Managed Services by Aloflux - Web hosting, email infrastructure, domain administration, and IT support.',
            'features' => [
                ['icon' => 'bx-cloud', 'title' => 'Web Hosting and Server Management', 'description' => 'Reliable Linux server administration and hosting environments managed to keep your platforms fast and available.'],
                ['icon' => 'bx-envelope', 'title' => 'Email Infrastructure', 'description' => 'Professional email infrastructure setup, configuration, and ongoing maintenance for your organisation.'],
                ['icon' => 'bx-support', 'title' => 'IT Support', 'description' => 'Responsive IT support covering domains, SSL certificates, and day-to-day technical issues for your team.'],
            ],
        ],
    ];

    if (!isset($services[$slug])) {
        abort(404);
    }

    return view('service', ['service' => $services[$slug]]);
})->name('service.show');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/sitemap.xml', function () {
    $serviceslugs = [
        'ai-solutions',
        'offline-first-development',
        'systems-integration',
        'enterprise-automation',
        'marketing',
        'content-marketing',
        'social-media-marketing',
        'search-engine-optimization',
        'digital-commerce',
        'it-managed-services',
    ];

    $urls = [
        ['loc' => url('/'), 'changefreq' => 'weekly', 'priority' => '1.0'],
        ['loc' => url('/about'), 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => url('/services'), 'changefreq' => 'weekly', 'priority' => '0.9'],
    ];

    foreach ($serviceslugs as $slug) {
        $urls[] = ['loc' => url('/services/' . $slug), 'changefreq' => 'monthly', 'priority' => '0.7'];
    }

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ($urls as $url) {
        $xml .= "  <url>\n";
        $xml .= "    <loc>" . htmlspecialchars($url['loc']) . "</loc>\n";
        $xml .= "    <changefreq>" . $url['changefreq'] . "</changefreq>\n";
        $xml .= "    <priority>" . $url['priority'] . "</priority>\n";
        $xml .= "    <lastmod>" . now()->toDateString() . "</lastmod>\n";
        $xml .= "  </url>\n";
    }
    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');
