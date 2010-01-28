# Kohanut is still very much in alpha.  It is not ready for use.

## Overview

Kohanut is designed to give you easy access to creating pages, and drawing the navigations.

The basic idea is that each template has one or more "content areas".  A table in the database has a list of elements, what type they are, what page they are on, and which area they are in.  Each page is assembled, cached if desired, and displayed.

Kohanut does not have "themes".  It was designed so you can put your stylesheets, images, and scripts wherever you want, and use them easily from whatever elements you want. The idea is to allow the developers to do what they want.

## Installing:

### Download the Code

First, clone the repository and fetch all submodules

    git clone git://github.com/bluehawk/kohanut.git
    cd kohanut/
    git submodule init
    git submodule update
    
We need to make the logs and cache writable

    chmod 777 application/{logs,cache}
    
Next, either copy **modules/kohanut/kohanutres** to **kohanutres** or link it (linking is preferred)

    ln -s modules/kohanut/kohanutres/ kohanutres
    # or
    cp modules/kohanut/kohanutres kohanutres

### Configure Database

You should create a new user and database for use with kohanut, and then edit your **application/config/database.php** with those settings.

### Install

Browse to **/admin/install** and enter a password for the user 'admin', then click Install.

If you get any exceptions, make sure your config/database.php is correct, and that user can create tables.

### Move/rename/delete the install folder.

For safety and security, move or rename the **modules/kohanut/controllers/admin/install** folder.

### Login

Browse to /admin and login with the username 'admin' and the password you specified during install, and enjoy!

## Credits / Special Thanks

Entire Kohana team for such an amazing framework.
Shadowhand for sprig
Banks for sprig-mptt
Colonel-Rosa for his admin template

