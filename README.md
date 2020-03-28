This repo was derived from the technion fork of Maia mailguard some years ago.

The goal is a stable, working install of the updated mailguard 1.0 branch, with a quick installation process, for the common case. 

The current installer has been successfully tested on Centos 7 & 8, on bare metal, KVM VMs, and openvz containers. 

For Centos 7, run the script "install-centos7.sh"
For Centos 8, run the script "install-centos8.sh"

Contributed scripts for other platforms are welcome.
In the meantime, maia can be installed on other distros via the manual procedure.

Contributions are welcome.

-- 

The README from the original technion fork is below:

The original license has been replaced with a GPL license with the blessing of the project's original creator. See license.txt for further information.

This fork brings the project in line with current deployments and technology, such as newer versions of PHP.

Some features are known to be untested and probably broken, such as authentication mechanisms other than "internal".

There are some new requirements on PHP modules, these are easiest identified by running the standard configtest.php.

I would greatly appreciate an updated installation guide for this fork, if anyone wanted to contribute.

# maia_mailguard_1.04a
