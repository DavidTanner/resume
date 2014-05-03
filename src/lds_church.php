<?php
/**
 * Created by PhpStorm.
 * User: darth_000
 * Date: 5/2/14
 * Time: 9:37 PM
 */


$id = "lds";
$title = "LDS Church ICS";


$body = "
<p>
I worked for The Church of Jesus Christ of Latter Day Saints
<a href='https://tech.lds.org/wiki/Riverton_Office_Building'>Information and Content Services</a> department
from May 2014 to January 2014.  I left this position after graduating from Brigham Young University.  When I was
interviewing for the Quality Assurance Engineer position, it was explained to me that I would be spending a lot of time
manually going through content looking for issues of various kinds.  I would also be expected to create tools to speed
up the process.
</p>
<p>
On my first day I took a simple side by side site comparison tool and added several features that were requested by my
fellow QA.  Our team had purchased licenses to a web link validator tool, but the results were
inconsistent.  One time the tool was run it may pick up a thousand pages, and just after that may be one or a few more.
There was no way to tell the tool which pages we wanted to test, and which to avoid.
</p>
<p>
Determined to have a tool that would be reliable and efficient, tests could take some time considering that a manual
contain a hundred web pages or more with a plethora of links on some of them, I started a custom tool in C#.  The tool
ended up being able to process hundreds of pages every couple of minutes, and was able to search for common content errors
that visual scanning would miss.  Things like links to pages that pulled up a dynamic error page, or even be able to
tell if a link the the scriptures was using the right chapter and verse.
</p>
<p>
To guarantee that the tool was fast, each link was tested in its own thread.  The page was loaded up with CsQuery, and
elements were extracted using CSS selectors.  I even added functionality to markup a page where the links or other elements
on the page were 'bad'.  The tool became massively multi threaded, and even gained the attention of the IT department
because it was pinging links at a rate of 10,000 HTTP calls per second.  The tool continues to be used even after I left.
<blockquote>
<p>Just thought you should know.
You program kicked butt again this conference.
We did it faster and better than it has ever been done.  And we employed your program to help.
</p>
<p class='text-right'>-- Scott Swasey Apr 25 2014</p>
</blockquote>
</p>
";

$sections[] = array("entry"=>$id, "body"=>$body, "in_collapse"=>false);

create_collapse_button($parent, $id, $title);
