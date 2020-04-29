<?php
    require_once($root. 'private/Models/Events.php');


    function displayEvents($eventList) {
        $request = new Events();
        $events = array_reverse($request->{$eventList});
        $html = '';
        if (empty($events)) {
            $html .= 'No Upcoming Events';
        } else {
            foreach ($events as $event) {
                $html .= '<div class="event-body">';
                    $html .= '<div class="event-item">';
                        $html .= '<h1 class="event-date">'. date("d F Y", strtotime($event->Date)). '</h1>';
                        $html .= '<h2 class="event-name">'. $event->Name. '</h2>';
                        $html .= '<div class="event-gallery">';
                            foreach ($event->Images as $image) {
                                $html .= '<div class="gallery-cell">';
                                    $html .= '<img src="'. $image->display->path. '" alt="Event Image">';
                                $html .= '</div>';
                            }
                        $html .= '</div>';
                        $html .= '<p>'. $event->Description. '</p>';
                    $html .= '</div>';
                $html .= '</div>';
            }
        }
        return $html;
    }
