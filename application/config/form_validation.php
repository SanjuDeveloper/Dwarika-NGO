<?php
$config=[

       'add_event'=>[
                         [
                          'field' => 'event_title',
                          'label' => 'Event Title',
                          'rules' => 'required'
                          ],
                          [
                          'field' => 'event_description',
                          'label' => 'Event Description',
                          'rules' => 'required'
                          ],
						  [
                          'field' => 'location',
                          'label' => 'location',
                          'rules' => 'required'
                          ],
						  [
                          'field' => 'event_date',
                          'label' => 'Event Date',
                          'rules' => 'required'
                          ],
						  [
                          'field' => 'event_time',
                          'label' => 'Event Time',
                          'rules' => 'required'
                          ],
						  [
                          'field' => 'event_type',
                          'label' => 'Event Type',
                          'rules' => 'required'
                          ]
                     ],

					 'login_gmail'=>[
                         [
                          'field' => 'name',
                          'label' => 'User Name',
                          'rules' => 'required'
                          ],
                          [
                          'field' => 'password',
                          'label' => 'Password',
                          'rules' => 'required'
                          ]
                     ],
      

                     

];


?>