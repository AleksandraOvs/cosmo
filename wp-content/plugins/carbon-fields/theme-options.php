<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



Container::make('theme_options', 'Контакты')
    
        ->set_page_menu_position( 2 )
        ->set_icon ('dashicons-admin-generic')
        ->add_tab(__('Контакты'), array (
            Field::make('image', 'crb_working_icon', 'Иконка режим работы')
            ->set_width(50),
            Field::make('text', 'crb_working', 'Режим работы')
            ->set_width(50),
            Field::make('image', 'crb_address_icon', 'Иконка адреса')
            ->set_width(50),
            Field::make('text', 'crb_address', 'Адрес')
            ->set_width(50),

            Field::make('image', 'tel_contact_link_icon', 'Иконка для номера телефона')

            ->set_width(33),
    
    
            Field::make('text', 'tel_contact_link', 'Ссылка на телефон')

            ->set_width(33)
    
            ->help_text('ссылка на телефон вида +700000000, whatsApp - https://wa.me/+7900000000'),
    
            Field::make('text', 'tel_contact', 'Номер телефона')
    
            ->set_width(33)
    
            ->help_text('Номер телефона, отображающийся на сайте'),

            Field::make('complex', 'contacts', 'Ссылки на мессенджеры')
            ->add_fields( array(

                Field::make('text', 'contact_name', 'Название')

                    ->set_width(33),

                Field::make('text', 'contact_link', 'Ссылка на контакт')

                    ->set_width(33),

                Field::make('image', 'contact_image', 'Иконка контакта')

                    ->set_width(33),
            ))
        ))


           

        ->add_tab(__('Главная страница'), array (
          
            Field::make('text', 'crb_hero_button_price', 'Ссылка на прайс'),

            Field::make('complex', 'crb_our_prods', 'Слайдер "Изделия из нашего металла"')
            ->add_fields( array (
                Field::make('image', 'crb_our_prods_img', 'Изображение для слайда')      
            ))
            ->set_width(50),
            
            Field::make('rich_text', 'crb_our_prods_text', 'Текст Изделия из нашего металла')
            ->set_width(50),
            Field::make('image', 'crb_dialog_img', 'Фото для блока "Мы открыты диалогу"')
            ->set_width(50),
            Field::make('rich_text', 'crb_dialog_text', 'Текст для блока "Мы открыты диалогу"')
            ->set_width(50),
            
            Field::make('complex', 'crb_dialog_buttons', 'Кнопки мессенджеров в блоке "Мы открыты диалогу"')
            ->add_fields( array (
                Field::make('image', 'crb_dialog_button_img', 'Иконка мессенджера')
                ->set_width(30),
                Field::make('text', 'crb_dialog_button_link', 'Ссылка на мессенджер')
                ->set_width(30),
                Field::make('text', 'crb_dialog_button_link_text', 'Текст кнопки')
                ->set_width(30),      
            ))
            
            ));