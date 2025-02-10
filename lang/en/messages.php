<?php

return [
    'name' => [
        'required' => 'The Name and Surname field is required.',
        'max' => 'The Name and Surname field may not be greater than 255 characters.',
    ],
    'phone' => [
        'required' => 'The Phone field is required.',
        'regex' => 'Please enter a valid phone number.',
        'min' => 'The phone number must be at least 10 characters.',
    ],
    'email' => [
        'required' => 'The Email field is required.',
        'email' => 'Please enter a valid email address.',
    ],
    'product_code' => [
        'required' => 'The Product Code is required.',
        'exists' => 'Invalid product code.',
    ],
    'note' => [
        'max' => 'The Note field may not be greater than 1000 characters.',
    ],
    'approve_check' => [
        'required' => 'You must accept the information text.',
        'accepted' => 'You must accept the information text.',
    ],
    'mail_marketing'=>[
        'success'=>'Your Email Address Has Been Successfully Registered to Our Newsletter!',
        'email_validation'=>'Email Address Already Registered!'
    ],
    'product_form' =>[
        'success'=>'Your price request has been successfully submitted. We will get back to you as soon as possible at the contact addresses you provided!',
        'isset_validation'=>'An unexpected error occurred. Please refresh the page and try again.',
    ],



];
