<!-- milestone -->
<div data-milestone="id" class="w-full h-auto flex justify-start items-center">
    <button class="w-max h-auto flex justify-center items-center text-[var(--active-color-brown-low)] hover:text-[var(--active-color-brown)]
                        duration-75 ease-linear px-2 py-3 mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-8 h-auto">
            <path fill="currentColor" d="M9 17h2V8H9zm4 0h2V8h-2zm-8 4V6H4V4h5V3h6v1h5v2h-1v15z" />
        </svg>
    </button>
    <div class="w-full h-auto flex flex-col justify-start items-start border-l border-[var(--main-font-color-20)] pl-4">
        <span class="w-full h-auto flex justify-start items-start relative mb-3">
            <input id="milestone-title" placeholder="Milestone title" type="text" class="w-full h-[35px] bg-[var(--bg-white-low)] border-none 
                                ring-1 ring-[var(--main-font-color-20)] hover:ring-[var(--main-font-color-30)] px-3 focus:ring-[var(--active-color-brown)] text-sm 
                                text-[var(--main-font-color-80)] font-normal">
        </span>
        <!-- details main -->
        <div class="w-full h-auto flex flex-wrap justify-start items-start">
            <!-- detail left -->
            <div class="w-max h-auto flex flex-col justify-start items-start mr-8 my-2">
                <p class="text-sm text-[var(--main-font-color-80)] font-normal mb-1">Duration</p>
                <div>
                    <input type="text" placeholder="Months" class="w-20 h-[35px] text-sm text-[var(--main-font-color-80)] border-none outline-none ring-1
                                        ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)] mr-2">
                    <input type="text" placeholder="Days" class="w-20 h-[35px] text-sm text-[var(--main-font-color-80)] border-none outline-none ring-1
                                        ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)]">
                </div>
            </div>
            <!-- detail left -->
            <!-- detail right -->
            <div class="w-max h-auto flex flex-col justify-start items-start my-2">
                <p class="text-sm text-[var(--main-font-color-80)] font-normal mb-1">Charges</p>
                <div class="flex justify-center items-start">
                    <!-- <input type="text" placeholder="Months" class="w-20 h-[35px] text-sm text-[var(--main-font-color-80)] border-none outline-none ring-1
                                        ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)] mr-3"> -->
                    <div class="w-24 h-[35px] mr-3">
                        <!-- select -->
                        <span class="w-full h-full relative flex flex-col justify-start items-center">
                            <button data-select-value="1" data-select-trigger="charges" class="w-full h-full ring-1 ring-[var(--main-font-color-20)] 
                                                focus:ring-[var(--active-color-brown)] bg-[var(--bg-white-low)] flex justify-between items-center px-3 box-border
                                                hover:ring-[var(--active-color-brown-low)]">
                                <span data-select-selected="charges" class="w-full h-auto text-sm font-normal text-[var(--main-font-color-80)] truncate">Fixed</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--main-font-color-30)] ml-1">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19 9l-7 6l-7-6"></path>
                                </svg>
                            </button>
                            <div data-select="charges" data-show="false" class="w-full h-auto absolute top-[110%] left-0 bg-[var(--bg-white-low)] py-2 z-10 border 
                                                border-[var(--main-font-color-20)] overflow-hidden  max-h-0 invisible shadow-lg">
                                <button data-select-option="charges" data-select-value="1" class="w-full min-w-max text-sm text-[var(--main-font-color-80)] 
                                                    font-normal hover:bg-[var(--main-font-color-10)] hover:text-[var(--main-font-color-90)] duration-75 ease-linear px-4 py-2 flex 
                                                    justify-start items-center">
                                    Fixed
                                </button>
                                <button data-select-option="charges" data-select-value="2" class="w-full min-w-max text-sm text-[var(--main-font-color-80)] 
                                                    font-normal hover:bg-[var(--main-font-color-10)] hover:text-[var(--main-font-color-90)] duration-75 ease-linear px-4 py-2 flex 
                                                    justify-start items-center">
                                    Hourly
                                </button>
                            </div>
                        </span>
                        <!-- select -->
                    </div>
                    <label for="price-1" class="w-max h-auto relative">
                        <span class="h-full w-max flex justify-center items-center overflow-hidden absolute top-0 left-0 
                                            text-[var(--main-font-color-30)] border-r border-r-[var(--main-font-color-20)]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 mx-1 h-auto">
                                <path fill="currentColor" d="M15.999 8.5h2c0-2.837-2.755-4.131-5-4.429V2h-2v2.071c-2.245.298-5 1.592-5 4.429c0 2.706 2.666 4.113 5 4.43v4.97c-1.448-.251-3-1.024-3-2.4h-2c0 2.589 2.425 4.119 5 4.436V22h2v-2.07c2.245-.298 5-1.593 5-4.43s-2.755-4.131-5-4.429V6.1c1.33.239 3 .941 3 2.4m-8 0c0-1.459 1.67-2.161 3-2.4v4.799c-1.371-.253-3-1.002-3-2.399m8 7c0 1.459-1.67 2.161-3 2.4v-4.8c1.33.239 3 .941 3 2.4" />
                            </svg>
                        </span>
                        <input id="price-1" type="text" placeholder="Price" class="w-24 h-[35px] text-sm text-[var(--main-font-color-80)] border-none outline-none ring-1
                                            ring-[var(--main-font-color-20)] px-3 pl-7 focus:ring-[var(--active-color-brown)]">
                    </label>
                </div>
            </div>
            <!-- detail right -->
        </div>
        <!-- details main -->
    </div>
</div>
<!-- milestone -->