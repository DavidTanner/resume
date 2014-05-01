<?php
/**
 * Created by PhpStorm.
 * User: darth_000
 * Date: 4/30/14
 * Time: 9:23 PM
 */

include "library.php";


$profile = "
<p>
I am a native of Blackfoot, ID. I graduated from Snake River High School in 2003.  From May 2005 to June 2007 I served as
a missionary for <a href='http://www.mormon.org'>The Church of Jesus Christ of Latter Day Saints</a> (LDS or Mormon).  Upon returning
I met the love of my life, and we were married in the Salt Lake LDS temple for all time and eternity the next spring.
</p>
<p>
Starting fall of 2007 I attended Salt Lake Community College, where I was able to get all of my generals taken, and then
transferred to <a href='http://www.byu.edu'>Brigham Young University, Provo</a> in January 2011.  I entered the Electrical
Engineering program directly, and finished my studies in December 2013.
</p>
<p>
There are many things I like to do, I spent two years fixing up a house in West Valley Utah, I like to read, I like to
play the occasional video game, and I like to figure out how things work.  When I get attached to a project, I take great
pride in making sure I do a good job, and that it is something I can be proud of.
</p>
";

$sections[] = array("entry"=>"profile", "body"=>$profile, "in_collapse"=>true);

create_collapse_button($parent, "profile", "Profile");


