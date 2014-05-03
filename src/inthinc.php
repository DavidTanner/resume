<?php
/**
 * Created by PhpStorm.
 * User: darth_000
 * Date: 5/2/14
 * Time: 9:15 PM
 */


$id = "inthinc";
$title = "Inthinc";


$body = "
<p>
I worked for <a href='www.inthinc.com'>Inthinc inc</a> in December of 2008, and left in May 2013.  I started off on the
system test team with twelve other QA.  By August of 2009 there were only three of us left.  I was placed in charge
of the selenium automation project, with almost no programming experience.  The project had been maintained by another
member of the team in both Python and Java.  While the majority of testing initially was finding issues with the website
and custom device hardware, I spent as much time as possible automating tools to speed up the process.
</p>
<p>
I quickly learned how to build the project in Python, and would consider that the first language I actually learned.
Over the next year I more automated test cases, learned to read and use xpath, xml, and html.  I even wrote a library
that allowed us to automate adding and removing user data using Hessian calls, and eventually wrote a small device
emulator that allowed us to create data points faster than actual device testing.
</p>
<p>
Soon I was able to transition completely to Java, and started working with one of the Developers to start standardizing
how tests were written, and how elements were identified for selenium.  Work began in earnest to create what we called
page objects, essentially a class per webpage with sub classes for each type of functional element on the page.  For
example the Login page would have text, buttons, and textfields.  These sub classes were simply methods that returned
objects that allowed the tester to interact with that type of object, like clicking a button.
</p>
<p>
Once the page objects were completed, we started transitioning from programming tests in Java, to using
<a href='www.jbehave.org'>JBehave</a> story files.  JBehave parses a text file line by line to execute business logic
that can be written out in english sentences.  This still required matching part of a sentence to a java method, so I
started investigating using Java Reflection to parse the sentence further.
</p>
<p>
By using a standard sentence form I could parse out the type of element to get from a page object, which element it was,
and what action was to be performed on that element.  This greatly reduced the amount of code that had to be written
to support new stories and new elements.
</p>
<p>
While working on the framework, I also assisted in debugging server c/python, and java faces defects.  Eventually I was
transitioned to work on the next generation Android based device platform.  I continued to write automation tests, and
unit tests for the main application codes.  Again I utilized reflection to set UI fields for unit tests that were
supposedly un-testable in their current state.  I also wrote business logic for several of the applications to be run on
the new device.
</p>
";

$sections[] = array("entry"=>$id, "body"=>$body, "in_collapse"=>false);

create_collapse_button($parent, $id, $title);