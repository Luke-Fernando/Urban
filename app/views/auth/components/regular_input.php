<label for="<?php echo $input_id; ?>" class="w-full 
<?php if (!$full_width) {
    echo ("md:w-1/2");
} ?> 
h-auto flex flex-col justify-start items-start px-2 my-2">
    <div class="w-max h-auto flex justify-center items-center mb-3">
        <p class="text-sm font-normal text-[var(--main-font-color-90)]"><?php echo $input_name; ?></p>
    </div>
    <input id="<?php echo $input_id; ?>" type="<?php echo $input_type; ?>" class="w-full h-[40px] border-none text-sm bg-[var(--bg-white-low)] ring-1 
                    ring-[var(--main-font-color-20)] focus:ring-[var(--active-color-brown)]">
</label>