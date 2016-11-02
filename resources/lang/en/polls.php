<?php

return [

/*------------------------------------------------------------
*                  ADMIN - POLL
*------------------------------------------------------------*/
    'title' => 'Poll',
    'head' => [
        'create' => 'CREATE A POLL',
        'index' => 'LIST ALL POLLS',
        'edit' => 'EDIT A POLL',
    ],
    'label' => [
        'step_1' => 'Poll Information',
        'full_name' => 'Full-name*',
        'email' => 'E-Mail Address*',
        'chatwork' => 'Chatwork ID',
        'title' => 'Title*',
        'description' => 'Description',
        'location' => 'Location',
        'type' => 'Type*',
        'status' => 'Status*',
        'single_choice' => 'Single choice',
        'multiple_choice' => 'Multiple choice',
        'opening' => 'Opening',
        'closed' => 'Closed',
        'poll_opening' => '<span class="label label-success">opening</span>',
        'poll_closed' => '<span class="label label-danger">closed</span>',
        'step_2' => 'Poll Option',
        'option' => 'Option',
        'option_image' => 'Image',
        'step_3' => 'Poll Setting',
        'setting' => [
            'required_email' => 'Required email to voting',
            'add_answer' => 'Allow voters to add new answers',
            'hide_result' => 'Hide voting result',
            'custom_link' => 'Optimize poll link',
            'set_limit' => 'Set voting limit',
            'set_password' => 'Set password',
            'on' => 'ON',
            'off' => 'OFF',
        ],
        'step_4' => 'Participant',
        'invite' => 'Invite*',
        'invite_all' => 'Everyone with a link can participate',
        'invite_people' => 'Only invited people can participate',
        'search' => 'Search poll information...',
        'search_all' => 'All',
        'add_invite' => 'If you want add a participant, please enter email below...',
    ],
    'label_for' => [
        'full_name' => 'name',
        'email' => 'email',
        'chatwork' => 'chatwork',
        'title' => 'title',
        'description' => 'description',
        'location' => 'location',
        'type' => 'type',
        'status' => 'status',
        'opening' => 'opening',
        'closed' => 'closed',
        'option' => 'option',
        'option_image' => 'image',
        'setting' => [
            'required_email' => 'enter_email',
            'add_answer' => 'add_answer',
            'hide_result' => 'hide_result',
            'custom_link' => 'custom_link',
            'set_limit' => 'enter_limit',
            'set_password' => 'enter_password',
            'on' => 'turn_on',
            'off' => 'turn_off',
        ],
        'single_choice' => 'single',
        'multiple_choice' => 'multiple',
        'invite' => 'invite',
        'invite_all' => 'all',
        'invite_people' => 'people',
    ],
    'placeholder' => [
        'full_name' => 'Enter your name... ',
        'email' => 'Enter your email address... ',
        'chatwork' => 'Enter your chatwork id... ',
        'title' => 'Enter poll title... ',
        'description' => 'Enter description title... ',
        'location' => 'Enter a location... ',
        'number_add' => 'Number...',
        'number_limit' => 'Number limit...',
        'password_poll' => 'Enter password of poll...',
        'option' => 'Enter option of poll...',
        'email_participant' => 'Enter email of participant...',
        'comment' => 'Enter a comment...',
        'enter_name' => 'Enter your name...',
    ],
    'button' => [
        'search_poll' => 'SEARCH NOW',
        'reset_search' => 'Reset result',
        'create_poll' => 'CREATE POLL',
        'change_poll_infor' => 'CHANGE INFORMATION',
        'change_poll_option' => 'CHANGE OPTION',
        'change_poll_setting' => 'CHANGE SETTING',
        'back' => 'BACK LIST POLLS',
        'remove' => 'Remove',
    ],
    'message' => [
        'create_success' => 'Create poll SUCCESS',
        'create_fail' => 'Create poll FAIL',
        'upload_image_fail' => 'Can\'t upload image of option',
        'send_mail_fail' => 'Can\'t send mail to invite other people.',
        'confirm_delete' => 'Are you sure you want to delete this poll?',
        'link_exists' => 'Link exist in system. Please enter a new link',
        'link_valid' => 'Link valid. You can use this link',
        'submit_form' => 'Good job!\', \'Saving...!\', \'success',
        'not_found_polls' => 'Can\'t found poll lists in system',
        'update_poll_info_success' => 'Update information of poll SUCCESS',
        'update_poll_info_fail' => 'Update information of poll FAIL',
        'update_option_success' => 'Update option SUCCESS',
        'update_option_fail' => 'Update option FAIL',
        'update_setting_success' => 'Update setting of poll SUCCESS',
        'update_setting_fail' => 'Update setting of poll FAIL',
        'delete_poll_fail' => 'Delete poll FAIL',
        'delete_poll_success' => 'Delete poll SUCCESS',
    ],
    'validation' => [
        'name' => [
            'required' => 'Please enter your name!',
            'max' => 'Name is maximum' . config('settings.length_poll.name') . 'characters',
        ],
        'email' => [
            'required' => 'Please enter your email!',
            'max' => 'Email is maximum' . config('settings.length_poll.email') . 'characters',
            'email' => 'Email invalid!'
        ],
        'title' => [
            'required' => 'Please enter poll title!',
            'max' => 'Title is maximum' . config('settings.length_poll.title') . 'characters',
        ],
        'description' => [
            'max' => 'Ddescription is maximum' . config('settings.length_poll.description') . 'characters',
        ],
        'type' => [
            'required' => 'Please choose type of poll',
        ],
        'option' => [
            'option' => 'Please enter one option of poll',
        ],
        'email_poll' => [
            'email_poll' => 'Please enter one email of participant',
        ],
        'custom_link' => [
            'setting' => 'Please enter link of poll',
        ],
        'set_limit' => [
            'setting' => 'Please enter number vote of poll',
        ],
        'set_password' => [
            'setting' => 'Please enter password of poll',
        ],
    ],
    'table' => [
        'thead' => [
            'STT' => 'No.',
            'creator' => 'Creator info',
            'title' => 'Title',
            'status' => 'Status',
            'type' => 'Type',
        ],
        'tbody' => [
            'name' => 'Name: ',
            'email' => 'Email: ',
        ],
    ],
    'tooltip' => [
        'edit' => 'Edit this poll',
        'delete' => 'Delete this poll',
        'show' => 'View detail this poll',
        'open' => 'Open this poll',
        'close' => 'Close this poll',
    ],
    'nav_tab_edit' => [
        'infor' => 'INFORMATION',
        'option' => 'OPTION',
        'setting' => 'SETTING',
    ],

/*------------------------------------------------------------
*                  USER - POLL
*------------------------------------------------------------*/
    'poll' => 'Poll',
    'vote' => 'Vote',
    'vote_page' => 'Vote page',
    'close' => 'Close',
    'name' => 'Name',
    'email' => 'Email',
    'no' => 'No',
    'poll_history' => 'Poll History',
    'show_vote_details' => 'Show vote details',
    'next' => 'Next',
    'optional' => 'optional',
    'one_answer' => 'One answer',
    'multiple_answer' => 'Multiple answers',

    'poll_details' => 'Poll Details',
    'poll_initiate' => 'Poll initiated by',
    'where' => 'Where',
    'vote' => 'Vote',
    'comments' => 'Comments',
    'add_comment' => 'Add a comment',
    'show_comments' => 'Show comments',
    'hide' => 'Hide',
    'save_comment' => 'Save Comment',
    'view_history' => 'Views History',
    'delete_all_participants' => 'Delete all participants',
    'list_polls' => 'List Polls',
    'polls_initiated' => 'Polls initiated',
    'subject' => 'Subject',
    'participants' => 'Participants',
    'latest_activity' => 'Latest activity',
    'polls_participated_in' => 'Polls participated in',
    'polls_closed' => 'Polls closed',
    'list_all_polls' => 'List all Polls',
    'administer' => 'Administer',
    'close_poll' => 'Close this poll',
    'reopen_poll' => 'Reopen',
    'confirm_close_poll' => 'Are you want to close this poll?',
    'close_poll_successfully' => 'Poll closed successfully',
    'close_poll_fail' => 'Poll closed fail',
    'reopen_poll_fail' => 'Reopen poll fail',
    'reopen_poll_successfully' => 'Reopen poll sucessfully',
    'poll_not_found' => 'Poll not found',
    'message_name' => 'Please provide your name to vote',
    'message_email' => 'Please provide your email to vote',
    'message_validate_email' => 'Please provide a valid email',
    'voted_poll' => 'You voted this poll, if you want to edit vote bofore, you need to vote one more time',
    'message_poll_limit' => 'Sorry, You can not vote this poll, poll reached limit',
    'message_poll_closed' => 'Sorry, Poll closed. You can not view and vote this poll',
    'comment_name' => 'Please enter your name in the input field',
    'comment_content' => 'Please enter a comment in the text area',
    'confirmRemove' => 'Are you sure?',
    'load_latest_polls' => 'List latest polls only',
    'edit_link_admin' => 'Edit link Admin',
    'edit_link_user' => 'Edit link User',
    'participation_link' => 'Participation link',
    'administer_link' => 'Administer link',
    'administration' => 'Administration',
    'vote_empty' => 'Vote empty, You can vote this poll',
    'confirm_delete_vote' => 'Are you sure delete this vote',
    'email_exist' => 'Email exist, You need to login to vote or chose another email',
    'remove_vote_successfully' => 'You deleted vote successfully',
    'vote_successfully' => 'You voted this poll successfully',
    'export_pdf' => 'Export poll to PDF',
    'export_excel' => 'Export poll to Excel',
    'link_exist' => 'Link exist',
    'link_invalid' => 'Link invalid',
    'edit_link_successfully' => 'Edit successfully',
    'delete_all_participants_successfully' => 'Delete all participants successfully',
];
