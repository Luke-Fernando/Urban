<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require __DIR__ . "/../shared/head.php";
    ?>
    <title>Urban | 404 page not found</title>
</head>

<body class="bg-[var(--main-bg-yellow)]">
    <main class="container min-h-max h-screen mx-auto flex flex-col justify-center items-center">
        <h1 class="text-[30vw] font-bold text-[var(--main-font-color-90)] leading-none">404</h1>
        <span class="text-base md:text-xl font-normal text-[var(--main-font-color-90)]">Page not found please go back to
            <a href="/home" class="text-base md:text-xl font-normal underline text-[var(--active-color-brown-low)] hover:text-[var(--active-color-brown)] duration-75 ease-linear">Home</a>
        </span>
    </main>
</body>

</html>