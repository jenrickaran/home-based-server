<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME DRIVE</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/font.css') }}">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/landing-page.css') }}">
</head>

<body id="body" class="">
    <header class="w-full max-w-[1440px] mx-auto px-[80px] py-[20px] flex justify-between items-center">
        <div class="p-2 font-bold flex items-center">
            <img src="{{ url_for('static', filename='svg/nimbus-cloud-logo.svg') }}" alt="logo" class="pr-2">
            <a href="" class="text-xl">NimbusCloud</a>
        </div>

        <nav class="font-semibold p-2 flex items-center text-[#475569] gap-[30px]">
            <a href="">Features</a>
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
                <h1 class="text-[56px] font-extrabold" id="title-hero-landing">
                    Secure, Smart Cloud Storage for Everyone.
                </h1>
                <p class="text-gray-600 text-[18px]">
                    Store, Sync, and Share all your files with ease and confidence.
                    Recreate your online vault with lightning-fast uploads and military-grade security.
                    20GB Free forever.
                </p>
                <div class="flex gap-4 pt-2">
                    <button class="bg-[#0EA5E9] font-semibold text-white py-2 px-[20px] rounded-lg">
                        Get 20 GB Free Now
                    </button>
                    <button class="bg-gray-100 text-gray-800 font-semibold py-2 px-[20px] rounded-lg">
                        Learn More
                    </button>
                </div>
            </div>

            <div class="max-w-[608px] w-full">
                <img src="{{ url_for('static', filename='pictures/illustration-frame.png') }}" alt="Illustration" class="w-full h-auto">
            </div>
        </section>

        <section class="bg-[#F8FAFC] py-[48px] flex flex-col items-center gap-[24px] rounded-lg">
            <div>
                <h2 class="text-gray-600 text-[12px] font-bold">
                    Trusted By Innovative Individuals
                </h2>
            </div>

            <div class="flex gap-10">
                <h2 class="text-gray-600 text-[20px] trusted-names-landing-page">
                    Cresha Pritz B. Lobarbio
                </h2>
                <h2 class="text-gray-600 text-[20px] trusted-names-landing-page">
                    William James J. Lagonoy
                </h2>
                <h2 class="text-gray-600 text-[20px] trusted-names-landing-page">
                    Jenrick P. Aran
                </h2>
            </div>
        </section>

        <section class="pt-[96px]">
            <div>
                <h1 class="text-[32px] trusted-names-landing-page">
                    Key Features
                </h1>
                <h2 class="text-[16px]">
                    Everything you need to manage and secure your files
                </h2>
            </div>

            <div>

            </div>
        </section>
    </main>
</body>

</html>