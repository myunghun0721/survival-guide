<?php 
    $path = "../";
    $page_title = "Publishing - SSH and SFTP";
    include($path . "header.php");
?>

<div class="contentpg-container">
    <div class="content-nav">
        <ul>
            <!-- Change these according to the subtopic headers. -->
            <li><a href="#overview">FTP and SSH</a></li>
            <li><a href="#ssh">SSH Commands</a></li>
            <li><a href="#sftp">SFTP Commands</a></li>
            <li><a href="#remote">Remote Shells</a></li>
            <li><a href="#summary">Summary and Final Word</a></li>
        </ul>
    </div>

    <div class="content-container">
        <p>
            <h1>PUBLISHING - SFTP, SSH, AND REMOTE SHELLS</h1>
        </p>

        <!-- title -->
        <p>
            <h2>An Intro to the Secure Shell and File Transfer</h2>
            <h3 id="overview">Overview:</br></h3> 
        <!-- text Content 1 / subcontent 1:</br> -->
            &nbsp;&nbsp;&nbsp;&nbsp;As a web developer, two of the most important technologies you will use everyday in a Unix or Linux environment are SFTP and SSH. But, what are SFTP and SSH, and what do they stand for?
        </p>

        <!-- text Content 2</br> -->
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;To start, SSH refers to a &ldquo;Secure Shell&rdquo;. SSH as a protocol provides a secure way to access the shell of a remote system (such as a web server) to enable you to make changes from wherever you may be. Users can choose to connect via SSH to their system&rsquo;s shell through either terminal usage, automated jobs, or graphical user interfaces. Interfacing via SSH gives the user the ability to use the terminal as if they were at the server physically, as well as encrypts these actions to ensure privacy and reliability.
            </p>

        <!-- text Content 3</br> -->
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;Alongside SSH follows SFTP, the &ldquo;Secure Shell File Transfer Protocol&rdquo;. SFTP allows for users to securely upload, download, copy, and transfer files between systems. Similarly to SSH, SFTP functions can be initialized via a terminal, remote client, or through automated jobs and scripts.&rdquo;
            </p>

        <!-- text content 4/5 -->
        <p>
            <h2 id="ssh">Command Reference - SSH</h2>
        <!-- text Content 5 / sub content 2:</br> -->
            Below are some commands you can input into a terminal or ssh client to get you started with SSH and connecting to your remote system:
            </p>

        <!-- text Content 6 -->
        <p>
            <table style="width:100%">
                <tr>
                <th>ssh [address][@username]</th>
                <td>
                    <p>
                        You can connect to systems running a standard OpenSSH package with this command issued either in a standard Linux terminal or ssh client. 
                        In this syntax you would replace [address] with the address of the server you are trying to connect to, and optionally append a username after an “@” symbol.
                        </p>
                        Alternatively, you can use the “-l” argument and include a username as follows:
                        <p>ssh -l [username] [address]</p>
                    </td>
                </tr>
                <tr>
                <th>Other arguments and constraints</th>
                <td><p>The address to connect to an ssh server can either be a domain (such as “abc.com”, etc.) or an ipv4/6 address with an optionally specified port. By default, ssh operates through port 22</p>
                <p>Ports can be defined by argument through -p: ssh -p [port] [address]</p></td>
                <p>IP version can also be defined by argument as either -4 or -6 for IPv4 and IPv6 respectively: ssh [-4/-6] [address]
                </p>
                </tr>
            </table>
            </p>

        <p>
            For more information, and to find where these commands were found, please visit:</br> 
            <a href="https://www.ssh.com/academy/ssh/command">https://www.ssh.com/academy/ssh/command</a>
            </p>

        <!-- Sub Content 3 -->

        <p>
            <h2 id="sftp">SFTP</h2>
            </p>

        <!-- text Content 7:</br> -->
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;Below are some commands you can input into a Linux terminal or ssh client to get you started with SFTP and file transfer. Be aware that most SFTP operations are more optimized through graphical user interfaces, and that usage through the terminal may result in requiring further knowledge on authorizing public keys. For more information on that, see here:</br><a href="https://www.ssh.com/academy/iam/ssh-key-management">https://www.ssh.com/academy/iam/ssh-key-management</a></p>

        <!-- text Content 8:</br> -->
        <p>
        <table style="width:100%">
                <tr>
                <th>scp [file] [host]:[path]</th>
                <td><p>Issuing this command into a standard Linux terminal running the OpenSSH package will connect to a host's address, designated by [host], and transfer the selected [file] to a designated [path] on the user's system.</p>
                    Note: both [file] and [path] can optionally be either absolute or relative paths depending on context (current working directories, permissions, etc.)</td>
                </tr>
                <tr>
                <th>scp [host]:[file] [path]</th>
                <td><p>Issuing the scp command in this syntax will copy a file at the address defined by [file] to a designated [path] on the user's system.</p></td>
                </tr>
                <tr>
                <th>scp -r [host]:[path]/[directory] .</th>
                <td>Issuing the scp command with the -r argument will recursively copy all files in [path] at the host's address ([host]) to a new [directory] in the user's current working directory (denoted by “.”)
                    <p>Note:
                    “Recursively” means to go through all sub-levels of a tree. You would not only be copying the first level of files in a path/directory, but all of the files and sub-directories it contains as well.</p>
                </td>
                </tr>
            </table> 
        </p>

        <p>
            For more information, and to find where these commands were found, please visit:</br> <a href="https://www.ssh.com/academy/ssh/sftp">https://www.ssh.com/academy/ssh/sftp</a>
        </p>

        <!-- Sub Content 4 -->

        <!-- text Content 9:</br> -->
        <p>
            <h2 id="remote">Remote Shell Clients</h2>
            &nbsp;&nbsp;&nbsp;&nbsp;Although the ability to connect to a Unix based system remotely and transfer files securely exists through the terminal, many developers prefer to use graphical clients to optimize these operations and extend compatibility.</br></br>
            &nbsp;&nbsp;&nbsp;&nbsp;SSH clients such as PuTTY (link: <a href="https://www.chiark.greenend.org.uk/~sgtatham/putty/">https://www.chiark.greenend.org.uk/~sgtatham/putty/</a>) , provide an interface for clients running non-Unix based operating systems such as Windows to connect to remote Unix-based systems running an SSH package such as OpenSSH. Most of the interfaces for clients such as this are straightforward, opting usually to directly emulate a Linux terminal and include the functionality of shells such as BASH, with options to manage keys, certificates, and address management as added bonuses.
        </p>

        <!-- text Content 10:</br> -->
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;On the file transfer side of things, SFTP clients are much more varied and each operating system may have a unique flavor that will benefit your needs more than another. On Windows systems, two popular free, open source clients you may want to use include WinSCP (link: <a href="https://winscp.net/eng/index.php">https://winscp.net/eng/index.php</a>) and FileZilla (link: <a href="https://filezilla-project.org/">https://filezilla-project.org/</a>). Both clients provide interfaces by which users can establish separate working directories, view file trees on client and host systems, manage connections, keys, and paths, and more effectively conduct file transfers and operations than through a command line interface.
            
        </p>

        <!-- Sub Content 5 -->

        <!-- text Content 11:</br> -->
        <p>
            <h2 id="summary">Accessibility and Summary</h2> 
            &nbsp;&nbsp;&nbsp;&nbsp;On a final note, we at Team Akrasia would like to leave you with a word on making sure your site, app, product, or whatever you may produce be as accessible and secure as possible, and to exercise caution and respect for what you put out into the world.
            </br></br>&nbsp;&nbsp;&nbsp;&nbsp;In general, in terms of design, consider the needs of every user. To state the obvious, treat your visual designs to healthy doses of contrast, readability, and clarity, make your content friendly and valuable, and of course consider the needs of every user you possibly can.
            </br></br>&nbsp;&nbsp;&nbsp;&nbsp;When we come together and enable each other to learn, work and achieve, we bring about things greater than ourselves. No perspective is without value, and no barriers should be enacted to prevent anything less than fully embracing giving each user a chance to be able to engage, learn, and participate.
            </br></br>&nbsp;&nbsp;&nbsp;&nbsp;So, in short, with all of this great power, knowledge, and embraced perspective, comes the responsibility of using it as effectively as possible.
            </br></br>Cliche? We know.
            </br></br>In any case, stay safe and have fun out there traveler!
            </p>

        <!-- Quiz Content</br> An interactive terminal (same as for &ldquo;Terminal&rdquo; section, just this time on SSH/SFTP)</br> Questions:
            </br> Connect to [ADDRESS] via ssh with the username &ldquo;USER&rdquo;.</br> Either answer:</br> ssh [ADDRESS]@USER </br> ssh -l USER [ADDRESS]</br> Copy a file from the home directory of the host to your home directory</br> scp [host_address]:~/[FILENAME] ~</br> Transfer a file from the your home directory to the host&rsquo;s home directory</br> scp ~/[FILENAME] [host_address]:~</br> Copy all files recursively from the /home/docs directory of the host to your /home/docs directory</br> scp -r [host_address]:/home/docs/ /home/docs</br> -->
        <script>
            var quizId = 3;
        </script>
        <?php 
            $quiz_num = 3;
            include($path . "quiz.php");
        ?>
    </div>
</div>

<?php 
    include($path . "footer.php");
?>