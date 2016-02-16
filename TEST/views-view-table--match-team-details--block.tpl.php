<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
?>


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
                <?php foreach ($row as $field => $content): ?>

                    <tr>
                        <td><?php print $fields['field_team_member_user']->content; ?></td><td><?php print $fields['field_gamertag']->content; ?></td><td><?php print $fields['field_twitter_handle']->content; ?></td><td><i class="fa fa-check-circle"></i></td>
                    </tr>

                <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>