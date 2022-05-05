<?php 
    $path = "../";
    $page_title = "The Terminal";
    include($path . "header.php");
?>

<div class="contentpg-container">
    <div class="content-nav">
        <ul>
            <!-- Change these according to the subtopic headers. -->
            <li><a href="#directories">Guide to Navigating Directories</a></li>
            <li><a href="#cmds">Terminal Commands</a></li>
            <li><a href="#permissions">Permissions</a></li>
        </ul>
    </div>

    <div class="content-container">
        <p>
            <!-- new page -->
            <h1>THE TERMINAL</h1>
            <h2>What BASH is all about!</h2>
            <h3>An overview of the terminal, navigating files and directories, how to read permissions, and an explanation on user categories</h3>
        </p>
        <!-- text Content 1 / Sub Content 1:<br> -->
        <p>
            <h2>An Introduction on Shells</h2> 
            <h3 id="directories">Guide to Navigating Directories</h3>
            &nbsp;&nbsp;&nbsp;&nbsp;Most navigation through a UNIX based file system occurs through usage of the CD and PWD commands. However, before using these commands, it is important to understand the syntax of how directories are displayed in text.
            <br>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;In general, directories are displayed in [name]/[name]/[name] format where each &ldquo;/&rdquo; denotes a directory in a sub-level beneath another. When a directory has its absolute path, i.e. the path relative to the full file system, each parent and sub directory are represented. (Example: /home/[user]/file.xyz )
            <br>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;Additionally, directories can be represented in relative form. Relative directory paths can include &ldquo;.&rdquo; to denote the current working directory, as well as &ldquo;..&rdquo; to denote the directory a level above the working directory. Furthermore, the root directory can be denoted simply as &ldquo;/&rdquo;.
            <br>
        </p>
        <p>
            To change your working directory, you would issue the cd (change directory) command with a path (either absolute or relative).
        </p>

        <p>
            Example: &ldquo; cd /home&rdquo;
        </p>

        <p>
            <!-- Text Content 2:<br> -->
            &nbsp;&nbsp;&nbsp;&nbsp;Use the ls command to display the contents of a directory. The ls command writes to standard output the contents of each specified directory or the name of each specified file, along with any other information you ask for with argument flags.</p>

        <p>
            <!-- text Content 3:<br> -->
            &nbsp;&nbsp;&nbsp;&nbsp;The &quot;pwd'' command prints the full name (the full path) of current/working directory. By default, right after ssh-ing to a Linux machine or starting a terminal session, you would find yourself in your home directory, usually /home/
            <username>. If you were to ssh to a cluster and type &ldquo;pwd&rdquo;, you would see it returns &lsquo;/home/
                [ISUNetID]&rsquo;, where
                    [ISUNetID] is your ISU NetID.
                </p>

        <!-- text Content 4:<br> -->
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;The &quot;ls&quot; command, informally known as &ldquo;list stuff&rdquo;, lists directory contents. The ls command can be used with many options and has optional argument modifiers. If you issue the &quot;ls -a&quot; command in your home directory, you should see several files listed, with some of the names starting with a dot. Now, try issuing the &quot;ls&quot; command without any options. You may not see any files at all. The '-a' option tells ls to display hidden files - files with names that start with a dot.
        </p>

        <!-- text Content 5:<br> -->
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;For the next example, issue the &quot;ls -a&quot; command again. The first two directories in the list should be '.' and '..'. Every directory on a Linux machine will have those two directory listings.<br> The '.' directory means current directory and the '..' directory means parent directory, e.g. the directory one level up from the current directory. For example, for /home/ABC directory '.' will mean /home/ABC and the '..' will mean /home. With no arguments, the &quot;ls&quot; command prints the contents of the current directory.<br>
        </p>
        <p>
            
            To see the contents of the parent directory, issue &quot;ls ..&quot;. You should see a list of users on the system. You may have also already guessed this, but the &quot;ls .&quot; command will also provide the same output as the &quot;ls&quot; command. Furthermore, to see the contents of the root (the top-most) directory, issue &quot;ls /&quot; into the terminal.
        </p>
        <p>
            <!-- Text Content 6:<br> -->
            &nbsp;&nbsp;&nbsp;&nbsp;Another commonly used option for the &ldquo;ls&rdquo; command, &lsquo;-l&rsquo; , tells the ls command to use a long listing format, providing additional information about directory contents. For example, issue &ldquo;ls -la&rdquo; (long listing + hidden) in your home directory in the terminal. <br> For each file, the following information will be listed: file type, file permissions, file owner, the group associated with the file (group owner), size, and last modification date. File permissions are shown as three triplets: for the file owner, for the group owner, and for everyone else on the system. For more information about file permissions, refer to the man page of the chmod command: &ldquo;man chmod&rdquo;.<br> You can also use the &quot;ls&quot; command on a regular file (non-directory). Usually, you will use it with the '-l' option to get file information.<br> For information about other options of the ls command, use &quot;ls --help&quot; or &ldquo;man ls.&rdquo;
        </p>
        <br>
        <!-- text Content 7 / Sub Content 2 -->

        <p>
            <h3 id="cmds">A List of Useful Terminal Commands:</h3>

            <table style="width:100%">
                <tr>
                    <th>pwd command<br>"Print working directory"</th>
                    <td>Displays the path of the current working directory (folder) you're in. The command will return an absolute (full) path, which is basically a path of all the directories that start with a forward slash (/). An example of an absolute path is /home/username.</td>
                </tr>
                <tr>
                    <th>cd command<br>"Change directory"</th>
                    <td>To navigate through the Linux files and directories, use the cd command. It requires either the full path or the name of the directory, depending on the current working directory that you're in.</td>
                </tr>
                <tr>
                    <th>ls command<br>"List stuff"</th>
                    <td>This command is used to view the contents of a directory. By default, this command will display the contents of your current working directory.</td>
                </tr>
                <tr>
                    <th>cat command<br>
                    "Cats are curious"</th>
                    <td>It is one of the most frequently used commands in Linux. It is used to list the contents of a file on the standard output (sdout). To run this command, type cat followed by the file's name and its extension. For instance: cat file.txt.</td>
                </tr>
                <tr>
                    <th>cp command<br>
                        “Copy”</th>
                        <td>Use the cp command to copy files from the current directory to a different directory. For instance, the command cp scenery.jpg /home/username/Pictures would create a copy of scenery.jpg (from your current directory) into the Pictures directory.</td>
                </tr>
                <tr>
                    <th>mv command<br>
                        “Move”</th>
                        <td>The primary use of the mv command is to move files, although it can also be used to rename files.</td>
                </tr>
                <tr>
                    <th>mkdir command<br>
                        “Make directory”</th>
                        <td>Use the mkdir command to make a new directory. To generate a new directory inside another directory, use this Linux basic command mkdir.</td>
                </tr>
                <tr>
                    <th>rmdir command<br>
                        “Remove directory”</th>
                        <td>If you need to delete a directory, use the rmdir command. However, rmdir only allows you to delete empty directories.</td>
                </tr>
                <tr>
                    <th>rm command<br>
                        “Remove”</th>
                    <td>The rm command is used to delete directories and their contents. If you only want to delete the directory — as an alternative to rmdir — use rm -r.</td>
                </tr>
                <tr>
                    <th>touch command</th>
                    <td>This command allows you to create a blank new file through the Linux command line. As an example, enter touch  /home/username/Documents/Web.html to create an HTML file entitled Web under the Documents directory.</td>
                </tr>
                <tr>
                    <th>locate command</th>
                    <td>This command is to locate a file, just like the search command in Windows. What's more, using the -I argument along with this command will make it case-insensitive, so you can search for a file even if you don't remember its exact name.</td>
                </tr>
                <tr>
                    <th>find command</th>
                    <td>Similar to the locate command, using find also searches for files and directories. The difference is, you use the find command to locate files within a given directory.</td>
                </tr>
                <tr>
                    <th>grep command</th>
                    <td>Another basic Linux command that is undoubtedly helpful for everyday use is grepping. It lets you search through all the text in a given file. To illustrate, grep blue notepad.txt will search for the word blue in the notepad file. Lines that contain the searched word will be displayed fully.</td>
                </tr>
                <tr>
                    <th>sudo command<br>“Super do”</th>
                    <td>This command enables you to perform tasks that require administrative or root permissions. However, it is not advisable to use this command for daily use because it might be easy for an error to occur if you did something wrong. Sudo wisely, folks!</td>
                </tr>
                <tr>
                    <th>df command<br>“Disk free”</th>
                    <td>Use df command to get a report on the system's disk space usage, shown in percentage and KBs. If you want to see the report in megabytes, type df -m.    </td>
                </tr>
                <tr>
                    <th>du command<br>“Disk Usage”</th>
                    <td>The du (Disk Usage) command is the answer to questions you may have from “df”. However, the disk usage summary will show disk block numbers instead of the usual size format. If you want to see the used space represented bytes, kilobytes, and megabytes, add the -h argument to the command line.</td>
                </tr>
                <tr>
                    <th>head command</th>
                    <td>The head command is used to view the first lines of any text file. By default, it will show the first ten lines, but you can change this number to your liking. For example, if you only want to show the first five lines, type: head -n 5 filename.ext.</td>
                </tr>
                <tr>
                    <th>tail command</th>
                    <td>This one has a similar function to the head command, but instead of showing the first lines, the tail command will display the last ten lines of a text file. For example: tail -n filename.ext.</td>
                </tr>
                <tr>
                    <th>diff command</th>
                    <td>Short for difference, the diff command compares the contents of two files line by line. After analyzing the files, it will output the lines that do not match. Programmers often use this command when they need to make program alterations instead of rewriting the entire source code.</td>
                </tr>
                <tr>
                    <th>tar command<br>“Tar sticks things together”</th>
                    <td>The tar command is the most used command to archive multiple files into a tarball — a  common Linux file format that is similar to zip format, with compression being optional.</td>
                </tr>
            </table>
        </p>

        <br>
        <p>
            <h2 id="permissions">Permissions</h2>

        <!-- text Content 8 / Sub Content 3:<br> -->
            &nbsp;&nbsp;&nbsp;&nbsp;Permissions dictate the ability of different categories of users to read, write, and execute files. In Unix-based systems running SH-like shells, the commands CHOWN and CHMOD are used to define different characteristics of ownership for files and to modify the permissions for each category of user for that file respectively.
        </p>
        <p>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;Editing these values comes with implicit understanding of their meanings, and as such permission modification is usually left to system administrators or those with the authority to do so. However, this knowledge remains important as users can often dictate permissions for files in their own home directories, or in the development of their servers. As always, tread lightly.
        </p>

        <!-- text Content 9: -->
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;Now, onto how to read these values -<br>
            &nbsp;&nbsp;&nbsp;&nbsp;Through different arguments of the &ldquo;ls&rdquo; command, permissions can be represented in a number of different ways, the most human readable of which is for permissions to be represented in three tuplets of &ldquo;rwx&rdquo;. For each respectively, &ldquo;r&rdquo; stands for &ldquo;read&rdquo;, &ldquo;w&rdquo; for &ldquo;write&rdquo;, and &ldquo;x&rdquo; for execute. <br> In this syntax, permissions are split between &ldquo;User&rdquo;, &ldquo;Group&rdquo;, and &ldquo;Other&rdquo;, represented as &ldquo;rwxrwxrwx&rdquo; , where &ldquo;-&rdquo; would replace any of these characters to denote an absence of the permission.<br> To explain the categories of users briefly in the context of permissions, &ldquo;User&rdquo; refers to the owner of the file itself, &ldquo;Group&rdquo; refers to the user-group assigned to the file, while &ldquo;Other&rdquo; refers to most other conceivable user types.
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;Another syntax for representing file permissions is with a number code. Permissions can be represented as a single 3 digit number with a range from 0 to 7. In this syntax, permissions are represented additively, where 1 = execute, 2 = write, and 4 = read.</p>

        <p>
            An example of the number system is as follows:<br>
            <ul><li> &ldquo;754&rdquo;</li></ul>
        </p>

        <p>
            This singular tuplet represents giving the owner (user) full permissions (1+2+4), the assigned user-group execute and read privileges (1+4), and other users only read permissions (4).
        </p>

        <!-- text Content 10 / Sub Content 4 :<br> -->
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;To change the ownership of a file, you would issue the &ldquo;chown&rdquo; command. Of note about file ownership in Unix based systems are that groups are denoted by any text after a dot (.). For example &ldquo;user.admin&rdquo; represents &ldquo;user&rdquo; owning the file with the file also part of group &ldquo;admin&rdquo;
        </p>

        <p>
            <ul><li>chown [owner] [file]</li></ul><br>
            &nbsp;&nbsp;&nbsp;&nbsp;Issuing this command will change the owner of [file] to a new [owner]. If no owner is specified, but a group is (denoted by either :[group] or .[group]) then only the user-group of the file changes
        </p>


        <p>
            <!-- Text Content 11:<br> -->
            &nbsp;&nbsp;&nbsp;&nbsp;Changing the permissions of a file requires issuing the &ldquo;chmod&rdquo; command. This command can specify permissions per user (owner), group, and other, and has two different syntaxes for operation.
        </p>

        <p>
        <ul><li>chmod ### [file]</li></ul><br>
            &nbsp;&nbsp;&nbsp;&nbsp;In this syntax, each # is defined by the additive value of the permissions (1=execute, 2=write, 4=read). The digit of the number denotes the category of user (User Group Other)<br> chmod [u/g/o]+[rwx]
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;In this syntax, you can define user, group, or other first, and then declare permissions to apply to each category as rwx (with &ldquo;-&rdquo; replacing each character that is a disallowed permission)
        </p>
        <!-- Quiz -->
        <!-- <p>Quiz Content<br> An interactive quiz made to look like a terminal.<br> Questions:
            <br> Navigate to [DIRECTORY NAME].<br> cd [DIRECTORY NAME]<br> List the contents of [DIRECTORY NAME].<br> ls [DIRECTORY NAME]<br> List the contents of [DIRECTORY NAME] in a list format (w/ permissions, etc.)<br> ls -la [DIRECTORY NAME] Note: ls -l is acceptable to, a does all files including hidden ones.<br> Change the file permissions for [FILENAME] to have full access.<br> chmod 777 [FILENAME]<br> Change the file permissions for [FILENAME]...<br> chmod 755 [FILENAME]<br> Change the owner of [FILENAME]...<br> chown &#8230;</p> -->
        <script>
            var quizId = 2;
        </script>
        <?php 
            $quiz_num = 2;
            include($path . "quiz.php");
        ?>

        
        <div class="spacing">
            <a href="publishing.php">Click here to go to the next topic!</a>
        </div>

    </div>
</div>

        <?php 
            include($path . "footer.php");
        ?>
    