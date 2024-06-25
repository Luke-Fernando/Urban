<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require __DIR__ . "/../shared/head.php";
    ?>
    <title>Urban | Messages</title>
</head>

<body class="bg-[var(--main-bg-yellow)]">
    <?php
    require __DIR__ . "/../shared/nav/nav-user.php";
    ?>
    <main class="container mx-auto mt-10 mb-32 box-border px-4 h-[80vh] min-h-[600px] max-h-[750px] flex justify-between items-start">
        <section class="w-full md:w-[30%] h-full bg-red-300"></section>
        <section class="w-full md:w-[65%] h-full border border-[var(--main-font-color-20)] hidden md:flex flex-col justify-start items-start">
            <div class="w-full flex-1 bg-[var(--bg-white-low)] overflow-auto"></div>
            <div class="w-full h-auto border-t border-[var(--main-font-color-20)] flex justify-center items-center">
                <div class="w-full h-auto flex justify-center items-center py-4">
                    <button data-message-dropdown-trigger="request" class="w-[40px] aspect-square flex justify-center items-center border 
                    border-[var(--main-font-color-20)] bg-[var(--main-font-color-80)] text-[var(--bg-white-low)] hover:bg-[var(--main-font-color-90)] 
                    duration-75 ease-linear mx-1 active:scale-95 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-[70%] h-auto">
                            <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z" />
                        </svg>
                    </button>
                    <span class="w-[40px] aspect-square flex justify-center items-center mx-1 relative">
                        <button data-message-dropdown-trigger="files" title="Send a file" class="w-full h-full flex justify-center items-center border 
                        border-[var(--main-font-color-20)] bg-[var(--bg-white-low)] active:scale-95 text-[var(--main-font-color-80)] 
                        hover:text-[var(--main-font-color-90)] duration-75 ease-linear">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-[70%] h-auto">
                                <path fill="currentColor" d="M5 5h16v10H7V9h10v2H9v2h10V7H5v10h14v2H3V5z" />
                            </svg>
                        </button>
                        <!-- dropdown container -->
                        <div data-message-dropdown="files" data-show="false" class="w-full h-auto absolute bottom-full z-30 overflow-x-visible overflow-y-clip 
                        flex flex-col justify-center items-center shadow-md max-h-0 invisible duration-300 ease-linear">
                            <!-- dropdown -->
                            <div class="w-max h-auto bg-[var(--bg-white-low)] border-l md:border border-[var(--main-font-color-20)] flex flex-col justify-start 
        items-start px-5 box-border">
                                <button title="Zip" class="w-6 h-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] 
                                duration-75 ease-linear active:scale-95 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512" class="w-full h-auto">
                                        <path fill="currentColor" d="M413.4 0H114.7C91.1 0 72 19.1 72 42.7v426.7c0 23.5 19.1 42.7 42.7 42.7h298.7c23.5 0 42.7-19.1 42.7-42.7V42.7C456 19.1 436.9 0 413.4 0m-192 469.3L242.7 320h42.7l21.3 149.3zM328 128h-64v42.7h64v42.7h-64V256h64v42.7h-64V256h-64v-42.7h64v-42.7h-64V128h64V85.3h-64V42.7h64v42.7h64zm-74.6 277.3L242.7 448h42.7l-10.7-42.7z" />
                                    </svg>
                                </button>
                                <button title="Pdf" class="w-6 h-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] 
                                duration-75 ease-linear active:scale-95 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024" class="w-full h-auto">
                                        <path fill="currentColor" d="M854.6 288.7c6 6 9.4 14.1 9.4 22.6V928c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h424.7c8.5 0 16.7 3.4 22.7 9.4zM790.2 326L602 137.8V326z" />
                                    </svg>
                                </button>
                                <button title="Image" class="w-6 h-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] 
                                duration-75 ease-linear active:scale-95 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                                        <path fill="currentColor" d="M21 21V3H3v18zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- dropdown -->
                            <!-- arrow -->
                            <div class="w-max h-auto z-40 top-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="hidden md:block w-5 h-auto text-[var(--bg-white-low)] 
                        stroke-[var(--main-font-color-30)] stroke-1 rotate-180">
                                    <path fill="currentColor" d="M3 19h18a1.002 1.002 0 0 0 .823-1.569l-9-13c-.373-.539-1.271-.539-1.645 0l-9 13A.999.999 0 0 0 3 19" />
                                </svg>
                            </div>
                            <!-- arrow -->
                        </div>
                        <!-- dropdown container -->
                    </span>
                    <input type="text" class="max-w-[400px] flex-1 h-[40px] bg-[var(--bg-white-low)] border-none ring-1 ring-[var(--main-font-color-20)] px-4 
                    focus:ring-[var(--active-color-brown)] box-border text-sm text-[var(--main-font-color-80)] mx-1">
                    <button class="w-max h-[40px] flex justify-center items-center font-medium text-[var(--main-bg-yellow)] text-sm 
                    bg-[var(--active-color-brown-low)] hover:bg-[var(--active-color-brown)] ease-linear duration-75 px-4 ring-1 
                    ring-[var(--main-font-color-20)] active:scale-95 mx-1">
                        Send
                    </button>
                </div>
            </div>
        </section>
    </main>
    <?php
    require __DIR__ . "/../shared/footer.php";
    ?>
</body>

</html>