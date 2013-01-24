mediawiki-skins-gmo
===================

GMO skin for MediaWiki

This is meant to be a checked out using git submodules, so:

    $ git clone https://gerrit.wikimedia.org/r/p/mediawiki/core wiki
    $ cd wiki
    $ git checkout 1.19.3
    $ git checkout -b wikimo-1.19.3
    $ cp ~/LOCALSETTINGSSTORAGE/LocalSettings.php .
    $ git submodule add -f https://github.com/mozilla/mediawiki-skins-gmo.git extensions/gmo
    $ git submodule foreach git checkout wikimo
    $ for i in extensions/gmo/skins/*; do ln -s ../$i skins ; done
    $ awk '/(path|url) =/ {print $3}' extensions/gmo/gitmodules | xargs -n 2 git submodule add -f
    $ svn co https://svn.wikimedia.org/svnroot/mediawiki/trunk/extensions/CreateBox extensions/CreateBox
    $ svn co https://smwaskapi.svn.sourceforge.net/svnroot/smwaskapi/trunk/SMWAskAPI extensions/SMWAskAPI
    $ chmod 1777 cache
