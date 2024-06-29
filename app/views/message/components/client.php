<!-- client -->
<div class="w-full box-border px-2 py-3 flex justify-between items-start relative cursor-pointer
                hover:bg-[var(--main-font-color-10)] duration-75 ease-linear hover:before:bg-[var(--active-color-brown)]
                before:content-[''] before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-[1px] before:h-[80%] before:duration-75 before:ease-linear 
                before:bg-[var(--main-font-color-20)]">
    <div class="w-10 aspect-square flex justify-center items-center overflow-hidden relative
                    after:content-[''] after:absolute after:top-0 after:left-0 after:w-2 after:aspect-square after:bg-[var(--active-color-brown)] after:rounded-full">
        <img src="/assets/images/users/client.png" alt="client profile pictire" class="min-w-full min-h-full object-cover">
    </div>
    <div class="w-full h-auto flex flex-col justify-start items-start pl-5 box-border">
        <p class="text-base font-medium text-[var(--main-font-color-90)]"><?php echo $data["client_name"]; ?></p>
        <p class="text-sm font-normal text-[var(--main-font-color-80)]"><?php echo $data["client_username"]; ?></p>
    </div>
</div>
<!-- client -->