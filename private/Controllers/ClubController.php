<?php
    require_once($root. 'private/Models/Management.php');
    require_once($root. 'private/Models/Squads.php');
    require_once($root. 'private/Models/Players.php');
    require_once($root. 'private/Models/PersonalSponsors.php');
    require_once($root. 'private/Models/ClubHistory.php');


    function displayManagement() {
        $request = new Management();
        $management = $request->data;
        $html ='';
        foreach ($management->entries as $manager) {
            $html .= '<div class="gallery-cell2">';
                $html .= '<div class="pentagon2"><img loading="lazy" src="'. $manager->Image->path. '" alt="'. $manager->Name. '"></div>';
                $html .= '<h1>'. $manager->Name. '</h1>';
                $html .= '<h5>'. $manager->Job. '</h5>';
            $html .= '</div>';
        }
        return $html;
    }


    function displaySquad($squad) {
        $request1 = new Squads();
        $players = $request1->getSquad($squad);
        $html = '';
        if (empty($players)) {
            $html .= '<div class="player">';
                $html .= 'No content currently Available';
			$html .= '</div>';
        } else {
            $request2 = new Players();
            $request3 = new PersonalSponsors();                    
            foreach ($players as $player) {
                $playerDetails = $request2->getPlayer($player->display);
                $html .= '<div class="player">';
                    $html .= '<div class="player-info">';
				        $html .= '<div class="pentagon2"><img loading="lazy" src="'. $playerDetails->Image->path. '" alt="'. $playerDetails->Name. ' Image"></div>';
						$html .= '<h1>'. $playerDetails->Name. '</h1>';
					    $html .= '<h5>'. $playerDetails->Age. ' Years Old</h5>';
					    $html .= '<h5>'. $playerDetails->Position. '</h5>';
						$html .= '<div class="textSep"></div>';
			        $html .= '</div>';
                    $html .= '<div class="player-bio">';
						$html .= '<div class="bioText">'. $playerDetails->Bio. '</div>';
						$html .= '<div class="show-more">Read Bio</div>';
                        $html .= '<div class="playerSponsor">';
                            $html .= '<h5 class="psTitle">Sponsors:</h5>';
                            foreach ($playerDetails->Sponsor as $sponsor) {
                                $url = $request3->getURL($sponsor->display);
                                if ($url == "") {
                                    $html .= '<h5 class="psDetail">'. $sponsor->display .'</h5>';
                                } else {
                                    $html .= '<a href="'. $url. '"><h5 class="psDetail">'. $sponsor->display .'</h5></a>';
                                }
                            }
                        $html .= '</div>';
                    $html .= '</div>';
				$html .= '</div>';
            }
        }
        return $html;
    }


    function displayHistory() {
        $request = new ClubHistory();
        return $request->data->Information;
    }
?>
