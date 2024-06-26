<div data-hover="false" data-nav-dropdown-trigger="<?php echo $data['link_id']; ?>" class="w-full md:w-max font-normal md:font-medium text-[var(--main-font-color-90)] 
                hover:text-[var(--active-color-brown)] text-base md:text-sm md:mx-4 my-1 md:my-0 flex flex-col justify-start 
                items-start md:justify-center md:items-center relative cursor-pointer">
    <div class="w-max flex justify-center items-center duration-75 ease-linear relative">
        <?php
        echo $data['icon'];
        ?>
        <span class="md:hidden text-inherit"><?php echo $data['link_title']; ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-inherit md:hidden">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m7 10l5 5l5-5" />
        </svg>
    </div>
    <!-- dropdown container -->
    <div data-nav-dropdown-menu="<?php echo $data['link_id']; ?>" data-show="false" data-indie="false" class="w-full h-auto overflow-visible static md:absolute z-40 top-full left-0 
    duration-75 ease-linear invisible max-h-0">
        <!-- arrow -->
        <div class="w-max h-auto absolute z-40 top-full left-1/2 -translate-x-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="hidden md:block w-5 h-auto text-[var(--bg-white-low)] 
                        stroke-[var(--main-font-color-30)] stroke-1">
                <path fill="currentColor" d="M3 19h18a1.002 1.002 0 0 0 .823-1.569l-9-13c-.373-.539-1.271-.539-1.645 0l-9 13A.999.999 0 0 0 3 19" />
            </svg>
        </div>
        <!-- arrow -->
        <!-- dropdown -->
        <div class="overflow-hidden max-h-[2500px] md:absolute md:top-full md:right-0 
    w-full md:w-max h-auto z-auto md:z-[999] py-1 md:py-0 md:pt-5 md:shadow-md">
            <div class="w-full md:w-max h-auto bg-[var(--bg-white-low)] border-l md:border border-[var(--main-font-color-20)] flex flex-col justify-start 
        items-start md:min-w-36 box-border md:p-0 md:py-3">
                <?php
                foreach ($data['sub_links'] as $link) {
                ?>
                    <a href="<?php echo $link['link']; ?>" class="w-full h-auto flex justify-start items-center font-normal md:font-medium text-[var(--main-font-color-80)] 
                            hover:text-[var(--main-font-color-90)] hover:bg-[var(--main-font-color-10)] ease-linear duration-75 text-base md:text-sm py-2 px-5">
                        <?php echo $link['title']; ?>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
        <!-- dropdown -->
    </div>
    <!-- dropdown container -->
</div>