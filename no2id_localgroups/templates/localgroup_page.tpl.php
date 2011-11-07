<?php
/*
 * localgroup_page.tpl.php:
 *    template page for no2id local-groups' drupal module 
 *
 * Copyright (c) 2009 no2id. All rights reserved.
 * Email: <adam@amyl.org.uk> Web: <http://blog.amyl.org.uk>
 *
 * $Id: localgroup_page.tpl.php 29 2009-12-18 14:36:10Z adam $
 *
 */
?>

<p>Opposition to identity cards exists everywhere in the UK. Now
groups are gathering together in many towns and cities under the NO2ID
banner to campaign against this dangerous legislation. To get more
involved, please contact your nearest group. If there isn't one near
you, consider starting one! For more information on starting one
(which is easy), or if you can't make contact with your nearest group,
please contact <a href="mailto:local.groups@no2id.net">Matty Mitford
and Deborah McAlister</a> &#8212; our local groups coordinators.</p>


<ul>
    <li><a href="#s">Scotland</a></li>
    <li><a href="#ni">Northern Ireland</a></li>
    <li><a href="#nw">North West</a></li>
    <li><a href="#ne">North East</a></li>
    <li><a href="#yath">Yorkshire and the Humber</a></li>
    <li><a href="#w">Wales</a></li>
    <li><a href="#wm">West Midlands</a></li>
    <li><a href="#em">East Midlands</a></li>
    <li><a href="#eoe">East of England</a></li>
    <li><a href="#sw">South West</a></li>
    <li><a href="#l">London</a></li>
    <li><a href="#se">South East</a></li>
    <li><a href="#i">International</a></li>
</ul>

<p><a href="/resources/motions">Councils and public bodies across the
UK have passed motions against ID cards.</a> A number of NO2ID local
groups have successfully lobbied local councillors and union
representatives to get them to do this.</p>

<p>Join the email list (look below for the "Mailing List:" link) for
your local group to find out about activities and the campaign in your
area. We're adding more lists on a daily basis, so if your group
hasn't got one at the moment, please do check back regularly.</p>

<p>If you are in London, there is also a mailing list <em>"id-action"</em> for
those who want to help with occasional leafleting at special events and
other activities in support of local groups anywhere in the capital:</p>

<div style="width:230px; margin: 8px auto;">
<div id="inPageForm">
    <form id="signUpForm" name="id-action-signup" 
        method="post" action="http://www.no2id.net/mailman/subscribe/id-action">
        <div>
          <h3>subscribe to id-action</h3>
        </div>
        <div>
            <label>Your Name:</label>
            <input type="text" name="fullname" size="15" />
        </div>
        <div>
            <label>Email Address</label>
            <input type="text" name="email" size="15" />
        </div>
        <div id="button">
            <input type="submit" name="Subscribe me" value="Subscribe me" />
        </div>
    </form>
</div>
</div>

<?php echo $region_list_html ?>

