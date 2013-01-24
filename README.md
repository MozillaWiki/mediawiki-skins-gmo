mediawiki-skins-gmo
===================

GMO skin for MediaWiki

This is meant to be a checked out using git submodules, so:

  $ git clone https://gerrit.wikimedia.org/r/p/mediawiki/core wiki
  $ cd wiki
  $ git checkout 1.19.3
  $ git checkout -b wikimo-1.19.3
  $ cp ~/LOCALSETTINGSSTORAGE/LocalSettings.php .
  $ git submodule add https://github.com/mozilla/mediawiki-skins-gmo.git extensions/gmo
  $ for i in extensions/gmo/skins/*; do ln -s ../$i skins ; done
  $ awk '/(path|url) =/ {print $3}' extensions/gmo/gitmodules | xargs -n 2 git submodule add -f

