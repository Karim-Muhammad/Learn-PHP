if your file is PHP code only, so you not needed to close tag with ?>

just <?php

why?
because after ?> if there is new lines of spaces
it may be occur some issue in something called 'output Buffer'

in general don't close php tag, if it is just PHP code

like in file.php

<!-- Short Tag -->
<?="Echo with short-tag"> but maybe this feature is disabled
so you should enable it in configuration file, but it is not recommended to use it

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `photo`, `created_at`) VALUES (NULL, 'Omar', 'omarmuh@gmail.com', 'asdkajsdkljaksldj', '12345678901', 'img1.jpg', current_timestamp());

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `photo`, `created_at`) VALUES (NULL, 'Omar Muhammad', 'omar_muhammad28@gmail.com', 'asdkajsdkljaksldj', '13345678901', 'img2.jpg', current_timestamp());

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `photo`, `created_at`) VALUES (NULL, 'Murad pik', 'murad982@gmail.com', 'asdkajsdkljaksldj', '14345678901', 'img3.jpg', current_timestamp());

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `photo`, `created_at`) VALUES (NULL, 'Saeed Ali', 'Saeedalisael@gmail.com', 'asdkajsdkljaksldj', '15345678901', 'img4.jpg', current_timestamp());


INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `photo`, `created_at`) VALUES (NULL, 'Ahmed Ali', 'ahmedali@gmail.com', 'asdkajsdkljaksldj', '16345678901', 'img5.jpg', current_timestamp());

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `photo`, `created_at`) VALUES (NULL, 'OmniaAli', 'omniaali290@gmail.com', 'asdkajsdkljaksldj', '17345678901', 'img6.jpg', current_timestamp());
