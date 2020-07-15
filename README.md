![maia web interface](https://github.com/einheit/maia-screenshots/blob/master/01-maia-login-screen.png "maia web interface")

This repo was derived from the technion fork of Maia mailguard some years ago.

Our goal is not to add any new features, but to be good stewards of the maia mailguard 1.0 branch, maintain compatibility with current Linux distributions, and provide a quick installation process, for the common case, as we await the arrival of maia 2.0

Maia is flexible and scalable. It can be deployed in a number of configurations, from everything on a single container, VM or physical instance, to banks of MTAs, banks of maiad/spamassasin servers, dedicated clamav and database instances, dedicated web server instances for the management interface.

 To get started, run "./install" and the script will try to detect the OS and offer the best option for installing on your system. 

Tested and verified install scripts are available for Centos/RHEL versions 6, 7, 8, Fedora 32, Debian 8, 8, 10, ubuntu 18.04 & 20.04. We've been trying to make SuSE work, without much success. Suse can and work for certain of the components, but the web interface is kaput, due to some persistent inability to play well with php and pear modules. If there are any SuSE engineers out there who could show us the secret to making it work, we'd love to add SuSE as a Tier One platform.

The install scripts are perhaps something of a kludge, but they save time and they work fairly well. The installer could fail to detect a supported OS, which, in and of itself is not a show stopper, as the install scripts are merely a convenience. It's safe to say that some or all maia components should be able to run on any Unix-like OS.

Contributed scripts for additional distros/platforms are welcome.

Updated Centos spamassassin rpms - https://github.com/einheit/maia-packages

More Screenshots - https://github.com/einheit/maia-screenshots

-- 

The README from the original technion fork is below:

The original license has been replaced with a GPL license with the blessing of the project's original creator. See license.txt for further information.

This fork brings the project in line with current deployments and technology, such as newer versions of PHP.

Some features are known to be untested and probably broken, such as authentication mechanisms other than "internal".

There are some new requirements on PHP modules, these are easiest identified by running the standard configtest.php.

I would greatly appreciate an updated installation guide for this fork, if anyone wanted to contribute.

# maia_mailguard_1.04a
