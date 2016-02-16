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
[field_tournament_status] == Content: Tournament Status
[field_match_status] == Content: Match Status
[field_match_status-value] == Raw value
%1 == Content: Match Challonge ID (field_match_challonge_id) title
!1 == Content: Match Challonge ID (field_match_challonge_id) input


*/
?>

<!--
USER, Gamertag, Social Media, Eligability
-->

<br><br>
<!-- TEAM 1-->
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

                <!-- TEAM 1
                **********************If the row is team1 then add table entry for the user info
                -->
                <?php if(isset($fields['uid']));?>
                <tr>
                    <td><?php print $fields['field_team_member_user']->content; ?></td><td><?php print $fields['field_gamertag']->content; ?></td><td><?php print $fields['field_twitter_handle']->content; ?></td><td><i class="fa fa-check-circle"></i></td>
                </tr>
                <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- TEAM 2-->

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

                <!-- TEAM 1
               **********************If the row is team1 then add table entry for the user info
               -->
                <?php if(isset($fields['uid_1']));?>
                <tr>
                    <td><?php print $fields['field_team_member_user_1']->content; ?></td><td><?php print $fields['field_gamertag_1']->content; ?></td><td><?php print $fields['field_twitter_handle_1']->content; ?></td><td><i class="fa fa-check-circle"></i></td>
                </tr>
                <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>