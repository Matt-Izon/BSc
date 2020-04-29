<?php
    require_once($root. 'private/Models/Sponsors.php');
    require_once($root. 'private/Models/Policies.php');


    function displaySponsors() {
        $request = new Sponsors();
		$sponsors = $request->data;
        $html = '';
        foreach ($sponsors->entries as $sponsor) {
            $html .= '<a href="'. $sponsor->URL. '"><img src="'. $sponsor->Image->path. '" alt="'. $sponsor->Name. ' logo"></a>';
		}
        return $html;
    }


    function displayPolicies() {
        $request = new Policies();
        $policies = $request->data;
        $html = '';
        foreach ($policies as $name => $policy) {
            $html .= '<li><a href="/public/policies.php?name='. $name. '">'. $name. '</a></li>';
        }
        return $html;
    }
