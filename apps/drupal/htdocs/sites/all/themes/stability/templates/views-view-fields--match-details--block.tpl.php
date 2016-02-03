<?php
/*

AVAILABLE FIELDS:

[title] == Content: Title
[field_match_team_1] == Content: Match Team 1
[field_match_team_1_score] == Content: Match Team 1 Score
[field_match_team_2] == Content: Match Team 2
[field_match_team_2_score] == Content: Match Team 2 Score
[field_team_challonge_id] == Content: Team Challonge ID
[field_team_id] == Content: Team ID
[field_team_logo] == Content: Team Logo
[field_team_losses] == Content: Team Losses
[field_team_name] == Content: Team Name
[field_team_wins] == Content: Team Wins
[field_team_member_role] == Team Members: Team Member Role
[field_team_member_user] == Team Members: Team Member User
[created] == User: Created date
[field_user_facebook_link] == User: Facebook link
[name] == User: Name
[picture] == User: Picture
[field_gamertag] == User: PSN Gamertag
[field_twitch_handle] == User: Twitch Handle
[field_twitter_handle] == User: Twitter Handle
[uid] == User: Uid
[uuid] == User: User UUID
[field_xbox_gamertag] == User: Xbox Gamertag
[field_youtube_link] == User: YouTube Channel
[field_tournament_name] == Content: Name
[field_tournament_challonge_id] == Content: Tournament Challonge ID
[field_tournament_time] == Content: Tournament Time
[field_match_host_order] == Content: Match Host Order
[field_match_maps] == Content: Match Maps
[field_team_challonge_id_1] == Content: Team Challonge ID
[field_team_id_1] == Content: Team ID
[field_team_logo_1] == Content: Team Logo
[field_team_losses_1] == Content: Team Losses
[field_team_name_1] == Content: Team Name
[field_team_wins_1] == Content: Team Wins
[field_team_member_role_1] == Team Members: Team Member Role
[field_team_member_user_1] == Team Members: Team Member User
[field_user_facebook_link_1] == User: Facebook link
[field_gfc_player_rank] == User: GFC Player Rank
[name_1] == User: Name
[picture_1] == User: Picture
[field_gamertag_1] == User: PSN Gamertag
[field_twitch_handle_1] == User: Twitch Handle
[field_twitter_handle_1] == User: Twitter Handle
[uid_1] == User: Uid
[uuid_1] == User: User UUID
[field_xbox_gamertag_1] == User: Xbox Gamertag
[field_youtube_link_1] == User: YouTube Channel
[field_youtube_link_1-value] == Raw value
[field_youtube_link_1-format] == Raw format


*/
?>


<div class="row">
    <div class="pricing-table pricing-table__style3">

        <!-- Team One Section-->
        <div class="col-md-2">
            <div class="plan popular style3" style="border-width: 2px;border-color: grey">
                <header class="pricing-head">

                    <div class="circled">
                        <div class="circled-inner">
                            <i class="fa fa-group fa-5x" style="color:goldenrod; padding: 10px">
                                <span class="price">
                                    <small>
                                        <?php
                                        if(!$fields['field_match_status']->content = "Scores Reported"){
                                            Print 'TBD';
                                        }
                                        elseif($fields['field_match_team_1_score']->content > $fields['field_match_team_2_score']->content){print 'Win';}
                                        elseif($fields['field_match_team_2_score']->content > $fields['field_match_team_1_score']->content){print 'Loss';}

                                        ?>

                                    </small>
                                </span>
                            </i>

                        </div>
                    </div>
                    <h3 style="color: #000000;"><?php print $fields['field_team_name']->content; ?></h3>
                </header>
                <div class="pricing-body" align="left">
                    <ul>
                        <li>Wins:</li>
                        <li>Losses:</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Match Status and details section-->

        <div class="col-md-2">

            <div style="color:black;font-size: xx-large;text-align: center;">
                <i class="fa fa-hand-o-left " style="color: goldenrod"></i>
                    &nbsp;&nbsp;Vs.&nbsp;&nbsp;
                <i class="fa fa-hand-o-right" style="color: goldenrod"></i>
            </div>

            <div class="plan style3" style="background-color:black;padding: 2px;border-width: 2px;border-color: goldenrod">
                <div class="row" align="top">
                    <small style="color:white;">Status:<br> <b><?php print $fields['field_match_status']->content; ?></b></small>
                </div>

                <div class="row" align="left" style="padding-left: 20px">
                    <p></p>
                    <h5 style="color:goldenrod">Maps:</h5>
                    <small style="color:white;">
                        <?php
                            //turn maps string into array and iterate them onto page
                            $maps = str_getcsv($fields['field_match_maps']->content);

                            foreach($maps as $map){
                                print $map . '<br>';
                            }
                        ?>
                    </small>
                    <br>
                    <h5 style="color:goldenrod">Hosts:</h5>
                    <small style="color:white;">
                        <?php
                        print $fields['field_team_name']->content . '<br>';
                        print $fields['field_team_name_1']->content . '<br>';
                        print 'TBD';
                        ?>
                    </small>
                </div>
            </div>
        </div>


        <!-- Team 2 section-->

        <div class="col-md-2">
            <div class="plan popular style3" style="border-width: 2px;border-color: grey">
                <header class="pricing-head">

                    <div class="circled">
                        <div class="circled-inner">
                            <i class="fa fa-group fa-5x" style="color:goldenrod; padding: 10px">
                                <span class="price">
                                    <small>
                                        <?php
                                        if(!$fields['field_match_status']->content = "Scores Reported"){
                                            Print 'TBD';
                                        }
                                        elseif($fields['field_match_team_1_score']->content < $fields['field_match_team_2_score']->content){print 'Win';}
                                        elseif($fields['field_match_team_2_score']->content < $fields['field_match_team_1_score']->content){print 'Loss';}

                                        ?>

                                    </small>
                                </span>
                            </i>

                        </div>
                    </div>
                    <h3 style="color: #000;"><?php print $fields['field_team_name_1']->content; ?></h3>
                </header>
                <div class="pricing-body" align="left">
                    <ul>
                        <li>Wins:</li>
                        <li>Losses:</li>
                    </ul>
                </div>

            </div>
        </div>


    </div>
</div>

<!--
USER, Gamertag, Social Media, Eligability
-->

<br><br>

<div class="row">
<div id="forum">
    <div class="col-md-6">
        <table>
            <thead>
            <tr style="background-color: yellow">
                <th align="left" colspan="4" style="background-color: goldenrod"><?php print $fields['field_team_name']->content; ?>Team Roster</th>
            </tr>
            <tr>
                <th>User</th><th>Gamertag</th><th>Social Media</th><th>Elegibiliy</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php print $fields['field_team_member_user_1']->content; ?></td><td>__dudeone__</td><td>icons/links</td><td>status light</td>
            </tr>
            <tr>
                <td>Dude1</td><td>__dudeone__</td><td>icons/links</td><td>status light</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

<div class="row">
<div id="forum">
    <div class="col-md-6">
        <table>
            <thead>
            <tr style="background-color: yellow">
                <th align="left" colspan="4" style="background-color: goldenrod"><?php print $fields['field_team_name_1']->content; ?> Team Roster</th>
            </tr>
            <tr>
                <th>User</th><th>Gamertag</th><th>Social Media</th><th>Elegibiliy</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Dude1</td><td>__dudeone__</td><td>icons/links</td><td>status light</td>
            </tr>
            <tr>
                <td>Dude1</td><td>__dudeone__</td><td>icons/links</td><td>status light</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>