<?php 
    $path = "../";
    $page_title = "Unix and Linux";
    include($path . "header.php");
?>
<div class="contentpg-container">
    <div class="content-nav">
        <ul>
            <!-- Change these according to the subtopic headers. -->
            <li><a href="#intro">Intro</a></li>
            <li><a href="#deepdive">Deeper Dive</a></li>
            <li><a href="#recap">Let&rsquo;s Recap!</a></li>
        </ul>
    </div>

    <div class="content-container">
        <!-- Unix Linux Topic Page -->
        <p id="intro">
            <h1>UNIX AND LINUX</h1>
            <h3>The shared history between UNIX and LINUX and their differences</h3>
        <!-- text Content 1 / Sub Content 1 : -->
        </p>
        <p> 
            <h2>TWO BIRDS, ONE CHAPTER</h2>
            &nbsp;&nbsp;&nbsp;&nbsp;The best first step to understanding UNIX and LINUX is to accept that, as a developer, what may be important to you about these environments may differ from what an engineer, a hobbyist, or general user considers important. While the inner workings of these operating systems can directly affect your experience, change your approach, and remain important parts of a developer&rsquo;s plethora of knowledge, they can also detract your attention from the information that&rsquo;s most critical to your work. The worlds of UNIX and LINUX are vast, varied, and have existed for an eternity in development time, and as such can be infinitely explored, improved, and learned from. With that kind of scope in mind, try to throw everything you know out the window, pack your bags with the bare necessities, and valiantly trudge on into a fresh horizon of thinking.&rdquo;
        </p>

        <p>
            <!-- Text Content 2: -->
            &nbsp;&nbsp;&nbsp;&nbsp;Alright, now, to get to the meat of the topic. What are UNIX and LINUX? &ndash; &nbsp;&nbsp;&nbsp;&nbsp;UNIX development and use started in the 1970s as a solution for operating systems, databases, and processing centers requiring multiple users active at a time. UNIX primarily started through the efforts of developers at AT&amp;T&rsquo;s Bell Laboratories, and has since grown from its humble beginnings to the extremely widely known and used standard for operating systems and development environments that it is today. In a quote from its creators in its early days (obviously before the millions upon millions of installs since), they remarked, &ldquo;...the number of UNIX installations has grown to 10, with more expected&#8230;&rdquo;
        </p>
        <p>
        (source: <a href="https://unix.org/what_is_unix/history_timeline.html">https://unix.org/what_is_unix/history_timeline.html - A brief look at the early history)</a>
</p>

        <p>
            <!-- Text Content 3: -->
            &nbsp;&nbsp;&nbsp;&nbsp;Somewhere along the way of UNIX&rsquo;s development, among acquisitions of developers, rights, standards, and a whole bunch of corporate hoo-hah, the UNIX operating system moved into development behind closed doors and as such, the original UNIX system is now considered closed-source and only available through a few vendors in a select few flavors. Closed source software refers to when developers choose not to allow the public access to view or modify their source code (the uncompiled version of the code behind the executable binaries and files the system or program operates through). However, as to be expected, people were not happy with this, and thus we have come upon FOSS, Linux, and other derivatives of the UNIX structure.
        </p>

        <p>
            <!-- Text Content 4: -->
            &nbsp;&nbsp;&nbsp;&nbsp;In contrast to the obfuscated nature of closed source software, FOSS (aka &ldquo;Free and Open Source Software&rdquo;) operates on the idea that anyone and everyone can use, modify, or edit their work to create something greater. When you take this idea, combine it with a community of passionate developers (and a guy who maybe takes his acronyms too seriously..), and give them the aim to produce an operating system based on UNIX, with the help and gratitude of many, you end up with LINUX.
        </p>

        <p>
            <!-- Text Content 5: -->
            &nbsp;&nbsp;&nbsp;&nbsp;A modern-day LINUX system consists of a centralized Kernel, a variety of shell options, millions of user edits and contributions, and as many ways to use its systems as you could ever think of. In contrast, a closed source UNIX system generally comes as an all-in-one package, with dedicated support from a consistently managed team of developers making sure it all works together. More on this later..
        </p>

        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;From a birds eye view, UNIX and LINUX are two sides of the same coin. A coin separated by development philosophy, years of history, and context that extends throughout every choice in their making and usage today.
        </p>

        <p>
            Source: <a href="https://unix.org/what_is_unix/history_timeline.html">Unix.Org</a>
        </p>

        <!-- Subcontent 2 for UNIX/Linux -->

        <p id="deepdive">
            <h2>A Look Into What Makes Up Unix Based Systems</h2>
            <!-- Text Content 6: -->
            &nbsp;&nbsp;&nbsp;&nbsp;UNIX based operating systems are generally structured according to similar principles of design. At their core, these systems heavily rely on centralized codebases we commonly refer to as kernels - singular masses of specialized code that handle primary operations between I/O, hardware, system call and code interpretation, memory management, and most other system-critical functions. On the more outer levels of these operating systems reside the shell, which interprets user commands, and a terminal, which provides an interface by which the user can interact with.  Modern-day UNIX-based systems also employ desktop environments for user interaction, different file system structures, package managers for software management, and countless other layers of networking, firewalls, communication protocols, display renderers, and processing functions.
        </p>

        <!-- text Content 7: -->
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;To describe a UNIX-based operating system at its most basic level is to describe a standard by which operating systems structure themselves. As such, it is important to distinguish between &ldquo;UNIX&rdquo; the original codebase currently used by operating systems such as Oracle&rsquo;s Sun Solaris in contrast to the &ldquo;UNIX&rdquo; based structures for other systems such as BSD and the much more widely known LINUX. The categories of BSD and LINUX also, at their most basic form, describe different structures of operating systems, with dedicated kernels for each type. Both BSD and Linux have countless derivatives, distributions, and litanies of changes among version to version and package to package. Examples of BSD systems you might run into in the modern-day include FreeBSD, OpenBSD, and MacOS. And, for Linux, the names Ubuntu, Debian, Fedora, and Arch come up frequently, with other operating systems such as Android adopting Linux as a part of their development structure.
        </p>

        <!-- text Content 8: -->
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;In terms of the effect on the user, the differences between Unix, BSD, and Linux come down to matters of logistics, preferences for development, and the cores that they operate on. For instance, a Unix operating system such as Sun Solaris will have a kernel, as well as other layers of function, that can have a greater chance for less frequent updates, as the development occurs under a singularly organized team.
            &nbsp;&nbsp;&nbsp;&nbsp; In contrast, operating systems based on kernels for BSD or Linux have the ability to distribute their development efforts among a theoretically infinite pool of developers, eyes, and checks and balances to ensure that they remain air-tight in operation and are updated as frequently as necessary.
            &nbsp;&nbsp;&nbsp;&nbsp; BSD and Linux operating systems also benefit from an inherently greater level of modularity. The thousands of distributions, packages, and layers that depend on these systems are designed with the inherent conceptual ideas of the kernels behind them. The community and users alike can, will, and have combined these parts in infinite ways for any angle of development and functionality. The horizon seems endless.
        </p>
        <!-- text Content 9 / Sub Content 3 -->
        <p id="recap">
            <h2>A summary of Unix and Linux in a bulleted list for an easy TL;DR</h2>
            <h3>Let&rsquo;s recap!</h3>
            <ul>
                <li>
                    &ldquo;UNIX systems&rdquo; can describe a system structure originally developed by AT&amp;T Bell Lab Engineers in the 1970s that consists of a centralized kernel, a shell, a terminal, and many other outwardly designed layers to create an interface and design that allows multiple users access at once
                </li>
                <li>
                    &ldquo;UNIX systems&rdquo; exist as either the derivative of the original UNIX system currently in use by Oracle&rsquo;s Sun Solaris operating system, the Linux family of operating systems such as Ubuntu, Arch, Debian, or Fedora, or the BSD family of operating systems such as FreeBSD, OpenBSD, and macOS.
                    UNIX systems allow for a greater level of modularity compared to other multi-user systems, supported by a rich history of development and modern adoption
                </li>
                <li>
                    The implicit design and ideas behind UNIX and Linux systems enforces a new perspective of thinking and centralized design
                </li>
            </ul>
        </p>
        <script>
            var quizId = 1;
        </script>
        <?php 
            $quiz_num = 1;
            include($path . "quiz.php");
        ?>

        <div class="spacing">
            <a href="terminal.php">Click here to go to the next topic!</a>
        </div>
    </div>
</div>
        <?php 
            include($path . "footer.php");
        ?>

        
