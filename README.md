This repo was derived from the technion fork of Maia mailguard some years ago.

The goal is a stable, working install of the updated mailguard 1.0 branch, with a quick installation process, for the common case. 

To get started, run "install.sh" and the script will detect the OS and
offer the best option for installing on your system. So far, Centos/RHEL
versions 7 and 8 are explicitly supported, while other platforms can be
set up manually, and the installer will be updated as automated install 
support for other unix-like OSes is added.

Contributed scripts for other platforms are welcome.

Updated Centos spamassassin rpms - https://github.com/einheit/maia-packages

-- 

The README from the original technion fork is below:

The original license has been replaced with a GPL license with the blessing of the project's original creator. See license.txt for further information.

This fork brings the project in line with current deployments and technology, such as newer versions of PHP.

Some features are known to be untested and probably broken, such as authentication mechanisms other than "internal".

There are some new requirements on PHP modules, these are easiest identified by running the standard configtest.php.

I would greatly appreciate an updated installation guide for this fork, if anyone wanted to contribute.

# maia_mailguard_1.04a
