<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME DRIVE</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/font.css') }}">
</head>

<body id="body" class="">
    <nav class="flex justify-between py-[20px] max-w-[1440px] px-[80px] w-full mx-auto">
        <span class="p-2 font-bold flex justify-center items-center">
            <img src="{{ url_for('static', filename='svg/nimbus-cloud-logo.svg') }}" alt="logo" srcset="" class="pr-2">
            <a href="" class="text-xl">NimbusCloud</a>
        </span>
        <span class="font-semibold p-2 flex justify-center items-center text-[#475569]">
            <a href="" class="pr-[30px]">Features</a>
            <a href="" class="pr-[30px]">Pricing</a>
            <a href="" class="pr-[30px]">Security</a>
            <a href="" class="">For Teams</a>
        </span>
        <span class="">
            <a href="" class="font-semibold pr-[30px]">Log In</a>
            <button class="bg-[#0EA5E9] font-semibold text-white p-2 px-[20px] rounded-lg">
                Get Started For Free
            </button>
        </span>
    </nav>
</body>

</html>