<?php
    require_once($root. 'private/Models/Fixtures.php');
    require_once($root. 'private/Models/Events.php');

    function displayFixtures() {
        $request = new Fixtures();
        $fixtures = $request->data;
        $html = '';
        foreach ($fixtures->entries as $fixture) {
            $html .= '<div class="gallery-cell">';
            $html .= '<h4>'. $fixture->Date. '</h4>';
            if ($fixture->Completed) {
                $html .= '<h2>'. $fixture->ScoreHome. '  -  '. $fixture->ScoreAway. '</h2>';
            } else {
                $html .= '<h2>'. $fixture->Time. '</h2>';
            }
            $html .= '<h4>'. $fixture->Competition->display. '</h4>';
            $html .= '<h3>'. $fixture->HomeTeam->display. ' vs '. $fixture->AwayTeam->display. '</h3>';
            $html .= '</div>';
        }
    return $html;
    }

    function displayHighlight() {
        $request = new Events();
        $event = $request->getHighlight();
        $html = '';
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
        return $html;
    }
?>
