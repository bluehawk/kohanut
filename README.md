# Kohanut is still very much in alpha.  It is not ready for use.

To install: (do not attempt)

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

Edit your application/config/database.php with your database settings

### Browse to /admin/install (not actually done yet)

### Move/rename/delete the install folder.

### Browse to /admin and login with the username 'admin' and the password you specified during install

