<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nimbus Cloud - Features</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="{{ url_for('static', filename='js/script.js') }}" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/font.css') }}">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/landing-page.css') }}">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/features-page.css') }}">
</head>

<body id="body" class="">
    <header class="w-full max-w-[1440px] mx-auto px-[80px] py-[20px] flex justify-between items-center">
        <div class="p-2 font-bold flex items-center">
            <img src="{{ url_for('static', filename='svg/nimbus-cloud-logo.svg') }}" alt="logo" class="pr-2">
            <a href="{{ url_for('home') }}" class="text-xl text-[#0F172A] name-logo">NimbusCloud</a>
        </div>

        <nav class="font-semibold p-2 flex items-center text-[#475569] gap-[30px]">
            <a href="{{ url_for('features') }}">Features</a>
            <a href="">Pricing</a>
            <a href="">Security</a>
            <a href="">For Teams</a>
        </nav>

        <div class="flex items-center gap-[30px]">
            <a href="" class="font-semibold">Log In</a>
            <button class="bg-[#0EA5E9] font-semibold text-white py-2 px-[20px] rounded-lg">
                Get Started For Free
            </button>
        </div>
    </header>

    <main class="w-full max-w-[1440px] mx-auto px-[80px]">
        <section class="flex pt-[96px] gap-[64px] items-center justify-between mb-10">
            <div class="max-w-[608px] flex flex-col gap-4">
                <h3 class="font-bold text-[#0EA5E9]">
                    Engineered for Performance
                </h3>
                <h1 class="features-title text-5xl">
                    Advanced features to revolutionize your files
                </h1>
                <p class="text-[#475569] text-lg">
                    Scale storage seamlessly, back up local directories instantaneously, and share assets with
                    custom-tailored access gates. Built on modern, resilient network protocols.
                </p>
            </div>

            <div class="max-w-[608px] w-full">
                <a href="https://www.vecteezy.com/free-vector/cloud-storage">
                    <img src="{{ url_for('static', filename='pictures/cloud-advance-features.jpg') }}" alt="Illustration" class="w-full h-auto">
                </a>
            </div>
        </section>

        <section class="bg-[#F8FAFC] py-[48px] flex items-center jusfity-between gap-[64px] rounded-lg">
            <div class="max-w-[520px]">
                <img src="{{ url_for('static', filename='pictures/cloud-engine.jpg') }}" alt="" srcset="">
            </div>

            <div class="max-w-[696px]">
                <h1 class="text-[32px] font-black">
                    Delta-Sync Engine
                </h1>
                <p class="text-[16px] text-[#475569]">
                    Our smart upload systems detect precise block modifications within files. Instead of
                    re-uploading large datasets, only modified parts are transferred,
                    preserving your bandwidth and battery lifespan.
                </p>
            </div>
        </section>

        <section class="py-[96px] flex flex-col items-center">
            <div class="flex flex-col items-center mb-[48px]">
                <h1 class="text-[32px] trusted-names-landing-page">
                    Key Features
                </h1>
                <h2 class="text-[16px]">
                    Everything you need to manage and secure your files
                </h2>
            </div>

            <div class="flex gap-[24px]">
                <div class="flex flex-col p-[24px] gap-[16px] max-w-[302px] items-center border border-[#E2E8F0] rounded-2xl">
                    <img src="{{ url_for('static', filename='svg/icon-cloud.svg') }}" alt="" srcset="" class="size-[48px]">
                    <span class="font-bold">
                        Cloud Storage
                    </span>
                    <span class="text-center">
                        (Unlimited Scale) Securely host all document types.
                    </span>
                </div>
                <div class="flex flex-col p-[24px] gap-[16px] max-w-[302px] items-center border border-[#E2E8F0] rounded-2xl">
                    <img src="{{ url_for('static', filename='svg/icon-team.svg') }}" alt="" srcset="" class="size-[48px]">
                    <span class="font-bold">
                        Team Collaboration
                    </span>
                    <span class="text-center">
                        (Live Edits) Work simultaneously with team folders.
                    </span>
                </div>
                <div class="flex flex-col p-[24px] gap-[16px] max-w-[302px] items-center border border-[#E2E8F0] rounded-2xl">
                    <img src="{{ url_for('static', filename='svg/icon-advance-security.svg') }}" alt="" srcset="" class="size-[48px]">
                    <span class="font-bold">
                        Advance Security
                    </span>
                    <span class="text-center">
                        (Encryption) Zero-knowledge protection standard.
                    </span>
                </div>
                <div class="flex flex-col p-[24px] gap-[16px] max-w-[302px] items-center border border-[#E2E8F0] rounded-2xl">
                    <img src="{{ url_for('static', filename='svg/icon-synching.svg') }}" alt="" srcset="" class="size-[48px]">
                    <span class="font-bold">
                        Seamless Synching
                    </span>
                    <span class="text-center">
                        (All Devices) Access from mobile, tablet, or web.
                    </span>
                </div>
            </div>
        </section>
    </main>

    <footer class="w-full max-w-[1440px] mx-auto px-[80px] pt-[80px] bg-[#0F172A]  pb-[48px] rounded-lg">
        <div class="flex justify-between mb-[64px]">
            <section class="flex flex-col max-w-[320px] gap-[20px]">
                <div class="flex gap-[8px]">
                    <img src="{{ url_for('static', filename='svg/nimbus-cloud-logo.svg') }}" alt="logo" srcset="">
                    <a href="" class="text-xl footer-logo text-white">NimbusCloud</a>
                </div>

                <div>
                    <p class="text-[#94A3B8] text-[15px]">
                        Next-generation secure cloud vaults. Store, sync, and collaborate seamlessly across all devices with military-grade privacy controls.
                    </p>
                </div>
            </section>

            <section class="flex gap-[64px]">
                <div class="flex flex-col gap-[16px] text-[#94A3B8]">
                    <h1 class="font-bold text-white">
                        PRODUCT
                    </h1>
                    <a href="{{ url_for('features') }}">Features</a>
                    <a href="">Pricing</a>
                    <a href="">Security</a>
                    <a href="">Teams</a>
                </div>

                <div class="flex flex-col gap-[16px] text-[#94A3B8]">
                    <h1 class="font-bold text-white">
                        RESOURCES
                    </h1>
                    <a href="">Documentation</a>
                    <a href="">Guides</a>
                    <a href="">API Status</a>
                    <a href="">Community</a>
                </div>

                <div class="flex flex-col gap-[16px] text-[#94A3B8]">
                    <h1 class="font-bold text-white">
                        COMPANY
                    </h1>
                    <a href="">About Us</a>
                    <a href="">Careers</a>
                    <a href="">Press Kit</a>
                    <a href="">Contact Support</a>
                </div>
            </section>
        </div>

        <div class="flex flex-col gap-[32px]">
            <hr class="h-1 w-full bg-[#334155] rounded-full">
            <div class="flex justify-between">
                <p class="text-[#94A3B8]">© 2026 NimbusCloud Inc. All rights reserved.</p>

                <div class="flex text-[#94A3B8] gap-[24px]">
                    <a href="">Terms of Services</a>
                    <a href="">Privacy Policy</a>
                    <a href="">SLA</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>