<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require __DIR__ . "/../shared/head.php";
    ?>
    <title>Urban | All offers</title>
</head>

<body class="bg-[var(--main-bg-yellow)]">
    <?php
    require __DIR__ . "/../shared/nav/nav-user.php";
    ?>
    <main class="container h-auto mx-auto flex flex-col justify-start items-start mt-10 mb-32 box-border px-4">
        <section class="w-max h-auto mb-5">
            <h3 class="text-lg font-medium text-[var(--main-font-color-90)]">Ongoing projects</h3>
        </section>
        <section class="w-full h-auto flex flex-col justify-start items-start my-10 lg:px-28 relative">
            <div class="w-full h-auto flex flex-col justify-center items-center relative
            before:content-[''] before:absolute before:right-full before:top-1/2 before:-translate-y-1/2 before:w-[1px] before:h-full
            before:bg-[var(--main-font-color-20)]">
                <div data-project-expand-trigger="id" class="w-full h-auto flex justify-start items-center hover:bg-[var(--main-font-color-10)] duration-75
                ease-linear px-4 py-2 cursor-default">
                    <div class="w-10 aspect-square overflow-hidden flex justify-center items-center border border-[var(--main-font-color-20)]
                hover:border-[var(--active-color-brown)] duration-75 ease-linear">
                        <img src="/assets/images/users/client.png" alt="client's profile picture" class="min-w-full min-h-full object-cover">
                    </div>
                    <div class="w-full h-auto flex flex-col justify-start items-start pl-5">
                        <p class="text-base font-medium text-[var(--main-font-color-80)]">Bradley G. Medeiros</p>
                        <span class="w-auto h-auto flex justify-start items-start">
                            <span class="text-[var(--main-font-color-80)] text-sm font-normal">@bradley</span>
                            <button class="w-max h-auto text-[var(--main-font-color-80)] ml-2 hover:text-[var(--main-font-color-90)] duration-75 ease-linear
                            relative after:content-[''] after:absolute after:z-10 after:w-2 after:aspect-square after:bg-[var(--active-color-brown)]
                            after:top-0 after:right-0 after:rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-5 h-auto">
                                    <path fill="currentColor" d="M20 2H4a2 2 0 0 0-2 2v18l4-4h14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2" />
                                </svg>
                            </button>
                        </span>
                    </div>
                    <div class="w-max h-auto flex justify-start items-center">
                        <p class="text-base font-normal text-[var(--main-font-color-80)] mr-3">05.45.38</p>
                        <button class="w-10 h-auto text-[var(--active-color-brown-low)] hover:text-[var(--active-color-brown)] active:scale-95 duration-75
                        ease-linear">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="hidden w-full h-auto">
                                <path fill="currentColor" d="M19 3H5c-1.1 0-2 .9-2 2v14a2 2 0 0 0 2 2h14c1.11 0 2-.89 2-2V5a2 2 0 0 0-2-2m-8 13H9V8h2zm4 0h-2V8h2z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                                <path fill="currentColor" d="M19 3H5c-1.11 0-2 .89-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5a2 2 0 0 0-2-2m-9 13V8l5 4" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div data-project-expand-content="id" class="w-full h-auto flex flex-col md:flex-row justify-start items-start px-4 pt-6">
                    <!-- basic details -->
                    <div class="w-full md:w-max h-auto flex flex-row md:flex-col flex-wrap md:flex-nowrap justify-center md:justify-start items-center md:items-start pr-4 border-b 
                    md:border-b-0 md:border-r border-[var(--main-font-color-20)] py-3 md:py-0">
                        <div class="w-max h-auto flex flex-col justify-start items-start mx-2 md:mx-0 my-2">
                            <p class="text-sm text-[var(--main-font-color-80)] font-medium mb-1">Job type</p>
                            <p class="text-sm text-[var(--main-font-color-80)] font-normal">Fixed price</p>
                        </div>
                        <div class="w-max h-auto flex flex-col justify-start items-start mx-2 md:mx-0 my-2">
                            <p class="text-sm text-[var(--main-font-color-80)] font-medium mb-1">Job type</p>
                            <p class="text-sm text-[var(--main-font-color-80)] font-normal">Fixed price</p>
                        </div>
                        <div class="w-max h-auto flex flex-col justify-start items-start mx-2 md:mx-0 my-2">
                            <p class="text-sm text-[var(--main-font-color-80)] font-medium mb-1">Job type</p>
                            <p class="text-sm text-[var(--main-font-color-80)] font-normal">Fixed price</p>
                        </div>
                    </div>
                    <!-- basic details -->
                    <!-- other details -->
                    <div class="w-full h-auto flex flex-col justify-start items-start px-10">
                        <div class="w-full h-auto flex justify-center items-center">
                            <p class="text-sm text-[var(--main-font-color-80)] font-normal">Deadline on
                                <span class="text-sm text-[var(--active-color-brown)] font-normal">15 Jun, 2024, 11.38 PM</span>
                            </p>
                        </div>
                        <div class="w-full h-auto flex justify-center items-center my-3">
                            <div class="w-auto h-auto flex flex-col md:flex-row justify-center items-start relative
                            after:content-[''] after:absolute after:top-full after:left-1/2 after:-translate-x-1/2 after:w-[80%] after:h-[1px]
                            after:bg-[var(--main-font-color-20)] py-4 after:hidden md:after:block">
                                <div class="w-max h-auto flex flex-col justify-start items-start px-5 py-2 md:py-0">
                                    <p class="text-sm font-medium text-[var(--main-font-color-80)]">Total payment due</p>
                                    <p class="text-sm text-[var(--main-font-color-80)] font-normal">$
                                        <span class="text-sm">150.00</span>
                                    </p>
                                </div>
                                <div class="w-max h-auto flex flex-col justify-start items-start px-5 py-2 md:py-0">
                                    <p class="text-sm font-medium text-[var(--main-font-color-80)]">Amount paid</p>
                                    <p class="text-sm text-[var(--main-font-color-80)] font-normal">$
                                        <span class="text-sm">250.00</span>
                                    </p>
                                </div>
                                <div class="w-max h-auto flex flex-col justify-start items-start px-5 py-2 md:py-0">
                                    <p class="text-sm font-medium text-[var(--main-font-color-80)]">Remaining payment due</p>
                                    <p class="text-sm text-[var(--main-font-color-80)] font-normal">$
                                        <span class="text-sm">100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-auto flex flex-col justify-start items-start mt-5">
                            <div class="w-full h-auto flex justify-start items-center mb-7">
                                <p class="text-base text-[var(--main-font-color-80)] font-medium">Milestones</p>
                            </div>
                            <!-- milestones -->
                            <div class="w-full h-auto flex flex-col justify-start items-start border-t border-b border-[var(--main-font-color-20)] py-3">
                                <!-- milestone -->
                                <div class="w-full h-auto my-3 flex flex-col justify-start items-start">
                                    <p class="text-base font-medium text-[var(--main-font-color-80)]">This is the milestone title &#40;
                                        $<span class="text-base font-medium">50.00</span> &#41;
                                    </p>
                                </div>
                                <div class="w-max h-auto flex justify-center items-center bg-green-500 mb-2">
                                    <p class="text-xs font-medium text-[var(--bg-white-low)] px-3 py-1">Payment completed</p>
                                </div>
                                <div class="w-[70%] h-auto flex flex-col justify-start items-start mb-5">
                                    <div class="w-full h-1 bg-[var(--main-font-color-20)] flex justify-start items-center relative">
                                        <span class="w-1/3 h-full bg-[var(--active-color-brown)]"></span>
                                    </div>
                                    <div class="w-full h-auto flex justify-end items-center">
                                        <p class="text-sm text-[var(--main-font-color-80)] font-normal">1 month and 5 days left</p>
                                    </div>
                                </div>
                                <div class="w-full h-auto flex justify-start items-start">
                                    <p class="text-sm font-medium text-[var(--main-font-color-80)]">Total worked:
                                        <span class="text-sm font-normal">5 hours, 20 minutes</span>
                                    </p>
                                </div>
                                <div class="w-full h-auto flex justify-start items-start mt-5">
                                    <button title="Expand timeline" class="text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] 
                                    active:scale-95 duration-75 ease-linear mx-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-8 h-auto">
                                            <path fill="currentColor" d="M15 3H9V1h6zm-2 16c0 1.03.26 2 .71 2.83c-.55.11-1.12.17-1.71.17a9 9 0 0 1 0-18c2.12 0 4.07.74 5.62 2l1.42-1.44c.51.44.96.9 1.41 1.41l-1.42 1.42A8.96 8.96 0 0 1 21 13v.35c-.64-.22-1.3-.35-2-.35c-3.31 0-6 2.69-6 6m0-12h-2v7h2zm7 11v-3h-2v3h-3v2h3v3h2v-3h3v-2z" />
                                        </svg>
                                    </button>
                                    <button title="Mark as completed" class="text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] 
                                    active:scale-95 duration-75 ease-linear mx-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" class="w-8 h-auto">
                                            <path fill="currentColor" d="M8.5 2a1.5 1.5 0 0 0-1.415 1H5.5A1.5 1.5 0 0 0 4 4.5v12A1.5 1.5 0 0 0 5.5 18h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 14.5 3h-1.585A1.5 1.5 0 0 0 11.5 2zM8 3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m4.854 6.354l-3.5 3.5a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L9 12.293l3.146-3.147a.5.5 0 0 1 .708.708" />
                                        </svg>
                                    </button>
                                </div>
                                <!-- milestone -->
                            </div>
                            <!-- milestones -->
                        </div>
                    </div>
                    <!-- other details -->
                </div>
            </div>
        </section>
    </main>
    <?php
    require __DIR__ . "/../shared/footer.php";
    ?>
</body>

</html>