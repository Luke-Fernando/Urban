<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require __DIR__ . "/../../shared/head.php";
    ?>
    <title>Urban | Post job</title>
</head>

<body class="bg-[var(--main-bg-yellow)]">
    <?php
    require __DIR__ . "/../../shared/nav/nav-user.php";
    ?>
    <main class="container h-auto mx-auto mt-10 mb-32 box-border px-4">
        <section class="w-max h-auto mb-10">
            <h3 class="text-lg font-medium text-[var(--main-font-color-90)]">Create job</h3>
        </section>
        <section class="w-full h-auto flex justify-start items-start flex-wrap px-5 lg:px-20">
            <label for="title" class="w-full h-auto px-4 box-border my-4">
                <p class="text-sm font-normal text-[var(--main-font-color-80)] mb-2">Title</p>
                <input type="text" id="title" class="w-full h-[40px] bg-[var(--bg-white-low)] border-none outline-none px-3
                ring-1 ring-[var(--main-font-color-20)] focus:ring-[var(--active-color-brown)] box-border text-sm font-normal text-[var(--main-font-color-80)]">
            </label>
            <div class="w-full lg:w-1/2 h-auto px-4 box-border my-4">
                <!--  -->
                <span class="w-full h-auto relative flex flex-col justify-start items-start">
                    <label for="category" class="w-full h-auto box-border relative">
                        <p class="text-sm font-normal text-[var(--main-font-color-80)] mb-2">Category</p>
                        <input placeholder="Select your category" data-select-value="1" data-select-trigger="initial-milestone" type="text" id="category" class="
                        w-full h-[40px] bg-[var(--bg-white-low)] border-none outline-none px-3 ring-1 ring-[var(--main-font-color-20)]
                        focus:ring-[var(--active-color-brown)] box-border text-sm font-normal text-[var(--main-font-color-80)]">
                        <div data-select="initial-milestone" data-show="false" class="w-full h-auto absolute top-[110%] left-0 bg-[var(--bg-white-low)] py-2 z-10
                        border border-[var(--main-font-color-20)] overflow-hidden shadow-lg invisible max-h-0">
                            <button data-select-option="initial-milestone" data-select-value="1" class="w-full min-w-max text-sm text-[var(--main-font-color-80)] 
                                                    font-normal hover:bg-[var(--main-font-color-10)] hover:text-[var(--main-font-color-90)] duration-75 ease-linear px-4 py-2 flex 
                                                    justify-start items-center">
                                Fixed
                            </button>
                            <button data-select-option="initial-milestone" data-select-value="2" class="w-full min-w-max text-sm text-[var(--main-font-color-80)] 
                                                    font-normal hover:bg-[var(--main-font-color-10)] hover:text-[var(--main-font-color-90)] duration-75 ease-linear px-4 py-2 flex 
                                                    justify-start items-center">
                                Hourly
                            </button>
                        </div>
                    </label>
                    <p data-select-selected="initial-milestone" class="text-sm font-normal text-[var(--active-color-brown)] text-start mt-2">Select your category</p>
                </span>
                <!--  -->
            </div>
            <div class="w-full lg:w-1/2 h-auto px-4 box-border my-4">
                <!--  -->
                <span class="w-full h-auto relative flex flex-col justify-start items-start">
                    <label for="sub-category" class="w-full h-auto box-border relative">
                        <p class="text-sm font-normal text-[var(--main-font-color-80)] mb-2">Sub category</p>
                        <input placeholder="Select your sub category" data-select-value="1" data-select-trigger="sub-category-milestone" type="text" id="sub-category" class="
                        w-full h-[40px] bg-[var(--bg-white-low)] border-none outline-none px-3 ring-1 ring-[var(--main-font-color-20)]
                        focus:ring-[var(--active-color-brown)] box-border text-sm font-normal text-[var(--main-font-color-80)]">
                        <div data-select="sub-category-milestone" data-show="false" class="w-full h-auto absolute top-[110%] left-0 bg-[var(--bg-white-low)] py-2 z-10
                        border border-[var(--main-font-color-20)] overflow-hidden shadow-lg invisible max-h-0">
                            <button data-select-option="sub-category-milestone" data-select-value="1" class="w-full min-w-max text-sm text-[var(--main-font-color-80)] 
                                                    font-normal hover:bg-[var(--main-font-color-10)] hover:text-[var(--main-font-color-90)] duration-75 ease-linear px-4 py-2 flex 
                                                    justify-start items-center">
                                Fixed
                            </button>
                            <button data-select-option="sub-category-milestone" data-select-value="2" class="w-full min-w-max text-sm text-[var(--main-font-color-80)] 
                                                    font-normal hover:bg-[var(--main-font-color-10)] hover:text-[var(--main-font-color-90)] duration-75 ease-linear px-4 py-2 flex 
                                                    justify-start items-center">
                                Hourly
                            </button>
                        </div>
                    </label>
                    <p data-select-selected="sub-category-milestone" class="text-sm font-normal text-[var(--active-color-brown)] text-start mt-2">Select your sub category</p>
                </span>
                <!--  -->
            </div>
            <div class="w-1/2 lg:w-1/4 h-auto px-4 box-border my-4">
                <!--  -->
                <span class="w-full h-auto relative flex flex-col justify-start items-start">
                    <label for="skills" class="w-full h-auto box-border relative">
                        <p class="text-sm font-normal text-[var(--main-font-color-80)] mb-2">Skills</p>
                        <input placeholder="Select preferresd skills" data-dropdown-toggler="category" type="text" id="skills" class="
                        w-full h-[40px] bg-[var(--bg-white-low)] border-none outline-none px-3 ring-1 ring-[var(--main-font-color-20)]
                        focus:ring-[var(--active-color-brown)] box-border text-sm font-normal text-[var(--main-font-color-80)]">
                        <div data-dropdown-menu="category" data-show="false" class="absolute z-50 top-[110%] left-0 w-full h-auto overflow-auto flex flex-col 
                            justify-start items-start bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] px-4 py-2 box-border shadow-md invisible max-h-0">
                            <label data-trigger-checkbox="development-and-it" for="development-and-it" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                <input id="development-and-it" data-input-checkbox="development-and-it" type="checkbox" class="hidden">
                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                    <div data-custom-checkbox="development-and-it" class="w-full h-full justify-center items-center hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                        </svg>
                                    </div>
                                </span>
                                <span class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm text-[var(--main-font-color-80)] select-none ml-3">Development and IT</span>
                            </label><label data-trigger-checkbox="design-and-art" for="design-and-art" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                <input id="design-and-art" data-input-checkbox="design-and-art" type="checkbox" class="hidden">
                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                    <div data-custom-checkbox="design-and-art" class="w-full h-full justify-center items-center hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                        </svg>
                                    </div>
                                </span>
                                <span class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm text-[var(--main-font-color-80)] select-none ml-3">Design and art</span>
                            </label><label data-trigger-checkbox="writing-and-translation" for="writing-and-translation" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                <input id="writing-and-translation" data-input-checkbox="writing-and-translation" type="checkbox" class="hidden">
                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                    <div data-custom-checkbox="writing-and-translation" class="w-full h-full justify-center items-center hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                        </svg>
                                    </div>
                                </span>
                                <span class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm text-[var(--main-font-color-80)] select-none ml-3">Writing and translation</span>
                            </label><label data-trigger-checkbox="video-and-animation" for="video-and-animation" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                <input id="video-and-animation" data-input-checkbox="video-and-animation" type="checkbox" class="hidden">
                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                    <div data-custom-checkbox="video-and-animation" class="w-full h-full justify-center items-center hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                        </svg>
                                    </div>
                                </span>
                                <span class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm text-[var(--main-font-color-80)] select-none ml-3">Video and animation</span>
                            </label><label data-trigger-checkbox="digital-marketing" for="digital-marketing" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                <input id="digital-marketing" data-input-checkbox="digital-marketing" type="checkbox" class="hidden">
                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                    <div data-custom-checkbox="digital-marketing" class="w-full h-full justify-center items-center hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                        </svg>
                                    </div>
                                </span>
                                <span class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm text-[var(--main-font-color-80)] select-none ml-3">Digital marketing</span>
                            </label><label data-trigger-checkbox="Finance-and-accounting" for="Finance-and-accounting" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                <input id="Finance-and-accounting" data-input-checkbox="Finance-and-accounting" type="checkbox" class="hidden">
                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                    <div data-custom-checkbox="Finance-and-accounting" class="w-full h-full justify-center items-center hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                        </svg>
                                    </div>
                                </span>
                                <span class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm text-[var(--main-font-color-80)] select-none ml-3">Finance and accounting</span>
                            </label>
                        </div>
                    </label>
                    <p data-select-selected="skills" class="text-sm font-normal text-[var(--active-color-brown)] text-start mt-2">HTML, CSS, JavaScript</p>
                </span>
                <!--  -->
            </div>
            <div class="w-1/2 lg:w-1/4 h-auto px-4 box-border my-4">
                <!--  -->
                <span class="w-full h-auto relative flex flex-col justify-start items-start">
                    <label for="experience" class="w-full h-auto box-border relative">
                        <p class="text-sm font-normal text-[var(--main-font-color-80)] mb-2">Experience</p>
                        <button data-select-value="1" data-select-trigger="experience" class="w-full h-[40px] ring-1 ring-[var(--main-font-color-20)] 
                                                focus:ring-[var(--active-color-brown)] bg-[var(--bg-white-low)] flex justify-between items-center px-3 box-border
                                                hover:ring-[var(--active-color-brown-low)]">
                            <span data-select-selected="experience" class="w-max h-auto text-sm font-normal text-[var(--main-font-color-80)] truncate pointer-events-none">
                                Select experience
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--main-font-color-30)] ml-1
                                                    pointer-events-none">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19 9l-7 6l-7-6"></path>
                            </svg>
                        </button>
                        <div data-select="experience" data-show="false" class="w-full h-auto absolute top-[110%] left-0 bg-[var(--bg-white-low)] py-2 z-10
                        border border-[var(--main-font-color-20)] overflow-hidden shadow-lg invisible max-h-0">
                            <button data-select-option="experience" data-select-value="1" class="w-full min-w-max text-sm text-[var(--main-font-color-80)] 
                                                    font-normal hover:bg-[var(--main-font-color-10)] hover:text-[var(--main-font-color-90)] duration-75 ease-linear px-4 py-2 flex 
                                                    justify-start items-center">
                                Fixed
                            </button>
                            <button data-select-option="experience" data-select-value="2" class="w-full min-w-max text-sm text-[var(--main-font-color-80)] 
                                                    font-normal hover:bg-[var(--main-font-color-10)] hover:text-[var(--main-font-color-90)] duration-75 ease-linear px-4 py-2 flex 
                                                    justify-start items-center">
                                Hourly
                            </button>
                        </div>
                    </label>
                </span>
                <!--  -->
            </div>
            <div class="w-full lg:w-1/2 h-auto px-4 box-border my-4">
                <!--  -->
                <span class="w-full h-auto relative flex flex-col justify-start items-start">
                    <label for="languages" class="w-full h-auto box-border relative">
                        <p class="text-sm font-normal text-[var(--main-font-color-80)] mb-2">Languages</p>
                        <input placeholder="Select preferresd skills" data-dropdown-toggler="languages" type="text" id="languages" class="
                        w-full h-[40px] bg-[var(--bg-white-low)] border-none outline-none px-3 ring-1 ring-[var(--main-font-color-20)]
                        focus:ring-[var(--active-color-brown)] box-border text-sm font-normal text-[var(--main-font-color-80)]">
                        <div data-dropdown-menu="languages" data-show="false" class="absolute z-50 top-[110%] left-0 w-full h-auto overflow-auto flex flex-col 
                            justify-start items-start bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] px-4 py-2 box-border shadow-md invisible max-h-0">
                            <label data-trigger-checkbox="english" for="english" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                <input id="english" data-input-checkbox="english" type="checkbox" class="hidden">
                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                    <div data-custom-checkbox="english" class="w-full h-full justify-center items-center hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                        </svg>
                                    </div>
                                </span>
                                <span class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm text-[var(--main-font-color-80)] select-none ml-3">English</span>
                            </label>
                            <label data-trigger-checkbox="sinhala" for="sinhala" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                <input id="sinhala" data-input-checkbox="sinhala" type="checkbox" class="hidden">
                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                    <div data-custom-checkbox="sinhala" class="w-full h-full justify-center items-center hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                        </svg>
                                    </div>
                                </span>
                                <span class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm text-[var(--main-font-color-80)] select-none ml-3">Sinhala</span>
                            </label>
                            <label data-trigger-checkbox="french" for="french" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                <input id="french" data-input-checkbox="french" type="checkbox" class="hidden">
                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                    <div data-custom-checkbox="french" class="w-full h-full justify-center items-center hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                        </svg>
                                    </div>
                                </span>
                                <span class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm text-[var(--main-font-color-80)] select-none ml-3">French</span>
                            </label>
                            <label data-trigger-checkbox="spanish" for="spanish" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                <input id="spanish" data-input-checkbox="spanish" type="checkbox" class="hidden">
                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                    <div data-custom-checkbox="spanish" class="w-full h-full justify-center items-center hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                        </svg>
                                    </div>
                                </span>
                                <span class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm text-[var(--main-font-color-80)] select-none ml-3">Spanish</span>
                            </label>
                            <label data-trigger-checkbox="portuguese" for="portuguese" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                <input id="portuguese" data-input-checkbox="portuguese" type="checkbox" class="hidden">
                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                    <div data-custom-checkbox="portuguese" class="w-full h-full justify-center items-center hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                        </svg>
                                    </div>
                                </span>
                                <span class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm text-[var(--main-font-color-80)] select-none ml-3">Portuguese</span>
                            </label>
                            <label data-trigger-checkbox="russian" for="russian" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                <input id="russian" data-input-checkbox="russian" type="checkbox" class="hidden">
                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                    <div data-custom-checkbox="russian" class="w-full h-full justify-center items-center hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                        </svg>
                                    </div>
                                </span>
                                <span class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm text-[var(--main-font-color-80)] select-none ml-3">Russian</span>
                            </label>
                        </div>
                    </label>
                    <p data-select-selected="skills" class="text-sm font-normal text-[var(--active-color-brown)] text-start mt-2">English, Sinhala, French</p>
                </span>
                <!--  -->
            </div>
            <div class="w-full lg:w-1/2 h-auto px-4 box-border my-4">
                <!--  -->
                <span class="w-full h-auto relative flex flex-col justify-start items-start">
                    <label for="freelancers" class="w-full h-auto box-border relative">
                        <p class="text-sm font-normal text-[var(--main-font-color-80)] mb-2">Freelancers</p>
                        <button data-select-value="1" data-select-trigger="freelancers" class="w-full h-[40px] ring-1 ring-[var(--main-font-color-20)] 
                                                focus:ring-[var(--active-color-brown)] bg-[var(--bg-white-low)] flex justify-between items-center px-3 box-border
                                                hover:ring-[var(--active-color-brown-low)]">
                            <span data-select-selected="freelancers" class="w-max h-auto text-sm font-normal text-[var(--main-font-color-80)] truncate pointer-events-none">
                                Select the number of freelancers
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--main-font-color-30)] ml-1
                                                    pointer-events-none">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19 9l-7 6l-7-6"></path>
                            </svg>
                        </button>
                        <div data-select="freelancers" data-show="false" class="w-full h-auto absolute top-[110%] left-0 bg-[var(--bg-white-low)] py-2 z-10
                        border border-[var(--main-font-color-20)] overflow-hidden shadow-lg invisible max-h-0">
                            <button data-select-option="freelancers" data-select-value="1" class="w-full min-w-max text-sm text-[var(--main-font-color-80)] 
                                                    font-normal hover:bg-[var(--main-font-color-10)] hover:text-[var(--main-font-color-90)] duration-75 ease-linear px-4 py-2 flex 
                                                    justify-start items-center">
                                Fixed
                            </button>
                            <button data-select-option="freelancers" data-select-value="2" class="w-full min-w-max text-sm text-[var(--main-font-color-80)] 
                                                    font-normal hover:bg-[var(--main-font-color-10)] hover:text-[var(--main-font-color-90)] duration-75 ease-linear px-4 py-2 flex 
                                                    justify-start items-center">
                                Hourly
                            </button>
                        </div>
                    </label>
                </span>
                <!--  -->
            </div>
            <div class="w-1/2 lg:w-1/4 h-auto px-4 box-border my-4">
                <!--  -->
                <span class="w-full h-auto relative flex flex-col justify-start items-start">
                    <label for="Payment-type" class="w-full h-auto box-border relative">
                        <p class="text-sm font-normal text-[var(--main-font-color-80)] mb-2">Payment type</p>
                        <button data-select-value="1" data-select-trigger="Payment-type" class="w-full h-[40px] ring-1 ring-[var(--main-font-color-20)] 
                                                focus:ring-[var(--active-color-brown)] bg-[var(--bg-white-low)] flex justify-between items-center px-3 box-border
                                                hover:ring-[var(--active-color-brown-low)]">
                            <span data-select-selected="Payment-type" class="w-max h-auto text-sm font-normal text-[var(--main-font-color-80)] truncate pointer-events-none">
                                Select the the payment type
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--main-font-color-30)] ml-1
                                                    pointer-events-none">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19 9l-7 6l-7-6"></path>
                            </svg>
                        </button>
                        <div data-select="Payment-type" data-show="false" class="w-full h-auto absolute top-[110%] left-0 bg-[var(--bg-white-low)] py-2 z-10
                        border border-[var(--main-font-color-20)] overflow-hidden shadow-lg invisible max-h-0">
                            <button data-select-option="Payment-type" data-select-value="1" class="w-full min-w-max text-sm text-[var(--main-font-color-80)] 
                                                    font-normal hover:bg-[var(--main-font-color-10)] hover:text-[var(--main-font-color-90)] duration-75 ease-linear px-4 py-2 flex 
                                                    justify-start items-center">
                                Fixed
                            </button>
                            <button data-select-option="Payment-type" data-select-value="2" class="w-full min-w-max text-sm text-[var(--main-font-color-80)] 
                                                    font-normal hover:bg-[var(--main-font-color-10)] hover:text-[var(--main-font-color-90)] duration-75 ease-linear px-4 py-2 flex 
                                                    justify-start items-center">
                                Hourly
                            </button>
                        </div>
                    </label>
                </span>
                <!--  -->
            </div>
            <div class="w-1/2 lg:w-1/4 h-auto px-4 box-border my-4">
                <span class="w-full h-auto relative flex flex-col justify-start items-start">
                    <label for="budget" class="w-full h-auto box-border relative">
                        <p class="text-sm font-normal text-[var(--main-font-color-80)] mb-2">Budget</p>
                        <span class="h-[40px] w-auto bg-[--bg-white-low] border-r border-[var(--main-font-color-20)] absolute bottom-0 left-0 flex justify-center
                            items-center text-[var(--main-font-color-30)]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-auto h-[40%] mx-2">
                                <path fill="currentColor" d="M15.999 8.5h2c0-2.837-2.755-4.131-5-4.429V2h-2v2.071c-2.245.298-5 1.592-5 4.429c0 2.706 2.666 4.113 5 4.43v4.97c-1.448-.251-3-1.024-3-2.4h-2c0 2.589 2.425 4.119 5 4.436V22h2v-2.07c2.245-.298 5-1.593 5-4.43s-2.755-4.131-5-4.429V6.1c1.33.239 3 .941 3 2.4m-8 0c0-1.459 1.67-2.161 3-2.4v4.799c-1.371-.253-3-1.002-3-2.399m8 7c0 1.459-1.67 2.161-3 2.4v-4.8c1.33.239 3 .941 3 2.4"></path>
                            </svg>
                        </span>
                        <input placeholder="Select preferresd skills" data-dropdown-toggler="languages" type="text" id="budget" class="
                        w-full h-[40px] bg-[var(--bg-white-low)] border-none outline-none pl-10 pr-3 ring-1 ring-[var(--main-font-color-20)]
                        focus:ring-[var(--active-color-brown)] box-border text-sm font-normal text-[var(--main-font-color-80)]">
                    </label>
                </span>
            </div>
            <div class="w-full h-auto px-4 box-border my-4">
                <span class="w-full h-auto relative flex flex-col justify-start items-start">
                    <label for="description" class="w-full h-auto box-border relative">
                        <p class="text-sm font-normal text-[var(--main-font-color-80)] mb-2">Description</p>
                        <textarea rows="7" id="description" class="w-full h-auto bg-[var(--bg-white-low)] border-none outline-none px-3 ring-1 
                        ring-[var(--main-font-color-20)] focus:ring-[var(--active-color-brown)] box-border text-sm font-normal 
                        text-[var(--main-font-color-80)]"></textarea>
                    </label>
                </span>
            </div>
            <div class="w-full h-auto px-4 box-border my-4">
                <span class="w-full h-auto relative flex flex-col justify-start items-start">
                    <label for="attachments" class="w-full h-auto box-border relative flex flex-col justify-start items-start">
                        <p class="text-sm font-normal text-[var(--main-font-color-80)] mb-2">Attachments</p>
                        <input type="file" id="attachments" class="hidden"></input>
                        <div class="w-full h-auto flex justify-start items-start">
                            <div class="w-36 md:w-48 aspect-square bg-[var(--bg-white-low)] border-2 border-dotted border-[var(--main-font-color-20)]
                            text-[var(--main-font-color-30)] flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-16 h-auto">
                                    <path fill="currentColor" d="M11.5 15.577v-8.65l-2.33 2.33l-.708-.718L12 5l3.539 3.539l-.708.719L12.5 6.927v8.65zM5 19v-4.038h1V18h12v-3.038h1V19z" />
                                </svg>
                            </div>
                            <div class="flex-1 h-auto flex justify-start items-center flex-wrap ml-2">
                                <div class="w-max h-auto flex justify-center items-center relative text-[var(--main-font-color-80)]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024" class="h-auto w-11 md:w-14 px-2 py-1">
                                        <path fill="currentColor" d="M854.6 288.7c6 6 9.4 14.1 9.4 22.6V928c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h424.7c8.5 0 16.7 3.4 22.7 9.4zM790.2 326L602 137.8V326z"></path>
                                    </svg>
                                    <button class="absolute top-0 right-0 w-max h-auto text-[var(--bg-white-low)] bg-[var(--active-color-brown-low)] hover:bg-[var(--active-color-brown)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-5 md:w-6 px-1 py-1 h-auto">
                                            <path fill="currentColor" d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="w-max h-auto flex justify-center items-center relative text-[var(--main-font-color-80)]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024" class="h-auto w-11 md:w-14 px-2 py-1">
                                        <path fill="currentColor" d="M854.6 288.7c6 6 9.4 14.1 9.4 22.6V928c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h424.7c8.5 0 16.7 3.4 22.7 9.4zM790.2 326L602 137.8V326z"></path>
                                    </svg>
                                    <button class="absolute top-0 right-0 w-max h-auto text-[var(--bg-white-low)] bg-[var(--active-color-brown-low)] hover:bg-[var(--active-color-brown)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-5 md:w-6 px-1 py-1 h-auto">
                                            <path fill="currentColor" d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </label>
                </span>
            </div>
            <div class="w-full h-auto px-4 box-border my-12">
                <span class="w-full h-auto relative flex flex-col justify-start items-start">
                    <button class="w-max h-auto flex justify-center items-center text-sm font-medium text-[var(--bg-white-low)] bg-[var(--active-color-brown-low)]
                    hover:bg-[var(--active-color-brown)] active:scale-95 border border-[var(--main-font-color-20)] px-4 py-2 duration-75 ease-linear">
                        Post job
                    </button>
                </span>
            </div>
        </section>
    </main>
    <?php
    require __DIR__ . "/../../shared/footer.php";
    ?>
</body>

</html>