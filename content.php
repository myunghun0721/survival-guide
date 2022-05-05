<?php 
    $path = "./";
	$page_title = "Content";
    include($path . "header.php");
?>

<div class="contentpg-container">
    <div class="content-nav">
        <ul>
            <li><a href="">Placeholder</a></li>
            <li><a href="">Placeholder</a></li>
            <li><a href="">Placeholder</a></li>
        </ul>
    </div>

    <div class="content-container">
        <h2>Main Topic<h2>
        <p>So, you want to create a website on a Unix or Linux based system and maybe don&rsquo;t know where to begin. One of your colleagues says you should work with a &ldquo;LAME&rdquo; stack as your basis and you can&rsquo;t quite remember what &ldquo;LAME&rdquo; stands for or where to start. The world of Unix and Linux seems confusing. <br>
To begin with, is &ldquo;LAME&rdquo; a sly acronym? A subversive judgment of your web design skills? Something someone told you so you would embarrass yourself in future conversations? Who knows!<br>
Everywhere you look there seems to be different information on Unix and Linux, how to interact with them, and the millions of options you have to tackle any task from any angle.</p>

<p> &ldquo;How will I ever complete this monumental task?&rdquo;, you&rsquo;ll ask yourself, sheepishly.<br>
 &ldquo;Oh no, what have I gotten myself into!?!&rdquo;, you&rsquo;ll proclaim.<br>
 &ldquo;If only there was some kind of appendix of information neatly laid out in a strategic, easy-to-read way to guide me through this perilous quest!&rdquo;, you&rsquo;ll cry into your pillow.<br>
Well my weary, imposter syndrome riddled friend, you&rsquo;ve found it!</p>

<p>Team Akrasia&rsquo;s Unix and Linux Survival Guide is here to save the day!<br>
(and to save you time from having to scope out hard to read user forums)</p>

<p> Our guide will give you everything you need to make sure you&rsquo;re prepared for your first steps into the world of publishing your website on Unix and Linux-based systems and all the wild critters you&rsquo;ll encounter on your way there.</p>

<p> To give you a quick glimpse into your experience, you&rsquo;ll likely come upon some of the following local animalia. Click below to read up and make sure you&rsquo;re prepared! -<br>
[links below in bold]</p>

<p>Unix and Lieeenux - A history and overview, the structures and differences between the two, and a summary of what these systems mean for you<br>
Terminals and Directories oh me oh my - An introduction to the most commonly used shells, a list of useful commands and arguments, an explanation on navigating and creating your site&rsquo;s directories and map, and some information about permissions<br>
The tools for publishing your work through SSH and SFTP, accessibility, and other considerations - Leading you step-by-step through getting your creation onto the world wide web as well as some common graphical clients to get you started</p>

<p> By the end of this guide, we hope that you feel confident in your ability to traverse the trials of the task ahead of you. The path may be arduous, but the rewards of traversing it shall pay back your efforts in full.<br>
UNIX AND LINUX OVERVIEW<br>
Preface Title - [UNIX AND LINUX - TWO BIRDS, ONE CHAPTER]:</p>

<p>Desc. : <br>
[Preparing you for what Unix and Linux are about, what they&rsquo;re made of, and a little bit on how they work]</p>

<!-- text Content:<br> -->
&ldquo; The following sections contain a scenic walkthrough of the lands of UNIX and LINUX and the many varied environments you may see. Includes a preface, overview, and history of UNIX and LINUX, the differences between the two, their internal structures and backbones, and a summary of using a UNIX or LINUX environment or operating system&rdquo;.</p>

<!-- Unix Linux Subpage -->
<p>The shared history between UNIX and LINUX and their differences<br>
(Linked from &ldquo;Overview&rdquo; on Home page)<br>
<!-- Text for home page -->
Desc. :<br>
[Introducing the concepts behind FOSS, the development of UNIX, where LINUX derives, and what the modern-day landscape looks like for these two operating systems]</p>


<!-- needs title <h1> -->
text Content 1:<br>
&ldquo; The best first step to understanding UNIX and LINUX is to accept that, as a developer, what may be important to you about these environments may differ from what an engineer, a hobbyist, or general user considers important. While the inner workings of these operating systems can directly affect your experience, change your approach, and remain important parts of a developer&rsquo;s plethora of knowledge, they can also detract your attention from the information that&rsquo;s most critical to your work. The worlds of UNIX and LINUX are vast, varied, and have existed for an eternity in development time, and as such can be infinitely explored, improved, and learned from. With that kind of scope in mind, try to throw everything you know out the window, pack your bags with the bare necessities, and valiantly trudge on into a fresh horizon of thinking.&rdquo;</p>

<p>
<!-- Text Content 2:<br> -->
&ldquo;Alright, now, to get to the meat of the topic. What are UNIX and LINUX? &ndash;<br>
 UNIX development and use started in the 1970s as a solution for operating systems, databases, and processing centers requiring multiple users active at a time. UNIX primarily started through the efforts of developers at AT&amp;T&rsquo;s Bell Laboratories, and has since grown from its humble beginnings to the extremely widely known and used standard for operating systems and development environments that it is today. In a quote from its creators in its early days (obviously before the millions upon millions of installs since), they remarked,<br>
 &ldquo;...the number of UNIX installations has grown to 10, with more expected&#8230;&rdquo; (source: https://unix.org/what_is_unix/history_timeline.html - A brief look at the early history)</p>

<p>
<!-- Text Content 3:<br> -->
Somewhere along the way of UNIX&rsquo;s development, among acquisitions of developers, rights, standards, and a whole bunch of corporate hoo-hah, the UNIX operating system moved into development behind closed doors and as such, the original UNIX system is now considered closed-source and only available through a few vendors in a select few flavors. Closed source software refers to when developers choose not to allow the public access to view or modify their source code (the uncompiled version of the code behind the executable binaries and files the system or program operates through). However, as to be expected, people were not happy with this, and thus we have come upon FOSS, Linux, and other derivatives of the UNIX structure.</p>

<p>
    <!-- Text Content 4:<br> -->
In contrast to the obfuscated nature of closed source software, FOSS (aka &ldquo;Free and Open Source Software&rdquo;) operates on the idea that anyone and everyone can use, modify, or edit their work to create something greater. When you take this idea, combine it with a community of passionate developers (and a guy who maybe takes his acronyms too seriously..), and give them the aim to produce an operating system based on UNIX, with the help and gratitude of many, you end up with LINUX.</p>

<p>
    <!-- Text Content 5:<br> -->
 A modern-day LINUX system consists of a centralized Kernel, a variety of shell options, millions of user edits and contributions, and as many ways to use its systems as you could ever think of. In contrast, a closed source UNIX system generally comes as an all-in-one package, with dedicated support from a consistently managed team of developers making sure it all works together. More on this later..</p>

<p>From a birds eye view, UNIX and LINUX are two sides of the same coin. A coin separated by development philosophy, years of history, and context that extends throughout every choice in their making and usage today.</p>

<p>Source: https://unix.org/what_is_unix/history_timeline.html</p>
    </div>
</div>


<?php 
    include($path . "footer.php");
?>